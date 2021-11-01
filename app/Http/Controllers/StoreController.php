<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BillingController;
use App\Http\Controllers\ShippingController;
use Auth;
use Cookie;
use DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Redirect;
use Request;
use Response;
use Route;
use Session;
use Stripe\Stripe;

class StoreController extends Controller
{
    protected $stripe;

    public function __construct()
    {
        $this->stripe = new Stripe();
        $this->shipping = new ShippingController();

        \Stripe\Stripe::setApiKey('sk_test_O4sF4Ob5g1yr7fTerTZqC2Ii');
    }

    public function get_underconstruction()
    {
        return view('errors.store-underconstruction');
    }

    public function get_redirect_shopify()
    {
        return redirect('https://shop.cadmicro.com');
    }

    public function get_index()
    {
        $categories = DB::table('categories')
            ->where('parent_id', '=', 1)
            ->where('group', '=', 'store')
            ->where('visible', '=', 1)
            ->get();

        $childCats = new Collection();

        foreach ($categories as $parent) {
            $childCats = $childCats->merge(DB::table('categories')
                    ->where('parent_id', '=', $parent->id)
                    ->where('group', '=', 'store')
                    ->where('visible', '=', 1)
                    ->get());
        }

        return view('pages.store.index', ['categories' => $childCats, 'calcCart' => $this->calcCart()]);
    }

    public function get_catalog()
    {
        return view('pages.store.catalog', ['calcCart' => $this->calcCart()]);
    }

    public function get_category($cat)
    {
        $category = DB::table('categories')
            ->where('slug', '=', $cat)
            ->first();

        if ($category != null) {
            if ($category->parent_id != 1) {
                $id = $category->id;
                $products = DB::table('products')
                    ->whereRaw('FIND_IN_SET(?,category_id)', [$id])
                    ->where('status', 'PUBLISHED')
                    ->get();

                foreach($products as $k=>$product){
                    if($product->currency == "USD"){
                        if(!empty($product->sale_price)){
                            $products[$k]->sale_price_cad =  calcExchangeRate($product->sale_price, "CAD", "USD");
                        }
                        if(!empty($product->price)){
                            $products[$k]->price_cad =  calcExchangeRate($product->price, "CAD", "USD");
                        }
                    }
                }
                return view('pages.store.category', ['current_category' => $category, 'products' => $products, 'calcCart' => $this->calcCart()]);
            } else {
                $categories = DB::table('categories')
                    ->where('parent_id', '=', $category->id)
                    ->where('group', '=', 'store')
                    ->where('visible', '=', '1')
                    ->get();
                return view('pages.store.category', ['current_category' => $category, 'categories' => $categories, 'calcCart' => $this->calcCart()]);
            }
        }
    }

    public function get_productPage($category, $product)
    {
        $product = DB::table('products')
            ->where('slug', '=', $product)
            ->where('status', '=', 'PUBLISHED')
            ->first();

        if ($product !== null) {
            $category = DB::table('categories')
                ->where('slug', '=', $category)
                ->where('group', '=', 'store')
                ->where('visible', '=', '1')
                ->first();

            $product->thumbnail_large = thumbnail($product->thumbnail);
            $product->thumbnail = thumbnail($product->thumbnail, 'cropped');

            if($product->currency == "USD"){
                if(!empty($product->sale_price)){
                    $product->sale_price_cad =  calcExchangeRate($product->sale_price, "CAD", "USD");
                }
                if(!empty($product->price)){
                    $product->price_cad =  calcExchangeRate($product->price, "CAD", "USD");
                }
            }

            $relatedCats = explode(",", $product->related_categories);
            $relatedCats[] = $product->category_id;
            $relatedProds = DB::table("products")->whereIn('category_id', $relatedCats)
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.id',"!=",$product->id)
            ->select('products.*', 'categories.name as category_name')
            ->where('products.status', 'PUBLISHED');

            $relatedProds = $relatedProds->get()->shuffle()->take(6);

            return view('pages.store.product', ['current_category' => $category, 'current_product' => $product, 'calcCart' => $this->calcCart(), 'related'=>$relatedProds]);
        }

        return back();
    }

    public function getProductDetails()
    {
        return $this->getProductDetails_id(Input::get('pid'));
    }

    public function getProductDetails_id($pid)
    {
        $product = DB::table('products')
            ->where('id', '=', $pid)
            ->first();

        $category = DB::table('categories')
            ->where('id', '=', $product->category_id)
            ->where('group', '=', 'store')
            ->where('visible', '=', '1')
            ->first();

        $product->thumbnail_large = thumbnail($product->thumbnail);
        $product->thumbnail = thumbnail($product->thumbnail, 'cropped');
        return array("product" => $product, "category" => $category);
    }

    public function get_product_by_id($pid)
    {
        $product = DB::table('products')->where('id', '=', $pid)->first();
        $category = DB::table('categories')->where('id', '=', $product->category_id)->first();

        return redirect()->route('store-catalog2', ['category' => $category->slug, 'product' => $product->slug]);
    }

    public function getCartId()
    {
        $session_id = Session::getId();
        $user_id = null;
        $cart_id = null;
        $cart = null;

        if (Request::hasCookie('cart')) {
            $cart_id = Cookie::get("cart");
        } else if (isset($session_id)) {
            if (DB::table('carts')->where('session_id', '=', $session_id)->exists()) {
                $cart_id = DB::table('carts')->where('session_id', '=', $session_id)->pluck('id')->first();
            }
        }
        if ($cart_id != null) {
            if (DB::table('carts')->where('id', '=', $cart_id)->count() > 0) {
                return $cart_id;
            } else {
                Cookie::queue(Cookie::forget('cart'));
            }
        }

        if ($cart_id == null) {
            $cart_id = DB::table('carts')->insertGetId(
                ['user_id' => $user_id,
                    'session_id' => $session_id,
                    'ip' => getIp(),
                ]
            );

            Cookie::queue(Cookie::make('cart', $cart_id, time() + 86400));
        }

        return $cart_id;
    }

    public function countCart($cart_id)
    {

        $cart = DB::table('cart_items')
            ->where('cart_id', '=', $cart_id)->get();

        $count = 0;

        if ($cart->count() > 0) {
            foreach ($cart as $item) {
                $count += $item->quantity;
            }
        }

        if (DB::table('carts')->where('id', "=", $cart_id)->exists()) {
            if ($count > 0) {
                DB::table('carts')
                    ->where('id', "=", $cart_id)
                    ->update(['num_items' => $count]);
            } else {
                $this->deleteCart($cart_id);
            }
        }

        return $count;
    }

    public function addToCart(Request $request)
    {
        $cart_id = $this->getCartId();

        $cart_items = null;
        $item_id = Input::get('pid');
        $quantity = Input::get('quantity');
        $response = "";

        $cartItem = DB::table('cart_items')
            ->where('cart_id', '=', $cart_id)
            ->where('item_id', '=', $item_id)
            ->first();

        $product = DB::table('products')
            ->where('id', '=', $item_id)
            ->first();

        if ($product != "") {
            $maxQuantity = $product->quantity_max;

            if ($cartItem != "") {
                if ($cartItem->quantity + $quantity > $maxQuantity && $maxQuantity > 0) {
                    $quantity = $maxQuantity;
                    DB::table('cart_items')
                        ->where('cart_id', '=', $cart_id)
                        ->where('item_id', '=', $item_id)
                        ->update(['quantity' => $quantity]);

                    $response = array("result" => false, "msg" => "There are only <b>" . $quantity . "</b> " . $product->title . "(s) available!");
                } else {
                    DB::table('cart_items')
                        ->where('cart_id', '=', $cart_id)
                        ->where('item_id', '=', $item_id)
                        ->increment('quantity', $quantity);

                    $response = array("result" => true, "msg" => "Successfully added <strong>" . $quantity . "</strong> x <strong>" . $product->title . "</strong> to your cart!");
                }
            } else {
                if ($quantity > $maxQuantity && $maxQuantity > 0) {
                    $quantity = $maxQuantity;
                }

                DB::table('cart_items')
                    ->insert([
                        'cart_id' => $cart_id,
                        'item_id' => $item_id,
                        'quantity' => $quantity,
                    ]);

                $response = array("result" => true, "msg" => "Successfully added <strong>" . $quantity . "</strong> x <strong>" . $product->title . "</strong> to your cart!");
            }
        } else {
            DB::table('cart_items')
                ->where('id', '=', $cart_id)
                ->where('item_id', '=', $item_id)
                ->delete();

            $response = array("result" => false, "remove" => true, "msg" => "Product is no longer available!");
        }

        $quantity = DB::table('cart_items')
            ->where('cart_id', '=', $cart_id)
            ->where('item_id', '=', $item_id)
            ->pluck('quantity');

        $response["quantity"] = $quantity;
        $response["total"] = $this->calcCartSubtotal($cart_id);
        $response["count"] = $this->countCart($cart_id);

        return response($response);
    }

    public function removeFromCart(Request $request)
    {
        $item_id = Input::get('pid');
        $cart_id = $this->getCartId();

        DB::table('cart_items')
            ->where('cart_id', '=', $cart_id)
            ->where('item_id', '=', $item_id)
            ->delete();

        $product = DB::table('products')
            ->where('id', '=', $item_id)
            ->first();

        $response = array("result" => "success", "msg" => "Successfully removed <strong>" . $product->title . "</strong> from your cart!");

        $calcCart = $this->calcCart($cart_id);

        if($calcCart->num_items <= 0){
            Cookie::queue(Cookie::forget('coupon'));
        }

        $response["count"] = $calcCart->num_items;
        $response['subtotal'] = $calcCart->subtotal;
        $response['total'] = $calcCart->total;
        $response['coupon'] = $calcCart->coupon;

        return response($response);
    }

    public function updateQuantity(Request $request)
    {
        $item_id = Input::get('pid');
        $quantity = Input::get('quantity');
        $cart_id = $this->getCartId();

        $product = $this->getProductDetails_id($item_id)['product'];

        $maxQuantity = $product->quantity_max;

        if ($quantity > $maxQuantity && $maxQuantity > 0) {
            $quantity = $maxQuantity;
        }

        DB::table('cart_items')
            ->where('cart_id', '=', $cart_id)
            ->where('item_id', '=', $item_id)
            ->update(['quantity' => $quantity]);

        $itemTotal = 0;

        $product->price = $product->sale_price != "" ? $product->sale_price : $product->price;

        $itemTotal = $product->price * $quantity;

        $response = array("itemTotal" => $itemTotal, "quantity" => $quantity,
            "result" => "success");

        $response["num_items"] = $this->countCart($cart_id);

        return response($response);
    }

    public function checkout()
    {
        $cart_id = $this->getCartId();
        $coupon = Cookie::get('coupon');
        $return = array();
        $details = "";
        $coupon = "";
        $check = "";

        if ($coupon != "") {
            $details = DB::table('coupons')
                ->where('name', '=', $coupon)
                ->first();
            $check = $this->checkCouponApplicable($coupon);

            if (!$check) {
                Cookie::queue(
                    Cookie::forget('coupon')
                );
            }
        }

        if ($this->countCart($cart_id) <= 0) {
            return redirect('/store/cart')
                ->with("error", "Your cart is empty, cannot proceed to checkout!")
                ->with("error-type", "danger")
                ->with("details", $details)
                ->with("coupon", $coupon)
                ->with("coupon_status", $check);
        }

        if (Auth::check() || session()->has('guest_checkout') || Cookie::get('guest_checkout') != "") {
            return Redirect::to(route('checkout-step'))
                ->with("details", $details)
                ->with("coupon", $coupon)
                ->with("coupon_status", $check)
                ->with("calcCart", $this->calcCart());
        }

        return view('pages.store.checkout_login', ['calcCart' => $this->calcCart()]);
    }

    public function checkoutSteps()
    {
        if (!Auth::check() && Route::currentRouteName() != "checkout-guest") {
            Session::reflash();
            return redirect('/store/checkout/guest');
        }

        $coupon = Cookie::get('coupon');
        $return = array();
        $cart_id = $this->getCartId();
        $details = "";
        $check = "";
        $cart_tax = 0;
        $cart_shipping = 0;
        $card = null;
        $customer = null;
        $errors = array();

        $checkoutForm = (new BillingController)->getSavedCheckoutForm();
        $checkout_step = $checkoutForm->step;

        if ($checkoutForm->cus_token != "") {
            try {
                $customer = \Stripe\Customer::retrieve($checkoutForm->cus_token);
                $card = $customer->sources->retrieve($checkoutForm->card_token);
            } catch (Stripe_InvalidRequestError $e) {
                $errors[] = $e->getMessage();
            } catch (\Stripe\Error\Card $e) {
                $errors[] = $e->getMessage();
            } catch (\Stripe\Error\RateLimit $e) {
                $errors[] = $e->getMessage();
            } catch (\Stripe\Error\InvalidRequest $e) {
                $errors[] = $e->getMessage();
            } catch (\Stripe\Error\Authentication $e) {
                $errors[] = $e->getMessage();
            } catch (\Stripe\Error\ApiConnection $e) {
                $errors[] = $e->getMessage();
            } catch (\Stripe\Error\Base $e) {
                $errors[] = $e->getMessage();
            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            }

            if (count($errors) > 0) {
                $checkoutData = DB::table('checkouts')
                    ->where('session_id', '=', session()->getId())
                    ->update([
                        'stripe_token' => '',
                        'cus_token' => '',
                        'card_token' => '',
                    ]);
            }
        }

        $checkout_step_error = Cookie::get('checkout_step_error') !== null ? unserialize(Cookie::get('checkout_step_error')) : array(false, false, false);
        $checkout_step_class = array();

        for ($i = 0; $i < 3; $i++) {
            if ($i == $checkout_step - 1) {
                $checkout_step_class[] = 'active';
            } else if ($i < $checkout_step - 1) {
                $checkout_step_class[] = 'completed';
            } else {
                $checkout_step_class[] = 'locked';
            }
            if ($checkout_step_error[$i]) {
                $checkout_step_class[$i] .= ' error';
            }
        }

        $cart_items = DB::table("cart_items")->where('cart_id', '=', $cart_id)->get();
        $products_detail = array();
        $pp = 0;
        foreach ($cart_items as $item) {
            $prod = DB::table('products')
                ->where('id', '=', $item->item_id)
                ->first();
            for ($i = 0; $i < $item->quantity; $i++) {
                $p = clone $prod;
                $p->{'uid'} = $pp;
                $products_detail[] = $p;
                $pp++;
            }
        }

        usort($products_detail, function ($a, $b) {
            return $a->weight < $b->weight;
        });

        if ($coupon != "") {
            $details = DB::table('coupons')
                ->where('name', '=', $coupon)
                ->first();
            $check = $this->checkCouponApplicableWithProducts($products_detail, $details->name);

            if (!$check) {
                Cookie::queue(
                    Cookie::forget('coupon')
                );
            }
        }

        if ($this->countCart($cart_id) <= 0) {
            return redirect('/store/cart')
                ->with("error", "Your cart is empty, cannot proceed to checkout!")
                ->with("error-type", "danger");
        }

        $shipping_details = null;

        if ($checkoutForm->ship_method != "" && $checkoutForm->ship_province != "" && $checkoutForm->ship_postal != "" && $checkoutForm->ship_tel != "" &&            $checkoutForm->ship_address_1 != "" && $checkoutForm->ship_city != "") {
            $shipping_details = $this->shipping->getFullEstimate($products_detail, (array) $checkoutForm, $details, $check);
        }

        Cookie::queue('checkout_step_class', serialize($checkout_step_class), 30);

        if ($coupon != "") {
            return view('pages.store.checkout_steps')
                ->with('coupon_status', $check)
                ->with('details', $details)
                ->with('coupon', $coupon)
                ->with('checkout_step', $checkout_step)
                ->with("checkout_step_class", $checkout_step_class)
                ->with("checkout", $checkoutForm)
                ->with("shipping_details", $shipping_details!=null? $shipping_details['shippingQuote'] : "")
                ->with("card", $card)
                ->withErrors($errors)
                ->with('calcCart', $this->calcCart());
        } else {

            return view('pages.store.checkout_steps')
                ->with('checkout_step', $checkout_step)
                ->with("checkout_step_class", $checkout_step_class)
                ->with("checkout", $checkoutForm)
                ->with("shipping_details", $shipping_details!=null? $shipping_details['shippingQuote'] : "")
                ->with("card", $card)
                ->withErrors($errors)
                ->with('calcCart', $this->calcCart());
        }
    }

    public function cart()
    {

        $calcCart = $this->calcCart();

        return view('pages.store.cart', ["calcCart" => $calcCart]);
    }

    public function addCoupon(Request $request)
    {
        $coupon = Input::get('couponinput');
        $response = "";

        if (Cookie::get('coupon') !== null) {
            if ($coupon == Cookie::get('coupon')) {
                $response = array("coupon" => $coupon, "result" => "warning", "title" => 'COUPON ALREADY APPLIED', "msg" => 'The coupon code "' . $coupon . '" was already applied to your cart!');

                return response($response);
            }
        }

        if ($this->checkCouponApplicable($coupon)) {

            $details = DB::table('coupons')
                ->where('name', '=', $coupon)
                ->first();

            $response = array("coupon" => $coupon, "details" => $details, "result" => "success", "title" => 'COUPON APPLIED', "msg" => 'The coupon code "' . $coupon . '" has been applied to your cart!');

            return response($response)->withCookie(Cookie::forever('coupon', $coupon));
        } else {
            $response = array("coupon" => $coupon, "result" => "warning", "title" => 'INVALID COUPON', "msg" => 'The coupon code "' . $coupon . '" is invalid, does not apply to your cart, or is no longer available.');

            return response($response);
        }
    }

    public function checkCouponApplicableWithProducts($products, $couponName)
    {
        $coupon_products = array();
        if ($couponName != "") {
            $coupons = DB::table('coupons')
                ->where('name', '=', $couponName)
                ->first();

            if ($coupons) {
                if ($coupons->status == "ACTIVE") {
                    $applicable = true;
                    //Does coupon apply for specific users?
                    if(!empty($coupons->user_id)){
                        $applicable = false;
                        if (Auth::check()) {
                            $users_applicable = explode(",",$coupons->user_id);
                            if(count($users_applicable) > 0){
                                foreach($users_applicable as $id){
                                    if(Auth::user()->id == $id){
                                        $applicable = true;
                                        break;
                                    }
                                }
                            }
                        }
                    }

                    //Is the coupon still active within specified date?
                    if ($applicable && time() >= strtotime($coupons->active_date) && time() <= strtotime($coupons->expire_date) && $coupons->max_uses >= 0) {
                        if (($coupons->uses < $coupons->max_uses && $coupons->max_uses != 0) || $coupons->max_uses == 0) {
                            if (count($products) > 0) {
                                $max_apply = $coupons->max_apply;
                                $count_prod = 0;
                                foreach ($products as $product) {
                                    if ($max_apply > 0 && $count_prod == $max_apply) {
                                        break;
                                    }
                                    $product = (object) $product;
                                    $cat = DB::table('categories')
                                        ->where('id', '=', $product->category_id)
                                        ->first();
                                    $cat2 = DB::table('categories')
                                        ->where('id', '=', $cat->parent_id)
                                        ->first();
                                    if ($cat) {
                                        $apply = explode(",", $coupons->applies_to);
                                        if (count($apply) > 0) {
                                            foreach ($apply as $a) {
                                                if ($product->slug == $a || $cat->slug == $a) {
                                                    $coupon_products[] = $product;
                                                    $count_prod++;
                                                    break;
                                                }
                                                if ($cat2) {
                                                    if ($cat2->slug == $a) {
                                                        $coupon_products[] = $product;
                                                        $count_prod++;
                                                        break;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        if (count($coupon_products) == 0) {
            Cookie::queue(
                Cookie::forget('coupon')
            );
        }
        return $coupon_products;
    }

    public function calcTotal()
    {
        if ($this->checkCouponApplicable(Cookie::get('coupon')) && Cookie::get('coupon') !== null) {
            $response = array("result" => "success", "total" => (new BillingController)->getCartTotal());
        } else {
            $response = array("result" => "false", "total" => (new BillingController)->getCartTotal());
        }
        return response($response);
    }

    public function postCalcCart()
    {
        $cart = $this->calcCart();
        echo json_encode($cart);
    }

    public function calcCartSubtotal($cart_id = null)
    {
        $cart_total = 0;

        if ($cart_id == null) {
            $cart_id = $this->getCartId();
        }

        if ($cart_id != null && $cart_id != "") {
            $cart_total = 0;
            $cart = DB::table("carts")->where('id', '=', $cart_id)->first();
            if ($cart != "") {
                $cart_items = DB::table("cart_items")->where('cart_id', '=', $cart_id)->get();
                if ($cart_items->count() > 0) {
                    foreach ($cart_items as $item) {
                        $product = DB::table('products')
                            ->where('id', '=', $item->item_id)
                            ->first();
                        if (!empty($product)) {
                            if($product->currency != "CAD"){
                                $product->price_ex = calcExchangeRate($product->price, "CAD", "USD");
                                $product->sale_price_ex = calcExchangeRate($product->sale_price, "CAD", "USD");
                            }else{
                                $product->price_ex = $product->price;
                                $product->sale_price_ex = $product->sale_price;
                            }

                            if(!empty($product->sale_price)){
                                $product->price = (float) $product->sale_price;
                                $product->price_ex = (float) $product->sale_price_ex;
                            }
                            $cart_total += $item->quantity * $product->price_ex;
                        }
                    }
                } else {
                    return $cart_total;
                }
            }
        }
        return $cart_total;
    }

    public function deleteCart($cart_id)
    {
        DB::table('carts')
            ->where('id', '=', $cart_id)
            ->delete();
        DB::table('cart_items')
            ->where('cart_id', '=', $cart_id)
            ->delete();

        Cookie::queue(
            Cookie::forget('cart')
        );
    }

    public function deleteCartItems($cart_id)
    {
        DB::table('cart_items')
            ->where('cart_id', '=', $cart_id)
            ->delete();
    }
    public function deleteCartItem($cart_id, $itemid)
    {
        DB::table('cart_items')
            ->where('cart_id', '=', $cart_id)
            ->where('item_id', '=', $itemid)
            ->delete();

        if ($this->countCart($cart_id) == 0) {
            deleteCart($cart_id);
        }
    }

    public function calcCart($cart_id = null)
    {
		$cart_total = 0;
		$cart_items = null;
        $num_items = 0;
        $products = array();
        $couponApplicable = false;
        if (is_null($cart_id)) {
            $cart_id = $this->getCartId();
        }
        if (!empty($cart_id)) {
            $coupon = $this->getCouponDetails();
            $cart = DB::table("carts")->where('id', '=', $cart_id)->first();
            if (!empty($cart)) {
                $cart_items = DB::table("cart_items")->where('cart_id', '=', $cart_id)->get();
                if ($cart_items->count() > 0) {
                    foreach ($cart_items as $item) {
                        $product = DB::table('products')
                            ->where('id', '=', $item->item_id)
                            ->first();

                        if($product->currency != "CAD"){
                            $product->price_ex = calcExchangeRate($product->price, "CAD", "USD");
                            $product->sale_price_ex = calcExchangeRate($product->sale_price, "CAD", "USD");
                        }else{
                            $product->price_ex = $product->price;
                            $product->sale_price_ex = $product->sale_price;
                        }

                        if (!empty($product)) {
                            if(!empty($product->sale_price)){
                                $product->price = (float) $product->sale_price;
                                $product->price_ex = (float) $product->sale_price_ex;
                            }
                            $cart_total += $item->quantity * $product->price_ex;
                            $product->qty = $item->quantity;
                            $product->thumbnail = thumbnail($product->thumbnail);
                            $products[] = $product;
                        } else {
                            deleteCartItem($cart_id, $item->item_id);
                        }
                    }
                } else {
                    return (object) [
                        "num_items" => 0,
                        "subtotal" => 0,
                        "products" => null,
                        "total" => 0,
                        "coupon" => $coupon,
                        "coupon_status" => false,
                    ];
				}
				if(!empty($coupon)){
					$couponName = isset($coupon->name) && $coupon->name != "" ? $coupon->name : "";
					$couponApplicable = $this->checkCouponApplicableWithProducts($products, $couponName);
					$cart_total = $this->calcCouponTotal($products, $cart_total, $coupon, $couponName, $couponApplicable);
				}
            }

            $cart_subtotal = $cart_total;

            $data = (array) [
                "num_items" => $this->countCart($cart_id),
                "products" => $products,
                "subtotal" => $cart_subtotal,
                "total" => $cart_total,
                "coupon" => $coupon,
                "coupon_status" => $couponApplicable,
            ];
            return (object) $data;
        }
        return (object) [
            "num_items" => 0,
            "products" => null,
            "subtotal" => 0,
            "total" => 0,
            "coupon" => $coupon,
            "coupon_status" => false,
        ];
    }

    public function calcCouponTotal($products, $cart_total, $details, $couponName, $couponApplicable)
    {
        if ($couponApplicable) {
            if ($details->type == "VALUE") {
                $cart_total -= $details->value;
            } else if ($details->type == "PERCENT") {
                if ($details->apply_for == 'TOTAL') {
                    $cart_total -= $cart_total * ($details->value / 100);
                } else {

                    $applies = explode(",", $details->applies_to);
                    $n = 0;
                    $amount = 0;

                    $allCats = DB::table('categories')->where('group', '=', 'store')->get();

                    usort($products, "sort_by_price_DESC");

                    /* GET A LIST OF APPLICABLE CATEGORIES FOR COUPON */
                    $categories = array();
                    //$cats = array();

                    if ($allCats->count() > 0 && count($applies) > 0) {
                        foreach ($applies as $a) {
                            foreach ($allCats as $a2) {
                                if ($a == $a2->slug) {
                                    $parent = $a2->id;
                                    $categories[] = $a2;
                                    //  $cats[] = $a2->slug;

                                    foreach ($allCats as $c) {
                                        if ($c->parent_id == $parent) {
                                            $parent = $c->parent_id;
                                            $categories[] = $c;
                                            $cats[] = $c->slug;
                                        }
                                    }
                                    break;
                                }
                            }
                        }
                    }
                    foreach ($products as $p) {

                        if($p->currency != "CAD"){
                            $p->price = calcExchangeRate($p->price, "CAD", "USD");
                            $p->sale_price = calcExchangeRate($p->sale_price, "CAD", "USD");
                        }
                        if(!empty($p->sale_price)){
                            $p->price = (float) $p->sale_price;
                        }

                        if (count($categories) > 0) {
                            foreach ($categories as $catts) {
                                if ($p->category_id == $catts->id) {
                                    //  $cats[] = $p->slug;
                                    if ($details->max_apply == 0) {
                                        $amount += $p->price * ($details->value / 100);
                                    } else if ($n < $details->max_apply) {
                                        $amount += $p->price * ($details->value / 100);
                                    } else {
                                        break;
                                    }
                                    $n++;
                                    break;
                                }
                            }
                        } else {
                            foreach ($applies as $a) {
                                if ($p->slug == $a) {
                                    //  $cats[] = $p->slug;
                                    if ($details->max_apply == 0) {
                                        $amount += $p->price * ($details->value / 100);
                                    } else if ($n < $details->max_apply) {
                                        $amount += $p->price * ($details->value / 100);
                                    } else {
                                        break;
                                    }
                                    $n++;
                                    break;
                                }
                            }
                        }
                    }
                    $cart_total -= $amount;
                }
            }
        }

        return $cart_total;
    }

    public function getCouponDetails()
    {

        $coupon = Cookie::get('coupon');
        $couponDetails = null;

        if ($coupon != "") {
            $couponDetails = DB::table('coupons')
                ->where('name', '=', $coupon)
                ->first();
            if ($couponDetails->type == "VALUE") {
                $couponDetails->description = "$" . number_format($couponDetails->value, 2, '.', ',') . " CAD";
            }
            if ($couponDetails->type == "PERCENT") {
                $couponDetails->description = $couponDetails->value . "% OFF";
            }
            if ($couponDetails->type == "SHIPPING") {
                $couponDetails->description = "FREE SHIPPING";
            }
            if ($couponDetails->type == "ITEM") {
                $couponDetails->description = strtoupper($couponDetails->name);
            }
        }
        return $couponDetails;
    }

    public function checkCouponApplicable($couponName)
    {
        $cart_id = $this->getCartId();
        if ($cart_id) {
            $cart = DB::table("carts")->where('id', '=', $cart_id)->first();
            if ($cart) {
                $cart_items = DB::table("cart_items")->where('cart_id', '=', $cart_id)->get();
                if ($cart_items->count() > 0) {
                    $products = array();
                    foreach ($cart_items as $item) {
                        $products[] = DB::table('products')
                            ->where('id', '=', $item->item_id)
                            ->first();
                    }
                    return count($this->checkCouponApplicableWithProducts($products, $couponName)) > 0 ? true : false;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
        return false;
    }

    public function getCities(Request $request)
    {
        $q = Input::get('q');
        $province = Input::get('province');
        $cities = array();
        if (strlen($q) >= 2 && $q != "") {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_URL, "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=" . $q . "&key=AIzaSyCY-wtvDk6xfokF3c-0JfgSp588bfyyh84");
            $result = curl_exec($ch);
            curl_close($ch);

            $json = json_decode($result, true);
            $predictions = $json['predictions'];
            if (!empty($predictions)) {
                foreach ($predictions as $pred) {
                    if (count($pred['terms']) == 3) {
                        if ($pred['terms'][2]['value'] == 'Canada' && $pred['terms'][1]['value'] == $province &&
                            in_array("locality", $pred['types']) && in_array("political", $pred['types']) && in_array("geocode", $pred['types'])) {
                            $cities[] = array("name" => $pred['terms'][0]['value'],
                                "slug" => $pred['terms'][0]['value'],
                                "id" => $pred['terms'][0]['value']);
                        }
                    } else if (count($pred['terms']) == 4) {
                        if (($pred['terms'][3]['value'] == 'Canada' && $pred['terms'][2]['value'] == $province) &&
                            in_array("locality", $pred['types']) && in_array("political", $pred['types']) && in_array("geocode", $pred['types']) || in_array('sublocality_level_1', $pred['types'])) {
                            $cities[] = array("name" => $pred['terms'][0]['value'],
                                "slug" => $pred['description'],
                                "id" => $pred['terms'][0]['value']);
                        }
                    } else {
                        break;
                    }
                }
            }
        }
        return $cities;
    }

    public function searcher(Request $request)
    {
        return redirect()->action('StoreController@search', Request::input('search'));
    }

    public function search($query)
    {
        $results = DB::table('products');

        $keywords = preg_split('/[\ \n\,]+/', $query);
        foreach ($keywords as $word) {
            $results->where('products.title', 'LIKE', "%$word%")
                ->where('status', '=', 'PUBLISHED')
                ->orWhere('products.title', 'LIKE', "%$word%")
                ->orWhere('products.subtitle', 'LIKE', "%$word%")
                ->orWhere('products.meta_description', 'LIKE', "%$word%")
                ->orWhere('products.meta_keywords', 'LIKE', "%$word%")
                ->orWhere('products.body', 'LIKE', "%$word%");
        }

        $results = $results->paginate(10);

        foreach($results as $k=>$product){
                if($product->currency == "USD"){
                    if(!empty($product->sale_price)){
                        $results[$k]->sale_price_cad =  calcExchangeRate($product->sale_price, "CAD", "USD");
                    }
                    if(!empty($product->price)){
                        $results[$k]->price_cad =  calcExchangeRate($product->price, "CAD", "USD");
                    }
                }
            }

        Session::flash('query', $query);

        return view('pages.store.search', ['query' => $query, 'results' => $results, ['calcCart' => $this->calcCart()]]);
    }
}

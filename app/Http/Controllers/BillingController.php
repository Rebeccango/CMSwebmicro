<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ShippingController;
use App\Http\Controllers\StoreController;
use Auth;
use Carbon\Carbon;
use Cookie;
use DB;
use Hash;
use Illuminate\Http\Request;
// use Cartalyst\Stripe\Stripe;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Mail;
use Response;
use Route;
use Session;
use Shippo_Transaction; // use your own object
use Stripe\Stripe; // use your own object
use Validator;
use Voyager;
use App\Mail\ExceptionOccured;


class BillingController extends Controller
{
    protected $stripe;
    protected $shipping;
    protected $store;

    public function __construct()
    {
        $this->stripe = new Stripe();
        $this->shipping = new ShippingController();
        $this->store = new StoreController();
        setlocale(LC_MONETARY, 'en_CA.UTF-8');

        \Stripe\Stripe::setApiKey(env('STRIPE_API_KEY', 'sk_test_O4sF4Ob5g1yr7fTerTZqC2Ii'));
    }

    public function getTaxes(Request $request)
    {
        $province = Input::get('province');
        $response = null;
        // if(Cookie::get('cart') != ""){
        if ($province != "") {
            $prov = DB::table('provinces')
                ->where('abbrv', '=', $province)
                ->first();
            if ($prov != "" && $prov != null) {
                $percent = $prov->GST + $prov->PST;
                $total = $this->store->calcCart()->total;
                $taxx = $this->calcTaxes($percent);
                $response = array("result" => "success", "msg" => "", "taxAmount" => $taxx, "taxPercent" => (float) $percent, "total" => $total + $taxx);
            } else {
                $response = array("result" => "danger", "msg" => "There was a problem calculating the tax for your order!" . $province);
            }
        } else {
            $response = array("result" => "warning", "msg" => "Cannot calculate taxes");
        }
        // }else{
        //   $response = array("result"=>"warning", "msg"=>"Cannot calculate taxes");
        // }
        return response($response);
    }

    public function calcShipping(Request $request)
    {
        $province = $request->input('ship_province');
        $postal = $request->input('ship_postal');
        $city = $request->input('ship_city');
        $shipping_method = $request->input('ship_method');
        $response = "";
        $cart_id = $this->store->getCartId();
        $checkout = $this->getSavedCheckoutForm();
        $shipping_amount = 0;

        if ($cart_id != "" && $postal != "" && $province != "") {
            $cart_items = DB::table("cart_items")->where('cart_id', $cart_id)->get();

            if ($cart_items->count() > 0) 
            {
                if ($province != "") {
                    $prov = DB::table('provinces')
                        ->where('abbrv', '=', $province)
                        ->first();
                    if ($prov != "" && $prov != null) {
                        $coupon = $this->store->getCouponDetails();
                        $couponProducts = null;

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

                        if ($coupon != "" || $coupon !== null) {
                            $couponProducts = $this->store->checkCouponApplicableWithProducts($products_detail, $coupon->name);
                        }
                        

                        $rates = array();
                        $rateRequest = $this->shipping->getFullEstimate($products_detail, (array)$request->all(), $coupon, $couponProducts);

                        $rates = $rateRequest["shippingQuote"];

                        if (!empty($rates[0])) {
                            if (!empty($shipping_method)) {
                                foreach ($rates as $rate) {
                                    if ($rate->serviceId == $shipping_method) {
                                        $shipping_amount = $rate->totalCharge;
                                        break;
                                    }
                                }
                            }

                            if (empty($shipping_method) && isset($rates[0])) {
                                $shipping_amount = $rates[0]->totalCharge;
                            }

                            DB::table('checkouts')
                                ->where('id', '=', $checkout->id)
                                ->update([
                                    // 'shipment_id' => $rateRequest['shipments']->object_id,
                                    'ship_amount' => $shipping_amount,
                                    'ship_method' => $shipping_method,
                                ]);

                            $total = $this->store->calcCart()->total;
                            $response = array(
                                "result" => "success",
                                "msg" => "",
                                "shipAmount" => $shipping_amount,
                                "total" => $total + $shipping_amount,
                                // 'shipment_id' => $rateRequest['shipments']->object_id,
                                "ship_method" => $shipping_method,
                                "rates" => $rates);

                        } else {
                            $response = array("result" => "danger", "msg" => "There was a problem calculating the shipping cost for your order! Make sure your address, postal code and province are correct. Please contact us if you believe this message is a mistake - Toll Free: 844-838-5110");
                            //$response = array("result" => "danger", "msg" => "Test" . print_r($rateRequest));

                            Mail::to('web-logs@cadmicro.com')->send(new ExceptionOccured("Shipment Error: <br/>" . json_encode($rateRequest), Request::fullUrl(), Request::except($this->dontFlash), Auth::user() ? Auth::user()->email : ''));

                            DB::table('checkouts')
                                ->where('id', '=', $checkout->id)
                                ->update([
                                    'shipment_id' => '',
                                    'ship_amount' => null,
                                    'ship_method' => '',
                                ]);
                        }
                    } else {
                        $response = array("result" => "danger", "msg" => "There was a problem calculating the shipping cost for your order!");
                    }
                } else {
                    $response = array("result" => "warning", "msg" => "Cannot calculate shipping costs");
                }
            } else {
                $response = array("result" => "warning", "msg" => "Cart is empty!");
            }
        } else {
            $response = array("result" => "warning", "msg" => "Cannot calculate shipping costs");
        }
        return response($response);
    }

    public function getCartTotal()
    {
        $cart_total = $this->store->calcCart()->total;

        //add TAXES

        //add shipping

        return $cart_total;
    }

    public function calcTaxes($percent)
    {
        $cart_total = $this->store->calcCart()->total;
        return round(($cart_total * (1 + ($percent / 100))) - $cart_total, 2);
    }

    public function saveCheckoutForm($data)
    {
        if ($data) {
            unset($data['_token']);

            $checkout = DB::table('checkouts')->where('session_id', '=', session()->getId())->first();

            if ($checkout) {
                DB::table('checkouts')
                    ->where('session_id', '=', session()->getId())
                    ->update($data);
            } else {
                $data['session_id'] = session()->getId();
                DB::table('checkouts')->insert($data);
            }
        }
    }

    public function getSavedCheckoutForm()
    {
        $checkout = DB::table('checkouts')->where('session_id', '=', session()->getId())->first();

        if (!$checkout) {
            $id = DB::table('checkouts')->insertGetId(array('session_id' => session()->getId()));
            $checkout = DB::table('checkouts')->where('id', '=', $id)->first();
        }
        return $checkout;
    }

    public function shippingStep(Request $request)
    {
        $checkout_step_error = Cookie::get('checkout_step_error') !== null ? unserialize(Cookie::get('checkout_step_error')) : array(false, false, false);

        $rules = array(
            'ship_firstname' => 'required|regex:/(^[A-Za-z ]+$)/u',
            'ship_lastname' => 'required|regex:/(^[A-Za-z ]+$)/u',
            'ship_address_1' => 'required',
            'ship_province' => 'required|exists:provinces,abbrv',
            'ship_postal' => 'required|regex:/(^[ABCEGHJKLMNPRSTVXYabceghjklmnprstvxy]{1}\d{1}[aA-zZ]{1} *\d{1}[aA-zZ]{1}\d{1}$)/u',
            'ship_city' => 'required',
            'ship_method' => 'required',
            'ship_country' => 'required',
            'ship_tel' => 'phone:AUTO,CA',
        );

        $messages = [
            'ship_firstname.required' => 'Your first name is required',
            'ship_firstname.regex' => 'The last name can only consist of alphabetical characters and spaces',
            'ship_lastname.required' => 'Your last name is required',
            'ship_lastname.regex' => 'The last name can only consist of alphabetical characters and spaces',
            'ship_address_1.required' => 'Your billing address is required',
            'ship_province.required' => 'required|exists:provinces,abbrv',
            'ship_postal.required' => 'Your billing postal code is required',
            'ship_postal.regex' => 'The postal code must be a valid 6 character code',
            'ship_city.required' => 'Your city is required',
            'ship_country.required' => 'Your country is required',
            'ship_method.required' => 'You must select a shipping method. Make sure your province and postal code are correct.',
        ];

        $checkoutForm = $request->all();

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            $checkout_step_error[0] = true;
            $error = $validator->errors();
        } else {
            if ($step = DB::table('checkouts')->where('session_id', '=', session()->getId())->pluck('step')) {
                $checkoutForm['step'] = $step[0]['step'] <= 1 ? 2 : $step[0]['step'];
            } else {
                $checkoutForm['step'] = 2;
            }
            $checkout_step_error[0] = false;
            Cookie::queue("checkout_step_error", serialize($checkout_step_error), 30);
        }
        $this->saveCheckoutForm($checkoutForm);

        $this->calcShipping($request);
        //$this->shippingQuote($request);

        $response = null;

        $addressSet = true;

        if (isset($error)) {
            $response['error'] = $error;

            foreach ($error as $key => $e) {
                if (in_array($key, [
                    "ship_firstname",
                    "ship_lastname",
                    "ship_address_1",
                    "ship_province",
                    "ship_postal",
                    "ship_city",
                ])) {
                    $addressSet = false;
                    break;
                }
            }
        }

        if ($addressSet) {
            $response['address'] =
                "<p>" . $checkoutForm['ship_firstname'] . " " . $checkoutForm['ship_lastname'] . "</p>"
                . "<p>" . $checkoutForm['ship_address_1'] . "</p>" . ($checkoutForm['ship_address_2'] != "" ? "<p>" . $checkoutForm['ship_address_2'] . "</p>" : "")
                . "<p>" . $checkoutForm['ship_city']
                . ", " . $checkoutForm['ship_province'] . "</p><p>CANADA, " . $checkoutForm['ship_postal'] . "</p><br/>";
        }

        return response($response);
    }

    public function billingStep(Request $request)
    {
        $card = null;
        $customer = null;
        $checkout_step_error = Cookie::get('checkout_step_error') !== null ? unserialize(Cookie::get('checkout_step_error')) : array(false, false, false);
        $checkoutForm = $request->all();
        $checkoutData = DB::table('checkouts')->where('session_id', '=', session()->getId())->first();

        if ($checkoutData) {
            $rules = array(
                'bill_firstname' => 'required|regex:/(^[A-Za-z ]+$)/u',
                'bill_lastname' => 'required|regex:/(^[A-Za-z ]+$)/u',
                'bill_address_1' => 'required',
                'bill_province' => 'required|exists:provinces,abbrv',
                'bill_postal' => 'required|regex:/(^[ABCEGHJKLMNPRSTVXYabceghjklmnprstvxy]{1}\d{1}[aA-zZ]{1} *\d{1}[aA-zZ]{1}\d{1}$)/u',
                'bill_city' => 'required',
                'bill_country' => 'required',
                'credit_type' => 'bail|required',
                'cc_name' => 'bail|required',
                'cc_num' => 'bail|required',
                'cc_ccv' => 'bail|required|regex:/(^[0-9,•]{3,3}$)/u',
                'cc_expire_1' => 'bail|required|digits:2|numeric|date_format:n',
                'cc_expire_2' => 'bail|required|digits:4|numeric|date_format:Y|between:' . date('Y') . ',' . (date('Y') + 15),
            );

            $messages = [
                'bill_firstname.required' => 'Your first name is required',
                'bill_firstname.regex' => 'The last name can only consist of alphabetical characters and spaces',
                'bill_lastname.required' => 'Your last name is required',
                'bill_lastname.regex' => 'The last name can only consist of alphabetical characters and spaces',
                'bill_address_1.required' => 'Your billing address is required',
                'bill_province.required' => 'required|exists:provinces,abbrv',
                'bill_postal.required' => 'Your billing postal code is required',
                'bill_postal.regex' => 'The postal code must be a valid 6 character code',
                'bill_city.required' => 'Your city is required',
                'bill_country.required' => 'Your country is required',
                'credit_type.required' => 'Your credit card type is required',
                'cc_name.required' => 'The name on your credit card is required',
                'cc_name.regex' => 'The name can only consist of alphabetical characters and spaces',
                'cc_num.required' => 'The credit card number is required',
                'cc_ccv.required' => 'The 3 digit CVC number on the back of your card is required',
                'cc_expire_1.required' => 'The month of expiry is required', 'cc_expire_2.required' => 'The year of expiry is required',
            ];

            $validator = Validator::make(Input::all(), $rules, $messages);

            if ($validator->fails()) {
                $checkout_step_error[0] = true;
                $error = $validator->errors();
            } else {
                $checkout_step_error[0] = false;
                Cookie::queue("checkout_step_error", serialize($checkout_step_error), 30);

                $checkout_step = $checkoutData->step <= 2 ? 3 : $checkoutData->step;
                $checkoutForm['step'] = $checkout_step;
            }
            $error = array();
            // $checkout_step = $checkoutData->step <= 2 ? 3 : $checkoutData->step;
            // $checkoutForm['step'] = $checkout_step;

            if ($checkoutData->stripe_token == "") {
                if (isset($checkoutForm["cc_num"]) && isset($checkoutForm["cc_expire_1"]) && isset($checkoutForm["cc_expire_2"]) && isset($checkoutForm["cc_ccv"]) &&
                    isset($checkoutForm["cc_name"])) {
                    try {
                        $stripe_token = \Stripe\Token::create(array(
                            "card" => array(
                                "number" => $checkoutForm["cc_num"],
                                "exp_month" => $checkoutForm["cc_expire_1"],
                                "exp_year" => $checkoutForm["cc_expire_2"],
                                "cvc" => $checkoutForm["cc_ccv"],
                                "name" => $checkoutForm["cc_name"],
                                // "address_line1"=>$checkoutData->bill_address_1,
                                // "address_line2"=>$checkoutData->bill_address_2,
                                // "address_city"=>$checkoutData->bill_city,
                                // "address_country"=>$checkoutData->bill_country,
                                // "address_zip"=>$checkoutData->bill_postal,
                                // "address_state"=>$checkoutData->bill_province
                            ),
                        ))['id'];
                        $checkoutForm['stripe_token'] = $stripe_token;
                    } catch (\Stripe\Error\Card $e) {
                        $err = $e->getJsonBody()['error'];
                        $error[] = $err['message'];
                    } catch (\Stripe\Error\RateLimit $e) {
                        $err = $e->getJsonBody()['error'];
                        $error[] = $err['message'];
                    } catch (\Stripe\Error\InvalidRequest $e) {
                        $err = $e->getJsonBody()['error'];
                        $error[] = $err['message'];
                    } catch (\Stripe\Error\Authentication $e) {
                        $err = $e->getJsonBody()['error'];
                        $error[] = $err['message'];
                    } catch (\Stripe\Error\ApiConnection $e) {
                        $err = $e->getJsonBody()['error'];
                        $error[] = $err['message'];
                    } catch (\Stripe\Error\Base $e) {
                        $err = $e->getJsonBody()['error'];
                        $error[] = $err['message'];
                    } catch (Exception $e) {
                        $err = $e->getJsonBody()['error'];
                        $error[] = $err['message'];
                    }
                }
            } else {
                $stripe_token = $checkoutData->stripe_token;
            }

            if (isset($stripe_token) && $stripe_token != "" && $checkoutData->cus_token == "") {
                try {
                    $customer = \Stripe\Customer::create(array(
                        // "email"=>Input::get('email'),
                        "description" => "Customer for CADMicro Store",
                        "shipping" => [
                            "name" => $checkoutData->ship_firstname . " " . $checkoutData->ship_lastname,
                            "address" => [
                                "line1" => $checkoutData->ship_address_1,
                                "line2" => $checkoutData->ship_address_2,
                                "city" => $checkoutData->ship_city,
                                "country" => $checkoutData->ship_country,
                                "postal_code" => $checkoutData->ship_postal,
                                "state" => $checkoutData->ship_province,
                                // "phone"=>Input::get('ship_phone'),
                            ],
                        ],
                    ));
                    $customer_id = $customer["id"];
                } catch (\Stripe\Error\Card $e) {
                    $err = $e->getJsonBody()['error'];
                    $error[] = $err['message'];
                } catch (\Stripe\Error\RateLimit $e) {
                    $err = $e->getJsonBody()['error'];
                    $error[] = $err['message'];
                } catch (\Stripe\Error\InvalidRequest $e) {
                    $err = $e->getJsonBody()['error'];
                    $error[] = $err['message'];
                } catch (\Stripe\Error\Authentication $e) {
                    $err = $e->getJsonBody()['error'];
                    $error[] = $err['message'];
                } catch (\Stripe\Error\ApiConnection $e) {
                    $err = $e->getJsonBody()['error'];
                    $error[] = $err['message'];
                } catch (\Stripe\Error\Base $e) {
                    $err = $e->getJsonBody()['error'];
                    $error[] = $err['message'];
                } catch (Exception $e) {
                    $err = $e->getJsonBody()['error'];
                    $error[] = $err['message'];
                }
            } elseif (isset($stripe_token) && $stripe_token != "" && $checkoutData->cus_token != "") {
                $customer_id = $checkoutData->cus_token;
            }

            try {
                if (isset($customer_id) && isset($stripe_token) && $stripe_token != "") {
                    $checkoutForm['cus_token'] = $customer_id;
                    $customer = \Stripe\Customer::retrieve($customer_id);

                    if ($checkoutData->card_token == "" && isset($stripe_token) && $stripe_token != "") {
                        $card_token = $customer->sources->create(array("source" => $stripe_token));
                        $checkoutForm['card_token'] = $card_token['id'];
                        $card = $customer->sources->retrieve($card_token['id']);
                    } else if ($checkoutData->card_token != "") {
                        $card = $customer->sources->retrieve($checkoutData->card_token);
                    }
                }
            } catch (\Stripe\Error\Card $e) {
                $err = $e->getJsonBody()['error'];
                $error[] = $err['message'];
            } catch (\Stripe\Error\RateLimit $e) {
                $err = $e->getJsonBody()['error'];
                $error[] = $err['message'];
            } catch (\Stripe\Error\InvalidRequest $e) {
                $err = $e->getJsonBody()['error'];
                $error[] = $err['message'];
            } catch (\Stripe\Error\Authentication $e) {
                $err = $e->getJsonBody()['error'];
                $error[] = $err['message'];
            } catch (\Stripe\Error\ApiConnection $e) {
                $err = $e->getJsonBody()['error'];
                $error[] = $err['message'];
            } catch (\Stripe\Error\Base $e) {
                $err = $e->getJsonBody()['error'];
                $error[] = $err['message'];
            } catch (Exception $e) {
                $err = $e->getJsonBody()['error'];
                $error[] = $err['message'];
            }

            unset($checkoutForm["credit_type"]);
            unset($checkoutForm["cc_name"]);
            unset($checkoutForm["cc_num"]);
            unset($checkoutForm["cc_ccv"]);
            unset($checkoutForm["cc_expire_1"]);
            unset($checkoutForm["cc_expire_2"]);

            $this->saveCheckoutForm($checkoutForm);

            if (count($error) > 0) {
                $checkoutData = DB::table('checkouts')
                    ->where('session_id', '=', session()->getId())
                    ->update([
                        'stripe_token' => '',
                        'cus_token' => '',
                        'card_token' => '',
                    ]);
            }

            $response = null;

            if (isset($card)) {
                $response['card'] = $card;
            } else {
                $response['card'] = "";
                $error['payment_details'] = 'Payment details missing';
            }

            $addressSet = true;

            if (isset($error)) {
                $response['error'] = $error;
                foreach ($error as $key => $e) {
                    if (in_array($key, [
                        "bill_firstname",
                        "bill_lastname",
                        "bill_address_1",
                        "bill_province",
                        "bill_city",
                        "bill_postal",
                    ])) {
                        $addressSet = false;
                        break;
                    }
                }
            }

            if ($addressSet && isset($checkoutForm['bill_city'])) {
                $response['address'] =
                    "<p>" . $checkoutForm['bill_firstname'] . " " . $checkoutForm['bill_lastname'] . "</p>"
                    . "<p>" . $checkoutForm['bill_address_1'] . "</p>" . ($checkoutForm['bill_address_2'] != "" ? "<p>" . $checkoutForm['bill_address_2'] . "</p>" : "")
                    . "<p>" . $checkoutForm['bill_city']
                    . ", " . $checkoutForm['bill_province'] . "</p><p>CANADA, " . $checkoutForm['bill_postal'] . "</p><br/>";
            }

            return response($response);
        }
    }

    public function resetCard(Request $request)
    {
        $checkoutData = DB::table('checkouts')
            ->where('session_id', '=', session()->getId())
            ->update([
                'stripe_token' => '',
                'cus_token' => '',
                'card_token' => '',
            ]);

        return response(array('success' => true));
    }

    public function createOrder(Request $request)
    {

        if (!Auth::check()) {
            $rules = array(
                'agree_terms' => 'accepted',
                'email' => 'required|email',
            );
            $messages = [
                'agree_terms.accepted' => 'You must accept our privacy policy to proceed!',
                'email.required' => 'You must provide a valid email address',
                'email.email' => 'You must provide a valid email address',
            ];
        } else {
            $rules = array(
                'agree_terms' => 'accepted',
                'email' => ['required',
                    'email',
                    Rule::exists('users')->where(function ($query) {
                        $query->where('id', Auth::user()->id);
                    }),
                ],
            );
            $messages = [
                'agree_terms.accepted' => 'You must accept our privacy policy to proceed!',
                'email.required' => 'You must provide a valid email address',
                'email.email' => 'You must provide a valid email address',
                'emai.exists' => 'The email provided does not match the logged in account',
            ];
        }

        $success = false;
        $errors = array();

        $validator = Validator::make(Input::all(), $rules, $messages);
        $cartid = $this->store->getCartId();

        if ($validator->fails()) {
            return response(['success' => false, "errors" => $validator->errors()]);
        } else {

            $checkout = DB::table('checkouts')->where('session_id', '=', session()->getId())->first();

            $checkout = collect($checkout)->toArray();
            // dd($cartid);
            if ($cartid !== null) {
                $customer_id = $checkout["cus_token"];
                $token = "";
                $has_account = true;
                $user_id = null;
                $email = Input::has("email") ? Input::get("email") : Auth::user()->email;
                $checkout['email'] = $email;
                //CHECK IF EMAIL HAS ACCOUNT, IF NOT CREATE TEMP ACCOUNT AND GET ID
                if (DB::table('users')->where('email', '=', $email)->exists()) {
                    $user_id = DB::table('users')->where('email', '=', $email)->pluck('id')[0];

                    DB::table('users')->where('id', '=', $user_id)->update([
                        "name" => $checkout['ship_firstname'] . " " . $checkout['ship_lastname'],
                        'stripe_id' => $customer_id,
                        'firstname' => $checkout['ship_firstname'],
                        'lastname' => $checkout['ship_lastname'],
                        "address_1" => $checkout['ship_address_1'],
                        "address_2" => $checkout['ship_address_2'],
                        "city" => $checkout['ship_city'],
                        "country" => $checkout['ship_country'],
                        "postal" => $checkout['ship_postal'],
                        "province" => $checkout['ship_province'],
                    ]);
                    $password = "";
                    $token = "";
                    $setPasswordURL = "";
                } else {
                    $has_account = false;
                    do {
                        $token = Str::random(60);
                        if (!DB::table('users')->where('activation_code', '=', $token)->exists()) {
                            break;
                        }
                    } while (true);
                    $password = uniqid();
                    $user_id = DB::table('users')->insertGetId([
                        "name" => ucfirst(strtolower($checkout['ship_firstname'])) . " " . ucfirst(strtolower($checkout['ship_lastname'])),
                        'email' => $email,
                        'role_id' => 2,
                        'password' => Hash::make($password),
                        'stripe_id' => $customer_id,
                        'firstname' => ucfirst(strtolower($checkout['ship_firstname'])),
                        'lastname' => ucfirst(strtolower($checkout['ship_lastname'])),
                        "address_1" => $checkout['ship_address_1'],
                        "address_2" => $checkout['ship_address_2'],
                        "city" => $checkout['ship_city'],
                        "country" => $checkout['ship_country'],
                        "postal" => $checkout['ship_postal'],
                        "province" => $checkout['ship_province'],
                        // 'updates' => Input::get('subscribe_mail'),
                        'activated' => 1,
                        'activation_code' => $token,
                        'activation_date' => \Carbon\Carbon::now()->toDateTimeString(),
                    ]);
                    DB::table('password_resets')->insert([
                        'email' => $email,
                        'token' => $token,
                    ]);
                    $setPasswordURL = route('show_resetPassword', ['token' => $token]);
                }

                do {
                    $order_id = "O" . substr(md5(time() . Str::random(30)), 0, 10);
                    if (!DB::table('orders')->where('order_id', '=', $order_id)->exists()) {
                        break;
                    }
                } while (true);

                $coupon = Cookie::get('coupon');

                if ($coupon != "" || $coupon !== null) {
                    $details = DB::table('coupons')
                        ->where('name', '=', $coupon)
                        ->first();
                    $check = $this->store->checkCouponApplicable($coupon);
                    if (!$check) {
                        $coupon = "";
                    }
                } else {
                    $coupon = "";
                    $details = "";
                }

                //Make snapshots of the currently existing product
                $products = DB::table('cart_items')
                    ->where('cart_id', '=', $cartid)->get();
                $order_products = array();
                $order_description = "Order #: " . $order_id . ", ";
                for ($i = 0; $i < count($products); $i++) {
                    $product = DB::table('products')->where('id', '=', $products[$i]->item_id)->first();

                    $id = DB::table('products_ordered')
                        ->insertGetId([
                            'order_id' => $order_id,
                            'product_id' => $product->id,
                            'title' => $product->title,
                            'subtitle' => $product->subtitle,
                            'category_id' => $product->category_id,
                            'type' => $product->type,
                            'body' => $product->body,
                            'excerpt' => $product->excerpt,
                            'quantity' => $products[$i]->quantity,
                            'price' => $product->price,
                            'sale_price' => $product->sale_price,
                            'currency' => $product->currency,
                            'images' => $product->images,
                            'thumbnail' => $product->thumbnail,
                            'slug' => $product->slug,
                            'meta_description' => $product->meta_description,
                            'meta_keywords' => $product->meta_keywords,
                            'status' => $product->status,
                            'width' => $product->width,
                            'height' => $product->height,
                            'depth' => $product->depth,
                            'weight' => $product->weight,
                        ]);

                    $order_description .= "SKU#" . $product->id . " : " . $product->title . " x " . $products[$i]->quantity . ', ';

                    $order_products[] = [$id, $products[$i]->quantity];
                }

                $total = $this->store->calcCart()->total;
                $taxRate = DB::table('provinces')->where('abbrv', '=', $checkout['ship_province'])->first();
                $tax = $this->calcTaxes($taxRate->GST + $taxRate->PST, $total);
                $shipping = json_decode($this->calcShipping($request->merge($checkout))->content(), true);

                if ($shipping['result'] != "success") {
                    return response(['success' => false, 'errors' => $shipping["msg"] . " SHIPP ERROR"]);
                }

                $rate_id = null;
                $shipAmount = 0;

                foreach ($shipping['rates'] as $rate) {
                    if ($rate['serviceId'] == $checkout['ship_method']) {
                        $rate_id = $rate['serviceId'];
                        $shipAmount = $rate['totalCharge'];
                        break;
                    }
                }

                $checkout['order_id'] = $order_id;

                if (env("APP_ENV") == "production") {
									try{
                    $shipment_transaction = $this->shipping->doShipping($products, $checkout);

                    if ($shipment_transaction->errors != null) {
                        $errors[] = $shipment_transaction->errors;
                        return response(['success' => false, 'errors' => $errors]);
                    }

                    if ($shipment_transaction->response != null) {
                        $i = 0;
                        $boxes = $shipment_transaction->parcels;
                        $trackingNumber = null;
                        $shipment_id = $shipment_transaction->response['ShippingReply']['Order']['@attributes']['id'];
                        $trackingURL = $this->shipping->eShipperOrderInfoRequest($shipment_id)->response['OrderInformationReply']['TrackingURL'];

                        $packaging = array();
                        if (count($boxes) > 1) {
                            foreach ($boxes as $box) {
                                $parcel = $box['type'];
                                $items = array();
                                if (isset($box['items'])) {
                                    foreach ($box['items'] as $item) {
                                        $items[] = $item->getId();
                                    }
                                } else if (isset($box['item'])) {
                                    $items[] = $box['item']->id;
                                }

                                if (is_string($parcel)) {
                                    $box_id = $parcel;
                                } else {
                                    $box_id = $parcel->getId();
                                }

                                $packaging[] = (object) array('box' => $box, 'items' => $items);
                                DB::table('shipments')->insert([
                                    'order_id' => $order_id,
                                    'box_id' => $box_id,
                                    'items' => json_encode($items),
                                    'transaction_id' => $shipment_transaction->response['ShippingReply']['Order']['@attributes']['id'],
                                    'parcel_id' => $shipment_transaction->response['ShippingReply']['Package'][$i]['@attributes']['trackingNumber'],
                                    'order' => $i + 1,
                                ]);

                                if ($i == 0) {
                                    $trackingNumber = $shipment_transaction->response['ShippingReply']['Package'][$i]['@attributes']['trackingNumber'];
                                }
                                $i++;
                            }
                        } else {
                            foreach ($boxes as $box) {
                                $parcel = $box['type'];
                                $items = array();
                                if (isset($box['items'])) {
                                    foreach ($box['items'] as $item) {
                                        $items[] = $item->getId();
                                    }
                                } else if (isset($box['item'])) {
                                    $items[] = $box['item']->id;
                                }

                                if (is_string($parcel)) {
                                    $box_id = $parcel;
                                } else {
                                    $box_id = $parcel->getId();
                                }
                                $packaging[] = (object) array('box' => $box, 'items' => $items);
                                DB::table('shipments')->insert([
                                    'order_id' => $order_id,
                                    'box_id' => $box_id,
                                    'items' => json_encode($items),
                                    'transaction_id' => $shipment_transaction->response['ShippingReply']['Order']['@attributes']['id'],
                                    'parcel_id' => $shipment_transaction->response['ShippingReply']['Package']['@attributes']['trackingNumber'],
                                    'order' => 1,
                                ]);
                                $trackingNumber = $shipment_transaction->response['ShippingReply']['Package']['@attributes']['trackingNumber'];
                            }
                        }

                        $carrierName = $shipment_transaction->response['ShippingReply']['Carrier']['@attributes']['carrierName'];
										}
									}catch(Exception $e){
										$shipmentError = $e->getMessage();
                                 
                                        Mail::to('web-logs@cadmicro.com')->send(new ExceptionOccured("Shipment Error: <br/>" . $shipmentError."<br/> Order ID: " . $order_id . "<br/> Errors: <br/>" . json_encode($errors), Request::fullUrl(), Request::except($this->dontFlash), Auth::user() ? Auth::user()->email : ''));

										$errors[] = "Unable to create shipment! Please contact support";
										return response(['success' => false, 'errors' => $errors]);
									}
                }

                $amount = ($total + $tax + $shipAmount);

                //Charge the credit card
                try {
                    $charge = \Stripe\Charge::create([
                        'amount' => round($amount * 100), // this is in cents
                        'currency' => 'CAD',
                        'description' => $order_description,
                        'customer' => $customer_id,
                        'shipping' => [
                            "name" => ucfirst(strtolower($checkout['ship_firstname'])) . " " . ucfirst(strtolower($checkout['ship_lastname'])),
                            "phone" => $checkout['ship_tel'],
                            "address" => [
                                "line1" => $checkout['ship_address_1'],
                                "line2" => $checkout['ship_address_2'],
                                "city" => $checkout['ship_city'],
                                "country" => $checkout['ship_country'],
                                "postal_code" => $checkout['ship_postal'],
                                "state" => $checkout['ship_province'],
                            ],
                            "carrier" => (isset($carrierName) ? $carrierName : "n/a"),
                            "tracking_number" => (isset($trackingNumber) ? $trackingNumber : "n/a"),
                        ],
                        "metadata" => [
                            "order_id" => $order_id,
                        ],
                    ]);
                } catch(Stripe_CardError $e) {
                    $errors[] = $e->getMessage();
                } catch (Stripe_InvalidRequestError $e) {
                // Invalid parameters were supplied to Stripe's API
                    $errors[] = $e->getMessage();
                } catch (Stripe_AuthenticationError $e) {
                // Authentication with Stripe's API failed
                    $errors[] = $e->getMessage();
                } catch (Stripe_ApiConnectionError $e) {
                // Network communication with Stripe failed
                    $errors[] = $e->getMessage();
                } catch (Stripe_Error $e) {
                    // Display a very generic error to the user, and maybe send
                    // yourself an email
                    $errors[] = $e->getMessage();
                } catch (Exception $e) {
                    // Something else happened, completely unrelated to Stripe
                    $errors[] = $e->getMessage();
                }

                if(count($errors)>0){
                    return response(['success' => false, 'errors' => $errors]);
                }

                if ($charge['status'] == "succeeded") {
                    //Save the order details
                    $orderHash = str_replace("/", "", Hash::make(uniqid('order_', $charge['id'])));
                    if ($user_id != null) {
                        $buildOrder = [
                            'order_id' => $order_id,
                            'user_id' => $user_id,
                            'email' => $email,
                            'stripe_id' => $charge['id'],
                            'shipment_id' => isset($shipment_id) ? $shipment_id : null,
                            'transaction_id' => '',
                            'firstname' => ucfirst(strtolower($checkout['bill_firstname'])),
                            'lastname' => ucfirst(strtolower($checkout['bill_lastname'])),
                            'total_cost' => $amount,
                            'sub_cost' => $total,
                            'shipping_cost' => isset($shipAmount) ? $shipAmount : 0,
                            'tax' => $tax,
                            'products' => json_encode($order_products),
                            'status' => 'PROCESSING',
                            'payment_status' => 'COMPLETED',
                            'coupon' => $coupon,
                            'coupon_title' => $details != "" ? $details->title : "",
                            'coupon_value' => $details != "" ? $details->value : 0,
                            'coupon_type' => $details != "" ? $details->type : "",
                            'coupon_body' => $details != "" ? $details->details : "",
                            'coupon_image' => $details != "" ? $details->image : "",
                            'order_hash' => $orderHash,
                            'order_ip' => request()->ip(),
                            'ship_firstname' => $checkout['ship_firstname'],
                            'ship_lastname' => $checkout['ship_lastname'],
                            'ship_address_1' => $checkout['ship_address_1'],
                            'ship_address_2' => $checkout['ship_address_2'],
                            'ship_province' => $checkout['ship_province'],
                            'ship_city' => $checkout['ship_city'],
                            'ship_postal' => $checkout['ship_postal'],
                            'ship_org' => $checkout['ship_org'],
                            'ship_tel' => $checkout['ship_tel'],
                            'bill_firstname' => $checkout['bill_firstname'],
                            'bill_lastname' => $checkout['bill_lastname'],
                            'bill_address_1' => $checkout['bill_address_1'],
                            'bill_address_2' => $checkout['bill_address_2'],
                            'bill_province' => $checkout['bill_province'],
                            'bill_city' => $checkout['bill_city'],
                            'bill_postal' => $checkout['bill_postal'],
                            'bill_org' => $checkout['bill_org'],
                            'bill_tel' => $checkout['bill_tel'],
                            'rate_id' => $rate_id,
                            'tracking_number' => (isset($trackingNumber) ? $trackingNumber : "n/a"),
                            'tracking_url' => (isset($trackingURL) ? $trackingURL : "n/a"),
                        ];
                        //ADD TO ORDERS
                        DB::table('orders')->insert($buildOrder);

                        $email = $checkout['email'];
                        $name = $checkout['bill_firstname'] . " " . $checkout['bill_lastname'];

                        $user = DB::table('users')->where('id', '=', $user_id)->first();
                        //$user->email = "d.balevski@gmail.com";

                        $order = DB::table('orders')->where('order_id', '=', $order_id)->first();

                        $card = \Stripe\Charge::retrieve($charge['id']);

                        //SEND EMAIL ORDER confirmation to customer
                        Mail::send(['html' => 'emails.orderConfirm'],
                        ['email' => $email,
                            'order' => $order,
                            'setPasswordUrl' => $setPasswordURL,
                            'shipmentDetails' => (isset($shipment_transaction) ? $shipment_transaction : null),
                            'trackingURL' => (isset($trackingURL) ? $trackingURL : ""),
                            'trackingNumber' => (isset($trackingNumber) ? $trackingNumber : "n/a"),
                            'order_products' => $order_products,
                            'newUser' => $has_account,
                            'token' => $token,
                            'card' => $card],
                        function ($m) use ($user, $order) {
                            $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                            $m->to($user->email, $user->name)->subject('Order Confirmation for Order #' . $order->order_id);
                        });

                        //SEND EMAIL Notification to orders@cadmicro.com
                        if(env("APP_ENV") == "production"){
                            Mail::send(['html' => 'emails.orderConfirm'],
                            ['email' => $email,
                                'order' => $order,
                                'setPasswordUrl' => $setPasswordURL,
                                'shipmentDetails' => (isset($shipment_transaction) ? $shipment_transaction : null),
                                'trackingURL' => (isset($trackingURL) ? $trackingURL : ""),
                                'trackingNumber' => (isset($trackingNumber) ? $trackingNumber : "n/a"),
                                'order_products' => $order_products,
                                'newUser' => $has_account,
                                'token' => $token,
                                'card' => $card],
                            function ($m) use ($user, $order) {
                                $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                                $m->to('orders@cadmicro.com', 'Orders')->subject('[Order Confirmation] Order #' . $order->order_id);
                            });
                            if ($shipment_transaction->response != null) {
                                $labels = [];
                                if (isset($shipment_transaction->response['ShippingReply']['Labels'])) {
                                    $labels[] = array('type' => 'PDF', 'data' => base64_decode($shipment_transaction->response['ShippingReply']['Labels']));
                                } else if (isset($shipment_transaction->response['ShippingReply']['LabelData'])) {
                                    foreach ($shipment_transaction->response['ShippingReply']['LabelData'] as $label) {
                                        $labels[] = array('type' => $label['Type'], 'data' => base64_decode($label['Data']));
                                    }
                                }
                                Mail::send(['html' => 'emails.shipmentInfo'],
                                ['email' => $email,
                                    'order' => $order,
                                    'labels' => $labels,
                                    'packaging' => $packaging,
                                    'trackingURL' => (isset($trackingURL) ? $trackingURL : ""),
                                    'trackingNumber' => (isset($trackingNumber) ? $trackingNumber : "n/a"),
                                ],
                                function ($m) use ($user, $order, $labels) {
                                    $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                                    $m->to('orders@cadmicro.com', 'Orders')->subject('[SHIPPING LABELS] Order #' . $order->order_id);
                                    if (!empty($labels)) {
                                        $i = 0;
                                        foreach ($labels as $label) {
                                            switch (strtoupper($label['type'])) {
                                                case "PDF":
                                                    $mime = 'application/pdf';
                                                    break;
                                                case "PNG":
                                                    $mime = 'image/png';
                                                    break;
                                                default:
                                                    $mime = 'application/pdf';
                                            }
                                            $m->attachData($label['data'], 'label_' . $order->order_id . '_' . $i . '.' . $label['type'], [
                                                'mime' => $mime,
                                            ]);
                                            $i++;
                                        }
                                    }
                                });
                            }
                        }else{
                             Mail::send(['html' => 'emails.orderConfirm'],
                            ['email' => $email,
                                'order' => $order,
                                'setPasswordUrl' => $setPasswordURL,
                                'shipmentDetails' => (isset($shipment_transaction) ? $shipment_transaction : null),
                                'trackingURL' => (isset($trackingURL) ? $trackingURL : ""),
                                'trackingNumber' => (isset($trackingNumber) ? $trackingNumber : "n/a"),
                                'order_products' => $order_products,
                                'newUser' => $has_account,
                                'token' => $token,
                                'card' => $card],
                            function ($m) use ($user, $order) {
                                $m->from('No-Reply@cadmicro.com', 'CAD MicroSolutions Inc.');
                                $m->to('dayanb@cadmicro.com', 'Orders')->subject('[Order Confirmation] Order #' . $order->order_id);
                            });
                        }

                        DB::table('coupons')->where('name',$coupon)->increment('uses');                       
                        
                        //delete checkout saved data
                        DB::table("checkouts")->where('session_id', "=", session()->getId())->delete();
                        DB::table("cart_items")->where('cart_id', "=", $cartid)->delete();
                        //delete cart
                        DB::table("carts")->where('id', "=", $cartid)->delete();
                        Cookie::queue(Cookie::forget('cart'));
                        Cookie::queue(Cookie::forget('coupon'));
                        $cookie2 = Cookie::forget('cart');
                        Cookie::queue(Cookie::forget('checkout-form'));
                        $cookie1 = Cookie::forget('checkout-form');
                        $cookie3 = Cookie::forget('checkout-step');

                        return response(['success' => true, 'redirect' => route('checkout-success', ["order_hash" => $orderHash, 'newUser' => !$has_account])]);
                    }
                } else {
                    return response(['success' => false, 'errors' => $charge["failure_message"]]);
                }
            }
            return response(['success' => false, 'errors' => 'Your cart is empty, cannot proceed with purchase.']);
        }
        return response(['success' => false, 'errors' => $errors]);
    }

    public function orderComplete2($order)
    {
        return $this->orderComplete($order, 0);
    }

    public function orderComplete($order, $newUser)
    {
        $shipmentDetails = null;
        $card = null;

        $order_details = DB::table('orders')->where('order_hash', '=', $order)->first();

        $trackingNumber = "";
        $trackingURL = "";

        if ($order_details->shipment_id != null) {
            try {
                $shipmentDetails = $this->shipping->eShipperOrderInfoRequest($order_details->shipment_id);

                if (count($shipmentDetails->response['OrderInformationReply']['Package']) > 1) {
                    $trackingNumber = $shipmentDetails->response['OrderInformationReply']['Package'][0]['@attributes']['trackingNumber'];
                } else {
                    $trackingNumber = $shipmentDetails->response['OrderInformationReply']['Package']['@attributes']['trackingNumber'];
                }
            } catch (\Exception $e) {}

            $trackingURL = $shipmentDetails->response['OrderInformationReply']['TrackingURL'];
        }

        try {
            $card = \Stripe\Charge::retrieve($order_details->stripe_id);
        } catch (\Stripe\Error\Card $e) {
        } catch (\Stripe\Error\ApiConnection $e) {
        } catch (\Stripe\Error\Base $e) {
        } catch (Exception $e) {}

        return view('pages.store.checkout_complete')->with(array('order' => $order_details,
            'order_products' => json_decode($order_details->products), 'trackingNumber' => $trackingNumber, 'trackingURL' => $trackingURL, 'newUser' => $newUser, 'card' => $card));
    }

    public function orderInvoice($order, $newUser)
    {
        $shipmentDetails = null;
        $card = null;

        $order_details = DB::table('orders')->where('order_hash', '=', $order)->first();

        try {
            $shipmentDetails = Shippo_Transaction::retrieve($order_details->transaction_id);
        } catch (\Exception $e) {}
        //\Stripe\Stripe::setApiKey(env('STRIPE_API_KEY'));
        try {
            $card = \Stripe\Charge::retrieve($order_details->stripe_id);
        } catch (\Stripe\Error\Card $e) {
        } catch (\Stripe\Error\ApiConnection $e) {
        } catch (\Stripe\Error\Base $e) {
        } catch (Exception $e) {}

        return view('pages.store.invoice')->with(array('order' => $order_details, 'card' => $card, 'newUser' => $newUser, 'shipmentDetails' => $shipmentDetails));
    }

    public function refundCancelOrder($order)
    {
        $refundStatus = false;
        $errors = array();

        if (Voyager::can('edit_orders')) {
            $order_details = DB::table('orders')->where('id', '=', $order)->first();
            if ($order_details) {
                if ($order_details->status != "CANCELLED") {
                    if ($order_details->shippo_refund_id == "") {
                        try {
                            // $ShippoRefund = Shippo_Refund::create( array("transaction" => $order_details->transaction_id, "async" => false));
                            // DB::table('orders')->where('id','=',$order)->update([
                            //   'shippo_refund_id'=>$ShippoRefund->object_id
                            // ]);
                        } catch (Exception $e) {
                            $errors[] = $e->getMessage();
                        }
                    } else {
                        $ShippoRefund = $order_details->shippo_refund_id;
                    }
                    if ($order_details->refund_id == "") {
                        try {
                            $StripeRefund = \Stripe\Refund::create(array(
                                "charge" => $order_details->stripe_id,
                            ));
                            DB::table('orders')->where('id', '=', $order)->update([
                                'refund_id' => $StripeRefund->id,
                                'payment_status' => 'REFUNDED',
                            ]);
                        } catch (\Stripe\Error\Card $e) {
                            $errors[] = $e->getJsonBody()['error'];
                        } catch (\Stripe\Error\RateLimit $e) {
                            $errors[] = $e->getJsonBody()['error'];
                        } catch (\Stripe\Error\InvalidRequest $e) {
                            $errors[] = $e->getJsonBody()['error'];
                        } catch (\Stripe\Error\Authentication $e) {
                            $errors[] = $e->getJsonBody()['error'];
                        } catch (\Stripe\Error\ApiConnection $e) {
                            $errors[] = $e->getJsonBody()['error'];
                        } catch (\Stripe\Error\Base $e) {
                            $errors[] = $e->getJsonBody()['error'];
                        } catch (Exception $e) {
                            $errors[] = $e->getMessage();
                        }
                    } else {
                        $StripeRefund = $order_details->refund_id;
                    }

                    if (isset($StripeRefund)) {
                        $refundStatus = true;
                        DB::table('orders')->where('id', '=', $order)->update([
                            'status' => 'CANCELLED',
                        ]);
                    }
                } else {
                    $errors[] = "Order has already been refunded!";
                }
            }
        } else {
            $errors[] = "You do not have permission to do this!";
        }

        return response(['status' => $refundStatus, 'errors' => $errors]);

    }
}

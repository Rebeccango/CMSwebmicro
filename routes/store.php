<?php
use Illuminate\Support\Facades\Route;

//STORE ROUTES
//store dev only
Route::group(['domain' => 'http://www.development.cadmicro.com'], function () {

    Route::group(['middleware' => ['web'], 'prefix' => 'account'], function () {
        Route::get('login', array('as' => 'login-page', 'uses' => 'AccountController@show_login'));

        Route::post('login', array('as' => 'login', 'uses' => 'AccountController@do_login'));

        Route::get('logout', array('as' => 'logout', 'uses' => 'AccountController@do_logout'));

        Route::get('register', array('as' => 'register', 'uses' => 'AccountController@show_register'));

        Route::post('register', array('as' => 'do_register', 'uses' => 'AccountController@do_register'));

        Route::get('/', array('as' => 'account', 'uses' => 'AccountController@get_account_page'));

        Route::get('orders', array('as' => 'orders', 'uses' => 'AccountController@get_account_page'));

        Route::get('order/{id}', array('as' => 'order', 'uses' => 'AccountController@get_order'));

        Route::get('order/{id}/invoice', array('as' => 'order-invoice', 'uses' => 'AccountController@get_invoice'));

        Route::get('settings', array('as' => 'settings', 'uses' => 'AccountController@get_account_page'));

        Route::get('help', array('as' => 'help', 'uses' => 'AccountController@get_account_page'));

        Route::get('register/success', array('as' => 'register-success', 'uses' => 'AccountController@show_register_success'));

        Route::get('resendActivationEmail/{email}', array('as' => 'resendActivationEmail', 'uses' => 'AccountController@resendActivationEmail'));

        Route::get('activate/{activationCode}', array('as' => 'activateAccount', 'uses' => 'AccountController@activateAccount'));

        Route::get('forgotPassword', array('as' => 'show_forgotPassword', 'uses' => 'AccountController@show_forgotPassword'));
        Route::post('forgotPassword', array('as' => 'do_forgotPassword', 'uses' => 'AccountController@do_forgotPassword'));
        Route::get('resetPassword/{token}', array('as' => 'show_resetPassword', 'uses' => 'AccountController@show_resetPassword'));

        Route::post('doChangePassword', array('as' => 'do_change_password', 'uses' => 'AccountController@do_change_password'));

        Route::post('doResetPassword', array('as' => 'do_reset_password', 'uses' => 'AccountController@do_reset_password'));

        Route::post('updates', array('as' => 'do_update', 'uses' => 'AccountController@do_update'));
    });

    Route::get('eshipper', [
        'as' => 'eshipper',
        'uses' => 'ShippingController@eShipperQuote',
    ]);

    Route::get('eshipper/ship', [
        'as' => 'eshipper-ship',
        'uses' => 'ShippingController@eShipperShipRequest',
    ]);

    Route::get('eshipper/orderinfo', [
        'as' => 'eshipper-orderinfo',
        'uses' => 'ShippingController@eShipperOrderInfoRequest',
    ]);

    Route::group(['middleware' => ['web'], 'prefix' => 'search'], function () {
        Route::get('/{string?}', [
            'as' => 'search',
            'uses' => 'SearchController@search',
        ]);
    });

    Route::get('packing', array('as' => 'packing', 'uses' => 'PackingController@show_packing'));
});

Route::any('{query}', ['domain' => 'www.cadmicro.com', 'uses' => 'StoreController@get_redirect_shopify'])->where('query', 'store.*');

Route::group(['middleware' => ['web'], 'prefix' => 'store'], function () {

    Route::get('/', [
        'as' => 'store',
        'uses' => 'StoreController@get_index',
    ]);

    Route::get('/catalog', [
        'as' => 'store-catalog',
        'uses' => 'StoreController@get_catalog',
    ]);

    Route::get('/catalog/{category}', [
        'as' => 'store-catalog1',
        'uses' => 'StoreController@get_category',
    ]);

    Route::get('/catalog/id/{pid}', [
        'as' => 'store-catalog-id',
        'uses' => 'StoreController@get_product_by_id',
    ]);

    Route::get('/catalog/{category}/{product}', [
        'as' => 'store-catalog2',
        'uses' => 'StoreController@get_productPage',
    ]);

    Route::post('/product/getProductDetails', [
        'as' => 'store-productdetails',
        'uses' => 'StoreController@getProductDetails',
    ]);

    Route::post('/product/updateCart', [
        'as' => 'store-updateCart',
        'uses' => 'StoreController@updateCart',
    ]);

    Route::post('/product/addToCart', [
        'as' => 'store-addToCart',
        'uses' => 'StoreController@addToCart',
    ]);

    Route::post('/product/removeFromCart', [
        'as' => 'store-removeFromCart',
        'uses' => 'StoreController@removeFromCart',
    ]);

    Route::post('/cart/updateQuantity', [
        'as' => 'store-updateQuantity',
        'uses' => 'StoreController@updateQuantity',
    ]);

    Route::post('/cart/coupon', [
        'as' => 'store-addCoupon',
        'uses' => 'StoreController@addCoupon',
    ]);

    Route::post('checkCoupon', [
        'as' => 'store-checkCoupon',
        'uses' => 'StoreController@checkCoupon2',
    ]);

    Route::post('calcTotal', [
        'as' => 'store-calcTotal',
        'uses' => 'StoreController@calcTotal',
    ]);

    Route::post('calcCart', [
        'as' => 'store-calcCart',
        'uses' => 'StoreController@postCalcCart',
    ]);

    Route::get('checkout', [
        'as' => 'checkout',
        'uses' => 'StoreController@checkout',
    ]);

    Route::post('checkout/pay', [
        'as' => 'checkout-pay',
        'uses' => 'BillingController@createOrder',
    ]);

    Route::post('checkout/resetCard', [
        'as' => 'checkout-resetCard',
        'uses' => 'BillingController@resetCard',
    ]);

    Route::post('checkout/shipping', [
        'as' => 'checkout-shipping',
        'uses' => 'BillingController@shippingStep',
    ]);

    Route::post('checkout/billing', [
        'as' => 'checkout-billing',
        'uses' => 'BillingController@billingStep',
    ]);

    Route::get('checkout/completed/{order}/{newUser}/invoice', [
        'as' => 'checkout-invoice',
        'uses' => 'BillingController@orderInvoice',
    ]);

    Route::get('checkout/completed/{order}', [
        'as' => 'checkout-success2',
        'uses' => 'BillingController@orderComplete2',
    ]);

    Route::get('checkout/completed/{order}/{newUser}', [
        'as' => 'checkout-success',
        'uses' => 'BillingController@orderComplete',
    ]);

    Route::get('checkout/error', [
        'as' => 'checkout-error',
        'uses' => 'BillingController@checkoutError',
    ]);

    Route::get('checkout/guest', [
        'as' => 'checkout-guest',
        'uses' => 'StoreController@checkoutSteps',
    ]);

    Route::get('checkout/member', [
        'as' => 'checkout-step',
        'uses' => 'StoreController@checkoutSteps',
    ]);

    Route::get('cart', [
        'as' => 'cart',
        'uses' => 'StoreController@cart',
    ]);

    Route::post('/taxes', [
        'as' => 'getTaxes',
        'uses' => 'BillingController@getTaxes',
    ]);

    Route::post('/calc/shipping', [
        'as' => 'calcShipping',
        'uses' => 'BillingController@calcShipping',
    ]);

    Route::post('/autocomplete/cities', [
        'as' => 'getCities',
        'uses' => 'StoreController@getCities',
    ]);

    Route::post('search', [
        'as' => 'store-search1',
        'uses' => 'StoreController@searcher',
    ]);

    Route::get('search/{query}', [
        'as' => 'store-search',
        'uses' => 'StoreController@search',
    ]);
});

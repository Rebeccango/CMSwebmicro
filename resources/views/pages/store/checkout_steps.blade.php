@extends('layouts.store')
@section('title')
  Checkout - Store | CAD MicroSolutions Inc.
@stop
@push('meta-tags')
  <?php echo
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  header('Content-Type: text/html');?>
@endpush
@push('after-styles')
<link rel="stylesheet" href="/js/formvalidation-dist-v0.8.1/dist/css/formValidation.min.css">
@endpush
@push('after-scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
{{-- <script src="{{asset('js/store/checkout.js')}}"></script> --}}
<script>
Stripe.setPublishableKey("{{env("STRIPE_API_KEY")}}");
</script>
<script src="/js/formvalidation-dist-v0.8.1/dist/js/formValidation.min.js"></script>
<script src="/js/formvalidation-dist-v0.8.1/dist/js/framework/bootstrap.min.js"></script>
<script src="/js/formvalidation-dist-v0.8.1/dist/js/framework/bootstrap4.min.js"></script>
<script type="text/javascript" src="{{ mix('js/checkout.js') }}"></script>
@endpush
@section('body')
  @php
    $cart_tax = 0;
    $cart_shipping = 0;
  @endphp
  <section id="checkout_steps" data-checkout-step="{{ $checkout_step }}" class="pt-5">
    <div class="container">
    <h1 class="mb-4"><i class="fa fa-cart-arrow-down mr-4" aria-hidden="true"></i>CHECKOUT <span class="beta-badge badge badge-sm badge-secondary" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-trigger="hover" data-content="The CAD MicroSolutions Online Store is currently in Beta. <br>There may be bugs, if you run into any issues please don't hesitate to email us at <a href='mailto:support@cadmicro.com'>support@cadmicro.com</a>">BETA</span></h1>
    @if(Cookie::get('coupon') !== null)
      @php
        //check if coupon is valid
        $valid = true;
      @endphp
      @if(!$valid)
      <div class="alert alert-danger" role="alert" style="margin-top:30px">
        <strong>COUPON EXPIRED</strong> - The coupon code "{{Cookie::get('coupon')}}" is no longer available or does not apply to your current cart.<br />It was removed from your cart.</a>.
      </div>
      @endif
    @endif

    @if($errors->any() || Session::has('error'))
			<div class="alert alert-{{Session::has('error_type') ? Session::get('error_type') : 'danger'}}" role="alert" style="margin-top:30px">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
				{!!session('error')!!}
			</div>
		@endif

    @if(session('coupon'))
      <div class="alert alert-{!!session('result')!!}" role="alert" style="margin-top:30px">
        <strong>{!!session('title')!!} </strong> - {!!session('msg')!!}.
      </div>
    @endif
    <div class="row">
			<div class="col-lg-8 fixed-widget" style="padding:0;">
        <div class="checkout-steps card">
          <div class="card-block">
            <div class="form-loading">
              <div class="loading"></div>
            </div>
            <div style="overflow:hidden">
            <div id="checkout-steps" class="card cart-widget nav nav-tabs row flex-row" role="tablist" aria-multiselectable="true">
              <div class="checkout-step nav-item {{ $checkout_step_class[0] }} col-lg-4">
                <div class="loading"></div>
                <div class="checkout-step-title">
                  Shipping
                </div>
                <div class="checkout-step-content">
                  <p>
                    Enter your shipping details.
                  </p>
                </div>
                <div class="checkout-step-edit" >
                  <a href="#shipping" class="nav-link active" data-toggle="tab"  data-toggle="tooltip" data-placement="right" title="Modify" role="tab" aria-controls="nav-shipping" aria-selected="true"></a>
                </div>
              </div>
              <div class="checkout-step nav-item {{ $checkout_step_class[1] }} col-lg-4">
                <div class="loading"></div>

                <div class="checkout-step-title">
                  Billing
                </div>
                <div class="checkout-step-content">
                  <p>
                    Enter your billing details.
                  </p>
                </div>
                <div class="checkout-step-edit" >
                  <a href="#billing" class="nav-link"  data-toggle="tab"  data-toggle="tooltip" data-placement="right" title="Modify" aria-controls="nav-billing" aria-selected="false"></a>
                </div>
              </div>
              <div class="checkout-step nav-item {{ $checkout_step_class[2] }} col-lg-4">
                <div class="loading"></div>
                <div class="checkout-step-title">
                  Review & Confirm
                </div>
                <div class="checkout-step-content">
                  <p>
                    Review and confirm your order before processing payment.
                  </p>
                </div>
                <div class="checkout-step-edit" >
                  <a href="#complete" class="nav-link"  data-toggle="tab"  data-toggle="tooltip" data-placement="right" title="Modify" aria-controls="nav-billing" aria-selected="false"></a>
                </div>
              </div>
            </div>
            <div id="checkout-content" class="card cart-widget tab-content" role="tablist" aria-multiselectable="true">
              <div id="shipping" role="tabpanel" data-step="1" class="tab-pane {{ $checkout_step_class[0] }} form">
                {{ Form::open(array('url' => route('checkout-shipping'), 'data-toggle'=>'', 'id'=>'checkout-form', 'role'=>'form', 'method'=>'POST')) }}
                <div class="form-group">
                  <ul class="errors"></ul>
                </div>
                <div class="form-group has-feedback ">
                  <div class="form-inline row">
                    <div class="form-group col-sm-6 required">
                      <label for="ship_firstname" class="control-label">First Name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="ship_firstname" autocomplete="shipping name given-name" name="ship_firstname" placeholder="First name"  value="{{ $checkout->ship_firstname }}">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="ship_lastname" class="control-label">Last Name</label>
                      <div class="input-group">
                        <input type="text" autocomplete="shipping name family-name" class="form-control" id="ship_lastname" name="ship_lastname" placeholder="Last name" value="{{ $checkout->ship_lastname }}">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group col-sm-12 required">
                      <label for="ship_address_1" class="control-label">Address</label>
                      <div class="input-group">
                        <input type="text" autocomplete="shipping address-line1 street-address" class="form-control" id="ship_address_1" value="{{ $checkout->ship_address_1 }}" name="ship_address_1" placeholder="Address">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group  col-sm-12">
                      <label for="ship_address_2" autocomplete="shipping address-line2 address-line1" class="control-label">Address Line 2</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="ship_address_2" value="{{ $checkout->ship_address_2 }}" name="ship_address_2" placeholder="Address Line 2">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="ship_province" class="control-label">Province</label>
                      <div class="input-group">
                        <select class="province-select" style="width:100%;" autocomplete="shipping province"  id="ship_province" @if($checkout->ship_province != "") data-initvalue="{{ $checkout->ship_province }}" @endif name="ship_province">
                          @php
                          $provinces = DB::table('provinces')->orderBy('name','asc')->get();
                          @endphp
                          @foreach($provinces as $i => $p)
                            @if($checkout->ship_province != "")
                              <option {{ $p->abbrv == $checkout->ship_province ? "selected" : "" }} value="{{$p->abbrv}}">{{$p->name}}</option>
                            @else
                              @if($i == 0)
                                <option default selected value="{{$p->abbrv}}">{{$p->name}}</option>
                              @else
                                <option value="{{$p->abbrv}}">{{$p->name}}</option>
                              @endif
                            @endif
                          @endforeach
                        </select>
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="ship_postal" class="control-label">Postal Code</label>
                      <div class="input-group">
                        <input type="text" autocomplete="shipping postal-code"  class="form-control postal-code"  id="ship_postal" name="ship_postal" value="{{ $checkout->ship_postal }}" placeholder="Postal Code">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="ship_city" class="control-label">City</label>
                      <div class="input-group">
                        <input type="text" autocomplete="shipping city" class="form-control" id="ship_city" value="{{ $checkout->ship_city }}" name="ship_city" placeholder="City">
                      </div>
                    </div>
                    <div class="form-group  col-xs-6 col-md-6 col-xs-12 required">
                      <label for="ship_country" class="control-label">Country</label>
                      <div class="input-group">
                        <input type="text" readonly class="form-control" id="ship_country" value="CANADA" name="ship_country">
                      </div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="ship_org" class="control-label">Company</label>
                      <div class="input-group">
                        <input type="text" autocomplete="shipping organization" class="form-control" id="ship_org" value="{{ $checkout->ship_org }}" name="ship_org" placeholder="Organization">
                      </div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="ship_tel" class="control-label">Phone Number</label>
                      <div class="input-group">
                        <input type="text" autocomplete="shipping tel" class="form-control" id="ship_tel" value="{{ $checkout->ship_tel }}" name="ship_tel" placeholder="Phone Number">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="checkout-title-divider">
                  <div class="cart-widget-block p-3">
                    <div class="cart-widget-label">Shipping Method</div>
                  </div>
                </div>
                <div id="shippingOptions" class="form">
                  <div class="form-loading">
                    <div class="loading"></div>
                  </div>
                  @if($shipping_details != null && isset($shipping_details))
                      @foreach($shipping_details as $k => $rate)
                        <label for="{{$rate->serviceId}}" class="ship_option d-flex flex-row">
                          <input type="radio" class="flex-column" data-amount="{{$rate->totalCharge}}" name="ship_method"  id="{{$rate->serviceId}}" value="{{$rate->serviceId}}" @if($rate->serviceId == $checkout->ship_method && $checkout->ship_method !="") checked @else
                            {{ $k == 0 ? "checked" : "" }}
                          @endif/>
                          <span class="pl-4"> <span class="h6">{{$rate->carrierName}}</span> <span class="text-sm text-primary">{{$rate->serviceName}}</span></span>
                          <span class="small text-muted flex-column pl-3">(estimated {{$rate->transitDays}} days)</span>
                          <span class="small flex-column pl-3">{{$rate->totalCharge}} CAD</span>
                        </label>
                      @endforeach
                  @else
                    <div id="defaultShippingMsg" class="alert alert-primary">
                      Please enter a valid province, and postal code to view shipping options.
                    </div>
                  @endif
                </div>
                <div class="form-ft" style="width:100%">
                  <div class="row">
                  <div class="col-lg-8 hidden-xs-down text-left form-ft-label">
                    SHIPPING DETAILS
                  </div>
                  <div class="col-lg-4 col-sm-12 form-ft-button">
                    <button type="submit" class="btn btn-md btn-primary btn-next" disabled><span>SAVE &amp; CONTINUE</span><i class="ml-3 fas fa-chevron-right"></i></button>
                  </div>
                </div>
                </div>
                {{ Form::close() }}
              </div>

              <div id="billing" role="tabpanel" data-step="2" class="tab-pane {{ $checkout_step_class[1] }} form">
                {{ Form::open(array('url' => route('checkout-shipping'), 'data-toggle'=>'', 'id'=>'checkout-form', 'role'=>'form', 'method'=>'POST')) }}
              <div class="form-group">
                <ul class="errors"></ul>
              </div>
                <div class="form-group has-feedback ">
                  <div class="form-inline row">
                    <div class="form-group col-xs-12 col-md-12 col-xs-12">
                      <button type="button" id="btn-same-ship" class="btn btn-sm btn-primary btn-same btn-same-ship form-btn"><i class="far fa-copy"></i> Use Shipping Address</button>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="bill_firstname" class="control-label">First Name</label>
                      <div class="input-group">
                        <input type="text" class="form-control" value="{{ $checkout->bill_firstname }}" autocomplete="billing name given-name" id="bill_firstname" name="bill_firstname" placeholder="First name">
                      </div>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="bill_lastname" class="control-label">Last Name</label>
                      <div class="input-group">
                        <input type="text" autocomplete="billing name family-name" value="{{ $checkout->bill_lastname }}" class="form-control" id="bill_lastname" name="bill_lastname" placeholder="Last name">
                      </div>
                    </div>
                    <div class="form-group col-sm-12 required">
                      <label for="bill_address_1" class="control-label">Address</label>
                      <div class="input-group">
                        <input type="text" class="form-control" autocomplete="billing street-address address-line1" value="{{ $checkout->bill_address_1 }}" id="bill_address_1" name="bill_address_1" placeholder="Address">
                      </div>
                    </div>
                    <div class="form-group  col-sm-12">
                      <label for="bill_address_2" class="control-label">Address Line 2</label>
                      <div class="input-group">
                        <input type="text" autocomplete="billing address-line1 address-line2" class="form-control" id="bill_address_2" value="{{ $checkout->bill_address_2 }}" name="bill_address_2" placeholder="Address Line 2">
                      </div>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="bill_province" class="control-label">Province</label>
                      <div class="input-group">
                        <select class="province-select" style="width:100%;" id="bill_province" autocomplete="billing province" name="bill_province" @if($checkout->bill_province != "") data-initvalue="{{ $checkout->bill_province }}" @endif>
                            @foreach($provinces as $i => $p)
                              @if($checkout->bill_province != "")
                                <option {{ $p->abbrv == $checkout->bill_province ? "selected" : "" }} value="{{$p->abbrv}}">{{$p->name}}</option>';
                              @else
                                @if($i == 0)
                                  <option default selected value="{{$p->abbrv}}">{{$p->name}}</option>';
                                @else
                                  <option value="{{$p->abbrv}}">{{$p->name}}</option>';
                                @endif
                              @endif
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="bill_postal" class="control-label">Postal Code</label>
                      <div class="input-group">
                        <input type="text" autocomplete="billing postal-code" class="form-control postal-code" minlength="6" id="bill_postal" name="bill_postal" placeholder="Postal Code" value="{{ $checkout->bill_postal }}">
                      </div>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="bill_city" class="control-label">City</label>
                      <div class="input-group">
                        <input type="text" autocomplete="billing city" class="form-control" id="bill_city" value="{{ $checkout->bill_city }}" name="bill_city" placeholder="City">
                      </div>
                    </div>
                     <div class="form-group  col-xs-6 col-md-6 col-xs-12 required">
                      <label for="bill_country" class="control-label">Country</label>
                      <div class="input-group">
                        <input type="text" readonly class="form-control postal-code" id="bill_country" value="CANADA" name="bill_country" value="{{ $checkout->bill_country }}">
                      </div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="bill_org" class="control-label">Company</label>
                      <div class="input-group">
                        <input type="text" autocomplete="billing organization" class="form-control" id="bill_org" value="{{ $checkout->bill_org }}" name="bill_org" placeholder="Organization">
                      </div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="bill_tel" class="control-label">Phone Number</label>
                      <div class="input-group">
                        <input type="text" autocomplete="billing tel" class="form-control" id="bill_tel" value="{{ $checkout->bill_tel }}" name="bill_tel" placeholder="Phone Number">
                      </div>
                    </div>
                    {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div> --}}
                    <div class="form-group col-xs-12 col-md-12 col-xs-12">
                      <button type="button" id="btn-same-ship" class="btn btn-sm btn-primary btn-same btn-same-ship form-btn"><i class="far fa-copy"></i> Use Shipping Address</button>
                    </div>
                  </div>
                  <div class="checkout-title-divider">
                    <div class="cart-widget-block p-3">
                      <div class="cart-widget-label" id="payment_details">Payment Details</div>
                    </div>
                  </div>
                  <div class="form-inline row">
                  <div class="form-group col-lg-12 col-sm-12 required">
                    <label for="credit_type" class="control-label" style="width:100%">Select Credit Card Type</label>
                    <div class="row w-100">
                    <div class="col-lg-3 col-sm-4">
                      <select class="credit_type" style="width:150px;" id="credit_type" autocomplete="billing cc-type" name="credit_type" data-error="Credit Card Type" data-initvalue="{{!empty($card) ? $card->brand : ""}}" @if(!empty($card)) readonly  @endif>
                        <option value="Visa" {{!empty($card)  ? (strtolower($card->brand) == "Visa" ? "selected" : "") : ""}}>Visa</option>
                        <option value="Mastercard" {{ (!empty($card)  ? (strtolower($card->brand) == "Mastercard" ? "selected" : "") : "") }}>Mastercard</option>
                        <option value="Mastercard" {{ (!empty($card)  ? (strtolower($card->brand) == "American Express" ? "selected" : "") : "") }}>American Express</option>
                      </select>
                    </div>
                    <div class="col-lg-9 col-sm-8">
                      <span class="card " style="display:inline-block; padding: 0 5px;">
                          <img src="{{asset('storage/icons/stripe/visa.svg')}}" height="36px" data-toggle="tooltip" data-placement="top" title="Visa">
                          <img src="{{asset('storage/icons/stripe/mastercard.svg')}}" height="36px" data-toggle="tooltip" data-placement="top" title="Mastercard">
                          <img src="{{asset('storage/icons/stripe/amex.svg')}}" height="36px" data-toggle="tooltip" data-placement="top" title="American Express">
                      </span>
                      <a href="https://stripe.com/ca" target="_blank"><img src="{{asset('/storage/icons/stripe/Big/powered_by_stripe.svg')}}" height="36px"  data-toggle="tooltip" data-placement="top" title="Powered by Stripe" style='margin-left:15px'/></a>
                    </div>
                    </div>
                  </div>
                  <div class="form-group  col-sm-12 col-lg-8 required">
                    <label for="cc_name" class="control-label">Name on Card</label>
                    <div class="input-group">
                      <input type="text" autocomplete="billing cc-name" style="width:70%" class="form-control postal-code" id="cc_name" name="cc_name"  @if(!empty($card)) readonly @endif  value="{{ !empty($card) ? $card->name : "" }}" placeholder="The name on the front of your card">
                    </div>
                  </div>
                  <div class="form-group  col-sm-6 required">
                    <label for="cc_num" class="control-label">Card Number</label>
                    <div class="input-group">
                      <input type="text" value="{{ !empty($card) ? "••••••••••••" . $card->last4 : ""}}" autocomplete="billing cc-number" style="width:100%" class="form-control" id="cc_num" name="cc_num" placeholder="Credit Card Number"  @if(!empty($card)) readonly @endif>
                    </div>
                  </div>
                  <div class="form-group  col-sm-6 required">
                    <label for="cc_ccv" class="control-label">CVV</label>
                    <div class="input-group">
                      <input type="text" autocomplete="billing cc-csc" class="form-control postal-code" pattern="^[_0-9]{3,}|•••$" value="{{!empty($card)  ? "•••" : ""}}" maxlength="3" minlength="3" id="cc_ccv" name="cc_ccv" placeholder="CVV"  @if(!empty($card) ) readonly @endif>
                        <div class="cvv-info"><i class="fas fa-info-circle pl-3"></i></div>
                    </div>
                  </div>
                  <div class="form-group col-sm-12"></div>
                  <div class="form-group col-sm-6 required">
                    <label for="bill_expire" class="control-label">Expiration Date</label>
                    <div class="input-group">
                      <select class="form-control"
                      value="{{ (!empty($card) ? $card->exp_month : '') }}" autocomplete="billing cc-exp-month" id="cc_expire_1" name="cc_expire_1"
                        style=" width:90px; height: 34px;line-height: 13px;float: left;padding-top: 6px;text-align:center;" data-toggle="popover" data-content="Expiry Month (MM)" data-placement="bottom" data-trigger="hover"
                        @if(!empty($card)) readonly @endif>
                        <option value="" disabled selected hidden>MM</option>
                        @for($i = 1; $i<=12; $i++)
                          <option value="{{$i < 10 ? "0".$i : $i}}" {{ (!empty($card) ? ($card->exp_month == $i ? "selected" :"") : "") }}>{{$i < 10 ? "0".$i : $i}}</option>
                        @endfor
                      </select>
                      <select class="form-control" id="cc_expire_2" autocomplete="billing cc-exp-year" value="{{ !empty($card) ? $card->exp_year : '' }}" name="cc_expire_2" style="width:100px; height: 34px;line-height: 13px;float: left;padding-top: 6px; text-align:center;" data-toggle="popover" data-content="Expiry Year (YY)"  data-placement="bottom" data-trigger="hover"
                        @if(!empty($card)) readonly @endif>
                        <option value="" disabled selected hidden>YY</option>
                        @for($i = 0; $i<=15; $i++)
                          <option value="{{$i + date('Y')}}" {{ (!empty($card) ? ($card->exp_year == $i + date('Y') ? "selected" :"") : "") }}>{{$i + date('Y')}}</option>
                        @endfor
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-xs-12 col-md-12 col-xs-12 col-lg-12" @if($card == '') style="display:none;" @endif>
                    <button type="button" id="change-card" class="btn btn-sm btn-primary form-btn"><i class="fas fa-credit-card"></i> Use a Different Card</button>
                  </div>
                </div>
              </div>
              <div class="form-ft" style="width:100%">
                <div class="row">
                <div class="col-lg-8 hidden-xs-down text-left form-ft-label">
                  BILLING DETAILS
                </div>
                <div class="col-lg-4 col-sm-12 form-ft-button">
                  <button type="submit" class="btn btn-md btn-primary btn-next" disabled><span class="mr-2">SAVE &amp; CONTINUE</span><i class="fas fa-long-arrow-alt-right"></i></button>
                </div>
              </div>
              </div>
              {{ Form::close() }}
            </div>

            <div id="complete" role="tabpanel"  data-step="2"  class="tab-pane {{$checkout_step_class[2]}} form">
                {{ Form::open(array('url' => '', 'data-toggle'=>'', 'role'=>'form', 'method'=>'POST')) }}
                <div class="form-group">
                  <ul class="errors"></ul>
                </div>
                <div class="title-block">
                  <h1><i class="fa fa-shopping-cart" aria-hidden="true"></i> ORDER</h1>
                  <span class="num-items"><span class="cart-total-items">{{$calcCart->num_items}}</span> ITEM(s)</span>
                </div>
                <div id="order-items-list" class="cart-items-list">
                  <div class="cart-item">
                    <div class="cart-item-col" style="width:150px"></div>
                    <div class="cart-item-col" style="width:45%">Item Details</div>
                    <div class="cart-item-col" style="width:15%">Unit Price</div>
                    <div class="cart-item-col" style="width:10%">QTY</div>
                    <div class="cart-item-col" style="width:15%">Total Price</div>
                  </div>
                  @foreach($calcCart->products as $product)
                    @php
                    $category = DB::table('categories')
                            ->where('id','=',$product->category_id)
                            ->first();
                    $image = explode(",",$product->images)[0];
                    @endphp
                    <div class="cart-item" data-pid="{{$product->id}}">
                      <a target="_blank" href="/store/catalog/{{$category->slug}}/{{$product->slug}}" title="{{$product->title}}"><div class="cart-item-img" style="background-image:url({{$product->thumbnail}})"></div></a>
                      <div class="cart-item-details">
                        <a href="/store/catalog/{{$category->slug}}" class="category" title="{{$category->name}}">{{$category->name}}</a>
                        <h2><a target="_blank" href="/store/catalog/{{$category->slug}}/{{$product->slug}}" class="name" title="{{$product->title}}">{{$product->title}}</a></h2>
                        <p class="product_info hidden-sm-down">
                            {{$product->excerpt}}
                        </p>
                      </div>
                      <div class="cart-item-unitprice">
                        ${{number_format($product->price,2)}} {{$product->currency}}
                      </div>
                      <div class="cart-item-quantity">
                        {{$product->qty}}
                      </div>
                      <div class="cart-item-total">
                        ${{number_format($product->price * $product->qty,2)}} {{$product->currency}}
                      </div>
                    </div>
                @endforeach
                </div>
                @if(!Auth::check())
                <div class="checkout-title-divider">
                  <div class="cart-widget-block p-3">
                    <div class="cart-widget-label">Account Details</div>
                  </div>
                </div>
                <div id="account" class="form">
                  <div class="form-group has-feedback ">
                    <div class="form-inline row">
                      <div class="form-group col-sm-12 required">
                        <p>Please enter your email address to recieve a copy of your order confirmation, as well as the option to create an account to view your up-to-date order progress and history.</p>
                        <p class="text-primary">If you already have an account with the email you've entered, it will automatically be associated with your account.</p>
                        <label for="email" class="control-label ">Email</label>
                        <div class="input-group w-50">
                          <input type="email" class="form-control" style="width:300px" id="email" name="email" placeholder="email@address.com">
                        </div>
                        <p class="text-muted small w-100 m-0 mt-2">
                          Your email address will not be sold to third-party mailing lists.
                        </p>
                      </div>
                  </div>
                </div>
                </div>
                @endif

                <div class="checkout-title-divider">
                  <div class="cart-widget-block p-3">
                    <div class="cart-widget-label">Agree to Terms & Complete Order</div>
                  </div>
                </div>
                <div style="min-height: 80px;">
                    @if(Auth::check())
                        <input type="hidden" id="email" name="email" value="{{Auth::user()->email}}">
                    @endif
                    <div class="form-group col-xs-12 col-md-12 col-lg-12" style="padding-top:13px; padding-top: 13px;
                      display: inline-block;
                      float: none;
                    }">
                    <label class="required" for="agree_terms">
                      <input type="checkbox" name="agree_terms" id="agree_terms" class="agree_terms" /> You must agree to the CAD MicroSolutions <a href="{{route('privacy-policy')}}">Privacy Policy</a>
                      </label>
                    </div>

                    <div class="form-ft" style="width:100%">
                      <div class="row">
                      <div class="col-lg-8 hidden-xs-down text-left form-ft-label">
                        CONFIRM & PLACE ORDER
                      </div>
                      <div class="col-lg-4 col-sm-12 form-ft-button">
                        {{-- <div class="loading"></div> --}}
                        <button type="submit" id="pay" class="btn btn-lg btn-success" >PLACE ORDER</button>
                      </div>
                    </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
      <div class="col-lg-4 floating-widget">
        <div  class="cart-summary card">
          <div class="card-block">
            <div class="form-loading">
              <div class="loading"></div>
            </div>
            <div class="cart-actions">
              <a href="{{route('cart')}}" class="checkout-btn btn-update"><i class="far fa-edit"></i> EDIT CART</a>
            </div>
            <h3 class="card-title">ORDER SUMMARY <span class="beta-badge badge badge-sm badge-secondary" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-trigger="hover" data-content="The CAD MicroSolutions Online Store is currently in Beta. <br>There may be bugs, if you run into any issues please don't hesitate to email us at <a href='mailto:support@cadmicro.com'>support@cadmicro.com</a>">BETA</span></h3>
            <div class="mb-3">
              <small><em>*Note: All final totals are calculated in CAD based on today's exchange rates</em></small></div>
            <div class="card cart-widget">
              <div class="cart-widget-block">
                <div class="cart-widget-label">
                  {{$calcCart->num_items}} ITEM(s)
                </div>
              </div>
              @if($calcCart->coupon != "")
                <div class="cart-widget-block cart-widget-title cart-widget-coupon" data-couponname="{{$calcCart->coupon->name}}">
                  <div class="cart-widget-label">COUPON<i class="fa fa-lg fa-info-circle" data-container="body" data-toggle="popover" data-html="true"  data-trigger="hover" data-placement="right" data-content="<strong>Coupon Code:</strong><br />{{$calcCart->coupon->name}}<br/>{{$calcCart->coupon->image != "" ? '<img style="width:100%" src="'.asset('/storage/'.$calcCart->coupon->image).'" />' : ""}}<strong>Description:</strong> {{$calcCart->coupon->details}}" aria-hidden="true"></i>
                  </div>
                  <div class="cart-widget-value green">
                  {!!$calcCart->coupon->name!!}
                  </div>
                </div>
              @endif
              <div class="cart-widget-block cart-widget-title">
                  <div class="cart-widget-label">SUBTOTAL</div>
                  <div class="cart-widget-value">$<span id="sub_total">{{number_format($calcCart->total,2)}}</span> CAD</div>
              </div>
              <div id="cart_tax" class="cart-widget-block cart-widget-title">
                  <div class="cart-widget-label">TAXES</div>
                  <div class="cart-widget-value"></div>
              </div>

              <div id="cart_shipping" class="cart-widget-block cart-widget-title @if(isset($checkout->ship_amount)) in @endif"  >
                  <div class="cart-widget-label">SHIPPING</div>
                  <div class="cart-widget-value">@if(isset($checkout->ship_amount))$<span>{{number_format(floatval ($checkout->ship_amount),2,".",",")}}</span> CAD @endif</div>
              </div>
              <div class="cart-widget-block cart-widget-title cart-loading-block">
                  <div class="loading"></div>
              </div>
              <div id="cart_total" class="cart-widget-block cart-widget-title cart-widget-total">
                <div class="cart-widget-label">TOTAL</div>
                <div class="cart-widget-value">$<span id="checkout_total">{{number_format(floatval ($calcCart->total),2,".",",")}}</span> CAD</div>
              </div>
            </div>
          </div>
        </div>
        <div class="cart-summary cart-promo card">
          <div class="card-block">
            <div class="card cart-widget">
              <a data-toggle="collapse" href="#promo" aria-expanded="false" aria-controls="collapseExample">
                <div class="cart-widget-block">
                  <div class="cart-widget-label">REDEEM PROMO</div>
                  <div class="cart-widget-value"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </div>
              </a>
              <div id="promo" class="collapse p-2 cart-widget-title">
                <input id="couponinput" type="text" class="couponinput" autocomplete="off" autocapitalize="off" name="cart_couponcode" alt="Enter Promotional Code" maxlength="50" placeholder="Enter your promo code" value="">
                <div class="clear">Note: Include uppercase letters and hyphens.</div>
                <button type="button" class="addcoupon checkout-btn" name="cart_addCoupon" id="cart_addcoupon" disabled='true'>APPLY COUPON</button>
              </div>
            </div>
          </div>
      </div>
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
  </div>
  </div>
</div>
</section>
@stop

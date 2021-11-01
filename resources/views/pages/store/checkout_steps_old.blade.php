@extends('layouts.store')
@section('title')
  Checkout - Store | CAD MicroSolutions Inc.
@stop
@section('meta')
  <?php echo
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  header('Content-Type: text/html');?>
@stop

@section('body')
  @php
    if(Auth::check()){
      $steps = 4;
    }else{
      $steps = 5;
    }
    $cart_tax = 0;
    $cart_shipping = 0;

    $checkout_step = ((isset($_COOKIE["checkout-step"]) && $_COOKIE["checkout-step"] != "") ? $_COOKIE["checkout-step"] : 1);

    if(old('checkout_step')){
      $checkout_step = old('checkout_step');
    }

    if(session('submitted') == 1){
      $checkout_step = 5;
    }
  @endphp
  <section id="checkout_steps">
    <div class="container">
      <h1><i class="fa fa-cart-arrow-down" aria-hidden="true" style="margin-right:15px; font-size: 43px; vertical-align: middle; margin-top: -6px;"></i>CHECKOUT</h1>
      @php
        if(Cookie::get('coupon') !== null){
          //check if coupon is valid
          $valid = true;
          if(!$valid){
          @endphp
          <div class="alert alert-danger" role="alert" style="margin-top:30px">
            <strong>COUPON EXPIRED</strong> - The coupon code "{{Cookie::get('coupon')}}" is no longer available or does not apply to your current cart.<br />It was removed from your cart.</a>.
          </div>
          @php
          }
        }
      @endphp
      {{-- @if(session('error'))
        <div class="alert alert-{{session('error-type')}}" role="alert" style="margin-top:30px">
          {{session('error')}}</a>.
        </div>
      @endif --}}

      @if($errors->any() || Session::has('error'))
  			<div class="alert alert-{{Session::has('error_type') ? Session::get('error_type') : 'danger'}}" role="alert" style="margin-top:30px">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
  				{!!session('error')!!}
  			</div>
  		@endif

      @php
        if(session('coupon')){
          @endphp
          <div class="alert alert-{!!session('result')!!}" role="alert" style="margin-top:30px">
            <strong>{!!session('title')!!}</strong> - {!!session('msg')!!}.
          </div>
          @php
        }
      @endphp
  {{-- <form data-toggle="validator" method="POST" action="{{route('checkout-pay')}}" id="checkout-form" role="form"> --}}

      {{ Form::open(array('url' => route('checkout-pay'), 'data-toggle'=>'validator', 'id'=>'checkout-form', 'role'=>'form', 'method'=>'POST')) }}
      @php

      @endphp
    <div class="row">
			<div class="col-lg-8 fixed-widget" style="padding:0;">
        <div  class="checkout-steps card">
          <div class="card-block">
            <div class="card cart-widget" role="tablist" aria-multiselectable="true">
              <input type="hidden" name="checkout_step" id="checkout_step" value="{{ $checkout_step !='' ? $checkout_step : 1}}"
              <a data-toggle="collapse" href="#shipping" role="tab" aria-expanded="true" {{$checkout_step >= 1 ? 'aria-expanded=true' : 'class=disabled aria-expanded=false' }} aria-controls="collapseExample">
                <div class="cart-widget-block">
                  <div class="cart-widget-label">Shipping Details</div>
                  <div class="cart-widget-value">STEP 1<i style="margin-left:15px;"class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </div>
              </a>
              <div id="shipping" role="tabpanel" data-step="1" class="collapse in cart-widget-content cart-widget-title form">
                <div class="form-group has-feedback ">
                  <div class="form-inline row">
                    <div class="form-group col-sm-6 required">
                      <label for="ship_firstname" class="control-label">First Name</label>
                      <div class="input-group">
                        <input type="text" pattern="^[_A-z]{1,}$" class="form-control" id="ship_firstname" name="ship_firstname" placeholder="First name" value="{{old('ship_firstname')}}" required data-error="Required! Note: Name must only contain letters!">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="ship_lastname" class="control-label">Last Name</label>
                      <div class="input-group">
                        <input type="text" pattern="^[_A-z]{1,}$" class="form-control" id="ship_lastname" name="ship_lastname" placeholder="Last name" value="{{old('ship_lastname')}}" required data-error="Required! Note: Name must only contain letters!">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12 required">
                      <label for="ship_address_1" class="control-label">Address</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="ship_address_1" value="{{old('ship_address_1')}}" name="ship_address_1" placeholder="Address" required data-error="Required!">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  col-sm-12">
                      <label for="ship_address_2" class="control-label">Address Line 2</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="ship_address_2" value="{{old('ship_address_2')}}" name="ship_address_2" placeholder="Address Line 2">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="ship_province" class="control-label">Province</label>
                      <div class="input-group">
                        <select class="province-select" value="{{old('ship_province')}}" style="width:100%;" id="ship_province" name="ship_province" required data-error="Province Required!">
                          @php
                          $provinces = DB::table('provinces')->orderBy('name','asc')->get(); ?>
                          @endphp
                          @foreach($provinces as $p)
                              <option value="{{$p->abbrv}}">{{$p->name}}</option>';
                            @endforeach
                        </select>
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="ship_postal" class="control-label">Postal Code</label>
                      <div class="input-group">
                        <input type="text" class="form-control postal-code" pattern="^[ABCEGHJKLMNPRSTVXYabceghjklmnprstvxy]{1}\d{1}[aA-zZ]{1} *\d{1}[aA-zZ]{1}\d{1}$" minlength="6" id="ship_postal" name="ship_postal" value="{{old('ship_postal')}}" required placeholder="Postal Code" data-error="Postal Code Required! Note: Canadian postal code format only!">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="ship_postal" class="control-label">City</label>
                      <div class="input-group">
                        <select class="form-control js-data-example-ajax select2" minlength="1" id="ship_city" name="ship_city" required placeholder="City" value="{{old('ship_city')}}" >
                        </select>
                        {{-- <input type="text" class="form-control" minlength="1" id="ship_city" name="ship_city" required placeholder="City" data-error="City Required!"> --}}
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  col-xs-6 col-md-6 col-xs-12 required">
                      <label for="ship_country" class="control-label">Country</label>
                      <div class="input-group">
                        <input type="text" readonly class="form-control" id="ship_country" value="CANADA" name="ship_country" required>
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    @if($checkout_step == 1)
                    <div class="form-group col-xs-6 col-md-6 col-xs-12 pull-right">
                      <button type="button" class="btn btn-md btn-primary btn-next pull-right" disabled>NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                    @endif
                  </div>
                </div>
              </div>
              <a  data-toggle="collapse" {{$checkout_step >= 2 ? 'aria-expanded=true' : 'class=disabled aria-expanded=false' }} href="#billing"   role="tab" aria-controls="collapseExample">
                <div class="cart-widget-block">
                  <div class="cart-widget-label">Billing Details</div>
                  <div class="cart-widget-value">STEP 2<i style="margin-left:15px;"class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </div>
              </a>
              <div id="billing" role="tabpanel"  data-step="2"  class="collapse {{$checkout_step >= 2 ? 'in ' : ' '}} cart-widget-content cart-widget-title form">
                <div class="form-group has-feedback ">
                  <div class="form-inline row">
                    <div class="form-group col-sm-12 required">
                      <label for="credit_type" class="control-label" style="width:100%">Credit Card</label>
                      <select class="credit_type" style="width:150px;" id="credit_type" name="credit_type" required data-error="Credit Card Type" value="{{old('credit_type')}}">
                        <option default value="visa"><i class="fab fa-cc-visa" aria-hidden="true"></i> VISA</option>
                        <option value="mastercard"><i class="fab fa-cc-mastercard" aria-hidden="true"></i> MASTERCARD</option>
                        <option value="americanexpress"><i class="fab fa-cc-mastercard" aria-hidden="true"></i> AMERICAN EXPRESS</option>
                      </select>
                    </div>
                    <div class="form-group  col-sm-12 required">
                      <label for="cc_name" class="control-label">Name on Card</label>
                      <div class="input-group">
                        <input type="text" style="width:70%" class="form-control postal-code" id="cc_name" name="cc_name"  value="{{old('cc_name')}}" required placeholder="The name on the front of your card" data-error="Name Required! Note: The Name on the front of your card">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="cc_num" class="control-label">Card Number</label>
                      <div class="input-group">
                        <input type="text" value="{{old('cc_num')}}" pattern="[0-9]{16,16}" style="width:100%" class="form-control postal-code" pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6011[0-9]{12}|622((12[6-9]|1[3-9][0-9])|([2-8][0-9][0-9])|(9(([0-1][0-9])|(2[0-5]))))[0-9]{10}|64[4-9][0-9]{13}|65[0-9]{14}|3(?:0[0-5]|[68][0-9])[0-9]{11}|3[47][0-9]{13})*$" minlength="16" maxlength="16" id="cc_num" name="cc_num" required placeholder="CCV" data-error="Required! Note: Enter only numbers, no Spaces,dashes, etc.">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="cc_ccv" class="control-label">CCV</label>
                      <div class="input-group">
                        <input type="text" style="width:70px" class="form-control postal-code" pattern="^[_0-9]{3,}$" value="{{old('cc_ccv')}}" maxlength="3" minlength="3" id="cc_ccv" name="cc_ccv" required placeholder="CCV" data-error="CCV Required! Note: The 3-digits on the back of your card">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12"></div>
                    <div class="form-group col-sm-6 required">
                      <label for="bill_expire" class="control-label">Expiration Date</label>
                      <div class="input-group">
                        <select class="form-control" value="{{old('cc_expire_1')}}" id="cc_expire_1" name="cc_expire_1" required style=" width:90px; height: 34px;line-height: 13px;float: left;padding-top: 6px;text-align:center;" data-toggle="popover" data-content="Expiry Month (MM)" data-placement="bottom" data-trigger="hover">
                          <option value="" disabled selected hidden>MM</option>
                          @for($i = 1; $i<=12; $i++)
                            <option value="{{$i}}">{{$i < 10 ? "0".$i : $i}}</option>
                          @endfor
                        </select>
                        <span class="input-group-addon" style="height: 34px;line-height: 15px;float: left;">/</span>
                        <select class="form-control" id="cc_expire_2" value="{{old('cc_expire_2')}}" name="cc_expire_2" required style=" width:100px; height: 34px;line-height: 13px;float: left;padding-top: 6px; text-align:center;" data-toggle="popover" data-content="Expiry Year (YY)"  data-placement="bottom" data-trigger="hover">
                          <option value="" disabled selected hidden>YY</option>
                          @for($i = 0; $i<=15; $i++)
                            <option value="{{$i + date('Y')}}">{{$i + date('Y')}}</option>
                          @endfor
                        </select>
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                      <hr />
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="bill_firstname" class="control-label">First Name</label>
                      <div class="input-group">
                        <input type="text" pattern="^[_A-z]{1,}$" class="form-control" value="{{old('bill_firstname')}}" id="bill_firstname" name="bill_firstname" placeholder="First name" required data-error="Required! Note: Name must only contain letters!">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="bill_lastname" class="control-label">Last Name</label>
                      <div class="input-group">
                        <input type="text" value="{{old('bill_lastname')}}" pattern="^[_A-z]{1,}$" class="form-control" id="bill_lastname" name="bill_lastname" placeholder="Last name" required data-error="Required! Note: Name must only contain letters!">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12 required">
                      <label for="bill_address_1" class="control-label">Address</label>
                      <div class="input-group">
                        <input type="text" class="form-control" value="{{old('bill_address_1')}}" id="bill_address_1" name="bill_address_1" placeholder="Address" required data-error="Required!">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  col-sm-12">
                      <label for="bill_address_2" class="control-label">Address Line 2</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="bill_address_2" value="{{old('bill_address_2')}}" name="bill_address_2" placeholder="Address Line 2">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="bill_province" class="control-label">Province</label>
                      <div class="input-group">
                        <select class="province-select" style="width:100%;" id="bill_province" name="bill_province" required data-error="Province Required!" value="{{old('bill_province')}}">
                          @foreach($provinces as $p)
                              <option value="{{$p->abbrv}}">{{$p->name}}</option>';
                            @endforeach
                        </select>
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group  col-sm-6 required">
                      <label for="bill_postal" class="control-label">Postal Code</label>
                      <div class="input-group">
                        <input type="text" class="form-control postal-code" pattern="^[ABCEGHJKLMNPRSTVXYabceghjklmnprstvxy]{1}\d{1}[aA-zZ]{1} *\d{1}[aA-zZ]{1}\d{1}$" minlength="6" id="bill_postal" name="bill_postal" required placeholder="Postal Code" data-error="Postal Code Required! Note: Canadian postal code format only!" value="{{old('bill_postal')}}">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6 required">
                      <label for="ship_postal" class="control-label">City</label>
                      <div class="input-group">
                        <input type="text" class="form-control" minlength="1" id="bill_city" name="bill_city" required placeholder="City" data-error="City Required!" value="{{old('bill_city')}}">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                     <div class="form-group  col-xs-6 col-md-6 col-xs-12 required">
                      <label for="bill_country" class="control-label">Country</label>
                      <div class="input-group">
                        <input type="text" readonly class="form-control postal-code" id="bill_country" value="CANADA" name="bill_country" required value="{{old('bill_country')}}">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
                    <div class="form-group col-xs-6 col-md-6 col-xs-12">
                      <button type="button" id="btn-same-ship" class="btn btn-sm btn-primary btn-same">SAME AS SHIPPING ADDRESS</button>
                    </div>
                    @if($checkout_step <= 2)
                    <div class="form-group col-xs-6 col-md-6 col-xs-12 pull-right">
                      <button type="button" class="btn btn-md btn-primary btn-next pull-right" disabled>NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                  @endif
                  </div>
                </div>
              </div>
              @if(!Auth::check())
              <a  data-toggle="collapse" href="#account" role="tab" aria-controls="collapseExample" {{$checkout_step >= 3 ? 'aria-expanded=true' : 'class=disabled aria-expanded=false' }}>
                <div class="cart-widget-block">
                  <div class="cart-widget-label">Account</div>
                    <div class="cart-widget-value">STEP 3<i style="margin-left:15px;"class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </div>
              </a>
              <div id="account" role="tabpanel"  data-step="3" class="collapse {{$checkout_step >= 3 ? 'in ' : ' '}} cart-widget-content cart-widget-title form">
                <div class="form-group has-feedback ">
                  <div class="form-inline row">
                    <div class="form-group col-sm-12 required">
                      <p class="text-primary">Please enter your email address to recieve a copy of your order confirmation, as well as the option to create an account to view your up-to-date order progress and history.</p>
                      <p class="text-primary">If you already have an account with the email you've entered, it will automatically be associated with your account.</p>
                      <label for="email" class="control-label ">Email</label>
                      <div class="input-group">
                        <input type="email" class="form-control" value="{{old('email')}}" style="width:300px" id="email" name="email" placeholder="email@address.com" required data-error="Required! Note: Must be correct email format.">
                      </div>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block with-errors"></div>
                      <p class="text-muted text-sm">
                        Disclaimer: Your email address will not be sold to third-party mailing lists.
                      </p>
                    </div>
                    <hr />
                    <div class="form-group col-sm-12">
                      {{-- <input type="checkbox" name="subscribe_mail" checked>&nbsp; </label> --}}
											<label>{!! Form::checkbox('subscribe_mail', '0', false) !!}&nbsp;Subscribe to CADMicro news, events, and special offers.</label>
                    </div>
                    @if($checkout_step <= $steps-1)
                    <div class="form-group col-xs-6 col-md-6 col-xs-12 pull-right">
                      <button type="button" class="btn btn-md btn-primary btn-next pull-right" disabled>NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div>
                  @endif
                </div>
              </div>
              </div>
              @endif
              <a  data-toggle="collapse" href="#shippingOptions" role="tab" aria-controls="collapseExample" {{$checkout_step >= $steps-1 ? 'aria-expanded=true' : 'class=disabled aria-expanded=false' }}>
                <div class="cart-widget-block">
                  <div class="cart-widget-label">Shipping Method</div>
                  <div class="cart-widget-value">STEP {{$steps-1}}<i style="margin-left:15px;"class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </div>
              </a>
              <div id="shippingOptions" role="tabpanel"  data-step="{{$steps-1}}"  class="collapse {{$checkout_step >= $steps -1 ? 'in ' : ' '}} cart-widget-content cart-widget-title form">
                <label for="shipping">
                  <div class="iradio"  style="display:inline;">
                    {{ Form::radio('shipping', 'purolator_ground', true) }}
                    {{-- {{ Form::radio('shipping', 'male') }} --}}
                    {{-- <input type="radio" checked name="purolator_ground" > --}}
                  </div>
                  Purolator Ground®
                </label>
                <p style="">
                  For less time-sensitive shipments in one or more business days.
                </p>
                @if($checkout_step <= $steps-1)
                <div class="form-group col-xs-6 col-md-6 col-xs-12 pull-right">
                  <button type="button" class="btn btn-md btn-primary btn-next pull-right" disabled>NEXT <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
              @endif
              </div>
              <a  data-toggle="collapse" href="#complete" role="tab" aria-controls="collapseExample" {{$checkout_step >= $steps ? 'aria-expanded=true' : 'class=disabled aria-expanded=false' }}>
                <div class="cart-widget-block">
                  <div class="cart-widget-label">Complete</div>
                  <div class="cart-widget-value">STEP {{$steps}}<i style="margin-left:15px;"class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </div>
              </a>
              <div id="complete" role="tabpanel" style="min-height: 80px;" data-step="{{$steps}}"  class="collapse {{$checkout_step >= $steps ? 'in ' : ' '}} cart-widget-content cart-widget-title form">
                @if(Auth::check())
                    <input type="hidden" id="email" name="email" value="{{Auth::user()->email}}">
                @endif
                <div class="form-group col-xs-12 col-md-12 col-lg-12" style="padding-top:13px; padding-top: 13px;
    display: inline-block;
    float: none;
}">
                  <label class="required" for="agree_terms">{!! Form::checkbox('agree_terms','0', false, ['required','data-error'=>"You must agree to the privacy policy!", 'class'=>'agree_terms']) !!}&nbsp;You must agree to the CADMicro Solutions <a href="{{route('privacy-policy')}}">Privacy Policy</a></label>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-xs-12" style="float: none;
    display: inline;">
                  <button type="submit" id="pay" class="btn btn-lg btn-success" >PAY NOW <i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
      <div class="col-lg-4 floating-widget">
        <div  class="cart-summary card">
          <div class="card-block">
            <div class="cart-actions">
              <a href="{{route('cart')}}" class="checkout-btn btn-update"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> EDIT CART</a>
            </div>
            <h3 class="card-title">ORDER SUMMARY</h3>
            <div class="card cart-widget">
              <div class="cart-widget-block">
                <div class="cart-widget-label">
                  {{$calcCart->num_items}} ITEM(s)
                </div>
              </div>
              @if($calcCart->coupon != "")
                <div class="cart-widget-block cart-widget-title discount_block">
                  <div class="cart-widget-label">COUPON<i class="fa fa-lg fa-info-circle" data-container="body" data-toggle="popover" data-html="true"  data-trigger="hover" data-placement="right" data-content="<strong>Coupon Code:</strong><br />{{$calcCart->coupon->name}}<br />
                    {{$calcCart->coupon->image != "" ? '<img style="width:100%" src="'.asset('/storage/'.$calcCart->coupon->image).'" />' : ""}}<strong>Description:</strong> {{$calcCart->coupon->details}}" aria-hidden="true"></i></div>
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
              <div id="cart_shipping" class="cart-widget-block cart-widget-title">
                  <div class="cart-widget-label">SHIPPING</div>
                  <div class="cart-widget-value"></div>
              </div>
              <div class="cart-widget-block cart-widget-title cartTaxShip">
                  <div class="loading in"></div>
              </div>
              <div class="cart-widget-block cart-widget-title cart-widget-total">
                <div class="cart-widget-label">TOTAL</div>
                <div class="cart-widget-value">$<span id="checkout_total">{{money_format("%i",$calcCart->total)}}</span> CAD</div>
              </div>
            </div>
            {{-- <h3 class="card-title">ORDER SUMMARY</h3>
            <div class="card cart-widget">
              <div class="cart-widget-block">
                <div class="cart-widget-label">
                  {{$calcCart->num_items}} ITEM(s)
                </div>
              </div>
              <div class="cart-widget-block cart-widget-title">
                  <div class="cart-widget-label">SUBTOTAL</div>
                  <div class="cart-widget-value">$<span id="sub_total">{{number_format($calcCart->total,2)}}</span> CAD</div>
              </div>
              @php
              $coupon = Cookie::get('coupon');
              if($coupon != "" && isset($coupon) && isset($details) && $details !="" && isset($coupon_status) && $coupon_status == true){
              @endphp
              <div id="discount_block" class="cart-widget-block cart-widget-title">
                  <div class="cart-widget-label">DISCOUNT <i class="fa fa-lg fa-info-circle" data-container="body" data-toggle="popover" data-html="true" data-trigger="hover" data-placement="right" data-content="<strong>Coupon Code:</strong><br />{{$coupon}}<br /><strong>Description:</strong> {{$details->details}}" aria-hidden="true"></i></div>
                  <div class="cart-widget-value green">
                    @if($details->type != "SHIPPING")@endif
                    @if($details->type == "VALUE"){{"$".number_format($details->value,2)." CAD"}}@endif
                    @if($details->type == "PERCENT"){{$details->value."% OFF"}}@endif
                    @if($details->type == "SHIPPING"){{"FREE SHIPPING"}}@endif
										@if($details->type == "ITEM"){{$details->title}}@endif
                  </div>
              </div>
              @php
              }
              @endphp
              <div id="cart_tax" class="cart-widget-block cart-widget-title">
                  <div class="cart-widget-label">TAXES</div>
                  <div class="cart-widget-value"></div>
              </div>
              <div id="cart_shipping" class="cart-widget-block cart-widget-title">
                  <div class="cart-widget-label">SHIPPING</div>
                  <div class="cart-widget-value"></div>
              </div>
              <div class="cart-widget-block cart-widget-title cartTaxShip">
                  <div class="loading in"></div>
              </div>
              <div class="cart-widget-block cart-widget-title cart-widget-total">
                <div class="cart-widget-label">TOTAL</div>
                <div class="cart-widget-value">$<span  id="checkout_total">
                  @if(isset($details) && isset($coupon_status) && $coupon_status == true)
                  @if($details->type == "VALUE"){{number_format($calcCart->total - $details->value,2)}}@endif
                  @if($details->type == "PERCENT"){{number_format($calcCart->total - $calcCart->total * ($details->value/100),2)}}@endif
                  @if($details->type == "ITEM"){{"$".number_format($calcCart->total,2,".",",")." CAD"}}@endif
                  @if($details->type == "SHIPPING"){{"$".number_format($calcCart->total,2,".",",")." CAD"}}@endif
                  @else
                    {{money_format("%i",$calcCart->total)}}
                  @endif
                  </span>  CAD
                </div>
              </div>
            </div> --}}
          </div>
        </div>
        <div  class="cart-summary cart-promo card">
          <div class="card-block">
            <div class="card cart-widget">
              <a data-toggle="collapse" href="#promo" aria-expanded="false" aria-controls="collapseExample">
                <div class="cart-widget-block">
                  <div class="cart-widget-label">REDEEM PROMO</div>
                  <div class="cart-widget-value"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                </div>
              </a>
              <div id="promo" class="collapse cart-widget-block cart-widget-title">
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
    {{ Form::close() }}
  </div>
  </div>
  </section>



<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script>
    (function() {
        Stripe.setPublishableKey('pk_test_R4ITePtmHGVlWkPK68rGqUOX');
    })();
</script>

  <script>

(function ($) {
  $.fn.serializeJSON = function () {
      var json = {};
      jQuery.map($(this).serializeArray(), function (n, _) {
          json[n['name']] = n['value'];
      });
      return json;
  };
})(jQuery);

ensureNumber = function (n) {
    n = parseInt(n, 10);
    if (isNaN(n) || n <= 0) {
        n = 0;
    }
    return n;
};

saveFormToCookie = function (form) {
    var name = $(form).attr('id');
    var data = $(form).serializeJSON();

    delete data["cc_num"];
    delete data["cc_ccv"];
    delete data["cc_name"];
    delete data["cc_expire_1"];
    delete data["cc_expire_2"];
    delete data["cc_type"];

    var data= JSON.stringify(data);

    var date = new Date();
    var minutes = 30;
    date.setTime(date.getTime() + (minutes * 60 * 1000));
    Cookies.set(name, data,{expires: date, path:'/'});
};

sameAddress = function (form){
  $('#bill_firstname').val($('#ship_firstname').val()).trigger('change');
  $('#bill_lastname').val($('#ship_lastname').val()).trigger('change');
  $('#bill_address_1').val($('#ship_address_1').val()).trigger('change');
  $('#bill_address_2').val($('#ship_address_2').val()).trigger('change');
  $('#bill_province').val($('#ship_province').val()).trigger('change');
  $('#bill_postal').val($('#ship_postal').val()).trigger('change');
  $('#bill_country').val($('#ship_country').val()).trigger('change');
  $('#bill_city').val($('#ship_city').val()).trigger('change');

  saveFormToCookie(form);
}


checkForm = function (form){
  var value = true;

  if (form.find('.has-error').length > 0){
    return false;
  }
  form.find('input, select, textarea').each(function(){

    if($(this).parents('.has-error').length>0 ){
      value = false;
    }
    else if($(this).prop('required') && ($(this).val() == "" || $(this).val() == null)){

      value = false;
    }
  });
  return value;
};

calcShipping = function(tax, loading){
  var ship = false;
  var province =$('#ship_province').val();
  var postal_code = $('#ship_postal').val();
  var city = $('#ship_city').val();
  var stop_loading = false;

  if(city != ""|| postal_code != "" || province != ""){
    stop_loading = true;
  }

  if(stop_loading){
    $.ajax({
      url: '/store/shipping',
      type: 'POST',
      async:false,
      data: {
        'province':province,
        'postal_code':postal_code,
  			'city':city,
        '_token': $("#csrf_token").val()
      },
      success: function(result) {
				console.log(result.request);
        if(result.request >0){
          if(result.result != "success"){
      			$.notify({
      				// options
      				message: result.msg
      			},{
      				// settings
      				type: result.result,
      				placement: {
      					from: "bottom",
      					align: "right"
      				},
      				newest_on_top: true,
      			});
            return false;
          }
          ship = result.shipAmount;
          if(parseFloat(result.shipAmount) >= 0){
            var loading1 = false;
            if(ship){
              $('#cart_shipping').fadeIn('fast');
              loading1 = true;
              $('#cart_shipping .cart-widget-value').html("$" + "<span id='ship_total'>" +  $.number(ship,2) + "</span> CAD");
              updateTotal();
            }
            if(loading1 && loading){
              $('.cartTaxShip').fadeOut('fast');
            }else{
              $('.cartTaxShip').fadeIn('fast');
            }
          }else{
            $('.cartTaxShip').fadeOut('fast');
          }
        }else{
            $('.cartTaxShip').fadeOut('fast');
            $('#cart_shipping').fadeOut('fast');
        }
      },
      error: function(result) {
        $(body).html(result.responseText);
        console.log(result);
      }
    });
  }else{
    $('#cart_shipping').hide();
    $('.cartTaxShip').fadeOut('fast');
  }
}

calcTax = function(){
  var tax = false;
  $('#cart_shipping').hide();
  $('#cart_tax').hide();
  $('.cartTaxShip').fadeIn('fast');
  var province =$('#ship_province').val();
  stop_loading = false;
  if(province != ""){
    stop_loading = true;
    $('#cart_tax').fadeOut('fast');
  }
  if(stop_loading){
    $.ajax({
      url: '/store/taxes',
      type: 'POST',
      data: {
        'province': province,
        '_token': $("#csrf_token").val()
      },
      success: function(result) {
        if(result.result != "success"){
    			$.notify({
    				// options
    				message: result.msg
    			},{
    				// settings
    				type: result.result,
    				placement: {
    					from: "bottom",
    					align: "right"
    				},
    				newest_on_top: true,
    			});
          return false;
        }
        tax = result.taxAmount;

        var loading2 = false;
        if(tax != false){
          $('#cart_tax').fadeIn('fast');
          $('#cart_tax .cart-widget-value').html("$" + "<span id='tax_total'>" + $.number(result.taxAmount,2) + "</span>" + " CAD");
          updateTotal();
          loading2 = true;
        }
        calcShipping(tax, loading2);
      },
      complete:function(result){
        return tax;
      },
      error: function(result) {
				$(body).html(result.responseText);
      }
    });
  }
}

updateTotal = function(){
  var tax = $('#tax_total').length > 0 ? parseFloat($('#tax_total').text().replace(/,/g, '')) : 0.0;
  var shipping = $('#ship_total').length > 0 ? parseFloat($('#ship_total').text().replace(/,/g, '')) : 0.0;
  var subtotal = parseFloat($('#sub_total').text().replace(/,/g, ''));
  var coupon = 0;

  $.ajax({
    url: '/store/calcTotal',
    type: 'POST',
    data: {
      '_token': $("#csrf_token").val()
    },
    success: function(result) {

      if(result.result != "success"){
        $('.discount_block').fadeOut('fast');
      }

      $('#checkout_total').html($.number(result.total + shipping + tax,2));
    },
    error: function(result) {
      $(body).html(result.responseText);
    }
  });
}

loadFormFromCookie = function (form) {
    var name = $(form).attr('id');
    var data = Cookies.get(name);

    if (typeof data === 'undefined') {
        return;
    }

    JSON.parse(data, function (key, value) {
        if (typeof (value) !== 'object') {
            var el = $(form).find('*[name="' + key + '"]');
            if (el.is('input')) {
                if (false) {
                    // code formatting stub
                } else if (el.attr('type') === 'number') {
                    el.val(ensureNumber(value));
                } else if (el.attr('type') === 'checkbox') {
                    el.attr('checked', value === 'on' ? true : false);
                } else {
                    el.val(value);
                }

            } else if (el.hasClass('select2')){
              var option = $('<option></option>').
                   attr('selected', true).
                   text(value).
                   val(value);
                   option.appendTo(el);
                   el.trigger('change');
            } else if (el.is('select')) {
                el.val(value);
            } else if (el.is('textarea')) {
                el.val(value);
            }
        }
    });

    $('.form.in').each(function(){
      $form = $(this);
      $(this).find('input, select, textarea').each(function(){
        $(this).trigger('input');
      }).promise().done( function(){
        if(checkForm($form)){
          $form.find('.btn-next').prop('disabled',false);
        }else{
          $form.find('.btn-next').prop('disabled',true);
        }
    })
  })

  calcTax();
};


    $('#checkout-form').on('submit', function(e) {
      e.preventDefault();

        var form = $(this);

        form.filter(':input, select, :checkbox, :radio').each(function(){
          $(this).trigger('change');
        });

        // No pressing the buy now button more than once
        form.find('button').prop('disabled', true);
        // Create the token, based on the form object
        //Stripe.createToken(form, stripeResponseHandler);
        Stripe.card.createToken({
          number: $('#cc_num').val(),
          name: $('#cc_name').val(),
          cvc: $('#cc_ccv').val(),
          exp_month: $('#cc_expire_1').val(),
          exp_year: $('#cc_expire_2').val()
        }, function(status,response){
          // Grab the form:
          var $form = $('#checkout-form');

          if (response.error) { // Problem!
            // Show the errors on the form
            $form.find('.payment-errors').text(response.error.message);
            $form.find('button').prop('disabled', false); // Re-enable submission
            $form.find('#error').remove();
            $form.prepend('<div id="error" class="alert alert-danger" role="alert" style="margin-top:30px">'+response.error.message+'</div>')
            $('html, body').animate({
               scrollTop: $("#error").offset().top - 130
           }, 200);

          } else { // Token was created!
            // Get the token ID:
            var token = response.id;

            // Insert the token into the form so it gets submitted to the server:
            $form.append($('<input type="hidden" name="stripeToken" />').val(token));

            // Submit the form:
            $form.get(0).submit();
          }
        });


      ///  Prevent the form from submitting
    });


$(function(){

    $('input[name="iCheck"]').on('ifClicked', function (event) {
        alert("You clicked " + this.value);
    });

    $('input').on('ifClicked', function (event) {
       if($(event.target).parent().hasClass('checked')){
         $(this).val(0);
       }else{
         $(this).val(1);
       }
   });

    $('.agree_terms').on('change',function(){
      if($(this).is(':checked')){
        $(this).val(0);
      }else{
        $(this).val(1);
      }
    })

    loadFormFromCookie($('#checkout-form'));

    $('#ship_province, #ship_postal, #ship_city').change(function(){
        calcTax();
    })

    calcTax();

    $('#ship_province').change(function(){
      $('#ship_city').val([]).trigger('change');
    })

    $('#promo').on('shown.bs.collapse',function(){
      var pos = $(window).scrollTop();
      var el = $('.fixed-widget');
      var el2 = $('.floating-widget');
      var el3 = $(this).outerHeight();
      var p1 = el.position().top + el.outerHeight();
      var p2 = el2.position().top + el2.outerHeight();

      if($(window).width() > 992){
        if (p2 > p1 || pos + el2.outerHeight() > p1) {
          pos = p1 - el2.outerHeight() - el3 + 40;
          el2.css('top', pos);
        }
      }
    }).on('hidden.bs.collapse', function(){
      var pos = $(window).scrollTop();
      var el = $('.fixed-widget');
      var el2 = $('.floating-widget');
      var el3 = $(this).outerHeight();
      var p1 = el.position().top + el.outerHeight();
      var p2 = el2.position().top + el2.outerHeight();

      if($(window).width() > 992){
        if (p2 > p1 || pos + el2.outerHeight() > p1) {
          pos = p1-p2 + el3 - 20;
          el2.css('top', pos);
        }
      }
    })

    $("#ship_city").select2({
        ajax: {
          url:"/store/autocomplete/cities",
          type: "POST",
          data: function (params) {
            return {
              "_token" : '{{csrf_token()}}',
              "q" : params.term,
              "province" : $('#ship_province').val()
            };
          },
          dataType: 'json',
          processResults: function (data) {
            return {
                results: $.map(data, function (item) {
                    return {
                        text: item.name,
                        id: item.id
                    }
                })
            };
         }
			 },
			 placeholder: "Search for your city",
  	 	 allowClear: false
      });

    $('#btn-same-ship').click(function(){
      sameAddress($('#checkout-form'));
    })


    $(".postal-code").bind('keyup', function (e) {
        if (e.which >= 97 && e.which <= 122) {
            var newKey = e.which - 32;
            // I have tried setting those
            e.keyCode = newKey;
            e.charCode = newKey;
        }

        $(this).val(($(this).val()).toUpperCase());
    });

    $("#cc_expire_2, #cc_expire_1").bind('keydown', function (e) {
      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
           // Allow: Ctrl+A, Command+A
          (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
           // Allow: home, end, left, right, down, up
          (e.keyCode >= 35 && e.keyCode <= 40)) {
               // let it happen, don't do anything
               return;
      }
      // Ensure that it is a number and stop the keypress
      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
      }
    });

    $(".credit_type").select2({
      minimumResultsForSearch: Infinity
   });

    $(".province-select").select2({
      placeholder: "Select a state",
      allowClear: false
   }).on('change',function(){
     if(checkForm($(this).parents('.form'))){
       $(this).parents('.form').find('.btn-next').prop('disabled',false);
     }else{
       $(this).parents('.form').find('.btn-next').prop('disabled',true);
     }
   });

    $('.form').find('input, select, textarea').on('change keyup keydown keypress',function() {
      if(checkForm($(this).parents('.form'))){
        $('.btn-next').prop('disabled',false);
      }else{
        $('.btn-next').prop('disabled',true);
      }
      saveFormToCookie($("#checkout-form"));
    });


    $('.btn-next').click(function(){
      $(this).parents('.form').next().removeClass('disabled').next().collapse('show');
      saveFormToCookie($("#checkout-form"));
      var date = new Date();
      var minutes = 30;
      date.setTime(date.getTime() + (minutes * 60 * 1000));
      Cookies.set("checkout-step", $('.form.in').length+1, {expires: date,path:'/'});
      $(this).fadeOut('fast');
    });

    $('.checkout-steps .collapse').on('show.bs.collapse', function (e) {

      var prevForm = $(this).prev().prev();

      var proceed = checkForm(prevForm);

      if(proceed && !$(this).prev().hasClass('disabled')){
        $(this).prev('a').removeClass("disabled")
      }

      if($(this).prev('a').hasClass("disabled")){
        e.preventDefault();
      }

    //  $(".checkout-steps .collapse").collapse('hide');

    });

    $(window).scroll(function(){
      var pos = $(window).scrollTop();
      var el = $('.fixed-widget');
      var el2 = $('.floating-widget');
      var p1 = el.position().top + el.outerHeight();
      var p2 = el2.position().top + el2.outerHeight();

      if($(window).width() > 992){
        if (p2 < p1 || pos + el2.outerHeight() < p1) {
          if(pos >= 140){
            if (pos + el2.outerHeight() > p1){
              pos = p1 - el2.outerHeight() - 100;
              el2.css('top', pos);
            }else{
              el2.css('top', pos - 130);
            }
          }else if(pos < 140){
            el2.css('top',0);
          }
        }
      }else{
        el2.removeAttr('style');
      }
    })

    $('.col').matchHeight();

  })</script>


@stop

@extends('layouts.layout')
@section('title')
Checkout - Store | CAD MicroSolutions Inc.
@stop
@push('after-styles')
<link rel="stylesheet" href="/js/formvalidation-dist-v1.3.0/dist/css/formValidation.min.css">
@endpush
@push("after-scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
<script src="/js/formvalidation-dist-v1.3.0/dist/js/FormValidation.min.js"></script>
<script src="/js/formvalidation-dist-v1.3.0/dist/js/plugins/Recaptcha.min.js"></script>
<script src="/js/formvalidation-dist-v1.3.0/dist/js/plugins/Bootstrap.min.js"></script>
<script src="{{mix('js/account.js')}}"></script>
@endpush
@section('body')
<section>
  <div class="container">
    <div class="card">
      <div class="card-block">
        <div class="d-flex" id="checkout_login">
          <div class="col-lg-6 col p-4">
            <div id="login" class="m-0 w-100">
              <form method="post" action="{{ route('login') }}" id="loginForm">
                <div class="form-group">
                  <input type="hidden" id="login_token" name="_token" value="{{ csrf_token() }}">
                </div>
                <h1 class="mt-0">Account Login</h1>
                <hr>
                <!-- if there are login errors, show them here -->
                @if($errors->any() || Session::has('login_error'))
                <div class="alert alert-{{Session::has('error_type') ? Session::get('error_type') : 'danger'}}"
                  role="alert" style="margin-top:30px">
                  {!! $errors->first('email') !!}
                  {!! $errors->first('password') !!}
                  {!!session('login_error')!!}
                  @if ($errors->has('g-recaptcha-response'))
                  <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                  @endif
                </div>
                @endif
                <div class="form-group">
                  <label for="email" class="control-label">Email Address</label>
                  <input type="text" id="email" value="{{ old('email') }}" name="email" placeholder="Email"
                    class="form-control">
                </div>
                <div class="form-group">
                  <label for="password" class="control-label">Password</label>
                  <input type="password" id="password" value="{{ old('password') }}" name="password"
                    placeholder="Password" class="form-control">
                </div>
                <div class="row mt-3 mb-3">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label for="remember" class="form-check p-0">
                        <input id="remember" name="remember" type="checkbox">
                        Remember Me
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group text-right">
                      <a href="{{route('show_forgotPassword')}}">Forgot Password?</a>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div id="captchaContainer"></div>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-primary">Submit</button></div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 col p-4">
            <h1 class="mt-0">Guest Checkout</h1>
            <p>
              If you do not have an account, you can continue as a guest.
            </p>
            <p>
              During this process you will have the choice to register for a new account.
            </p>
            <a type="button" class="btn btn-md btn-success" href="{{route('checkout-guest')}}">Continue as a guest <i
                style="margin-left:15px" class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
            <hr />
            <h1>Register</h1>
            <p>
              You can register for a new account to have update-to-date information on your orders.
            </p>
            <a type="button" class="btn btn-md btn-primary" href="{{route('register')}}">Register an Account <i
                style="margin-left:15px" class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
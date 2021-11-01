@extends('layouts.layout')
@section('title')
Account - Login | CAD MicroSolutions Inc.
@stop
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
    <div id="login">
      <div class="card p-4 box-shadow-lt">
        <div class="card-block">
          <form method="post" action="{{ route('do_forgotPassword') }}" id="forgotForm">
            <div class="form-group">
              <input type="hidden" id="forgot_token" name="_token" value="{{ csrf_token() }}">
            </div>
            <h1 class="mt-0">Forgot Password</h1>
            <!-- if there are login errors, show them here -->
            @if($errors->any() || Session::has('form_error'))
            <div class="alert alert-{{Session::has('error_type') ? Session::get('error_type') : 'danger'}} mt-4" role="alert">
              {!! $errors->first('email') !!}
              {!!session('form_error')!!}
              @if ($errors->has('g-recaptcha-response'))
              <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
              @endif
            </div>
            @endif
            <div class="form-group">
              <label for="email" class="control-label">Email Address</label>
              <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Email Address">
            </div>
            <div class="form-group">
              <div id="captchaContainer"></div>
            </div>
            <div class="form-group"><button type="submit" class="btn btn-primary">Submit</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
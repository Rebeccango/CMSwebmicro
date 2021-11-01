@extends('layouts.store')
@section('title')
  Registration completed - Login | CAD MicroSolutions Inc.
@stop
@section('body')
  <section>
    <div class="container text-center mt-5">

      @if($errors->any() || Session::has('login_error'))
        <div class="alert alert-{{Session::has('error_type') ? Session::get('error_type') : 'danger'}}" role="alert" style="margin-top:30px">
          {!! $errors->first('email') !!}
          {!! $errors->first('password') !!}
          {!!session('login_error')!!}
          </a>
        </div>
      @endif
      <h1>You have successfully created your account!</h1>
      <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: fadeIn;"></div>
      <p class="h5">
        However, your account is not activated yet, you will receive an email to confirm and activate your account.
      </p>
      <br />
      <a href="{{route('resendActivationEmail', array('email'=>Session::get('email_confirm')))}}">Click here if you did not receive a confirmation email</a>
      <p class="small alert alert-muted">
        You may need to wait 5-10 minutes to recieve the confirmation email.
      </p>
    </div>
</section>
@stop

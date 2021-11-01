@extends('layouts.store')
@section('title')
  Registration completed - Login | CAD MicroSolutions Inc.
@stop
@section('body')
  <section>
    <div class="container text-center mt-5">
      <h1>Your Account has been activated!</h1>
      <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: fadeIn;"></div>
      <p class="h5">
        Now that you have an account you can review the history and status of your order(s).
      </p>
      <br />
      <a href="{{route('account')}}">Click here to login and view your account page.</a>
    </div>
</section>
@stop

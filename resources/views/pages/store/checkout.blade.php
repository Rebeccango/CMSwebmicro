@extends('layouts.store')
@section('title')
  Checkout - Store | CAD MicroSolutions Inc.
@stop
@section('body')
  <section>
    <div class="container">
      <div id="login">
      <div class="card">
        <div class="card-block">
          {{ Form::open(array('url' => 'store/login')) }}
          <h1>Returning Customer</h1>

          <!-- if there are login errors, show them here -->
          <p>
              {{ $errors->first('email') }}
              {{ $errors->first('password') }}
          </p>

          <div class="form-group">
              {{ Form::label('email', 'Email Address') }}
              {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com','class'=>'form-control')) }}
          </div>

          <div class="form-group">
              {{ Form::label('password', 'Password') }}
              {{ Form::password('password',array('class'=>'form-control')) }}
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">

          <div class="form-group">
            <div class="form-check">
              <label for="remember" class="form-check">
              {{ Form::checkbox('remember', false) }}
              Remember Me
              </label>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">

          <div class="form-group pull-right">
            <a href="#">Forgot Password?</a>
          </div>
        </div>
        </div>

          <p>{{ Form::submit('LOGIN', array('class'=>'btn btn-md btn-primary')) }}</p>
          {{ Form::close() }}
        </div>
        </div>
      </div>
    </div>
  </section>
@stop

@extends('layouts.store')
@section('title')
Account - Register | CAD MicroSolutions Inc.
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
		<div id="register">
			<div class="card p-3 box-shadow-lt">
				<div class="card-block">
					<form method="post" autocomplete="off" action="{{ route('do_register') }}" id="registerForm">
						<div class="form-group">
							<input type="hidden" id="register_token" name="_token" value="{{ csrf_token() }}">
						</div>
						<h1 style="margin-top:0;">Account Registration</h1>
						<hr>
						<!-- if there are login errors, show them here -->
						@if($errors->any() || Session::has('register_error'))
						<div class="alert alert-{{Session::has('error_type') ? Session::get('error_type') : 'danger'}}" role="alert" 	style="margin-top:30px">
							{!! $errors->first('email') !!}
							{!! $errors->first('password') !!}
							{!!session('register_error')!!}
							@if ($errors->has('g-recaptcha-response'))
							<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
							@endif
						</div>
						@endif
						<div class="row">
								<div class="form-group col-md-4 col-sm-12">
									<label for="firstname" class="control-label">First Name</label>
									<input type="text" pattern="^[_A-z]{1,}$" class="form-control" id="firstname" name="firstname"
										placeholder="First name" value="{{old('firstname')}}">
								</div>
								<div class="form-group col-md-4 col-sm-12">
									<label for="lastname" class="control-label">Last Name</label>
									<input type="text" pattern="^[_A-z]{1,}$" class="form-control" id="lastname" name="lastname"
										placeholder="Last name" value="{{old('lastname')}}">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-4 col-sm-12">
									<label for="email" class="control-label">Email</label>
									<input type="email" class="form-control" value="{{old('email')}}" id="email" name="email"
										placeholder="Email">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-4 col-sm-12">
									<label for="password" class="control-label">Password</label>
									<input type="password" id="password" name="password" required class="form-control"
										placeholder="Password">
								</div>
								<div class="form-group col-md-4 col-sm-12">
									<label for="password_confirmation" class="control-label">Confirm Password</label>
									<input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
										placeholder="Confirm Password">
								</div>
						</div>
						<div class="row my-4">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="form-group">
									<label for="updates" class="form-check p-0">
										<input id="updates" name="updates" type="checkbox">
										Keep me updated on CAD MicroSolutions Events and Promotions.
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div id="captchaContainer"></div>
						</div>
						<div class="form-group mt-3"><button type="submit" class="btn btn-primary">Submit</button></div>
					</form>
				</div>
			</div>
</section>
@stop
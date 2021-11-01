@extends('layouts.layout')
@section('title') Additive Solutions @stop
@section('meta')
<link rel="canonical" href="{{route('additive-solutions.all')}}" />
@stop
@section('description')To drive innovation within our client base, we must be innovative in how and what we deliver in
products and services.
The 3D Printing hardware and software solutions we represent have been carefully researched and chosen. @stop
@section('keywords')3d printing, additive, solutions, innovative @stop
@push('after-styles')
<style>
	form label:first-child {
		font-weight: 600
	}

	.form-section {
		padding: 25px;
		margin: 30px 0;
		border: gray 1px solid;
	}

	form input.form-control {
		border-radius: 0 !important;
		padding: 20px 13px !important;
		font-size: 16px !important;
		font-weight: 500 !important;
	}

	form textarea.form-control {
		border-radius: 0 !important;
		padding: 10px 13px !important;
		font-size: 16px !important;
		font-weight: 500 !important;
	}
</style>
@endpush
@section('body')
<section>
	<div class="container">
		<h1 class="display-4">Benchmark Request</h1>

		{{-- @error('name')
<p>{{ $message }}</p>
		@enderror
		@if($errors->any())
		{!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
		@endif --}}
		@if($errors->any())
		@foreach ($errors->all() as $error)
		<div>{{ $error }}</div>
		@endforeach
		@endif

		<form class="needs-validation" novalidate enctype="multipart/form-data">

			<div class="form-section">

				<h2 class="h1">Your Details</h2>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-4">
						<label for="firstname">First name</label>
						<input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname" required>
						<div class="invalid-feedback">
							First name is required
						</div>
					</div>
					<div class="form-group required col-md-4">
						<label for="lastname">Last name</label>
						<input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname" required>
						<div class="invalid-feedback">
							Last name is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-4">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
						<div class="invalid-feedback">
							Please provide your email address.
						</div>
					</div>
					<div class="form-group required col-md-4">
						<label for="phone">Phone Number</label>
						<input type="text" class="form-control" id="phone" placeholder="555-555-5555" name="phone" required>
						<div class="invalid-feedback">
							Phone number is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-4">
						<label for="company">Company Name</label>
						<input type="text" class="form-control" id="company" placeholder="Company Ltd." name="company" required>
						<div class="invalid-feedback">
							Company name is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-4">
						<label for="province">Province</label>
						<input type="text" class="form-control" id="province" placeholder="Ontario" name="province" required>
						<div class="invalid-feedback">
							Province is required
						</div>
					</div>
					<div class="form-group required col-md-4">
						<label for="city">City</label>
						<input type="text" class="form-control" id="city" name="city" placeholder="Toronto" required>
						<div class="invalid-feedback">
							City is required
						</div>
					</div>
				</div>
			</div>
			<div class="form-section">
				<h2 class="h1">Application</h2>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-application-1">Application / Part Name / Part Description</label>
						{{-- <small class="form-text text-muted mb-2">If you have trouble with this step, please contact us at contact@cadmicro.com.</small> --}}
						<textarea class="form-control" id="bm-application-1" name="bm_application_1" required
							maxlength="500"></textarea>
						<div class="invalid-feedback">
							This field is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row mt-4">
					<div class="form-group required mt-4 col-md-8">
						<label class="form-check-label mb-2" for="file" required>
							Benchmark Files
						</label>
						<p class="form-text mb-2"><strong class="h6">Instructions:</strong> <br />- Please put all of your STL or 3D files
							in a single folder and then Zip the folder.<br /> - If possible,
							also include an image of your part in the same folder.</p>
						<small class="form-text text-primary mb-2"><strong>MAXIMUM FILE SIZE: 1 GB (1000 MB)</strong></small>
						<input type="file" class="form-control-file p-3 border" id="file" name="file" required style="cursor:pointer">
						<ul class="pl-3 mt-2 invalid-feedback">
							<li>Benchmark is required</li>
							<li>Accepted file types: .zip, .tar</li>
						</ul>
					</div>
				</div>

				<hr />

				<div class="form-row mt-4">
					<div class="form-group required col-md-12">
						<label for="bm-application-2" class="mb-2">Application Type</label>
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="bm-application-2-1" name="bm_application_2"
								value="Prototype" required>
							<label class="custom-control-label" for="bm-application-2-1">Prototype</label>
						</div>
						<div class="custom-control custom-radio mt-3">
							<input type="radio" class="custom-control-input" id="bm-application-2-2" name="bm_application_2"
								value="Tool" required>
							<label class="custom-control-label" for="bm-application-2-2">Tool</label>
						</div>
						<div class="custom-control custom-radio mt-3">
							<input type="radio" class="custom-control-input" id="bm-application-2-3" name="bm_application_2"
								value="Fixture" required>
							<label class="custom-control-label" for="bm-application-2-3">Fixture</label>
						</div>
						<div class="custom-control custom-radio mt-3">
							<input type="radio" class="custom-control-input" id="bm-application-2-4" name="bm_application_2"
								value="Final Part" required>
							<label class="custom-control-label" for="bm-application-2-4">Final Part</label>
						</div>
						<div class="custom-control custom-radio other-radio-input mt-3">
							<input type="radio" class="custom-control-input" id="bm-application-2-5" name="bm_application_2" required>
							<label class="custom-control-label w-100" for="bm-application-2-5">
								<div class="col-md-4 pl-0">
									<input type="text" class="form-control" placeholder="Other" id="application-type-other">
									<div class="invalid-feedback">
										Other is required
									</div>
								</div>
							</label>
							<div class="invalid-feedback">Application type is required</div>
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-application-3">Describe the part function and required properties for it
							to
							be successful in your intended application.</label>
						{{-- <small class="form-text text-muted mb-2">If you have trouble with this step, please contact us at contact@cadmicro.com.</small> --}}
						<textarea class="form-control" id="bm-application-3" name="bm_application_3" required
							maxlength="500"></textarea>
						<div class="invalid-feedback">
							This field is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-application-4">Stage in the Manufacturing process the part is used:</label>
						<input type="text" class="form-control" id="bm-application-4" name="bm_application_4" required>
						<div class="invalid-feedback">
							Manufacturing stage is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-12">
						<label for="application_type" class="mb-2">Where is the part produced currently:</label>
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="bm-application-5-1" name="bm_application_5"
								value="In-house" required>
							<label class="custom-control-label" for="bm-application-5-1">In-house</label>
						</div>
						<div class="custom-control custom-radio mt-3">
							<input type="radio" class="custom-control-input" id="bm-application-5-2" name="bm_application_5"
								value="3rd Party" required>
							<label class="custom-control-label" for="bm-application-5-2">3rd Party</label>
						</div>
						<div class="custom-control custom-radio mt-3">
							<input type="radio" class="custom-control-input" id="bm-application-5-3" name="bm_application_5"
								value="OEM" required>
							<label class="custom-control-label" for="bm-application-5-3">OEM</label>
						</div>
						<div class="custom-control custom-radio other-radio-input mt-3">
							<input type="radio" class="custom-control-input" id="bm-application-5-4" name="bm_application_5" required>
							<label class="custom-control-label w-100" for="bm-application-5-4">
								<div class="col-md-4 pl-0">
									<input type="text" class="form-control" placeholder="Other" id="where-produced-other">
									<div class="invalid-feedback">
										Other is required
									</div>
								</div>
							</label>
							<div class="invalid-feedback">Application type is required</div>
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-application-6">Current Process - How is the part currently manufactured?</label>
						<input type="text" class="form-control" id="bm-application-6" name="bm_application_6" required>
						<div class="invalid-feedback">
							Current part manufacturing process is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-application-7">Current part material type and why?</label>
						<input type="text" class="form-control" id="bm-application-7" name="bm_application_7" required>
						<div class="invalid-feedback">
							Current part material type is required
						</div>
					</div>
				</div>

			</div>

			<div class="form-section">
				<h2 class="h1">Business Outcome</h2>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-businessoutcome-1">Current State (People - Process - Technology)</label>
						<textarea type="text" class="form-control" id="bm-businessoutcome-1" name="bm_businessoutcome_1"
							maxlength="500"></textarea>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-businessoutcome-2">What is the point of failure or challenge/issue with the current part
							or
							process?</label>
						<textarea type="text" class="form-control" id="bm-businessoutcome-2" name="bm_businessoutcome_2"
							maxlength="500"></textarea>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-businessoutcome-3">What is the negative consequence or wide-scale business impact of this
							issue as an outcome of the current state?</label>
						<textarea type="text" class="form-control" id="bm-businessoutcome-3" name="bm_businessoutcome_3"
							maxlength="500"></textarea>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-businessoutcome-4">What is the desired state? (future vision state)</label>
						<textarea type="text" class="form-control" id="bm-businessoutcome-4" name="bm_businessoutcome_4"
							maxlength="500"></textarea>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-businessoutcome-5">What is the positive impact to your business unit of printing this part
							and
							other parts like it? (Ex. the reduced cost,
							lead time, improved manufacturing efficiency). In other words, what are the business performance
							improvements that you
							hope will occur as an outcome of achieving the desired state?</label>
						<textarea type="text" class="form-control" id="bm-businessoutcome-5" name="bm_businessoutcome_5"
							maxlength="500"></textarea>
					</div>
				</div>
			</div>

			<div class="form-section">
				<h2 class="h1">Required Capabilities</h2>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-capabilities-1">Explain the solution capabilities that are required to achieve the desired
							state and the positive business outcomes?</label>
						<textarea type="text" class="form-control" id="bm-capabilities-1" name="bm_capabilities_1" maxlength="500"
							required></textarea>
						<div class="invalid-feedback">
							Field is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-capabilities-2">Please give a detailed description of loading / environmental conditions,
							critical features, etc. for this part?</label>
						<textarea type="text" class="form-control" id="bm-capabilities-2" name="bm_capabilities_2" maxlength="500"
							required></textarea>
						<div class="invalid-feedback">
							Field is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-capabilities-3">Are you open to redesigning this part for Additive Manufacturing? If not,
							why?</label>
						<textarea type="text" class="form-control" id="bm-capabilities-3" name="bm_capabilities_3" maxlength="500"
							required></textarea>
						<div class="invalid-feedback">
							Field is required
						</div>
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group required col-md-8">
						<label for="bm-capabilities-4">What metrics will be used to indicate how well the printed part meets your
							required capabilities to achieve your
							business outcomes? What does success look like? What are the objective metrics that will be used to
							evaluate the printed
							part?</label>
						<textarea type="text" class="form-control" id="bm-capabilities-4" name="bm_capabilities_4" required
							maxlength="500"></textarea>
						<div class="invalid-feedback">
							Field is required
						</div>
					</div>
				</div>
				<hr />
			</div>

			<div class="form-section">
				<h2 class="h1">Value at Stake</h2>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-value-1">Current cost per unit</label>
						<input type="text" class="form-control" id="bm-value-1" name="bm_value_1">
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-value-2">Current lead time (i.e. procurement to part in hand)</label>
						<input type="text" class="form-control" id="bm-value-2" name="bm_value_2">
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-value-3">Quantity per month / per year</label>
						<input type="text" class="form-control" id="bm-value-3" name="bm_value_3">
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-value-4">Labor rate</label>
						<input type="text" class="form-control" id="bm-value-4" name="bm_value_4">
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-value-5">Labor hours</label>
						<input type="text" class="form-control" id="bm-value-5" name="bm_value_5">
					</div>
				</div>
				<hr />
				<div class="form-row">
					<div class="form-group col-md-8">
						<label for="bm-value-6">What is the Total Estimate Value at Stake? (Value at Stake is the monetization of
							the negative consequences of the
							current state that can be addressed with the platform in line with the required capabilities and
							metrics)</label>
						<input type="text" class="form-control" id="bm-value-6" name="bm_value_6">
					</div>
				</div>
			</div>

			{{-- <div class="form-row">
				<div class="form-group required col-md-3 mb-3">
					<label for="validationCustom03">City</label>
					<input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
					<div class="invalid-feedback">
						Please provide a valid city.
					</div>
				</div>
				<div class="form-group required col-md-1 mb-3">
					<label for="validationCustom04">State</label>
					<input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
					<div class="invalid-feedback">
						Please provide a valid state.
					</div>
				</div>
				<div class="form-group required col-md-1 mb-3">
					<label for="validationCustom05">Zip</label>
					<input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
					<div class="invalid-feedback">
						Please provide a valid zip.
					</div>
				</div>
			</div> --}}

			{{-- <div class="form-group">
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">
						Agree to terms and conditions
					</label>
					<div class="invalid-feedback">
						You must agree before submitting.
					</div>
				</div>
			</div> --}}

			<div class="form-group required g-recaptcha-field mt-4">
				<label class="form-check-label mb-2" for="file" required>
					Captcha
				</label>
				{!! NoCaptcha::display(['data-theme' => 'light', 'name' => 'recaptcha']) !!}
				<div class="invalid-feedback"></div>
			</div>

			<div class="form-errors alert alert-danger mt-4 p-4 d-none">
				<div class="d-flex flex-row">
					<div class="mr-4">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64"
							style="fill:currentColor">
							<path
								d="M18.3 5.71a.996.996 0 0 0-1.41 0L12 10.59L7.11 5.7A.996.996 0 1 0 5.7 7.11L10.59 12L5.7 16.89a.996.996 0 1 0 1.41 1.41L12 13.41l4.89 4.89a.996.996 0 1 0 1.41-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z" />
						</svg>
					</div>
					<div class="w-100">
						<h3 class="display-4">Error</h3>
						<p class="lead mb-0">There was an error while submitting your form. Please check your responses and try
							again. <br /> If the problem persists, please contact support at support@cadmicro.com</p>
					</div>
				</div>
			</div>
			<div class="form-success alert alert-success mt-4 p-4 d-none">
				<div class="d-flex flex-row">
					<div class="mr-4">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="64" height="64"
							style="fill:currentColor">
							<path
								d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm3.88-11.71L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z" />
						</svg>
					</div>
					<div class="w-100">
						<h3 class="display-4">Thanks!</h3>
						<p class="lead mb-0">Your response was submitted.</p>
					</div>
				</div>
			</div>

			<div class="form-group d-flex justify-content-between mt-4">
				<button class="btn btn-primary btn-lg rounded-pill" disabled type="submit" id="submit">Submit <i
						class="fas fa-spinner fa-spin d-none"></i></button>
				<button class="btn btn-secondary btn-lg rounded-pill reset-form-button" type="button">Reset</button>
			</div>
			<div class="wait-alert alert alert-warning mt-3" style="display:none">Please wait... this may take several minutes. Do not navigate away.</div>

			{{ csrf_field() }}
		</form>
	</div>
</section>
@endsection

@push('after-scripts')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  let InputRadio = $('form .other-radio-input')

	InputRadio.each((i, value)=> {
		let radio = $(value).find('input[type=radio]')
		let input = $(value).find('input[type=text]')

		input.on('click', function() {
			$(radio).prop("checked", true).change();
		})

		input.on('change keyup', function() {
			$(radio).prop("checked", true).change();
			$(radio).prop('value', $(input).val())
		})
	})

	$('form .form-group.required input[type=radio]').on('change', function(e){
		let parent = $(this).parent('.custom-control')
		$('input[type=radio][name='+$(this).prop('name')+']').removeClass('selected')

		if( $(this).is(':checked') ) {
			$(this).addClass('selected')

			$($($(this).parents('.form-group')[0])[0]).children().find('input[type=text]').each((i, value)=> {
				$(value).prop("required", false)
			})

			let input = $(parent).find('input[type=text]')
			if(input.length > 0){
				$(input).prop("required", true)
			}
		}
	})

	// $('form .form-group .custom-radio').on('change', function(e) {
	// 	if ($(this).is(':checked')) {
	// 		console.log('checked')
	// 	}
	// 	else{
	// 	console.log('unchecked')
	// 	}
	// })

	function renderErrors(container, errors){

	}

	function resetForm(form){
		if(form){
			const data = new FormData(form);
			form.reset();
			grecaptcha.reset();
			$(form).removeClass('was-validated')
			$(form).find('.g-recaptcha-field > .invalid-feedback').removeClass('d-block')
			$(form).find('.form-errors').addClass('d-none')
			$(form).find('.form-success').addClass('d-none')

			let inputs = $(form).find('input, [type=submit], select, [type=radio], textarea')
			inputs.each((index, element) => {
				$(element).removeAttr('disabled')
			});
		}
	}


  window.addEventListener('load', function() {

		var submit = $('button[type=submit]').prop('disabled', false)
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');

		$('.reset-form-button').click(function(e) {
			let form = $(e.target).parents('form')[0];
			resetForm(form)
		})

    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        // if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        // }
        form.classList.add('was-validated');

				const data = new FormData(form);

				let submitButton = event.submitter

				let formErrors = $(form).find('.form-errors')
				let formSuccess = $(form).find('.form-success')

				$.ajax({
					url: '/benchmark-request',
					type: 'POST',
					data: data,
					processData: false,
					contentType: false,
					beforeSend: function(){
						$('.wait-alert').fadeIn()
						formSuccess.addClass('d-none')
						formErrors.addClass('d-none')

						let inputs = $(form).find('input, [type=submit], select, [type=radio], textarea')
						inputs.each((index, element) => {
							$(element).prop('disabled',true)
						});

						$(submitButton).prop('disabled',true);
						$(submitButton).find('.fa-spinner').removeClass('d-none')
					},
					success: function(r) {
						if(r.success){
							resetForm(form);
							formSuccess.removeClass('d-none')
						}else{
							formSuccess.addClass('d-none')
						}

						if(r.errors){
							console.log('errors', r.errors);
							formErrors.removeClass('d-none')
						}else{
							formErrors.addClass('d-none')
						}

						if(r.errors != undefined && r.errors['g-recaptcha-response']){
							$(form).find('.g-recaptcha-field > .invalid-feedback').addClass('d-block').text(r.errors['g-recaptcha-response'][0])
						}else{
							$(form).find('.g-recaptcha-field > .invalid-feedback').removeClass('d-block')
						}
					},
					error: function(r) {
						console.log('AJAX ERROR', r);
					},
					complete: function(response) {
						// console.log(response)
						let inputs = $(form).find('input, [type=submit], select, [type=radio], textarea')
						inputs.each((index, element) => {
							$(element).removeAttr('disabled')
						});

						$(submitButton).removeAttr('disabled');
						$(submitButton).find('.fa-spinner').addClass('d-none')
						grecaptcha.reset();
						$('.wait-alert').fadeOut()
					}
				});
      }, false);
    });
  }, false);
})();
</script>
@endpush
@extends('layouts.store')
@section('title')
  Account - Login | CAD MicroSolutions Inc.
@stop
@section('body')
<section>
<div class="container">
<div class="mx-auto w-100" style="max-width:400px">
<div class="card p-4 box-shadow-lt">
  <div class="card-block">
    <h1 class="mt-0">Change your Password</h1>
    <!-- if there are login errors, show them here -->
    @if($errors->any() || Session::has('form_error'))
      <div class="alert alert-{{Session::has('error_type') ? Session::get('error_type') : 'danger'}}" role="alert" style="margin-top:30px">
        {!!session('form_error')!!}
        </a>
      </div>
    @endif

    @if(!isset($hideForm))
    {{ Form::open(array('url' => route('do_reset_password'),'method'=>'post','autocomplete'=>'false', 'id'=>'changePassword')) }}
    <div class="form-group has-feedback required">
      <div class="row">
				<div class="form-group col-md-12 col-sm-12">
					<label for="ship_firstname" class="control-label">Password</label>
					<div class="input-group">
						<input type="password" id="new_password" autocomplete="change-password new-password"  class="form-control" name="new_password" data-minLength="5"  tabindex="1" required >
					</div>
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group col-md-12"></div>
				<div class="form-group col-md-12 col-sm-12">
					<label for="ship_firstname" class="control-label">Confirm Password</label>
					<div class="input-group">
						<input type="password" class="form-control" id="password_confirmation" autocomplete="change-password new-password"  tabindex="2" name="password_confirmation" placeholder="Confirm Password" required>
					</div>
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					<div class="help-block with-errors"></div>
				</div>
      </div>
    </div>
		<input type="hidden" name="reset_token" value="{{$token}}" />
    <p>{{ Form::submit('SUBMIT', array('class'=>'btn btn-md btn-primary mt-3 mb-0')) }}</p>
    {{ Form::close() }}
  @endif
  </div>
  </div>
</div>
</div>
</section>
@stop

@push('after-scripts')
  <script>
$(document).ready(function() {
    $('#changePassword').formValidation({
        framework: 'bootstrap4',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          password_confirmation: {
              validators: {
                  notEmpty: {
                        message: 'Password is required'
                  },
                  stringLength: {
                        min: 5,
                        message: 'Your password must be atleast 5 characters long'
                  }
              }
          },
            password_confirmation: {
                validators: {
                    notEmpty: {
                        message: 'Confirm Password is required'
                    },
                    identical: {
                        field: 'new_password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
        }
    });
});
</script>
@endpush

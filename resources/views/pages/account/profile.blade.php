@extends('layouts.store')
@section('title')
  Profile - Account | CAD MicroSolutions Inc.
@stop
@section('body')
<section>
  <div class="container">
		<div class="card " style="display: block;
    position: relative;
    width: 100%;">
  <div class="card-block" style="width: 100%;
    margin: 0;
    max-width: 100%;  padding:0;">
    <div class="card-content">
      <div class="card-header">
        <h5 class="card-title" style="margin:0; margin:.35rem 0">MY ACCOUNT</h5>
      </div>
      <div class="card-body" style="padding: 0;
    float: left;
    width: 100%;">
    <div class="profile d-flex">
		<div class="col-md-3" style="padding:0">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				{{-- <div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div> --}}
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name" style="margin:0;">
						Welcome back, {{Auth::user()->name}}
					</div>
					{{-- <div class="profile-usertitle-job">
						Developer
					</div> --}}
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="{{$tab == "orders" ? "active" : ""}} w-100">
							<a href="{{route('orders')}}" >
							<i class="fa fa-cubes" aria-hidden="true"></i>My Orders</a>
						</li>
						<li class="{{$tab == "settings" ? "active" : ""}} w-100">
							<a href="{{route('settings')}}" >
							<i class="fa fa-cogs" aria-hidden="true"></i>Account Settings</a>
						</li>
						{{-- <li class="{{$tab == "help" ? "active" : ""}} w-100">
							<a href="{{route('help')}}">
								<i class="fa fa-question-circle" aria-hidden="true"></i>Help</a>
						</li> --}}
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9 profile-content tab-content">
			<div class="tab-pane  {{$tab == "orders" ? "active in" : ""}}" id="orders">
        <h2 class="main-title" style="margin:0;"><i class="fa fa-cubes" aria-hidden="true"></i> MY ORDERS</h2>
				<br />
				<div id="myOrders" class="orders">
					@php
						$orders = DB::table('orders')
											->where('user_id','=',Auth::user()->id)
											->orderBy('created_at','desc')->paginate(10);
						// setlocale(LC_MONETARY, 'en_US');
					@endphp
					@foreach($orders as $order)
						<div class="order card mb-4">
							<div class="card-header">
						    <table class="table table-sm" style="margin-bottom:0; font-size:13px; font-weight:400">
									<tr>
										<td>
											<strong>ORDERED ON</strong><br />
											{{ date('F d, Y', strtotime($order->created_at)) }}
										</td>
										<td>
											<strong>TOTAL</strong><br />
											{{ number_format($order->total_cost, 2, '.', ',')}} CAD
										</td>
										<td>
											<strong>SHIP TO</strong><br />
											<button class="btn btn-sm btn-default" role="button" data-toggle="popover" data-trigger="focus" data-placement="bottom" data-html="true" data-content="{{$order->ship_firstname . " " . $order->ship_lastname}}<br />{{$order->ship_address_1}}<br />{{$order->ship_address_2 != "" ? $order->ship_address_2 . '<br/>' : ''}}
												{{$order->ship_city}}<br />{{$order->ship_province}}, {{$order->ship_postal}}">
												{{$order->ship_firstname . " " . $order->ship_lastname}}
												<i class="fa fa-caret-down" aria-hidden="true"></i>
											</button>
										</td>
										<td class="text-right">
											<strong>ORDER #</strong> {{$order->order_id}}<br />
											<a target="_blank" class="btn btn-sm btn-primary" href="/account/order/{{$order->order_id}}/invoice">View Order Details</a>
										</td>
									</tr>
								</table>
						  </div>
							<div class="card-block p-3">
								<div class="row">
									<div class="col-lg-7 col-xs-12">
										<div class="card-title">
											<strong><h3>
												{{$order->status}}
											</h3></strong>
											{{-- Your package was delivered. --}}
										</div>
									</div>
									<div class="col-lg-5 col-xs-12 text-center">
										@if($order->tracking_url != "")
											<a target="_blank" href="{!!$order->tracking_url!!}" class="btn btn-md btn-primary" disabled style="width:250px; margin-bottom:10px;">Track Package</a>
									  @else
											<a href="" class="btn btn-md btn-secondary disabled" disabled style="width:250px; margin-bottom:10px;">Track Package</a>
										@endif
									</div>
								</div>
							</div>
						</div>
					@endforeach
					<div class="custom-pagination">
						{{ $orders->links() }}
					</div>
				</div>
			</div>
			<div class="tab-pane  {{$tab == "settings" ? "active in" : ""}}" id="settings">
				<h2 class="main-title" style="margin:0;"><i class="fa fa-cogs" aria-hidden="true"></i> MY SETTINGS</h2>

				@if($errors->any())
					<div class="alert alert-danger" role="alert" style="margin-top:30px">
						{{$errors->first('email') }}
						{{$errors->first('password')}}
					</div>
				@endif
				@if(Session::has('form_error'))
					<div class="alert alert-{{session('error_type')}}" role="alert" style="margin-top:30px">
						{{session('form_error')}}
					</div>
				@endif
				<br />

				{{ Form::open(array('url' => route('do_change_password'),'data-toggle'=>'validator', 'method'=>"POST",'role'=>'form','id'=>'changePassword-form',"autocomplete"=>"off")) }}
				<h3 style="margin-top:0;">Change Password</h3>
				<hr />
				<div class="form-group has-feedback ">
					<div class="form-inline row">
						<div class="form-group col-md-12"></div>
						<div class="form-group col-md-4 col-sm-12">
							<label for="ship_firstname" class="control-label">Current Password</label>
							<div class="input-group">
								<input type="password" id="password" name="password" data-minLength="5" required class="form-control" placeholder="Current password" data-error="Current password required! ">
							</div>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group col-md-12 mt-3"></div>
						<div class="form-group col-md-4 col-sm-12 mt-2">
							<label for="ship_firstname" class="control-label">New Password</label>
							<div class="input-group">
								<input type="password" id="new_password" name="new_password" data-minLength="5" required class="form-control" placeholder="Password" data-error="New password required! ">
							</div>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group col-md-4 col-sm-12 mt-2">
							<label for="ship_firstname" class="control-label">Confirm New Password</label>
							<div class="input-group">
								<input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm Password" required data-error="Password required!" data-match="#new_password" data-minLength="5" data-match-error="Passwords must match!">
							</div>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				{{ Form::submit('Save', array('class'=>'btn btn-md btn-primary mt-2')) }}</p>
				{{ Form::close() }}
				<br />
				<h3 style="margin-top:0;">Change Email Notifications</h3>
				<hr />
				{{ Form::open(array('url' => route('do_update'), 'method'=>"POST",'role'=>'form','id'=>'email_updates',"autocomplete"=>"off")) }}
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
  					<div class="form-group">
  						<div class="input-group">
  							<input class="form-control" value="{{Auth::user()->email}}" readonly style='width:350px'/>
  						</div>
  						<br />
							<label for="updates" >
								<input type="checkbox" id="updates" value="{{Auth::user()->updates}}" name="updates" {{Auth::user()->updates == 1 ? "checked" : ""}}/>
								Keep me updated on CAD MicroSolutions Events and Promotions.
							</label>

					</div>
				</div>
			</div>
			{{ Form::submit('Save', array('class'=>'btn btn-md btn-primary')) }}</p>
			{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
<div class="modal-footer" style="display: inline-block;
    width: 100%;">
		</div>
</div>
</div>
</div>
</div>
</section>
@stop

@push('after-scripts')
  <script>
  $(function(){
    $('#updates').on('ifChecked', function(event){
         $(this).val(1);
    }).on('ifUnchecked', function(event){
         $(this).val(0);
    });
  });
  </script>
@endpush

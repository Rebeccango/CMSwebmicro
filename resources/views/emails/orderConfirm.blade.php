@extends('layouts.email')
@section('title')
Checkout Invoice | CAD MicroSolutions Inc.
@stop
@section('meta')
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="{{ url('/') }}" />
@stop
@push('head.style')
<style>
	body {
		background: #efefef;
		margin-bottom: 30px;
	}

	main {
		background: #efefef;
		width: 100%;
		height: 100%;
	}

	table {
		border-collapse: separate;
		border-spacing: 0.5em;
	}

	table td * {
		font-size: 13px;
	}

	table td {
		vertical-align: top;
	}

	.container {
		background: white;
		padding: 15px;
		max-width: 600px;
	}
</style>
@endpush
@section('print.title')
ORDER CONFIRMATION
@stop
@section('body')
<div class="container" style="margin:0 auto">
	@if(!$newUser)
	<h2>ACTIVATE YOUR ACCOUNT</h2>
	<hr />
	<h3>Your account credentials:</h3>
	<ul>
		<li>
			<strong>Email:</strong> {!!$email!!}
		</li>
		<li>
			<strong>Password:</strong> <a href="{!!$setPasswordUrl!!}">Click here to set your password</a>
		</li>
	</ul>
	<p>
		Once you set your password, you can login to your <a href="{{route("account")}}">account</a> to view your order
		history and status at anytime.
	</p>
	@endif
	<table width="100%" style="padding-top:20px">
		<tr>
			<td style="vertical-align:top">
				<font size="3">
					<h3>Order Details</h3>
				</font>
				<hr />
				<table class="w-100">
					<tr>
						<td>
							<strong>Order #:</strong>
						</td>
						<td>
							{!!$order->order_id!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Order Date:</strong>
						</td>
						<td>
							{!!$order->order_date!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Email:</strong>
						</td>
						<td>
							{!!$order->email!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Order Total:</strong>
						</td>
						<td>
							{!! number_format($order->total_cost, 2, '.', ' ') !!} CAD
						</td>
					</tr>
					<tr>
						<td>
							<strong>Order Status:</strong>
						</td>
						<td>
							<span data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover" @if($order->status
								== "PROCESSING")
								class="text-info" data-content="Your order is in the queue for processing."
								@elseif ($order->status == "PROCESSED")
								class="text-success" data-content="Your order has been processed."
								@elseif ($order->status == "COMPLETED")
								class="text-success" data-content="Your order has been completed."
								@else
								class="text-danger" data-content="There was a problem processing your order. Your order and payment are
								currently on hold and will be refunded if it cannot be completed."
								@endif>{!!$order->status!!}</span>
						</td>
					</tr>
					<tr>
						<td>
							<strong>Credit Card:</strong>
						</td>
						<td>
							{!!$card->source->brand!!} ····{!!$card->source->last4!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Payment Status:</strong>
						</td>
						<td>
							<span data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover" title=""
							 @if($order->payment_status == "PROCESSING")
								class="text-info" data-content="The payment is being processed on our end." title="The payment is being
								processed on our end."
								@elseif ($order->payment_status == "PROCESSED")
								class="text-success" data-content="The payment has been processed." title="The payment has been processed."
								@elseif ($order->payment_status == "REFUNDED")
								class="text-danger" data-content="Your payment has been refunded."
								title="Your payment has been refunded."
								@elseif($order->payment_status == "COMPLETED")
								class="text-success" data-content="Your payment has been processed." title="Your payment has been processed."
								@else
								class="text-danger" data-content="There was a problem processing your payment. It will be put on hold or
								refunded." title="There was a problem processing your payment. It will be put on hold or refunded."
								@endif>{!!$order->payment_status!!}</span>
						</td>
					</tr>
					<tr>
						<td>
							<strong>Tracking #:</strong>
						</td>
						<td>
							@if(isset($trackingURL) && isset($trackingNumber))
							<a target="_blank" href="{!!$trackingURL!!}">{!!$trackingNumber!!}</a>
							@else
							N/A
							@endif
						</td>
					</tr>
					<tr>
						<td>
							<strong>Promo Code:</strong>
						</td>
						<td>
							@if($order->coupon != "")
							{{$order->coupon}}
							@else
							No Coupon Used
							@endif
						</td>
					</tr>
				</table>
			</td>
			<td style="vertical-align:top">
				<font size="3">
					<h3>Shipping Details</h3>
				</font>
				<hr />
				<table class="w-100">
					<tr>
						<td>
							<strong>Name:</strong>
						</td>
						<td>
							{!!$order->ship_firstname!!} {!!$order->ship_lastname!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Address:</strong>
						</td>
						<td>
							{!!$order->ship_address_1!!}
						</td>
					</tr>
					@if($order->ship_address_2 !== "")
					<tr>
						<td>
							<strong>Address Line 2:</strong>
						</td>
						<td>
							{!!$order->ship_address_2!!}
						</td>
					</tr>
					@endif
					<tr>
						<td>
							<strong>City:</strong>
						</td>
						<td>
							{!!$order->ship_city!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Province:</strong>
						</td>
						<td>
							{!!$order->ship_province!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Postal Code:</strong>
						</td>
						<td>
							{!!$order->ship_postal!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Country:</strong>
						</td>
						<td>
							{!!$order->ship_country!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Phone:</strong>
						</td>
						<td>
							{{$order->ship_tel}}
						</td>
					</tr>
				</table>
			</td>
			<td style="vertical-align:top">
				<font size="3">
					<h3>Billing Details</h3>
				</font>
				<hr />
				<table class="w-100">
					<tr>
						<td>
							<strong>Name:</strong>
						</td>
						<td>
							{!!$order->bill_firstname!!} {!!$order->bill_lastname!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Address:</strong>
						</td>
						<td>
							{!!$order->bill_address_1!!}
						</td>
					</tr>
					@if($order->bill_address_2 !== "")
					<tr>
						<td>
							<strong>Address Line 2:</strong>
						</td>
						<td>
							{!!$order->bill_address_2!!}
						</td>
					</tr>
					@endif
					<tr>
						<td>
							<strong>City:</strong>
						</td>
						<td>
							{!!$order->bill_city!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Province:</strong>
						</td>
						<td>
							{!!$order->bill_province!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Postal Code:</strong>
						</td>
						<td>
							{!!$order->bill_postal!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Country:</strong>
						</td>
						<td>
							{!!$order->bill_country!!}
						</td>
					</tr>
					<tr>
						<td>
							<strong>Phone:</strong>
						</td>
						<td>
							{{$order->bill_tel}}
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<font size="3">
		<h3>Items Ordered</h3>
	</font>
	@if(count($order_products) > 0)
	<table style="border-bottom:1px solid #ccc; padding:0;">
		<tr>
			<th></th>
			<th style="width:45%;text-align: left;padding-left: 0;">Item Details</th>
			<th style="width:15%">Unit Price</th>
			<th style="width:10%">QTY</th>
			<th style="width:15%">Total Price</th>
		</tr>
		@foreach($order_products as $prod)
		@php
		$product = DB::table('products_ordered')
		->where('id','=',$prod[0])
		->first();

		$cats = explode('.',$product->category_id);
		$category = DB::table('categories')
		->where('id','=',$product->category_id)
		->first();

		$image = $product->thumbnail;
		$price = $product->sale_price != "" ? $product->sale_price : $product->price;
		@endphp
		<tr class="cart-item" data-pid="{{$product->id}}">
			<td style="text-align:center">
				<a href="/store/catalog/{{$category->slug}}/{{$product->slug}}" title="{{$product->title}}">
					<img src="{{asset('storage/'.$product->thumbnail)}}" class="w-auto pr-2 pb-1" height="70px" />
				</a>
			</td>
			<td style="text-align:left">
				<a href="/store/catalog/{{$category->slug}}" class="category" title="{{$category->name}}" style="text-align:left">{{$category->name}}</a>
				<font size="3">
					<b><a href="/store/catalog/{{$category->slug}}/{{$product->slug}}" class="name" style="text-align:left; width:100%; display:block;"
						 title="{{$product->title}}">{{$product->title}}</a></b></font>
				{{-- <p class="product_info" style="font-size:12px">
					{{$product->excerpt}}
				</p> --}}
			</td>
			<td style="text-align:center">
				{!! number_format($price, 2, '.', ' ')!!} {{ $product->currency }}
			</td>
			<td style="text-align:center">
				{{$prod[1]}}
			</td>
			<td style="text-align:center">
				{!!number_format($price * $prod[1], 2, '.', ' ')!!} {{ $product->currency }}
			</td>
		</tr>
		@endforeach
	</table>
	@endif
	<table>
		<tr class="text-right">
			<td>
				<strong>SUB TOTAL:</strong>
			</td>
			<td>
				{!!number_format($order->sub_cost, 2, '.', ' ')!!} CAD
			</td>
		</tr>
		<tr class="text-right">
			<td>
				<strong>TAXES:</strong>
			</td>
			<td>
				{!!number_format($order->tax, 2, '.', ' ')!!} CAD
			</td>
		</tr>
		<tr class="text-right">
			<td>
				<strong>SHIPPING:</strong>
			</td>
			<td>
				{!!number_format($order->shipping_cost, 2, '.', ' ')!!} CAD
			</td>
		</tr>
		@if($order->coupon != "")
		<tr class="text-right">
			<td>
				<strong>COUPON:</strong>
			</td>
			<td>
				@php
				if($order->coupon_type == "VALUE"){
				$order->coupon_description = "$".number_format($order->coupon_value, 2, '.', ' ')." CAD";
				}
				if($order->coupon_type == "PERCENT"){
				$order->coupon_description = $order->coupon_value."% OFF";
				}
				if($order->coupon_type == "SHIPPING"){
				$order->coupon_description = "FREE SHIPPING";
				}
				if($order->coupon_type == "ITEM")
				{
				$order->coupon_description = strtoupper($order->coupon);
				}
				@endphp
				{!!$order->coupon!!}<span data-container="body" data-toggle="popover" data-html="true" data-trigger="hover"
				 data-placement="right" data-content="<strong>Coupon Code:</strong><br />{{$order->coupon}}<br />{{$order->coupon_image != "" ? '<img style="width:100%" src="'.asset('/storage/'.$order->coupon_image).'" />' : ""}}<strong>Description:</strong> {{$order->coupon_body}}"><i
					 class="fa fa-lg fa-info-circle" aria-hidden="true"></i></span>
			</td>
		</tr>
		@endif
		<tr class="text-right">
			<td>
				<strong style="font-size:20px;">TOTAL:</strong>
			</td>
			<td>
				<strong style="font-size:20px;">{!!number_format($order->total_cost, 2, '.', ' ')!!} CAD</strong>
			</td>
		</tr>
	</table>
</div>
<div style="background: #3781ef; color:#FFF; margin:0 auto; padding:15px;
max-width:600px;">
	<table width="100%">
		<tr>
			<td style="vertical-align:middle">
				<font size="2" style="color:white">Have questions? <a href="{{route('contact')}}" style="font-size: 16px;
    font-weight: bold;
    color: white;">Contact
						Us</a></font>
			</td>
			<td style="vertical-align:middle; text-align:right; color:white">
				<strong style="font-size:20px; color:white">416-213-0533</strong><br />
				We're available Mon-Fri 9am-5pm
			</td>
		</tr>
	</table>
</div>
@stop
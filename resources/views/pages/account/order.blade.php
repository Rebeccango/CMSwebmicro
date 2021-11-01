@extends('layouts.store')
@section('title')
  Order Details | CAD MicroSolutions Inc.
@stop
@section('meta')
	<meta http-equiv="cache-control" content="private, max-age=0, no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
@stop
@section('body')
	@php
	setlocale(LC_MONETARY, 'en_CA.UTF-8');
	$cart = $order->products;
	$cart_items = explode(",", $cart);
	@endphp
	<section >
		<div class="container-fluid">
				<div class="col-lg-9 col-md-7 col-sm-8 col-xs-12">
					<h1 class="main-title">Order #{{$order->order_id}}</h1>
				</div>
				<div class="col-lg-3 col-md-5 col-sm-4 col-xs-12">
					<a href="/account/order/{{$order->order_id}}/invoice" style="margin-top:40px;" class="btn-primary btn btn-md hidden-xs-down pull-right"><i class="fa fa-print" aria-hidden="true"></i> PRINT INVOICE</a>
				</div>
			<div class="spacer20"></div>
			  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    <h2>Order Details</h2>
					<hr />
					<table class="table-striped table table-condensed table-sm" style="width:100%; font-size:13px" cellpadding="20">
						<tr>
							<td>
								<strong>Order #:</strong>
							</td>
							<td>
								{{$order->order_id}}
							</td>
						</tr>
						<tr>
							<td>
								<strong>Order Date:</strong>
							</td>
							<td>
								{{$order->order_date}}
							</td>
						</tr>
						<tr>
							<td>
								<strong>Order Total:</strong>
							</td>
							<td>
								{{money_format('%.2n', $order->total_cost)}} USD
							</td>
						</tr>
						<tr>
							<td>
								<strong>Order Status:</strong>
							</td>
							<td>
								<span data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover"
									@if($order->status == "PROCESSING")
										class="text-info" data-content="Your order is in the queue for processing."
									@elseif ($order->status == "PROCESSED")
										class="text-success" data-content="Your order has been processed."
									@else
										class="text-danger" data-content="There was a problem processing your order. Your order and payment are currently on hold and will be refunded if it cannot be completed."
									@endif>{{$order->status}}</span>
							</td>
						</tr>
						<tr>
							<td>
								<strong>Credit Card:</strong>
							</td>
							<td>
								{{$card->source->brand}} ····{{$card->source->last4}}
							</td>
						</tr>
						<tr>
							<td>
								<strong>Payment Status:</strong>
							</td>
							<td>
								<span data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover"
									@if($order->payment_status == "PROCESSING")
										class="text-info" data-content="The payment is being processed on our end."
									@elseif ($order->payment_status == "PROCESSED")
										class="text-success" data-content="The payment has been processed."
									@elseif ($order->payment_status == "REFUNDED")
										class="text-danger" data-content="Your payment has been refunded."
									@else
										class="text-primary"
									@endif>{{$order->payment_status}}</span>
							</td>
					</tr>
					<tr>
						<td>
							<strong>Tracking #:</strong>
						</td>
						<td>
              @if(isset($shipmentDetails))
								{{$shipmentDetails}}
                <a target="_blank" href="{{$shipmentDetails['tracking_url_provider']}}">{{$shipmentDetails['tracking_number']}}</a>
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
							{{$order->coupon}}
						</td>
					</tr>
					</table>
			  </div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    <h2>Shipping Details</h2>
					<hr />
					<table class="table-striped table table-condensed table-sm" style="width:100%; font-size:13px" cellpadding="20">
						<tr>
							<td>
								<strong>Name:</strong>
							</td>
							<td>
								{{$order->ship_firstname}} {{$order->ship_lastname}}
							</td>
						</tr>
						<tr>
							<td>
								<strong>Address:</strong>
							</td>
							<td>
								{{$order->ship_address_1}}
							</td>
						</tr>
						@if($order->ship_address_2 !== "")
						<tr>
							<td>
								<strong>Address Line 2:</strong>
							</td>
							<td>
								{{$order->ship_address_2}}
							</td>
						</tr>
					 @endif
					 <tr>
						 <td>
							 <strong>City:</strong>
						 </td>
						 <td>
							 {{$order->ship_city}}
						 </td>
					 </tr>
					 <tr>
						<td>
							<strong>Province:</strong>
						</td>
						<td>
							{{$order->ship_province}}
						</td>
					</tr>
					<tr>
					 <td>
						 <strong>Postal Code:</strong>
					 </td>
					 <td>
						 {{$order->ship_postal}}
					 </td>
				 </tr>
				 <tr>
					<td>
						<strong>Country:</strong>
					</td>
					<td>
						{{$order->ship_country}}
					</td>
				</tr>
					</table>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			    <h2>Billing Details</h2>
					<hr />
					<table class="table-striped table table-condensed table-sm" style="width:100%; font-size:13px" cellpadding="20">
						<tr>
							<td>
								<strong>Name:</strong>
							</td>
							<td>
								{{$order->bill_firstname}} {{$order->bill_lastname}}
							</td>
						</tr>
						<tr>
							<td>
								<strong>Address:</strong>
							</td>
							<td>
								{{$order->bill_address_1}}
							</td>
						</tr>
						@if($order->bill_address_2 !== "")
						<tr>
							<td>
								<strong>Address Line 2:</strong>
							</td>
							<td>
								{{$order->bill_address_2}}
							</td>
						</tr>
					 @endif
					 <tr>
						 <td>
							 <strong>City:</strong>
						 </td>
						 <td>
							 {{$order->bill_city}}
						 </td>
					 </tr>
					 <tr>
						<td>
							<strong>Province:</strong>
						</td>
						<td>
							{{$order->bill_province}}
						</td>
					</tr>
					<tr>
					 <td>
						 <strong>Postal Code:</strong>
					 </td>
					 <td>
						 {{$order->bill_postal}}
					 </td>
				 </tr>
				 <tr>
					<td>
						<strong>Country:</strong>
					</td>
					<td>
						{{$order->bill_country}}
					</td>
				</tr>
				</table>
			</div>
			<div class="spacer20"></div>
      <div class="row flex-row-reverse m-0 mt-4">
  			<div class="col-lg-12 p-0" id="shopping_cart"  style="border-bottom:1px solid #ccc">
  				<h3>Item(s) Ordered</h3>
          @php
            $order_products = json_decode($order->products,true);
          @endphp
  				@if(count($order_products) > 0)
          <div class="cart-items-list" style="width:100%">
            <div class="cart-item">
              <div class="cart-item-col" style="width:100px"></div>
              <div class="cart-item-col" style="width:45%;text-align: left;padding-left: 0;">Item Details</div>
              <div class="cart-item-col" style="width:15%">Unit Price</div>
              <div class="cart-item-col" style="width:10%">QTY</div>
              <div class="cart-item-col" style="width:15%">Total Price</div>
            </div>
            @foreach($order_products as $prod)
            @php
              $product =  DB::table('products_ordered')
                      ->where('id','=',$prod[0])
                      ->first();

              $cats = explode(',',$product->category_id);
              $category =  DB::table('categories')
                      ->where('id','=',$product->category_id)
                      ->first();

              $image = $product->thumbnail;
              $price = $product->sale_price != "" ? $product->sale_price : $product->price;
            @endphp
            <div class="cart-item" data-pid="{{$product->id}}">
              <a href="/store/catalog/{{$category->slug}}/{{$product->slug}}" title="{{$product->title}}">

              <img src="{{asset('storage/'.$product->thumbnail)}}" class="w-auto pr-2 pb-1" height="120px" />

              </a>
              <div class="cart-item-details">
                <a href="/store/catalog/{{$category->slug}}" class="category" title="{{$category->name}}">{{$category->name}}</a>
                <h2><a href="/store/catalog/{{$category->slug}}/{{$product->slug}}" class="name" title="{{$product->title}}">{{$product->title}}</a></h2>
                <p class="product_info small">
                    {{$product->excerpt}}
                </p>
              </div>
              <div class="cart-item-unitprice">
                ${{number_format($price,2)}} {{$product->currency}}
              </div>
              <div class="cart-item-quantity text-center">
                {{$prod[1]}}
              </div>
              <div class="cart-item-total">
                ${{number_format($price * $prod[1],2)}} {{$product->currency}}
              </div>
            </div>
            @endforeach
  				  @endif
            </div>
  				</div>
					<div class="col-lg-5 col-md-9 col-sm-12 col-xs-12 pr-0">
						<table class="table table-striped table-sm">
							<tr class="text-right">
								<td>
									<strong>SUB TOTAL:</strong>
								</yd>
								<td>
									{{money_format('%.2n',$order->sub_cost)}} USD
								</td>
							</tr>
							<tr class="text-right">
								<td>
									<strong>TAXES:</strong>
								</td>
								<td>
									{{money_format('%.2n',$order->tax)}} USD
								</td>
							</tr>
							<tr class="text-right">
								<td>
									<strong>SHIPPING:</strong>
								</td>
								<td>
									{{money_format('%.2n',$order->shipping_cost)}} USD
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
											$order->coupon_description = "$".number_format($order->coupon_value,2,'.',',')." USD";
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
									{{$order->coupon}}<span data-container="body" data-toggle="popover" data-html="true"  data-trigger="hover" data-placement="right" data-content="<strong>Coupon Code:</strong><br />{{$order->coupon}}<br />{{$order->coupon_image != "" ? '<img style="width:100%" src="'.asset('/storage/'.$order->coupon_image).'" />' : ""}}<strong>Description:</strong> {{$order->coupon_body}}"><i class="fa fa-lg fa-info-circle" aria-hidden="true"></i></span>
								</td>
							</tr>
							@endif
							<tr class="text-right">
								<td>
									<strong>TOTAL:</strong>
								</td>
								<td>
									{{money_format('%.2n',$order->total_cost)}} USD
								</td>
							</tr>
						</table>
					</div>
				</div>
	</section>
@stop

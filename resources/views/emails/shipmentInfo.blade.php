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
  body{
    background:#efefef;
    margin-bottom:30px;
  }
  main{
    background:#efefef;
    width:100%;
    height:100%;
  }
  table{
    border-collapse:separate;
    border-spacing:2px;
  }
   table td * {
     font-size:13px;
   }
    .container{
      background:white;
      padding:15px;
      max-width:600px;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    th, td {
      padding: 10px;
      text-align: left;
      vertical-align: middle;
    }
  </style>
@endpush
@section('print.title')
  SHIPMENT INFO
@stop
@section('body')
<div class="container" style="margin:0 auto">
  <h2>Shipment Details</h2>
  <p>
    Please find the shipping details below. Please print the attached shipping labels.
  </p>
  <font size="3" style="margin:0"><h2>Packaging</h2></font>
  <hr />
  <table style="border-spacing:0; width:100%">
    @php $i = 0; @endphp
  @foreach($packaging as $package)
    <tr>
      <td style="vertical-align:top; padding-right:15px">
        <h4  style="margin:0;">#{{ $i+1 }}</h4>
      </td>
      <td>
        @if(!is_string($package->box['type']))
          <h4 style="margin:0">{!!$package->box['type']->getReference()!!}</h4>
          <p style="margin:0">{!!$package->box['type']->getOuterWidth()!!} x {!!$package->box['type']->getOuterDepth()!!} x  {!!$package->box['type']->getOuterLength()!!} (WxDxH) in.</p>
        @else
          <h4 style="margin:0">{!!$package->box['type']!!}</h4>
        @endif
      </td>
    </tr>
    <tr>
      <td>
      </td>
      <td>
        <table style="border-spacing:0">
          <thead>
            <tr>
              <th>
                <strong>ID</strong>
              </th>
              <th style="padding: 0 15px;">
                <strong>Name</strong>
              </th>
              <th>
                <strong>Quantity</strong>
              </th>
            </tr>
          </thead>
          @php
            $its = $package->items;
            $items = array_count_values($package->items);
          @endphp

          @foreach( $items as $id => $quantity)
          <tr>
            <td>
              {!!$id!!}
            </td>
            <td style="padding: 0 15px;">
              {!!DB::table('products')->where('id','=',$id)->pluck('title')[0]!!}
            </td>
            <td>
              {!!$quantity!!}
            </td>
          </tr>
          @endforeach
        </table>
      </td>
    @php $i+=1; @endphp
  @endforeach
</table>
<table width="100%" style="padding-top:20px; border-spacing:0">
  <tr>
  <td style="vertical-align:top">
    <font size="3"><h3>Order Details</h3></font>
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
					{!!money_format('%.2n', $order->total_cost)!!} CAD
				</td>
			</tr>
			{{-- <tr>
				<td>
					<strong>Order Status:</strong>
				</td>
				<td>
					<span data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover"
						@if($order->status == "PROCESSING")
							class="text-info" data-content="Your order is in the queue for processing."
						@elseif ($order->status == "PROCESSED")
							class="text-success" data-content="Your order has been processed."
            @elseif ($order->status == "COMPLETED")
              class="text-success" data-content="Your order has been completed."
            @else
							class="text-danger" data-content="There was a problem processing your order. Your order and payment are currently on hold and will be refunded if it cannot be completed."
						@endif>{!!$order->status!!}</span>
				</td>
			</tr> --}}
      <tr>
				<td>
					<strong>Payment Status:</strong>
				</td>
				<td>
					<span data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover" title=""
						@if($order->payment_status == "PROCESSING")
							class="text-info" data-content="The payment is being processed on our end." title="The payment is being processed on our end."
						@elseif ($order->payment_status == "PROCESSED")
							class="text-success" data-content="The payment has been processed." title="The payment has been processed."
						@elseif ($order->payment_status == "REFUNDED")
							class="text-danger" data-content="Your payment has been refunded."
              title="Your payment has been refunded."
            @elseif($order->payment_status == "COMPLETED")
              class="text-success" data-content="Your payment has been processed." title="Your payment has been processed."
            @else
							class="text-danger" data-content="There was a problem processing your payment. It will be put on hold or refunded." title="There was a problem processing your payment. It will be put on hold or refunded."
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
		</table>
  </td>
  <td style="vertical-align:top">
    <font size="3"><h3>Shipping Details</h3></font>
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
					<strong>Company:</strong>
				</td>
				<td>
					{!!$order->ship_org!!}
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
</tr>
</table>

</div>
@stop

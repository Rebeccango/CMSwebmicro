@extends('layouts.store')
@section('title')
  Store - My Cart | CAD MicroSolutions Inc.
@stop
@section('body')
  <section>
    <div id="shopping_cart" class="">
      <div class="row">
        <div class="col-lg-8">
          @if(Session::has('test'))
            <p class="alert alert-info">{{ var_dump(Session::get('test')) }}</p>
          @endif
          <div class="title-block">
            <h1><i class="fa fa-shopping-cart" aria-hidden="true"></i> MY CART <span class="beta-badge badge badge-sm badge-secondary" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-trigger="hover" data-content="The CAD MicroSolutions Online Store is currently in Beta. <br>There may be bugs, if you run into any issues please don't hesitate to email us at <a href='mailto:support@cadmicro.com'>support@cadmicro.com</a>">BETA</span></h1>
            <span class="num-items"><span class="cart-total-items">{{$calcCart->num_items}}</span> ITEM(s)</span>
            <span class="continue pull-right"><a href="{{route('store')}}">Continue Shopping</a></span>
          </div>
          @if(session('error'))
            <div class="alert alert-{{session('error-type')}}" role="alert" style="margin-top:30px">
              {{session('error')}}</a>.
            </div>
          @endif
          @php
            if(session('coupon')){
              @endphp
              <div class="alert alert-{!!session('result')!!}" role="alert" style="margin-top:30px">
                <strong>{!!session('title')!!}</strong> - {!!session('msg')!!}.
              </div>
              @php
            }
          @endphp
          @if($calcCart->num_items > 0)

          <div class="cart-items-list">
            <div class="cart-item">
              <div class="cart-item-col" style="width:150px"></div>
              <div class="cart-item-col" style="width:45%">Item Details</div>
              <div class="cart-item-col" style="width:15%">Unit Price</div>
              <div class="cart-item-col" style="width:10%">QTY</div>
              <div class="cart-item-col" style="width:15%">Total Price</div>
            </div>
              @foreach($calcCart->products as $product)
              @php
              $category = DB::table('categories')
                      ->where('id','=',$product->category_id)
                      ->first();
              $image = explode(",",$product->images)[0];
              @endphp
              <div class="cart-item" data-pid="{{$product->id}}">
                <a href="/store/catalog/{{$category->slug}}/{{$product->slug}}" title="{{$product->title}}"><div class="cart-item-img" style="background-image:url({{$product->thumbnail}})"></div></a>
                <div class="cart-item-details">
                  <a href="/store/catalog/{{$category->slug}}" class="category" title="{{$category->name}}">{{$category->name}}</a>
                  <h2><a href="/store/catalog/{{$category->slug}}/{{$product->slug}}" class="name" title="{{$product->title}}">{{$product->title}}</a></h2>
                  <p class="product_info d-xs-none d-sm-none d-md-block">
                      {{$product->excerpt}}
                  </p>
                  <div class="cart-item-actions">
                    <button type="button" data-pid="{{$product->id}}" class="cart-action-remove btn btn-sm btn-default">Remove Item</button>
                  </div>
                </div>
                <div class="cart-item-unitprice">
                  ${{number_format($product->price,2)}} {{$product->currency}}
                </div>
                <div class="cart-item-quantity">
                	<input type="number" size="3" title="Quantity" class="product-qty pull-left form-control" name="quantity" value="{{$product->qty}}" min="1">
                </div>
                <div class="cart-item-total">
                  ${{number_format($product->price * $product->qty,2)}} {{$product->currency}}
                </div>
              </div>
          @endforeach
          </div>
          @else
            <div class="empty-cart">
              <h2><i class="fa fa-ban" aria-hidden="true"></i> Your shopping cart is empty</h2>
            </div>
          @endif
        </div>
        <div class="col-lg-4">
          <div  class="cart-summary card">
            <div class="card-block">
              {{-- <div class="cart-actions">
                <button type="submit" class="checkout-btn btn-update"><i class="fa fa-refresh" aria-hidden="true"></i> UPDATE TOTAL</button>
              </div> --}}
              <h3 class="card-title">ORDER SUMMARY</h3>
              <div class="mb-3">
              <small><em>*Note: All final totals are calculated in CAD based on today's exchange rates</em></small></div>
              <div class="card cart-widget">
                <div class="cart-loading"></div>
                <div class="cart-widget-block">
                  <div class="cart-widget-label">
                    <span class="cart-total-items">{{$calcCart->num_items}}</span> ITEM(s)
                  </div>
                </div>
                <div class="cart-widget-block cart-widget-title">
                    <div class="cart-widget-label">SUBTOTAL</div>
                    <div class="cart-widget-value cart-subtotal">${{number_format($calcCart->subtotal,2)}} CAD</div>
                </div>
                @if($calcCart->coupon != "")
                  <div class="cart-widget-block cart-widget-title cart-widget-coupon">
                    <div class="cart-widget-label">COUPON <span data-container="body" data-toggle="popover" data-html="true"  data-trigger="hover" data-placement="right" data-content="<p><strong>Coupon Code:<br /> {{$calcCart->coupon->name}}</strong><br /></p><p><strong>Description:</strong></p><small>{{$calcCart->coupon->details}}</small>"><i class="fa fa-lg fa-info-circle" aria-hidden="true"></i></span></div>
                    <div class="cart-widget-value green">{!!$calcCart->coupon->name!!}</div>
                  </div>
                @endif
                <div class="cart-widget-block cart-widget-title cart-widget-total">
                  <div class="cart-widget-label">TOTAL</div>
                  <div class="cart-widget-value cart-total">{{"$".number_format($calcCart->total,2,".",",")." CAD"}}</div>
                </div>
              </div>
              <div class="cart-actions">
                <button type="button" id="checkout" class="checkout-btn">PROCEED TO CHECKOUT</button>
              </div>
            </div>
          </div>
          <div class="cart-summary cart-promo card">
            <div class="card-block">
              <div class="card cart-widget">
                <a data-toggle="collapse" href="#promo" aria-expanded="false" aria-controls="promo">
                  <div class="cart-widget-block">
                    <div class="cart-widget-label">REDEEM PROMO</div>
                    <div class="cart-widget-value"><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                  </div>
                </a>
                <div id="promo" class="collapse p-2 cart-widget-title">
                  <input id="couponinput" type="text" class="couponinput" autocomplete="off" autocapitalize="off" name="cart_couponcode" alt="Enter Promotional Code" maxlength="50" required placeholder="Enter your promo code" value="">
                  <div class="clear">Note: Include uppercase letters and hyphens.</div>
                  <button type="submit" class="addcoupon checkout-btn" name="cart_addCoupon" id="cart_addcoupon" disabled='true'>APPLY COUPON</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</div>
</section>
@stop
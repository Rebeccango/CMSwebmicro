@extends('layouts.store')
@section('title')
{{$current_product->title}} - {{$current_category->name}} - Store | CAD MicroSolutions Inc.
@stop
@push('meta-tags')
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@CAD_Micro" />
<meta name="twitter:creator" content="@CAD_Micro" />
<meta name="twitter:title" content="{{$current_product->title}}">
<meta name="twitter:image" content="{{asset('storage/store/item_'.$current_product->id.'/'.explode(",", $current_product->images)[0])}}">
<meta name="twitter:description" content="{{$current_product->excerpt}}">

<meta property="og:type" content="website" />
<meta property="og:site_name" content="{!! Voyager::setting('site.title') !!}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:title" content="{{$current_product->title}}" />
<meta property="og:description" content="{{$current_product->meta_description}}" />
{{--
<meta property="og:image" content="{{asset('storage/store/item_'.$current_product->id.'/'.explode(",", $current_product->images)[0])}}" />
--}}
<meta property="og:image" content="{{asset($current_product->thumbnail)}}" />

<meta itemscope itemtype="https://schema.org/Product" />
<meta itemprop="name" content="{{$current_product->title}}" />
<meta itemprop="manufacturer" content="{{$current_category->name}}" />
<meta itemprop="description" content="{{$current_product->meta_description}}" />
<meta itemprop="image" content="{{asset('storage/store/item_'.$current_product->id.'/'.explode(",", $current_product->images)[0])}}" />
@endpush
@section('description'){{$current_product->meta_description}}@stop
@section('keywords'){{$current_product->meta_keywords}}@stop
@push('after-styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.11.1/simplelightbox.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.6/css/swiper.min.css" />

<style>
	#relatedProducts.swiper-container {
      width: 100%;
      height: 100%;
			margin-top:-40px;
    }
    #relatedProducts .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
		#relatedProducts .swiper-wrapper{
			padding-top:40px;
		}
		#relatedProducts .swiper-pagination{
			top:0 !important;
			right:0 !important;
			left:initial !important;
			width:auto !important;
		}
		#relatedProducts .relatedProducts-category{
			font-size:60%;
		}
	</style>
@endpush
@push('after-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.11.1/simple-lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.6/js/swiper.min.js"></script>
@endpush
@section('body')
@php
$images = explode(",", $current_product->images);
if(!empty($images)){
	$images = array();
}
@endphp
<section>
	@include('layouts.breadcrumbs')
	<div class="row" id="product-page">
		<div class="product-buy d-md-none px-4 w-100">
			<span class="product-category">{{$current_category->name}}</span>
			<h1 class="product-title">{{$current_product->title}}</h1>
			<table>
				@if(isset($current_product->subtitle))
				<tr>
					<td class="product-subtitle">
						<h4>
							{{$current_product->subtitle}}
						</h4>
					</td>
				</tr>
				@endif
				<tr>
					@if(isset($current_product->product_model) && $current_product->product_model != "")
					<td class="product-model">
						SKU: {{$current_product->product_model}}
					</td>
					@endif
					@if(isset($current_product->product_id) && $current_product->product_id != "")
					<td class="product-id">
						ID: {{$current_product->product_id}}
					</td>
					@endif
				</tr>
			</table>
			@if(!empty($current_product->sale_price))
			<table width="100%">
				@if($current_product->currency === "USD")
				<tr>
					<td><span class="product-price mr-3">${!!number_format($current_product->sale_price,2,".",",")!!} USD</span>Was:
						<del class="text-danger">${!!number_format($current_product->price,2,".",",")!!} USD</del></td>
				</tr>
				<tr>
					<td><small><strong>${{number_format($current_product->sale_price_cad,2,".",",")}} CAD</strong><em> (based on
								today's exchange rate)</em></small></td>
				</tr>
				@else
				@endif
			</table>
			@else
			<table width="100%">
				@if($current_product->currency === "USD")
				<tr>
					<td colspan="100%"><span class="product-price">${{number_format($current_product->price,2,".",",")}} USD</span></td>
				</tr>
				<tr>
					<td><small><strong>${{number_format($current_product->price_cad,2,".",",")}} CAD</strong><em> (based on today's
								exchange rate)</em></small></td>
				</tr>
				@else
				<tr>
					<td><span class="product-price">${{number_format($current_product->price,2,".",",")}} CAD</span></td>
				</tr>
				@endif
			</table>
			@endif
			<table width="100%" style="margin:15px 0;">
				<tr style="vertical-align:top">
					<td class="d-flex">
						<div class="ml-0 mr-3 my-2">Quantity:</div>
						<input type="text" size="3" required data-error="Quantity is Required!" title="Quantity" class="product-qty pull-left form-control"
						 name="quantity" id="quantity" value="1" minlength="1" maxlength="3">
						<button type="button" class="btn btn-md btn-primary btn-add-to-cart" data-pid="{{$current_product->id}}"><i class="fa fa-cart-plus"
							 aria-hidden="true"></i><span>ADD TO CART</span></button>
					</td>
					<td class='text-right'>
						<h3>Share this product:</h3>
						<div class="share-page" style="margin-bottom:20px"></div>
					</td>
				</tr>
			</table>
		</div>
		@if(!empty($images))
		<div class="col-lg-7 col-md-12 col-sm-12">
			<div class="product-gallery d-block d-sm-block d-md-flex d-lg-flex d-xl-flex d-xs-block @if(count($images) >= 1) show_thumbs @endif">
				<div class="swiper-container gallery-thumbs gallery-thumbs-vertical d-sm-none d-md-block d-xs-none d-none d-lg-block swiper-container-vertical">
					<div class="swiper-wrapper">
						@php
						foreach($images as $image){
						$ext = pathinfo($image, PATHINFO_EXTENSION);
						$external = filter_var($image, FILTER_VALIDATE_URL);
						$video = in_array($ext, array('mp4','avi','mov'));
						$imagge = in_array($ext, array('gif','jpg','jpeg','png'));
						@endphp
						@if($video && !$external)
						<iframe width="100%" class="swiper-slide" rel="gallery" src="{{asset('storage/store/item_'.$current_product->id.'/'.$image)}}"
						 frameborder="0" allowfullscreen></iframe>
						@elseif($imagge && !$external)
						<div class="swiper-slide swipe-img" style="background-image:url({{asset('storage/store/item_'.$current_product->id.'/'.$image)}})"></div>
						@elseif($external && $imagge)
						<div class="swiper-slide swipe-img" style="background-image:url({{$image}})"></div>
						@elseif($external && !$imagge)
						@php
						$urlArr = explode("/",$image);
						$urlArrNum = count($urlArr);
						// YouTube video ID
						$youtubeVideoId = $urlArr[$urlArrNum - 1];
						// Generate youtube thumbnail url
						$thumbURL = 'https://img.youtube.com/vi/'.$youtubeVideoId.'/0.jpg';
						@endphp
						<div class="swiper-slide  swipebox-video" style="background-image:url({{$thumbURL}})"></div>
						@endif
						@php
						}
						@endphp
					</div>
				</div>
				<div class="swiper-container gallery-top @if(count($images) == 1) single @endif">
					<div class="swiper-wrapper">
						@php
						foreach($images as $image){
						$ext = pathinfo($image, PATHINFO_EXTENSION);
						$external = filter_var($image, FILTER_VALIDATE_URL) ? true : false;
						$video = in_array($ext, array('mp4','avi','mov')) ? true : false ;
						$imagge = in_array($ext, array('gif','jpg','jpeg','png'));
						@endphp
						@if($video && !$external)
						<iframe width="100%" class="swiper-slide" rel="gallery" src="{{asset('storage/store/item_'.$current_product->id.'/'.$image)}}"
						 frameborder="0" allowfullscreen></iframe>
						@elseif($imagge && !$external)
						<a class="swiper-slide swipebox swipe-img" rel="gallery" href="{{asset('storage/store/item_'.$current_product->id.'/'.$image)}}"
						 style="background-image:url({{asset('storage/store/item_'.$current_product->id.'/'.$image)}})"></a>
						@elseif($external && $imagge)
						<a class="swiper-slide swipebox swipe-img" rel="gallery" href="{{$image}}" style="background-image:url({{$image}})"></a>
						@elseif($external && !$imagge)
						<a class="swiper-slide" rel="gallery" href="{{$image}}" style="background-image:url({{$image}})"><iframe width="100%"
							 class="swiper-slide" rel="gallery" src="{{$image}}" frameborder="0" allowfullscreen></iframe></a>
						@endif
						@php
						}
						@endphp
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>

				<div class="swiper-container gallery-thumbs gallery-thumbs-horizontal d-sm-block d-md-none">
					<div class="swiper-wrapper">
						@php
						$images = $current_product->images;

						foreach(explode(",", $images) as $image){
						$ext = pathinfo($image, PATHINFO_EXTENSION);
						$external = filter_var($image, FILTER_VALIDATE_URL);
						$video = in_array($ext, array('mp4','avi','mov'));
						$imagge = in_array($ext, array('gif','jpg','jpeg','png'));
						@endphp

						@if($video && !$external)
						<iframe width="100%" class="swiper-slide" rel="gallery" src="{{asset('storage/store/item_'.$current_product->id.'/'.$image)}}"
						 frameborder="0" allowfullscreen></iframe>
						@elseif($imagge && !$external)
						<div class="swiper-slide swipe-img" style="background-image:url({{asset('storage/store/item_'.$current_product->id.'/'.$image)}})"></div>
						@elseif($external && $imagge)
						<div class="swiper-slide swipe-img" style="background-image:url({{$image}})"></div>
						@elseif($external && !$imagge)
						@php
						$urlArr = explode("/",$image);
						$urlArrNum = count($urlArr);
						// YouTube video ID
						$youtubeVideoId = $urlArr[$urlArrNum - 1];
						// Generate youtube thumbnail url
						$thumbURL = 'https://img.youtube.com/vi/'.$youtubeVideoId.'/0.jpg';
						@endphp
						<div class="swiper-slide  swipebox-video" style="background-image:url({{$thumbURL}})"></div>
						@endif
						@php
						}
						@endphp
					</div>
				</div>
			</div>
		</div>
		@endif

		@if($current_category->parent_id != 1)
		@if(!empty($images))
		<div class="col-lg-5 col-md-5 col-sm-12">
			@else
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<img class="w-100" src="{{$current_product->thumbnail_large}}" />
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12">
						@endif
						<div class="product-buy d-xs-none d-sm-none d-lg-block d-xl-block d-none d-md-block">
							<span class="product-category">{{$current_category->name}}</span>
							<h1 class="product-title">{{$current_product->title}}</h1>
							<table>
								@if(isset($current_product->subtitle))
								<tr>
									<td class="product-subtitle">
										<h4>
											{{$current_product->subtitle}}
										</h4>
									</td>
								</tr>
								@endif
								<tr>
									@if(isset($current_product->product_model) && $current_product->product_model != "")
									<td class="product-model">
										SKU: {{$current_product->product_model}}
									</td>
									@endif
									@if(isset($current_product->product_id) && $current_product->product_id != "")
									<td class="product-id">
										ID: {{$current_product->product_id}}
									</td>
									@endif
								</tr>
							</table>
							@if(!empty($current_product->sale_price))
							<table width="100%">
								@if($current_product->currency === "USD")
								<tr>
									<td><span class="product-price mr-3">${!!number_format($current_product->sale_price,2,".",",")!!} USD</span>Was:
										<del class="text-danger">${!!number_format($current_product->price,2,".",",")!!} USD</del></td>
								</tr>
								<tr>
									<td><small><strong>${{number_format($current_product->sale_price_cad,2,".",",")}} CAD</strong><em> (based on
												today's exchange rate)</em></small></td>
								</tr>
								@else
								@endif
							</table>
							@else
							<table width="100%">
								@if($current_product->currency === "USD")
								<tr>
									<td colspan="100%"><span class="product-price">${{number_format($current_product->price,2,".",",")}} USD</span></td>
								</tr>
								<tr>
									<td><small><strong>${{number_format($current_product->price_cad,2,".",",")}} CAD</strong><em> (based on
												today's exchange rate)</em></small></td>
								</tr>
								@else
								<tr>
									<td><span class="product-price">${{number_format($current_product->price,2,".",",")}} CAD</span></td>
								</tr>
								@endif
							</table>
							@endif

							<table width="100%" class="pull-left" style="margin-top:15px;">
								<tr style="vertical-align:top">
									<td class="d-flex">
										<div class="ml-0 mr-3 my-2">Quantity:</div>
										<input type="text" size="3" required data-error="Quantity is required!" title="Quantity" class="product-qty pull-left form-control"
										 name="quantity" value="1" minlength="1" maxlength="3">
										<button type="button" class="btn btn-md btn-primary btn-add-to-cart" data-pid="{{$current_product->id}}"><i
											 class="fa fa-cart-plus mr-2" aria-hidden="true"></i><span>ADD TO CART</span></button>
									</td>
								</tr>
								<tr>
									<td style="padding-top:20px;" colspan="2">
										<h3>Share this product:</h3>
										<div class="share-page" style="margin-bottom:20px"></div>
									</td>
								</tr>
							</table>
						</div>
					</div>
					@if(!empty($images))
				</div>
				@else
			</div>
		</div>
	</div>
	@endif

	@if(isset($current_product->body) && $current_product->body != "" || isset($current_product->product_specs) &&
	$current_product->product_specs != "")
	<div class="container-fluid mt-3">
		<div class="product-body p-0 col col-lg-12 col-sm-12">
			<ul class="nav nav-tabs product-tabs" role="tablist">
				@if(isset($current_product->body) && $current_product->body !="")
				<li role="presentation" class="nav-item "><a class="nav-link active" href="#description" aria-controls="description"
					 role="tab" data-toggle="tab">Description</a></li>
				@endif
				@if(isset($current_product->product_specs) && $current_product->product_specs !="")
				<li role="presentation" class="nav-item"><a class="nav-link" href="#specs" aria-controls="specs" role="tab"
					 data-toggle="tab">Specs</a></li>
				@endif
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane product-description active  in w-100" id="description">{!!$current_product->body!!}</div>
				<div role="tabpanel" class="tab-pane product-specs w-100" id="specs">{!!$current_product->product_specs!!}</div>
			</div>
		</div>
	</div>
	@endif
	@endif
	</div>
</section>
<section class="pt-0">
	<div class="container">
		<div class="h3">Related Products</div>
		@if(!empty($related))
		<div class="swiper-container" id="relatedProducts">
			<div class="swiper-wrapper pb-3 pt-5">
				@foreach($related as $item)
				<div class="swiper-slide h-auto img-shadow text-left">
					<div class="relatedProducts-product card p-0 h-100 w-100">
						<div class="card-body p-0 flex-grow-0">
							<a  href="{{ route('store-catalog-id',$item->id)}}">
								<img class="relatedProducts-thumbnail" width="100%" height="auto" 
								src="{{ thumbnail($item->thumbnail,'cropped') }}" />
							</a>
						</div>
						<div class="d-flex flex-column flex-grow-1">
							<p class="relatedProducts-category px-3 pt-3 m-0">{{ $item->category_name }}</p>
							<div class="card-title relatedProducts-title h6 m-0 px-3 py-0 small  flex-grow-1">
								<a  href="{{ route('store-catalog-id',$item->id)}}">{{ $item->title }}</a>
							</div>
							<p class="relatedProducts-category px-3 pb-3 m-0">{{ $item->subtitle }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
		</div>
		@endif
	</div>
</section>
@stop

@push('after-scripts')
<script>
	$(function () {
		var swiper = new Swiper('#relatedProducts.swiper-container', {
			slidesPerView: 6,
			spaceBetween: 10,
			pagination: {
				el: '#relatedProducts .swiper-pagination',
				clickable: true,
			},
			grabCursor: true,
			paginationClickable: true,
			resistance : true,
			resistanceRatio : 0,
		});

		$(window).resize(function () {
			if(swiper != null){
				var ww = $(window).width()
				if (ww > 1000) swiper.params.slidesPerView = 6;
				if (ww > 560 && ww <= 1000) swiper.params.slidesPerView = 3;
				if (ww <= 560) swiper.params.slidesPerView = 2;
				swiper.reInit();
			}
		})	
		window.dispatchEvent(new Event('resize'));

		$('.product-qty').keydown(function (e) {

			// Allow: backspace, delete, tab, escape, enter and .
			if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				// Allow: Ctrl+A, Command+A
				(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
				// Allow: home, end, left, right, down, up
				(e.keyCode >= 35 && e.keyCode <= 40)) {
				// let it happen, don't do anything
				return;
			}

			if ($(this).val().length >= 3) {
				return false;
			}

			$(this).val($(this).val().replace(/^0+/, ''));

			// Ensure that it is a number and stop the keypress
			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
			}
		});

		$(".share-page").jsSocials({
			url: "{{Request::url()}}",
			text: "{{trim(preg_replace('/\s\s+/', ' ',str_replace(['“', '”','’'],"
			'",$current_product->excerpt)))}}",
			showLabel: false,
			shares: ["twitter", "facebook", "googleplus", "linkedin"]
		});
	})
</script>

<script>
	var galleryTop = new Swiper('.gallery-top', {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		spaceBetween: 10,
	});

	var galleryThumbs = new Swiper('.gallery-thumbs-vertical', {
		spaceBetween: 10,
		centeredSlides: true,
		slidesPerView: 'auto',
		touchRatio: 0.2,
		slideToClickedSlide: true,
		direction: 'vertical'
	});
	var galleryThumbs2 = new Swiper('.gallery-thumbs-horizontal', {
		spaceBetween: 10,
		centeredSlides: true,
		slidesPerView: 'auto',
		touchRatio: 0.2,
		slideToClickedSlide: true,
		direction: 'horizontal'
	});
	galleryTop.params.control = galleryThumbs;
	galleryThumbs.params.control = galleryTop;

	if ($(window).width() < 770) {
		galleryTop.params.control = galleryThumbs2;
	} else {
		galleryThumbs2.params.control = galleryTop;
	}

	$(window).on('resize', function () {
		if ($(this).width() < 770) {
			galleryTop.params.control = galleryThumbs2;
		} else {
			galleryThumbs2.params.control = galleryTop;
		}
	});

	$(function () {
		$('.product-gallery a.swipe-img').simpleLightbox();

		// $('.product-gallery a').on('change.simplelightbox', function () {
		// 	console.log($(this));
		// 	console.log($(this).index);
		// });

		galleryThumbs.on('slideChange', function () {
			galleryTop.slideTo(galleryThumbs.activeIndex);
		})
		galleryThumbs2.on('slideChange', function () {
			galleryTop.slideTo(galleryThumbs2.activeIndex);
		})

		galleryTop.on('slideChange', function () {
			galleryThumbs.slideTo(galleryTop.activeIndex);
			galleryThumbs2.slideTo(galleryTop.activeIndex);
		})
	});
</script>
@endpush
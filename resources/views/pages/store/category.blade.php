@extends('layouts.store')
@section('title')
Store - {{$current_category->name}} | CAD MicroSolutions Inc.
@stop
@php
$categories = DB::table('categories')
->where('group','=','store')
->where('parent_id','=',$current_category->id)
->where('visible','=','1')
->get();
@endphp
@section('body')
<section>
	@include('layouts.breadcrumbs')
	<div class="category-block">
		@include('layouts.store.store_catalog_list')
		<div class="category-section px-3">
			@if(isset($current_category->name))
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h1 class="category-title">{{$current_category->name}}</h1>
					<p class="category-excerpt">{{$current_category->excerpt}}</p>
				</div>
			</div>
			@endif
			@if(isset($categories) && $categories->count())
			<div class="row category-products">
				@if($categories->count() > 0)
				@foreach($categories as $p)
				@php
				$img = $p->image;
				if(filter_var($img, FILTER_VALIDATE_URL) === FALSE){
				$img = asset('/storage/'.$img);
				}
				@endphp
				@if($p->parent_id == $current_category->id)
				<div class="card p-0">
					<a class="card-img-top rounded-0" href="/store/catalog/{{$p->slug}}">
						<img class="img" src="{{$img}}">
					</a>
					<div class="p-3 d-flex flex-column flex-grow-1 w-100">
						<div class="card-block">
							<a href="/store/catalog/{{$p->slug}}">
								<div class="card-title h4" data-container="body" data-toggle="popover" data-html="true"
									data-trigger="hover" data-placement="bottom" data-content="{!!$p->name!!}">{{$p->name}}</div>
							</a>
							<p class="card-text" title="{{$p->excerpt}}">{{$p->excerpt}}</p>
						</div>
						<a href="/store/catalog/{{$p->slug}}" class="btn btn-primary">View</a>
					</div>
				</div>
				@endif
				@endforeach
				@endif
			</div>
			@endif

			@if(isset($products) && $products->count())
			<div class="row category-products">
				@foreach($products as $p)
				<div class="card p-0">
					<a class="card-img-top rounded-0" href="/store/catalog/{{$current_category->slug}}/{{$p->slug}}">
				<img class="img" src="{{thumbnail($p->thumbnail)}}">
				</a>
				<div class="p-3 d-flex flex-column flex-grow-1 w-100">
				<div class="card-block">
					<a href="/store/catalog/{{$current_category->slug}}/{{$p->slug}}">
						<h4 class="card-title" data-container="body" data-toggle="popover" data-html="true"
							data-trigger="hover" data-placement="bottom" data-content="{!!$p->title!!}">{{$p->title}}</h4>
					</a>
					@if($p->subtitle != "")
					<br />
					<span class="card-subtitle h6" data-trigger="hover" data-container="body" data-toggle="popover"
						data-html="true" data-placement="bottom" data-content="{!!$p->subtitle!!}">{{$p->subtitle}}</span>
					@endif
				</div>
				<div class="product-foot d-flex align-items-center">
					<div class="price">
						@if($p->currency === "USD")
						@if(!empty($p->sale_price))
						<del class="text-danger small clearfix">${{number_format($p->price,2,".",",")}}
							{{ $p->currency }}</del>
						<span><strong>${{number_format($p->sale_price_cad,2,".",",")}} {{ $p->currency }}</strong></span>
						@else
						<span><strong>${{$p->price}} {{ $p->currency }}</strong></span>
						<small>(<strong>${{number_format($p->price_cad,2,".",",")}} CAD</strong></small>)
						@endif
						@else
						@if(!empty($p->sale_price))
						<del class="text-danger small clearfix">${{number_format($p->price,2,".",",")}}
							{{ $p->currency }}</del>
						<span><strong>${{number_format($p->sale_price,2,".",",")}} CAD</strong></span>
						@else
						<span><strong>${{$p->price}} {{ $p->currency }}</strong></span>
						@endif
						@endif
					</div>
					<a href="/store/catalog/{{$current_category->slug}}/{{$p->slug}}" class="btn btn-primary mt-0 ml-4">View</a>
				</div>
				</div>
			</div>
			@endforeach
		</div>
		@endif
	</div>
	</div>
</section>
@stop
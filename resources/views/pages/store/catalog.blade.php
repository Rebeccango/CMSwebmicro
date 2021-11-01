@extends('layouts.store')
@section('title')
Store - {{ $current_category->name ?? "All Categories" }} | CAD MicroSolutions Inc.
@stop
@php
if(isset($current_category))
	$categories = DB::table('categories')
	->where('group','=','store')
	->where('parent_id','=',$current_category->id)
	->where('visible','=','1')
	->get();
else {
	$categories = DB::table('categories')
	->where('group','=','store')
	->where('visible','=','1')
	->get();
}
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
			<div class="d-flex">
				@foreach($categories as $p)
					@if($p->parent_id == 1)
					<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
						<div class="card">
							<a class="card-img-top" href="/store/catalog/{{$p->slug}}">
								<img class="img" src="{{asset('/storage/'.$p->image)}}">
							</a>
							<div class="card-block">
								<a href="/store/catalog/{{$p->slug}}">
									<div class="card-title" data-container="body" data-toggle="popover" data-html="true"
										data-trigger="hover" data-placement="bottom" data-content="{!!$p->name!!}">{{ $p->name }}</div>
								</a>
								<p class="card-text">{{$p->excerpt}}</p>
							</div>
							<a href="/store/catalog/{{$p->slug}}" class="btn btn-primary">View Products</a>
						</div>
					</div>
					@endif
				@endforeach
			</div>
			@endif
		</div>
	</div>
</div>
</section>
@stop
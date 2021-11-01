@extends('layouts.layout')
@section('title')
Resource Library
@stop
@section('meta')
<link rel="canonical" href="{{route('resources.index')}}" />
@stop
@section('description')CAD MicroSolutions Resource Library @stop
@push('before-styles')
<style>
	.tags {
		max-height: 1.5em;
		overflow: hidden;
		max-width: 90%;
	}
</style>
@endpush

@section('body')
<section
	class="d-flex justify-content-center align-items-center parallax-window parallax-section trans-header-window parallax"
	style="min-height:300px; background-image:url({{asset('images/pages/resources/resources_hero.jpg')}});">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>Resource Centre</h1>
					<div class="section-title-divider"></div>
				</div>
				<div>
					<p class="parallax-section__description">Our resource centre can help you find <br />documents, videos,
						tutorials and product guides</p>
				</div>
				{{-- <div>
					@include('layouts.generic_contact_buttons')
				</div> --}}
			</div>
		</div>
	</div>
</section>
@php
$filter = isset($_GET['filter']) ? $_GET['filter'] : null;
$layout = isset($_GET['layout']) ? $_GET['layout'] : null;
$search = isset($_GET['search-filter']) ? $_GET['search-filter'] : "";
@endphp
<section class="p-0">
	<div class="row d-flex">
		<div id="resource-filters" class="col-xl-3 col-lg-4 col-md-4 col-xs-12 px-0">
			<div
				class="h-100 p-0 px-3 w-100 d-flex align-items-center flex-column justify-content-start jumbotron jumbotron-fluid p-4 mb-0">
				<h2 class="h1 main-title">Filters</h2>
				<div
					class="d-flex justify-content-center flex-wrap align-items-center card flex-row card-block p-3 shadow-sm py-2 rounded">
					<form method="GET" id="filters" action="{{route('resources.index')}}">
						<label for="search">Filter by Keywords</label>
						<div class="form-group d-inline-block mb-4">
							<input type="search" name="search" class="form-control" placeholder="Search..."
								value="{{ Request::get('search') }}">
						</div>
						<label for="product">Filter by Product Name</label>
						<div class="form-group d-inline-block mb-4">
							<select class="filter form-control" name="product" id="product">
								<option default selected></option>
								@foreach($products as $product)
								<option value="{{ $product->id }}" @if(Request::get('product')==$product->id) selected
									@endif>{{ $product->name }}
								</option>
								@endforeach
							</select>
						</div>
						<label for="category">Filter by Category</label>
						<div class="form-group d-inline-block mb-4">
							<select class="filter form-control" name="category" id="category">
								<option default selected></option>
								@foreach($categories as $category)
								<option value="{{ $category->id }}" @if(Request::get('category')==$category->id) selected
									@endif>{{ $category->name }}
								</option>
								@endforeach
							</select>
						</div>
						<label for="type">Filter by File Type</label>
						<div class="form-group d-inline-block mb-4">
							<select class="filter form-control" name="type" id="type">
								<option default selected></option>
								@foreach($resource_types as $i=>$resource_type)
								<option class="filter" {{ Request::get('type') == $resource_type->id ? 'selected' : ''}}
									value="{{ $resource_type->id }}"><a href="">{{ $resource_type->name }}</a>
								</option>
								@endforeach
							</select>
						</div>
						<div>
							<input type="submit" class="btn btn-sm btn-primary btn-rounded" value="Apply Filters">

							<input type='button' class="btn btn-sm btn-secondary btn-rounded ml-2" value='Clear Filters' name='reset'
								onclick="return clearForm(this.form);">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="resource-items" class="col-xl-9 col-lg-8 col-md-8 col-xs-12 pb-5">
			<div id="resource-cards" class="py-4">
				<div class="px-3 pb-4 d-flex align-items-center row">
					<div class="w-100 col-lg-6 col-md-6 col-xs-12">
						<h2 class="h1 main-title">Resources</h2>
						<em>Found {{$resources->total()}} Resources</em>
						@if(!empty(Request::get('type')) || !empty(Request::get('product')) || !empty(Request::get('category')) ||
						!empty(Request::get('search')))
						<input type='button' class="btn btn-sm btn-secondary btn-rounded ml-2" value='Clear Filters' name='reset'
							onclick="return clearForm(document.getElementById('filters'));">
						@endif
					</div>
					<div
						class="d-flex justify-content-lg-end justify-content-md-start pt-sm-3 pt-lg-0 align-items-center w-100 col-lg-6 col-md-6 col-xs-12">
						{{ $resources->links()}}
					</div>
				</div>
				@if($resources->total() == 0)
				<div class="jumbotron mr-3 py-4">
					<h1 class="display-4">No Resources Found!</h1>
					<p class="lead">Sorry, we could not find the resource you are looking for!</p>
					<hr class="my-4">
					<p>Please try using different filter parameters, or simplify remove some filters.</p>
					<p class="lead">
						<a class="btn btn-primary btn-lg" href="#" role="button"
							onclick="return clearForm(document.getElementById('filters'));">Clear Filters</a>
					</p>
				</div>
				@endif
				<div class="row display-flex px-3">
					@foreach($resources->items() as $i=>$resource)
					@php $resource = (object)$resource;
					@endphp
					{{-- @for($i=0; $i < 10; $i++) --}}
					<div class="col-xl-3 col-lg-6 col-sm-6 col-12 p-2">
						<div class="card card card-body d-flex flex-column h-100 w-100 shadow-sm p-0 overflow-hidden"
							style="border-radius:1em;" data-container="body" data-toggle="popover" data-trigger="hover"
							data-html="true" data-placement="auto"
							data-content="<div class='m-2'><h5>{{ $resource->name }}</h5><p class='m-0'>{{\Illuminate\Support\Str::words(strip_tags($resource->description), $limit = 50, $end = '...') }}</p></div>">
							<div class="thumbnail embed-responsive embed-responsive-1by1" style="height:200px">
								<div class="embed-responsive-item"
									style="background-image:url({!! thumbnail($resource->thumbnail) !!}); background-size:contain; background-position:center; background-repeat:no-repeat; background-color:#f2f2f2">
									<a href="{{ Request::fullUrlWithQuery(['search' => '', 'type'=>$resource->resource_type, 'category'=>'','group'=>'', 'page'=>'']) }}"
										class="badge badge-sm badge-light btn-rounded float-right m-2 shadow-sm py-2 px-3
						d-absolute">{{ App\ResourceType::where('id',$resource->resource_type)->get()[0]["name"] }}</a>
								</div>
							</div>
							<div class="d-flex justify-content-center align-items-start flex-column flex-fill flex-column p-3">
								<a href="{{ $resource->publicURL }}" class="d-flex flex-column w-100 align-items-start resource-name"
									target="_blank">
									{{ \Illuminate\Support\Str::limit($resource->name, $limit = 75, $end = '...')}}
								</a>
								<div class="tags">
									@if($resource->all_meta_tags)
									@foreach($resource->all_meta_tags as $tag)
									<a href="{{ Request::fullUrlWithQuery(['search' => '', 'type'=>'', 'category'=>'','group'=>'','tags'=>$tag['id'], 'page'=>'']) }}"
										class="d-inline badge badge-sm badge-light btn-rounded px-2">{{ $tag['name'] }}</a>
									@endforeach
									@endif
								</div>

							</div>
							<div class="controls d-flex w-100 mt-3">
								<a href="{{ route('resources.resource', ['id'=> $resource->id, 'slug' => $resource->slug]) }}"
									class="btn btn-light w-100 rounded-0">{{ $resource->button ? $resource->button : "View Resource" }}</a>
							</div>
						</div>
					</div>
					{{-- @endfor --}}
					@endforeach
				</div>
			</div>
			<div class="d-flex justify-content-center align-items-center">
				{{ $resources->links()}}
			</div>
		</div>
</section>
@endsection

@push('after-scripts')
<script>
	function clearForm(form) {
		console.log(form);
		var $f = $(form);
		var $f = $f.find(':input').not(':button, :submit, :reset, :hidden');
		$f.val('').attr('value', '').removeAttr('checked').removeAttr('selected');
		$(form).submit();
	}
	$("select[name='type']").select2({
		allowClear: true,
		width: '100%',
		minimumResultsForSearch: 5,
		placeholder: 'Type'
	});
	$("select[name='category']").select2({
		allowClear: true,
		width: '100%',
		minimumResultsForSearch: 5,
		placeholder: 'Category'
	});
	$("select[name='product']").select2({
		allowClear: true,
		width: '100%',
		minimumResultsForSearch: 5,
		placeholder: 'Product'
	});
</script>
@endpush
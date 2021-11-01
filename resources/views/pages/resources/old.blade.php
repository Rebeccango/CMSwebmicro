@extends('layouts.layout')
@section('title')
Resource Library
@stop
@section('meta')
<link rel="canonical" href="{{route('resources.index')}}" />
@stop
@section('description')CAD MicroSolutions Resource Library @stop
@push('after-styles')
<link rel="stylesheet" href="{{ asset('css/content-filter.css') }}">
@endpush
@section('body')
@php
$filter = isset($_GET['filter']) ? $_GET['filter'] : null;
$layout = isset($_GET['layout']) ? $_GET['layout'] : null;
$search = isset($_GET['search-filter']) ? $_GET['search-filter'] : "";
@endphp

<div class="">
	<section id="resourceLibrary">
		<main class="cd-main-content is-fixed">
			<div class="cd-tab-filter-wrapper">
				<div class="cd-tab-filter">
					<ul class="cd-filters">
						<li class="placeholder">
							<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
						</li>
						<li class="filter"><a class="{{ $filter == "all" ? 'selected' : ''}}" href="" data-type="all"
								data-filter=".resourcetype-all" data-param="filter" data-value="all">All</a></li>
						{{-- <li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Color 1</a></li>
				<li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">Color 2</a></li> --}}

						@foreach($resource_types as $i=>$resource_type)
						<li class="filter" data-filter=".resourcetype-{{ $resource_type->id }}"><a
								class="{{ $filter == $resource_type->slug ? 'selected' : ''}}" href="" data-param="filter"
								data-value="{{ $resource_type->slug }}"
								data-type="resourcetype-{{ $resource_type->id }}">{{ $resource_type->name }}</a>
						</li>
						@endforeach

					</ul> <!-- cd-filters -->
				</div> <!-- cd-tab-filter -->
				<a href="#" class="cd-toggle-grid {{ $layout != null && $layout == "rows" ? "toggled" : "" }}"></a>
			</div> <!-- cd-tab-filter-wrapper -->

			<section class="cd-gallery {{ $layout != null && $layout == "rows" ? "view-rows" : "" }}">
				<ul>
					@foreach($resources as $i=>$resource)
					@php
					$href = "";
					if($resource->url){
					$href = $resource->url;
					}else{
					if($file = json_decode(trim($resource->file),true)){
					$href = asset("storage/". $file[0]['download_link']);
					}
					}
					@endphp
					<li class="mix color-1 check1 radio2
				category-{{ $resource->category }} resourcetype-{{ $resource->resource_type }}"><a href="{{ $href }}"
							data-container="body" data-toggle="popover" data-trigger="hover" data-html="true" data-placement="auto"
							data-content="<span class='h4'>{!! \Illuminate\Support\Str::words(strip_tags($resource->description), $limit = 50, $end = '...') !!}</span>"
							target="_blank"><img src="{{ thumbnail($resource->thumbnail) }}" alt="Image {{ $i }}">
							<div class="mix-info">
								{{ $resource->name }}
							</div>
							<div class="mix-badge">{{ App\ResourceType::find($resource->resource_type)->name }}</div>
						</a>
					</li>
					@endforeach

					{{-- <li class="mix color-1 check1 radio2 option3"><img src="img/img-1.jpg" alt="Image 1"></li>
			<li class="mix color-2 check2 radio2 option2"><img src="img/img-2.jpg" alt="Image 2"></li>
			<li class="mix color-1 check3 radio3 option1"><img src="img/img-3.jpg" alt="Image 3"></li>
			<li class="mix color-1 check3 radio2 option4"><img src="img/img-4.jpg" alt="Image 4"></li>
			<li class="mix color-1 check1 radio3 option2"><img src="img/img-5.jpg" alt="Image 5"></li>
			<li class="mix color-2 check2 radio3 option3"><img src="img/img-6.jpg" alt="Image 6"></li>
			<li class="mix color-2 check2 radio2 option1"><img src="img/img-7.jpg" alt="Image 7"></li>
			<li class="mix color-1 check1 radio3 option4"><img src="img/img-8.jpg" alt="Image 8"></li>
			<li class="mix color-2 check1 radio2 option3"><img src="img/img-9.jpg" alt="Image 9"></li>
			<li class="mix color-1 check3 radio2 option4"><img src="img/img-10.jpg" alt="Image 10"></li>
			<li class="mix color-1 check3 radio3 option2"><img src="img/img-11.jpg" alt="Image 11"></li>
			<li class="mix color-2 check1 radio3 option1"><img src="img/img-12.jpg" alt="Image 12"></li> --}}
					<li class="gap"></li>
					<li class="gap"></li>
					<li class="gap"></li>
					<li class="gap"></li>
					<li class="gap"></li>
					<li class="gap"></li>
				</ul>
				<div class="cd-fail-message">No results found</div>
			</section> <!-- cd-gallery -->

			<div class="cd-filter">
				<form>
					<div class="cd-filter-block">
						<h4>Search Filter</h4>

						<div class="cd-filter-content">
							<input type="search" name="search" placeholder="Try color-1..." value="{{ $search }}">
						</div> <!-- cd-filter-content -->
					</div> <!-- cd-filter-block -->

					{{-- <div class="cd-filter-block">
				<h4>Check boxes</h4>

				<ul class="cd-filter-content cd-filters list">
					<li>
						<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
						<label class="checkbox-label" for="checkbox1">Option 1</label>
					</li>

					<li>
						<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
						<label class="checkbox-label" for="checkbox2">Option 2</label>
					</li>

					<li>
						<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
						<label class="checkbox-label" for="checkbox3">Option 3</label>
					</li>
				</ul> <!-- cd-filter-content -->
			</div> <!-- cd-filter-block --> --}}

					<div class="cd-filter-block">
						<h4>Category</h4>

						<div class="cd-filter-content">
							<div class="cd-select cd-filters">
								<select class="filter" name="category" id="category">
									<option value="">Choose an option</option>
									@php
									$categories = App\ResourceCategory::where('active',1)->orderBy('order','asc')->get();
									@endphp
									@foreach($categories as $category)
									<option value=".category-{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
							</div> <!-- cd-select -->
						</div> <!-- cd-filter-content -->
					</div> <!-- cd-filter-block -->

					{{-- <div class="cd-filter-block">
				<h4>Radio buttons</h4>

				<ul class="cd-filter-content cd-filters list">
					<li>
						<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
						<label class="radio-label" for="radio1">All</label>
					</li>

					<li>
						<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
						<label class="radio-label" for="radio2">Choice 2</label>
					</li>

					<li>
						<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
						<label class="radio-label" for="radio3">Choice 3</label>
					</li>
				</ul> <!-- cd-filter-content -->
			</div> <!-- cd-filter-block --> --}}
				</form>

				<a href="#0" class="cd-close">Close</a>
			</div> <!-- cd-filter -->

			<a href="#0" class="cd-filter-trigger">Filters</a>
		</main> <!-- cd-main-content -->
	</section>
</div>
@endsection

@push('after-scripts')
<script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('js/content-filter.js') }}"></script> <!-- Resource jQuery -->
@endpush
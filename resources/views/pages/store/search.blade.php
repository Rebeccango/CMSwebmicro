@extends('layouts.store') 
@section('title') Search Results - Store 
@stop 
@section('body')
<section>
	@include('layouts.breadcrumbs')
	<div class="category-block">
	@include('layouts.store.store_catalog_list')
		<div class="category-section px-3">
			<div>
				<h1 class="main-title" style="margin-top:0;">SEARCH RESULTS</h1>
				<h3>Found <strong>{{$results->total()}}</strong> results for : <em>"{{$query}}"</em></h3>
				<hr /> 
				@if(isset($results) && $results->links() != "")
				<div class="control-section">
					<nav aria-label="Page navigation" class="custom-pagination">
						{{ $results->links() }}
						<span class="pagination-info">Showing results {{ ($results->currentPage() * $results->perPage()) - $results->perPage()}} to {{ min(($results->currentPage() * $results->perPage()) - $results->perPage() + $results->perPage(), $results->total()) }} of {{ $results->total() }}</span>
					</nav>
				</div>
				@endif
			</div>
			<div class="row category-products">
				@if (isset($results)) @if($results->count() > 0) @foreach($results as $p) @if($p->status == "PUBLISHED") @php $cat=DB::table('categories')->where('id','=',			$p->category_id)->pluck('slug')[0];
				@endphp
				<div class="card p-0">
					<a class="card-img-top rounded-0" href="/store/catalog/{{$cat}}/{{$p->slug}}">
					{{-- <div class="img" style="background-image:url({{thumbnail($p->thumbnail)}})"></div> --}}
					<img class="img" src="{{thumbnail($p->thumbnail)}}">
					</a>
				<div class="p-3 d-flex flex-column flex-grow-1 w-100">
					<div class="card-block">
						<a href="/store/catalog/{{$cat}}/{{$p->slug}}">
							<h4 class="card-title"  data-container="body" data-toggle="popover" data-html="true" data-trigger="hover" data-placement="bottom" data-content="{!!$p->title!!}">{{$p->title}}</h4>
						</a> @if($p->subtitle != "")
						<br/>
						<span class="card-subtitle h6" data-trigger="hover" data-container="body" data-toggle="popover" data-html="true" data-placement="bottom"
						 data-content="{!!$p->subtitle!!}">{{$p->subtitle}}</span> @endif {{--
						<p class="card-text" data-container="body" data-toggle="popover" data-html="true" data-trigger="hover" data-placement="bottom"
						 data-content="{{$p->excerpt}}">{{$p->excerpt}}</p> --}}
					</div>
					<div class="product-foot d-flex align-items-center">
						<div class="price">
							@if($p->currency === "USD") @if(!empty($p->sale_price))
							<del class="text-danger small clearfix">${{number_format($p->price,2,".",",")}} {{ $p->currency }}</del>
							<span><strong>${{number_format($p->sale_price_cad,2,".",",")}} {{ $p->currency }}</strong></span> @else
							<span><strong>${{$p->price}} {{ $p->currency }}</strong></span>
							<small>(<strong>${{number_format($p->price_cad,2,".",",")}} CAD</strong></small>) @endif @else @if(!empty($p->sale_price))
							<del class="text-danger small clearfix">${{number_format($p->price,2,".",",")}} {{ $p->currency }}</del>
							<span><strong>${{number_format($p->sale_price,2,".",",")}} CAD</strong></span> @else
							<span><strong>${{$p->price}} {{ $p->currency }}</strong></span> @endif @endif
						</div>
						<a href="/store/catalog/{{$cat}}/{{$p->slug}}" class="btn btn-primary mt-0 ml-4">View</a>
					</div>
				</div>
				</div>

				@endif @endforeach @endif @endif
			</div>
			@if(isset($results) && $results->links() != "")
				<div class="control-section">
					<nav aria-label="Page navigation" class="custom-pagination">
						{{ $results->links() }}
						<span class="pagination-info">Showing results {{ ($results->currentPage() * $results->perPage()) - $results->perPage()}} to {{ min(($results->currentPage() * $results->perPage()) - $results->perPage() + $results->perPage(), $results->total()) }} of {{ $results->total() }}</span>
					</nav>
				</div>
				@endif
		</div>
	</div>
</section>
@push('after-scripts')
<script>
	$(function(){
				$('#category-list .card').matchHeight();
			});
</script>

@endpush 
@stop
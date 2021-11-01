<div class="">
	@php
	$baseurl = route('store-catalog') . '/';

	@endphp
<nav class="breadcrumb">
	<a class="breadcrumb-item" href="{{ route('store') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
	@if(isset($default))
		@foreach($default as $bread)
			<a class="breadcrumb-item" href="{{ $bread['url'] }}">{{ $bread['name'] }}</a> test
		@endforeach
	@endif
{{-- <a class="breadcrumb-item" href="/store">Store</a> --}}
@if(isset($current_category))
	{{-- <a class="breadcrumb-item" href="/store/catalog">Catalog</a> --}}
		@php
			$breads = array();
			$id = $current_category->parent_id;
			while($id != 1){
				$category =  DB::table('categories')
						->where('group','=','store')
						->where('id','=',$id)
						->where('visible','=','1')
						->first();
				$breads[] = $category;
				if($category){
					$id = $category->parent_id;
				}else{
					break;
				}

			}
		@endphp

	@php
	if(isset($breads)){
		$i = count($breads) -1;
		while($i >= 0) {
			@endphp
			<a class="breadcrumb-item" href="/store/catalog/{{$breads[$i]->slug}}">{{$breads[$i]->name}}</a>
			@php
			$i--;
		}
	}
	@endphp


	@if(isset($current_product))
		<a class="breadcrumb-item" href="{{$baseurl}}{{$current_category->slug}}">{{$current_category->name}}</a>
		<a class="breadcrumb-item active" href="{{$baseurl}}{{$current_category->slug}}/{{$current_product->slug}}">{{$current_product->title}}</a>
	@else
		<a class="breadcrumb-item active" href="{{$baseurl}}{{$current_category->slug}}">{{$current_category->name}}</a>
	@endif
@else
	<a class="breadcrumb-item active" href="{{$baseurl}}">Catalog</a>
@endif
</nav>
</div>

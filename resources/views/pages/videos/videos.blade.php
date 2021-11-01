@extends('layouts.layout')
@section('title')
  All Videos @if(isset($categories)) - {{ $categories[0]->name }} @endif
@stop
@section('body')
	<section>
		<div class="container-fluid">
	    <div class="content">
	      <div class="section-title center-block mx-auto">
	        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Videos</h1>
	        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
	      </div>
	    </div>
      <div class="content">
			<div class="videos-filter row">
        <div class="col-lg-6">
          <div class="form-group col-lg-5">
            <form action="" method="GET" class="form-inline">
				      <input type="text" lass="form-control" id="search" name="search" placeholder="search" />
            </form>
          </div>
          <div class="form-group col-lg-4">
          @php
            $allCategories = DB::table('categories')->where('group','=','videos')->where('visible','=',1)->orderBy('name','asc')->get();
            $curId = 1;
          @endphp
          <label for="category_filter"></label>
          <select name="category_filter" class="select2">
            <option value="all">All</option>
            @foreach($allCategories as $cat)
              @if($curId == $cat->parent_id)
                <optgroup label="{{$cat->name}}">
                  <option>{{$cat->name}}</option>
              @else
                <option>{{$cat->name}}</option>
              </optgroup>
              @endif
              @php
                $curId = $cat->parent_id;
              @endphp
            @endforeach
          </select>
          </div>
          <script>
          $(function(){
              $('.select2').select2();
          })
          </script>
          <div class="col-lg-6">
            <nav aria-label="Page navigation" class="custom-pagination pull-right text-right">
              {{-- @include('pagination.default', ['paginator' => $videos]) --}}
              {{ $videos->links() }}
            </nav>
          </div>
        </div>
			</div>
			<div class="videos-area">
      {{ count($videos) }}
			@if(count($videos) > 0)
				@foreach($videos as $video)
					<div class="video-block col-lg-3 col-md-4 col-sm-6 col-xs-12" style="padding:0">
						<div class="video-thumbnail">
							@php
								if(isset($video->image) && $video->image != ""){
									$thumbnail = asset('/storage/'.$video->image);
								}else{
									$url = urldecode(rawurldecode($video->video_url));
	 preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
									$thumbnail = "https://img.youtube.com/vi/".$matches[1]."/0.jpg";
								}
							@endphp
							<a href="{{route('video',[$video->id, $video->slug])}}"><img  style="width:100%" src="{{ $thumbnail }}" /></a>
						</div>
						<a class="video-title" href="{{route('video',[$video->id, $video->slug])}}">{{$video->title}}</a>
						@php
							$vcat = DB::table('categories')->where('id','=',$video->category_id)->first();
						@endphp
						@if($vcat)
							<a class="video-category" href="{{route('videos-category',[$vcat->id,$vcat->slug])}}">{{$vcat->name}}</a>
						@endif
						<div class="video-body">
							{{$video->excerpt}}
						</div>
					</div>
				@endforeach

			@else
			{{'	NO VIDEOS IN CATEGORY'}}
			@endif
			</div>
			<hr />
			@if(isset($categories) && count($categories) > 0)
				@foreach($categories as $cat)
					{{$cat->name}} <br />
				@endforeach
			@else
				{{'NO CATS'}}
			@endif
      <div class="control-section">
        <nav aria-label="Page navigation" class="custom-pagination">
          {{ $videos->links() }}
        </nav>
      </div>
		</div>
		</div>
	</section>

	<script>
		$('.videos-area .video-body').succinct({size: 150});
		$('.videos-area .video-block').matchHeight();
	</script>
@endsection

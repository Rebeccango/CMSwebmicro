@extends('layouts.layout')
@section('title')
  All Videos @if(isset($categories)) - {{ $categories[0]->name }} @endif
@stop
@section('body')
  <div class="container-fluid">
    <div class="content">
      @include('layouts.breadcrumbs',array('default'=>array(
        ['url'=> route('videos'),
        'name' => 'Videos' ]
      ),
      'baseurl'=> '/videos/category/',
      'group'=>'video',
      'item'=>$video
    ))
      @if($video->video_url)
        @php
        $url = urldecode(rawurldecode($video->video_url));
          preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
        @endphp
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-1 col-center">
          <iframe width="100%" style="min-height:320px" src="https://www.youtube.com/embed/{{ $matches[1] }}" frameborder="0" allowfullscreen></iframe>
          <div class="videoCaption" style="margin-top: -10px;">Video: {{$video->title}}</div>
        </div>
      @endif
    </div>
  </div>
  @if(isset($related))

  <h3>Related Videos:</h3>

  <div class="videos-area">
    @foreach($related as $video)
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
  </div>
@endif
@endsection

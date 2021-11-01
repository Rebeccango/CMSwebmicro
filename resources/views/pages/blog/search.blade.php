@extends('layouts.layout')
@section('title')Search blogs for: {{$query}}@stop
@section('body')
<section>
<div class="container" >
  <h1 class="main-title" style="margin-top: 0px; visibility: visible;" data-wow-delay="0.2s">Search Results</span></h1>
  <div style="">Found <strong>{{$results->total()}}</strong> Results for:<em>"{{$query}}"</em></div>
  <br />
  @if($results->links() != "")
  <div class="control-section">
    <nav aria-label="Page navigation" class="custom-pagination">
      {{ $results->links() }}
    </nav>
  </div>
  @endif
  <section id="blog" class="blog-list blog" style="padding:20px 0">
    @foreach ($results as $post)
      <div class="blog-post card">
        <div class="card-block">
        <div class="row no-gutters align-items-top">
        <div class="col-lg-12">
          <a class="blog-title" href="{{url('blog/'.$post->id.'/'.$post->slug)}}"><h2>{{ $post->title }}</h2></a>
        </div>
        <div class="blog-list-body @if($post->image =="") col-lg-12 @else col-lg-5 @endif">
          <span class="blog-author"><strong>Author:</strong> {{DB::table('users')->where('id', $post->author_id)->value('name')}}</span>
          @if($post->category_id !="")
          @php $category = DB::table('categories')->where('id','=',$post->category_id)->first(); @endphp
          <span class="blog-category" style="font-size:13px;">
          <strong>Category:</strong> <a href="{{url('blog/category/'.$category->slug)}}">{{$category->name}}</a></span>@endif
          <span class="blog-date"><strong>Posted On:</strong> {{$post->created_at}}</span>
          @if($post->updated_at !="")<span class="blog-date"><strong>Updated On:</strong> {{$post->updated_at}}</span>@endif
          <hr>
          <p class="blog-excerpt">
            {{$post->excerpt}}
          </p>
        </div>
        @if($post->image !="")
        <div class="col-lg-7">
        <?php
            $img = asset('storage/'.$post->image);
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            $img = str_replace(".".$ext, "", $img);
            //$imageMedium = $img . '-medium.' . $ext;
            $imageMedium = $img . '.'. $ext;
        ?>
        <a href="{{url('blog/'.$post->id.'/'.$post->slug)}}"><img src="{{$imageMedium}}" style="width:100%" /></a>
      </div>
    @endif
    </div>
  </div>
      @if($post->meta_keywords !="")
      <div class="blog-tags">Tags:
        <ul>
          @foreach (explode(',', $post->meta_keywords) as $keyword)
            <?php $keyword= trim($keyword) ?>
            @if($keyword != "")
              <a href="{{route('blog-search',$keyword)}}"><li>{{ $keyword }}</li></a>
            @endif
          @endforeach
        </ul>
      </div>
      @endif
    </div>
    @endforeach
  </section>
  @if($results->links() !="")
  <div class="control-section">
    <nav aria-label="Page navigation" class="custom-pagination">
      {{ $results->links() }}
    </nav>
  </div>
  @endif
</div>
</section
@stop

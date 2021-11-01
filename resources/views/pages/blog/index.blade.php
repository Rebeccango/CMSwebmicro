@extends('layouts.layout')
@section('title')Blog @stop
@push('meta-tags')
  <link rel="canonical" href="{{route('blog')}}" />
@endpush
@section('body')
<section>
  <div class="container">
    <div class="row pb-5">
      <div class="col col-lg-8">
        <div class="section-title center-block mx-auto mb-4">
          <h1>Latest Blog Posts</h1>
          <div class="section-title-divider"></div>
        </div>
        <div class="control-section">
          <nav aria-label="Page navigation" class="custom-pagination">
            {{ $posts->links() }}
          </nav>
        </div>
        <section id="blog" class="blog-list blog" style="padding:20px 0">
          @foreach ($posts as $post)
          <div class="blog-post card">
            <div class="card-block">
              <div class="row no-gutters align-items-top">
                <div class="col-lg-12">
                  <a class="blog-title" href="{{url('blog/'.$post->id.'/'.$post->slug)}}">
                    <h2>{{ $post->title }}</h2>
                  </a>
                </div>
                <div class="blog-list-body @if($post->image =="") col-lg-12 @else col-lg-5 @endif">
                  <span class="blog-author"><strong>Author:</strong>
                    {{DB::table('users')->where('id', $post->author_id)->value('name')}}</span>
                  @if($post->category_id !="")
                  @php $category = DB::table('categories')->where('id','=',$post->category_id)->first(); @endphp
                  <span class="blog-category" style="font-size:13px;">
                    <strong>Category:</strong> <a
                      href="{{url('blog/category/'.$category->slug)}}">{{$category->name}}</a></span>@endif
                  <span class="blog-date"><strong>Posted On:</strong> {{$post->created_at}}</span>
                  @if($post->updated_at !="")<span class="blog-date"><strong>Updated On:</strong>
                    {{$post->updated_at}}</span>@endif
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
                  <a href="{{url('blog/'.$post->id.'/'.$post->slug)}}"><img src="{{$imageMedium}}"
                      style="width:100%" /></a>
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
                <a href="{{route('blog-search',$keyword)}}">
                  <li>{{ $keyword }}</li>
                </a>
                @endif
                @endforeach
              </ul>
            </div>
            @endif
          </div>
          @endforeach
        </section>
        <div class="control-section">
          <nav aria-label="Page navigation" class="custom-pagination">
            {{ $posts->links() }}
          </nav>
        </div>
      </div>
      <div class="col-lg-4">
        {{ Form::open(['route' => 'blog-searcher',  'method' => 'POST', 'data-toggle'=>'validator', 'role'=>'form','novalidate'=>'true']) }}
        <div class="form-group required">
          <input type="text" class="form-control" data-minlength="3" id="search-input" name="search"
            data-error="Missing search query!" required placeholder="Search..." autocomplete="off"
            value="{{isset($query) ? $query : ''}}">
          <div class="help-block"></div>
        </div>

        {{ Form::close() }}
        <hr />
        <div class="social-widget reverse">
          <div class="social-icons">
            <a href="https://www.facebook.com/dayan.balevski"><i class="fab fa-facebook-f fa-lg m-x-auto"
                aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/company/cad-microsolutions-inc-/?originalSubdomain=ca"><i
                class="fab fa-linkedin-in fa-lg m-x-auto" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/u/0/+cadmicro"><i class="fab fa-google-plus-g fa-lg m-x-auto"
                aria-hidden="true"></i></a>
            <a href="https://plus.google.com/u/0/+cadmicro" style="margin-left:8px;"><i
                class="fab fa-youtube fa-lg m-x-auto" aria-hidden="true"></i></a>
          </div>
        </div>
        <hr />
        <div class="textwidget"><b>CAD MicroSolutions, Inc.</b> <br>
          30 International Blvd., Unit #1 <br>
          Etobicoke, ON - M9W 1A2<br>
          <br>
          <b>Toll-free:</b> 1 (888) 401-5885<br>
          <b>Phone:</b> (416) 213-0533<br>
          <b>Fax:</b> (416) 213-0538<br>
          <br>
          <a href="sales@cadmicro.com">sales@cadmicro.com</a><br>
          <a href="support@cadmicro.com">support@cadmicro.com</a> <br>
          <a href="careers@cadmicro.com">careers@cadmicro.com</a><br>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
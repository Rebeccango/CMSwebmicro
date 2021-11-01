@extends('layouts.layout')
@section('title'){{$post->title}}@stop
@push('meta-tags')
<link rel="canonical" href="{{$post->canonical_link ?? route('blog-post', [$postid, $post->slug])}}" />
{{-- Social Metas--}}
<meta name="twitter:card" content="{{$post->excerpt}}" />
<meta name="twitter:site" content="@CAD_Micro" />
<meta name="twitter:creator" content="@CAD_Micro" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:title" content="{{$post->title}}" />
<meta property="og:description" content="{{$post->meta_description}}" />
<meta property="og:image" content="{{asset('storage/public/'.$post->image)}}" />
<meta itemscope itemtype="https://schema.org/Article" />
<meta itemprop="headline" content="{{$post->title}}" />
<meta itemprop="description" content="{{$post->meta_description}}" />
<meta itemprop="image" content="{{asset('storage/public/'.$post->image)}}" />
@endpush

@push('after-scripts')
<script type="text/javascript" src="{{asset('js/commentLikes.js')}}"></script>
<script>
  $(function(){
  $(".share-page").jsSocials({
    url: "{{Request::url()}}",
     text: "{{trim(preg_replace('/\s\s+/', ' ',str_replace(['“', '”','’'],"'",$post->excerpt)))}}",
     showLabel: false,
    shares: ["twitter", "facebook", "googleplus", "linkedin"]
  });
});

// $(function(){
//   $(".comment-card").commentLikes({
//     token : '{!! csrf_token() !!}',
//     @if(Cookie::get("uniqueID") !== null)
//       uniqueID : '{!! Cookie::get("uniqueID") !!}'
//     @endif
//   });
//   $(".comment-card .comment-body").shorten({
//   	"showChars" : 540,
//   	"moreText"	: "See More",
//   });
// })
</script>
@endpush
@section('body')
<div class="container" >
  <section class="blog-section">
    <div class="row" itemscope="" itemtype="https://schema.org/BlogPosting">
      <div class="col-lg-9">
        <h1 class="main-title" style="margin-top: 0px; visibility: visible;" data-wow-delay="0.2s" itemprop="name headline">{{$post->title}}</span></h1>
        <?php
      if($post->image != "") {
        $img = asset('storage/'.$post->image);
        $imageMedium = $img;
    ?>
        <img src="{{$imageMedium}}" style="width:100%;" itemprop="image" />
        <?php } ?>
        <div class="blog-body" itemprop="articleBody">
          {!!$post->body!!}
        </div>
        <hr />
      </div>
      <div class="col-lg-3">
        <h3>Share this article:</h3>
        <div class="share-page" style="margin-bottom:20px"></div>
        <div class="card rounded-0 img-shadow">
          <div class="card-block p-3" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
            <h4 class="card-title text-center">Author: <span itemprop="name">{{DB::table('users')->where('id',
                $post->author_id)->value('name')}}</span></h4>
            <img class="img-circle rounded-circle " width="100px" height="100px" style="margin:0 auto; display: block;"
              src="{{asset('storage/'.DB::table('users')->where('id', $post->author_id)->value('avatar'))}}" alt="Card image cap">
          </div>
          <ul class="list-group list-group-flush">
            @php $created_at = (new DateTime($post->created_at))->format("F d, Y \\a\\t h:m a"); @endphp
            @php $updated_at = (new DateTime($post->updated_at))->format("F d, Y \\a\\t h:m a"); @endphp
            @if($post->category_id !="")
            <li class="list-group-item">
              @php $category = DB::table('categories')->where('id','=',$post->category_id)->first(); @endphp
              <span class="blog-category" style="font-size:13px;">
                <strong>Category:</strong> <a href="{{url('blog/category/'.$category->slug)}}">{{$category->name}}</a></span></li>@endif
            <li class="list-group-item"><span class="blog-date"><strong>Posted On: </strong><time datetime="{{$created_at}}"
                  itemprop="datePublished">{{$created_at}}</time></span></li>
            @if($post->updated_at !="")<li class="list-group-item"><span class="blog-date"><strong>Updated On:</strong>
                <time datetime="{{$updated_at}}" itemprop="dateModified">{{$updated_at}}</time></span>@endif
              {{-- <li class="list-group-item"><span class="blog-email"><strong>Email:</strong> <span>{{DB::table('users')->where('id',
                  $post->author_id)->value('email')}}</span></span></li> --}}
          </ul>
          <ul class="list-group list-group-flush">
            @if($post->clickd_form != "")
            <li class="list-group-item p-0"><button class="btn btn-primary calendar-event-btn mx-auto p-3 rounded-0 d-inline-block w-100"
                data-toggle="modal" data-target="#myModal"> {!! $post->clickd_form_text !!} </button></li>
            @endif
            @if($post->btn_link != "")
            <li class="list-group-item p-0"><a class="btn btn-success calendar-event-btn mx-auto p-3 rounded-0 d-inline-block w-100"
                href="{{$post->btn_link}}" target="_blank">{!!$post->btn_link_text!!}</a></li>
            @endif
          </ul>
          @if($post->meta_keywords !="")
          <div class="blog-tags">Tags:
            <ul itemprop="keywords">
              @foreach (explode(',', $post->meta_keywords) as $keyword)
              <?php $keyword= trim($keyword) ?>
              @if($keyword != "")
              <a href="{{route('blog-search',$keyword)}}">
                <li>{{ $keyword }}</li>
              </a>
              @endif
              @endforeach
            </ul>
          </div>@endif
        </div>
      </div>
    </div>
    {{-- <div class="">
      <div class="col-lg-9">
        <h3 class="main-title">Visitor Comments</h3>
        @if (session('status_comment_reply'))
        <div class="alert alert-{{ session('status_comment_reply')['type'] }}">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{session('status_comment_reply')['msg'] }}
        </div>
        @endif
        <div id="comments">
          @foreach($comments as $comment)
          @if ($comment->reply_to == 0)
          <article class="card comment-card box-shadow-lt p-3 mt-2 mb-2" id="comment_{{$comment->id}}" data-comment="{{$comment->id}}"
            itemscope itemtype="https://schema.org/UserComments">
            <div class="card-block comment-block">
              <div class="row">
                <div class="comment-info col-xs-12 col-sm-4 col-md-4 col-lg-3">
                  <div itemprop="creator" itemscope itemtype="https://schema.org/Person" class="comment-name">
                    <span itempop="name">{{$comment->name}}</span>
                  </div>
                  <div class="comment-date text-muted">
                    <time datetime="{{$post->updated_at}}" data-toggle="tooltip" data-placement="right" title="{{ (new DateTime($comment->created_at))->format('F d, Y \\a\\t H:s')}}"
                      itemprop="commentTime">{{ (new DateTime($comment->created_at))->format('F d, Y')}}</time>
                  </div>
                  @php
                  $liked = DB::table('likes')
                  ->where('comment_id', '=', $comment->id)
                  ->where('ip', '=', Cookie::get("uniqueID"))
                  ->pluck('liked');
                  @endphp
                  <div class="comment-likes">
                    <button class="clikes cthumb @if(isset($liked[0])) {{$liked[0] == 1 ? 'active' : ''}} @endif"
                      data-toggle="tooltip" data-placement="right" title="Like Comment"></button>
                    <span class="cnum">{{$comment->likes}}</span>
                    <button class="cdislikes cthumb @if(isset($liked[0])) {{$liked[0] == -1 ? 'active' : ''}}@endif"
                      data-toggle="tooltip" data-placement="right" title="Dislike Comment"></button>
                    <span class="cnum">{{$comment->dislikes}}</span>
                  </div>
                  @if($comment->link !="")
                  <div class="comment-link">
                    <a href='{{$comment->link}}' target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i>
                      View Link</a>
                  </div>
                  @endif
                  @if($comment->reply_to == 0)
                  <div class="comment-reply">
                    <a data-toggle="collapse" href="#comment_reply_{{$comment->id}}" aria-expanded="false"
                      aria-controls="comment_reply_{{$comment->id}}"><i class="fa fa-reply" aria-hidden="true"></i>
                      REPLY</a>
                  </div>
                  @endif
                </div>
                <div class="comment-body col-xs-12 col-sm-8 col-md-8 col-lg-9" itemprop="commentText">
                  {{$comment->body}}
                </div>
              </div>
              @php
              $replies = collect();
              $i = 0;
              @endphp
              @foreach($comments as $comment_reply)
              @if ($comment_reply->reply_to != 0 && $comment_reply->reply_to == $comment->id)
              @php
              $replies->push($comment_reply);
              @endphp
              @endif
              @endforeach
              @if(count($replies)> 0)
              <div class="card" style="margin:0" itemscope itemtype="https://schema.org/UserComments">
                @foreach($replies as $comment_reply)
                @if($i > 0)
                <hr style="margin:0; padding:0" />
                @endif
                <div class="card-block comment-block comment-card p-3" data-comment="{{$comment_reply->id}}">
                  <div class="row">
                    <div class="comment-info col-xs-12 col-sm-4 col-md-4 col-lg-3">
                      <div itemprop="creator" itemscope itemtype="https://schema.org/Person" class="comment-name">
                        <span itempop="name">{{$comment_reply->name}}</span>
                      </div>
                      <div class="comment-date text-muted">
                        <time datetime="{{$comment_reply->created_at}}" data-toggle="tooltip" data-placement="right"
                          title="{{ (new DateTime($comment_reply->created_at))->format('F d, Y \\a\\t H:s')}}" itemprop="commentTime">{{
                          (new DateTime($comment_reply->created_at))->format('F d, Y')}}</time>
                      </div>
                      <div class="comment-likes">
                        @php
                        $liked2 = DB::table('likes')
                        ->where('comment_id', '=', $comment_reply->id)
                        ->where('ip', '=', Cookie::get("uniqueID"))
                        ->pluck('liked');
                        @endphp
                        <button class="clikes cthumb @if(isset($liked2[0])) {{$liked2[0] == 1 ? 'active' : '' }}@endif"
                          data-toggle="tooltip" data-placement="right" title="Like Comment"></button>
                        <span class="cnum">{{$comment_reply->likes}}</span>
                        <button class="cdislikes cthumb @if(isset($liked2[0])) {{$liked2[0] == -1 ? 'active' : '' }}@endif"
                          data-toggle="tooltip" data-placement="right" title="Dislike Comment"></button>
                        <span class="cnum">{{$comment_reply->dislikes}}</span>
                      </div>
                      @if($comment_reply->link !="")
                      <div class="comment-link">
                        <a href='{{$comment_reply->link}}' target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i>
                          View Link</a>
                      </div>
                      @endif
                    </div>
                    <div class="comment-body col-xs-12 col-sm-8 col-md-8 col-lg-9" itemprop="commentText">
                      {{$comment_reply->body}}
                    </div>
                  </div>
                </div>
                @php $i++; @endphp
                @endforeach
              </div>
              <br />
              @endif

              <div class="collapse" id="comment_reply_{{$comment->id}}" style="margin-top: 15px;">
                <div class="card box-shadow-lt-inset p-3">
                  <div class="card-block">
                    <h4 class="card-title">Reply to Comment</h4>
                    <p class="text-muted">Your email address will not be published. Required fields are marked *</p>
                    <hr />
                    {!! Form::open(array('action' => 'CommentController@newComment', 'class' => 'form validate-captcha
                    validator','role'=>'form', 'data-toggle'=>"validator")) !!}

                    {{ Form::hidden('post_id', $post->id) }}
                    {{ Form::hidden('reply_to', $comment->id) }}

                    <div class="form-group required {{ $errors->first('comment_name') ? 'has-error has-danger' : ''}}">
                      {!! Form::label('Your Name') !!} {!! Form::text('comment_name', null, array('required',
                      'class'=>'form-control', 'placeholder'=>'Your Full Name', 'data-error'=>'Name is required!')) !!}
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block">{{ $errors->first('comment') }}</div>
                    </div>

                    <div class="form-group required">
                      {!! Form::label('Your Email') !!} {!! Form::email('comment_email', null, array('required',
                      'class'=>'form-control', 'placeholder'=>'Your Email')) !!}
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block"></div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('Your Link') !!} {!! Form::text('comment_link', null,
                      array('width'=>'200px','class'=>'form-control', 'placeholder'=>'Your Link')) !!}
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block"></div>
                    </div>

                    <div class="form-group required">
                      {!! Form::label('Your Comment') !!} {!! Form::textarea('comment_body', null,
                      array('required','class'=>'form-control', 'placeholder'=>'Your Comment')) !!}
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <div class="help-block"></div>
                    </div>
                    {!! NoCaptcha::display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                    <div class="alert alert-danger w-100">
                      <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </div>
                    @endif
                    <div class="form-group">
                      {!! Form::submit('Submit Comment', array('class'=>'btn btn-primary mt-3 mb-0')) !!}
                    </div>
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
          </article>
          @endif
          @endforeach
          @if($comments->links() != "")
          <div class="control-section">
            <nav aria-label="Page navigation" class="custom-pagination">
              {{ $comments->links() }}
            </nav>
          </div>
          @endif
        </div>
        <hr />
        <div class="card box-shadow-lt">
          <div class="card-block p-3">
            @if (session('status_comment'))
            <div class="alert alert-{{ session('status_comment')['type'] }}">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{
              session('status_comment')['msg'] }}
            </div>
            @endif
            <h4 class="card-title">Leave a Comment</h4>
            <p class="text-muted">Your email address will not be published. Required fields are marked *</p>
            <hr />
            {!! Form::open(array('action' => 'CommentController@newComment', 'class' => 'form
            validate-captcha','role'=>'form')) !!}

            {{ Form::hidden('post_id', $post->id) }}
            {{ Form::hidden('reply_to', 0) }}

            <div class="form-group required {{ $errors->first('comment_name') ? 'has-error has-danger' : ''}}">
              {!! Form::label('Your Name') !!} {!! Form::text('comment_name', null, array('required',
              'class'=>'form-control', 'placeholder'=>'Your Full Name')) !!}
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block">{{ $errors->first('comment') }}</div>
            </div>

            <div class="form-group required">
              {!! Form::label('Your Email') !!} {!! Form::email('comment_email', null, array('required',
              'class'=>'form-control', 'placeholder'=>'Your Email')) !!}
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block"></div>
            </div>

            <div class="form-group">
              {!! Form::label('Your Link') !!} {!! Form::text('comment_link', null,
              array('width'=>'200px','class'=>'form-control', 'placeholder'=>'Your Link')) !!}
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block"></div>
            </div>

            <div class="form-group required">
              {!! Form::label('Your Comment') !!} {!! Form::textarea('comment_body', null,
              array('required','class'=>'form-control', 'placeholder'=>'Your Comment')) !!}
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block"></div>
            </div>
            {!! NoCaptcha::display() !!}
            @if ($errors->has('g-recaptcha-response'))
            <div class="alert alert-danger w-100">
              <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </div>
            @endif
            <div class="form-group">
              {!! Form::submit('Submit Comment', array('class'=>'btn btn-primary mb-0 mt-3')) !!}
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div> --}}
  </section>
</div>
@stop

@push('before-scripts')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">REGISTER NOW</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        {!!$post->clickd_form!!}
      </div>
    </div>
  </div>
</div>
@endpush
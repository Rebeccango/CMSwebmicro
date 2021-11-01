@extends('layouts.store')
@section('title')
  Store | CAD MicroSolutions Inc.
@stop
@section('body')
<section style="margin-top:150px;">
  <div>
    <div class="content">
      <div class="section-title center-block mx-auto" style="padding-top:10px; margin-bottom:20px;">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">STORE CATALOG <span class="beta-badge badge badge-sm badge-secondary" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-trigger="hover" data-content="The CAD MicroSolutions Online Store is currently in Beta. <br>There may be bugs, if you run into any issues please don't hesitate to email us at <a href='mailto:support@cadmicro.com'>support@cadmicro.com</a>">BETA</span></h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        <h3 class="wow fadeIn text-center" style="font-weight:300; font-size: 14px; max-width: 500px; margin: 0 auto; line-height: 25px; margin-top: 30px;" data-wow-duration="1s" data-wow-delay="0.3s">Conveniently order 3D Printer and Virtual Reality products</h3>
      </div>
      <div class="section-icon-group row row-centered justify-content-center" style="background:rgba(255,255,255,0.7); max-width:800px; margin:0 auto">
        @foreach($categories as $category)
          <div class="icon-block col-lg-4 col-md-4 col-sm-4 col-xs-12" data-wow-duration="1s" style="height: 359px;">
            <a href="{{url('/store/catalog/'.$category->slug)}}"><div class="icon" style="background-image:url('{{ thumbnail($category->image) }}'); background-size:contain; width:100%">
            </div></a>
            <div class="icon-content">
              <a class="icon-link" href="{{url('/store/catalog/'.$category->slug)}}">
                <h2 class="icon-title">{{$category->name}}</h2>
              </a>
              <div class="icon-body">
                <p>
                  {{$category->name}}
                </p>
                <a class="btn btn-sm btn-primary" href="{{url('/store/catalog/'.$category->slug)}}">SHOP NOW</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@stop
@push('after-scripts')
  <script>
    $(function(){
        $('.icon-block .icon-body p').matchHeight();
        $('.icon-block .icon-title').matchHeight();
    })
  </script>
@endpush

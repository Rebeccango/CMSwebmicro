@extends('layouts.layout')
@section('title')
{{!empty($landing->title) ? $landing->title : "Landing Page"}}
@stop
@section('description'){!!$landing->meta_description!!}@stop
@section('keywords'){!!$landing->meta_keywords!!}@stop

@push('after-styles')
<style>
  {!! $landing->style !!}
</style>
@endpush

@push('after-scripts')
{!! $landing->script !!}
@endpush

@section('body')
@if(!$landing->hide_banner)
<section class="parallax-section parallax d-flex banner"
  style="min-height:450px; @if($landing->banner) background-image:url('/storage/{{$landing->banner}}'); @else background:#262626; @endif">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          @if(!empty($landing->title))
            <h1 class="title">{{$landing->title}}</h1>
          <div class="section-title-divider"></div>
          @endif
          @if(!empty($landing->subtitle))
            <h2 class="subtitle h4">{{$landing->subtitle}}</h2>
          @endif
        </div>
        @if(!$landing->hide_banner_btns)
        <div class="banner-btns">
          @include('layouts.generic_contact_buttons')
        </div>
        @endif
      </div>
    </div>
  </div>
</section>
@endif
<section class="landing-body">
  {!!$landing->body!!}
</section>
@stop
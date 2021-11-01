@extends('layouts.layout',['hideforms'=>true, 'hidechat'=>true])
@section('title')
Request A Free Markforged Sample Part
@stop
@section('meta')
<link rel="canonical" href="{{route('markforged-request-sample')}}" />
@stop
@section('description')Request a free Markforged sample part to see how strong a 3D printed part with continuous carbon
fiber reinforcement can really be. @stop
@section('body')
<section class="py-5">
  <div class="container-fluid py-5">
    <div class="row">
      <div class="section-title center-block mx-auto w-100 mb-3">
        <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Free Markforged Sample</h2>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div class="section-block mx-auto" style="max-width: 600px;">
        <p class="text-primary h5 mb-4">Parts printed on a Markforged 3D printer are up to 23x stronger and stiffer than
          those same parts made on other 3D printers. Request a free sample part and see for yourself.</p>
        <p class="small">Free Markforged sample parts include a plastic and composite sample parts only. For information
          about the availability of metal sample parts get in touch.</p>
        <p class="small">Please note that due to high demand, we cannot guarantee delivery by a specific date.</p>
        <div data-form-block-id="d5901a30-62ad-e911-a987-000d3a3702ca"></div>
        <div id="dm63pwsS3GX9q3B_aYKYJn_k-gPa9DxWewmU60tN1mX4"></div>
      </div>
    </div>
  </div>
</section>
@stop
{{-- 
@push('after-styles')
<style>
  main {
    background: url({{asset('storage/images/markforged/markforged-blurred-white-bg.jpg')}}) no-repeat top;
    background-size: cover;
  }
</style>
@endpush --}}
@extends('layouts.layout')
@section('title')
Wonderland 2017 - Customer Appreciation Day
@stop
@section('description')CAD MicroSolutions hosted a Customer Appreciation Day on Sunday, June 25th at Canada's
Wonderland!@stop
@section('keywords')Customer,Appreciation,Wonderland,2017,Event, @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:600px; background-image:url({{asset('/storage/banners/10fcc6a5008b2c323164e065a7bd22e7.jpeg')}})">
</section>
<section id="solidworks-products">
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Canada's Wonderland 2017</h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div style="max-width:600px; margin:0 auto;">
        <h2 class="text-center">CAD MicroSolutions hosted a Customer Appreciation Day on Sunday, June 25th at Canada's
          Wonderland!</h2>
        <br />
        <p class="text-center" style="font-size:15px;">The rain didn’t stop the fun! Thank you to those who attended
          this special day!</p>
      </div>
    </div>
  </div>

  <div class="section-secondary" style="margin-top:50px; padding-bottom:60px;">
    <div class="content">
      <style>
        .swiper-container {
          width: 100%;
          height: 300px;
          margin: 20px auto;
        }

        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: transparent;
          width: 100%;
          max-width: 450px;
          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;

          background-size: contain;
          background-repeat: no-repeat;
          background-position: center;
        }

        .swiper-pagination {
          width: 100%;
        }

        .swiper-pagination-bullet {
          margin: 3px;
        }
      </style>
      <div class="section-title center-block mx-auto">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">GALLERY</h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0154.JPG')}}">
            <img src="{{asset('/storage/events/Wonderland/DSC_0154.JPG')}}"></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0158.JPG')}}">
          <img src="{{asset('/storage/events/Wonderland/DSC_0158.JPG')}}"></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0159.JPG')}}">
          <img src="">{{asset('/storage/events/Wonderland/DSC_0159.JPG')}}</a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0160.JPG')}}">
            <img src="{{asset('/storage/events/Wonderland/DSC_0160.JPG')}}"></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0162.JPG')}}">
            <img src="{{asset('/storage/events/Wonderland/DSC_0162.JPG')}}"></a>
          {{-- <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0173.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0173.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0196.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0196.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0198.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0198.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0201.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0201.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0202.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0202.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0203.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0203.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0204.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0204.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0205.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0205.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0207.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0207.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/DSC_0209.JPG')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/DSC_0209.JPG')}})"><img src=""></a>
          <a class="swiper-slide swipebox" rel="gallery"
            href="{{asset('/storage/events/Wonderland/IMG_20170625_1438578.jpg')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/IMG_20170625_1438578.jpg')}})"></a>
          <a class="swiper-slide swipebox" rel="gallery"
            href="{{asset('/storage/events/Wonderland/IMG_20170625_1439093.jpg')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/IMG_20170625_1439093.jpg')}})"></a>
          <a class="swiper-slide swipebox" rel="gallery"
            href="{{asset('/storage/events/Wonderland/IMG_20170625_1439261.jpg')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/IMG_20170625_1439261.jpg')}})"></a>
          <a class="swiper-slide swipebox" rel="gallery"
            href="{{asset('/storage/events/Wonderland/IMG_20170625_1439504.jpg')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/IMG_20170625_1439504.jpg')}})"></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/Photo_1.jpg')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/Photo_1.jpg')}})"></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/Photo_2.jpg')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/Photo_2.jpg')}})"></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/Photo_3.jpg')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/Photo_3.jpg')}})"></a>
          <a class="swiper-slide swipebox" rel="gallery" href="{{asset('/storage/events/Wonderland/Photo_4.jpg')}}"
            style=" background-image:url({{asset('/storage/events/Wonderland/Photo_4.jpg')}})"></a> --}}
        </div>
        <!-- Add Pagination -->
      </div>
      <div class="swiper-pagination"></div>

    </div>
  </div>
</section>
@stop

@push('after-scripts')
<script>
  $(function(){
    var swiper = new Swiper('.swiper-container', {
        pagination: {
         el: '.swiper-pagination',
       },
        paginationClickable: true,

        slidesPerView: 'auto',
        centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 30,
        keyboardControl: true
    });
    $('.swipebox').swipebox();
  });
</script>
@endpush
@extends('layouts.layout')
@section('title')
3DConnexion: SpaceMouse
@stop
@section('meta')
<link rel="canonical" href="{{route('3dconnexion')}}" />
@stop
@section('description')3d mice for designers, CAD professionals and professional users, the Spacemouse family has
something for your CAD needs @stop
@section('keywords')spacemouse, spacemouse wireless, 3d mouse, mouse for CAD, 3dconnexion @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
 style="min-height:450px; background-image:url({{asset('storage/images/3dx/3dconnexion-mouse-background.jpg')}});">
  <div class="parallax-section__shadow d-none"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">3DConnexion SpaceMouse</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">6-Degrees-of-Freedom (6DoF) 3D mice built for professionals</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-0" style="background-color:#F2F2F2">
  <img src="{{asset('storage/images/3dx/navigation_main_image.jpg')}}" class='w-100 d-block' />
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <div class="h3 text-center">Immersive Navigation of 3D Design</div>
        <div class="section-title-divider"></div>
      </div>
      <p class="text-center">
        3Dconnexion's patented 6-Degrees-of-Freedom (6DoF) sensor is specifically designed to manipulate digital content
        or camera positions in the industry-leading CAD applications. Simply push, pull, twist or tilt the 3Dconnexion
        controller cap to intuitively pan, zoom and rotate your 3D drawing. Your other hand is now free to
        simultaneously use your standard mouse to select, create or edit your model.
      </p>
    </div>
  </div>
</section>
<section class="section-secondary" style="background-color:#F2F2F2">
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>What is a SpaceMouse?</h3>
        <br />
        <p>
          3Dconnexion’s family of SpaceMouse products provide a comfortable and natural way to interact with digital
          content in the world’s most popular CAD and creative applications making it easier to focus on your design
          rather than your software.
        </p>
        <p>The SpaceMouse takes care of positioning your model or view and providing access to your favourite
          application commands, freeing up your normal mouse to do what it was designed for – moving the cursor to
          select, edit and create.</p>
        <p>Not only does this balanced and co-operative work-style simply feel good, it enhances comfort by reducing
          mouse use and increases productivity. The SpaceMouse also provides a consistent navigation experience so if
          you use more than one 3D application, you don’t need to adjust to different navigation methods as you switch
          between them.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="videoWrapper">
          <video id="3dconnexion_video" class="video-js" controls preload="auto"
            src="{{asset('storage/videos/3dx/3dx_space_mouse.mp4')}}" width="100%" height="264"
            poster="{{asset('storage/videos/3dx/3dx_space_mouse.png')}}" data-setup='{"fluid": true}'>
            <source src="{{asset('storage/videos/3dx/3dx_space_mouse.mp4')}}" type='video/mp4'>
            <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a web browser that
              <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </div>
        <div class="videoCaption">Video: 3Dconnexion Short Demo </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="section-title center-block mx-auto">
    <div class="h3 text-center">3DConnexion SpaceMouse Products</div>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="container-fluid">
    <div class="row pb-4 order-sm-1  wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s"
      id="SpaceMouse-Compact">
      <div class="col-lg-4">
        <img src="{{asset('storage/images/3dx/3Dconnexion_SpaceMouse-Compact_preview.png')}}"
          class="d-block mw-100 mx-auto text-center" style="max-height:300px" />
      </div>
      <div class="col-lg-8 align-self-center">
        <div class="text-primary h2 text-center text-sm-center text-lg-left">SpaceMouse® Compact/Wireless</div>
        <div class="text-primary h5 text-center text-sm-center text-lg-left">
          DESIGNED FOR ADVANCED 3D NAVIGATION
        </div>
        <p class="text-center text-sm-center text-lg-left">The SpaceMouse Compact was developed to deliver an intuitive,
          effortless and precise 3D navigation in CAD applications that cannot be experienced by using a standard mouse
          and keyboard. It is the ideal tool for modern engineers, architects and designers to review 3D designs and
          explore 3D spaces.</p>
      </div>
    </div>
    <div class="row pb-4 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.3s" id="SpaceMouse-Enterprise">
      <div class="col-lg-4 order-sm-first order-lg-last">
        <img src="{{asset('storage/images/3dx/3Dx SpaceMouse Enterprise ISOright 02_preview.png')}}"
          class="d-block mw-100 mx-auto text-center" style="max-height:300px" />
      </div>
      <div class="col-lg-8 align-self-center  order-sm-last order-lg-first">
        <div class="text-primary h2 text-center text-sm-center text-lg-right">SpaceMouse® Enterprise/Pro/Wireless</div>
        <div class="text-primary h5 text-center text-sm-center text-lg-right">
          Built For Top Engineering Performance
        </div>
        <p class="text-center text-sm-center text-lg-right">At the top, there is no room for second best. The world’s
          premier firms demand the highest level of performance from their engineering teams. There are no excuses for
          missed opportunities or subpar output; there are only results.</p>
      </div>
    </div>
    <div class="row pb-4 order-sm-1 pt-3 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.6s"
      id="CADMouse-Products">
      <div class="col-lg-4">
        <img src="{{asset('storage/images/3dx/3Dconnexion_CadMouse-Line_01_preview.png')}}"
          class="d-block mw-100 mx-auto text-center" style="max-height:300px" />
      </div>
      <div class="col-lg-8 align-self-center">
        <div class="text-primary h2 text-center text-sm-center text-lg-left">CADMouse & CADMouse Wireless</div>
        <div class="text-primary h5 text-center text-sm-center text-lg-left">
          The Perfect mice for CAD Professionals
        </div>
        <p class="text-center text-sm-center text-lg-left">Choose between a full size wired or wireless mouse with a
          high precision laser sensor with 8.200 dpi(wired) and 7.200 dpi(wirless) - built for CAD specific features for
          a comfortable and efficient workflow.</p>
      </div>
    </div>
  </div>
</section>
@stop
@extends('layouts.layout')
@section('title')
Canada's leading 3D CAD Design, Manufacturing, Mixed Reality & 3D Printing Solutions Provider
@stop
@section('meta')
<link rel="canonical" href="{{route('home')}}" />
@stop
@section('description')CAD MicroSolutions is uniquely positioned to support our clients across Canada. We are your
official solutions provider for SOLIDWORKS, 3D Printing Solutions; Markforged, HP, &amp; NanoDimensions, as well as
Custom Programming and Mixed Reality solutions. We are dedicated to helping our mechanical and electronic customers
ensure they are realizing the greatest value from their technology investment from concept to production. @stop
@section('keywords')SolidWorks,Markforged,HP,Manufacturing,3D,3D Printers,NanoDimensions,CAD,3D Design,Custom
Programming,Mixed Reality,Virtual Reality,Augmented Reality,AR,VR,PCB @stop
@push('after-styles')
@endpush
@push('after-scripts')
@endpush
@section('body')
<section id="home_banner" class="home_banner">
  <section class="cd-hero">
    <ul class="cd-hero-slider">
      @php $i = 0; @endphp
      @foreach($banners as $banner)
      @if($banner->hide_at == "" || $banner->hide_at >= date("Y-m-d H:i:s") && $banner->visible)
      @if($banner->style != "")
      @push('after-styles')
      <style>
        {
           ! ! $banner->style ! !
        }
      </style>
      @endpush
      @endif
      @if($banner->html)
      {!!$banner->html !!}
      @elseif($banner->video)
      <li id="banner-{{ $banner->id }}" class="cd-bg-video {!!$i == 0 ? 'selected' : ''!!}"
        style="background-color: #{{$banner->bgcolor}};">
        <div class="cd-full-width d-flex flex-column justify-content-center">
          <div class="h2 title">{{$banner->title}}</div>
          @if(isset($banner->subtitle))
          <p class="subtitle h5">{{$banner->subtitle}}</p>
          @endif
          {!!$banner->content!!}
          @if($banner->link != "")
          <a class="cd-btn" href="{{$banner->link}}">{{$banner->button}}</a>
          @endif
        </div> <!-- .cd-full-width -->
        <div class="cd-bg-video-wrapper" data-video="{{url('storage/'.$banner->video)}}">
        </div> <!-- .cd-bg-video-wrapper -->
      </li>
      @else
      <li id="banner-{{ $banner->id }}" {!!$i==0 ? 'class="selected"' : '' !!} style="
            background-color: #{{$banner->bgcolor}};
            background-image: url({{ url('storage/'.str_replace('\\', '/', $banner->image))}});">
        @if($banner->layout == "split")
        @if($banner->orient =="left")
        <div class="cd-half-width d-flex flex-column justify-content-center">
          <div class="h2 title">{{$banner->title}}</div>
          @if(isset($banner->subtitle))
          <p class="subtitle h5">{{$banner->subtitle}}</p>
          @endif
          {!!$banner->content!!}
          @if($banner->link != "")
          <div style="width:100%; margin-top:15px;">
            <a class="cd-btn" href="{{$banner->link}}">{{$banner->button}}</a>
          </div>
          @endif
        </div> <!-- .cd-full-width -->
        <div class="cd-half-width d-flex flex-column justify-content-center" style="z-index:0">
          @if($banner->object != "")
          <img src="{{url('storage/'.$banner->object)}}" alt="banner-{{ $banner->id }}" />
          @endif
        </div> <!-- .cd-half-width -->
        @else

        <div class="cd-half-width">
          @if($banner->object != "")
          <img src="{{url('storage/'.$banner->object)}}" alt="banner-{{ $banner->id }}" />
          @endif
        </div> <!-- .cd-half-width -->
        <div class="cd-half-width d-flex flex-column justify-content-center" style="z-index:0">
          <div class="h2">{{$banner->title}}</div>
          {!!$banner->content!!}
          @if($banner->link != "")
          <div style="width:100%; margin-top:15px;">
            <a class="cd-btn" href="{{$banner->link}}">{{$banner->button}}</a>
          </div>
          @endif
        </div> <!-- .cd-full-width -->
        @endif
        @elseif($banner->layout == "full")
        <div class="cd-full-width d-flex flex-column justify-content-center">
          <div class="h2">{{$banner->title}}</div>
          @if(isset($banner->subtitle))
          <p class="h5">{{$banner->subtitle}}</p>
          @endif
          {!!$banner->content!!}
          @if($banner->link != "")
          <div style="width:100%; margin-top:15px;">
            <a class="cd-btn" href="{{$banner->link}}">{{$banner->button}}</a>
          </div>
          @endif
        </div>
        @endif
      </li>
      @endif
      @php $i++; @endphp
      @endif
      @endforeach
    </ul>

    <div class="cd-slider-button cd-slider-next"></div>
    <div class="cd-slider-button cd-slider-prev"></div>

    <div class="cd-slider-nav position-absolute">
      <nav>
        <ul>
          @php $i = 0; @endphp
          @foreach($banners as $banner)
          @if($banner->hide_at == "" || $banner->hide_at >= date("Y-m-d H:i:s") && $banner->visible)
          <li {{$i == 0 ? 'class=selected' : ''}}><a href="#0"></a></li>
          @php $i++; @endphp
          @endif
          @endforeach
        </ul>
      </nav>
    </div>
  </section>
</section>

<section class="pt-0" id="solutions">
  <div class="container-fluid">
    <div class="content mt-5">
      <div class="section-title center-block mx-auto">
        <h1 class="">PROVIDING 3D CAD DESIGN, MANUFACTURING,
          MIXED REALITY, CUSTOM PROGRAMMING &amp; 3D PRINTING SOLUTIONS</h1>
        <div class="section-title-divider "></div>
      </div>
      <div class="section-block">
        <div class="section-icon-group row">
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('solidworks')}}">
                <div class="icon" style="background-image:url('{{asset('storage/icons/solidworks_icon_sm.png')}}');">
                </div>
                <h2 class="icon-title">SOLIDWORKS</h2>
              </a>
              <div class="icon-body">
                <p>We provide the entire portfolio of SOLIDWORKS 3D design, simulation, data management, technical
                  communications and electrical software.</p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('additive-solutions.all')}}">
                <div class="icon" style="background-image:url('{{asset('storage/icons/3dprinters.png')}}');">
                </div>
                <h2 class="icon-title">3D Printers</h2>
              </a>
              <div class="icon-body">
                <p>We offer 3D printers for fast & reliable prototyping and end-use production to increase productivity
                  and decrease
                  turnaround time.</p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('3d-scanning.index')}}">
                <div class="icon" style="background-image:url('{{asset('storage/icons/3dscanning.png')}}');">
                </div>
                <h2 class="icon-title">3D Scanning</h2>
              </a>
              <div class="icon-body">
                <p>
                  Providing precise industrial 3D Metrology solutions for Improving product quality, accelerating
                  product development and manufacturing processes.
                </p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('xr.index')}}">
                <div class="icon"
                  style="background-image:url('{{asset('storage/icons/virtual-reality.png')}}'); background-size:120px 120px;">
                </div>
                <h2 class="icon-title">Immersive Display</h2>
              </a>
              <div class="icon-body">
                <p>
                  We provide advanced cutting-edge virtual and augmented reality software and hardware solutions. We
                  also design and
                  develop custom interactive mixed reality experiences.
                </p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('training')}}">
                <div class="icon" style="background-image:url('{{asset('storage/icons/training.png')}}')">
                </div>
                <h2 class="icon-title">Training</h2>
              </a>
              <div class="icon-body">
                <p>
                  Engineering Training for SOLIDWORKS, CAD, PDM, PCB, Simulation &amp; partner products.
                </p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <div class="icon-link">
                <div class="icon" style="background-image:url('{{asset('storage/icons/partner_products.png')}}');">
                </div>
                <h2 class="icon-title">Custom Programming</h2>
              </div>
              <div class="icon-body">
                <p>Provide custom programming solutions for SolidWorks, PDM and Partner Products to automate, enhance,
                  optimize and
                  streamline your companies internal workflows.</p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('partner-products')}}">
                <div class="icon" style="background-image:url('{{asset('storage/icons/partner_products.png')}}');">
                </div>
                <h2 class="icon-title">Partner Products</h2>
              </a>
              <div class="icon-body">
                <p>
                  Integrated Solutions for specialized industries: Steelwork, Tool &amp; Die, Aeroscape, Automative,
                  Electronics, Optics, and more.
                </p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('hardware')}}">
                <div class="icon" style="background-image:url('{{asset('storage/icons/hardware_icon.png')}}');">
                </div>
                <h2 class="icon-title">Hardware</h2>
              </a>
              <div class="icon-body">
                <p>
                  Maximize your productivity, with smarter hardware and cloud choices for CAD, Design &amp; Engineering.
                </p>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class='icon-content'>
              <a class="icon-link" href="{{route('subscription-services')}}">
                <div class="icon" style="background-image:url('{{asset('storage/icons/subscription_services.png')}}');">
                </div>
                <h2 class="icon-title">Subscription Services</h2>
              </a>
              <div class="icon-body">
                <p>Maximize the return on your technology investment.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="parallax" style="background-image:url({{asset('storage/banners/webinar_bg.jpg')}}); min-height:600px;">
  <div class="content white-content d-flex justify-content-center align-items-center">
    <div class="container-fluid">
      <div class="section-title center-block mx-auto">
        <h3>LIVE WEBINARS &amp; EVENTS</h3>
        <div class="section-title-divider"></div>
      </div>
      <div class="section-block">
        <div class="mb-3 text-dark w-100 rounded-lg mx-auto d-flex justify-content-center align-items-center flex-column"
          style="max-width:600px">
          <div class="text-center h4 text-white">Subscribe to our Newsletter</div>
          <p class="lead mb-4 text-center">Subscribe to get notified about upcoming webinars, events and industry news</p>
          <div class="text-white">
            <div data-form-block-id="5f005dc1-d572-eb11-a812-002248046855"></div>
            <div id="dHGiW8w4n0n4to_ejrSVBySEt11BS4B85uUTfORS4P8o"></div>
          </div>
        </div>
        <a class="btn btn-white w-25 mx-auto d-block btn-rounded" href="{{route('events.index')}}">View our Events</a>
      </div>
    </div>
  </div>
</section>
<section id="LearnMore" style="padding-bottom:0">
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h3 class="">Learn More</h3>
        <div class="section-title-divider"></div>
      </div>
      <div class="section-block">
        <div class="section-left-icon-group row d-flex justify-content-start align-items-start flex-row">
          <div class="icon-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class='icon-content'>
              <table>
                <tr>
                  <td>
                    <a class="icon-link" href="#">
                      <div class="icon" style="background-image:url('{{asset('storage/icons/quote_icon_sq.jpg')}}');">
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="icon-body">
                      <a href="#">
                        <h2 class="icon-title">Get a Quote</h2>
                      </a>
                      <p>
                        Our competitive pricing offers a flexible approach to investing in SOLIDWORKS software.
                      </p>
                      <button class="btn btn-sm btn-white btn-rounded btn-dialog" id="quote" data-toggle="modal"
                        data-target="#contactModal" data-type="quote" data-title="Get a quote" style="display:block">Get
                        a quote</button>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="icon-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class='icon-content'>
              <table>
                <tr>
                  <td>
                    <a class="icon-link" href="{{route('calendar')}}">
                      <div class="icon" style="background-image:url('{{asset('storage/icons/demo_icon_sq.jpg')}}');">
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="icon-body">
                      <a href="{{route('calendar')}}">
                        <h2 class="icon-title">Get a Demonstration</h2>
                      </a>
                      <p>
                        We offer free events across Canada for you to see and try SOLIDWORKS before you buy. See whats
                        upcoming near you.
                      </p>
                      <a class="btn btn-sm btn-white  btn-rounded" href="{{route('calendar')}}"
                        style="width:50px; display:block;">View
                        Events</a>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="icon-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class='icon-content'>
              <table>
                <tr>
                  <td>
                    <a class="icon-link" href="{{route('calendar')}}">
                      <div class="icon" style="background-image:url('{{asset('storage/icons/clinic_icon_sq.jpg')}}');">
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="icon-body">
                      <a href="{{route('calendar')}}">
                        <h2 class="icon-title">Walk-in-clinic</h2>
                      </a>
                      <p>
                        As a CAD Micro customer, you have unlimited access to our walk-in clinic, every Wednesday
                        alternating between our Toronto and Cambridge offices.
                      </p>
                      <a class="btn btn-sm btn-white  btn-rounded" href="{{route('calendar')}}"
                        style="width:50px; display:block;">View
                        Calendar</a>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <div class="icon-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class='icon-content'>
              <table>
                <tr>
                  <td>
                    <a class="icon-link" href="{{route('training')}}">
                      <div class="icon"
                        style="background-image:url('{{asset('storage/icons/training_icon_sq.jpg')}}');">
                      </div>
                    </a>
                  </td>
                  <td>
                    <div class="icon-body">
                      <a href="{{route('training')}}">
                        <h2 class="icon-title">Training</h2>
                      </a>
                      <p>
                        Get custom training provided by our qualified engineers and in our office facilities.
                      </p>
                      <a class="btn btn-sm btn-white  btn-rounded" href="{{route('training')}}"
                        style="width:80px; display:block;">Learn More</a>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="testimonials" class="white-content parallax d-flex justify-content-center align-items-center flex-column"
  style="background-image:url({{asset('storage/banners/testimonials_bg2.jpg')}}); min-height:400px; padding-bottom: 80px;">
  <div class="">
    <div class="container-fluid">
      <div class="section-title center-block mx-auto">
        <h3>CUSTOMER TESTIMONIALS</h3>
        <div class="section-title-divider "></div>
      </div>
      <div class="section-block">
        <div class="swiper-container" style="max-height:200px;">
          <div class="swiper-wrapper">
            @php $testimonials =
            \App\Testimonials::where('status','=','ACTIVE')->orderBy('created_at','desc')->where('highlight','=','1')->limit(10)->get();
            @endphp
            @foreach($testimonials as $t)
            <div class="swiper-slide w-75 mx-auto">
              <blockquote class="blockquote">
                <p class="mb-0 text-md-left ml-4"><i class="fa fa-quote-left" aria-hidden="true"></i>
                  {!!$t->testimonial!!} <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                <div class="blockquote-footer ml-4">
                  <span class="name">
                    @if(isset($t->firstname) && !empty($t->firstname)){!!$t->firstname!!}@endif
                    @if(isset($t->lastname) && !empty($t->lastname)){!!$t->lastname!!}@endif
                  </span>
                  @if(isset($t->position) && !empty($t->position)){!!$t->position!!}@endif
                  @if(isset($t->company) && !empty($t->company)) from <cite
                    title="{!!$t->company!!}">{!!$t->company!!}</cite>@endif
                </div>
              </blockquote>
            </div>
            @endforeach
          </div>
          <div class="swiper-pagination swiper-pagination-white"></div>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-white btn-rounded" href="{{route('testimonials')}}">View All Testimonials</a>
</section>
@stop

@push('after-scripts')
<script>
  $(function () {
    var swiper = new Swiper('#testimonials .swiper-container', {
      pagination: {
        el: '.swiper-pagination',
      },
      paginationClickable: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      speed: 600,
      direction: 'vertical',
      slidesPerView: 1,
      spaceBetween: 0,
      mousewheelControl: true,
      autoplay: 2500,
      keyboardControl: true,
      autoplayDisableOnInteraction: false
    });
  })
</script>
@endpush
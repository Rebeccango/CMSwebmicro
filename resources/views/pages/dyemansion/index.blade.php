@extends('layouts.layout')
@section('title')
Dyemansion | Additive manufacturing finishing systems
@stop
@section('meta')
<link rel="canonical" href="{{route('dyemansion.index')}}" />
@stop
@section('description')Based in Munich, DyeMansion offers additive manufacturing finishing system for 3D printed raw
parts. Turn your polymer parts into high-value products now!@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px;  background-image:url({{asset('images/pages/dyemansion/dyemansion-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>DyeMansion</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Turn your 3D printed raw parts into high-value products</h2>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 pb-4 pb-lg-0">
        <div class="d-flex align-items-md-start align-items-center flex-column text-lg-left text-center">
          <h3 class="h1 mx-lg-0 mb-3 mx-auto" style="max-width:500px;">GLOBAL LEADER IN ADDITIVE MANUFACTURING FINISHING
            SYSTEMS
          </h3>
          <p class="lead">Based in Munich, Germany, DyeMansion offers finishing systems that enable you to turn your raw
            3D printed parts into high-value products. Trusted by leading manufacturers around the world across a wide
            range of industries including automotive, medical, retail, eyewear and sports, their finishing systems for
            3D printed polymer parts deliver precision colouring and high-quality finishes for even the most complex
            parts.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="d-flex justify-content-center align-items-center flex-column ml-0 ml-md-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/AV7S7fyDVLA" class="embed-responsive-item" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="videoCaption w-100">Dyemansion: We are DyeMansion</div>
        </div>
      </div>
      <div class="col-12">
        <a href="https://www.cadmicro.com/resources/139/dyemansion-technology-and-portfolio"
          class="btn btn-lg btn-rounded btn-outline-primary mt-4" title="Read the brochure">Learn More <i
            class="ml-3 fas fa-caret-right"></i></a>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="pb-3">
      <h3 class="h1 mx-lg-0 mb-3 mx-auto main-title">DYEMANSION PRINT-TO-PRODUCT WORKFLOW</h3>
      <p class="lead">Our technology starts where the industrial 3D printer stops – from 3D printed raw part to
        high-value finished product in three hours. The combined three-step DyeMansion Print-to-Product workflow enables
        scaling from prototyping or
        small series to high-volume manufacturing and thus closes the manufacturing gap.</p>
    </div>
    <div class="row d-flex align-items-start">
      <div class="col-lg-3 col-12 d-flex flex-column py-5">
        <div class="col-12 h5 align-middle order-1 order-lg-0">
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3">
            <div class="rounded-circle badge-primary text-center lead d-inline-block"
              style="min-width:2rem; height:2rem; line-height:2rem;">1</div>
            <span class="align-middle ml-3">CLEANING</span>
          </div>
        </div>
        <img class="col-12 w-100 order-0 mt-3 0 p-0"
          src="{{asset('images/pages/dyemansion/dyemansion_powershot_c_weiss_rgb.jpg')}}" />
        <h5 class="text-primary text-center order-1 order-lg-0">POWERSHOT C</h5>
        <a href="{{route('dyemansion.powershot-c')}}"
          class="btn btn-rounded btn-outline-primary mt-4 mx-auto order-1 order-lg-0" title="CLEANING">Learn More <i
            class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-3 col-12 d-flex flex-column py-5">
        <div class="col-12 h5 align-middle order-1 order-lg-0">
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3">
            <div class="rounded-circle badge-primary text-center lead d-inline-block"
              style="min-width:2rem; height:2rem; line-height:2rem;">2</div>
            <span class="align-middle ml-3">POLYSHOT SURFACING | PSS</span>
          </div>
        </div>
        <img class="col-12 w-100 order-0 p-0"
          src="{{asset('images/pages/dyemansion/dyemansion_powershot_s_weiss.jpg')}}" />
        <h5 class="text-primary text-center order-1 order-lg-0">POWERSHOT S</h5>
        <a href="{{route('dyemansion.powershot-s')}}"
          class="btn btn-rounded btn-outline-primary mt-4 mx-auto order-1 order-lg-0"
          title="POLYSHOT SURFACING | PSS">Learn More <i class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-3 col-12 d-flex flex-column py-5">
        <div class="col-12 h5 align-middle order-1 order-lg-0">
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3">
            <div class="rounded-circle badge-primary text-center lead d-inline-block"
              style="min-width:2rem; height:2rem; line-height:2rem;">2</div>
            <span class="align-middle ml-3">VAPORFUSE SURFACING | VFS</span>
          </div>
        </div>
        <img class="col-12 w-100 order-0 p-0"
          src="{{asset('images/pages/dyemansion/dyemansion_powerfuse_s_automatic_weiss_rgb.jpg')}}" />
        <h5 class="text-primary text-center order-1 order-lg-0">POWERFUSE S</h5>
        <a href="{{route('dyemansion.powerfuse-s')}}"
          class="btn btn-rounded btn-outline-primary mt-4 mx-auto order-1 order-lg-0"
          title="VAPORFUSE SURFACING | VFS">Learn More <i class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-3 col-12 d-flex flex-column py-5">
        <div class="col-12 h5 align-middle order-1 order-lg-0">
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3">
            <div class="rounded-circle badge-primary text-center lead d-inline-block"
              style="min-width:2rem; height:2rem; line-height:2rem;">3</div>
            <span class="align-middle ml-3">DEEPDYE COLORING | DDC</span>
          </div>
        </div>
        <img class="col-12 w-100 order-0 p-0"
          src="{{asset('images/pages/dyemansion/dyemansion_dm60_mitturm_weiss_rgb.jpg')}}" />
        <h5 class="text-primary text-center order-1 order-lg-0">DM60</h5>
        <a href="{{route('dyemansion.dyemansion-dm60')}}"
          class="btn btn-rounded btn-outline-primary mt-4 mx-auto order-1 order-lg-0"
          title="DEEPDYE COLORING | DDC">Learn More <i class="ml-3 fas fa-caret-right"></i></a>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="pb-3">
      <h3 class="h1 mx-lg-0 mb-3 mx-auto main-title">COMPATIBLE WITH ALL POWDER BED FUSION TECHNOLOGIES</h3>
      <p class="lead">The DyeMansion Print-to-Product workflow is compatible with all common powder-bed technologies.
        All of our finishing
        solutions are designed for AM plastics and specially optimized for PA11, PA12, PA6 or TPU based materials.
        Depending on
        your product, the DyeMansion Print-to-Product workflow can be combined with other finishing options.</p>
    </div>
    <div class="swiper-container" id="dmCompatible">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img class="w-100" src="{{asset('images/pages/dyemansion/admin-ajax.png')}}" /></div>
        <div class="swiper-slide"><img class="w-100" src="{{asset('images/pages/dyemansion/prodways-ajax.png')}}" />
        </div>
        <div class="swiper-slide"><img class="w-100" src="{{asset('images/pages/dyemansion/fasoon-ajax.png')}}" /></div>
        <div class="swiper-slide"><img class="w-100" src="{{asset('images/pages/dyemansion/3ds-ajax.png')}}" /></div>
        <div class="swiper-slide"><img class="w-100" src="{{asset('images/pages/dyemansion/hp-ajax.png')}}" /></div>
        <div class="swiper-slide"><img class="w-100" src="{{asset('images/pages/dyemansion/eos-ajax.png')}}" /></div>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="pb-3">
      <h3 class="h1 mx-lg-0 mb-3 mx-auto main-title">AT HOME IN EVERY INDUSTRY</h3>
      <p class="lead">DyeMansion’s technology enables additive manufacturing applications in every industry. With
        endless applications in
        consumer products, healthcare & medical, automotive and industrial, DyeMansion’s finishing systems turn your raw
        3D
        printed parts into high-value products.</p>
    </div>
    @component('components.ResourceTabs.tabs')
      @slot('cases')
        @component('components.ResourceTabs.resources', ['resources' => [140,141,142,143]]) @endcomponent
      @endslot
    @endcomponent
  </div>
</section>
@stop

@push('after-scripts')
<script>
  var swiper = new Swiper('#dmCompatible', {
      slidesPerView: 5,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      breakpoints: {
        420: {
        slidesPerView: 2,
        },
        640: {
        slidesPerView: 2,
        },
        768: {
        slidesPerView: 3,
        },
        1024: {
        slidesPerView: 4,
        },
      }
    });
</script>
@endpush
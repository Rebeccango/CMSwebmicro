@extends('layouts.layout')
@section('title')
Powerfuse S – Surfaces challenging injection molding | DyeMansion
@stop
@section('meta')
<link rel="canonical" href="{{route('dyemansion.powerfuse-s')}}" />
@stop
@section('description')The clean vapor technology for 3D printed parts with sealed surfaces challenging injection
molding. Solvent certified
for food contact. Industry 4.0 ready. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px;  background-image:url({{asset('images/pages/dyemansion/dyemansion_header_2560x672_powerfuse_s.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>DyeMansion Powerfuse S</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">The clean vapor technology challenging injection molding</h2>
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
    <div class="row d-flex">
      <div class="col-12">
        <div class="d-flex align-items-md-start align-items-start flex-column text-lg-left">
          <h3 class="h1 mx-lg-0 mb-3 main-title mt-0">VAPORFUSE SURFACING WITH DYEMANSION POWERFUSE S</h3>
          <div id="workflow" class="accordion w-100 accordion--arrows accordion--only-one my-4">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#workflow_1" aria-expanded="true"
                    aria-controls="workflow_1">
                    Clean Technology
                  </button>
                </h5>
              </div>
              <div id="workflow_1" class="collapse show" data-parent="#workflow">
                <div class="card-body">
                  <p class="h5 mb-3">FULFILLING ALL INDUSTRIAL HEALTH & SAFETY STANDARDS</p>
                  <p>Our VaporFuse Eco Fluid solvent is approved for the processing of plastics with food contact
                    according to regulation
                    (EU) 10/2011. The solvent is circulated continuously in a closed loop and automatically recovered by
                    the system. This
                    enables a sustainable contact-free process without chemical waste. Operating the Powerfuse S does
                    not require protective
                    clothing against chemical hazards.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#workflow_2"
                    aria-expanded="false" aria-controls="workflow_2">
                    Sealed Injection Molding like Surfaces
                  </button>
                </h5>
              </div>
              <div id="workflow_2" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p class="h5 mb-3">ACROSS ALL GEOMETRIES</p>
                  <p>VaporFuse Surfacing (VFS) delivers sealed and washable parts with injection molding like surfaces. The
                  surface roughness is reduced to a minimum. The entire process chamber is flooded with vapor while undergoing vacuum.
                  This ensures a reproducible
                  processing of complex geometries and internal surfaces. VFS works for all common plastics and particularly for flexible
                  polymers such as TPU, for which
                  mechanical techniques are not suitable.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#workflow_3"
                    aria-expanded="false" aria-controls="workflow_3">
                    Ready for the Future of Manufacturing
                  </button>
                </h5>
              </div>
              <div id="workflow_3" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p>The Powerfuse S is Industry 4.0 ready. The
                  system offers fully automatic loading, connectivity and
                  batch tracking features. Validated and specially developed
                  programs for all common materials are available and ready
                  to use. In addition, all process parameters can be adapted
                  individually for other materials. This ensures flexibility and a
                  seamless integration with existing production processes
                  such as the DyeMansion Print-to-Product workflow.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <p class="h5 mb-4">VAPORFUSE</p>
        <div class="cocoen card shadow-sm mb-4">
          <img src="{{asset('images/pages/dyemansion/DyeMansion_depowdered_raw_MJF.jpg')}}" alt="">
          <img src="{{asset('images/pages/dyemansion/DyeMansion_VaporFuse Surfacing_MJF.jpg')}}" alt="">
          <div class="cocoen-ba">
            <div>before</div>
            <div>after</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="d-flex justify-content-between align-items-center mb-3"><span class="h5 mb-0">VAPORFUSE + DEEPDYE</span> <a
            href="{{route('dyemansion.dyemansion-dm60')}}" class="btn btn-outline-primary btn-sm btn-rounded">Learn More</a>
        </div>
        <div class="cocoen card shadow-sm mb-4">
          <img src="{{asset('images/pages/dyemansion/DyeMansion_DeepDye Coloring (only)_MJF.jpg')}}" alt="">
          <img src="{{asset('images/pages/dyemansion/DyeMansion_VaporFuse_DeepDye Coloring_MJF.jpg')}}" alt="">
          <div class="cocoen-ba">
            <div>before</div>
            <div>after</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="h1 mb-5 main-title">INSIDE THE POWERFUSE S: HOW VAPORFUSE SURFACING WORKS</h3>
        <p class="lead">Powered by DyeMansion’s VaporFuse Surfacing (VFS) technology, the Powerfuse S offers the most
          efficient process on the
          market to achieve the best end-use part finish. It delivers such high quality surface finish on 3D printed
          parts that
          they easily rival injection molded parts.</p>
        <a href="https://www.cadmicro.com/resources/146/dyemansion-powerfuse-s-datasheet"
          class="btn btn-lg btn-rounded btn-outline-primary my-3" title="Download the Datasheet">Download Datasheet <i
            class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-6 ">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/2Z-WFP51t0Y" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">Dyemansion: VaporFuse Surfacing I Inside the Powerfuse S</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <h3>DISCOVER THE POWERFUSE S ALL AROUND</h3>
      <div class="section-title-divider"></div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-7">
        <div class="spritespin w-100"></div>
      </div>
      <div class="col-12 col-lg-5">
        <h3 class="h1 mb-5 main-title">Sample Surfacing Results</h3>
        <div id="gallery2" style="display:none; width:100%; max-width:600px">
          <img src="{{asset('images/pages/dyemansion/galerie_ol.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/galerie_ol.jpg')}}">
            <img src="{{asset('images/pages/dyemansion/DyeMansion_MJF_white_colored_boulder_stone1.jpg')}}"
              data-image="{{asset('images/pages/dyemansion/DyeMansion_MJF_white_colored_boulder_stone1.jpg')}}">
          <img src="{{asset('images/pages/dyemansion/galerie_gro_2.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/galerie_gro_2.jpg')}}">
          <img src="{{asset('images/pages/dyemansion/galerie_ul.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/galerie_ul.jpg')}}">
          <img src="{{asset('images/pages/dyemansion/galerie_or-1.png')}}"
            data-image="{{asset('images/pages/dyemansion/galerie_or-1.png')}}">
          <img src="{{asset('images/pages/dyemansion/galerie_ur-1.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/alerie_ur-1.jpg')}}">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary py-5">
  <div class="section-title center-block mx-auto">
    <h3>MORE ABOUT THE POWERFUSE S</h3>
    <div class="section-title-divider"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 py-3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/V1sfIh9O0E8" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">Unveiling of the Powerfuse S at Formnext 2019</div>
      </div>
      <div class="col-lg-6 py-3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/9Zlfjn7qmoA" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">CTO Philipp Kramer about the Industry 4.0 ability of the Powerfuse S</div>
      </div>
    </div>
  </div>
</section>
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
      <h3 class="h1 mx-lg-0 mb-3 mx-auto main-title">TECHNICAL DATA</h3>
    </div>
    <div id="technical" class="accordion w-100 accordion--arrows accordion--only-one my-4">
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#technical_1" aria-expanded="true"
              aria-controls="technical_1">
              Performance
            </button>
          </h5>
        </div>
        <div id="technical_1" class="collapse show" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">Cycle time</td>
                <td style="text-align: left;">40-80 minutes</td>
              </tr>
              <tr>
                <td style="text-align: left;">Process chamber volume</td>
                <td style="text-align: left;">129l <span style="color: #999999;">| 34.1gal</span></td>
              </tr>
              <tr>
                <td style="text-align: left;">Basket dimensions (L x W x H)</td>
                <td style="text-align: left;">610mm x 340mm x 315mm (385mm) <span style="color: #999999;">| 24.0inch x
                    13.4inch x
                    12.4inch (15.1inch)</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_2"
              aria-expanded="false" aria-controls="technical_2">
              Dimensions
            </button>
          </h5>
        </div>
        <div id="technical_2" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">System (L x W x H)</td>
                <td style="text-align: left;">Powerfuse S: 1700mm x 1700mm x 2090mm <span style="color: #999999;">|
                    66.9inch x
                    66.9inch x 82.3inch</span><br>
                  Automatic loading: 960mm x 3466mm x 1300mm<span style="color: #999999;">| 37.8inch x 136.5inch x
                    51.2inch</span><br>
                  Manual loading: 705mm x 1700mm x 850mm <span style="color: #999999;">| 27.8inch x 66.9inch x
                    33.5inch</span></td>
              </tr>
              <tr>
                <td style="text-align: left;">Recommended space requirement for operations (L x W x H)</td>
                <td style="text-align: left;">Automatic loading: 3760mm x 4266mm x 2500mm <span
                    style="color: #999999;">| 148.0inch
                    x 168.0inch x 98.4inch</span><br>
                  Manual loading: 3505mm x 3300mm x 2500mm <span style="color: #999999;">| 138.0inch x 129.9inch x
                    98.4inch</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_3"
              aria-expanded="false" aria-controls="technical_3">
              Weight
            </button>
          </h5>
        </div>
        <div id="technical_3" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">System</td>
                <td style="text-align: left;">1600kg <span style="color: #999999;">| 3527lb</span></td>
              </tr>
              <tr>
                <td style="text-align: left;">Automatic loading</td>
                <td style="text-align: left;">800kg <span style="color: #999999;">| 1764lb</span></td>
              </tr>
              <tr>
                <td style="text-align: left;">Manual loading</td>
                <td style="text-align: left;">180kg <span style="color: #999999;">| 397lb</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_4"
              aria-expanded="false" aria-controls="technical_4">
              Power
            </button>
          </h5>
        </div>
        <div id="technical_4" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">Supply</td>
                <td style="text-align: left;">14,1kW</td>
              </tr>
              <tr>
                <td style="text-align: left;">Requirements</td>
                <td style="text-align: left;">400V, 50Hz, 63A or 480V, 60Hz, 63A</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_5"
              aria-expanded="false" aria-controls="technical_5">
              Compressed Air
            </button>
          </h5>
        </div>
        <div id="technical_5" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">Consumption</td>
                <td style="text-align: left;">Approx. 70l | <span style="color: #999999;">78.5gal</span> at 6bar | <span
                    style="color: #999999;">87psi</span> per run</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_6"
              aria-expanded="false" aria-controls="technical_6">
              Noise Emission
            </button>
          </h5>
        </div>
        <div id="technical_6" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">Sound level</td>
                <td style="text-align: left;">&lt;70dB(A)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_7"
              aria-expanded="false" aria-controls="technical_7">
              Certification
            </button>
          </h5>
        </div>
        <div id="technical_7" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">CE</td>
                <td style="text-align: left;">2006/42/EG<br />2014/68/EU</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-styles')
<link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/npm/cocoen@2.0.5/dist/css/cocoen.min.css'>
<link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.css')}}'
  type='text/css' />
<link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/css/unite-gallery.css')}}' type='text/css' />
@endpush

@push('after-scripts')
<script src='https://cdn.jsdelivr.net/npm/cocoen@2.0.5/dist/js/cocoen.min.js'></script>
<script src='https://unpkg.com/spritespin@x.x.x/release/spritespin.js' type='text/javascript'></script>
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/js/unitegallery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.js')}}'>
</script>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    new Cocoen(document.querySelector('.cocoen'));

    document.querySelectorAll('.cocoen').forEach(function(element){
      new Cocoen(element);
    });
  })

  $(function()
  {
    var gallery = jQuery("#gallery2").unitegallery({
      theme_enable_text_panel: false,
      carousel_autoplay: true,
      gallery_width: "100%",
    });


    $('.spritespin').spritespin({
      source: SpriteSpin.sourceArray('https://dyemansion.com/wp-content/uploads/spin360show/TurntablePFS_update2/{frame}.png', {
      frame: [1,34],
      digits: 4
      }),
      width: 500,
      height: 500,
      sense: 1,
      frame: 0,
      frames: 34,
      responsive:true,
      loop:true,
      frameTime:'200',
      animate: true,
      orientation: 'horizontal',
      plugins: [
        'progress',
        '360',
        'drag'
      ]
      });
    })
</script>
@endpush
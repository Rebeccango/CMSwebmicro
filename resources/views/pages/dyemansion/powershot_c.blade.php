@extends('layouts.layout')
@section('title')
Powershot C – Powder removal of 3D-parts | DyeMansion
@stop
@section('meta')
<link rel="canonical" href="{{route('dyemansion.powershot-c')}}" />
@stop
@section('description')Damage-preventive part cleaning of additive manufactured plastics to remove excess powder from
most 3D-parts. Prevent damage and form basis for coloring now!@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('images/pages/dyemansion/dyemansion_header_2560x672_powershot_c.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>DyeMansion Powershot C</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">EASY AND EFFICIENT PART CLEANING</h2>
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
      <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12">
        <div class="d-flex align-items-md-start align-items-start flex-column text-lg-left">
          <h3 class="h1 mx-lg-0 mb-3 main-title mt-0" style="max-width:500px;">CLEANING WITH DYEMANSION
          POWERSHOT C</h3>
          <div id="workflow" class="accordion w-100 accordion--arrows accordion--only-one my-4">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#workflow_1" aria-expanded="true"
                    aria-controls="workflow_1">
                    Increase of Productivity
                  </button>
                </h5>
              </div>

              <div id="workflow_1" class="collapse show" data-parent="#workflow">
                <div class="card-body">
                  Using the DyeMansion Powershot C, up to 75% of an EOS P396 or full HP Jet Fusion 4200/5200 job can be
                  cleaned in only
                  ten minutes. Time needed for cleaning and personnel costs can be reduced in a significant way and
                  therefore improve the
                  efficiency. A configurable timer allows a constant batch processing and parts can be processed much
                  faster.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#workflow_2"
                    aria-expanded="false" aria-controls="workflow_2">
                    Gentle Surface Treatment
                  </button>
                </h5>
              </div>
              <div id="workflow_2" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  Compared to manual blasting cabins the DyeMansion Powershot C is equipped with a rotating basket and
                  is manufactured
                  from stainless steel. Two simultaneously working blasting nozzles, that are positioned perpendicular
                  to the rotating
                  basket and the contained parts, remove the powder in an efficient way. A fixed distance between the
                  parts and the
                  blasting nozzles ensures reproducible results without damaging the parts during the process.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#workflow_3"
                    aria-expanded="false" aria-controls="workflow_3">
                    Saving Space in the Production
                  </button>
                </h5>
              </div>
              <div id="workflow_3" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  By investing in automated part cleaning with the DyeMansion Powershot C, up to four manual blasting
                  systems can be
                  replaced. In addition to the resulting lower operating costs, investment costs are saved to the extent
                  that the
                  investment and maintenance costs only affect one system.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="cocoen card shadow-sm mb-4">
          <img src="{{asset('images/pages/dyemansion/before_non_depowdered.jpg')}}" alt="" title="Before Depowdering">
          <img src="{{asset('images/pages/dyemansion/after_depowdered.jpg')}}" alt="" title="After Depowedering">
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
        <h3 class="h1 mb-5 main-title">INSIDE THE POWERSHOT C</h3>
        <p class="lead">The DyeMansion Powershot C enables you to clean a full HP Jet Fusion 4200 or 5200 print job in
          only 10 minutes, allowing
          you to print and process more parts in a fraction of the time and significantly reduce the personnel costs
          associated
          with manual cleaning of your parts.</p>

        <a href="https://www.cadmicro.com/resources/144/dyemansion-powershot-c-datasheet"
          class="btn btn-lg btn-rounded btn-outline-primary my-3" title="Download the Datasheet">Download Datasheet <i
            class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-6 ">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/IMwTrAeq84k" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">Cleaning I Inside the Powershot C</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <h3>DISCOVER THE POWERSHOT C ALL AROUND</h3>
      <div class="section-title-divider"></div>
    </div>
    <div class="spritespin w-100"></div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <h3 class="h1 mb-5 main-title">CAPACITY PER RUN: MID SIZED BUILD JOB (E.G. 3/4 OF EOS P396 OR FULL HP JET FUSION 4200/5200)</h3>
    <div class="row">
      <div class="col-lg-5">
        <p class="lead h3">SPECIAL NOZZLE SET-UP & AUTOMATED BLASTING MEDIA CLEANING</p>
        <p class="lead">The combination of blasting and ionizing nozzles achieve powder-free parts in just a few
          minutes. The adjustable high
          performance cyclone separates the excess powder from blasting media and enables consistent blasting results.
        </p>
      </div>
      <div class="col-lg-7">
        <img class="img-fluid" alt="korb_psc_en" title="korb_psc_en" width="1559" height="897"
      src="{{asset('images/pages/dyemansion/korb_psc_en.jpg')}}">
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
                <td style="text-align: left;">Variable, typically 3 to 10 minutes</td>
              </tr>
              <tr>
                <td style="text-align: left;">Capacity per run</td>
                <td style="text-align: left;">Mid sized build job (e.g. 3/4 of EOS P396 or full HP Jet Fusion 4200/5200)
                </td>
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
                <td style="text-align: left;">1665mm x 1300mm x 2030mm <span style="color: #999999;">| 65.6inch x
                    51.2inch x
                    79.9inch<br>
                  </span></td>
              </tr>
              <tr>
                <td style="text-align: left;">Recommended space for operations (L x W x H)</td>
                <td style="text-align: left;">2465mm x 2915mm x 2300mm <span style="color: #999999;">| 97.0inch x
                    114.8inch x
                    90.6inch<br>
                  </span></td>
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
                <td style="text-align: left;">520kg&nbsp; <span style="color: #999999;">| 1146lb<br></span></td>
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
                <td style="text-align: left;">1kW</td>
              </tr>
              <tr>
                <td style="text-align: left;">Requirements</td>
                <td style="text-align: left;">400V, 50Hz, 16A or 208V, 60Hz, 20A</td>
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
                <td style="text-align: left;"><p><strong>Minimum</strong>: 1.4m<sup>3</sup>/min at 2.2bar <span
                    style="color: #999999;">|
                    50cfm at 32psi</span>
                  </p>
                  <p><strong>Maximum</strong>: 1.8m<sup>3</sup>/min at 5bar <span style="color: #999999;">| 64cfm at
                      73psi</span></p>
                </td>
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
                <td style="text-align: left;">&lt;85dB(A)</td>
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
                <td style="text-align: left;">2006/42/EG</td>
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
@endpush

@push('after-scripts')
<script src='https://cdn.jsdelivr.net/npm/cocoen@2.0.5/dist/js/cocoen.min.js'></script>
<script src='https://unpkg.com/spritespin@x.x.x/release/spritespin.js' type='text/javascript'></script>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    new Cocoen(document.querySelector('.cocoen'));

    document.querySelectorAll('.cocoen').forEach(function(element){
      new Cocoen(element);
    });
  })

  $(function()
  {
    $('.spritespin').spritespin({
      source: SpriteSpin.sourceArray('https://dyemansion.com/wp-content/uploads/spin360show/TurntablePSC_update/{frame}.png', {
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
@extends('layouts.layout')
@section('title')
SolidWorks Visualize
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-otherProducts-visualize')}}" />
@stop
@section('description')Turn your 3D CAD data into photo-quality images, animations, and interactive 3D content that
bring your products to
life.@stop
@section('keywords')SolidWorks, Visualize, Visualization, Rendering, 3D Designer @stop
@push("before-styles")
<link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.css')}}'
  type='text/css' />
<link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/css/unite-gallery.css')}}' type='text/css' />
<style>
  .custom-list p {
    margin: 0 !important;
    font-size:16px !important;
  }

  .custom-list img {
    width: 13px;
    vertical-align: top;
    margin-top: 2px;
  }
</style>
@endpush
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/images/visualize2.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SolidWorks Visualize</h1>
          <div class="section-title-divider"></div>
        </div>
        <div>
          <p class="parallax-section__description">Turn your 3D CAD data into photo-quality images, animations, and
            interactive 3D content that bring your products to
            life.</p>
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
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2 class="mb-4">Seriously easy to use! Best speed-to-quality on the market</h2>
        <p class="lead">
          The fastest and easiest way to photorealistic imagery for anyone that needs to take "photos" of their 3D
          data.
        </p>
        <p class="lead">
          Which better helps describe a concept? A technical drawing or a computer generated image that looks
          identical to a photograph? To make the right design and engineering decisions, photo-quality content has
          become the new benchmark.
        </p>
        <p class="lead">
          SolidWorks® Visualize Standard enables designers, engineers, and content creators across all industries to
          create compelling visual content of their designs with unparalleled ease and flexibility. By utilizing
          photo-quality content early in the design process, more informed design decisions can be made, as well as
          receiving useful early feedback from sales teams and potential customers.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/RheYdgB-ynw" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">What's New in SOLIDWORKS 2021 - Visualize</div>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary py-5">
  <div class="container-fluid py-5">
    <div class="section-title center-block mx-auto mb-0 text-center mb-5">
      <h2>SolidWorks Visualize Standard features include:</h2>
      <div class="section-title-divider"></div>
    </div>
    <ul class="lead list-unstyled list-group w-full shadow-sm">
      <li class="list-group-item d-flex flex-row d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Photo-quality imagery at unlimited resolution
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Advanced multi-layer materials
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Highlight design and engineering solutions by fading the Opacity of parts and models
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Accurate simulation of real-world lighting with HDR support for photorealism without cumbersome manual
        lighting techniques
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Show off inner design complexity with Cut Planes (section views)
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Integrated connection to our FREE online Community of over 1000 free assets
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Decals (interactive stickers) placement just like real life stickers
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Support for professional Texture Maps (Bump, Normal, Specular, Alpha, Color)
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Interactive Part Splitter for separating surfaces without going back to CAD modeling package
      </li>
      <li class="list-group-item d-flex flex-row">
        <i class="fas fa-check mr-3 mt-1"></i>Preset Camera Filters to enhance your images and make them pop off the screen
      </li>
    </ul>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title center-block mx-auto mb-0 text-center mb-4">
      <h2>Which SOLIDWORKS Visualize package is right for you?</h2>
      <div class="section-title-divider"></div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-12 col-md-4 col-lg-4 d-flex flex-fill">
        <div class="card w-full p-3 d-flex flex-fill">
          <img class="card-img-top"
            src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-ProductCard-DriveWorksXpress.webp">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">SOLIDWORKS Visualize Standard</h3>
            <p class="card-text flex-fill">
              SOLIDWORKS Visualize Standard is the fastest and easiest way to produce photo-quality images for taking
              “photos” of 3D data, cutting costs, and accelerating time-to-market with compelling imagery.</p>
            <button class="btn btn-primary rounded-pill btn-dialog" id="contact" data-toggle="modal"
              data-target="#contactModal" data-type="contact">Learn more</button>
          </div>
        </div>
      </div>
      <div class="col col-12 col-md-4 col-lg-4 d-flex flex-fill">
        <div class="card w-full p-3 d-flex flex-fill">
          <img class="card-img-top"
            src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-ProductCard-DriveWorksSolo.webp">
          <div class="card-body d-flex flex-column">
            <h3 class="card-title">SOLIDWORKS Visualize Professional</h3>
            <p class="card-text flex-fill">
              SOLIDWORKS Visualize Professional lets you tell a deeper story with your CAD data by generating
              photo-quality imagery, interactive animations, 360-degree spins, immersive Virtual Reality (VR), and much
              more. Communicate the
              most complex design details with ease and beat your competition to market.</p>
            <button class="btn btn-primary rounded-pill btn-dialog" id="contact" data-toggle="modal"
              data-target="#contactModal" data-type="contact">Learn more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary py-5">
  <div class="container-fluid py-5">
    <div class="section-title center-block mx-auto mb-0 text-center mb-4 ">
      <h3>SolidWorks Visualize Professional Advantages:</h3>
      <div class="section-title-divider"></div>
      <p class="lead mx-auto" style="max-width:700px;">
        SOLIDWORKS Visualize Professional features include all Visualize Standard features plus these and many more:
      </p>
    </div>
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <table class="custom-list" style="margin-left:20px; width:410px">
        <tbody>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Send jobs to a dedicated cluster of machine(s) to boost render speeds and
                content productivity with the new Visualize Boost network rendering...<strong>one seat included with
                  each Visualize Professional purchase!</strong></p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Demonstrate products more effectively with full animation of parts, models,
                appearances, cameras, and environments</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Easily Import SOLIDWORKS Motion Studies for truly photographic content in a
                snap.</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Quickly show off the final design with one-click 360 degree spins</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Intuitively create dynamic camera fly-bys in a snap with the unique
                Camera Animation Ribbon</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Highlight design and engineering solutions by fading the Opacity of parts
                and models, with support for animation for revealing videos</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Rapidly generate colorways and product variants using Con&shy; figurations
              </p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Create interactive web content (VR and Panoramas)</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Show off inner design complexity with Cut Planes (section views) and ability
                to animate them for an immersive experience</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Instantly increase productivity with the integrated Render QUEUE by stacking
                up multiple jobs and letting them complete while you're away</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Present and compare varying design solutions side by side with multiple
                viewports</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Unleash your creative side with customizable Camera Filters</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Enhance the lighting of your scene with integrated advanced lighting and
                environment features, like Sun Studies</p>
            </td>
          </tr>
          <tr>
            <td style="padding-top: 10px;" valign="top"><img alt="" src="{{asset('storage/icons/list-bullet.png')}}">
            </td>
            <td style="padding-top: 10px;" valign="top">
              <p style="font-size:12px">Present designs in real time with new Presentation Mode and Adjustable Baked
                lighting for interactive presentations</p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="text-align:center;" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <img style="margin-top:30px;" src="{{asset('storage/images/SolidWorks/Rendering/PowerBoost-screenshot.png')}}" />
      <img style="margin-top:30px;"
        src="{{asset('storage/images/SolidWorks/Rendering/Professional_Tab_secondary-imagev2.jpg')}}" />
      <img style="margin-top:30px;" src="{{asset('storage/images/SolidWorks/Rendering/visualize-trans-20.jpg')}}" />
    </div>
    </div>
  </div>
</section>
<section class="py-5">
  <div class="container-fluid text-center py-4">
    <div clss="text-center">
      <img src="https://www.lightmap.co.uk/dynamic_resources/connection_pages/7/logo_image.png" />

      <h4 class="h3 mt-5">HDR Light Studio for SOLIDWORKS Visualize</h4>
      <p class="lead">
        Create the perfect HDRI environment in minutes with HDR Light Studio. Lighting shots is now fast, precise and
        easy. Simply click on the model in SOLIDWORKS Visualize to position lights on a live HDRI.
      </p>
  </div>
</section>
<hr/>
<section class="py-5">
  <div class="container-fluid py-5">
      <div class="section-title center-block mx-auto mb-0 text-center mb-4">
        <h4>How does HDR Light Studio work with SOLIDWORKS Visualize?</h4>
        <div class="section-title-divider"></div>
      </div>
      <img class="w-100 my-5 d-none d-md-block"
        src="https://www.lightmap.co.uk/dynamic_resources/connection_pages/7/workflow_image.jpg" />
    <p class="lead">
      The model has materials applied, the camera view is setup, you are now ready to light…
    </p>
    <ul class="lead list-group list-group-flush">
      <li class="list-group-item d-flex flex-row"><strong class="mr-4">1.</strong> Start HDR Light Studio from the SOLIDWORKS Visualize environment
      <li class="list-group-item d-flex flex-row"><strong class="mr-4">2.</strong> Load an existing HDRI map to edit, or start with a blank canvas
      <li class="list-group-item d-flex flex-row"><strong class="mr-4">3.</strong> Add a new lights in HDR Light Studio
      <li class="list-group-item d-flex flex-row"><strong class="mr-4">4.</strong> Click on the 3D model in SOLIDWORKS Visualize to position lights
      <li class="list-group-item d-flex flex-row"><strong class="mr-4">5.</strong> To finish, HDR Light Studio generates a high-res HDRI map for the SOLIDWORKS Visualize environment
      <li class="list-group-item d-flex flex-row"><strong class="mr-4">6.</strong> The SOLIDWORKS Visualize scene is now ready for final rendering
    </ul>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="custom-nav-pills mb-5">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#whatsnew" role="tab">What's New</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#gallery" role="tab">Gallery</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="matrix" role="tabpanel">
          @include('pages.matrix.solidworks-visualize')
        </div>
        <div class="tab-pane fade" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2018/visualize_2018.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2018/visualize_2018.png')}}" style="width:100%;"
                      alt="SOLIDWORKS Visualize">
                  </div>
                  <figcaption>SolidWorks Visualize</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        {{-- <div class="tab-pane fade" id="whatsnew" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 Design to Manufacture.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 Design to Manufacture.png')}}"
                      style="width:100%;" alt="SOLIDWORKS Design to Manufacturing Top 10 in 2020">
                  </div>
                  <figcaption>SOLIDWORKS Design to Manufacturing Top 10 in 2020</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div> --}}
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/RheYdgB-ynw" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">What's New in SOLIDWORKS 2021 - Visualize</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/UFhpeZD7-kM" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">SOLIDWORKS Visualize Quick Tips - Turntable Animation</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/n7vgb18nCNo" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">SOLIDWORKS Visualize Pro Tip Series - Episode 1</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/zfE4r5fDovA" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">First Look at SOLIDWORKS Visualize - SOLIDWORKS</div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active in" id="gallery" role="tabpanel">
          <div id="gallery2" style="display:none; width:100%">
            <img alt="Visualize Image 1"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-01-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-01-large.jpg')}}">

            <img alt="Visualize Image 2"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-02-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-02.jpg')}}">

            <img alt="Visualize Image 3"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-04-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-04.jpg')}}">

            <img alt="Visualize Image 4"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-05-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-05.jpg')}}">

            <img alt="Visualize Image 5"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-06-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-06.jpg')}}">

            <img alt="Visualize Image 6"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-07-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-07.jpg')}}">

            <img alt="Visualize Image 7"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-09-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-09.jpg')}}">

            <img alt="Visualize Image 8"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-11_THUMBNAIL.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-11_MEDIUM.jpg')}}">

            <img alt="Visualize Image 9"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-13-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-13.jpg')}}">

            <img alt="Visualize Image 10"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-14-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-14.jpg')}}">

            <img alt="Visualize Image 11"
              src="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-15-v2.jpg')}}"
              data-image="{{asset('storage/images/SolidWorks/Rendering/gallery/Visualize-15.jpg')}}">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container d-flex justify-content-center align-items-center flex-column py-5">
    <div class="section-title mb-2">
      <h4 class="h1">Learn More About SolidWorks Visualize</h4>
      <div class="section-title-divider"></div>
    </div>
    <button id="contact" data-toggle="modal" data-target="#contactModal" data-type="contact"
      data-title="Contact Request Form" class="btn btn-lg btn-white btn-rounded btn-dialog mx-2">Contact
      Us</button>
  </div>
</section>
@stop

@push('after-scripts')
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/js/unitegallery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.js')}}'>
</script>
<script type="text/javascript">
  jQuery(document).ready(function(){
      jQuery("#gallery2").unitegallery({
        theme_enable_text_panel: false,
        gallery_width:"100%",
      });
    });
</script>
@endpush
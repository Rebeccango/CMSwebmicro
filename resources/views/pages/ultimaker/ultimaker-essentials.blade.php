@extends('layouts.layout')
@section('title')
Ultimaker Essentials
@stop
@section('meta')
<link rel="canonical" href="{{route('ultimaker-essentials')}}" />
@stop
@section('description')Scale the benefits of 3D printing across your business with software that empowers designers and
engineers, but is
dedicated to enterprise stability and control.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/images/ultimaker/hero/hero-3.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn">
          <h1>ULTIMAKER ESSENTIALS</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">3D printing software that's built for business</h2>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-5 col-sm-12 mt-0 mt-sm-3" style="height:600px">
        <img class="" width="100%" height="auto" class="m-auto"
          src="{{asset('images/pages/ultimaker/ultimaker-essentials-3d-printing-software.webp')}}" />
      </div>
      <div class="col-md-7 col-sm-12 text-center text-md-left">
        <h2 class="h2 mb-3">An enterprise-grade 3D printing software package to scale the benefits of 3D printing across
          your business</h2>
        <p class="lead mb-4">Ultimaker Essentials is a software subscription that bundles 5 transformational products
          into
          one enterprise grade
          subscription plan. Scale the benefits of 3D printing across your business with a software package that
          empowers
          designers and engineers, but that’s dedicated to enterprise stability and control.</p>
        <div class="card-title h4">Software launch event: Let’s get back to essentials...</div>
        <a href="https://www.youtube.com/watch?v=CVYAayV04GA" class="mp-popup-video mp-single"
          style="text-decoration: none">
          <div class="card-link btn btn-lg btn-primary rounded-pill"><i class="fas fa-arrow-circle-right mr-1"></i>
            WATCH
            VIDEO NOW
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="h5 text-muted mb-3 text-center">Ultimaker Essentials</div>
  <h3 class="h1 mb-3 text-center mb-5">Includes</h3>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-5 col-sm-12 order-1 order-md-0 py-4">
        <img class="" width="100%" height="auto" class="m-auto"
          src="{{asset('images/pages/ultimaker/ultimaker-remote-printing.webp')}}" />
      </div>
      <div class="col-md-7 col-sm-12 text-center text-md-left mt-5 order-0 order-md-1 px-5">
        <h2 class="display-4 mb-3">Ultimaker Cura Enterprise</h2>
        <p class="lead">Distribute stable, secure software that drives innovation.</p>
        <p>The simplest and most seamless print preparation experience is now packaged for business. Designed to meet
          your IT
          department's expectations, distribute a tested, stable, and more secure slicing application to anywhere
          employees need
          to work – with reduced risk to your infrastructure. Features include:</p>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-5 col-sm-12 order-1 order-md-1 py-4">
        <img class="" width="100%" height="auto" class="m-auto"
          src="{{asset('images/pages/ultimaker/digital-factory-printers.webp')}}" />
      </div>
      <div class="col-md-7 col-sm-12 text-center text-md-left order-0 order-md-0 px-5">
        <h2 class="display-4 mb-3">Ultimaker Digital Factory</h2>
        <p class="lead">Manage and control your 3D printing workflow to effectively scale-up your 3D printing output.
        </p>
        <p>Set up multiple printers based on your workflow. See an overview of printers, material configurations, print
          jobs, and
          firmware versions for easy printer management.</p>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-5 col-sm-12 order-1 order-md-0 py-4">
        <img class="" width="100%" height="auto" class="m-auto"
          src="{{asset('images/pages/ultimaker/ultimaker-marketplace.webp')}}" />
      </div>
      <div class="col-md-7 col-sm-12 text-center text-md-left mt-5 order-0 order-md-1 px-5">
        <h2 class="display-4 mb-3">Ultimaker Marketplace</h2>
        <p class="lead">Tailor your 3D printing experience with plug-ins and print profiles.</p>
        <p>With the managed Ultimaker Marketplace, users can download plugins to improve their 3D printing workflow. But
          only
          verified plugins are available – to increase infrastructure stability and security. This includes plugins
          exclusive to
          Ultimaker Essentials subscribers – such as Teton Simulation's Smart Slice.</p>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-5 col-sm-12 order-1 order-md-1 py-4">
        <img class="" width="100%" height="auto" class="m-auto"
          src="{{asset('images/pages/ultimaker/ultimaker-academy.webp')}}" />
      </div>
      <div class="col-md-7 col-sm-12 text-center text-md-left order-0 order-md-0 px-5">
        <h2 class="display-4 mb-3">Ultimaker 3D Printing Academy</h2>
        <p class="lead">Maximize the value of 3D printing with a flexible online learning platform.</p>
        <p>The Ultimaker 3D Printing Academy is a flexible learning platform that teaches you the ins and outs of 3D
          printing,
          spotlighting its value – whenever, wherever. Courses created by Ultimaker's experts enable you to train your
          users with
          leveled, role-specific certifications, ensuring your organization is using 3D printing technology to maximum
          effect.</p>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-5 col-sm-12 order-1 order-md-0 py-4">
        <img class="" width="100%" height="auto" class="m-auto"
          src="{{asset('images/pages/ultimaker/ultimaker-academy.webp')}}" />
      </div>
      <div class="col-md-7 col-sm-12 text-center text-md-left order-0 order-md-1 px-5">
        <h2 class="display-4 mb-3">Ultimaker Support</h2>
        <p class="lead">360’ business support – and the knowledge to implement it.</p>
        <p>If you need assistance, simply log a ticket with our Ultimaker Essentials helpdesk. Get help via email from
          an Ultimaker
          technician whenever you need to troubleshoot software-related issues.</p>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container">
    <div class="h5 text-muted mb-3 text-center">Your choice of 3D printing service and learning</div>
    <h3 class="h1 mb-3 text-center mb-5">Choose from three levels tailored to your business</h3>
    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th class="text-center">Light</th>
          <th class="text-center">Standard</th>
          <th class="text-center">Advanced</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-secondary">
          <td colspan="4" class="h5">Software features</td>
        </tr>
        <tr>
          <td>User access management</td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr>
          <td>Remote printing</td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr>
          <td>Security features</td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr>
          <td>Verified plugins</td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr class="table-secondary">
          <td colspan="4" class="h5">Learning</td>
        </tr>
        <tr>
          <td>Associate Courses</td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr>
          <td>Multiple Users</td>
          <td></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr>
          <td>Professional Courses</td>
          <td></td>
          <td></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr class="table-secondary">
          <td colspan="4" class="h5">Service</td>
        </tr>
        <tr>
          <td>Advanced IT knowledge base</td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr>
          <td>Direct support</td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr>
          <td>Faster support response</td>
          <td></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
        <tr>
          <td>24-hour support</td>
          <td></td>
          <td></td>
          <td class="text-center"><i class="fas fa-check text-primary"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<section class="bg-primary text-white d-flex align-items-center justify-content-center flex-column">
  <h4 class="h1 mb-3 text-center mb-2">Interested in Ultimaker Essentials?</h4>
  <button class="btn btn-lg btn-white rounded-pill btn-dialog" data-toggle="modal"
    data-target="#ultimakerEssentialsModal">Learn More</button>
</section>

@endsection

@push('before-scripts')
<div class="modal fade" tabindex="-1" role="dialog" id="ultimakerEssentialsModal"
  aria-labelledby="ultimakerEssentialsModal">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="demoContactModalLabel">Learn more about Ultimaker Essentials</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body p-4">
        <div class="loaderSpinner"></div>
        <div data-form-block-id="18dd6bb6-101e-eb11-a813-0022480822ca"></div>
        <div id="dGlmyEjDWXCkKJrOmQK6aovncOmeP8F4DyoHZCcZmOmM"></div>
      </div>
    </div>
  </div>
</div>
@endpush
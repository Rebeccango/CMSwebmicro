@extends('layouts.layout')
@section('title')
CamWorks
@stop
@section('meta')
<link rel="canonical" href="{{route('camWorks')}}" />
@stop
@section('description')CAMWorks is a fully integrated CAM solution for SOLIDWORKS. Computer-aided manufacturing made
easy with knowledge based
machining and automatic feature recognition. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/camworks-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="">CamWorks</h1>
          <div class="section-title-divider"></div>
        </div>
        <div>
          <p class="parallax-section__description">An intuitive, fully integrated computer-aided manufacturing (CAM)
            solution for SOLIDWORKS. Program smarter and machine
            faster with CAMWorks.</p>
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
    <div class="section-block row d-flex justify-content-center align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2>Why CAMWorks?</h2>
        <br />
        <p class="lead">A certified SOLIDWORKS Gold Partner Product, CAMWorks is the first CAM solution to offer true
          knowledge-based
          machining
          capabilities fully integrated with SOLIDWORKS. Advancements in Automatic Feature Recognition (AFR) and
          Interactive
          Feature Recognition (IFR) create true associative machining where changes to the part model are automatically
          accommodated. Changes to the design are automatically updated in the CAM data, eliminating time consuming
          rework.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 Right">
        <img src="{{asset('storage/images/partner/tolerance-based-machining-screenshot.png')}}" style="width:100%;"
          alt="Product Matrix PDF">
      </div>
    </div>
  </div>
</section>

<section class="section-secondary p-5">
  <div class="container-fluid">
    <h2 class="" style="margin-top:0;">CAMWorks Features</h2>
    <p class="lead mb-5">Advanced Smart Manufacturing Through Integrated CAM</p>
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex flex-column">
        <div class="mb-3">
          <h4>Program Smarter</h4>
          <p>Seamless integration within the design environment CAMWorks offers true associative machining automatically
            accommodating changes to the part model, which eliminates time consuming CAM system rework due to design
            updates.</p>
        </div>
        <div class="mb-3">
          <h4>Machine Faster</h4>
          <p>Reduce machining time by as much as 85% and increase tool life by as much as 500% even in the hardest
            materials.</p>
        </div>
        <div class="mb-3">
          <h4>Improve Customization & Setup Time</h4>
          <p>Knowledge-based machining allows you to capture and reuse your best programming practices using the
            Technology Database,
            TechDB™, reducing programming time by as much as 80%.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/rKkVgk4eiFY" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">CAMWorks - Advanced Smart Manufacturing through Integrated CAM Software</div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
      <div
        class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex flex-column align-items-start align-items-md-center justify-content-center text-left text-md-center py-3">
        <h4>Fully Integrated</h4>
        <p class="lead">Embedded in the SOLIDWORKS and Solid Edge interfaces. Eliminate time-consuming CAM rework due to
          design updates.</p>
      </div>
      <div
        class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex flex-column align-items-start align-items-md-center justify-content-center text-left text-md-center py-3">
        <h4>Associative</h4>
        <p class="lead">With CAMWorks, any changes made to the design are automatically updated in the machining
          operations and toolpaths.</p>
      </div>
      <div
        class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex flex-column align-items-start align-items-md-center justify-content-center text-left text-md-center py-3">
        <h4>Feature-Based</h4>
        <p class="lead">Eliminate hours of complex programming by interpreting the design of parts through Automatic
          Feature Recognition.</p>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex flex-column">
        <h2 class="mb-4" style="margin-top:0;">CAMWorks ShopFloor</h2>
        <p class="lead mb-3">CAMWorks ShopFloor enables machinists to leverage digital machining data in part models in
          order to reduce errors and improve communication between shop floor machinists and CNC programmers.</p>
        <p class="lead mb-3">ShopFloor enables you to move beyond traditional methods and move into smart manufacturing and Industry 4.0, while
        improving quality, increasing productivity and reducing the number of required CAD/CAM software licenses.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 py-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/5AwAsNj2HDU" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">About CAMWorks ShopFloor</div>
      </div>
    </div>
  </div>
</section>

<section class="p-4">
  <div class="d-flex flex-column align-items-center justify-content-center p-0 p-sm-5 pb-0 text-center">
    <h4>Learn about CAMWorks & CAMWorks ShopFloor Ongoing Promotions</h4>
    <a href="https://www.cadmicro.com/promotions/solidworks" class="btn btn-md btn-primary btn-rounded mt-4"
      style="width:300px">View Promotions</a>
  </div>
</section>
@stop

@push('after-scripts')
<script>
  $(function(){
    $('#videos .row > div').matchHeight();
  })
</script>
@endpush
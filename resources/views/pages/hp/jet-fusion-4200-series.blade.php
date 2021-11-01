@extends('layouts.layout')
@section('title')
HP Jet Fusion 4200 | HP 3D Printing Solutions
@stop
@section('meta')
<link rel="canonical" href="{{route('jet-fusion-4200')}}" />
@stop
@section('description')CAD MicroSolutions is an authorized reseller of the new HP Jet Fusion Printing Solutions! The HP
Jet Fusion Printing Solution reinvents how you prototype and produce functional parts, delivering quality
output, up to 10 times faster at half the cost! @stop
@section('keywords')3D,Jet Fusion,4200,solution,prototyping,printer,fast,mechanical, aesthetic,accurate,speed,parts,HP
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('storage/banners/hp_jet_fusion_small_banner.png')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">HP Jet Fusion 4200 Printing Solution</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Reinventing prototyping and manufacturing</h2>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">The HP Jet Fusion Printing Solution reinvents how you prototype and
            produce functional parts, delivering
            quality output, up to 10 times faster at half the cost!</p>
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
    <div class="row">
      <div class="col-lg-5 text-center text-md-left">
        <h1>HP Jet
          Fusion 4200 Printing Solution</h1>
        <p class="lead">
          The HP Jet Fusion Printing Solution reinvents how you prototype and produce functional parts, delivering
          quality output, up to 10 times faster at half the cost!
        </p>
        <img src="https://www.cadmicro.com/storage/images/hp/Custom-Insignia.png"
         width="300px" height="auto" />
      </div>
      <div class="col-lg-7 py-4">
        <div class="videoWrapper">
          <iframe width="100%" src="https://www.youtube.com/embed/tdNjlmNaNuU" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="videoCaption">Video: HP Jet Fusion printing: your moment to engineer like never-before</div>
      </div>
    </div>
  </div>
  <div class="section-secondary" style="margin-top:50px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <img src="{{asset('storage/images/hp/jet_fusion_4200_printer.png')}}"
            style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto" />
        </div>
        <div class="col-lg-5">
          <h1 class="main-title">
            Additional
            features only available on the HP Jet Fusion 4200 printing solution</h1>
          <ul>
            <li>Use advanced and custom print modes to control mechanical, functional, and aesthetic properties,
              accuracy, and speed</li>
            <li>Benefit from advanced part quality monitoring during printing</li>
            <li>Add additional parts - while printing is already in progress - for urgent jobs</li>
            <li>Experience enhanced performance thanks to a higher disk capacity and additional memory</li>
            <li>Achieve an even lower cost per part versus the HP Jet Fusion 3200 printing solution</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="section-title center-block mx-auto">
    <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">About: HP Jet Fusion 4200 Printing Solution</h2>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="section-block">
    <div class="s40"></div>
    <div class="section-icon-group row" style="margin-top:-30px;">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon"
              style="background-image:url('{{asset('storage/images/hp/hp_icon_1.png')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
              alt="SolidWorks 3D CAD">
            </div>
            <h3 class="icon-title" style="margin-top:20px;">Superior, consistent part quality</h3>
          </div>
          <div class="icon-body row">
            <div class="col-lg-6">
              <ul style="font-size:12px">
                <li>Get extreme dimensional accuracy and fine detail thanks to HP’s unique Multi-Agent printing process
                </li>
                <li>Produce truly functional parts with optimal mechanical properties faster</li>
                <li>Obtain predictable, reliable final printed parts that match your design</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul style="font-size:12px">
                <li>Access new future materials and uncover new applications thanks to the HP Multi Jet Fusion Open
                  Platform</li>
                <li>Use advanced and custom print modes to control mechanical, functional, and aesthetic properties,
                  accuracy, and speed</li>
                <li>Benefit from advanced part quality monitoring during the printing process</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon"
              style="background-image:url('{{asset('storage/images/hp/hp_icon_2.png')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
              alt="SolidWorks 3D CAD">
            </div>
            <h3 class="icon-title" style="margin-top:20px;">Breakthrough productivity</h3>
          </div>
          <div class="icon-body">
            <ul style="font-size:12px">
              <li>Produce more parts per day with continuous printing and fast cooling</li>
              <li>
                Streamline your workflow with HP’s automated materials preparation and post-processing station
              </li>
              <li>
                Cleaner experience with an enclosed Processing Station and materials not classified as hazardous
              </li>
              <li>
                Rely on HP’s world-class Technical Services and Support to maximize uptime and productivity
              </li>
              <li>
                Choose your ideal end-to-end solution from a range of printing and processing options
              </li>
              <li>
                Add additional parts while printing is already in progress for urgent jobs
              </li>
              <li>
                Experience enhanced performance thanks to a higher disk capacity and additional memory
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            <div class="icon"
              style="background-image:url('{{asset('storage/images/hp/hp_icon_3.png')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
              alt="SolidWorks 3D CAD">
            </div>
            <h3 class="icon-title" style="margin-top:20px;">Lowest cost-per-part</h3>
          </div>
          <div class="icon-body">
            <ul style="font-size:12px">
              <li>
                Achieve lowest cost-per-part and reduce operational costs, opening your doors to short-run
                manufacturing
              </li>
              <li>
                Benefit from a competitively-priced 3D printing solution
              </li>
              <li>
                Optimize cost and part quality, with cost-efficient materials that offer industry-leading reusability
              </li>
              <li>
                Plan production times more accurately and predictably, to increase your overall operational efficiency
              </li>
              <li>
                Achieve a lower cost-per-part versus the HP Jet Fusion 3200 Printing Solution
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="section-title center-block mx-auto text-center mb-4">
    <h2>Colors</h2>
    <div class="section-title-divider"></div>
    <p class="text-primary lead h5">Bringing Products to Life</p>
  </div>
  <div class="container d-flex flex-row mx-auto justify-content-center flex-wrap">
    <img src="{{asset('/images/pages/dyemansion/standardcolors_dyemansion.png')}}" width="200" height="200" />
    <div class="p-4">
      <p style="max-width:500px;">Discover the greatest color database for 3D-printed parts on the
        market. Using DyeMansion technology, you are able to color your parts reproducible in almost any color of choice
        and turn them into high-value, colorful products.</p>
      <a class="btn btn-lg btn-primary btn-rounded mx-auto"
        href="{{route('dyemansion.dyemansion-dm60', ['#standardcolors'])}}">Standard Colors <i
          class="fa fa-chevron-right ml-3" aria-hidden="true"></i></a>
    </div>
  </div>
</section>
<section class="section-secondary p-5">
  <div class="container-fluid">
    <div class="embed-responsive embed-responsive-16by9 shadow">
      <iframe class="embed-responsive-item" width="100%" height="600" src="https://www.youtube.com/embed/sxjsZ5XKmbU"
        frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</section>
{{-- <section>
  <div class="container-fluid text-center">
    <img class="mb-4" width="auto" height="60px" src="{{ asset('storage/images/hp/Proto_ISO_1200W.png') }}" />
    <p class="lead mb-4 mx-auto" style="max-width:600px">Proto3000 is CAD MicroSolutions’ 3D printing partner, offering 3D printing services &
      prototyping leveraging the HP Jet Fusion 4200 printing solution.</p>
    <button type="button" data-toggle="modal" data-target="#contactProto3000"
      class="text-center mt-3 btn btn-outline-primary rounded-pill btn-lg m-auto">Contact Proto3000 now</button>
  </div>
</section> --}}
@stop

{{-- @push('foot')
<div class="modal fade" id="contactProto3000" tabindex="-1" role="dialog" aria-labelledby="contactProto3000"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactProto3000">Interested in Proto3000?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="555d35fc-9301-eb11-a813-0022480822ca"></div>
        <div id="dG4uSVDRlrBru26lEzvYXQ8-hqIHpXSCxcByijF8tEQU"></div>
      </div>
    </div>
  </div>
</div>
@endpush --}}
@extends('layouts.layout')
@section('title')
Formlabs | High Resolution SLA and SLS 3D Printers for Professionals
@stop
@section('meta')
<link rel="canonical" href="{{route('formlabs')}}" />
@stop
@section('description')Formlabs designs and manufacturers the Form 2 stereolithography (SLA) and Fuse 1 selective laser
sintering (SLS) 3D printers for professionals. @stop
@section('keywords')Formlabs, 3D printers, sterolithography, laser sintering, Additive Manufacturing, Fuse 1, Form 2
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
style="min-height:450px;  background-image:url({{asset('storage/images/formlabs/hero/hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">FormLabs 3D Printers</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Powerful, affordable 3D printers for professionals</h2>
        </div>
        {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">The Most Powerful Data and Build Preparation Software</p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section style="background:#F7F7F7">
  <div class="container text-center">
    <div class="section-title center-block mx-auto mb-2">
      <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Request a free Formlabs Sample Part</h2>
      <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
    </div>
    <a class="btn btn-lg btn-primary mt-4" href="https://www.cadmicro.com/landing/free-formlabs-sample">Request Sample
      Part</a>
  </div>
</section>
<section class="py-0">
  <div class="row">
    <div
      class="col-lg-6 col-sm-12 col-md-6 col-xs-12 p-0 d-flex text-lg-right text-sm-center align-items-center justify-content-center flex-column order-1">
      <div class="position-relative pl-4 py-4 pr-4 pr-md-4 text-center text-md-right">
        <div class="h1 mt-md-5 wow fadeInRight mt-0" data-wow-duration="1s" data-wow-delay="0.3s"
          style="font-size:3.2rem;">INTRODUCING</div>
        <p class="h4 m-0 p-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">The <em>NEW</em> <strong>Form
            3 and Form 3L</strong>, Powered By Low Force Stereolithography (LFS)</p>
      </div>
      <img src="{{asset('storage/images/formlabs/form3L-part_045.jpg')}}" class="m-0  wow fadeInUp"
        data-wow-duration="1s" data-wow-delay="0.6s" width="50%" height="auto" />
      <p class="h4 px-5 mx-5 text-center pb-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">A completely
        re-engineered approach to resin-based 3D printing</p>
      <a class="text-center h6 text-primary p-4 mb-4" style="background:#F7F7F7" target="_blank"
        href="{{asset('storage/pdfs/formlabs/Tech Specs - Form 2 Form 3 Form 3L.pdf')}}">View the Tech Specifications <i
          class="ml-2 far fa-caret-square-right"></i></a>
    </div>
    <div
      class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0 text-center order-sm-0 order-md-3 d-flex justify-content-center flex-column py-5">
      <div class="d-flex justify-content-center align-items-center flex-column wow fadeInRight" data-wow-duration="1s"
        data-wow-delay="0.6s">
        <img src="{{asset('storage/images/formlabs/02052019_Daguerre-Tests_034_no-Horizon.jpg')}}" class="m-auto"
          width="100%" height="auto" />
        <div class="d-flex flex-row justify-content-between align-items-center w-100 py-4 px-4">
          <div class="w-100">
            <p class="text-center h6">Learn More About the Form 3L</p>
            <a class="btn-primary btn btn-lg mx-auto" href="{{ route('formlabs-form3L') }}">Form 3L<i
                class="ml-2 far fa-caret-square-right"></i></a>
          </div>
          <div class="w-100">
            <p class="text-center h6">Learn More About the Form 3</p>
            <a class="btn-primary btn btn-lg mx-auto" href="{{ route('formlabs-form3') }}">Form 3<i
                class="ml-2 far fa-caret-square-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <section class="py-0">
  <div class="row">
    <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12 p-0 text-center" style="background:#F7F7F7">
      <div class="w-100 position-relative mb-5" style="z-index:1">
        <h2 class="text-center mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Form 2</h2>
        <p class="text-center m-0 px-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Intuitive, reliable
          stereolithography for the desktop</p>
        <a class="btn-primary btn btn-md mx-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s"
          href="{{ route('formlabs-form2') }}"
          style="position: absolute; bottom: -60px; left: 0; right: 0; width: 150px;">Learn More<i
            class="ml-2 far fa-caret-square-right"></i></a>
      </div>
      <img src="{{asset('storage/images/formlabs/form-2.jpg')}}" class="m-auto wow fadeInLeft" data-wow-duration="1s"
        data-wow-delay="0.8s" width="auto" height="auto" style="max-height:900px" />
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0 text-center white-content" style="background:#1F1F1F">
      <div class="w-100 position-relative mb-5" style="z-index:1">
        <h2 class="text-center mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Fuse 1</h2>
        <p class="text-center m-0 px-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">The industrial power
          of selective laser sintering for the benchtop</p>
        <a class="btn-primary btn btn-md mx-auto wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s"
          href="{{ route('formlabs-fuse1') }}"
          style="position: absolute; bottom: -60px; left: 0; right: 0; width: 150px;">Learn More<i
            class="ml-2 far fa-caret-square-right"></i></a>
      </div>
      <img src="{{asset('storage/images/formlabs/fuse-1.png')}}" class="m-auto wow fadeInRight" data-wow-duration="1s"
        data-wow-delay="0.8s" width="auto" height="auto" style="max-height:900px" />
    </div>
  </div>
</section> --}}
<section class="py-0">
  <div class="row">
    <div
      class="col-lg-6 col-sm-12 col-md-6 col-xs-12 p-0 d-flex text-lg-right text-sm-center align-items-center justify-content-center flex-column">
      <div class="position-relative  pl-4 py-4 pr-0 pr-md-4">
        <h2 class="h1 mt-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">Formlabs Resin Library</h2>
        <p class="h4 m-0 p-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.6s">Advanced materials designed
          to deliver beautiful results.</p>
      </div>
      <img src="{{asset('storage/images/formlabs/materials/material_samples.jpg')}}" class="m-0  wow fadeInUp"
        data-wow-duration="1s" data-wow-delay="0.8s" width="100%" height="auto" />
      <p class="h6 px-5 mx-5 text-center pb-4  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">Our
        Engineering Resins are formulated to help you reduce costs and iterate faster, and include: Grey Pro, Rigid,
        Durable, Tough, Flexible, and High Temp.</p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0 text-center white-content">
      <img src="{{asset('storage/images/formlabs/materials/material-resins.jpg')}}" class="m-auto  wow fadeInRight"
        data-wow-duration="1s" data-wow-delay="0.6s" width="100%" height="100%" />
    </div>
  </div>
</section>
<section class="py-0">
  <div class="row">
    <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 p-0 d-flex text-right justify-content-end flex-column">
      <img src="{{asset('storage/pdfs/formlabs/casestudies/Case Study - Google ATAP - High Temp Resin.jpg')}}"
        class="m-0" width="100%" height="auto" />
      <div class="position-absolute flex-grow-1 p-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
        style="z-index: 1; background: rgba(255,255,255,0.6);">
        <div class="h6 m-0 pt-4 lead pl-4">Company: Google</div>
        <h3 class="h4 mb-4 pl-4">Case Study: Inside Google ATAP: Bridging Pre-Production Challenges With 3D Printing
        </h3>
        <button type="button" class="btn btn-lg btn-primary  mx-auto" data-toggle="modal" data-target="#casestudy1">
          VIEW STUDY<i class="ml-2 far fa-caret-square-right"></i>
        </button>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 p-0 d-flex text-right justify-content-end flex-column">
      <img src="{{asset('storage/pdfs/formlabs/casestudies/Case Study - Custom Jigs.jpg')}}" class="m-0" width="100%"
        height="auto" />
      <div class="position-absolute flex-grow-1 p-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
        style="z-index: 1; background: rgba(255,255,255,0.6);">
        <div class="h6 m-0 pt-4 lead pl-4">Company: Pankl Racing Systems</div>
        <h3 class="h4 mb-4 pl-4">Case Study: Reducing Costs and Lead Time in Manufacturing with Next-Day Custom Jigs
        </h3>
        <button type="button" class="btn btn-lg btn-primary  mx-auto" data-toggle="modal" data-target="#casestudy2">
          VIEW STUDY<i class="ml-2 far fa-caret-square-right"></i>
        </button>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 p-0 d-flex text-right justify-content-end flex-column">
      <img src="{{asset('storage/pdfs/formlabs/casestudies/Case Study - Creating Functional Prototypes.jpg')}}"
        class="m-0" width="100%" height="auto" />
      <div class="position-absolute flex-grow-1 p-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"
        style="z-index: 1; background: rgba(255,255,255,0.6);">
        <div class="h6 m-0 pt-4 lead pl-4">Company: Wöhler</div>
        <h3 class="h4 mb-4 pl-4">Case Study: Creating Functional Prototypes with Multiple Materials</h3>
        <button type="button" class="btn btn-lg btn-primary  mx-auto" data-toggle="modal" data-target="#casestudy3">
          VIEW STUDY<i class="ml-2 far fa-caret-square-right"></i>
        </button>
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center flex-column w-100">
      <div class="section-title center-block mx-auto">
        <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Learn More about the Formlabs 3D Printers
        </h2>
        {{-- <p class="text-center">Now you can produce complex parts and new applications that were simply not
          possible before, in cost-effective high-volume runs.</p> --}}
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div data-form-block-id="5659197b-c0ac-e911-a987-000d3a3702ca"></div>
      <div id="dljMh8Kqx3-6_K-b_oESUR86Mb1xvCaI7z0QrqjqdUFY"></div>
    </div>
  </div>
</section>
@stop


@push('foot')
<div class="modal fade" id="casestudy1" tabindex="-1" role="dialog" aria-labelledby="casestudy3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Download Case Study: Creating Functional Prototypes with Multiple Materials</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="97dc9a42-bfac-e911-a987-000d3a3702ca"></div>
        <div id="dZNGiIYhpxz4Jv-8JCMiTE2IaO6_Zfa9930cWI2cBMJY"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="casestudy2" tabindex="-1" role="dialog" aria-labelledby="casestudy2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Download Case Study: Reducing Costs and Lead Time in Manufacturing with Next-Day Custom
          Jigs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="352dd190-bfac-e911-a987-000d3a3702ca"></div>
        <div id="dkfRtin7DlldrdqG10lZxLoXpNamajKjlU_Wc5-H1T48"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="casestudy3" tabindex="-1" role="dialog" aria-labelledby="casestudy1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Download Case Study: Google ATAP - High Temp Resin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="e8a2fc20-c0ac-e911-a987-000d3a3702ca"></div>
        <div id="dT3lJL8YB5UKVWi3EE-ikfucyBqt4-wr9AB5LzbJAGb8"></div>
      </div>
    </div>
  </div>
</div>
@endpush
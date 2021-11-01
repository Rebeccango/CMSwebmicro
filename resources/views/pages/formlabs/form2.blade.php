@extends('layouts.layout')
@section('title')
Form 2: Desktop Stereolithography (SLA) 3D Printer
@stop
@section('meta')
<link rel="canonical" href="{{route('formlabs')}}" />
@stop
@section('description')The most advanced desktop stereolithography (SLA) 3D printer ever created. High-resolution 3D
printing for laser-sharp prints with stunning surface finish.@stop
@section('keywords')Formlabs, 3D printers, sterolithography, laser sintering, Additive Manufacturing, Fuse 1, Form 2
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex" style="min-height:450px;
background-image:url({{asset('storage/images/formlabs/hero/hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Form 2 3D Printer</h1>
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
<section class="py-0">
  <div class="row">
    <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12 p-0 text-center" style="background:#F7F7F7">
      <div class="w-100 position-relative mb-5" style="z-index:1">
        <h2 class="text-center mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Form 2</h2>
        <p class="text-center m-0 px-4 wow fadeInUp mx-auto" style="max-width:600px" data-wow-duration="1s"
          data-wow-delay="0.6s">The Form 2 delivers high-resolution parts at a fraction of the cost and footprint of
          industrial 3D printers. Scale your prototyping and production in-house with desktop stereolithography.</p>
      </div>
      <img src="{{asset('storage/images/formlabs/form-2.jpg')}}" class="wow fadeInLeft" data-wow-duration="1s"
        data-wow-delay="0.8s" width="auto" height="auto" style="max-height:900px; margin-top: -25%;" />
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0 text-center white-content" style="background:#1F1F1F">
      <div class="w-100 position-relative m-auto px-5 pb-5" style="z-index:1">
        <h2 class="text-center mt-5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">Introducing, The Form 2
          high-resolution 3D printer.</h2>
        <p class="text-center m-0 px-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Engineered for
          precision, designed for reliability. Take a deep dive into the features of the Form 2, the most advanced
          desktop 3D printer ever created. </p>
      </div>
      <iframe width="100%" height="70%" src="https://www.youtube.com/embed/8tn5zA5bNSE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
      {{-- <img src="{{asset('storage/images/formlabs/fuse-1.png')}}" class="m-auto wow fadeInRight" data-wow-duration="1s"
        data-wow-delay="0.8s" width="auto" height="auto" style="max-height:900px" /> --}}
    </div>
  </div>
</section>

<section class="py-0" style="min-height:870px; background-color:#FAFAFA;">
  <div class="position-absolute d-flex justify-content-center flex-wrap w-100 h-100" style="z-index:1;">
    <div class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-center justify-content-sm-start align-items-md-center flex-column align-items-sm-start">
      <div class="row  justify-content-center">
        <div class="col col-sm-12 col-md-10 col-lg-8">
          <p></p>
          <h3 class="h1">Engineered For Precision. Designed for Reliability.</h3><br>
          <p class="h5">The most reliable 3D printer ever created, the Form 2 works as hard as you do so you can focus
            on developing innovative products and bringing your most creative ideas to life. 3D print strong, detailed
            models with stunning surface finish.</p><br>
          {{-- <a href="/3d-printers/tech-specs/" class="button--arrow">Explore Form 2 Tech Specs</a><br> --}}
          <br><br>
          <p></p>
        </div>
      </div>
      <div class="row  justify-content-center  ml-sm-5 ml-md-0">
        <div class="col col-sm-12 col-md-10 col-lg-8">
          <ul id="form2-tech-specs " class="form-2-tech-specs ">
            <li class="span-three title">Build Volume</li>
            <li class="span-three">(millimeters)</li>
            <li><span class="num" data-in="5.7" data-mm="145">145</span><span>length</span></li>
            <li aria-hidden="true">x</li>
            <li><span class="num" data-in="5.7" data-mm="145">145</span> <span>width</span></li>
            <li aria-hidden="true">x</li>
            <li><span class="num" data-in="6.9" data-mm="175">175</span> <span>height</span></li>
            <li class="span-three title">Laser Spot Size</li>
            <li class="span-three"><span class="num" data-in=".0055" data-mm="140">140</span> <span class="unit-text"
                data-in="inches" data-mm="microns">microns</span></li>
            <li class="span-three title">Layer Height</li>
            <li class="span-three"><span class="num" data-in=".001 - .004" data-mm="25 - 100">25 - 100</span><span
                class="unit-text" data-in="inches" data-mm="microns">microns</span></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="d-flex col col-md-6 col-sm-12 justify-content-center"></div>
  </div>
  <div class="w-100 d-block">
    <img class="wow fadeInRight w-100" data-wow-duration="1s" data-wow-delay="0.8s" src="{{ asset('/storage/images/formlabs/form2_techspecs.png.3840x2160_q80_crop-scale.jpg') }}" />
  </div>
</section>

<section class="py-0 flex-card" style="background-color:#EBEBEB;">
  <div class="row">
    <div class="col w-100 d-block section-bg order-sm-2">
      <img class="wow fadeInRight w-100" data-wow-duration="1s" data-wow-delay="0.8s" src="{{ asset('/storage/images/formlabs/form2_16materials.png.3840x2160_q80_crop-scale.jpg') }}" />
    </div>
    <div class="col-12 section-content position-absolute d-flex justify-content-center flex-wrap w-100 h-100" style="z-index:1;">
      <div class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-center justify-content-sm-start align-items-md-center flex-column align-items-sm-start">
        <div class="row  justify-content-center">
          <div class="col col-sm-12 col-md-10 col-lg-8 pt-sm-5">
            <p></p>
            <h3 class="h1">20 Materials, Zero Hassle</h3><br>
            <p class="h5">Our integrated resin system makes material management easy and allows for larger prints and
              clean operation. Switch between materials in seconds by replacing the cartridge. The Form 2 automatically
              recognizes the resin type, configures settings, and allows you to keep track of resin supplies from your
              Dashboard.</p><br>
            {{-- <a href="/3d-printers/tech-specs/" class="button--arrow">Explore Form 2 Tech Specs</a><br> --}}
            <br><br>
            <p></p>
          </div>
        </div>
      </div>
      <div class="d-flex col col-md-6 col-sm-12 justify-content-center"></div>
    </div>
  </div>
</section>

<section class="py-0 flex-card" style="background-color:#FEFEFE;">
  <div class="mx-auto text-center pt-5 col-lg-5 col-sm-12 col-md-12 pb-sm-4">
    <h2 class="h1">Reinventing Stereolithography, From Start to Finish</h2><br>
    <p class="h4">From print preparation to post-processing, we've meticulously redesigned every step of SLA 3D
      printing so you can rely on a dependable, scalable fabrication workflow and focus on creating.</p>
  </div>
  <div class="row">
    <div class="col w-100 d-lg-none d-sm-block section-bg">
      <img class="wow fadeIn w-100" data-wow-duration="1s" data-wow-delay="0.8s" src="{{ asset('/storage/images/formlabs/form2_mobile_preform.png.1280x1024_q80_crop-smart.jpg') }}" />
    </div>
    <div class="col w-100 d-lg-block d-sm-none d-none section-bg">
      <img class="wow fadeIn w-100" data-wow-duration="1s" data-wow-delay="0.8s" src="{{ asset('/storage/images/formlabs/form2_preform2x.png.3840x2160_q80_crop-scale.png') }}" />
    </div>
    <div class="col-12 section-content position-absolute d-flex justify-content-center flex-wrap w-100 h-100 flex-row-reverse py-sm-5"
      style="z-index:1;">
      <div class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-center justify-content-sm-start align-items-md-center flex-column align-items-sm-start">
        <div class="row  justify-content-center">
          <div class="col col-sm-12 col-md-10 col-lg-8">
            <p><span style="display:block;margin-bottom:-1.25rem;text-transform:uppercase;color:#939393;font-size:1.25rem;font-weight:400;">Step
                1</span></p>
            <h3 class="h1">Design</h3><br>
            <p class="h5">Design your model in your regular CAD software and import an STL or OBJ file into our PreForm
              print preparation software. One-Click Print offers an option for automatically orienting, supporting, and
              laying out your 3D models.</p><br>
            {{-- <a href="/3d-printers/tech-specs/" class="button--arrow">Explore Form 2 Tech Specs</a><br> --}}
          </div>
        </div>
      </div>
      <div class="d-flex col col-md-6 col-sm-12 justify-content-center"></div>
    </div>
  </div>
</section>

<section class="py-0 flex-card" style="background-color:#ffffff;">
  <div class="row">
    <div class="col w-100 d-block section-bg">
      <div class="video--embed  initialized video--embed-playing wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"
        data-mobile="true" data-controls="true" style="background-image: url('https://formlabs.com/media/upload/_thumbs/form2_ui_poster.png.3840x2160_q80_crop-scale.jpg')">
        <video loop autoplay muted class="lazy-hidden">
          <source type="video/mp4" src="https://videos.formlabs.com/products/form-2/Form%202%20UI%202018%20V.02.mp4">
        </video>
      </div>
    </div>
    <div class="col-12 section-content position-absolute d-flex justify-content-center flex-wrap w-100 h-100 flex-row-reverse pt-sm-5"
      style="z-index:1;">
      <div class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-center justify-content-sm-start align-items-md-center flex-column align-items-sm-start">
        <div class="row  justify-content-center">
          <div class="col col-sm-12 col-md-10 col-lg-8">
            <p><span style="display:block;margin-bottom:-1.25rem;text-transform:uppercase;color:#939393;font-size:1.25rem;font-weight:400;">Step
                2</span></p>
            <h3 class="h1">Print</h3><br>
            <p class="h5">Design your model in your regular CAD software and import an STL or OBJ file into our PreForm
              print preparation software. One-Click Print offers an option for automatically orienting, supporting, and
              laying out your 3D models.</p><br>
            {{-- <a href="/3d-printers/tech-specs/" class="button--arrow">Explore Form 2 Tech Specs</a><br> --}}
          </div>
        </div>
      </div>
      <div class="d-flex col col-md-6 col-sm-12 justify-content-center"></div>
    </div>
  </div>
</section>

<section class="py-0 flex-card" style="background-color:#ffffff;">
  <div class="row">
    <div class="col w-100 d-lg-none d-sm-block section-bg">
      <img class="wow fadeInLeft w-100" data-wow-duration="1s" data-wow-delay="0.8s" src="{{ asset('/storage/images/formlabs/form2_mobile_washcure.png.1280x1024_q80_crop-smart.jpg') }}"
        width="100%" />
    </div>
    <div class="col w-100 d-lg-block d-sm-none d-none section-bg">
      <img class="wow fadeInLeft w-100" data-wow-duration="1s" data-wow-delay="0.8s" src="{{ asset('/storage/images/formlabs/form2_washcure.png.3840x2160_q80_crop-scale.jpg') }}" />
    </div>
    <div class="col-12 section-content position-absolute d-flex justify-content-center flex-wrap w-100 h-100 flex-row-reverse pt-sm-5"
      style="z-index:1;">
      <div class="d-flex col-12 py-5 col-md-6 col-sm-12 justify-content-md-center justify-content-sm-start align-items-md-center flex-column align-items-sm-start">
        <div class="row  justify-content-center">
          <div class="col col-sm-12 col-md-10 col-lg-8">
            <p><span style="display:block;margin-bottom:-1.25rem;text-transform:uppercase;color:#939393;font-size:1.25rem;font-weight:400;">Step
                3</span></p>
            <h3 class="h1">Finish</h3><br>
            <p class="h5">For the best results and mechanical properties, all SLA parts require IPA rinsing and
              post-curing. Form Wash and Form Cure streamline and automate post-processing of Form 2 prints.
              Consistently produce high-quality results with less time and effort.</p><br>
            {{-- <a href="/3d-printers/tech-specs/" class="button--arrow">Explore Form 2 Tech Specs</a><br> --}}
          </div>
        </div>
      </div>
      <div class="d-flex col col-md-6 col-sm-12 justify-content-center"></div>
    </div>
  </div>
</section>

<section class="py-0 flex-card" style="background-color:transparent;">
  <div class="row">
    <div class="col w-100 d-lg-none d-sm-block section-bg">
      <img class="w-100" src="{{ asset('/storage/images/formlabs/form2_mobile_dashboard.png.1280x1024_q80_crop-smart.jpg') }}"
        width="100%" />
    </div>
    <div class="col w-100 d-lg-block d-sm-none d-none section-bg">
      <img class="w-100" src="{{ asset('/storage/images/formlabs/form2-software.png.3840x2160_q80_crop-scale.jpg') }}" />
    </div>
    <div class="col-12 section-content position-absolute d-flex justify-content-center flex-wrap w-100 h-100 flex-row pt-sm-5"
      style="z-index:1;">
      <div class="d-flex col-12 col-md-6 col-sm-12 justify-content-md-center justify-content-sm-start align-items-md-center flex-column align-items-sm-start">
        <div class="row  justify-content-center">
          <div class="col col-sm-12 col-md-10 col-lg-8">
            <h3 class="h1">Prepare and Manage Prints With Smarter Software</h3><br>
            <p class="h5">Get your 3D model ready in minutes with PreForm's automatic and manual print preparation
              tools. Manage printers and monitor supply levels remotely using your online Dashboard.</p><br>
            {{-- <a href="/3d-printers/tech-specs/" class="button--arrow">Explore Form 2 Tech Specs</a><br> --}}
          </div>
        </div>
      </div>
      <div class="d-flex col col-md-6 col-sm-12 justify-content-center"></div>
    </div>
  </div>
</section>

<section class="py-0">
  <div class="row">
    <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12 p-0 d-flex text-lg-right text-sm-center align-items-center justify-content-center flex-column">
      <div class="position-relative  pl-4 py-4 pr-0">
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
      <img src="{{asset('storage/pdfs/formlabs/casestudies/Case Study - Google ATAP - High Temp Resin.jpg')}}" class="m-0" width="100%" height="auto" />
      <div class="position-absolute flex-grow-1 p-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="z-index: 1; background: rgba(255,255,255,0.6);">
        <div class="h6 m-0 pt-4 lead pl-4">Company: Google</div>
        <h3 class="h4 mb-4 pl-4">Case Study: Inside Google ATAP: Bridging Pre-Production Challenges With 3D Printing</h3>
        <button type="button" class="btn btn-lg btn-primary  mx-auto" data-toggle="modal" data-target="#casestudy1">
          VIEW STUDY<i class="ml-2 far fa-caret-square-right"></i>
        </button>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 p-0 d-flex text-right justify-content-end flex-column">
      <img src="{{asset('storage/pdfs/formlabs/casestudies/Case Study - Custom Jigs.jpg')}}" class="m-0" width="100%" height="auto" />
      <div class="position-absolute flex-grow-1 p-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="z-index: 1; background: rgba(255,255,255,0.6);">
        <div class="h6 m-0 pt-4 lead pl-4">Company: Pankl Racing Systems</div>
        <h3 class="h4 mb-4 pl-4">Case Study: Reducing Costs and Lead Time in Manufacturing with Next-Day Custom Jigs</h3>
        <button type="button" class="btn btn-lg btn-primary  mx-auto" data-toggle="modal" data-target="#casestudy2">
          VIEW STUDY<i class="ml-2 far fa-caret-square-right"></i>
        </button>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 p-0 d-flex text-right justify-content-end flex-column">
      <img src="{{asset('storage/pdfs/formlabs/casestudies/Case Study - Creating Functional Prototypes.jpg')}}" class="m-0" width="100%" height="auto" />
      <div class="position-absolute flex-grow-1 p-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s" style="z-index: 1; background: rgba(255,255,255,0.6);">
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
        <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Learn More about the Formlabs 3D Printers</h2>
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
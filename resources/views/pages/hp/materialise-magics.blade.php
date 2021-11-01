@extends('layouts.layout')
@section('title')
Materialise Magics
@stop
@section('meta')
<link rel="canonical" href="{{route('materialise')}}" />
@stop
@section('description')With Materialise Magics, you can import an impressive number of file formats, including color and
texture information, as well as staying in control of your original data. @stop
@section('keywords')Materialise,Magics,HP,3D,printer,software,reduce,complexity,solutions,CAD @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/hp/hp_materialise_pro_guy_banner.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Materialise Magics</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Bridging the Gap between 3D Printers and Software</h2>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">The Most Powerful Data and Build Preparation Software</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pb-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5">
        <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">The Most
          Powerful Data and Build Preparation Software</h1>
        <p class="lead">Materialise Magics is a versatile, industry-leading data preparation and STL editor software for Additive
          Manufacturing that allows you to convert files to STL, repair errors, edit your design and prepare your build
          platform. Ready to prepare your model for 3D Printing?</p>
        <img src="https://www.cadmicro.com/storage/images/hp/Custom-Insignia.png" width="300px" height="auto" class="pt-5" />
      </div>
      <div class="col-lg-7">
        <div class="videoWrapper">
          <iframe width="100%" src="https://www.youtube.com/embed/3ACqE5_1pHE" frameborder="0"
            allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videoCaption">Video: Materialise Magics: The Most Powerful Data Preparation Software</div>
      </div>
    </div>
  </div>
  <div class="section-secondary" style="margin-top:50px;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <img src="{{asset('storage/images/hp/HP_picture_2.jpg')}}" style="width:100%; height:auto; margin:15px 0;"
            width="100%" height="auto" />
        </div>
        <div class="col-lg-5">
          <div class="h4 w-100">HP Build Processor</div>
          <h1 class="main-title wow fadeInRight" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">
            Materialise Build Processor for HP Multi Jet Fusion 3D Printing</h1>
          <p>The HP-Materialise alliance serves to develop the HP Build Processor, tailored 3D printing software for the
            HP Multi Jet Fusion technology.</p>
          <p>The HP Build Processor is a user-friendly software which simplifies the 3D printing process. It combines
            high performance slicing algorithms with a perfect integration from data preparation, through design and
            build setup, to part building on the HP multi jet fusion printer. In addition, the HP Build Processor
            (integrated with Materialise Streamics) enables feedback from the machine control system, supporting build
            tracing and build data storage, thus meeting the requirements of manufacturing environments.</p>
          <p>The HP Build Processor enables a seamless integration between software and printer. This results in a
            simplified workflow for the user with the possibility to assign the available machine-specific build styles
            to the platform, as well as slicing and exporting the data to the HP machine all in a single software
            package.</p>
          {{-- <ul>
            <li>Use advanced and custom print modes to control mechanical, functional, and aesthetic properties, accuracy, and speed</li>
            <li>Benefit from advanced part quality monitoring during printing</li>
            <li>Add additional parts - while printing is already in progress - for urgent jobs</li>
            <li>Experience enhanced performance thanks to a higher disk capacity and additional memory</li>
            <li>Achieve an even lower cost per part versus the HP Jet Fusion 3200 printing solution</li>
          </ul> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="section-title center-block mx-auto mb-4">
    <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Key Benefits</h2>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="section-block container p-3">
    <div class="row">
      {{-- <div class="col-lg-5 mb-3">
      <iframe width="100%" style="min-height:320px; max-width:600px;" class="d-block m-auto" src="https://www.youtube.com/embed/F4RjGC9xdJg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div> --}}
      <div class="col-lg-12 mt-3">
        <div class="section-icon-group row" style="margin-top:-30px;">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class='icon-content' style="max-width:100%;">
              <div class="icon-link">
                {{-- <div class="icon" style="background-image:url('{{asset('storage/images/hp/hp_icon_1.png')}}');
                background-size: contain; height:100px; margin-bottom:20px; width: auto;" alt="SolidWorks 3D CAD">
              </div> --}}
              <h3 class="icon-title">User-Friendly</h3>
            </div>
            <div class="icon-body row">
              <ul style="font-size:12px">
                <li>Benefit from a seamless integration with data preparation in a single software package (both
                  Materialise and Siemens NX software)</li>
                <li>Reduce human error possibility with automated file transfer: from data preparation to machine</li>
                <li>Do complex calculations on a dedicated server with remote processing</li>
                <li>Benefit from support and regular updates of the software</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class='icon-content' style="max-width:100%;">
            <div class="icon-link">
              {{-- <div class="icon" style="background-image:url('{{asset('storage/images/hp/hp_icon_2.png')}}');
              background-size: contain; height:100px; margin-bottom:20px; width: auto;" alt="SolidWorks 3D CAD">
            </div> --}}
            <h3 class="icon-title">Slicing Algorithms</h3>
          </div>
          <div class="icon-body">
            <ul style="font-size:12px">
              <li>Enjoy the benefits of high-performance slicing algorithms with advanced slice viewer</li>
              <li>Even very complex parts and platforms are quickly handled</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            {{-- <div class="icon" style="background-image:url('{{asset('storage/images/hp/hp_icon_3.png')}}');
            background-size: contain; height:100px; margin-bottom:20px; width: auto;" alt="SolidWorks 3D CAD">
          </div> --}}
          <h3 class="icon-title">Integrated and Advanced Lattice Design (Materialise 3-matic)</h3>
        </div>
        <div class="icon-body">
          <ul style="font-size:12px">
            <li>Handle complex designs such as porous, lattice and lightweight structures; labels; and textures with
              Materialise’s unique slice-based technology.</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class='icon-content' style="max-width:100%;">
        <div class="icon-link">
          {{-- <div class="icon" style="background-image:url('{{asset('storage/images/hp/hp_icon_3.png')}}');
          background-size: contain; height:100px; margin-bottom:20px; width: auto;" alt="SolidWorks 3D CAD">
        </div> --}}
        <h3 class="icon-title">Controlled Manufacturing (Materialise Streamics)</h3>
      </div>
      <div class="icon-body">
        <ul style="font-size:12px">
          <li>Trace and store data on specific jobs, thanks to the two-way communication between the HP multi jet fusion
            printer and the Build Processor. </li>
        </ul>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>
<section class="section-secondary">
  <div class="section-title center-block mx-auto mb-5 pb-2">
    <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Why Choose the Materialise Build Processor</h2>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="section-block container p-3">
    <div class="container-fluid">
      <div class="section-icon-group row" style="margin-top:-30px;">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class='icon-content' style="max-width:100%;">
            <div class="icon-link">
              {{-- <div class="icon" style="background-image:url('{{asset('storage/images/hp/hp_icon_1.png')}}');
              background-size: contain; height:100px; margin-bottom:20px; width: auto;" alt="SolidWorks 3D CAD">
            </div> --}}
            <h3 class="icon-title">Rely on the Machine Communication Standard</h3>
          </div>
          <div class="icon-body row">
            <p>To communicate your file to the printer, you need specialized software. The Materialise Build Processor
              is considered the standard software for communicating with and monitoring AM machines.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content' style="max-width:100%;">
          <div class="icon-link">
            {{-- <div class="icon" style="background-image:url('{{asset('storage/images/hp/hp_icon_2.png')}}');
            background-size: contain; height:100px; margin-bottom:20px; width: auto;" alt="SolidWorks 3D CAD">
          </div> --}}
          <h3 class="icon-title">Discover the Full Platform</h3>
        </div>
        <class="icon-body">
          <p>Our offer is not limited to machine communication software. You can benefit from the integration with data
            preparation and other software from the Materialise Magics 3D Print Suite.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class='icon-content' style="max-width:100%;">
        <div class="icon-link">
          {{-- <div class="icon" style="background-image:url('{{asset('storage/images/hp/hp_icon_3.png')}}');
          background-size: contain; height:100px; margin-bottom:20px; width: auto;" alt="SolidWorks 3D CAD">
        </div> --}}
        <h3 class="icon-title">Benefit from Our Partnerships</h3>
      </div>
      <div class="icon-body">
        <p>Materialise has strong partnerships with the majority of leading AM machine manufacturers worldwide. This
          means that we can update our software in line with the developments of machine manufacturers.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12  wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class='icon-content' style="max-width:100%;">
      <div class="icon-link">
        {{-- <div class="icon" style="background-image:url('{{asset('storage/images/hp/hp_icon_3.png')}}');
        background-size: contain; height:100px; margin-bottom:20px; width: auto;" alt="SolidWorks 3D CAD">
      </div> --}}
      <h3 class="icon-title">Easily Handle Huge Files</h3>
    </div>
    <div class="icon-body">
      <p>Do you experience difficulties with handling large files? Our slice-based technology avoids large files by
        skipping the demanding triangularization to an intermediate STL file and generating the desired geometry on the
        slice level.</p>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>
@stop
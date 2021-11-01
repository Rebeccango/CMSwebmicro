@extends('layouts.layout')
@section('title')
HP Jet Fusion 5200 Series - Commercial & Industrial 3D Printer | HP 3D Printing Solutions
@stop
@section('meta')
<link rel="canonical" href="{{route('jet-fusion-5200-series')}}" />
@stop
@section('description')CAD MicroSolutions is an authorized reseller of the new HP Jet Fusion 5200 3D Printers! Expand
and scale into mid-volume production. @stop
@section('keywords') HP, Jet Fusion 5200, 3d printing solution, industrial, commercial, prototyping @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
   style="min-height:450px; background-image:url({{asset('storage/images/hp/jetfusion-5200-banner.webp')}})">
   <div class="parallax-section__shadow"></div>
   <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
         <div>
            <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
               data-wow-delay="0.5s">
               <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">HP Jet Fusion 5200 Series 3D Printing
                  Solution</h1>
               <div class="section-title-divider"></div>
               <h2 class="h5 mx-auto" style="max-width:500px">Unleash new growth and scale production with HP's most
                  advanced plastics 3D printing solution</h2>
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
      <div class="row d-flex justify-content-start align-items-start">
         <div class="col-lg-6 pt-5">
            <h2>HP Jet Fusion 5200 Industrial & Commercial 3D Printer</h2>
            <p class="">HP Jet Fusion 5200 3D Printer, Build Unit, Natural Cooling Unit and Processing Station.</p>
            <img src="{{ asset('storage/images/hp/jetfusion-5200-preview.webp') }}" width="100%" />
            <a href="{{ asset("storage/pdfs/hp/5200 Brochure.pdf") }}" target="_blank" class="btn btn-primary"><i
                  class="fas fa-file-export mr-3"></i>DOWNLOAD THE BROCHURE</a>
         </div>
         <div class="col-lg-6 py-5 text-center">
            <div class="videoWrapper">
               <iframe width="100%" src="https://www.youtube.com/embed/5p2boP2cDyM" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
            </div>
            <div class="videoCaption text-left">Video: Introducing HP’s Most Advanced Plastics 3D Printing Solution | 3D
               Printing
               | HP</div>

            <img src="https://www.cadmicro.com/storage/images/hp/Custom-Insignia.png" width="300px" height="auto"
               class="pt-5" />
         </div>
      </div>
   </div>
</section>
<section class="section-secondary py-5">
   <div class="container pt-5">
      <div class="section-title center-block mx-auto">
         <h3 class="mx-auto" style="max-width:600px">About the HP Fusion 300 &amp; 500 Series 3D
            Printing Solutions</h3>
         <div class="section-title-divider"></div>
      </div>
      <div class="section-block pl-3 pr-3 ">
         <div class="section-icon-group row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link d-flex justify-content-center flex-column">
                     <img src="{{asset('storage/images/hp/manufacturing_predictability.png')}}" class="mx-auto"
                        width="59" height="59" />
                     <h4 class="h4 icon-title my-4">MANUFACTURING PREDICTABILITY</h4>
                  </div>
                  <div class="icon-body">
                     <ul>
                        <li>Quality—from fine detail and sharp edges to textures.</li>
                        <li>Dimensional accuracy and repeatability that rivals industrial tooling—faster.</li>
                        <li>Functional parts with best-in-class isotropy.</li>
                        <li>Optimal yield at industrial-level OEE.</li>
                        <li>Maximize your equipment uptime.</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link d-flex justify-content-center flex-column">
                     <img src="{{asset('storage/images/hp/breakthrough_economics.png')}}" class="mx-auto" width="64"
                        height="59" />
                     <h4 class="h4 icon-title my-4">BREAKTHROUGH ECONOMICS</h4>
                  </div>
                  <div class="icon-body">
                     <ul>
                        <li>Best-in-class economics and productivity – for production environments.</li>
                        <li>Uniquely predictable and consistent print time for any type of part.</li>
                        <li>Centralized job tracking and production fleet Streamlined workflow and HP’s most economical
                           continuous 3D printing.</li>
                        <li>Flexibility and agility—without injection molding fine-tuning steps.</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class='icon-content' style="max-width:100%;">
                  <div class="icon-link d-flex justify-content-center flex-column">
                     <img src="{{ asset('storage/images/hp/expand_new_markets.png') }}" class="mx-auto" width="82"
                        height="58" />
                     <h4 class="h4 icon-title my-4">EXPAND INTO NEW APPLICATIONS AND MARKETS</h4>
                  </div>
                  <div class="icon-body">
                     <ul>
                        <li>Address more final part applications with new levels of repeatable accuracy and
                           best-in-class economics.</li>
                        <li>Produce applications with flexible, elastomeric properties with TPU material.</li>
                        <li>Deliver a breadth of applications for various markets with HP 3D High Reusability PA 11 and
                           PA 12 materials today, and
                           more in the future.</li>
                        <li>Address sustainability, with lower carbon footprint3 parts, and HP 3D materials offering
                           industry-leading reusability.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
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
            market. Using DyeMansion technology, you are able to color your parts reproducible in almost any color of
            choice
            and turn them into high-value, colorful products.</p>
         <a class="btn btn-lg btn-primary btn-rounded mx-auto"
            href="{{route('dyemansion.dyemansion-dm60', ['#standardcolors'])}}">Standard Colors <i
               class="fa fa-chevron-right ml-3" aria-hidden="true"></i></a>
      </div>
   </div>
</section>
<hr />
<section>
   <div class="container">
      <div class="section-title center-block mx-auto">
         <h3 class="mx-auto" style="max-width:600px">Learn more about the HP Jet Fusion 5200</h3>
         <div class="section-title-divider"></div>
      </div>
      <div class="d-flex justify-content-center align-items-center">
         <div id="loaderSpinner"></div>
         <div data-form-block-id="beef6b16-afac-e911-a987-000d3a3702ca"></div>
         <div id="d6Ii0gIBoz22gKnMDefrDrW7D_6Tp_IiMO0xLLPUPsTQ"></div>
      </div>
   </div>
</section>

{{-- <section class="container-fluid d-flex justify-content-start align-items-start py-5">
   <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
      <h2 class="main-title">Technical information</h2>
      <table class="table table-striped ctable">
         <thead class="thead-inverse">
            <tr>
               <th></th>
               <th>Details</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row">Printable build size
                  580/540 Printers:</th>
               <td>up to 7.5 x 13.1 x 9.8 inches
                  (190 mm x 332 mm x 248 mm)</td>
            </tr>
            <tr>
               <th scope="row">Printable build size
                  380/340 Printers:</th>
               <td>up to 7.5 x 10 x 9.8 inches
                  (190 mm x 254 mm x 248 mm)</td>
            </tr>
            <tr>
               <th>
                  Layer thickness:
               </th>
               <td>0.08mm</td>
            </tr>
            <tr>
               <th>
                  Productivity:
               </th>
               <td>Full bucket with 52 parts in about 15 hours, as
                  many as 5 parts in around four hours</td>
            </tr>
            <tr>
               <th>
                  Printer dimensions:
               </th>
               <td>Printer dimensions: 61.6 x 37.6 x 59.3 inches
                  (1565mm x 955mm x 1,505mm) Rear module
                  can be temporarily removed to fit through a
                  36-inch (900mm) door</td>
            </tr>
         </tbody>
      </table>
   </div>
</section> --}}
@stop
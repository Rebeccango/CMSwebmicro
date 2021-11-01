@extends('layouts.layout')
@section('title') Intamsys @stop
@section('meta')
<link rel="canonical" href="{{route('intamsys.index')}}" />
@stop
@section('description')Intamsys - INTelligent Additive Manufacturing SYStems @stop
@section('keywords')intamsys, 3d printing, additive, manufacturing, affordable, reliable, precision @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
   style="min-height:450px; background-image:url({{asset('images/pages/intamsys/intamsys-hero-styled.jpg')}})">
   <div class="parallax-section__shadow"></div>
   <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
         <div>
            <div class="section-title parallax-section__title center-block mx-auto">
               <h1 class="wow fadeIn">INTAMSYS</h1>
               <div class="section-title-divider"></div>
               <h2 class="h3"><strong><em>INT</em></strong>elligent <strong><em>A</em></strong>dditive
                  <strong><em>M</em></strong>anufacturing <strong><em>SYS</em></strong>tems</h2>
            </div>
            <div>
               @include('layouts.generic_contact_buttons')
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section--grey">
   <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
         <div class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-1 order-sm-2 order-xs-2 ">
            <img width="100%" height="auto" class="m-auto" style="margin-top:-50px; max-width:400px"
               src="{{asset('images/pages/intamsys/intamsys-printers.png')}}" />
         </div>
         <div class="col-md-6 col-sm-12 order-md-2 order-sm-1 order-xs-1Right">
            <h2 class="h1 mb-3">INTAMSYS 3D PRINTERS</h2>
            <p class="">INTAMSYS, headquartered in Shanghai, manufactures 3D printers and additive manufacturing
               solutions for PEEK and
               high-performance functional materials. They operate a number of manufacturing and research facilities to
               maintain their
               commitment to delivering the highest manufacturing design and quality standards.</p>
            <p>Their state-of-the-art FUNMAT 3D printers are engineered to enable affordable, highly reliable 3D
               printing of high performance functional materials.
               Today, INTAMSYS 3D printers are trusted globally by industry leaders including Honeywell, Jabil, Bosch,
               FLEX, Sabic, UK
               Atomic Energy Authority, TE Connectivity, Stanford University, Tsinghua University and many others.</p>
         </div>
      </div>
   </div>
</section>
<section class="py-5">
   <div class="container-fluid">
      <div class="section-title parallax-section__title center-block mx-auto">
         <h3 class="h1">HIGH-PERFORMANCE FUNCTIONAL MATERIALS</h3>
         <div class="section-title-divider"></div>
      </div>
      <div class="row d-flex text-center">
         <div class="col-6 d-flex flex-column justify-content-center align-items-center p-4">
            <img class="icon" width="100%" height="auto" src="{{ asset('images/pages/intamsys/material-peek.png') }}"
               alt="peek-material" />
            <div style="max-width:500px;">
               <p class="lead mt-3">PEEK is considered as one of the world’s highest performing functional materials.
               </p>
            </div>
         </div>
         <div class="col-6 d-flex flex-column justify-content-center align-items-center p-4">
            <img class="icon" width="100%" height="auto" src="{{ asset('images/pages/intamsys/material-pekk.png') }}"
               alt="pekk-material" />
            <div style="max-width:500px;">
               <p class="lead mt-3">From the family of PAEK, PEKK is a semi-crystalline thermoplastic often used in
                  extreme
                  operating environments because the material exhibits superior ablative characteristics.</p>
            </div>
         </div>
         <div class="col-6 d-flex flex-column justify-content-center align-items-center p-4">
            <img class="icon" width="100%" height="auto" src="{{ asset('images/pages/intamsys/material-pei.png') }}"
               alt="pei-material" />
            <div style="max-width:500px;">
               <p class="lead mt-3">PEI is an amorphous polymer that combines excellent thermal properties, exceptional
                  dimensional stability, inherent flame retardancy, and good chemical resistance.</p>
            </div>
         </div>
         <div class="col-6 d-flex flex-column justify-content-center align-items-center p-4">
            <img class="icon" width="100%" height="auto" src="{{ asset('images/pages/intamsys/material-ppsu.png') }}"
               alt="ppsu-material" />
            <div style="max-width:500px;">
               <p class="lead mt-3">PPSU offers superior high heat deflection temperature, outstanding resistance to
                  environmental stress cracking and good electrical properties.</p>
            </div>
         </div>
      </div>
</section>
<section>
   <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
         <div class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-1 order-sm-2 order-xs-2">
            <img width="100%" class="m-auto" height="auto" style="max-width:400px"
               src="{{asset('images/pages/intamsys/intamsys-ondemand.png')}}" />
         </div>
         <div class="col-md-6 col-sm-12 order-md-2 order-sm-1 order-xs-1Right">
            <h2 class="h2 mb-3">3D PRINTING SERVICE</h2>
            <p class="lead h4">INTAMSYS On Demand Manufacturing offers fast turnaround time and high-quality parts 3D
               printed in a great variety of
               functional materials. Customers leverage on INTAMSYS materials expertise and 3D printing technologies for
               functional
               prototyping and parts production.</p>
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container-fluid">
      <div class="custom-nav-pills">
         <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
               <a class="nav-link active in" data-toggle="tab" href="#product-family" role="tab">Product Family</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#case-studies" role="tab">Case Studies</a>
            </li>
         </ul>
         <div class="tab-content">
            <div class="tab-pane fade show active in" id="product-family" role="tabpanel">
               <div
                  class="d-flex flex-row w-100 justify-content-center align-items-center flex-wrap flex-md-nowrap p-3">
                  <div class="">
                     <img width="200px" src="{{ asset('images/pages/intamsys/funmat-ht.png') }}" />
                  </div>
                  <div class="pl-5 my-4">
                     <h3>FUNMAT HT</h3>
                     <p class="lead">DESIGNED FOR PEEK 3D PRINTING</p>
                     <p>The FUNMAT HT is fully capable of 3D printing high-performance functional materials like PEEK,
                        ULTEM and PPSU, in
                        addition to a broad range of engineering thermoplastics.</p>
                     <a href="{{ route('intamsys.funmat.ht') }}" class="btn btn-md btn-primary btn-rounded">LEARN
                        MORE</a>
                  </div>
               </div>
               <div
                  class="d-flex flex-row w-100 justify-content-center align-items-center flex-wrap flex-md-nowrap p-3">
                  <div class="">
                     <img width="200px" src="{{ asset('images/pages/intamsys/funmat-pro-410.png') }}" />
                  </div>
                  <div class="pl-5 my-4">
                     <h3>FUNMAT PRO 410</h3>
                     <p class="lead">A MULTIPLE FUNCTIONAL MATERIALS ALL-IN-ONE SOLUTION</p>
                     <p>The FUNMAT PRO 410 is an industrial additive manufacturing 3D printer designed and manufactured
                        by INTAMSYS.</p>
                     <a href="{{ route('intamsys.funmat.pro410') }}" class="btn btn-md btn-primary btn-rounded">LEARN
                        MORE</a>
                  </div>
               </div>
               <div
                  class="d-flex flex-row w-100 justify-content-center align-items-center flex-wrap flex-md-nowrap p-3">
                  <div class="">
                     <img width="200px" src="{{ asset('images/pages/intamsys/funmat-pro-610-ht.png') }}" />
                  </div>
                  <div class="pl-5 my-4">
                     <h3>FUNMAT PRO 610 HT</h3>
                     <p class="lead">FULL-SIZE HIGH PERFORMANCE FUNCTIONAL MATERIALS 3D PRINTER</p>
                     <p>The FUNTMAT PRO 610 HT is an industrial high-end machine designed for critical requirement
                        functional part test & low volume production.</p>
                     <a href="{{ route('intamsys.funmat.pro610ht') }}" class="btn btn-md btn-primary btn-rounded">LEARN
                        MORE</a>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="case-studies" role="tabpanel">
               <div class="row" style="margin:0; padding:0">
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a href="https://www.intamsys.com/case-study-bioneek/" target="_blank" class="pdf-item">
                        <figure>
                           <div class="figimg">
                              <img src="{{asset('images/pages/intamsys/BIoNEEK-Web.png')}}" style="width:100%;"
                                 alt="Pioneering The PEEK 3D Printing of Bionic Knee Brace">
                           </div>
                           <figcaption>Case Study: Pioneering The PEEK 3D Printing of Bionic Knee Brace</figcaption>
                        </figure>
                     </a>
                  </div>
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a href="https://www.intamsys.com/case-study-automotive-pc-gauge/" target="_blank"
                        class="pdf-item">
                        <figure>
                           <div class="figimg">
                              <img src="{{asset('images/pages/intamsys/casestudy.jpg')}}" style="width:100%;"
                                 alt="Expediting Development and Production of Customized Quality Control Gauge">
                           </div>
                           <figcaption>Case Study: Expediting Development and Production of Customized Quality Control
                              Gauge</figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
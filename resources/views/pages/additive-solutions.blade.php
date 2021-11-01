@extends('layouts.layout')
@section('title') Additive Solutions @stop
@section('meta')
<link rel="canonical" href="{{route('additive-solutions.all')}}" />
@stop
@section('description')To drive innovation within our client base, we must be innovative in how and what we deliver in
products and services.
The 3D Printing hardware and software solutions we represent have been carefully researched and chosen. @stop
@section('keywords')3d printing, additive, solutions, innovative @stop
@section('body')
<section data-z-index="0"
   class="parallax-window parallax-section trans-header-window d-flex justify-content-center align-items-center parallax"
   style="min-height:450px; background-image:url({{ asset('images/pages/additive-solutions/hero.png') }})">
   <div class="parallax-section__shadow"></div>
   <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
         <div>
            <div class="section-title parallax-section__title center-block mx-auto">
               <h1>Additive Solutions</h1>
               <div class="section-title-divider"></div>
               <h2 class="h3">To drive innovation within our client base, we must be innovative in how and what we
                  deliver in products and services. The hardware and software solutions we represent have been carefully
                  researched and chosen.</h2>
            </div>
            <div>
               @include('layouts.generic_contact_buttons')
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container pt-5">
      <div class="section-title parallax-section__title center-block mx-auto">
         <h1>3D Printing Solutions</h1>
         <div class="section-title-divider"></div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="markforged">
            <div class="d-flex align-items-center justify-content-center flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-start flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/markforged.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">MARKFORGED</h2>
                  <span class="small">ADDITIVE MANUFACTURING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Functional end-use parts with
                     micro-carbon reinforced Nylon & continuous reinforced composites</p>
                  <a href="{{ route('markforged') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="formlabs">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/formlabs.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">FORMLABS</h2>
                  <span class="small">ADDITIVE MANUFACTURING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Print parts with stereolithography
                     technology for high surface finish & high accuracy</p>
                  <a href="{{ route('formlabs') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="ultimaker">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/ultimaker.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">ULTIMAKER</h2>
                  <span class="small">ADDITIVE MANUFACTURING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Print plastic parts for prototyping,
                     end-use & general purpose at low cost</p>
                  <a href="{{ route('ultimaker') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="intamsys">
            <div class="d-flex align-items-center justify-content-center flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-start flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/intamsys.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">INTAMSYS</h2>
                  <span class="small">ADDITIVE MANUFACTURING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Print with high performance
                     materials such as PEEK, PEKK, PEE-CF, ULTEM, PPSU & more</p>
                  <a href="{{ route('intamsys.index') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="metal-x">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/mf-metal.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">MARKFORGED METAL X</h2>
                  <span class="small">ADDITIVE MANUFACTURING <br>SPECIALITY</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Parts in isotropic metals like A2 Tool
                     Steel, D2 Tool Steel, 17-4PH Stainless Steel, 316L Stainless Steel, Ti 6-4, Inconel 625 & Copper
                  </p>
                  <a href="{{ route('metal-series') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="hp-4200-5200">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/hp-jet-fusion.png')}}" class="mx-auto"
                     width="220px" height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">HP JET FUSION 4200 & 5200</h2>
                  <span class="small">ADDITIVE MANUFACTURING <br>SPECIALITY</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">High quality, strong & end-use
                     production parts in plastic from medium to high volume runs</p>
                  <a href="{{ route('hp') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="hp-300-500">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100 flex-wrap">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%201000%20(with%20background).png" class="mx-auto" width="340px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">TRUMPF</h2>
                  <span class="small">ADDITIVE MANUFACTURING PRODUCTION</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Laser metal fusion additive manufacturing systems for any industrial series production.</p>
                  <a href="{{ route('trumpf.truprint') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="bigrep">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/bigrep.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">BIGREP</h2>
                  <span class="small">ADDITIVE MANUFACTURING <br>SPECIALITY</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Print large 1 cubic-meter protptypes &
                     end-use parts using open source system</p>
                  <a href="{{ route('bigrep') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="nanodimension">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/nanodimension.png')}}" class="mx-auto"
                     width="220px" height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">NANODIMENSION</h2>
                  <span class="small">ADDITIVE MANUFACTURING <br>ELECTRONICS</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Print multi-layer printed circuit
                     boards</p>
                  <a href="{{ route('nano-dimension') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="nanodimension">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/nexa3d/A29A3019-copy-1024x1021.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">NEXA3D</h2>
                  <span class="small">ADDITIVE MANUFACTURING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">The World’s Fastest Industrial 3D Printer</p>
                  <a href="{{ route('nexa3d.nxe400') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container">
      <div class="section-title parallax-section__title center-block mx-auto"
         >
         <h1>CNC MACHINING</h1>
         <div class="section-title-divider"></div>
      </div>
      <div class="row">
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="swcam">
            <div class="d-flex align-items-center justify-content-center flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-start flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/swcam.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">SOLIDWORKS CAM</h2>
                  <span class="small">CNC MACHINING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">2-1/2D milling and 2D turning with
                     Automatic and Interactive Feature Recognition</p>
                  <a href="{{ route('solidworks-cam') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="camworks">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/camworks.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">CAMWORKS</h2>
                  <span class="small">CNC MACHINING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Multi-axis milling and turning with Automatic and Interactive Feature Recognition</p>
                  <a href="{{ route('camWorks') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="swood">
            <div class="d-flex align-items-center justify-content-start flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-center flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/swood.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">SWOOD</h2>
                  <span class="small">CNC MACHINING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Productivity tools for design and
                     manufacturing of wood-based products</p>
                  <a href="{{ route('swood.index') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center my-3" id="exactflat">
            <div class="d-flex align-items-center justify-content-center flex-row flex-md-column h-100">
               <div class="d-flex align-items-center justify-content-start flex-row flex-md-column">
                  <img src="{{asset('images/pages/additive-solutions/exactflat.png')}}" class="mx-auto" width="220px"
                     height="auto" />
               </div>
               <div
                  class="w-100 position-relative mt-3 flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                  <h2 class="text-center h4 flex-grow-1">EXACTFLAT</h2>
                  <span class="small">CNC MACHINING</span>
                  <p class="mt-4 mx-auto m-2 flex-grow-1" style="max-width:600px">Productivity tools for design and
                     manufacturing of upholstery/coverings</p>
                  <a href="{{ route('exactFlat') }}"
                     class="btn btn-sm btn-primary btn-roundedUp btn-dialog px-3 shadow-sm mt-3">LEARN
                     MORE</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@stop
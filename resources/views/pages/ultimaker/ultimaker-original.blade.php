@extends('layouts.layout')
@section('title')
Ultimaker Original+ | Hackable without limits
@stop
@section('meta')
<link rel="canonical" href="{{route('ultimaker-original')}}" />
@stop
@section('description')The Ultimaker Original+ is designed for modification. It’s our original DIY 3D printer kit, and gives users complete freedom to experiment while enjoying consistent, reliable print results.@stop
@section('keywords')Ultimaker Original, DIY 3D printer kit, Ultimaker, 3D Printers, CAD, Design @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('/storage/images/ultimaker/hero/ultimaker-S5-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Ultimaker Original+</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Hackable without limits</h2>
        </div>
        {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">The industrial power of selective laser sintering on your benchtop,
            starting at $9,999.</p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-2 order-sm-1 order-xs-1  wow fadeIn">
        <img width="100%" height="auto" class="m-auto" src="{{asset('storage/images/ultimaker/ultimaker-original/Ultimaker-Original-Plus-hero.png')}}"/>
      </div>
      <div class="col-md-6 col-sm-12 order-md-1 order-sm-2 order-xs-2 wow fadeInRight">
        <h2 class="h1 mb-3">Ultimaker Original+</h2>
        <p class="lead h4">Hackable without limits, our original DIY 3D printer kit gives you endless freedom to experiment and enjoy reliable, accurate and consistent results.</p>
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container-fluid">
    <h2 class="h2 mb-3">Key specifications</h2>
    <div class="row">
      <div class="col-md-3 col-sm-4 mt-4">
        <h3>Build volume</h3>
        <ul class="list-group list-group-flush"><li class="list-group-item"><span>210 x 210 x 205 mm</span></li></ul>
      </div>
      <div class="col-md-3 col-sm-4 mt-4">
        <h3>Materials</h3>
        <ul class="list-group list-group-flush"><li class="list-group-item"><span>PLA, ABS, CPE</span></li></ul>
      </div>
      <div class="col-md-3 col-sm-4 mt-4">
        <h3>Layer resolution</h3>
        <ul class="list-group list-group-flush"><li class="list-group-item"><span>200 to 20 micron</span></li></ul>
      </div>
      <div class="col-md-3 col-sm-4 mt-4">
        <h3>Build speed</h3>
        <ul class="list-group list-group-flush"><li class="list-group-item"><span>Up to 8 mm³/s</span></li></ul>
      </div>
    </div>
  </div>
</section>
<section class="py-5 my-5" style="overflow:visible">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <small>Ultimaker Original+</small>
        <h2 class="h2">Tailored for limitless creativity</h2>
        <div class="py-3">
          <h3 class="h5">Reliable and accurate</h3>
          <p>The Ultimaker Original+ offers industry-leading specifications like 20 micron layer resolution and a print head travel speed of up to 300 mm/s.</p>
        </div>
        <div class="py-3">
           <h3 class="h5">Easy to modify and expand</h3>
           <p>With upgrade capabilities, our 3D printer kit allows you to experiment and keep your machine up-to-date as the technology develops.</p>
        </div>
        <div class="py-3">
            <h3 class="h5">Affordable and fun</h3>
            <p>Assembling your own 3D printer is a fun and great learning experience for those who wish to continue pushing the limits of what is possible.</p>
        </div>
      </div>
      <div class="col-lg-6 d-none d-md-none d-lg-block">
        <figure>
          <img style="position: absolute;top: -8rem;width: 120%;max-width: 91rem;display: inline-block;" src="https://d3v5bfco3dani2.cloudfront.net/img/ultimaker_original/Ultimaker-Original-Compare.png" alt="Ultimaker Original+">
        </figure>
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container-fluid">
    <div class="h5 text-muted mb-3 text-center">Ultimaker Original+</div>
    <h3 class="h2 mb-3 text-center">Make it yours</h3>
    <div class="section-icon-group row mt-4">
      <div class="icon-block col-sm-12 col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class='icon-content'>
          <div class="icon-link">
            <a href="https://www.youtube.com/watch?v=39sZftJd2Vw" class="mp-popup-video mp-single video-play"><img src="{{asset('storage/images/ultimaker/ultimaker-original/3D-printing-primary-school.jpg')}}"></a>
          </div>
          <div class="icon-body mt-3">
            <p>Educator Robin Platjouw created an innovative makerspace at his primary school which includes Ultimaker 3D printers.</p>
          </div>
        </div>
      </div>
      <div class="icon-block col-sm-12 col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
        <div class='icon-content'>
          <div class="icon-link">
            <a href="https://www.youtube.com/watch?v=xQi0gN3rY-o" class="mp-popup-video mp-single video-play"><img src="{{asset('storage/images/ultimaker/ultimaker-original/3D-printed-solar-system.jpg')}}"></a>
          </div>
          <div class="icon-body mt-3">
            <p>This timelapse shows the Ultimaker Original+ print a model that helps explain to primary school students how the solar system works.</p>
          </div>
        </div>
      </div>
      <div class="icon-block col-sm-12 col-md-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class='icon-content'>
          <div class="icon-link">
            <a href="https://www.youtube.com/watch?v=gxarvKbnkzg" class="mp-popup-video mp-single video-play"><img src="{{asset('storage/images/ultimaker/ultimaker-original/Ultimaker-Original-recycled-plastic.jpg')}}"></a>
          </div>
          <div class="icon-body mt-3">
            <p>Project Seafood cleans up beaches in Spain and Morocco, 3D printing on the go with filament made out of the plastic trash they find.</p>
          </div>
        </div>
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
          <a class="nav-link" data-toggle="tab" href="#data-sheet" role="tab">Data Sheets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#case-studies" role="tab">Case Studies</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active in" id="product-family" role="tabpanel">
          @include('pages.matrix.ultimaker-matrix')
        </div>
        <div class="tab-pane fade" id="data-sheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/Ultimaker-Material_Datasheet_04242018_WEB.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/Ultimaker-Material_Datasheet_04242018_WEB.png')}}" style="width:100%;"
                      alt="Ultimaker Material Datasheet">
                  </div>
                  <figcaption>Ultimaker Material Datasheet</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="case-studies" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/Volkswagen.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/Volkswagen.png')}}" style="width:100%;" alt="Ultimaker Volkswagen Case study">
                  </div>
                  <figcaption>Case Study: Volkswagen</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/ABB Robotics.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/ABB Robotics.png')}}" style="width:100%;" alt="Ultimaker ABB Robotics Case Study">
                  </div>
                  <figcaption>Case Study: ABB Robotics</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/ultimaker/JeffDESIGN.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/ultimaker/JeffDESIGN.png')}}" style="width:100%;" alt="Ultimaker Jeff Design Case Study">
                  </div>
                  <figcaption>Case Study: Jeff Design</figcaption>
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
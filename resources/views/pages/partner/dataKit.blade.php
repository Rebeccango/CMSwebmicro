@extends('layouts.layout')
@section('title')
Datakit
@stop
@section('meta')
<link rel="canonical" href="{{route('dataKit')}}" />
@stop
@section('description')Datakit is a leading company founded in 1994, specialized in CAD data exchange solutions and
services. It
offers standalone converters, plug-ins and SDK that import, analyze and export a large number of CAD formats.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/crosscad-hero.jpg')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Datakit</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">A Cross-Cad Conversion Engine Plugin for SolidWorks.</p>
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
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>What is Datakit?</h3>
        <br />
        <p>
          Datakit is a leading company founded in 1994, specialized in CAD data exchange solutions and services. It
          offers standalone converters, plug-ins and SDK that import, analyze and export a large number of CAD formats.
          Datakit exposes a wide range of geometrical and semantic data (assemblies, annotations, metadata, PMI…)
          through its varied range of products.
        </p>
        <p>It also provides support services for the migration of CAD databases to
          help customers choose the best data transfer solutions. It works closely together with independent software
          vendors that currently integrate its CAD data exchange solutions to their own software.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="{{asset('storage/images/SolidWorks/datakit-crosscad-hero.jpg')}}" style="max-width:500px; width:100%;"
          alt="Product Matrix PDF">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#whatsnew" role="tab">What's New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Video Archive</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="matrix" role="tabpanel">
          @include('pages.matrix.solidworks-matrix')
        </div>
        <div class="tab-pane fade" id="datasheet" role="tabpanel">
          <a href="{{asset('storage/pdfs/partner/Datakit.pdf')}}" class="pdf-item">
            <figure>
              <div class="figimg">
                <img src="{{asset('storage/pdfs/partner/Datakit.PNG')}}" style="width:100%;"
                  alt="SolidWorks PDM Professional">
              </div>
              <figcaption>Datakit Data Sheet</figcaption>
            </figure>
          </a>
        </div>
        <div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
          <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.pdf')}}" target="_blank" class="pdf-item">
            <figure style="width:200px;">
              <div class="figimg">
                <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.png')}}" class="w-100"
                  alt="What's new in SOLIDWORKS 2020">
              </div>
              <figcaption>What's new in SOLIDWORKS 2020</figcaption>
            </figure>
          </a>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <video class="video-js vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/SolidWorks Video1.mp4')}}"
                  poster="{{asset('storage/videos/SolidWorks/Productivity_smIcon.jpg')}}" data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/SolidWorks Video1.mp4')}}" type='video/mp4'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Improve Everyday Productivity</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <video class="video-js vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/SolidWorks Video 2.mp4')}}"
                  poster="{{asset('storage/videos/SolidWorks/workprocesses_smIcon.jpg')}}" data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/SolidWorks Video 2.mp4')}}" type='video/mp4'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Optimize Your Work Process</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <video class="video-js vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/SolidWorks Video 2.mp4')}}"
                  poster="{{asset('storage/videos/SolidWorks/Operations_smIcon.jpg')}}" data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/SolidWorks Video 3.mp4')}}" type='video/mp4'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Reduce Operations Costs</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <video class="video-js vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/SolidWorks Video 4.mp4')}}"
                  poster="{{asset('storage/videos/SolidWorks/DesignChallenges_smIcon.jpg')}}"
                  data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/SolidWorks Video 4.mp4')}}" type='video/mp4'>
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Solve More Design Challenges</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container-fluid">
    <h2 class="main-title mt-0">Datakit CAD
      File Translation Solutions capabilities</h2>
    <p>The product listing below describes the
      powerful capabilities of a small sub-set of the many available translators. If you would like to know more or have
      any questions, please use the box below.</p>
    <div class="responsive-tabs-block row mt-2">
      <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#ug" role="tab">UG NX 3D And 2D To SolidWorks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#catiav4" role="tab">CATIA V4 3D And 2D To SolidWorks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#catiavs" role="tab">CATIA V5 3D And 2D To SolidWorks</a>
        </li>
      </ul>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="ug" role="tabpanel">
            <h3>UG NX 3D And 2D To SolidWorks</h3>
            <p>The 3D module enables accurate and convenient CAD data transfer from UNIGRAPHICS 3D to SolidWorks.
              Converts part and assembly files: (*.PRT); translates all 3D data. A UNIGRAPHICS 3D license is not
              required. The 2D module converts CAD data from UNIGRAPHICS 2D to SolidWorks. Converts part and assembly
              files: (*.PRT); tranfers all 2D data. A UNIGRAPHICS 2D license is not required.
            </p>
          </div>
          <div class="tab-pane" id="catiav4" role="tabpanel">
            <h3>CATIA V4 3D And 2D To SolidWorks</h3>
            <p> Enables accurate and convenient CAD data transfer from CATIA V4 3D and 2D files to SolidWorks. Converts
              part and assembly files: .MODEL, .DLV and .EXP files. Data can be filtered based on Entity Type,
              Visibility and Layer. Supports catia layer filter. It allows you to choose axis placement and sew surfacic
              entities. Bi-directional translations are also avaiable with other modules. A CATIA V4 license is not
              required.</p>
          </div>
          <div class="tab-pane" id="catiavs" role="tabpanel">
            <h3>CATIA V5 3D And 2D To SolidWorks</h3>
            <p>The 3D module enables accurate and convenient CAD data transfer from CATIA V5 3D to SolidWorks. Converts
              part and assembly files: .CATPart and .CATProduct files; translates all 3D data, including CATIA V5 Exact
              Solids. Data can be filtered based on entity Type and Visibility. The 2D module converts drawings:
              .CATDrawing files; translates all 2D data. Data can be filtered based on entity type (geometry,
              annotations, dimensions) and layers. Bi-directional translations are also avaiable with other modules. A
              CATIA V5 license is not required.
            </p>
          </div>
        </div>
      </div>
    </div>
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
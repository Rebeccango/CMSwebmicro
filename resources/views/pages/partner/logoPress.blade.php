@extends('layouts.layout')
@section('title')
LogoPress3
@stop
@section('meta')
<link rel="canonical" href="{{route('logoPress')}}" />
@stop
@section('description')Logopress3, BLANK prediction software, Flattening Software, Nesting software, 3D Die Design
Software for progressive die, fineblank die, transfer die is SOLIDWORKS certified. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/logopress3-hero.png')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">LogoPress3</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Logopress3 offers a line of Gold Certified SolidWorks Products to
            deliver powerful, time-saving functionality and
            libraries for tool and die design.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section id="solidworks-products">
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">LogoPress3</h3>
        <br />
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="font-size: 16px;">
          Logopress3 die design software automates many aspects of die design, from unbending and flattening - even
          "dirty" parts, to strip layout, tool design and drawings. The included Logopress3 die simulation even allows
          the die to be
          simulated and interference checked as if it was operating in the press.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <img src="{{asset('storage/images/partner/LogoPress3.jpg')}}" class="img-shadow"
          style="width:100%; border:1px solid #ccc;">
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
          <a href="{{asset('storage/pdfs/partner/LogoPress3.pdf')}}" class="pdf-item">
            <figure>
              <div class="figimg">
                <img src="{{asset('storage/pdfs/partner/LogoPress3.PNG')}}" style="width:100%;"
                  alt="LogoPress3 Data Sheet">
              </div>
              <figcaption>LogoPress3 Data Sheet</figcaption>
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
<section style="padding-top:0">
  <div class="container-fluid">
    <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">
      LogoPress3 capabilities</h2>
    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">LogoPress enables manufacturers to achieve
      significant productivity improvements. Listed below, are some of the powerful features that LogoPressusers
      benefit from. If you would like to know more or have any questions, please use the box below.</p>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#blank" role="tab">Blank For 3D Formed Parts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#unbending" role="tab">Unbending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#strip" role="tab">Strip Layout Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#round" role="tab">Round Draw Module</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#standard" role="tab">Standard Components Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tools" role="tab">Tools And Die Function</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#dynamic" role="tab">Dynamic Interference Detection And
              Animation</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="blank" role="tabpanel">
            <h3>Blank For 3D Formed Parts</h3>
            <p>Whether for estimating, design or manufacturing purposes, Logopress3 Blank significantly improves and
              shortens the process. Logopress3™ BLANK can also be used to flatten various applications, such as:
              cloth, plastics, adhesives, leather, inflatable objects, packaging, etc.</p>
          </div>
          <div class="tab-pane" id="unbending" role="tabpanel">
            <h3>Unbending</h3>
            <p>With a few mouse cliks you can unfold your part and then model the intermediate stages that will allow
              defining the process that will become your strip layout. Logopress3 Unbending siginficantly increases
              the accuracy of estimating and the cost and time required for the design process.</p>
          </div>
          <div class="tab-pane" id="strip" role="tabpanel">
            <h3>Strip Layout Design</h3>
            <p>The strip layout module can be used for both progressive dies and transfer dies. It allows quickly
              modeling the true solid 3D strip in a very easy and logical process. The strip layout module allows
              managing multiple parts in one strip, whether they be identical, mirrored or completely different parts
              in the same strip.</p>
          </div>
          <div class="tab-pane" id="round" role="tabpanel">
            <h3>Round Draw Module</h3>
            <p>Imagery is communication. with KeyShot you can reate stunning visuals of your 3D data to communicate
              concepts, deliver internal presentations, develop digital prototypes and create sales or marketing
              material.</p>
          </div>
          <div class="tab-pane" id="standard" role="tabpanel">
            <h3>Standard Components Library</h3>
            <p>A powerful Tool Structure Assistant that allows you to quickly model the main die components. It is
              also very useful throughout the entire die design process when you need to insert additional plates. You
              can very easily and very quickly insert a plate or an assembly of plates and then adjust the dimensions.
              The plates can be named at this point and material type and heat treatment can also be specified at the
              time of insertion.</p>
          </div>
          <div class="tab-pane" id="tools" role="tabpanel">
            <h3>Tools And Die Function</h3>
            <p>Powerful features to “Mount” (cut all openings in all plates) the cutting, bending and forming punches.
            </p>
          </div>
          <div class="tab-pane" id="dynamic" role="tabpanel">
            <h3>Dynamic Interference Detection And Animation</h3>
            <p>Logopress3 includes an Intelligent Animation command, which automatically does interference and
              collision detection throughout the die while showing the entire die operating as if it were in the
              press, including the strip lifting and advancing with each press stroke.</p>
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
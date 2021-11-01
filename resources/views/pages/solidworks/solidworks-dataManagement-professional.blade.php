@extends('layouts.layout')
@section('title')
SOLIDWORKS PDM Professional
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-dataManagement')}}" />
@stop
@section('description')SOLIDWORKS® Data Management solutions offer a range of applications with capabilities for quickly
and efficiently
managing data files and documentation to maximize productivity and improve product quality. @stop
@section('keywords')3D, Design Software, PDM, CAD, 3D CAD, SOLIDWORKS, 3D Software, Product Design, Engineering
Software, 3D Design, Design Analysis, Standard, PDM, Product Data Management, Professional @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
style="min-height:450px; background-image:url({{asset('/storage/banners/solidworks_bg.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks PDM Professional</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">SOLIDWORKS® Data Management solutions offer a range of applications
            with capabilities for quickly and efficiently
            managing data files and documentation to maximize productivity and improve product quality.</p>
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
    <div class="content">
      <div class="section-title center-block mx-auto">
        <h1>SolidWorks PDM Professional</h1>
        <div class="section-title-divider"></div>
      </div>
    </div>
  </div>
  <div class="section-secondary">
    <div class="container-fluid">
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>SolidWorks PDM Professional</h2>
          <br />
          <p>
            SolidWorks PDM Professional is a full-featured data management solution for organizations large and small.
            A data vault powered by Microsoft® SQL Server® guarantees all information is securely stored and indexed for
            fast retrieval by authorized users within
            your company. Easy to implement, fully configurable and extensible via the API, SolidWorks PDM Professional
            efficiently guides your product teams through
            your development processes, ensuring that team members have access to the right files at the right time.
            Localized vault replication and support of multiple
            CAD applications provides unmatched productivity, no matter the size, distribution, and diversity of your
            organization.
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/FvTbKcnOCVM" class="embed-responsive-item" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="videoCaption w-100">What's New in SOLIDWORKS 2021 - PDM</div>
        </div>
      </div>
    </div>
  </div>
  {{-- <section>
    <div class="container-fluid">
      <div class="section-block row align-items-center px-3">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-sm-4">
          <div class="h3 wow fadeInLeft text-center text-md-left" data-wow-duration="1s" data-wow-delay="0.3s">What's
            New in SolidWorks 2018?</div>
          <p class="wow fadeInLeft text-center text-md-left" data-wow-duration="1s" data-wow-delay="0.3s">
            SOLIDWORKS PDM 2018 is packed full of new features and enhancements to improve file management, most of
            which were created in direct response to customer requests. During this recorded webinar we demonstrate the
            new Branch and Merge feature, SOLIDWORKS Revision Table integration, and discuss many other new enhancements
            added to the latest version of PDM.
          </p>
        </div>
        <div
          class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeIn order-last order-sm-first order-md-last text-center"
          data-wow-duration="1s" data-wow-delay="0.6s">
          <div class="videoWrapper">
            <iframe width="100%" height="100%" style="min-height:280px" class="mx-auto align-self-center"
              src="https://www.youtube.com/embed/Mzx5cXbaodY" frameborder="0" allow="autoplay; encrypted-media"
              allowfullscreen></iframe>
          </div>
          <div class="videoCaption">Webinar: What's new in SOLIDWORKS 2020?</div>
        </div>
      </div>
    </div>
  </section> --}}
  <section>
    <div class="container-fluid">
      <div class="section-block row align-items-center px-3">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeIn order-first text-center" data-wow-duration="1s"
          data-wow-delay="0.2s">
          <div class="videoWrapper">
            <iframe width="100%" height="100%" style="min-height:280px" class="mx-auto align-self-center"
              src="https://www.youtube.com/embed/6p15YzSShSA" frameborder="0" allow="autoplay; encrypted-media"
              allowfullscreen></iframe>
          </div>
          <div class="videoCaption">Video: An Introduction to SOLIDWORKS PDM</div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-sm-4">
          <div class="h3 wow fadeInRight text-center text-md-left" data-wow-duration="1s" data-wow-delay="0.6s">An
            Introduction to SolidWorks PDM</div>
          <p class="wow fadeInRight text-center text-md-left" data-wow-duration="1s" data-wow-delay="0.6s">
            SOLIDWORKS PDM 2019 is packed full of new features and enhancements to improve file management, most of
            which were created in direct response to customer requests. During this recorded webinar we demonstrate the
            new Branch and Merge feature, SOLIDWORKS Revision Table integration, and discuss many other new enhancements
            added to the latest version of PDM.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="custom-nav-pills">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link  active in" data-toggle="tab" href="#feature-matrix" role="tab">Matrix</a>
          </li>
          <li class="nav-item d-none">
            <a class="nav-link" data-toggle="tab" href="#comparison" role="tab">Comparison</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#whatsnew" role="tab">What's New</a>
          </li>
          <li class="nav-item d-none">
            <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Video Archive</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active in" id="feature-matrix" role="tabpanel">
            @include('pages.matrix.solidworks-pdm-matrix')
          </div>
          <div class="tab-pane fade d-none" id="comparison" role="tabpanel">
            <div class="row mt-0 p-0">
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a target="_blank" href="{{asset('storage/pdfs/solidworks/2018/PDM Comparison Matrix March-2018.pdf')}}"
                  class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2018/PDM Comparison Matrix March-2018.png')}}"
                        style="width:100%;" alt="PDM Comparison Matrix 2018">
                    </div>
                    <figcaption>PDM Comparison Matrix 2018</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="datasheet" role="tabpanel">
            <div class="row" style="margin:0; padding:0">
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="{{asset('storage/pdfs/solidworks/2018/pdm_2018_data_sheet.pdf')}}" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2018/pdm_2018_data_sheet.png')}}" style="width:100%;"
                        alt="SOLIDWORKS PDM Data Sheet">
                    </div>
                    <figcaption>SolidWorks PDM Data Sheet</figcaption>
                  </figure>
                </a>
              </div>
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="{{asset('storage/pdfs/solidworks/2018/pdm_2018.pdf')}}" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2018/pdm_2018.png')}}" style="width:100%;"
                        alt="SOLIDWORKS PDM">
                    </div>
                    <figcaption>SolidWorks PDM</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="whatsnew" role="tabpanel">
            <div class="row m-0 p-0">
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 Data Management.pdf')}}" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 Data Management.png')}}" class="w-100" alt="Top 10 in SOLIDWORKS Data Management 2020">
                    </div>
                    <figcaption>Top 10 in SOLIDWORKS Data Management 2020</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade d-none" id="videos" role="tabpanel">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
                <div class="videoWrapper">
                  <video class="video-js vjs-16-9" controls preload="auto"
                    src="{{asset('storage/videos/SolidWorks/SolidWorks Video1.mp4')}}"
                    poster="{{asset('storage/videos/SolidWorks/Productivity_smIcon.jpg')}}"
                    data-setup='{"fluid": true}'>
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
                    poster="{{asset('storage/videos/SolidWorks/workprocesses_smIcon.jpg')}}"
                    data-setup='{"fluid": true}'>
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
        SolidWorks PDM Professional Capabilities</h2>
      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Listed below, are some of the powerful
        features that SolidWorks PDM Professional users benefit from. If you would like to know more or have any
        questions, please contact us.</p>

      <div class="responsive-tabs-block row" style="margin-top:10px">
        <div class="">
          <!-- required for floating -->
          <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#fileManagement" role="tab">File Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#revisionManagement" role="tab">Revision Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#billOfMaterials" role="tab">Bill of Materials Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#collaboration" role="tab">Distributed Collaboration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#regulatoryCompliance" role="tab">Regulatory Compliance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#designReuse" role="tab">Design Reuse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#engineering" role="tab">Engineering Change Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#fileVaulting" role="tab">Secure File Vaulting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#scalability" role="tab">Enterprise Scalability</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <!-- Tab panes -->

          <div class="tab-content responsive-tabsContent">
            <div class="tab-pane active" id="fileManagement" role="tabpanel">
              <h3>File Management</h3>
              <div class="videoWrapper">
                <video id="fileManagementVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/PDM/File-Management-PDM-Professional.mp4')}}"
                  data-setup='{"fluid": true}' poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}">
                  <source src="{{asset('storage/videos/SolidWorks/PDM/File-Management-PDM-Professional.mp4')}}"
                    type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: File Management Preview</div>
              <p>
                Manage all types of product development files using affordable, easy-to-implement SolidWorks PDM
                Professional or SolidWorks PDM Standard product
                data management solutions. These robust file management solutions provide the centralized file vaulting
                capabilities needed to manage and control
                electronic intellectual property and product design data. With little user overhead and a short learning
                curve, the system delivers a low total cost of
                ownership. The intuitive user interface, built right into Windows® Explorer, is extremely easy to use
                because there’s no need to learn a separate
                interface.
              </p>
            </div>
            <div class="tab-pane" id="revisionManagement" role="tabpanel">
              <h3>Revision Management</h3>
              <div class="videoWrapper">
                <video id="revisionManagementVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/PDM/Revision-PDM-Professional.mp4')}}"
                  data-setup='{"fluid": true}' poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}">
                  <source src="{{asset('storage/videos/SolidWorks/PDM/Revision-PDM-Professional.mp4')}}"
                    type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Revision Management Analysis Preview</div>
              <p>
                Focus on innovative product development by managing design revisions more effectively with SolidWorks
                PDM Professional or SolidWorks
                PDM Standard software. Track changes, maintain a complete revision history of a design’s evolution, and
                avoid the errors of manual approaches.
              </p>
            </div>
            <div class="tab-pane" id="billOfMaterials" role="tabpanel">
              <h3>Bill of Materials Management</h3>
              <div class="videoWrapper">
                <video id="billOfMaterialsVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/PDM/Bill-of-Materials-PDM-Professional.mp4')}}"
                  data-setup='{"fluid": true}'
                  poster="{{asset('storage/videos/SolidWorks/Plastic-and-Rubber-Parts.png')}}">
                  <source src="{{asset('storage/videos/SolidWorks/PDM/Bill-of-Materials-PDM-Professional.mp4')}}"
                    type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Bill of Materials Management Analysis Preview</div>
              <p>
                Efficiently and accurately maintain bill of materials (BOM) information with the BOM management
                solutions in SolidWorks PDM Professional software.
                Traditional maintenance of BOM information using standard spreadsheet tools is inefficient and
                error-prone with no direct link to the CAD data.
                The SolidWorks PDM Professional system offers a range of tools for making BOM information management
                more efficient, enabling you to export BOM data in
                multiple ways to use in downstream applications and systems, and giving non-CAD users access to BOM
                data.
              </p>
            </div>
            <div class="tab-pane" id="collaboration" role="tabpanel">
              <h3>Distributed Collaboration</h3>
              <div class="videoWrapper">
                <video id="collaborationVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/PDM/Distribution-PDM-Professional.mp4')}}"
                  data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/PDM/Distribution-PDM-Professional.mp4')}}"
                    type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Distributed Collaboration Analysis Preview</div>
              <p>
                Drive collaboration throughout your organization, whether it’s in just one place or around the world.
                SolidWorks PDM Professional provides the tools and
                capabilities that your enterprise needs to keep people connected, up to date, and working on the same
                set of data, regardless of their location.
                This global connectivity supports the distributed collaboration that is essential for compressing
                engineering cycles and accelerating time-to-market.
              </p>
            </div>
            <div class="tab-pane" id="regulatoryCompliance" role="tabpanel">
              <h3>Regulatory Compliance</h3>
              <p>
                The SolidWorks PDM Professional system helps companies in regulated fields (like medical device
                development) comply with government regulatory requirements or industry standards for controlled
                development processes and product documentation by increasing operational efficiency, ensuring
                regulations are met,and generating the information needed to demonstrate compliance.
                SolidWorks PDM Professional takes just weeks to implement—not the months needed by other systems—to
                improve both processes and documentation performance. Its high user acceptance and low total cost of
                ownership enable compliance efforts to be improved quickly and affordably, providing a rapid return on
                your investment.
            </div>
            <div class="tab-pane" id="designReuse" role="tabpanel">
              <h3>Design Reuse</h3>
              <div class="videoWrapper">
                <video id="designReuseVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/PDM/Design-Reuse-PDM-Professional.mp4')}}"
                  data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/PDM/Design-Reuse-PDM-Professional.mp4')}}"
                    type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Design Reuse Preview</div>
              <p>
                Save time, control costs, and improve quality through design reuse, using SolidWorks PDM Professional or
                SolidWorks PDM Standard to create a framework
                for quickly locating and reusing or repurposing existing design data. Instead of spending time trying to
                find prior designs on shared drives or local
                workstations—or recreating designs when you can’t find them—you can use SolidWorks PDM tools to locate
                them quickly.
              </p>
            </div>
            <div class="tab-pane" id="engineering" role="tabpanel">
              <h3>Engineering Change Management</h3>
              <div class="videoWrapper">
                <video id="engineeringVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/PDM/Engineering-Change-Management-PDM-Professional.mp4')}}"
                  data-setup='{"fluid": true}'>
                  <source
                    src="{{asset('storage/videos/SolidWorks/PDM/Engineering-Change-Management-PDM-Professional.mp4')}}"
                    type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Engineering Change Management Preview</div>
              <p>
                Significantly reduce the time needed to complete your design approval and engineering change order (ECO)
                processes with the automated electronic workflow system in SolidWorks PDM Professional software.
                Automatically expedite the flow of information instead of managing engineering changes through manual or
                paper-based methods—often so time-consuming that they require full-time staff to coordinate.
              </p>
            </div>
            <div class="tab-pane" id="fileVaulting" role="tabpanel">
              <h3>Secure File Vaulting</h3>
              <div class="videoWrapper">
                <video id="engineeringVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/PDM/Secure-File-Vaulting-PDM-Profesional.mp4')}}"
                  data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/PDM/Secure-File-Vaulting-PDM-Profesional.mp4')}}"
                    type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Secure File Vaulting Preview</div>
              <p>
                Securely control access to sensitive or proprietary product information using the easy-to-implement
                SolidWorks PDM Professional and SolidWorks PDM Standard systems. With secure file vaulting, user access
                is tightly managed—even within distributed computing environments—and security risks that arise from
                using shared network drives are eliminated.
                The benefits of secure file vaulting extend beyond individual file security and user access control,
                including:
              </p>
              <ul>
                <li>
                  Workflow tracking
                </li>
                <li>
                  File routing
                </li>
                <li>
                  Data storage
                </li>
                <li>
                  Replication
                </li>
                <li>
                  Data backup
                </li>
              </ul>
              <p>
                With SolidWorks PDM products, data is kept secure, up to date, and accessible. The system eliminates
                duplicate work and delays, while saving time and development costs.
              </p>
            </div>
            <div class="tab-pane" id="scalability" role="tabpanel">
              <h3>Enterprise Scalability</h3>
              <div class="videoWrapper">
                <video id="scalabilityVideo" class="video-js  vjs-16-9" controls preload="auto"
                  src="{{asset('storage/videos/SolidWorks/PDM/Enterprise-Scalability-PDM-Professional.mp4')}}"
                  data-setup='{"fluid": true}'>
                  <source src="{{asset('storage/videos/SolidWorks/PDM/Enterprise-Scalability-PDM-Professional.mp4')}}"
                    type='video/mp4'>
                  <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                  <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                  </p>
                </video>
              </div>
              <div class="videoCaption">Video: Enterprise Scalability Preview</div>
              <p>
                Easily connect the design data needs of your entire enterprise, whether for just a few users in a single
                location or hundreds of contributors working in
                multiple locations around the world. SolidWorks PDM Professional provides one convenient, vaulted
                location where colleagues can store and retrieve data.
                Efficient file storage and retrieval enables millions of files to be managed.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
@stop
@push('after-scripts')
<script>
  $(function(){
    $('#videos .row > div').matchHeight();
  });
</script>
@endpush
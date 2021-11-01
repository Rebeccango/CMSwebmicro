@extends('layouts.layout')
@section('title')
Subscription Services - SOLIDWORKS Subscription Service
@stop
@push('meta')
<link rel="canonical" href="{{route('subscription-services')}}" />
@endpush
@section('description')Intuitive 3D design and product development solutions from SOLIDWORKS let you conceptualize,
create, validate, communicate, manage, and transform your innovative ideas into great product designs. @stop
@section('keywords')3D, Design Software, CAD, 3D CAD, SolidWorks, 3D Software, Product Design, Engineering Software, 3D
Design, Design Analysis,Translate, Electrical, Premium, Standard, Professional @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
background-image:url(storage/images/subscription_service_bg.jpg)">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid mt-5">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>SOLIDWORKS SUBSCRIPTION SERVICES</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Optimize and Maximize Your Investment</h2>
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
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1 class="main-title">SolidWorks Subscription Services</h1>
        <p>
          The Subscription Service Program allows you to access all major SolidWorks version upgrades and service packs,
          live and ongoing technical support, and comprehensive online resources. There are exceptional benefits of
          using SolidWorks Subscription Services.
        </p>
        <img src="{{ asset('/images/pages/solidworks/SW_Labels_SubService_190Club_2020.jpg') }}" width="180px"
          height="auto" class="img-fluid mt-3" />
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="videoWrapper">
          <video id="motionAnalysis1" class="video-js vjs-16-9" controls preload="auto"
            src="{{asset('storage/videos/SolidWorks/SolidWorksSubscription.mp4')}}" width="100%" height="264"
            poster="{{asset('storage/videos/SolidWorks/SolidWorksSubscription.png')}}" data-setup='{"fluid": true}'>
            <source src="{{asset('storage/videos/SolidWorks/SolidWorksSubscription.mp4')}}" type='video/mp4'>
            <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
            <p class="vjs-no-js"> 
              To view this video please enable JavaScript, and consider upgrading to a web browser that
              <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </div>
        <div class="videoCaption">Video: First Look SolidWorks Subscription Services</div>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <div class="custom-nav-pills">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  active in" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#whatsnew" role="tab">What's New</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade" id="matrix" role="tabpanel">
            @include('pages.matrix.solidworks-matrix')
          </div>
          <div class="tab-pane fade   show active in" id="datasheet" role="tabpanel">
            <a href="{{asset('storage/pdfs/solidworks/SolidWorksSubscription.pdf')}}" class="pdf-item">
              <figure>
                <div class="figimg">
                  <img src="{{asset('storage/pdfs/solidworks/SolidWorksSubscription.PNG')}}" style="width:100%;"
                    alt="SolidWorks PDM Professional">
                </div>
                <figcaption>SOLIDWORKS SUBSCRIPTION SERVICE PROGRAM</figcaption>
              </figure>
            </a>
          </div>
          <div class="tab-pane fade" id="whatsnew" role="tabpanel">
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
        </div>
      </div>
    </div>

    <div class="container-fluid" style="padding-top:30px;">
      <h2 class="main-title Left" style="margin-top:0" data-wow-delay="0.2s">
        Capabilities</h2>
      <p class="Up" data-wow-delay="0.2s"> Listed below, are some of the powerful
        features that SOLIDWORKS Subscription Services Professional users benefit from. With the addition of standard
        part libraries, utilities that will search for design errors, fasteners and tools that will automatically
        estimate your manufacturing costs, the capabilities are endless. If you would like to know more or have any
        questions, please use the box below.</p>
      <div class="responsive-tabs-block row" style="margin-top:10px">
        <div>
          <!-- required for floating -->
          <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#versions" role="tab">Full Access to All SolidWorks
                Versions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#softwareUpgrades" role="tab">New Software Releases and
                Software Upgrades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#techSupport" role="tab">Comprehensive Technical Support</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#CustomerPortal" role="tab">SOLIDWORKS Customer Portal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#cswaExam" role="tab">CSWA/CSWP Exam</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#caseStudies" role="tab">Case Studies</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="tab-content responsive-tabsContent">
            <div class="tab-pane active" id="versions" role="tabpanel">
              <h3>Full Access to All SolidWorks Versions</h3>
              <p>
                SolidWorks provides the tools that allow your design team to Design Without Limits. The SolidWorks
                Subscription Service Program enables you to focus on what matters most—designing better products.
                Subscription Services keeps your software updated, so your products spends less time in the design
                process and get to the market sooner. <br /><br />
                As a Subscription Service Customer, you receive full access to all SolidWorks version upgrades,
                comprehensive technical support from CAD MicroSolutions and added benefits such as complimentary upgrade
                training, CSWP credits, additional training discounts, as well as the ability to request software
                enhancements that influence the software design. <br /><br />
                You also gain access to the SolidWorks Customer Portal—a web-based hub for SolidWorks resources.
              </p>
            </div>
            <div class="tab-pane" id="softwareUpgrades" role="tabpanel">
              <h3>New Software Releases and Software Upgrades</h3>
              <p>
                Receive new versions of SolidWorks software to further improve your performance and productivity,
                leverage innovative tools and leading-edge techniques to create designs faster and more accurately.
                Download service pack upgrades of the most current version of SolidWorks software, with enhancements
                that address important issues reported by customers.
              </p>
            </div>
            <div class="tab-pane" id="techSupport" role="tabpanel">
              <h3>Comprehensive Technical Support</h3>
              <span>As a Subscription Service Customer you have full access to our highly experienced SolidWorks
                Certified Applications Specialist:</span><br /><br />
              <span><strong>Live Support</strong></span>
              <ul>
                <li><span>Telephone Assistance – for issues which require immediate resolution call us toll free at
                    1-888-401-5885, from Monday – Friday 9am EST to 5pm EST</span></li>
                <li><span>Online Ticketing System – submit support queries directly using Kayako and one of our
                    application specialist will contact you.</span></li>
              </ul>
              <span><strong>Ongoing Support</strong></span>
              <ul>
                <li><span>Improve your designs with productivity tips and tricks, coaching, best practices.</span></li>
              </ul>
            </div>
            <div class="tab-pane" id="CustomerPortal" role="tabpanel">
              <h3>SolidWorks Customer Portal</h3>
              <span>Gain full access to an expansive web-based repository containing libraries, knowledgebase, FAQs and
                a vast user community.</span>
              <span style="font-size:13px"><strong>My Support</strong> – Experience a diverse set of tools designed to
                maximize your productivity, including:</span><br /><br />
              <ul style="font-size: 13px;">
                <li><span>Service Requests (SRs) – Submit incident reports to technical support for prompt resolution.
                    View status updates using assigned SR tracking numbers.</span></li>
                <li><span>Software Performance Reports (SPRs) – Submit incident reports of confirmed software issues to
                    our development team. View status updates using assigned SPR tracking numbers and monitor issue
                    resolution in documented service packs.</span></li>
                <li><span>Knowledge base – Find answers to all your questions quickly and conveniently.</span></li>
                <li><span>Access a powerful search engine to search an extensive library of technical documentation,
                    such as Solutions, Help Topics, Tech Tips, and Best Practices.</span></li>
                <li><span>Enhancement requests – Influence the development of future SolidWorks products by providing
                    input on your specific functionality requirements. Based on these enhancement requests, new
                    functionality and enhancements are introduced with each new software release.</span></li>
              </ul>
              <span><strong>Technical Content</strong> – Access all our archives, from webcasts and Tech Tips to
                administrative guides and technical presentations.</span>
              <span style="font-size:13px"><strong>Discussion Forums</strong> – Connect with other members of the
                SolidWorks Community. Participate in a broad range of discussion topics on virtually all facets of
                SolidWorks software and design development applications.</span>
            </div>
            <div class="tab-pane" id="cswaExam" role="tabpanel">
              <h3>CSWA/CSWP Exam</h3>
              <p>
                The CSWP (Certified SolidWorks Professional) and CSWA (Certified SolidWorks Associate) exams measure
                user proficiency— enabling managers to highlight areas that could require additional training. If you’re
                a current subscription customer, you will be allowed to take a CSWA or CSWP certification as well as one
                of the specialty exams for free!
              </p>
            </div>
            <div class="tab-pane" id="caseStudies" role="tabpanel">
              <h3>Case Studies</h3>
              <br /><span><strong>Design {IT} Mill</strong></span><br />
              <div class="slide-entry-excerpt entry-content">
                <span style="font-size:13px">Engineering and Fabricating Complex Architectural Forms With SOLIDWORKS
                  Solutions.</span><br />
                <br /><span><strong>Consultec Ltd.</strong></span><br />
                <span style="font-size:13px">Bringing Integrated Plant Design To Minerals Processing Projects With
                  SOLIDWORKS.</span><br />
                <br /><span><strong>TMT Observatory</strong></span><br />
                <div class="slide-entry-excerpt entry-content">
                  <span style="font-size:13px">Managing Creation of the World’s Largest Telescope With SOLIDWORKS
                    Enterprise PDM.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
</section>
@stop
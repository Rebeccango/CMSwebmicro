@extends('layouts.layout')
@section('title')
SolidWorks Sustainability
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-simulation-sustainability')}}" />
@stop
@section('description')SOLIDWORKS Sustainability provides a screening-level life cycle assessment (LCA) of the
environmental impacts of your full design, with seamless integration to your design process.@stop
@section('keywords')SolidWorks, Flow, Simulation, Flow Simulation, Computational fluid dynamics, Sustainability,
Simulation Sustainability @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('storage/banners/solidworks_simulation_banner.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks Sustainability</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">SolidWorks Sustainability provides a screening-level life cycle
            assessment (LCA) of the environmental impacts of your
            full design, with seamless integration to your design process.</p>
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
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks Sustainability</h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
    </div>
  </div>
  <div class="section-secondary">
    <div class="container-fluid">
      <div class="section-block row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks Sustainability</h3>
          <br />
          <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
            SolidWorks Sustainability provides a screening-level life cycle assessment (LCA) of the environmental
            impacts of your full design, with seamless
            integration to your design process. It includes the diverse tools of Sustainability Xpress (parts
            assessment, alternative materials search, and
            environmental impact dashboard) with additional capability to assess both parts and assemblies, using
            parameters such as transportation mode and distance,
            assembly energy, and use-phase energy consumption. Flexible inputs, such as recycled content level and
            end-of-life scenarios, enable more detailed
            assessments. You can even perform time-dependent environmental comparisons using the varying lifetimes of
            different design solutions.
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="videoWrapper">
            <video id="motionAnalysis1" class="video-js" controls preload="auto"
              src="{{asset('storage/videos/SolidWorks/Simulation/solidworks-simulation-sustainability-first-look.mp4')}}"
              width="100%" height="264" poster="{{asset('storage/videos/solidworks_thumbnail.jpg')}}"
              data-setup='{"fluid": true}'>
              <source
                src="{{asset('storage/videos/SolidWorks/Simulation/solidworks-simulation-sustainability-first-look.mp4')}}"
                type='video/mp4'>
              <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
              <p class="vjs-no-js">
                To view this video please enable JavaScript, and consider upgrading to a web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
              </p>
            </video>
          </div>
          <div class="videoCaption">Video: First Look SolidWorks Sustainability</div>
        </div>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid">
      <div class="custom-nav-pills">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#feature-matrix" role="tab">Matrix</a>
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
          <div class="tab-pane fade" id="feature-matrix" role="tabpanel">
            @include('pages.matrix.solidworks-simulation')
          </div>
          <div class="tab-pane fade" id="datasheet" role="tabpanel">
            <div class="row" style="margin:0; padding:0">
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Simulation.pdf')}}" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Simulation.png')}}" style="width:100%;"
                        alt="SOLIDWORKS Flow Simulation Data Sheet">
                    </div>
                    <figcaption>SolidWorks Flow Simulation Data Sheet</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
            <div class="row" style="margin:0; padding:0">
              <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 Simulation.pdf')}}" class="pdf-item">
                  <figure>
                    <div class="figimg">
                      <img src="{{asset('storage/pdfs/solidworks/2020/Top 10 Simulation.png')}}" style="width:100%;"
                        alt="What's new in SOLIDWORKS Simulation 2020">
                    </div>
                    <figcaption>SOLIDWORKS Simulation Top 10 in 2020</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="videos" role="tabpanel">
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
  <section class="pt-0">
    <div class="container-fluid">
      <h2 class="main-title mt-0">
        Sustainability capabilities</h2>
      <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">SolidWorks Sustainability uses the
        gold-standard GaBi LCA environmental impact database from
        PE International. You can download updates as they become available, and even request new LCA datasets for your
        custom materials and processes as a premium service in partnership with PE International. Listed below, are some
        of the powerful features that SolidWorks Sustainability users benefit from.
        With the addition of standard part libraries, utilities that will search for design errors, fasteners and tools
        that will automatically estimate your manufacturing costs, the capabilities are endless. If you would like to
        know more or have any questions, please use the box below.</p>
      <div class="responsive-tabs-block row" style="margin-top:10px">
        <div>
          <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#sustainabilityDesign" role="tab">Sustainable
                Design</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#reportGen" role="tab">Automatic Sustainability Report
                Generation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#gabi" role="tab">GaBi Environmental Database</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#impact" role="tab">Environmental Impact Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#material" role="tab">Material Optimization</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#thermal" role="tab">Assembly Visualization</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#screening" role="tab">Screening-Level Life Cycle Assessment
                (LCA)</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <!-- Tab panes -->

          <div class="tab-content responsive-tabsContent">
            <div class="tab-pane active" id="sustainabilityDesign" role="tabpanel">
              <h3>Sustainable Design</h3>
              <p>
                SolidWorks Sustainability provides actionable environmental results by measuring the environmental
                impacts of individual designs across the product
                life cycle—including the effects of material, manufacturing, assembly, and transportation. Using
                industry-standard life cycle assessment (LCA) criteria,
                the software generates instantaneous feedback at a fraction of the time and cost of a typical
                assessment. In addition to helping you reduce production
                costs and develop greener products, environmental assessment can lower the total cost of ownership (TCO)
                of your products by evaluating potential
                transportation, usage, and disposal effects.
              </p>
            </div>
            <div class="tab-pane" id="reportGen" role="tabpanel">
              <h3>Automatic Sustainability Report Generation</h3>
              <p>
                Capture and communicate the results of your environmental impacts assessments by automatically and
                instantaneously generating sustainability reports. SolidWorks Sustainability software automatically
                generates a professional-quality sustainability report that details your product assumptions, the
                results of the Environmental Impact Dashboard, a hot-spot analysis of components in the assembly, and
                comparison to the baseline design. The report also includes a glossary of terms relevant to
                environmental life cycle assessment.
              </p>
            </div>
            <div class="tab-pane" id="gabi" role="tabpanel">
              <h3>GaBi Environmental Database</h3>
              <p>
                Use the worldwide gold standard for environmental impact data to ensure the validity and credibility of
                your environmental impacts assessments with SolidWorks Sustainability software . The extensive GaBi®
                Life Cycle Inventory (LCI) database, created by PE INTERNATIONAL, a pioneering life cycle assessment
                (LCA) firm, is built on scientific expertise and empirical data gathered over 20-plus years. The GaBi
                environmental database is regularly updated inside SolidWorks Sustainability to ensure information is
                current.
              </p>
            </div>
            <div class="tab-pane" id="impact" role="tabpanel">
              <h3>Environmental Impact Dashboard</h3>
              <p>
                See the environmental impacts of your design in real time as you make design changes or product
                decisions with the SolidWorks Sustainability built-in Environmental Impact Dashboard. The dashboard
                tracks four key environmental indicators (carbon footprint, total energy consumed, impacts to the air,
                and impacts to the water) to continually assess environmental impacts as you design, helping you make
                important design decisions that save time, reduce costs, and improve your products.
              </p>
            </div>
            <div class="tab-pane" id="material" role="tabpanel">
              <h3>Material Optimization</h3>
              <p>
                Optimize material usage to lessen environmental impacts by quickly finding alternative materials that
                match your engineering parameters. Use the Find Similar Materials tool to specify the engineering
                parameters that are critical to your design and search the SolidWorks material database for all
                materials that match those parameters. This enables you to satisfy your design requirements while
                choosing material with the least environmental impacts.
              </p>
            </div>
            <div class="tab-pane" id="thermal" role="tabpanel">
              <h3>Assembly Visualization</h3>
              <p>
                Assigning colors to rank and sort components in your assembly designs can help you pinpoint parts that
                contribute the greatest environmental impacts. SolidWorks Assembly Visualization provides full support
                for sustainability parameters, enabling you to rank, sort, and color your design on any of the four
                traditional LCA indicators and related sustainability parameters.
              </P>
            </div>
            <div class="tab-pane" id="screening" role="tabpanel">
              <h3>Screening-Level Life Cycle Assessment (LCA)</h3>
              <p>
                Perform a screening-level life cycle assessment (LCA) during design at a fraction of the time and cost
                of a full LCA. SolidWorks Sustainability software enables you to perform a screening-level LCA during
                design, which streamlines the process if a full, ISO 14040-certified LCA is performed. Environmental LCA
                is the most comprehensive and widely accepted method for measuring the environmental impacts of product
                designs.
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
  $(function() {
    $('#videos .row > div').matchHeight();
  })
</script>
@endpush
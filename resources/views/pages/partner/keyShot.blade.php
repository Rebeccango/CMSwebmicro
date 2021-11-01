@extends('layouts.layout')
@section('title')
KeyShot
@stop
@section('meta')
<link rel="canonical" href="{{route('keyShot')}}" />
@stop
@section('description')The most powerful software for real-time 3D rendering and
animation brings you even more ways to enhance your visuals to create amazing shots in Solidworks. @stop
@section('body')
<section class="trans-header-window p-0">
  <section class="cd-hero">
    <ul class="cd-hero-slider cd-hero-100vh " data-height="100vh">
      <li class="cd-bg-video selected">
        <div class="cd-bg-video-wrapper" data-poster="{{asset('storage\images\keyshot\Main Header Image.jpeg')}}"
          data-video="{{asset('storage/videos/keyshot/keyshot-8.2')}}">
        </div>
      </li>
      <li class="cd-bg-video">
        <div class="cd-bg-video-wrapper" data-poster="{{asset('storage\images\keyshot\Main Header Image.jpeg')}}"
          data-video="{{asset('storage/videos/keyshot/keyshot-8.2-2')}}">
        </div>
      </li>
    </ul>
  </section> <!-- .cd-hero -->
  <div class="trans-heading">
    <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
          <div class="wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.2s">
            <h1>KeyShot</h1>
            <h2 class="h5">The fastest, most powerful software for real-time 3D rendering and
              animation brings you even more ways to enhance your
              visuals to create amazing shots.</h2>
          </div>
          <div class="w-100">
            @include('layouts.generic_contact_buttons')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">The Best 3D Rendering Software
          to Create Amazing Visuals</h3>
        <br />
        <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="font-size: 16px;">
          KeyShot is 3D rendering and animation software for both PC and Mac. 100% CPU based and built on Luxion's
          real-time raytracing and global illumination technology, KeyShot breaks down the complexity of creating
          photographic images, animations and interactive visuals from 3D models, simplifying the media creation process
          for 3D professionals, with fast, interactive rendering and support for more 3D file formats than any rendering
          solution.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div>
          <iframe width="100%" height="360" src="https://www.youtube.com/embed/2jlU1gsqB5g" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption" style="margin-top: -10px;">Video: KeyShot Rendering and Animation Overview</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">KeyShot
      Capabilities</h2>
    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">KeyShot is the first 3D rendering and animation
      application that breaks down the complexity of creating amazing photographic images from 3D data and enables
      manufacturers to achieve significant productivity improvements. Listed below, are some of the powerful features
      that KeyShot users benefit from. If you would like to know more or have any questions, please use the box below.
    </p>

    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div class="">
        <!-- required for floating -->
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#real-time-speed" role="tab">Real-time Speed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#easy-to-use" role="tab">Easy-to-Use</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#cpu-powered" role="tab">CPU Powered</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#accurate-materials" role="tab">Accurate Materials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#advanced-lighting" role="tab">Advanced Lighting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#efficient-workflow" role="tab">Efficient Workflow</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane" id="real-time-speed" role="tabpanel">
            <h3>Real-time Speed</h3>
            <h5>See your results instantly</h5>
            <ul>
              <li>KeyShot is real-time rendering to the core. Not a mode. Not an afterthought. See everything as it
                happens. Every
                change from material and lighting to cameras and animation is seen instantly as you work.</li>
              <li>KeyShot is the first rendering application that allows you to work in a fully ray traced environment
                from the
                beginning. Through the combination of progressive global illumination, multi-core photon mapping,
                adaptive material
                sampling and a dynamic lighting core, KeyShot delivers an interactive experience that results in
                photographic images
                instantly. Every change you make – material, lighting, geometry – is instantly updated and allows you to
                evaluate the
                result within a few seconds. No switching back and forth between render modes, no endless waiting to see
                what the final
                rendering is going to look like. Just sit back and let the final image resolve in front of your eyes.
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane" id="easy-to-use" role="tabpanel">
            <h3>Easy-to-Use</h3>
            <h5>Focus on your design, not software.</h5>
            <ul>
              <li>KeyShot is extremely easy to learn and use to achieve photographic results in minutes through a
                simple,
                workflow-based interface with all the advanced capabilities for the most experienced 3D render
                professional.</li>
              <li>With its interactive approach to rendering, KeyShot is extremely easy to learn and use. Anyone
                involved with 3D data
                can achieve photographic results withing minutes of opening the application. Despite the seemingly
                simple interface,
                KeyShot provides the depth of functionality to satisfy the needs of the most advanced user. And due to a
                well designed
                and thought out user interface, even advanced tools are easy to learn and use.</li>
            </ul>
          </div>
        </div>
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane" id="cpu-powered" role="tabpanel">
            <h3>CPU Powered</h3>
            <h5>Create your visuals faster</h5>
            <ul>
              <li>KeyShot works on both Windows and Mac utilizing 100% of any available CPU power. No special graphics
                card is needed,
                and all PCU power scales linearly for unmatched performance.</li>
              <li>KeyShot is powered completely by the CPU with no requirement for any type of special graphics card.
                With
                cross-platform support for both Windows and Mac, KeyShot will work on nearly any desktop or laptop right
                out of the box.
                KeyShot is one of the few applications to take 100% advantage of all physical and virtual cores in your
                computer and
                will scale linearly in performance without ever tapering off when more cores are added.</li>
            </ul>
          </div>
        </div>
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane" id="accurate-materials" role="tabpanel">
            <h3>Accurate Materials</h3>
            <h5>Make it More Realistic</h5>
            <ul>
              <li>KeyShot materials go beyond physical appearance providing scientifically accurate properties for the
                highest quality
                visuals. Use a preset, an exclusive partner material or create your own.</li>
              <li>KeyShot materials are scientifically accurate. Rather than having materials that are “physically
                based” like many
                other rendering applications, KeyShot materials reflect a physically accurate and easy to understand
                representation of
                materials and their properties. Each material can be tweaked, colored and textured showing every changed
                in real-time to
                give you the perfect materials for your scene. You can match measured materials using Cie-Lab colors and
                Gloss values or
                use digital representations from material providers such as Axalta Coating Systems, Mold-Tech, and
                Sørensen leather. For
                material color you can define your own using various color spaces, or use industry standard color
                libraries such as
                PANTONE and RAL. Materials can be shared through KeyShot Cloud, allowing you to tap into one of the
                largest online
                resources for rendering assets.</li>
            </ul>
          </div>
        </div>
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane" id="advanced-lighting" role="tabpanel">
            <h3>Advanced Lighting</h3>
            <h5>Light it up right</h5>
            <ul>
              <li>KeyShot provides the speed to visualize products fast with advanced lighting capabilities that create
                the most
                accurate lighting for simple studio shots or the most complex interior lighting.</li>
              <li>KeyShot’s real-time render engine contains the most advanced lighting algorithms, completely changing
                what is
                possible for visualizing interior spaces. In the same way that KeyShot changed the speed at which
                products can be
                rendered, this lighting algorithm provides the fastest, most accurate method for rendering complex
                interior lighting.
                Scenes containing hundreds of lights and illumination through small windows can be rendered
                interactively without
                compromising quality or accuracy, and it all happens accurately in KeyShot without users having to
                adjust complex
                parameters such as the number of photons needed to render a given scene.</li>
            </ul>
          </div>
        </div>
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane" id="efficient-workflow" role="tabpanel">
            <h3>Efficient Workflow</h3>
            <h5>Present your ideas sooner</h5>
            <ul>
              <li>KeyShot integrates throughout the entire product development process, with the widest 3D file format
                support and
                LiveLinking technology for a fluid workflow from concept to final product.</li>
              <li>KeyShot is the only rendering application that is truly integrated throughout the entire development
                process. Through
                its unmatched import pipeline, KeyShot imports nearly any file format. Due to KeyShot’s extensive
                partnership network,
                users of many CAD and 3D modeling application can transfer data directly from their application into
                KeyShot while
                maintaining a link to their modeling session. Using KeyShot’s unique LiveLinking technology any changes
                made to the
                model can be transferred to the running KeyShot session and update the scene without any loss of work.
                Whether you are
                using KeyShot during early concept presentations and design reviews or for final presentations, sales
                and marketing, or
                technical documentation, KeyShot allows you to start the work as soon as you have 3D data, and by the
                time you have the
                final product, you’ll be finished creating the most amazing visuals possible.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Video Archive</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade in active show" id="matrix" role="tabpanel">
          <a href="{{asset('storage/pdfs/keyshot/KeyShot8_Comparison-CMS.pdf')}}" class="pdf-item">
            <figure style="width:200px;">
              <div class="figimg">
                <img src="{{asset('storage/pdfs/keyshot/KeyShot8_Comparison-CMS.png')}}" class="w-100"
                  alt="Keyshot Comparison Matrix">
              </div>
              <figcaption>Keyshot Comparison Matrix</figcaption>
            </figure>
          </a>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="240" src="https://www.youtube.com/embed/2jlU1gsqB5g" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption">Video: KeyShot Rendering and Animation Overview</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="240" src="https://www.youtube.com/embed/BWhIksyqksY" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption">Video: KeyShot Viewer</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
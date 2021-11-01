@extends('layouts.layout')
@section('title')
THE DRAGONFLY LDM 3D PRINTER | Nano Dimension | The World's First 3D PCB Printer
@stop
@section('meta')
<link rel="canonical" href="{{route('dragonfly-ldm')}}" />
@stop
@section('description')Nano Dimension's DragonFly LDM™ System: Precise inkjet deposition, multi-material 3D printing,
advanced Switch 3D Software. 24/7 unattended 3D printing @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/nanodimensions/The-DragonFly-2020-Pro-3D-printing-PCB-Board-3.webp')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn">The DragonFly LDM</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">The one-stop solution for agile hardware development &amp; innovative electronic circuits</h2>
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
    <div class="row">
      <div class="col-lg-5">
        <h1 class="main-title mt-0">Truly Bringing "Print" to Printed Circuit Boards</h1>
        <p>Nano Dimension's DragonFly LDM 3D printer is the industry’s only comprehensive additive manufacturing
          platform for round-the-clock 3D printing of electronic circuitry. The DragonFly LDM uniquely integrates an
          extremely precise inkjet deposition printer with dedicated nano-inks and optimized 3D software to print
          electronic circuits such as PCBs, antennas, capacitators and sensors. Incorporating proprietary,
          state-of-the-art Lights-out Digital Manufacturing (LDM) technology, the DragonFly requires little or no
          operator intervention.</p>
        <p>Quickly move from concept to design validation to production of your precise electronic components with the
          DragonFly LDM, while keeping the whole process securely in-house. Reduce the demand on prototyping and
          short-run manufacturing resources and lower the total cost of operation in comparison to using traditional
          manufacturing methods. Nano Dimension’s DragonFly LDM is designed for Industry 4.0 and manufacturing for the
          IoT.</p>
        {{-- <img src="{{asset('storage/images/nanodimensions/nanodimensions.png')}}"
        style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto" /> --}}
      </div>
      <div class="col-lg-7">
        <div class="videoWrapper">
          <iframe width="100%" height="auto" src="https://www.youtube.com/embed/yAxczJm1RrU" frameborder="0"
            gesture="media" allowfullscreen></iframe>
        </div>
        <div class="videoCaption">Video: Nano Dimension has developed a PCB 3D printer and a suite of nanotechnology
          conductive and dielectric inks specifically for PCB professionals, enabling the ability to take full control
          of PCB development and shortening time to market.</div>
      </div>
    </div>
  </div>

  <div style="margin-top:50px;">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 text-center text-md-right">
          <img src="https://www.nano-di.com/hubfs/2PeopleLN3Med-1.jpg?t=1509985930393" />
        </div>
        <div class="col-lg-6 d-flex flex-column">
          <h1 class="main-title mt-5 mt-md-0">
            Key Features:
          </h1>
          <ul>
            <li>Long uninterrupted printed for increased uptime and improved yield</li>
            <li>Supports 3D printed multilayer printed circuit boards (PCBs), capacitors, coils, sensors, antennas and
              more </li>
            <li>Simpler and faster operation for minimal maintenance Switch</li>
            <li>New automatic printhead self-cleaning system</li>
            <li>Offered also as an upgrade for existing DragonFly Pro users</li>
          </ul>
          <a target="_blank" href="https://www.cadmicro.com/resources/53/dragonfly-ldm"
            class="pdf-item text-center mx-auto">
            <figure class="text-center">
              <div class="figimg text-center">
                <img src="https://www.cadmicro.com/storage/resources/January2020/Yw5vAXTrigzT1lqDj4nu.jpg"
                  style="width:100%;" alt="Brochure: NanoDimension DragonFly LDM">
              </div>
              <figcaption>NanoDimension DragonFly LDM</figcaption>
            </figure>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary py-5">
  <div class="section-title center-block mx-auto text-center" style="max-width:700px">
    <h2>Introducing LDM Technology</h2>
    <div class="section-title-divider"></div>
    <p class="lead">Lights-out Digital Additive Manufacturing for Printed Electronics</p>
  </div>
  <div class="section-block">
    <div class="container-fluid">
      <p>LDM is a manufacturing technology that enables systems to run around the clock with little
        to no intervention, allowing users to 3D print more functioning electronic circuitry faster. With the DragonFly
        LDM, users can now 3D print one-of prototypes in addition to low volume manufacturing of printed electronics.
      </p>
      <p>This technology introduces new advanced printer head software management algorithms and automatic self-cleaning
        of its print heads every few hours. It’s equipped with real-time automatic material monitoring capabilities to
        ensure maximized runtime, optimization of overall equipment effectiveness and significantly improved workflow
        and production processes. The new LDM technology reduces the frequency and duration of scheduled downtime to
        typically just one weekly maintenance operation.</p>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="section-title center-block mx-auto">
      <h2>Multi-Material Additive Manufacturing of Printed Electronics</h2>
      <div class="section-title-divider"></div>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-lg-7 col-12">
        <img src="{{asset('storage/images/nanodimensions/materials-multi.webp')}}"
          alt="Multi-Material Additive Manufacturing of Printed Electronics" class="w-100" style="max-height: 500px">
      </div>
      <div class="col-lg-5 col-12 mt-4 mt-md-0">
        <p>The ability to simultaneously print in multiple materials is a revolutionary approach that is helping to
          redefine
          the electronics of tomorrow for attributes including density, size and flexibility. The DragonFly LDM has two
          printheads, one for nano-silver conductive ink and the other for dielectric polymer ink, which allows the
          printer to
          concurrently print with both advanced inks in a single print job.</p>
        <p>The DragonFly LDM inkjet deposition system is setting new precision standards for 3D printed electronics – a
          perfect fit for industries with the most demanding design and quality requirements, such as aerospace,
          automotive,
          telecommunications, healthcare and more.</p>
      </div>
    </div>
  </div>

  {{-- <div class="section-block">
    <div class="s40"></div>
    <div class="section-icon-group row" style="margin-top:-30px;">
      <div class="icon-block col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
        <div class='icon-content'>
          <div class="icon-link">
            <div class="icon"
              style="background-image:url('{{asset('storage/images/nanodimensions/COND.png')}}'); background-size:
  contain; height:100px; margin-bottom:20px; width: auto;"
  alt="SolidWorks 3D CAD">
  </div>
  <h3 class="icon-title" style="margin-top:20px;">High Conductivity</h3>
  </div>
  <div class="icon-body">
    <p>High performance components and materials for professional PCB production</p>
  </div>
  </div>
  </div>
  <div class="icon-block col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
    <div class='icon-content'>
      <div class="icon-link">
        <div class="icon"
          style="background-image:url('{{asset('storage/images/nanodimensions/WATCH.png')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
          alt="SolidWorks 3D CAD">
        </div>
        <h3 class="icon-title" style="margin-top:20px;">Fast &amp; Efficient</h3>
      </div>
      <div class="icon-body">
        <p>Get prototypes on hand within hours, not weeks</p>
      </div>
    </div>
  </div>
  <div class="icon-block col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
    <div class='icon-content'>
      <div class="icon-link">
        <div class="icon"
          style="background-image:url('{{asset('storage/images/nanodimensions/FLEX_cropped.png')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
          alt="SolidWorks 3D CAD">
        </div>
        <h3 class="icon-title" style="margin-top:20px;">Flexible Production</h3>
      </div>
      <div class="icon-body">
        <p>Creativity is not stifled by board complexity or layer count</p>
      </div>
    </div>
  </div>
  <div class="icon-block col-lg-3 col-md-3 col-sm-4 col-xs-12 ">
    <div class='icon-content'>
      <div class="icon-link">
        <div class="icon"
          style="background-image:url('{{asset('storage/images/nanodimensions/LOCK_.png')}}'); background-size: contain; height:100px; margin-bottom:20px; width: auto;"
          alt="SolidWorks 3D CAD">
        </div>
        <h3 class="icon-title" style="margin-top:20px;">Cost-Effective &amp; Secure</h3>
      </div>
      <div class="icon-body">
        <p>No outsourcing equals low production costs, and no IP security risks</p>
      </div>
    </div>
  </div>
  </div>
  </div> --}}
</section>
<section>
  <div class="container-fluid">
    <h2 class="main-title" style="margin-top:0;">FAQs</h2>
    <div id="faq">
      <div class="card mb-2">
        <div class="card-header" id="heading-1">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"
              aria-controls="collapse-1">
              How ready is the DragonFly LDM™ system?
            </button>
          </h5>
        </div>
        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#faq">
          <div class="card-body">
            <p>The printer is now available for purchase.</p>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header" id="heading-2">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-2" aria-expanded="false"
              aria-controls="collapse-2">
              Is it possible to upgrade from a DragonFly Pro to a DragonFly LDM system?
            </button>
          </h5>
        </div>
        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#faq">
          <div class="card-body">
            <p>Yes, customers who acquired a DragonFly in the past, can purchase a upgrade to the DragonFly LDM.</p>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header" id="heading-3">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-3" aria-expanded="false"
              aria-controls="collapse-3">
              What size and how complex is a PCB additively manufactured on the DragonFly LDM system?
            </button>
          </h5>
        </div>
        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#faq">
          <div class="card-body">
            <p>The maximum size of the PCB is 16 cm X 16 cm x 0.3 cm. The complexity of the PCB for an unattended print
              depends on the amount of conductive ink necessary to complete the job. The system wizard alerts the user
              if the ink in the system is insufficient.</p>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header" id="heading-4">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-4" aria-expanded="false"
              aria-controls="collapse-4">
              How many layers does the DragonFly LDM print?
            </button>
          </h5>
        </div>
        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#faq">
          <div class="card-body">
            <p>The DragonFly LDM can print up to 3mm in thickness. Different designs require different layer
              thicknesses, so the number of layers printed by the DragonFly depends upon the board design.</p>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header" id="heading-5">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-5" aria-expanded="false"
              aria-controls="collapse-5">
              How much does it cost to print?
            </button>
          </h5>
        </div>
        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#faq">
          <div class="card-body">
            <p>While cost depends on the type of board, complexity, and volume of prototyping, some boards could cost as
              little as $10 to print. That's in comparison to a standard prototype that might cost several thousand
              dollars. An added benefit of the DragonFly is the time saved, the increased confidentiality and
              accelerated innovation. The more prototyping, the higher the return on investment. In addition, an
              in-house 3D system will help change the way you work. Teams will work in parallel, rather than one after
              the other.</p>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header" id="heading-6">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-6" aria-expanded="false"
              aria-controls="collapse-6">
              How similar and the DragonFly LDM materials to traditional materials?
            </button>
          </h5>
        </div>
        <div id="collapse-6" class="collapse" aria-labelledby="heading-6" data-parent="#faq">
          <div class="card-body">
            <p>The ink materials are engineered to give close performance to traditional materials. Nanoparticle Silver
              inks provide conductivity and are solderable. The Nano Dimension dielectric formulations simulate FR4
              electrically and in terms of Td and Tg.</p>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header" id="heading-7">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-7" aria-expanded="false"
              aria-controls="collapse-7">
              Are the materials suitable for soldering?
            </button>
          </h5>
        </div>
        <div id="collapse-7" class="collapse" aria-labelledby="heading-7" data-parent="#faq">
          <div class="card-body">
            <p>Yes, they are compatible with hand soldering, solder glue and vapor/ reflow soldering. We recommend low
              temperature pastes such as tin bismuth for example.</p>
          </div>
        </div>
      </div>
      <div class="card mb-2">
        <div class="card-header" id="heading-8">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-8" aria-expanded="false"
              aria-controls="collapse-8">
              Can I send you a sample to print?
            </button>
          </h5>
        </div>
        <div id="collapse-8" class="collapse" aria-labelledby="heading-8" data-parent="#faq">
          <div class="card-body">
            <p>Yes, interested parties may send a Gerber file, within the Nano Dimension design rules and
              specifications. We can also provide a coupon under NDA.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
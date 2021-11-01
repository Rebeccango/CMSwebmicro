@extends('layouts.layout')
@section('title')
Ultimaker S3 | Easy-to-use 3D printing starts here
@stop
@section('meta')
<link rel="canonical" href="{{route('ultimaker-s3')}}" />
@stop
@section('description')Ultimaker S3 delivers high-quality, composite-ready performance in an efficiently small
footprint. Easy to use and
powerful, it's the most cost-effective way to start professional 3D printing.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('images/pages/ultimaker/Ultimaker-S3-composite-ready-desktop-3D-printer-og.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>Ultimaker S3</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Easy-to-use 3D printing starts here</h2>
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
    <div class="row justify-content-center align-items-center">
      <div class="d-flex align-items-center col-md-6 col-sm-12 mt-0 mt-sm-3 order-md-1 order-sm-2 order-xs-2">
        <img width="100%" height="auto" class="m-auto" style="max-width:500px"
          src="{{asset('images/pages/ultimaker/Ultimaker-S3-product-hero.webp')}}" />
      </div>
      <div class="col-md-6 col-sm-12 order-md-2 order-sm-1 order-xs-1">
        <h2 class="h1 mb-5">Discover the Ultimaker S3</h2>
        <p class="lead">The Ultimaker S3 delivers powerful, high-quality, composite-ready performance efficiently from
          your desktop. Packed with
          Ultimaker’s latest technology, the S3 offers the most cost-effective way to adopt in-house 3D printing and set
          your
          business apart.</p>
        <div class="card img-shadow mt-5 rounded-0">
          <div class="card-body d-flex align-items-start justify-content-center flex-w-100">
            <div class="embed-responsive embed-responsive-4by3 img-thumbnail border-0 rounded mr-3">
              <div class="embed-responsive-item" style="width:100%; height:100%;
                  background-image:url(https://img.youtube.com/vi/WV2C6YXMJzc/mqdefault.jpg); background-position:center;
                  background-repeat:no-repeat; background-size:cover">
              </div>
            </div>
            <div class="d-flex flex-column justify-content-between align-items-start" style="text-decoration: none">
              <div class="card-title h5">Meet the Ultimaker S3</div>
              <div class="card-subtitle mb-4 text-muted small">Composite material compatibility, reliable automatic bed
                leveling, and end-of-filament sensors. The Ultimaker S3 offers
                the most cost-effective way for disruptive businesses to adopt in-house 3D printing.</div>
              <a href="https://www.youtube.com/watch?v=WV2C6YXMJzc"
                class="mp-popup-video mp-single btn btn-outline-primary text-weight-bold"><i
                  class="fas fa-arrow-circle-right mr-1"></i> Watch Video</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="section-title center-block mx-auto">
    <h2>In-house production made easy</h2>
    <div class="section-title-divider "></div>
  </div>
  <div class="">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
        role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#summary" role="tab">Summary</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#reliable" role="tab">Reliable</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#easy-to-use" role="tab">Easy to use</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#accessible" role="tab">Accessible</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#material-choice" role="tab">Material choice</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active in  border-0" id="summary" role="tabpanel">
          <div class="row d-flex justify-content-center align-items-start">
            <div class="col-xl-6 col-lg-5 col-md-6 pt-5">
              <div class="h3">Summary</div>
              <p>The Ultimaker S3 is a complete production system you can depend on in the office or studio. With
                advanced features to
                ensure a reliable printing experience, it’s still simple to use thanks to its award-winning touch
                interface and seamless
                software integration.</p>
              <div class="h5">Key Features:</div>
              <ul class="list-group mt-4">
                <li class="list-group-item">Dual extrusion with a build volume of 230 x 190 x 200 mm (9 x 7.4 x 7.9
                  inches)</li>
                <li class="list-group-item">Down to 20 micron (0.001 inch) layer resolution</li>
                <li class="list-group-item">Open filament system, compatible with glass and carbon fiber composites</li>
                <li class="list-group-item">Dual filament flow sensors notify you if material runs out</li>
                <li class="list-group-item">4.7-inch touchscreen interface – Winner of iF Design Award 2019</li>
              </ul>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12 pt-5">
              <div class="h3 mb-4">Product Data Sheet</div>
              <a href="https://www.cadmicro.com/resources/50/ultimaker-s3-data-sheet" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="https://www.cadmicro.com/storage/resources/January2020/7xmpbCdAcp3u7w3BykSK.jpg"
                      style="width:100%;" alt="Ultimaker Material Datasheet">
                  </div>
                  <figcaption>Ultimaker Material Datasheet</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade  border-0" id="reliable" role="tabpanel">
          <div class="row d-flex justify-content-center align-items-start">
            <div class="col-xl-6 col-lg-5 col-md-6 p-5">
              <div class="h3">Reliable</div>
              <p>The Ultimaker S3 features next-generation reliability. Its advanced active leveling, stiffer build
                platform, heated
                build plate, and more accurate stepper drivers result in the highest print quality of a machine in this
                form factor. And
                dual filament flow sensors notify you if you run out of material.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade border-0" id="easy-to-use" role="tabpanel">
          <div class="row d-flex justify-content-center align-items-start">
            <div class="col-xl-6 col-lg-5 col-md-6 p-5">
              <div class="h3">Easy to use</div>
              <p>The Ultimaker S3 was designed so that anyone can achieve high-quality results after a 30-minute
                introduction. Its
                award-winning touch interface, quick-swap print cores, and predefined print settings enable rapid
                changeovers and reduce
                operator time needed.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade border-0" id="accessible" role="tabpanel">
          <div class="row d-flex justify-content-center align-items-start">
            <div class="col-xl-6 col-lg-5 col-md-6 p-5">
              <div class="h3">Accessible</div>
              <p>On every level, the Ultimaker S3 is our most accessible 3D printer yet. Start creating the parts and
                models you need
                using any filament, from any desktop, as part of any workflow, and quickly achieve ROI.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade border-0" id="material-choice" role="tabpanel">
          <div class="row d-flex justify-content-center align-items-start">
            <div class="col-xl-6 col-lg-5 col-md-6 p-5">
              <div class="h3">Material choice</div>
              <p>Thanks to our pioneering alliance with global materials companies, the Ultimaker S3 lets you print with
                a growing
                library of advanced materials – including glass and carbon fiber composites (when using print core CC
                Red 0.6 – sold
                separately).</p>
              <p>From mechanical strength to flame retardancy, simply pick the material for your application, download a
                print profile in
                the Ultimaker Marketplace, and start printing. Optimized performance – no manually entering parameters.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section--grey">
  <div class="container-fluid">
    <h3 class="h2 mb-3">Trusted by Professionals</h3>
    <div class="section-icon-group row mt-4">
      <div class="icon-block col p-3">
        <div class=''>
          <div class="icon-link">
            <div class="icon"
              style="background-size:contain; width:250px; height:250px; background-image:url('{{asset('storage/images/ultimaker/ultimaker-s5/logo_0000_add-lab-decathlon-grey.png')}}');">
            </div>
          </div>

        </div>
      </div>
      <div class="icon-block col p-3">
        <div class=''>
          <div class="icon-link">
            <div class="icon"
              style="background-size:contain; width:250px; height:250px; background-image:url('{{asset('storage/images/ultimaker/ultimaker-s5/logo_0000_volkswagen-grey.png')}}');">
            </div>
          </div>

        </div>
      </div>
      <div class="icon-block col p-3">
        <div class=''>
          <div class="icon-link">
            <div class="icon"
              style="background-size:contain; width:250px; height:250px; background-image:url('{{asset('storage/images/ultimaker/ultimaker-s5/logo_0002_zeiss-grey.png')}}');">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-5">
  <div>
    <div class="section-title center-block mx-auto">
      <h2>Ultimaker S3 technical specifications</h2>
      <div class="section-title-divider "></div>
    </div>
    <div class="custom-nav-pills">
      <ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
        role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#dimensions" role="tab">Dimensions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#printer-properties" role="tab">Printer Properties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#operation-parameters" role="tab">Operation Parameters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#ecosystem" role="tab">Ecosystem</a>
        </li>
      </ul>
      <div class="tab-content container">
        <div class="tab-pane fade show active in border-0 pt-5" id="dimensions" role="tabpanel">
          <table class="table m-auto" style="max-width: 800px">
            <tbody>
              <tr>
                <th scope="row" class="border-top-0">Build volume <i class="far fa-question-circle"
                    data-toggle="tooltip" data-placement="right"
                    title="The physical space inside the Ultimaker S3 that can be used for single or dual extrusion 3D printing."></i>
                </th>
                <td class="border-top-0">230 x 190 x 200 mm<br />
                  (9 x 7.4 x 7.9 inches)</td>
              </tr>
              <tr>
                <th scope="row">Assembled dimensions <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="The XYZ 3D printer dimensions, including the spool holder and Bowden tubes."></i></th>
                <td>394 x 489 x 637 mm<br />
                  (15.5 x 19.3 x 25.1 inches)</td>
              </tr>
              <tr>
                <th scope="row">Print technology <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="This is the process of depositing layers of filament, one on top of the other, to build up shapes and models. It is a form of additive manufacturing technology and the process used by all Ultimaker 3D printers."></i>
                </th>
                <td>Fused filament fabrication (FFF)</td>
              </tr>
              <tr>
                <th scope="row">Compatible filament diameter <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="The filament diameter that achieves optimal results on Ultimaker 3D printers."></i></th>
                <td>2.85 mm</td>
              </tr>
              <tr>
                <th scope="row">Weight <i class="far fa-question-circle" data-toggle="tooltip" data-placement="right"
                    title="The net weight of the 3D printer."></i></th>
                <td>14.4 kg (31.7 lbs)</td>
              </tr>
              <tr>
                <th scope="row">Power input <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right" title="Required power input."></i></th>
                <td>100 - 240 VAC, 50 - 60 Hz</td>
              </tr>
              <tr>
                <th scope="row">Maximum power output <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="The peak power output that the printer can reach – usually when the heated bed and hot ends are heating up."></i>
                </th>
                <td>350 W</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane fade border-0 pt-5" id="printer-properties" role="tabpanel">
          <table class="table m-auto" style="max-width: 800px">
            <tbody>
              <tr>
                <th scope="row" class="border-top-0">Layer Resolution <i class="far fa-question-circle"
                    data-toggle="tooltip" data-placement="right"
                    title="A micron is the measurement used to define the thickness of a 3D printed layer. 20 micron is 0.02 mm thick. Thinner layers are used for high-detail prints, thicker layers are great for fast prototypes."></i>
                </th>
                <td class="border-top-0">0.25 mm nozzle: 150 - 60 micron<br />
                  0.4 mm nozzle: 200 - 20 micron<br />
                  0.6 mm nozzle: 300 - 20 micron<br />
                  0.8 mm nozzle: 600 - 20 micron<br />
              </tr>
              <tr>
                <th scope="row">XYZ Resolution <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="The more accurate the stepper motors within the printer, the greater degree of accuracy and finer resolution can be achieved with each print."></i>
                </th>
                <td>6.9, 6.9, 2.5 micron</td>
              </tr>
              <tr>
                <th scope="row">Feeder type <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="Enhanced feeders on the Ultimaker S3 move filament at a precise rate with an abrasive resistant feeder gear that’s ready to print with composite materials. Flip the ergonomic locking lever to easily insert or remove your 3D printing materials."></i>
                </th>
                <td>Dual-geared feeder, reinforced for composite materials</td>
              </tr>
              <tr>
                <th scope="row">Display <i class="far fa-question-circle" data-toggle="tooltip" data-placement="right"
                    title="The award-winning touchscreen gives you intuitive control over your setup and shows a preview of your print. Supported languages: English, Dutch, French, German, Italian, Japanese, Korean, Portuguese, Russian, Spanish, Simplified Chinese."></i>
                </th>
                <td>4.7-inch (11.9 cm) color touchscreen</td>
              </tr>
              <tr>
                <th scope="row">Print core replacement <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="Enhanced feeders on the Ultimaker S3 move filament at a precise rate with an abrasive resistant feeder gear that’s ready to print with composite materials. Flip the ergonomic locking lever to easily insert or remove your 3D printing materials."></i>
                </th>
                <td>Swappable print cores</td>
              </tr>
              <tr>
                <th scope="row">Print head <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="Thanks to swappable print cores, you can quickly switch between different filaments and material-matching print cores. This results in higher uptime and easier maintenance of your 3D printer."></i>
                </th>
                <td>Dual extrusion print head with an auto-nozzle lifting system and swappable print cores</td>
              </tr>
              <tr>
                <th scope="row">Nozzle Diameters <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="Smaller nozzle diameters enable more detailed prints, large diameters reduce overall print time. This 3D printer ships with two AA 0.4 mm print cores and one BB 0.4 mm print core."></i>
                </th>
                <td>0.25 mm, 0.4 mm, 0.6 mm, 0.8 mm</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane fade border-0 pt-5" id="operation-parameters" role="tabpanel">
          <table class="table m-auto" style="max-width: 800px">
            <tbody>
              <tr>
                <th scope="row" class="border-top-0">Build speed <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="The build speed relates to how fast the filament can be extruded through the hot end of the 3D printer. The higher the value the greater the achievable print speed."></i>
                </th>
                <td class="border-top-0">
                  &lt; 24 mm³/s
              </tr>
              <tr>
                <th scope="row">Nozzle temperature <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="A wide nozzle temperature range means greater flexibility in the 3D printing material choice."></i>
                </th>
                <td>180 - 280 °C</td>
              </tr>
              <tr>
                <th scope="row">Nozzle heat-up time <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="The nozzle heat-up time relates to how fast you can start printing, as well as how fast it can melt the polymer filament."></i>
                </th>
                <td>
                  &lt; 2 minutes</td>
              </tr>
              <tr>
                <th scope="row">Operating sound <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="Thanks to their quiet operation, Ultimaker 3D printers are suitable for use in the office, studio, or classroom environment."></i>
                </th>
                <td>
                  &lt; 50 dBA</td>
              </tr>
              <tr>
                <th scope="row">Build plate leveling <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="The Ultimaker S3 ensures more accurate build plate calibration and better adhesion. The print head’s capacitive sensor scans the build plate at multiple points and compensates for any Z-axis offset by adjusting the height of your print’s first layers."></i>
                </th>
                <td>Advanced active leveling</td>
              </tr>
              <tr>
                <th scope="row">Build plate <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="With a build plate temperature range of 20 - 140 °C, you can be confident of reliable first-layer adhesion with a wide range of materials"></i>
                </th>
                <td>20 - 140 °C heated glass build plate</td>
              </tr>
              <tr>
                <th scope="row">Build plate heat-up time <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="The build plate heat-up time relates to how fast it can reach the print-ready temperature."></i>
                </th>
                <td>
                  &lt; 4 minutes (from 20 to 60 °C)</td>
              </tr>
              <tr>
                <th scope="row">Operating ambient temperature <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="This Ultimaker 3D printer operates best in locations between these temperatures."></i>
                </th>
                <td>15 - 32 °C (59 - 90 °F)</td>
              </tr>
              <tr>
                <th scope="row">Non-operating temperature <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="This Ultimaker 3D printer can be safely stored or left inactive at these temperatures."></i>
                </th>
                <td>0 - 32 °C (32 - 90 °F)</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="tab-pane fade border-0 pt-5" id="ecosystem" role="tabpanel">
          <table class="table m-auto" style="max-width: 800px">
            <tbody>
              <tr>
                <th scope="row" class="border-top-0">Supplied free software <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="Ultimaker Cura is our industry-leading slicing software that turns your 3D model into a file your printer can use. Print over your local network and you can use Ultimaker Connect to manage multiple Ultimaker 3D printers."></i>
                </th>
                <td class="border-top-0">Ultimaker Cura – print preparation software<br/>
                Ultimaker Connect – printer management software</td>
              </tr>
              <tr>
                <th scope="row">Cloud support <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="Ultimaker Cloud is a versatile platform, giving you have the freedom to remotely send and manage 3D print jobs from any workstation in the world to any network-enabled Ultimaker 3D printer on your network."></i></th>
                <td>Ultimaker Cloud</td>
              </tr>
              <tr>
                <th scope="row">Supported OS
                </th>
                <td>MacOS, Windows, and Linux</td>
              </tr>
              <tr>
                <th scope="row">Plugin Integration <i class="far fa-question-circle" data-toggle="tooltip" data-placement="right"
                    title="More plugins are available from Ultimaker Cura Marketplace to make your 3D printing experience even easier."></i></th>
                <td>SolidWorks, Siemens NX, Autodesk Inventor</td>
              </tr>
              <tr>
                <th scope="row">Supported file types <i class="far fa-question-circle" data-toggle="tooltip" data-placement="right"
                    title="An STL file is the most used file type for 3D printing. Nearly any 3D modeling software program is able to create these files."></i></th>
                <td>Ultimaker Cura: STL, OBJ, X3D, 3MF, BMP, GIF, JPG, PNG<br/>
                Printable formats: G, GCODE, GCODE.gz, UFP</td>
              </tr>
              <tr>
                <th scope="row">File transfer <i class="far fa-question-circle" data-toggle="tooltip"
                    data-placement="right"
                    title="With one click in Ultimaker Cura, you can print over a Wi-Fi or LAN connection. Or export your print job to a USB stick."></i>
                </th>
                <td>Wi-Fi, LAN, USB</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    @component('components.ResourceTabs.tabs')
    @slot('datasheet')
    @component('components.ResourceTabs.resources', ['resources' => [56,54,51,50,49,48,184]]) @endcomponent
    @endslot
    @slot('cases')
    @component('components.ResourceTabs.resources', ['resources' => [89,88,87,55]]) @endcomponent
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/Volkswagen.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/Volkswagen.png')}}" style="width:100%;"
              alt="Ultimaker Volkswagen Case study">
          </div>
          <figcaption>Case Study: Volkswagen</figcaption>
        </figure>
      </a>
    </div>
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/ABB Robotics.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/ABB Robotics.png')}}" style="width:100%;"
              alt="Ultimaker ABB Robotics Case Study">
          </div>
          <figcaption>Case Study: ABB Robotics</figcaption>
        </figure>
      </a>
    </div>
    <div class="p-3">
      <a href="{{asset('storage/pdfs/ultimaker/JeffDESIGN.pdf')}}" class="pdf-item">
        <figure>
          <div class="figimg">
            <img src="{{asset('storage/pdfs/ultimaker/JeffDESIGN.png')}}" style="width:100%;"
              alt="Ultimaker Jeff Design Case Study">
          </div>
          <figcaption>Case Study: Jeff Design</figcaption>
        </figure>
      </a>
    </div>
    @endslot
    @slot('customTabs')
    <li class="nav-item">
      <a class="nav-link active in" data-toggle="tab" href="#product-family" role="tab">Product Family</a>
    </li>
    @endslot
    @slot('customPanes')
    <div class="tab-pane fade show active in" id="product-family" role="tabpanel">
      @include('pages.matrix.ultimaker-matrix')
    </div>
    @endslot
    @endcomponent
  </div>
</section>
@endsection
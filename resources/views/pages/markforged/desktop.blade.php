@extends('layouts.layout')
@section('title')
Markforged Desktop Series
@stop
@section('meta')
<link rel="canonical" href="{{route('desktop-series')}}" />
@stop
@section('description')The Markforged Desktop Series combines industrial quality and affordability in an all-aluminum
form factor that fits on your desktop. @stop
@section('keywords')Desktop,3D,Onyx One,One Pro,Mark Two,Design Software,CAD,3D
CAD,Markforged,Printers,authorized,reseller,Canada,materials,fiber,carbon @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/markforged/3d-printing-buyers-guide.jpg')}});">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Markforged Desktop Series 3D Printers</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">With Cloud Eiger Software</h2>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">The Desktop Series combines industrial quality and affordability in
            an all-aluminum form factor that fits on your desktop.</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5">
        <h1 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">DESKTOP
          SERIES</h1>
        <p>Markforged’s line of Desktop 3D printers have the DNA of their Industrial Series condensed into a package
          that fits right on your desktop, making them a winner of the Enterprise Printer of the Year award in 2017.
          These compact, powerful 3D printers are ideal for businesses and manufacturing environments with limited
          space, delivering parts strong enough to replace machined aluminum while saving time, money and effort.</p>
        <img src="{{ asset('storage/images/markforged/MF-Auth-Value-Reseller-300.png') }}" width="300px" height="auto"
          class="d-block mx-auto pt-5 pb-2" />
      </div>
      <div class="col-lg-7">
        <img src="{{asset('storage/images/markforged/mark-two-angled.png')}}" style="width:100%;" alt="">
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5">
        <div class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">
          HIGH-PERFORMANCE FILAMENT</div>
        <p>The Markforged Desktop 3D Printer Series are the only 3D printers on the market designed from the ground up –
          hardware, software, and materials – to uniquely create chopped carbon fiber parts with a beautiful surface
          finish, stiffness and temperature tolerance. The Onyx material is at the core of all Markforged composite
          printers; a beautiful black filament made from combining tough nylon with micro-carbon reinforcement.</p>
        <p>Start with the Onyx One and create parts for a wide variety of applications using the acclaimed Onyx chopped
          carbon fiber filament. Step up to the Onyx Pro for the impressive strength that comes with adding continuous
          fiberglass for strong composite parts. The Mark Two combines Markforged’s unique carbon fiber reinforcement
          with workhorse reliability for the strongest, most versatile parts in our portfolio.</p>
        <p>With your choice of reinforcement and plastics to suit any job, remove the time, hassle and design iterations
          and put your parts to use right off the printer with Markforged’s Desktop Series.</p>
      </div>
      <div class="col-lg-7">
        <img src="{{asset('storage/images/onyx_filament_carbonfaser.jpg')}}" style="width:100%;" class="img-shadow"
          alt="">
      </div>
    </div>
  </div>
</section>
<section class="section-secondary py-5">
  <div class="container-fluid py-3">
    <div class="section-title center-block mx-auto">
      <div class="wow fadeIn text-center h2" data-wow-duration="1s" data-wow-delay="0.5s">DESKTOP SERIES</div>
      <p class="lead text-center mx-auto w-75 d-block">The DNA of the Industrial Series in a package that fits on your
        desktop. The Desktop line won enterprise printer of the year in 2017. The engineering excellence of the
        industrial series in a form factor that fits on your desk.</p>
      <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
    </div>
    <div class="row">
      <div class="col col-lg-4 col-sm-12 py-4">
        <img class="rounded d-block img-shadow" src="https://static.markforged.com/wf-assets/1024-wf-l8podqz7-183.jpg"
          width="100%" height="auto" />
        <div class="h4 text-center w-100 my-3">
          ONYX ONE
        </div>
        <p class="text-left w-100">The strength and stiffness of carbon fiber meet the versatility of tough nylon.
          Engineering class parts that are 20% stronger and 40% stiffer than ABS in a desktop format.</p>
      </div>
      <div class="col col-lg-4 col-sm-12 py-4">
        <img class="rounded d-block img-shadow" src="https://static.markforged.com/wf-assets/1024-wf-l8podqz7-183.jpg"
          width="100%" height="auto" />
        <div class="h4 text-center w-100 my-3">
          ONYX PRO
        </div>
        <p class="text-left w-100">For load-bearing applications that require real strength, these parts make the grade.
          Now you can print parts faster and cheaper than machining metal.</p>
      </div>
      <div class="col col-lg-4 col-sm-12 py-4">
        <img class="rounded d-block img-shadow" src="https://static.markforged.com/wf-assets/1024-wf-l8podqz7-183.jpg"
          width="100%" height="auto" />
        <div class="h4 text-center w-100 my-3">
          MARK TWO
        </div>
        <p class="text-left w-100">The Mark Two delivers industrial grade build quality and part strength in a desktop
          form-factor. Print incredible strong continuous carbon fiber parts.</p>
      </div>
    </div>
  </div>
</section>
<section class="pt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7">
        <img class="img-shadow" src="{{asset('storage/images/markforged_upgrade.png')}}"
          style="width:100%; margin-bottom:20px;" alt="">
      </div>
      <div class="col-lg-5">
        <div class="main-title wow fadeInRight" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">
          Designed For Easy Upgrades</div>
        <p>No other desktop 3D printer gives you the benefits of ever-improving functionality. Whether it’s a hardware
          step up to the next level printer for stronger parts or more advanced capabilities in software, the same
          printer you purchased simply keeps improving over time. Printing improvements and innovations are delivered
          from our advanced cloud-based software, and each printer in our line can be upgraded to the next step up or to
          the Industrial Series.</p>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#specSheets" role="tab">Spec Sheets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#whitepapers" role="tab">Whitepapers</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="specSheets" role="tabpanel">
          <div class="d-flex">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/Mark+Two+Specs.pdf')}}" class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/Mark+Two+Specs.png')}}" style="width:100%;"
                      alt="Mark Two Spec Sheet PDF">
                  </div>
                  <figcaption>Mark Two Spec Sheet</figcaption>
                </figure>
              </a>
            </div>
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{asset('storage/pdfs/markforged/Markforged+Composites+Datasheet-2017.pdf')}}"
                class="pdf-item">
                <figure style="width:200px;">
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/markforged/Markforged+Composites+Datasheet-2017.png')}}"
                      style="width:100%;" alt="Composite Materials Datasheet PDF">
                  </div>
                  <figcaption>Composite Materials Datasheet</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>

        <div class="tab-pane fade in active show" id="whitepapers" role="tabpanel">
          <div class="d-flex">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_1" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img
                      src="{{asset('storage/pdfs/markforged/whitepapers/Increase+Bandwidth+on+Your+CNC+Mill+with+a+Desktop+3D+Printer+Web.png')}}"
                      style="width:100%;" alt="5 Ways to Increase Bandwidth on Your CNC Mill with a Desktop 3D Printer">
                  </div>
                  <figcaption>5 Ways to Increase Bandwidth on Your CNC Mill with a Desktop 3D Printer</figcaption>
                </figure>
              </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a data-toggle="modal" data-target="#wp_modal_2" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img
                      src="{{asset('storage/pdfs/markforged/whitepapers/Keep+Machine+Shop+Competitive+in+the+Digital+Age+Web.png')}}"
                      style="width:100%;" alt="5 Ways to Keep Your Machine Shop Competitive in the Digital Age">
                  </div>
                  <figcaption>5 Ways to Keep Your Machine Shop Competitive in the Digital Age</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container-fluid d-flex justify-content-start align-items-start pb-5">
  <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
    <h2 class="main-title wow fadeInLeft" data-wow-duration="1s" style="margin-left:0;" data-wow-delay="0.2s">OVERVIEW:
      Markforged Desktop Series 3D Printers</h2>
    <style>
      .ctable * {
        font-size: 12px;
      }
    </style>
    <table class="table table-striped ctable">
      <thead class="thead-inverse">
        <tr>
          <th></th>
          <th>Onyx One</th>
          <th>Onyx Pro</th>
          <th>Mark Two</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Build Volume</th>
          <td>320 mm x 132 mm x 154 mm</td>
          <td>320 mm x 132 mm x 154 mm</td>
          <td>320 mm x 132 mm x 154 mm</td>
        </tr>
        <tr>
          <th scope="row">Onyx Filament</th>
          <td>800 cm<sup>3</sup> (48.8"<sup>3</sup>)</td>
          <td>800 cm<sup>3</sup> (48.8"<sup>3</sup>)</td>
          <td>800 cm<sup>3</sup> (48.8"<sup>3</sup>)</td>
        </tr>
        <tr>
          <th>
            Fiberglass Filament
          </th>
          <td></td>
          <td>
            50 cm<sup>3</sup> (3.05"<sup>3</sup>)
          </td>
          <td>
            50 cm<sup>3</sup> (3"<sup>3</sup>)
          </td>
        </tr>
        <tr>
          <th>
            Carbon Fiber
          </th>
          <td></td>
          <td></td>
          <td>
            100 cm<sup>3</sup> (6.1"<sup>3</sup>)
          </td>
        </tr>
        <tr>
          <th>
            Kevlar
          </th>
          <td></td>
          <td></td>
          <td>
            50 cm<sup>3</sup> (3"<sup>3</sup>)
          </td>
        </tr>
        <tr>
          <th>
            High Temp. Fiberglass
          </th>
          <td></td>
          <td></td>
          <td>
            50 cm<sup>3</sup> (3"<sup>3</sup>)
          </td>
        </tr>
        <tr>
          <th>
            CFF Quick-change Nozzle
          </th>
          <td></td>
          <td>3</td>
          <td>3</td>
        </tr>
        <tr>
          <th>
            FFF Quick-change Nozzle
          </th>
          <td>3</td>
          <td>3</td>
          <td>3</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12 img-shadow wow fadeInRight" data-wow-duration="1s"
    data-wow-delay="0.2s" style="background: #f0f0f0; padding-bottom: 30px;">
    <h2 class="main-title">Need stronger and larger parts?</h2>
    <h3>
      Upgrade to an <u>industrial series</u> printer!
    </h3>
    <a class="btn btn-sm btn-white wow fadeInUp" style="margin:0 auto;display:block;width: inherit;margin-top:20px;"
      data-wow-duration="1s" data-wow-delay="0.2s" href="{{route('industrial-series')}}">Learn More</a>
  </div>
  <section class="section-secondary">
    <p class="lead text-center">
      Have any questions?
    </p>
    <button class="btn btn-lg btn-primary wowfadeInUp btn-dialog mx-auto d-block text-center" id="contact"
      data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
      data-title="Contact an Agent"
      style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">Contact
      Us</button>
  </section>
</section>

<!-- Modals Whitepapers -->
<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Gain Access to the "5 Ways to Increase Bandwidth on Your CNC Mill with
          a Desktop 3D Printer" PDF</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="50aed0e7-b6ac-e911-a987-000d3a3702ca"></div>
        <div id="dEDre8W1tnd_ALOsrOOttyytVv0NDvHfjxBXhuw_uP6s"></div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="wp_modal_2">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Gain Access to the "5 Ways to Keep Your Machine Shop Competitive in
          the Digital Age" PDF</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="95d89853-b7ac-e911-a987-000d3a3702ca"></div>
        <div id="dD2Cw9tRnZouU1l_JvYPb84XJN5jeSd0UjwZalQT96BE"></div>
      </div>
    </div>
  </div>
</div>
@stop
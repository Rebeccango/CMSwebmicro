@extends('layouts.layout')
@section('title')
SolidWorks PROMOTIONS | CAD MicroSolutions Inc.
@stop
@section('body')
<section class="parallax trans-header-window" style="margin-top:130px; background-image:url({{asset('/storage/banners/model-blur-header-solidworks.jpg')}}); background-position:bottom; background-size:fit; background-attachment: inherit; min-height:350px; background-color: #161616;">
  <div class="trans-heading">
    <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
            <h1>SOLIDWORKS Bundle Promotions</h1>
            <h3 style="font-size:18px;">Get SolidWorks for less!</h3>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 15px; padding:0;">
            @include('layouts.generic_contact_buttons')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    {{-- <h1 class="text-center">There are currently no SolidWorks Promotions.</h1>
    <h2 class="text-center">Please come back later.</h2> --}}
    <div id="promotions">
      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-3">
            <p class="section-secondary p-3 m-0">
              For additional information on the current SOLIDWORKS promotions, please give us a call or <a href="#"
                class="btn-dialog" data-toggle="modal" data-target="#contactModal" data-title="Contact an Agent">contact
                us</a>
            </p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card rounded-0 border-bottom-0 mb-0 alert alert-primary">
            <div class="card-block p-4 row ">
              <div class="col-lg-8 align-self-center pl-0">
                <strong class="h3 mt-0 pt-0 m-0">Currently there are no SolidWorks promotions.</strong>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-12">
          <div class="card rounded-0 border-bottom-0 mb-0 alert alert-primary">
            <div class="card-block p-4 row ">
              <div class="col-lg-8 align-self-center pl-0">
                <strong class="h3 mt-0 pt-0 m-0">Buy one, get one half off!</strong>
              </div>
              <div class="col-lg-4 text-center align-self-center pt-sm-4 pt-xs-4 pt-md-4 pt-lg-0 pt-4">
                <button class="btn btn-md btn-primary wow fadeInRight btn-dialog" data-toggle="modal" data-target="#promo0">USE
                  THIS PROMOTION</button>
              </div>
            </div>
            <hr class="mt-0" />
            <p>Purchase one SolidWorks product and receive a second product of equal or lesser value for 50% off. Both products must include Subscription.<br/>
              Products may include SolidWorks 3D CAD, Simulation, Plastics, PDM, Composer, Electrical, PCB, Inspection, MBD or Visualize.</p>
            <p class="small text-sm">Valid Until: March 29, 2019</p>
          </div>
        </div> --}}
        {{-- <div class="col-lg-12">
          <div class="card rounded-0 border-bottom-0 mb-0 alert alert-primary">
            <div class="card-block p-4 row ">
              <div class="col-lg-8 align-self-center pl-0">
                <strong class="h3 mt-0 pt-0 m-0">Buy any SOLIDWORKS Electrical Product and get any license of
                  SOLIDWORKS Mechanical Design (Standard, Professional or Premium) or Simulation (Standard,
                  Professional, Premium or Flow Simulation) at 50% off!</strong>
              </div>
              <div class="col-lg-4 text-center align-self-center pt-sm-4 pt-xs-4 pt-md-4 pt-lg-0 pt-4">
                <button class="btn btn-md btn-primary wow fadeInRight btn-dialog" data-toggle="modal" data-target="#promo1">USE
                  THIS PROMOTION</button>
              </div>
            </div>
            <hr class="mt-0" />
            <p class="small text-sm">
              <a href="#" data-toggle="modal" data-target="#terms">* Terms & Conditions</a><span class="px-3">|</span>Valid Until: December 31, 2018
            </p>
          </div>
        </div>
        <div class="col-lg-12 mt-3">
          <div class="row">
            <div class="col-lg-8 align-self-center pl-0">
              <h3 class="h2 text-center my-3">Buy any SOLIDWORKS PCB Product (including PCB Connector) and get any
                license of SOLIDWORKS Mechanical Design (Standard, Professional or Premium) or Simulation (Standard,
                Professional, Premium or Flow Simulation) at 50% off!</h3>
            </div>
            <div class="col-lg-4 text-center align-self-center pt-sm-4 pt-xs-4 pt-md-4 pt-lg-0 pt-4">
              <button class="btn btn-md btn-primary wow fadeInRight btn-dialog" data-toggle="modal" data-target="#promo2">USE
                THIS PROMOTION</button>
            </div>
          </div>
          <p class="text-info h5 mt-3"><strong>BONUS:</strong> With this promotion, receive an additional $2,200USD
            savings off the cost of PCB, or $1,700 off the cost of PCB Connector!</p>
          <hr class="mt-3" />
          <p class="small text-sm">
            <a href="#" data-toggle="modal" data-target="#terms">* Terms & Conditions</a><span class="px-3">|</span>Valid Until: December 31, 2018
          </p>
        </div> --}}
      </div>
    </div>
  </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="promo0" aria-labelledby="promo0">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4 mt-0 w-100">Buy one, get one half off!<div class="h6"><strong>Valid through March 29, 2019</strong></div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body p-2 pr-0">
        <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/yddzv0bheempewanojccyg.html"
          allowtransparency="true" width="100%" height="420px" type="text/html" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
  </div>
</div>
{{--

<div class="modal fade" tabindex="-1" role="dialog" id="promo1" aria-labelledby="promo1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4 mt-0 w-100">Buy any SOLIDWORKS Electrical Product and get any license of SOLIDWORKS Mechanical Design (Standard, Professional or Premium) or Simulation (Standard, Professional, Premium or Flow Simulation) at 50% off! <div class="h6"><strong>Valid until: December 31, 2018</strong></div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body p-2 pr-0">
        <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/ortcacgeeeipbqanojcgkw.html"
          allowtransparency="true" width="100%" height="420px" type="text/html" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="promo2" aria-labelledby="promo2">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4 mt-0 w-100">Buy any SOLIDWORKS PCB Product (including PCB Connector) and get any license of SOLIDWORKS Mechanical Design (Standard, Professional or Premium) or Simulation (Standard, Professional, Premium or Flow Simulation) at 50% off!
          <div class="h6"><strong>Valid until: December 31, 2018</strong></div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body p-2 pr-0">
        <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/p0wzv8gfeeipaqanojccyg.html"
          allowtransparency="true" width="100%" height="420px" type="text/html" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
  </div>
</div> --}}
{{--
<div class="modal fade" tabindex="-1" role="dialog" id="promo3" aria-labelledby="promo1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4 mt-0 w-100">Buy any SOLIDWORKS Electrical or PCB product and get SOLIDWORKS Flow
          Simulation for 50% off
          <div class="h6"><strong>Valid until September 28</strong></div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body p-2 pr-0">
        <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/6pukvzg3eeipywanojcoiw.html"
          allowtransparency="true" width="100%" height="420px" type="text/html" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="promo4" aria-labelledby="promo1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4 mt-0 w-100">Buy 2 SOLIDWORKS CAD licenses and get a 3rd (Standard, Professional or
          Premium) for FREE! (A savings of up to $7,995 USD)
          <div class="h6"><strong>Valid until September 28</strong></div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body p-2 pr-0">
        <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/rhrkrbieeipaganojcgkw.html"
          allowtransparency="true" width="100%" height="420px" type="text/html" frameborder="0" style="border:0"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="terms2" aria-labelledby="terms2">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4 mt-0 w-100">Terms & Conditions: Buy 2 Get 1 Free Promotion
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0">
        <p class="p-3">* Legal Terms and Conditions: Promotion valid on new licenses only, for purchases made between
          September 4, 2018 and September 28, 2018. Two SOLIDWORKS licenses must be purchased at full price, no
          additional discounts or promotions can be combined with this offer, in order to get third license free of
          charge. The “no charge” CAD license will match the lower priced CAD seat version. Subscription for all 3
          licenses must be paid in full. Not valid on educational or research licenses. Limit one offer per client
          location. Offer valid in US, Canada and Mexico only.</p>
      </div>
    </div>
  </div>
</div> --}}
{{-- <div class="modal fade" tabindex="-1" role="dialog" id="terms" aria-labelledby="terms">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4 mt-0 w-100">TERMS & CONDITIONS
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0">
        <p class="p-3">* Legal Terms and Conditions: Subscription must be purchased for both licenses
          in the bundle.
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="terms0" aria-labelledby="terms0">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4 mt-0 w-100">TERMS & CONDITIONS
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0">
        <p class="p-3">*Legal Terms and Conditions: Offer limited to two per customer location. Offer valid from December 1 - 31, 2018 in the U.S. Canada and Mexico only. Offer expires December 31, 2018 at 11:59pm Eastern Standard Time and cannot be combined with any other discount or offer. Only newly acquired licenses ordered after 12:00 am Eastern Standard Time on December 1, 2018 are eligible. Educational and Research licenses do not qualify for this offer. Anti-piracy and compliance cases do not qualify for this offer. Premium Subscription Service must be purchased for one-year at full price on each new SOLIDWORKS product license purchased pursuant to this offer. Other restrictions may apply. Contact your local participating Dassault Systemes SolidWorks Corporation reseller for more information.</p>
      </div>
    </div>
  </div>
</div> --}}
@stop
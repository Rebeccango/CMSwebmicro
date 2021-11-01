@extends('layouts.layout')
@section('title')
Referral Program | CAD MicroSolutions Inc.
@stop
@section('body')
<section class="section-secondary pt-5">
  <div class="container-fluid">
    <div class="content">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h1>Referral Program</h1>
          <h3 style="font-size:18px;">Refer CAD MicroSolutions to a company or individual</h3>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-sm-4 mt-md-0">
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <p class="lead">Did you have a great experience with our team at CAD MicroSolutions and want to share with your
          network? Start
          earning rewards for every referral who becomes a new customer. Join our referral appreciation program today!
        </p>
        <p>&nbsp;</p>
        <strong class="h5">Refer CAD MicroSolutions to a company or individual that becomes a new customer and receive
          one of the following on
          us!</strong>
        <ul type="disc" class="my-4 lead">
          <li>A free&nbsp;<a href="https://www.ecobee.com/en-ca/" target="_blank" rel="noopener noreferrer"
              data-auth="NotApplicable" data-ogsc="">Ecobee smart thermostat</a></li>
          <li>A free&nbsp;<a href="https://shape-products.com/portfolio/fabriq-multi-room-smart-speakers/"
              target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-ogsc="">Fabriq smart
              speaker</a>
          </li>
          <li>A free&nbsp;<a href="http://www.spinmaster.com/brand.php?brand=cat_meccano" target="_blank"
              rel="noopener noreferrer" data-auth="NotApplicable" data-ogsc="">Meccano</a>&nbsp;toy model
          </li>
          <li>A $250 credit to your CAD Micro account</li>
        </ul>
        <a class="small" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#terms"
          href="#terms">&nbsp;*<em>Terms and
            Conditions&nbsp;</em></a>
      </div>
      <div class="col-12 col-md-6">
        <h1 data-wow-duration="1s" data-wow-delay="0.2s" class="main-title wow fadeInRight" style="margin-top: 0px;">
          Join the
          CAD MicroSolutions Referral Appreciation Program</h1>
        <div data-form-block-id="67ee0a5a-287f-ea11-a812-000d3a5bf333"></div>
        <div id="d9ejEbv0NuUzacchbB1SwMIVeMKeoiJG_q-UpyNvQs7s"></div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-scripts')
<div class="modal fade" tabindex="-1" role="dialog" id="terms">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Terms & Conditions</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p class="lead">The referred company or individual must not currently be on contract or already engaged in
          active conversation with CAD MicroSolutions. Purchase value must be greater than $3000CDN and include at least
          one of the
          following:</p>
        <p>SOLIDWORKS CAD, SOLIDWORKS Electrical, CAMWorks, DriveWorks, GOM, Markforged Mark Two, Markforged Industrial
          Series, Markforged Metal X, Ultimaker S5, Formlabs Form 3, HP Jet Fusion. Final prize selection will be
          determined on
          a case by case basis between CAD MicroSolutions and the referring customer, to be delivered subsequent to the
          purchase by the new customer.</p>
      </div>
    </div>
  </div>
</div>
@endpush
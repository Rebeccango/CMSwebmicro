@extends('layouts.layout')
@section('title')
  Markforged PROMOTIONS | CAD MicroSolutions Inc.
@stop
@section('body')
  <section class="parallax trans-header-window" style="margin-top:130px; background-image: url({{  asset('/storage/images/banners/markforged_bg_banner_12.jpg') }});
    background-position: 0px 50%; background-size:cover; background-attachment: inherit; min-height:350px; background-color: #161616;">
      <div class="trans-heading">
      <div class="container-fluid">
        <div class="content white-content d-flex justify-content-center align-items-center">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
              <h1>CURRENT MARKFORGED PROMOTIONS</h1>
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
</section>

<div class="modal fade" tabindex="-1" role="dialog" id="promo1" aria-labelledby="promo1">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4" id="myModalLabel">Free Composite Printer with Metal X Purchase</div>
        <div class="h5"><strong>March 29, 2019</strong></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">
      <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/fpphnmwleeebhahg3k3aq.html" allowtransparency="true" width="100%" height="500px" type="text/html" frameborder="0" style="border:0"></iframe>
      </div>
  </div>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="promo2" aria-labelledby="promo2">
  <div class="modal-dialog" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title h4" id="myModalLabel">HIGH-STRENGTH INDUSTRIAL 3D PRINTING PACKAGE</div>
        <div class="h5"><strong>March 29, 2019</strong></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body" style="padding:5px; padding-right:0; overflow:hidden">
      <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/22yditvgeeebgeahg3flkq.html" allowtransparency="true" width="100%" height="500px" type="text/html" frameborder="0" style="border:0"></iframe>
      </div>
  </div>
</div>
</div>
@stop

@extends('layouts.layout')
@section('title')
Markforged Free Demo
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/banners/toronto_cambridge_event.jpg')}})">
  <div class="trans-heading">
    <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1s"
            data-wow-delay="0.2s">
            <h1>3D Print Production Strength Parts?</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 col-sm-12">
        <h2>You’re Invited to a 3D Printing Open House Featuring Markforged!</h2>
        <br />
        <h5><strong>This event is currently running at <u>two locations:</u></strong></h5>
        <br />
        <div class="row">
          <h6 class="text-center">
            Please select an event to attend:
          </h6>
          <br />
          <div class="col-lg-6">
            <div class="jumbotron" class="btn btn-primary btn-lg">
              <h6 class="lead"><strong>Toronto Office</strong><br></h6>
              <span>Monday, June 5</span>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="jumbotron">
              <h6 class="lead"><strong>Cambridge Office</strong><br></h6>
              <span>Tuesday, June 6</span>
            </div>
          </div>
          <div class="col-lg-12">
            <button class="btn btn-lg btn-primary" data-toggle="modal" data-target="#openHouse" style="margin: 0 auto;
    position: relative;
    left: 50%;
    margin-bottom:30px;
    margin-left: -145px;">Sign up for Open House Event</button>
          </div>
        </div>
        <p>
          CAD MicroSolutions is excited to invite you to the Markforged revolutionary 3D additive manufacturing open
          house.<br /><br />
          Come see and test Markforged 3D printer’s continuous carbon fiber printing applications for their strength,
          performance, and accuracy.<br /><br />
          See samples with Nylon, Fiberglass, Onyx and Carbon Fiber as well as METAL!!
          Meet Veronika Tyukova from Markforged.
        </p>
        <strong style="font-size:13px;">What to expect:</strong>
        <ul style="font-size:13px;">
          <li>
            The latest Carbon Fiber printers in action
          </li>
          <li>
            Test your own file using Eiger print software
          </li>
          <li>
            Test sample metal parts
          </li>
          <li>
            Enjoy a hot lunch
          </li>
          <li>
            Q &amp; A session
          </li>
        </ul>
        <p><strong>Open House Event Special: 50% Discount Available on Training and Installation When Placing an Order
            Before the End of June. <em>Offer Only Valid to Attendee’s.</em></strong></p>
      </div>
      <div class="col-lg-5 hidden-md-down">
        <img width="100%" height="auto" src="{{asset('storage/images/markforged/markx_front.png')}}" />
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="openHouse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Sign up for Open House Event</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
        <h6>Fill out the form and select the location you wish to attend.</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/mvo4kjwneeebcvbl84vq8q.html"
          allowtransparency="true" width="100%" height="500px" type="text/html" frameborder="0"
          style="border:0; padding-right:20px; max-width:600px"></iframe>
      </div>
    </div>
  </div>
</div>
@stop

@push('after-scripts')
<script>
  $(function(){
$('#videos .row > div').matchHeight();
})
</script>
@endpush

@push('after-styles')
<style>
  .jumbotron * {
    text-decoration: none !important;
  }

  .jumbotron {
    display: block;
    padding: 15px;
  }

  button {
    margin-top: 0 !important;
  }
</style>
@endpush
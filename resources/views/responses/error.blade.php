@extends('layouts.layout')
@section('title')
  Error contacting Cad MicroSolutions
@stop
@section('body')
<section >
  <div class="container-fluid">
    <div class="content">
      <div class="col-lg-2">
        <img src="{{asset("storage/icons/warning-red.svg")}}" width="100" />
      </div>
      <div class="col-lg-10">
        <h1 class="main-title wow fadeInLeft text-danger" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">There was a problem sending your contact request!</h1>
        <div >
          <p style="font-size:18px;">
            Please return to the previous page and try again.<br />
            Make sure any data you entered is correct before submitting again.<br />
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

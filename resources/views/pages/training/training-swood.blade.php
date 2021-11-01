@extends('layouts.layout')
@section('title')
SWOOD Training Courses
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('images/pages/training/swood/swood-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          >
          <h1>SWOOD</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Instructor-Led Online And Custom Training</h2>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section style="padding-bottom:60px">
  <div class="container-fluid">
    <div class="content">
      <div class="section-block">
        <div class="section-secondary">
          <table style="text-align:center; max-width:450px; margin:0 auto;" width="100%">
            <tr>
              <td>
                Are you interested in training?
              </td>
              <td>
                <button class="btn btn-sm btn-white btn-dialog" id="quote"
                  data-toggle="modal" data-target="#contactModal" data-type="quote"
                  data-title="Get a free quote" style="margin:0">Get a Quote</button>
              </td>
            </tr>
          </table>
        </div>
        <div class="s40"></div>
        <h2 class="main-title">SWOOD Courses</h2>
        <table class="table table-striped" style="width:100%;">
          <thead>
            <tr>
              <td></td>
              <td width="30%">
                Course Name
              </td>
              <td>
                Description
              </td>
              <td>
                Length
              </td>
            </tr>
          </thead>
          <tr>
            <td>
              <a target="_blank" href="{{url('resources/236/swood-design-course-outline')}}" class="pdf-item text-center mx-auto">
                <figure class="text-center">
                  <div class="figimg text-center" style="min-height:auto">
                    <img src="{{asset('storage/resources/September2020/C3nFZXldGpUSykr32acZ.jpg')}}" style="width:100%;" alt="SWOOD Design Course Outline PDF">
                  </div>
                </figure>
              </a>
            </td>
            <td>
              <div class="h6">
                <a target="_blank" href="{{url('resources/236/swood-design-course-outline')}}">SWOOD Design Course</a>
              </div>
            </td>
            <td>
              <p>Learn the fundamentals of SWOOD Design for woodworking, including building your library of panels, frames and connectors
              for reuse and much more.</p>
            </td>
            <td>
              <p>2 Days</p>
            </td>
          </tr>
          <tr>
            <td>
              <a target="_blank" href="{{url('resources/235/swood-cam-course-outline')}}" class="pdf-item text-center mx-auto">
                <figure class="text-center">
                  <div class="figimg text-center" style="min-height:auto">
                    <img src="{{asset('storage/resources/September2020/1nKFiqPgyPh41nIrBEy2.jpg')}}" style="width:100%;"
                      alt="SWOOD CAM Course Outline PDF">
                  </div>
                </figure>
              </a>
            </td>
            <td>
              <div class="h6">
                <a target="_blank" href="{{url('resources/235/swood-cam-course-outline')}}">SWOOD CAM Course</a>
              </div>
            </td>
            <td>
              <p>
                Learn the fundamentals of SWOOD CAM for woodworking, including how to create machine tools and aggregates, toolpath simulations, reporting and much more.
              </p>
            </td>
            <td>
              <p>2 Days</p>
            </td>
          </tr>
        </table>
        <div class="s30"></div>
        <div class="section-secondary">
          <table style="text-align:center; max-width:450px; margin:0 auto;" width="100%">
            <tr>
              <td>
                Are you interested in training?
              </td>
              <td>
                <button class="btn btn-sm btn-white btn-dialog" id="quote"
                  data-toggle="modal" data-target="#contactModal"  data-type="quote"
                  data-title="Get a free quote">Get a Quote</button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@stop


@push('after-styles')
<style>
  .table-striped td {
    vertical-align: middle;
  }

  .table-striped p {
    margin: 0;
  }
</style>
@endpush
@extends('layouts.layout')
@section('title')
Training Courses
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
style="min-height:450px; background-image:url({{ asset('storage/banners/training-standard-banner.jpg') }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">TRAINING SERVICES</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">For Engineering Excellence</h2>
        </div>
        {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">BIGREP 3D Printers - Large scale manufacturing and rapid prototyping
            from BigRep GmbH. Discover our 3D printers the BigRep ONE, BigRep Studio.</p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary" style="padding-bottom:0">
  <div class="container-fluid">
    <div class="content" style="padding-bottom:40px;">
      <table>
        <tr>
          <td>
            <div>
              <a href="#">
                <h2 class="icon-title">SOLIDWORKS TRAINING</h2>
              </a>
              <p>
                Our Competitive pricing offers a flexible approach to investing in SOLIDWORKS software.
              </p>
              <a type="button" class="btn btn-primary" href="{{route('training-solidworks')}}">Learn More</a>
            </div>
          </td>
          <td>
            <div>
              <a href="#">
                <h2 class="icon-title">AR & VR TRAINING</h2>
              </a>
              <p>
                The training you need for enhancing, enabling, and leveraging the digital assets of Virtual and
                Augmented
                Reality.
              </p>
              <a type="button" class="btn btn-primary" href="{{route('training-vr-ar')}}">Learn More</a>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="content">
      <div class="section-block row">
        <div class="col-lg-12">
          <h1 class="main-title mt-0">Get Trained To Excel!</h1>
          <p>Training can make a big difference to your design productivity. CAD Micro can provide you with the right
            training that will suit your needs and allow you to get the most out of your software investment.</p>
          <p>Free e-drawings viewer and 2D CAD tools like DraftSight and eDrawings Viewer can make drafting faster and
            more efficient.</p>
        </div>
      </div>
      <h1 class="main-title mt-5">EXPLORE OUR TRAINING SOLUTIONS</h1>
      <div class="section-block">
        <div class="section-icon-group row" style="margin-top:-30px;">
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s"
            data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="#">
                <div class="icon" style="background-image:url('{{asset('storage/icons/instructor-lecture.png')}}');">
                </div>
                <h2 class="icon-title">Instructor-led, Online &amp; Custom Training</h2>
              </a>
              <div class="icon-body">
                <p>
                  Get the most out of your software investment with classroom training courses from certified
                  specialists.
                </p>
                <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact" data-wow-duration="1s"
                  data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
                  data-title="Contact an Agent">Contact Us</button>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s"
            data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="#">
                <div class="icon" style="background-image:url('{{asset('storage/icons/online-graduation.png')}}');">
                </div>
                <h2 class="icon-title">Online, On-Demand Training</h2>
              </a>
              <div class="icon-body">
                <p>
                  Learn on-the-go, on-the-job, and at your own pace with cutting-edge online learning options.
                </p>
                <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact" data-wow-duration="1s"
                  data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
                  data-title="Contact an Agent">Contact Us</button>
              </div>
            </div>
          </div>
          <div class="icon-block col-lg-4 col-md-4 col-sm-6 col-xs-12  wow fadeInUp" data-wow-duration="1s"
            data-wow-delay="0.5s">
            <div class='icon-content'>
              <a class="icon-link" href="#">
                <div class="icon" style="background-image:url('{{asset('storage/icons/training-solutions.png')}}');">
                </div>
                <h2 class="icon-title">Custom Training Solutions</h2>
              </a>
              <div class="icon-body">
                <p>
                  Our certified specialists can design custom training to suit your needs.
                </p>
                <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="contact" data-wow-duration="1s"
                  data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
                  data-title="Contact an Agent">Contact Us</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
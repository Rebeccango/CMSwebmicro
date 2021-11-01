@extends('layouts.layout')
@section('title')
IOT Solutions | The Digital Transformation of Manufacturing
@stop
@section('meta')
<link rel="canonical" href="{{route('iot')}}" />
@stop
@section('description')As one of the driving forces of Industry 4.0, the Internet of Things (IoT) is set to
revolutionize the entire manufacturing value chain as we know it through an unprecedented level of connectedness and
functionality. The consumer products industry has embraced IoT; from smart phones to home automation solutions and
autonomous vehicles, IoT has changed the industry by creating highly personalized experiences like never before. In the
manufacturing industry, Industrial Internet of Things (IIoT) creates new ways of developing, innovating and
manufacturing with a customer-centric focus while increasing efficiency, safety and performance. @stop
@section('keywords')IoT, Internet of Things, manufacturing, industry, performance, CAD, Industry 4.0, Digital
Twin,Prototyping, Predictive Maintanance, evolutionize, automation, connectedness, functionality, personalized, @stop
@push("before-scripts")
<script type="text/javascript">
  var loc = "https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/";
</script>
<script type="text/javascript" src="https://az124611.vo.msecnd.net/web/v10/CDWidget.js"></script>
@endpush
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex" style="min-height:550px;
background-image:url({{asset('/storage/images/iot/Use-Cases.png')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">IOT Solutions</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">The Digital Transformation of Manufacturing</h2>
        </div>
        {{-- <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">The industrial power of selective laser sintering on your benchtop,
            starting at $9,999.</p>
        </div> --}}
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="py-0 pb-5">
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-last order-md-first" style="margin-bottom:15px;">
        <img class="d-block mx-auto" height="auto" width="100%"
          src="{{asset('/storage/images/iot/Internet-of-Things.jpg')}}" />

        <img class="my-3 mt-0 mt-sm-3 py-3 d-block mx-auto" style="max-height:120px" height="auto" width="300px"
          src="{{asset('/storage/images/iot/Seebo_logo_updated-1.png')}}" />
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-5">
        <h2>The Internet of Things (IOT)</h2>
        <p>As one of the driving forces of Industry 4.0, the Internet of Things (IoT) is set to revolutionize the entire
          manufacturing value chain as we know it through an unprecedented level of connectedness and functionality. The
          consumer products industry has embraced IoT; from smart phones to home automation solutions and autonomous
          vehicles, IoT has changed the industry by creating highly personalized experiences like never before. In the
          manufacturing industry, Industrial Internet of Things (IIoT) creates new ways of developing, innovating and
          manufacturing with a customer-centric focus while increasing efficiency, safety and performance.</p>

        <p>In this new industrial era, manufacturers face a whole new set of challenges - making products that stand out
          from the competition and boost customer satisfaction with innovative capabilities, while performing
          efficiently and cost effectively, minimizing downtime and mitigating risks. With the right IoT solution for
          your business, the potential benefits are limitless. Many of the biggest players in the manufacturing industry
          have already implemented IoT solutions to minimize their production time, cut operational costs, boost the
          autonomy of their machinery, and identify blind spots in their manufacturing process.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary">
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">What is driving companies to adopt IoT?</h1>
      <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
    </div>
    <div class="d-flex row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-4">
        <img class="d-block" src="{{asset('/storage/images/iot/Icon_Predictive.png')}}" width="90px" height="90px" />
        <div class="m-3">
          <div class="h4 w-100 mt-2">
            Predictive Maintenance
          </div>
          <p class="text-left w-100">Prevent asset failure by analyzing machine stream data to identify behavior
            patterns and predict issues before they happen.</p>
          {{-- <a href="#PredictiveMaintenance">Discover More <i class="fas fa-angle-double-right"></i></a> --}}
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-4">
        <img class="d-block" src="{{asset('/storage/images/iot/Icon_Remote-Monitoring.png')}}" width="90px"
          height="90px" />
        <div class="m-3">
          <div class="h4 w-100 mt-2">
            Remote Monitoring
          </div>
          <p class="text-left w-100">Get deep visibility into equipment health and actionable insights to maximize
            overall equipment effectiveness (OEE) and cut maintenance costs.</p>
        </div>
        {{-- <a href="#RemoteMonitoring">Discover More <i class="fas fa-angle-double-right"></i></a> --}}
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-4">
        <img class="d-block" src="{{asset('/storage/images/iot/Icon_Iot-Prototyping.png')}}" width="90px"
          height="90px" />
        <div class="m-3">
          <div class="h4 w-100 mt-2">
            IoT Prototyping
          </div>
          <p class="text-left w-100">Empower business decision-making by validating an IoT system’s functionality and
            gaining early stakeholder buy-in before development.</p>
          {{-- <a href="#IOTPrototyping">Discover More <i class="fas fa-angle-double-right"></i></a> --}}
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-4">
        <img class="d-block" src="{{asset('/storage/images/iot/Icon_Digital-Twin.png')}}" width="90px" height="90px" />
        <div class="m-3">
          <div class="h4 w-100 mt-2">
            Digital Twin
          </div>
          <p class="text-left w-100">Compare product design to actual performance with a Digital Twin that accurately
            tracks products, processes, and systems in real time.</p>
          {{-- <a href="#DigitalTwin">Discover More <i class="fas fa-angle-double-right"></i></a> --}}
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-4">
        <img class="d-block" src="{{asset('/storage/images/iot/Icon_Rvenue.png')}}" width="90px" height="90px" />
        <div class="m-3">
          <div class="h4 w-100 mt-2">
            Recurring Revenue Streams
          </div>
          <p class="text-left w-100">Innovate with new business models that drive recurring revenue streams and increase
            asset value by turning products into data-driven services.</p>
        </div>
        {{-- <a href="#RevenueStreams">Discover More <i class="fas fa-angle-double-right"></i></a> --}}
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 py-4">
        <img class="d-block" src="{{asset('/storage/images/iot/Icon_Factory-4.0.png')}}" width="90px" height="90px" />
        <div class="m-3">
          <div class="h4 w-100 mt-2">
            Factory 4.0 Design
          </div>
          <p class="text-left w-100">Use the Seebo platform to explore how any venue - fromt a factory, to a retail
            store or building - can be transformed with IoT for a range of business benefits.</p>
          {{-- <a href="{{route('bigrep-one')}}">Discover More <i class="fas fa-angle-double-right"></i></a> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid text-center mt-5">
    <div class="h3">
      Watch How to prepare for Industry 4.0 - a Practical Guide
    </div>
    <p class="h6">
      Register to gain access to this exclusive webinar
    </p>
    <a href="#" data-toggle="modal" data-target="#VideoIndustry" class="d-block mx-auto mt-4" style="width:480px">
      <img src="{{ asset('storage/images/iot/iot_video_thumbnail.jpg') }}" class="img-shadow" width="480px"
        height="360px" />
    </a>
  </div>
  </div>
</section>
<section>
  <div class="container-fluid text-center">
    <p class="mx-auto h6 p-3" style="max-width:700px">Unleash the data buried in your production line machines to
      improve overall equipment efficiency and manufacturing yield. Contact us today to learn how to get started with
      the IoT solution that’s right for your business.</p>
    <button class="btn btn-sm btn-white wow fadeInUp btn-dialog mx-auto py-3" id="contact" data-wow-duration="1s"
      data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="contact"
      data-title="Contact an Agent"
      style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInUp;">Contact
      Us</button>
  </div>
</section>
@stop

@push('foot')
<div class="modal fade" id="VideoIndustry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="container-fluid">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Watch How to prepare for Industry 4.0</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- <script type="text/javascript">var loc = "https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/";</script>
            <script type="text/javascript" src="https://az124611.vo.msecnd.net/web/v10/CDWidget.js"></script>
            <div pageID="zz1ufxvmeeibmuahg3flkq"></div> --}}
          <iframe src="https://analytics.clickdimensions.com/cadmicrocom-au6my/pages/zz1ufxvmeeibmuahg3flkq.html"
            allowtransparency="true" width="100%" height="500px" type="text/html" frameborder="0"
            style="border:0"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endpush
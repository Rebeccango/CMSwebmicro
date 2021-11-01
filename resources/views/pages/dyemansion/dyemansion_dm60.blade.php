@extends('layouts.layout')
@section('title')
DM60 – coloring for 3D printed plastics | DyeMansion
@stop
@section('meta')
<link rel="canonical" href="{{route('dyemansion.dyemansion-dm60')}}" />
@stop
@section('description')World leading industrial coloring system for 3D printed plastics. No added material layer,
unlimited color options for
clean, high-value end-use products. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px;  background-image:url({{asset('images/pages/dyemansion/dyemansion_header_2560x672_dm60.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>DyeMansion DM60</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">The leading coloring solution for industrial Additive Manufacturing</h2>
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
    <div class="row d-flex">
      <div class="col-12">
        <div class="d-flex align-items-md-start align-items-start flex-column text-lg-left">
          <h3 class="h1 mx-lg-0 mb-3 main-title mt-0">DEEPDYE COLORING WITH DYEMANSION DM60</h3>
          <div id="workflow" class="accordion w-100 accordion--arrows accordion--only-one my-4">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#workflow_1" aria-expanded="true"
                    aria-controls="workflow_1">
                    Limitless Color Choices
                  </button>
                </h5>
              </div>
              <div id="workflow_1" class="collapse show" data-parent="#workflow">
                <div class="card-body">
                  <p class="h5 mb-3">FROM STANDARDIZED DATABASE TO TAILOR-MADE RECIPES</p>
                  <p>Our innovative DeepDye Coloring (DDC) technology offers unlimited color choices. As a DM60 user you
                    benefit from the
                    largest color database. In addition to over 170 RAL and standardized colors, which are ready-to-use
                    without additional
                    development costs and waiting times, our color matching also offers the possibility of creating
                    individual tones for you
                    – from corporate colors to seasonal trend colors and individual skin tones. The fully automatic
                    cleaning program of the
                    DM60 allows a flexible use and a fast color change.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#workflow_2"
                    aria-expanded="false" aria-controls="workflow_2">
                    Exact Color Formulas
                  </button>
                </h5>
              </div>
              <div id="workflow_2" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p class="h5 mb-3">FOR A REPRODUCIBLE AND TRACEABLE PROCESS GLOBALLY AVAILABLE</p>
                  <p>For a long time, dyeing 3D printed plastics was a manual, uncontrollable process. We take care of
                    this process and offer
                    a global supply of exact color recipes down to the microgram. This enables an industrial process
                    that could not be
                    easier for the user and can be reproduced any time. The power lies in our color cartridges, which we
                    manufacture
                    depending on base material, finish and desired color. Based on the volume of your parts, we deliver
                    cartridges in four
                    different sizes. These are equipped with an RFID chip that transfers all process parameters QM ready
                    to the DM60.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#workflow_3"
                    aria-expanded="false" aria-controls="workflow_3">
                    ISO Certified Colors
                  </button>
                </h5>
              </div>
              <div id="workflow_3" class="collapse" data-parent="#workflow">
                <div class="card-body">
                  <p class="h5 mb-3">FOR END-USE APPLICATIONS ACROSS ALL INDUSTRIES</p>
                  <p>The demands for 3D printed products are constantly increasing. Our ISO-certified colors make us a
                    trusted technology
                    partner for biocompatible eyewear or medical orthoses as well as for light- and heat-resistant
                    automotive interiors.
                    With our extended ColorsX line, we are responding to industry specific requirements and are always
                    looking forward to
                    new input for the further development of our DeepDye Coloring (DDC) technology.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <p class="h5 mb-4">POLYSHOT + DEEPDYE</p>
        <div class="cocoen card shadow-sm mb-4">
          <img src="{{asset('images/pages/dyemansion/DyeMansion_depowdered_raw_MJF.jpg')}}" alt="">
          <img src="{{asset('images/pages/dyemansion/DyeMansion_PolyShot_DeepDye Coloring_MJF.jpg')}}" alt="">
          <div class="cocoen-ba">
            <div>before</div>
            <div>after</div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <p class="h5 mb-4">VAPORFUSE + DEEPDYE</p>
        <div class="cocoen card shadow-sm mb-4">
          <img src="{{asset('images/pages/dyemansion/DyeMansion_depowdered_raw_MJF.jpg')}}" alt="">
          <img src="{{asset('images/pages/dyemansion/DyeMansion_VaporFuse_DeepDye Coloring_MJF.jpg')}}" alt="">
          <div class="cocoen-ba">
            <div>before</div>
            <div>after</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h3 class="h1 mb-4 main-title">Limitless color choices:
          From standardized database
          to tailor-made recipes</h3>
        <p class="lead">Our innovative DeepDye Coloring (DDC)
          technology offers unlimited color choices.
          As a DM60 user you benefit from the
          largest color database. In addition to over
          170 RAL and standardized colors, which
          are ready-to-use without additional development costs and waiting times, our color
          matching also offers the possibility of
          creating individual tones for you – from
          corporate colors to seasonal trend colors
          and individual skin tones. The fully
          automatic cleaning program of the DM60
          allows a flexible use and a fast color
          change.</p>
        <a href="https://www.cadmicro.com/resources/147/dyemansion-dm60-datasheet-deepdye-coloring"
          class="btn btn-lg btn-rounded btn-outline-primary my-3" title="Download the Datasheet">Download Datasheet <i
            class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-6">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/lfoyFGcOn6Q" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">Dyemansion: The DM60 | leading coloring solution for industrial AM</div>
      </div>
    </div>
  </div>
</section>

<section class="pt-0">
  <div class="custom-nav-pills">
    <ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
      role="tablist">
      <li class="nav-item">
        <a class="nav-link active in" data-toggle="tab" href="#standardcolors" role="tab">Standard Colors</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#coloroptions" role="tab">Color Options & Raw Material</a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade show active in  border-0 p-0" id="standardcolors" role="tabpanel">
        <div class="row d-flex">
          <div class="col-xl-6 col-lg-7 col-md-6 p-0 overflow-hidden d-flex align-items-center justify-content-center">
            <img
          src="{{asset('images/pages/dyemansion/dsc00261-scaled-e1590135263762-1024x522-1.jpg')}}">
          </div>
          <div class="col-xl-6 col-lg-5 col-md-6 p-5 d-flex flex-column justify-content-center align-items-start">
            <small>SLS & MJF</small>
            <div class="h3">DYEMANSION STANDARD COLORS</div>
            <p>FOR WHITE RAW MATERIAL</p>
            <ul class="p-0 list list-group">
              <li class="list-group-item"><i class="fa fa-check mr-3" aria-hidden="true"></i>17 standard colors</li>
              <li class="list-group-item"><i class="fa fa-check mr-3" aria-hidden="true"></i>Immediately available</li>
              <li class="list-group-item"><i class="fa fa-check mr-3" aria-hidden="true"></i>Developed on EOS PA2200
                with PSS finish, other materials may vary</li>
              <li class="list-group-item"><i class="fa fa-check mr-3" aria-hidden="true"></i>Frequently used in the
                On-Demand Finishing</li>
            </ul>
          </div>
          <div class="col-12 border border-left-0 border-right-0">
            <div class="d-flex flex-wrap p-3">
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>BLACK</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #1F1F21;stroke: #1F1F21;stroke-miterlimit: 10;stroke-width: 0.75px" />
                  <text transform="translate(22.31 73.74)"
                    style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">01</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>GREY</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #9C9E9D;stroke: #9C9E9D;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(21 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">02</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>VIOLET</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #3A3397;stroke: #3A3397;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(20 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">03</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center">
                <small>BLUE</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #5078AC;stroke: #5078AC;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(19 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">04</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>YELLOW-GREEN</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #9BC871;stroke: #9BC871;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(21 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">05</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>RED</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #DC2C39;stroke: #DC2C39;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(21 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">06</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>PINK</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #EA6180;stroke: #EA6180;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(19 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">07</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>YELLOW</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #E8D83A;stroke: #E8D83A;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(19 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">08</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>WHITE</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #fff;stroke: #000;stroke-miterlimit: 10;stroke-width: 0.75px" />
                  <text transform="translate(19 73.74)"
                    style="fill:#00;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">09</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>GOLDEN YELLOW</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #EBB035;stroke: #EBB035;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(23 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">10</text>
                </svg>
              </div>

              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>ORANGE</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #F15E2A;stroke: #F15E2A;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(27 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">11</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>BORDEAUX</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #A95E70;stroke: #A95E70;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(25 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">12</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>SKY-BLUE</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #4B89C5;stroke: #4B89C5;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(24 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">13</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>NAVY</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #202D40;stroke: #202D40;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(22.31 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">14</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>GRASS-GREEN</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #639C71;stroke: #639C71;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(23 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">15</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>ANTHRACITE</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #6C7276;stroke: #6C7276;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(22.31 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">16</text>
                </svg>
              </div>
              <div class="p-2 d-flex flex-column text-center align-items-center">
                <small>BROWN</small>
                <svg xmlns="http://www.w3.org/2000/svg" width="90.75" height="121.79" viewBox="0 0 90.75 121.79">
                  <polygon points="45.38 0.38 0.38 0.38 0.38 100.38 45.38 121.38 90.38 100.38 90.38 0.38 45.38 0.38"
                    style="fill: #563235;stroke: #563235;stroke-miterlimit: 10;stroke-width: 0.75px" />
                    <text transform="translate(24 73.74)"
                      style="fill:#fff;font-size: 43;font-family: Montserrat-SemiBold, Montserrat;font-weight: 600;">17</text>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade  border-0" id="coloroptions" role="tabpanel">
        <div class=" container row d-flex justify-content-center align-items-start">
          <div class="col-12 pt-5">
            <div class="h3 pb-3">COLOR OPTIONS & RAW MATERIAL</div>
           <table width="575" class="table table-bordered text-center align-middle color-options">
            <tbody>
              <tr>
                <td></td>
                <td><span style="color: #009ee0;">STANDARD</span> COLORS</td>
                <td>COLOR <span style="color: #009ee0;">SYSTEMS</span></td>
                <td><span style="color: #009ee0;">AUTOMOTIVE</span> COLORS<sup>X</sup></td>
                <td><span style="color: #009ee0;">NEON</span> COLORS<sup>X</sup></td>
                <td>COLORS OF <span style="color: #009ee0;">CHOICE</span></td>
              </tr>
              <tr>
                <td><span style="color: #009ee0;"><img
                        src="{{asset('images/pages/dyemansion/raw_weiss_v4-150x150.jpg')}}" alt="" width="150"
                        height="150"></span>
                  <p></p>
                  <p><span style="color: #009ee0;">WHITE</span> RAW MATERIAL</p>
                </td>
                <td><i class="fa fa-check fa-3x text-primary" aria-hidden="true"></i></td>
                <td><i class="fa fa-check fa-3x text-primary" aria-hidden="true"></i></td>
                <td><i class="fa fa-check fa-3x text-primary" aria-hidden="true"></i></td>
                <td><i class="fa fa-check fa-3x text-primary" aria-hidden="true"></i></td>
                <td><i class="fa fa-check fa-3x text-muted" aria-hidden="true"></i>
                </td>
              </tr>
              <tr>
                <td><span style="color: #009ee0;"><img
                        src="{{asset('images/pages/dyemansion/raw-150x150.jpg')}}" alt="" width="150" height="150"></span>
                  <p></p>
                  <p><span style="color: #009ee0;">GREY</span> RAW MATERIAL</p>
                </td>
                <td><i class="fa fa-check fa-3x text-primary" aria-hidden="true"></i></td>
                <td><i class="fa fa-check fa-3x text-muted" aria-hidden="true"></i>
                </td>
                <td><i class="fa fa-check fa-3x text-primary" aria-hidden="true"></i></td>
                <td></td>
                <td><i class="fa fa-check fa-3x text-muted" aria-hidden="true"></i></td>
              </tr>
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-center w-100">
            <p><i class="fa fa-check text-primary mr-2" aria-hidden="true"></i> Ready to use<br>
              <i class="fa fa-check text-muted mr-2" aria-hidden="true"></i> Further development necessary</p>

            <div class="clearboth"></div>
          </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade  border-0" id="simulation" role="tabpanel">
        <div class="row d-flex justify-content-center align-items-start">
          <div class="col-lg-4 col-md-6">
            <a href="https://www.youtube.com/watch?v=RqtVzc5IO-Y"
              class="mp-popup-video mp-single mp-popup-video-button"><img
                src="{{asset('images/pages/solidworks/3dexperience/Cloud_Simulation_1035x652.png')}}"
                class="w-100 mt-5 mb-0"></a>
          </div>
          <div class="col-xl-6 col-lg-5 col-md-6 p-5">
            <small>3DEXPERIENCE | Simulation</small>
            <div class="h3">Validate your products faster</div>
            <p>Perform sophisticated simulation workflows from any device any time anywhere.</p>
            <ul class="p-0">
              <li>Smart and intuitive applications to remove guesswork for optimized product design</li>
              <li>An environment integrated or interoperable with CAD, CAE and PLM tools</li>
              <li>High levels of productivity by allowing designers and engineers to focus on engineering problems
                rather than manual non-value-add tasks</li>
              <li>Streamline your engineering workflows to assess product performance and quality faster than ever</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-pane fade  border-0" id="collaboration" role="tabpanel">
        <div class="row d-flex justify-content-center align-items-start">
          <div class="col-lg-4 col-md-6">
            <a href="https://www.youtube.com/watch?v=4DzSgS4NsJY"
              class="mp-popup-video mp-single mp-popup-video-button"><img
                src="{{asset('images/pages/solidworks/3dexperience/Cloud_Collaboration_1035x652.png')}}"
                class="w-100 mt-5 mb-0"></a>
          </div>
          <div class="col-xl-6 col-lg-5 col-md-6 p-5">
            <small>3DEXPERIENCE | Collaboration</small>
            <div class="h3">Better Collaboration for Innovation</div>
            <p>Easily access product data and lifecycle management, change management and team-based planning
              capabilities and enable real-time sharing of design data.</p>
            <ul class="p-0">
              <li>Share ideas and collaborate in a secure community</li>
              <li>Manage designs and documents from within your CAD environment</li>
              <li>Make modifications under the governance of a change process</li>
              <li>Visualize, explore and edit multi-CAD product structures within a web-browser</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <h3>DISCOVER THE DM60 ALL AROUND</h3>
      <div class="section-title-divider"></div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-7">
        <div class="spritespin w-100"></div>
      </div>
      <div class="col-12 col-lg-5">
        <h3 class="h1 mb-5 main-title">SAMPLE COLORING RESULTS</h3>
        <div id="gallery2" style="display:none; width:100%; max-width:600px">
          <img src="{{asset('images/pages/dyemansion/automotive-interior-cover-vfs_2.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/automotive-interior-cover-vfs_2.jpg')}}">
          <img src="{{asset('images/pages/dyemansion/dsc03232.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/dsc03232.jpg')}}">
          <img src="{{asset('images/pages/dyemansion/tpu-gottinger-vfs_2.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/tpu-gottinger-vfs_2.jpg')}}">
          <img src="{{asset('images/pages/dyemansion/automotive_bild1.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/automotive_bild1.jpg')}}">
          <img src="{{asset('images/pages/dyemansion/automotive_bild2.jpg')}}"
            data-image="{{asset('images/pages/dyemansion/automotive_bild2.jpg')}}">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary">
  <div class="container">
    <div class="section-title center-block mx-auto" style="max-width:700px">
      <h4>How DeepDye Coloring Works</h4>
      <div class="section-title-divider"></div>
    </div>
    <div class="row">
      {{-- <div class="col-lg-6 my-3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/lfoyFGcOn6Q" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">MORE ABOUT FEATURES & COST PER PART</div>
      </div> --}}
      <div class="col-12 my-3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/lhjBtDPX3iY" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">How DeepDye Coloring Works</div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title center-block mx-auto" style="max-width:700px">
      <h3>MANUAL POT DYEING VS. INDUSTRIAL DEEPDYE COLORING</h3>
      <div class="section-title-divider"></div>
    </div>
    <div class="row">
      <div class="col-md-6 ">
        <img class="img-fluid" alt="Pot Dyeing" title="Pot Dyeing" width="1559" height="897"
          src="{{asset('images/pages/dyemansion/lp_images_23-1.jpg')}}">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>Hardly controllable, manual
            process</li>
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>No certified hardware</li>
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>Strongly limited color
            options</li>
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>Colors fade quickly under UV
            light or heat</li>
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>No official certifications
          </li>
        </ul>
      </div>
      <div class="col-md-6 ">
        <img class="img-fluid" alt="Pot Dyeing" title="Pot Dyeing" width="1559" height="897"
          src="{{asset('images/pages/dyemansion/lp_images_24-1.jpg')}}">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>Industrial, traceable &
            automated process</li>
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>DM60 & Add-on solutions as
            certified hardware</li>
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>Largest color variety on the
            market</li>
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>Special solutions for
            industries, e.g. Automotive or Neon X Colors</li>
          <li class="list-group-item d-flex"><i class="fas fa-check mr-3 text-primary"></i>Certified & proven colors for
            high-end manufacturing</li>
        </ul>
      </div>
    </div>

    <div class="d-flex mt-5">
      <div class="pr-5 d-none d-md-block">
        <img class="img-fluid" alt="Pot Dyeing" title="Pot Dyeing" width="1559" height="897"
          src="{{asset('images/pages/dyemansion/comparison.png')}}">
      </div>
      <div>
        <h3 class="h1 mb-5 mt-0 main-title">COLORS APPLIED WITH POT DYEING FADE QUICKLY</h3>
        <p class="lead">Almost every 3D printed end-use product is exposed to UV light and heat. This is where the
          strengths and
          weaknesses of
          the dyeing process becomes apparent. In the test, the conventional pot dyeing with textile dye shows a much
          higher color
          fading than parts dyed with DyeMansion DM Black 01. To gain a deeper understanding, download the full
          whitepaper with
          all test results on light and heat resistance, scratch resistance and color fastness.</p>
      </div>
    </div>
  </div>
</section>
<section class="section-secondary">
  <div class="container">
    <div class="section-title center-block mx-auto" style="max-width:700px">
      <h4>WEBINAR: 7 BENEFITS OF DEEPDYE COLORING COMPARED TO POT DYEING</h4>
      <div class="section-title-divider"></div>
    </div>
    <div class="row">
      <div class="col-lg-12 my-3">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/XCX8gPqe93A" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">Webinar | 7 Benefits of DDC compared to Pot Dyeing</div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="pb-3">
      <h3 class="h1 mx-lg-0 mb-3 mx-auto main-title">DYEMANSION PRINT-TO-PRODUCT WORKFLOW</h3>
      <p class="lead">Our technology starts where the industrial 3D printer stops – from 3D printed raw part to
        high-value finished product in three hours. The combined three-step DyeMansion Print-to-Product workflow enables
        scaling from prototyping or
        small series to high-volume manufacturing and thus closes the manufacturing gap.</p>
    </div>
    <div class="row d-flex align-items-start">
      <div class="col-lg-3 col-12 d-flex flex-column py-5">
        <div class="col-12 h5 align-middle order-1 order-lg-0">
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3">
            <div class="rounded-circle badge-primary text-center lead d-inline-block"
              style="min-width:2rem; height:2rem; line-height:2rem;">1</div>
            <span class="align-middle ml-3">CLEANING</span>
          </div>
        </div>
        <img class="col-12 w-100 order-0 mt-3 0 p-0"
          src="{{asset('images/pages/dyemansion/dyemansion_powershot_c_weiss_rgb.jpg')}}" />
        <h5 class="text-primary text-center order-1 order-lg-0">POWERSHOT C</h5>
        <a href="{{route('dyemansion.powershot-c')}}"
          class="btn btn-rounded btn-outline-primary mt-4 mx-auto order-1 order-lg-0" title="CLEANING">Learn More <i
            class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-3 col-12 d-flex flex-column py-5">
        <div class="col-12 h5 align-middle order-1 order-lg-0">
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3">
            <div class="rounded-circle badge-primary text-center lead d-inline-block"
              style="min-width:2rem; height:2rem; line-height:2rem;">2</div>
            <span class="align-middle ml-3">POLYSHOT SURFACING | PSS</span>
          </div>
        </div>
        <img class="col-12 w-100 order-0 p-0"
          src="{{asset('images/pages/dyemansion/dyemansion_powershot_s_weiss.jpg')}}" />
        <h5 class="text-primary text-center order-1 order-lg-0">POWERSHOT S</h5>
        <a href="{{route('dyemansion.powershot-s')}}"
          class="btn btn-rounded btn-outline-primary mt-4 mx-auto order-1 order-lg-0"
          title="POLYSHOT SURFACING | PSS">Learn More <i class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-3 col-12 d-flex flex-column py-5">
        <div class="col-12 h5 align-middle order-1 order-lg-0">
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3">
            <div class="rounded-circle badge-primary text-center lead d-inline-block"
              style="min-width:2rem; height:2rem; line-height:2rem;">2</div>
            <span class="align-middle ml-3">VAPORFUSE SURFACING | VFS</span>
          </div>
        </div>
        <img class="col-12 w-100 order-0 p-0"
          src="{{asset('images/pages/dyemansion/dyemansion_powerfuse_s_automatic_weiss_rgb.jpg')}}" />
        <h5 class="text-primary text-center order-1 order-lg-0">POWERFUSE S</h5>
        <a href="{{route('dyemansion.powerfuse-s')}}"
          class="btn btn-rounded btn-outline-primary mt-4 mx-auto order-1 order-lg-0"
          title="VAPORFUSE SURFACING | VFS">Learn More <i class="ml-3 fas fa-caret-right"></i></a>
      </div>
      <div class="col-lg-3 col-12 d-flex flex-column py-5">
        <div class="col-12 h5 align-middle order-1 order-lg-0">
          <div class="d-flex justify-content-center justify-content-lg-start align-items-center mb-3">
            <div class="rounded-circle badge-primary text-center lead d-inline-block"
              style="min-width:2rem; height:2rem; line-height:2rem;">3</div>
            <span class="align-middle ml-3">DEEPDYE COLORING | DDC</span>
          </div>
        </div>
        <img class="col-12 w-100 order-0 p-0"
          src="{{asset('images/pages/dyemansion/dyemansion_dm60_mitturm_weiss_rgb.jpg')}}" />
        <h5 class="text-primary text-center order-1 order-lg-0">DM60</h5>
        <a href="{{route('dyemansion.dyemansion-dm60')}}"
          class="btn btn-rounded btn-outline-primary mt-4 mx-auto order-1 order-lg-0"
          title="DEEPDYE COLORING | DDC">Learn More <i class="ml-3 fas fa-caret-right"></i></a>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="pb-3">
      <h3 class="h1 mx-lg-0 mb-3 mx-auto main-title">TECHNICAL DATA</h3>
    </div>
    <div id="technical" class="accordion w-100 accordion--arrows accordion--only-one my-4">
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#technical_1" aria-expanded="true"
              aria-controls="technical_1">
              Performance
            </button>
          </h5>
        </div>
        <div id="technical_1" class="collapse show" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">Cycle time</td>
                <td style="text-align: left;">150 minutes</td>
              </tr>
              <tr>
                <td style="text-align: left;">Capacity per run</td>
                <td style="text-align: left;">Mid sized build job (e.g. EOS P396 or HP Jet Fusion 4200/5200)</td>
              </tr>
              <tr>
                <td style="text-align: left;">Process chamber volume</td>
                <td style="text-align: left;">80l <span style="color: #999999;">| 21.1gal </span></td>
              </tr>
              <tr>
                <td style="text-align: left;">Operating temperature</td>
                <td style="text-align: left;">Material dependent (up to 115°C <span style="color: #999999;">|239°F
                  </span>)</td>
              </tr>
              <tr>
                <td style="text-align: left;">Penetration depth of dye</td>
                <td style="text-align: left;">Material dependent (approx. 0.2mm on EOS PA 2200)</td>
              </tr>
              <tr>
                <td style="text-align: left;">Maximum part size (Ø x H)</td>
                <td style="text-align: left;">390mm x 360mm <span style="color: #999999;">| 15.3inch x 14.2inch </span>
                </td>
              </tr>
              <tr>
                <td style="text-align: left;">Color cartridge options</td>
                <td style="text-align: left;">S, M, L, XL, DM Black L-R</td>
              </tr>
              <tr>
                <td style="text-align: left;">Color options</td>
                <td style="text-align: left;">Unlimited</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_2"
              aria-expanded="false" aria-controls="technical_2">
              Dimensions
            </button>
          </h5>
        </div>
        <div id="technical_2" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">System (L x W x H)</td>
                <td style="text-align: left;">950mm x 600mm x 945mm <span style="color: #999999;">| 37.4inch x 23.7inch
                    x
                    37.0inch<br>
                  </span></td>
              </tr>
              <tr>
                <td style="text-align: left;">Recommended space requirement for operations (L x W x H)</td>
                <td style="text-align: left;">1850mm x 1800mm x 1700mm <span style="color: #999999;">| 72.8inch x
                    70.9inch x
                    67.0inch<br>
                  </span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_3"
              aria-expanded="false" aria-controls="technical_3">
              Weight
            </button>
          </h5>
        </div>
        <div id="technical_3" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">System</td>
                <td style="text-align: left;">330 kg <span style="color: #999999;">| 662 lb</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_4"
              aria-expanded="false" aria-controls="technical_4">
              Power
            </button>
          </h5>
        </div>
        <div id="technical_4" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">Heating power</td>
                <td style="text-align: left;">6kW</td>
              </tr>
              <tr>
                <td style="text-align: left;">Requirements</td>
                <td style="text-align: left;">400V, 50Hz, 16A or 208V, 60Hz, 20A</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_5"
              aria-expanded="false" aria-controls="technical_5">
              Compressed Air
            </button>
          </h5>
        </div>
        <div id="technical_5" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">Consumption</td>
                <td style="text-align: left;">&lt;1.5 m<sup>3</sup> per run, dry and oil-free compressed air</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_6"
              aria-expanded="false" aria-controls="technical_6">
              Water
            </button>
          </h5>
        </div>
        <div id="technical_6" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">Water input</td>
                <td style="text-align: left;">Demineralized water, conductance &lt; 20μS/cm, min. 4bar<span
                    style="color: #999999;">
                    | 58psi</span>, volume flow 500l/h.<br>
                  Fresh water volume per dyeing cycle (coloring and cleaning) max. 150l <span style="color: #999999;">|
                    39.6gal</span></td>
              </tr>
              <tr>
                <td style="text-align: left;">Waste water</td>
                <td style="text-align: left;">Coloring: max. 60l <span style="color: #999999;">| 15.9gal </span>per
                  coloring, water
                  temperature max. 95°C <span style="color: #999999;"> | 203°F</span><br>
                  Cleaning: max. 90l <span style="color: #999999;">| 23.8gal </span> per cleaning, water temperature
                  max. 45°C <span style="color: #999999;"> | 113°F </span><br>
                  Waste water has to be treated in compliance with local regulations</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#technical_7"
              aria-expanded="false" aria-controls="technical_7">
              Certification
            </button>
          </h5>
        </div>
        <div id="technical_7" class="collapse" data-parent="#technical">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td style="text-align: left;">CE</td>
                <td style="text-align: left;">2006/42/EG<br />2014/68/EU</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-styles')
<link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/npm/cocoen@2.0.5/dist/css/cocoen.min.css'>
<link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.css')}}'
  type='text/css' />
<link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/css/unite-gallery.css')}}' type='text/css' />
<style>
.color-options td {
  vertical-align: middle;
}

</style>
@endpush

@push('after-scripts')
<script src='https://cdn.jsdelivr.net/npm/cocoen@2.0.5/dist/js/cocoen.min.js'></script>
<script src='https://unpkg.com/spritespin@x.x.x/release/spritespin.js' type='text/javascript'></script>
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/js/unitegallery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.js')}}'>
</script>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    new Cocoen(document.querySelector('.cocoen'));

    document.querySelectorAll('.cocoen').forEach(function(element){
      new Cocoen(element);
    });
  })

  $(function()
  {
    var gallery = jQuery("#gallery2").unitegallery({
      theme_enable_text_panel: false,
      carousel_autoplay: true,
      gallery_width: "100%",
      });


    $('.spritespin').spritespin({
      source: SpriteSpin.sourceArray('https://dyemansion.com/wp-content/uploads/spin360show/TurntableDM60_update/{frame}.png', {
      frame: [1,34],
      digits: 4
      }),
      width: 500,
      height: 500,
      sense: 1,
      frame: 0,
      frames: 34,
      responsive:true,
      loop:true,
      frameTime:'200',
      animate: true,
      orientation: 'horizontal',
      plugins: [
        'progress',
        '360',
        'drag'
      ]
      });
    })
</script>
@endpush
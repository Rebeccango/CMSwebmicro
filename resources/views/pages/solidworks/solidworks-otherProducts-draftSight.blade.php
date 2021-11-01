@extends('layouts.layout')
@section('title')
DraftSight® 2D CAD Drafting and 3D Design Software | DraftSight
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-otherProducts-draftSight')}}" />
@stop
@section('description')Discover DraftSight®: professional-grade CAD software that lets you create, edit, view and markup
any kind of 2D and 3D DWG file with greater ease, speed, and efficiency. @stop
@section('keywords')CAD Software, 2d drawing, 2D drafting, AutoCAD LT, 2D, 3D, BricsCAD, collaborate, cad drawings,
solidedge, autodesk, autocad, nanoCAD, Ares, DWG file support, 3D print, cnc machining, laser cutting @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('/storage/images/SolidWorks/draftsight-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>DraftSight® 2D CAD Drafting<br /> and 3D Design Software</h1>
          <div class="section-title-divider"></div>
        </div>
        <div class="wow fadeIn">
          <p class="parallax-section__description">World-Class 2D Drafting – Without the Hefty Price Tag of AutoCAD.</p>
        </div>
        <div class="d-flex justify-content-center align-items-center flex-wrap w-100 my-4">
          <a class="btn btn-rounded wow fadeInUp btn-success btn-lg shadow" style="min-width:240px"
            href="#buyDraftSight">BUY NOW</a>
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
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
        <h2 class="h3 mb-3 mt-0">Welcome to Design Freedom</h2>
        <p>Draftsight 2019 is a feature-rich 2D and
          3D CAD solution for architects, engineers and construction service providers, as well as professional CAD
          users, designers, educators and hobbyists.</p>
        <h2 class="h3 mb-3 mt-5">What’s New in DraftSight 2019?</h2>
        <p>DraftSight 2019 introduces a major software upgrade that’s proven and powerful, and includes the most
          requested capabilities and functionality from users around the world. DraftSight allows you to create, edit,
          view and mark up any kind of 2D or 3D DWG file easier, faster and more efficiently than ever. Its familiar
          user interface facilitates a quick transition from your current CAD application.</p>
        <h2 class="h3 mb-3 mt-5">More Options, Choices & Tools to Suite Your Design Needs</h2>
        <p>Experience real design freedom with DraftSight – letting you work the way you want to work, with the ability
          to effortlessly go from 2D drafting to 3D modeling and back again in order to optimize and maximize designs.
          Seamlessly integrate with your other Dassault Systèmes and SOLIDWORKS® solutions, including PDM, to easily
          manage your DWG file designs from initial idea to final outcome.</p>
        {{-- <p><strong>DraftSight End of the Year Promo with CAD Micro. Contact us now to learn more about the special pricing on
          DraftSight Enterprise.</strong></p>
        <p class="text-muted">*Offer Valid Until December 31, 2019</p>
        <a class="btn btn-md btn-primary btn-rounded"
              href="https://www.cadmicro.com/landing/draftsight-enterprise-end-of-year-promotion-with-cad-micro" target="_blank">DraftSight Promo</a> --}}
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-0">
        <div class="px-3">
          <h3 class="h3 mb-3">What happens to installations of the free version of DraftSight?</h3>
          <p>If you’re using the free version of DraftSight, you may continue to use DraftSight 2018 or previous
            versions
            until December 31, 2019. You may reactivate your free version once more after the launch of DraftSight 2019.
            All free versions of DraftSight will cease to run after December 31, 2019.
          </p>
          <p>
            <strong>PLEASE NOTE:</strong> If you decide to
            download and install the free 30-day trial of DraftSight 2019 Professional, or if you purchase any version
            of DraftSight 2019, you will not be able to re-download any previous free version of DraftSight (2018 or
            earlier).
          </p>
          <div>
            <blockquote class="blockquote mt-4">Are you using the free version of DraftSight? Learn More</blockquote>
            <a class="btn btn-md btn-primary btn-rounded"
              href="{{ asset('storage/pdfs/draftsight/draftsight_2019_faq.pdf') }}" target="_blank"><i
                class="fas fa-file-download mr-3"></i>Download the FAQ</a>
          </div>
          <img src="{{asset('storage/images/SolidWorks/DraftSight.png')}}" style="width:100%;" class="my-3"
            alt="Draft Sight Image">
        </div>
      </div>
    </div>
  </div>
</section>

  <div class="anchor" id="buyDraftSight"></div>
<section class="mb-5 section-secondary">
  <div class="container-fluid">
    <div class="section-title center-block mx-auto mb-3">
      <h1>Buy Draftsight Now</h1>
      <div class="section-title-divider"></div>
    </div>
    <div class="py-5">
      <div class="row d-flex align-items-stretch justify-content-between">
        <div class="col-lg-4 col-sm-6 col-sm-6 col-12 d-flex align-items-stretch text-center my-4">
          <div class="card card-body p-3 shadow-sm">
            <h4 class="card-title p-4">DraftSight Professional</h4>
            <div class="h-100 card-text">
              <p>The advanced 2D CAD drafting solution with powerful, time-saving functionalities and an
                API to help bring your designs to life quickly and easily.</p>
              <p>Ideal for companies, individuals, and designers.</p>
            </div>
            {{-- <div><strong>$299.11 / yr</strong></div> --}}
            <a class="btn btn-md btn-rounded btn-primary m-3 px-3" target="_blank"
              href="https://prf.hn/click/camref:1100liXPz/creativeref:1101l61551">Buy Now</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-sm-6 col-12 d-flex align-items-stretch text-center my-4">
          <div class="card card-body p-3 shadow-sm">
            <h4 class="card-title p-4">DraftSight Premium (includes 3D)</h4>
            <div class="h-100 card-text">
              <p>The robust 2D drafting and 3D design experience with full 3D capabilities and
                constraints features to help meet all of your drafting, modeling, prototyping, manufacturing, laser
                cutting and 3D printing needs.</p>
              <p>Created for individuals, designers, companies, manufacturers and makers.</p>
            </div>
            {{-- <div><strong>$750.05 / yr</strong></div> --}}
            <a class="btn btn-md btn-rounded btn-primary m-3 px-3" target="_blank"
              href="https://prf.hn/click/camref:1100liXPz/creativeref:1011l61493">Buy Now</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-sm-6 col-12 d-flex align-items-stretch text-center my-4">
          <div class="card card-body p-3 shadow-sm">
            <h4 class="card-title p-4">DraftSight Enterprise and Enterprise Plus</h4>
            <div class="h-100 card-text">
              <p>The comprehensive 2D drafting and 3D design solution to meet any drafting, modeling,
                prototyping, manufacturing, laser cutting and 3D printing requirement. Includes full technical support,
                deployment and network licensing to enable concurrent usage.</p>
              <p>Designed for large organizations with many users or multiple sites.</p>
            </div>
            <div><strong>Ask for Pricing</strong></div>
            <a class="btn btn-md btn-rounded btn-success m-3 px-3" data-toggle="modal"
              data-target="#draftSightEnterprise" href="#buyDraftSight">Request
              Quote</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <h1>DraftSight: A Better 2D Drafting and 3D Design Experience</h1>
      <div class="section-title-divider"></div>
    </div>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe width="100%" height="720" class="embed-responsive-item" src="https://www.youtube.com/embed/MyO9wfU86eI"
        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    </div>
  </div>
</section>

<section class="section-secondary">
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#documents" role="tab">Documents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Videos</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade in show active" id="matrix" role="tabpanel">
          @include('pages.matrix.draftsight-matrix')
        </div>
        <div class="tab-pane fade" id="documents" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/solidworks/2020/Brochure - Draftsight.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2020/Brochure - Draftsight.png')}}" style="width:100%;"
                      alt="DraftSight Brochure">
                  </div>
                  <figcaption>DraftSight Brochure</figcaption>
                </figure>
              </a>
            </div>

            {{-- <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/draftsight/whats-new-in-draftSight_2019_v1.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/draftsight/whats-new-in-draftSight_2019_v1.png')}}"
                      style="width:100%;" alt="What's New in Draftsight 2019">
                  </div>
                  <figcaption>What's New in Draftsight 2019</figcaption>
                </figure>
              </a>
            </div> --}}
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/draftsight/draftsight-california-wire-products-case-study_0.pdf')}}"
                class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/draftsight/draftsight-california-wire-products-case-study_0.png')}}"
                      style="width:100%;" alt="Customer Story: Californa Wire Products Corp.">
                  </div>
                  <figcaption>Customer Story: Californa Wire Products Corp.</figcaption>
                </figure>
              </a>
            </div>
            {{-- <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="{{asset('storage/pdfs/draftsight/draftsight_2019_faq.pdf')}}" class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/draftsight/draftsight_2019_faq.png')}}" style="width:100%;"
                      alt="Draftsight FAQ">
                  </div>
                  <figcaption>Draftsight FAQ</figcaption>
                </figure>
              </a>
            </div> --}}
          </div>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="1207" height="679" src="https://www.youtube.com/embed/sWULsasMsIo" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption">DraftSight: Using Formulas in Tables</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="1207" height="679" src="https://www.youtube.com/embed/wZ5EpwpF-Zw" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
              <div class="videoCaption">Quick Look: Image Trace in DraftSight</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-scripts')
<div class="modal fade" tabindex="-1" role="dialog" id="draftSightEnterprise">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:1000px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Choose between 2 options</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row d-flex justify-content-between align-items-stretch">
          <div class="col-12 col-md-6 d-flex flex-column justify-content-between align-items-stretch px-5  pt-4">
            <p class="h5">DraftSight <strong>ENTERPRISE</strong> includes:</p>
            <ul class="list-unstyled h-100 lead">
              <li><i class="fas fa-check"></i> 2D Drafting and Drawings</li>
              <li><i class="fas fa-check"></i> All Professional Features including API and productivity</li>
              <li><i class="fas fa-check"></i> Network License </li>
              <li><i class="fas fa-check"></i> Support</li>
              <li><i class="fas fa-check"></i> Deployment Wizard</li>
            </ul>
            <div class="m-auto text-center">
              <a class="btn btn-md btn-rounded btn-success m-3 px-3" data-dismiss="modal" aria-label="Close"
                data-toggle="modal" data-target="#draftSightEnterpriseQuote" href="#buyDraftSight">Request
                Quote</a>
            </div>
          </div>
          <div class="col-12 col-md-6 border-1 flex-column border-left d-flex justify-content-between
            align-items-stretch px-5 pt-4">
            <p class="h5">DraftSight <strong>ENTERPRISE PLUS</strong> includes:</p>
            <ul class="list-unstyled h-100 lead">
              <li><i class="fas fa-check"></i> 2D Drafting and Drawings</li>
              <li><i class="fas fa-check"></i> All Professional Features including API and productivity</li>
              <li><i class="fas fa-check"></i> Network License </li>
              <li><i class="fas fa-check"></i> Support</li>
              <li><i class="fas fa-check"></i> Deployment Wizard</li>
              <li><i class="fas fa-check"></i> <strong>2D Constraints</strong></li>
              <li><i class="fas fa-check"></i> <strong>3D Modeling</strong></li>
            </ul>
            <div class="m-auto text-center">
              <a class="btn btn-md btn-rounded btn-success m-3 px-3" data-dismiss="modal" aria-label="Close"
                data-toggle="modal" data-target="#draftSightEnterprisePlusQuote" href="#buyDraftSight">Request
                Quote</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="draftSightEnterprisePlusQuote">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Request Quote for Draftsight <strong>Enterprise PLUS</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="1003ed9a-230a-ea11-a811-000d3a33f7ca"></div>
        <div id="dkTApbramc44Q3hl2rFivhrPnoajDzweN-qVIGKQgwuE"></div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="draftSightEnterpriseQuote">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:700px">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Request Quote for Draftsight <strong>Enterprise</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="e3146c62-230a-ea11-a811-000d3a33f7ca"></div>
        <div id="dHNIbQelwzBr19qk3jA8_h5w_KPbMS3QULjXklYqfLY4"></div>
      </div>
    </div>
  </div>
</div>
@endpush
@extends('layouts.layout')
@section('title')
Contact Us
@stop
@push("after-styles")
<style>
  #loaderSpinner {
    border: 16px solid #f3f3f3;
    border-top: 16px solid #3498db;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
  }

  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  .invisible,
  .invisible * {
    visibility: hidden !important;
    height: 0 !important;
    margin: 0 !important;
    padding: 0 !important;
    line-height: 0 !important;
    font-size: 0 !important;
    border: 0 !important;
  }
</style>
@endpush
@section('body')
<section>
  <div class="container-fluid">
    <div class="content">
      <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">
          <div id="loaderSpinner"></div>
          <div data-form-block-id="23a5b18d-53a3-e911-a980-000d3a37043b"></div>
          <div id="denJ-6GaG60USqiXGIm5D0eUsod-Z_D0aPVm5H9P7Jxk"></div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

          <div itemscope itemtype="https://schema.org/Organization">
            <div class="h4">
              Contact Support:
            </div>
            <p><strong>E-mail:</strong> <a href="mailto:support@cadmicro.com"><span
                  itemprop="email">support@cadmicro.com</span></a>
            </p>
            <hr />
            <div>
              <h1 itemprop="name" class="main-title"
                style="font-size:18px; display:none;">CAD MicroSolutions Inc.</h1>
              <div class="h4">HEAD OFFICE (GTA)</div>
              <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <span itemprop="streetAddress">30 International Blvd, Unit #1</span>
                <span itemprop="addressLocality">Etobicoke, ON</span>
                <span itemprop="postalCode">M9W 1A2</span>
              </span><br /><br />
              <p><strong>Open:</strong> <span itemprop="openingHours" content="Mo,Tu,We,Th 09:00-12:00">Monday-Friday
                  9am-5pm</span></p>
              <p><strong>Toll-Free:</strong> <span itemprop="telephone">1 (888) 401-5885</span></p>
              <p><strong>Phone:</strong> <span itemprop="telephone">(416) 213-0533</span></p>
              {{-- <p><strong>Fax:</strong> <span itemprop="fax">(416) 213-0538</span></p> --}}
              <iframe width="100%" height="300px" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?q=CadMicro%20Solutions%2C%2065%20International%20Blvd%20%23103%2C%20Etobicoke%2C%20ON%20M9W%205P3&key={{config('app.gmaps_key')}}"
                allowfullscreen></iframe>
            </div>
            <hr />
            <div>
              <h1 itemprop="name" class="main-title"
                style="font-size:18px; display:none;">CAD MicroSolutions Inc.</h1>
              <div class="h4">TRI-CITIES OFFICE</div>
              <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <span itemprop="streetAddress">225 Pinebush Rd, Suite 102</span>
                <span itemprop="addressLocality">Cambridge, ON</span>
                <span itemprop="postalCode">N1T 1B9</span>
              </span><br /><br />
              <p><strong>Open:</strong> <span itemprop="openingHours" content="Mo,Tu,We,Th 09:00-12:00">Monday-Friday
                  9am-5pm</span></p>
              <p><strong>Phone:</strong> <span itemprop="telephone">(519) 642-8222</span></p>
              <hr />
              <p><strong>E-mail:</strong> <a href="mailto:info@cadmicro.com"><span
                    itemprop="email">info@cadmicro.com</span></a></p>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2898.402047501557!2d-80.3088616841227!3d43.41042597913037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b885b08062fbb%3A0xbcedc9f564dc93!2s225+Pinebush+Rd+%23102%2C+Cambridge%2C+ON+N1T+1B9!5e0!3m2!1sen!2sca!4v1544032253114"
                width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <hr />
            <div>
              <h1 itemprop="name" class="main-title"
                style="font-size:18px; display:none;">CAD MicroSolutions Inc.</h1>
              <div class="h4">MONTREAL OFFICE</div>
              <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <span itemprop="streetAddress">1285 rue Hodge, Suite 201-D</span>
                <span itemprop="addressLocality">Montreal QC</span>
                <span itemprop="postalCode">H4N 2B6</span>
              </span><br /><br />
              <p><strong>Open:</strong> <span itemprop="openingHours" content="Mo,Tu,We,Th 09:00-12:00">Monday-Friday
                  9am-5pm</span></p>
              <p><strong>Phone:</strong> <span itemprop="telephone">(438) 834-1310</span></p>
              <hr />
              <p><strong>E-mail:</strong> <a href="mailto:info@cadmicro.com"><span itemprop="email">info@cadmicro.com</span></a></p>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.0124808463024!2d-73.66937778444104!3d45.50982737910149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91837e958c379%3A0xeb88dbb6074ca142!2s1285%20Rue%20Hodge%20Suite%20201-D%2C%20Saint-Laurent%2C%20QC%20H4N%202B6!5e0!3m2!1sen!2sca!4v1619709745554!5m2!1sen!2sca"
                width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen loading="lazy"></iframe>
            </div>
            <hr />
            <div>
              <h1 itemprop="name" class="main-title"
                style="font-size:18px; display:none;">CAD MicroSolutions Inc.</h1>
              <div class="h4">ALBERTA OFFICE</div>
              <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <span itemprop="streetAddress">Emergehub, 250-3515 17 AVE SE</span>
                <span itemprop="addressLocality">Calgary, AB</span>
                <span itemprop="postalCode">T2A 0R5</span>
              </span><br /><br />
              <p><strong>Open:</strong> <span itemprop="openingHours" content="Mo,Tu,We,Th 09:00-12:00">Monday-Friday
                  9am-5pm</span></p>
              <p><strong>Phone:</strong> <span itemprop="telephone">(587) 747-4342</span></p>
              <hr />
              <p><strong>E-mail:</strong> <a href="mailto:info@cadmicro.com"><span itemprop="email">info@cadmicro.com</span></a></p>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.8464273323148!2d-113.98565518354093!3d51.037457079560674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717ae73246e413%3A0x5f490eecf5520024!2semergeHUB!5e0!3m2!1sen!2sca!4v1604331162279!5m2!1sen!2sca"
                width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <hr />
            <div>
              <h1 itemprop="name" class="main-title" style="font-size:18px; display:none;">CAD MicroSolutions Inc.</h1>
              <div class="h4">BRITISH COLUMBIA OFFICE</div>
              <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                <span itemprop="streetAddress">Network Hub, 810 Quayside Dr #205</span>
                <span itemprop="addressLocality">New Westminster, BC</span>
                <span itemprop="postalCode">V3M 6B9</span>
              </span><br /><br />
              <p><strong>Open:</strong> <span itemprop="openingHours" content="Mo,Tu,We,Th 09:00-12:00">Monday-Friday
                  9am-5pm</span></p>
              <p><strong>Phone:</strong> <span itemprop="telephone">(604) 256-6784</span></p>
              <hr />
              <p><strong>E-mail:</strong> <a href="mailto:info@cadmicro.com"><span itemprop="email">info@cadmicro.com</span></a></p>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.0286807169073!2d-122.9139200835795!3d49.20001547932225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d86fa80db725%3A0xe55554b44ce81fa8!2sThe%20Network%20Hub%20-%20New%20Westminster!5e0!3m2!1sen!2sca!4v1604331189245!5m2!1sen!2sca"
                width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
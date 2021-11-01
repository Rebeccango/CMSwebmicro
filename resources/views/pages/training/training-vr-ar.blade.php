@extends('layouts.layout')
@section('title')
  AR & VR Training Courses
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
style="min-height:450px; background-image:url({{asset('storage/banners/ar_vr_banner.png')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto wow fadeIn" data-wow-duration="0.8s"
          data-wow-delay="0.5s">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">AR & VR TRAINING</h1>
          <div class="section-title-divider"></div>
          <h2 class="h3">Instructor-Led Online And Custom Training</h2>
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
<section style="padding-bottom:60px">
  <div class="container-fluid">
    <div class="content">
      <div class="section-block">
        <p class="text-lg-center h5" style="margin:0 auto">
          VR and AR is a course intended to give Engineering and Design Review Professionals the information and training they need for enhancing, enabling, and leveraging the digital assets of Virtual and Augmented Reality.
        </p>
        <div class="s30"></div>
          <div class="section-secondary">
            <table style="text-align:center; max-width:450px; margin:0 auto;" width="100%">
              <tr>
                <td>
                    Are you interested in training?
                    <strong>Price:</strong> $500.00 <br/>
                </td>
                <td>
                  <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="quote" data-title="Get a free quote" style="margin:0">Get a Quote</button>
                </td>
              </tr>
            </table>
          </div>
        <div class="s40"></div>
        <h2 class="main-title">Course Outline</h2>
        <table class="table table-striped" style="width:100%;">
          <thead>
            <tr>
              <td width="30%">
                Leading Principles
              </td>
              <td>
                Description
              </td>
            </tr>
          </thead>
          <tr>
            <td>
              <div class="h6">
                Introduction to AR and VR technology
              </div>
            </td>
            <td>
              <p>
                History to Present. Learn about the first headset announced in 1994 up to current consumer offerings and beyond. How the VR/AR technology is driving rapid change in data, computing, and industry.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                Hype vs Reality
              </div>
            </td>
            <td>
              <p>
                While AR/VR has been teasing consumer and business world for the last two years and despite some of the optimistic claims by thought leaders, success of these new technologies is still in its infancy but set to explode.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                HMD/ Input/Tracking
              </div>
            </td>
            <td>
              <p>
                Technology of the Head mounted display. HMD are key to VR success. Review the market leader offerings and discover what is right for your business or workflow.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                Mobile
              </div>
            </td>
            <td>
              <p>
                Daydream Viewer, Cardboard, GearVR to name a few. These lightweight portable VR and AR devices are driving mass adoption. Learn about each ecosystems strengths and weaknesses.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                Stereoscopic 3D Displays
              </div>
            </td>
            <td>
              <p>
                Installed, immersive, interactive 3D visualization system that is the industry benchmark for group VR experience and review using rear projected active walls or cave.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                VisionaryRender, GeoVisionary
              </div>
            </td>
            <td>
              <p>
                Visionary Render software allows users to access and experience a real-time, interactive and immersive Virtual Reality (VR) environment created from huge 3D datasets. Geovisionary specialist software for high-resolution visualization of spatial data. GeoVisionary 3 has built upon this visualization ability to add analysis and interpretation of large and complex, multi-source datasets.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                VR Implementation
              </div>
            </td>
            <td>
              <p>
                Areas of implementation - design, academia, training, marketing, maintenance, and manufacturing. The use of VR and AR in manufacturing and other industries for which the term Industry 4.0 gets used is not fiction. It happens as we speak and is poised to accelerate as the benefits become increasingly clear, offerings, hardware and applications mature and move to the next level and manufacturers increase their digital transformation efforts on the strategic and staged path towards the realization of Industry 4.0 and the digital transformation of manufacturing.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                Case Study of Successful Rollout – Vale Mining
              </div>
            </td>
            <td>
              <p>
                Henry Galbiatti, Vale’s general manager for iron ore exploration, closed mines and manganese planning, explained: “When I experienced GeoVisionary, I could see it was exactly what we were looking for. From our offices in Belo Horizonte, we constantly have new projects in the pipeline aimed at helping Vale to increase production, retain market share and maintain ore quality, so, naturally, long-term planning is crucial if we are to successfully bring our plans to fruition. The nature of our business is such that visualization of information is vital to help us understand it, to discuss plans and to make the right decisions.”
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                eDrawings for AR and VR
              </div>
            </td>
            <td>
              <p>
                eDrawings Viewer delivers the premier 3D viewing tool for the non-CAD professionals. eDrawings Viewer enables anyone to quickly and easily view, print and review eDrawings, SOLIDWORKS and AutoCAD DWG and DXF files. For users of the eDrawings mobile solutions Augmented Reality (AR) and Virtual Reality (VR) modes are available to further enhance the rich nature of your 3D data. AR for iOS and Android devices enable you to 'virtually see' your designs scaled correctly in its real world environment. VR is available for iOS phones using Google Cardboard to easily visualize and communicate product ideas.
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <div class="h6">
                Hands on Tech Demonstration
              </div>
            </td>
            <td>
              <p>
                VR station(s) will be live to show off technology and collaborative environments where colleagues working at remote locations using different VR hardware tools can review and discuss the same model in real-time.
              </p>
            </td>
          </tr>
        </table>

        <div class="s30"></div>
          <div class="section-secondary">
            <table style="text-align:center; max-width:450px; margin:0 auto;" width="100%">
              <tr>
                <td>
                    Are you interested in training?
                    <strong>Price:</strong> $500.00 <br/>
                </td>
                <td>
                  <button class="btn btn-sm btn-white wow fadeInUp btn-dialog" id="quote" data-wow-duration="1s" data-toggle="modal" data-target="#contactModal" data-wow-delay="0.2s" data-type="quote" data-title="Get a free quote" style="margin:0">Get a Quote</button>
                </td>
              </tr>
            </table>
          </div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-scripts')
<script>
$(function(){

  $('.custom-nav-pills .nav-link').click(function(){
      var tab = $(this).attr('href');
      $('.custom-nav-pills .tab-pane').removeClass('active');
      $('.custom-nav-pills .tab-pane[id="'+tab.replace('#', '')+'"]').addClass('active in');
  });

  var active = $('.custom-nav-pills .nav-link.active').attr('href');
  if(active !== undefined){
    active = active.replace('#', '')
    $('.custom-nav-pills .tab-pane').removeClass('active');
    $('.custom-nav-pills .tab-pane[id="'+active+'"]').addClass('active in');
  }else{
    $('.custom-nav-pills .nav-link').first().click();
  }

  $('.section-left-icon-group .icon-block').matchHeight();

  var table =  $('.catalog').DataTable( {
      responsive: true,
      bPaginate: false,
        "pagingType": "full_numbers",
      "bLengthChange": false,
      "bFilter": true,
      "bInfo": false,
      "bSort": false,
       dom: 'Bfrtip',
       buttons: [
         {
          extend: 'pdfHtml5',
          text: 'EXPORT PDF',
        },
        "print"
      ],
      "columnDefs": [
          // {
          //     "targets": [ 3 ],
          //     "visible": false,
          //     "searchable": false
          // },
          {
            "targets": [3],
            "searchable": false,
            "sortable":false
          },
          {
            "targets": [1],
            "sortable":false
          },
          {
            "targets": [0],
             "width": "30%"
          }
      ],
  });
});
</script>
@endpush

@push('after-styles')
<style>
.table-striped td{
  vertical-align:middle;
}
.table-striped p {
  margin:0;
}
</style>
@endpush

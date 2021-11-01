@extends('layouts.layout')
@section('title')
  Solidworks 2017 Launch Event
@stop
@section('meta')
  {{-- <link rel="canonical" src="{{route('solidworks-3dcad')}}"/> --}}
@stop
@section('description')Thank you to all those who attended one of our SolidWorks 2017 launch events held throughout Ontario.@stop
@section('keywords')3D,Design Software,CAD,3D CAD,SolidWorks,3D Software,2017,launch,event @stop
@push('after-styles')
  <link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.css')}}' type='text/css' />
  <link rel='stylesheet' href='{{asset('js/unitegallery-master/dist/css/unite-gallery.css')}}' type='text/css' />
@endpush
@section('body')
<section data-z-index="1" class="parallax-window parallax-section trans-header-window parallax"
style="min-height:600px; background-image:url({{asset('storage/images/launch-events/2017/LAUNCH-2017.jpg')}})">
</section>
<section>
  <section class="py-5">
    <div class="container-fluid">
      <div class="section-title center-block mx-auto">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Thank you to all those who attended one of our SolidWorks 2017 launch events held throughout Ontario.</h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
    <div class="row">
      <div class="col-lg-8">
        <h3 class="main-title" >Highlights 2017</h3>
        <video id="video2017" class="video-js vjs-16-9" controls preload="auto" src="{{asset('storage/videos/launch-events/CAD-Micro-2017-Launch-Video.mp4')}}" width="100%" height="264" poster="{{asset('storage/videos/launch-events/CAD-Micro-2017-Launch-Video.jpg')}}"
          data-setup='{"fluid": true}'>
          <source src="{{asset('storage/videos/launch-events/CAD-Micro-2017-Launch-Video.mp4')}}" type='video/mp4'>
          <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
        </video>
        <div class="videoCaption">Video: CAD MicroSolutions 2017 SolidWorks Launch Event Highlights</div>
          <div class="custom-nav-pills" style="margin-top:20px;">
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item active ">
                <a class="nav-link active show" aria-selected="true" data-toggle="tab" href="#whatsnew" role="tab">What's New 2017</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active show" id="whatsnew" role="tabpanel">
                <a href="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.pdf')}}" target="_blank" class="pdf-item">
									<figure style="width:200px;">
										<div class="figimg">
											<img src="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.png')}}" class="w-100"
												alt="What's new in SOLIDWORKS 2020">
										</div>
										<figcaption>What's new in SOLIDWORKS 2020</figcaption>
									</figure>
								</a>
                <a href="https://launch.solidworks.com/launch/" target="_blank" class="pdf-item" style="vertical-align:top">
                  <figure style="width:200px;" >
                    <div class="figimg">
                      <img src="http://i.imgur.com/oXG4kdQ.jpg" style="width:100%;" alt="SOLIDWORKS 3D CAD Premium Data Sheet">
                    </div>
                    <figcaption>SolidWorks Launch Website 2017</figcaption>
                  </figure>
                </a>
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-4 hidden-md-down">
        <h3 class="main-title">Previous Events</h3>
        <video id="video2013" class="video-js vjs-16-9" controls preload="auto" src="{{asset('storage/videos/launch-events/CAD-Micro-2013-Launch-Video.mp4')}}" width="100%" height="264"
          data-setup='{"fluid": true}'>
          <source src="{{asset('storage/videos/launch-events/CAD-Micro-2013-Launch-Video.mp4')}}" type='video/mp4'>
          <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
        </video>
        <div class="videoCaption">Video: CAD Micro 2013 Launch Event Highlights</div>
        <div class="spacer20"></div>
        {{-- <video id="motionAnalysis1" class="video-js vjs-16-9" controls preload="auto" src="{{asset('storage/videos/launch-events/CAD-Micro-2014-Launch-Video.mp4')}}" width="100%" height="264"
          data-setup='{"fluid": true}'>
          <source src="{{asset('storage/videos/launch-events/CAD-Micro-2014-Launch-Video.mp4')}}" type='video/mp4'>
          <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
        </video> --}}
        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/jQss6MPZIYo" frameborder="0" allowfullscreen style="margin-bottom:-7px;"></iframe>
        <div class="videoCaption">Video: CAD Micro 2014 Launch Event Highlights</div>
        <div class="spacer20"></div>
        <video id="video2015" class="video-js vjs-16-9" controls preload="auto" src="{{asset('storage/videos/launch-events/CAD-Micro-2015-Launch-Video.mp4')}}" width="100%" height="264"
          data-setup='{"fluid": true}'>
          <source src="{{asset('storage/videos/launch-events/CAD-Micro-2015-Launch-VIDEO.mp4')}}" type='video/mp4'>
          <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
          <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
          </p>
        </video>
        <div class="videoCaption">Video: CAD Micro 2015 Launch Event Highlights</div>
      </div>
    </div>
    </div>
  </section>
  <section class="section-secondary py-5">
      <div class="content">
      <div class="section-title center-block mx-auto">
        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">GALLERY</h1>
        <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
      </div>
      <div  id="gallery" class="w-100 mx-auto" style="display:none;">
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0013.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0013.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0015.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0015.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0016.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0016.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0019.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0019.jpg')}}"/>
        <img   title="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0021.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0021.jpg')}}"/>
        <img   title="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0025.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0025.jpg')}}"/>
        <img   title="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0029.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0029.jpg')}}"/>
        <img   title="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0034.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0034.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0038.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0038.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0040.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0040.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0044.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0044.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0046.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0046.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0048.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0048.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0050.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0050.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0053.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0053.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0054.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0054.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0056.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0056.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0060.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0060.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0062.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0062.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0063.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0063.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0065.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0065.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0074.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0074.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0084.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0084.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0085.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0085.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0087.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0087.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0088.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0088.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0092.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0092.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0095.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0095.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0105.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0105.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0116.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0116.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0122.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0122.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0126.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0126.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0127.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0127.jpg')}}"/>
        <img alt="CAD MicroSolutions 2017 Launch Event Gallery" src="{{asset('/storage/images/launch-events/2017/gallery/DSC_0135.jpg')}}" data-image="{{asset('/storage/images/launch-events/2017/gallery/DSC_0135.jpg')}}"/>
        </div>
      </div>
    </section>
    <section>
      <div class="container-fluid pt-5">
        <div class="section-title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">Testimonials</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="card box-shadow-lt testimonial-card wow fadeUp animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;">
        <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
        <div class="card-block d-flex m-4">
            <div class="col-md-2">
              <img src="{{asset('/storage/images/launch-events/2017/Ron.jpg')}}" class="img-circle rounded-circle  img-shadow">
            </div>
            <div class="col-md-10">
              <blockquote class="blockquote">
                <p class="mb-0">Gents, I thought you delivered likely the best launch event I have ever attended. The rest of the team here today agreed. The Women in Engineering theme was so relevant, especially in light of the stats that Mary Wells delivered. There is much to do in that space. The Think like a Girl ladies were great! I was surprised to learn that two of them, Gaby and Julia, knew of me from their internships at SolidWorks. Having the young girls learning SW on the side was a great addition to the theme. Kudos for taking the long view on what we do.</p>
                <p>
                  Lastly, the venue was awesome.
                </p>
                <div class="blockquote-footer"><strong>Ron Furmaniuk</strong></div>
                <div class="blockquote-footer">Channel Marketing Manager, Dassault Systemes SolidWorks</div>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="card box-shadow-lt testimonial-card wow fadeUp animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;">
        <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
        <div class="card-block d-flex m-4">
            <div class="col-md-2">
              <img src="{{asset('/storage/images/launch-events/2017/Andre.jpg')}}" class="img-circle rounded-circle  img-shadow">
            </div>
            <div class="col-md-10">
              <blockquote class="blockquote">
                <p class="mb-0">Hi Meagan…   Thanks to CadMicro for hosting a great event.  I was wondering if I could get a portion of Nadia’s presentation defining what a customer is…..   There were a few resounding points that I would like to share with my team here</p>
                <p>
                  Lastly, the venue was awesome.
                </p>
                <div class="blockquote-footer"><strong>Andre Singer</strong></div>
                <div class="blockquote-footer">General Manager, Nordstrong Equipment Limited</div>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="card box-shadow-lt testimonial-card wow fadeUp animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s;">
        <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
        <div class="card-block d-flex m-4">
            <div class="col-md-2">
              <img src="{{asset('/storage/images/launch-events/2017/Jeff.jpg')}}" class="img-circle rounded-circle  img-shadow">
            </div>
            <div class="col-md-10">
              <blockquote class="blockquote">
                <p class="mb-0">Thank you for having me at the SW2017 launch event yesterday.
It was a great venue and the food was fabulous.  I really enjoyed Larisa’s talk.
On the topic of SolidWorks, I like the way Jake presents the new features while also telling a story. The breakout sessions were also quite interesting and presented well.  SolidWorks is looking better than ever!
I am also impressed with the ambition of some of today’s youth.  The girls from Think like a Girl, were very impressive.  That was really nice to see.
The talks that Meagan and her ladies gave were very well done and informative.
Thanks again for a great event yesterday.</p>
                <div class="blockquote-footer"><strong>Jeff Belbeck, P. Eng.</strong></div>
                <div class="blockquote-footer">Senior Engineer, Delphax Technologies Canada Ltd</div>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>

</section>
@stop

@push('after-scripts')
  <script>
  $(function(){
    // var swiper = new Swiper.default('.swiper-container', {
    //     pagination: '.swiper-pagination',
    //     slidesPerView: 'auto',
    //     centeredSlides: true,
    //     paginationClickable: true,
    //     spaceBetween: 30,
    //     keyboardControl: true
    // });
    $('#videos .row > div').matchHeight();
});

</script>

<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/js/unitegallery.js')}}'></script>
<script type='text/javascript' src='{{asset('js/unitegallery-master/dist/themes/default/ug-theme-default.js')}}'></script>

<script type="text/javascript">
  $(function(){
    var gallery = jQuery("#gallery").unitegallery({
      theme_enable_text_panel: false,
      carousel_autoplay: true,
      gallery_width:900
    });
  });
</script>
@endpush

@push('after-styles')
  <style>
.swiper-container {
    width: 100%;
    height: 300px;
    margin: 20px auto;
}
.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;
    width:100%;
    max-width:450px;
    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;

    background-size: contain;
background-repeat: no-repeat;
background-position: center;
}
.swiper-pagination{
  width:100%;
}
.swiper-pagination-bullet{
  margin:3px;
}
</style>
@endpush

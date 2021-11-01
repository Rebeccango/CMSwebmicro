<footer>
  <div class="footer-inner container-fluid pt-3 pt-md-5">
    <div class="row p-3">
      <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 pb-5 pb-md-0">
        <div id="logo_widget" class="widget logo_widget clearfix mx-auto mt-0">
          <a class="navbar-brand mx-auto mr-0" href="./index.php"></a>
          <p class="copyright my-3 text-center text-md-left">{{config('app.name')}} © 2020 <span class="mx-1">|</span>
            All Rights
            Reserved</p>
          <ul class="align-items-start mx-auto m-0 w-100 text-center text-md-left">
            <li>
              <a href="{{route('privacy-policy')}}">Privacy Policy</a>
            </li>
          </ul>
          <div class="social-icons social-widget text-center text-md-left mt-3">
            <a target="_blank" href="https://www.facebook.com/CADMicro/"><i class="fab fa-facebook-f fa-lg mr-3"
                aria-hidden="true"></i></a>
            <a target="_blank" href="https://www.linkedin.com/company/cad-microsolutions-inc-/?originalSubdomain=ca"><i
                class="fab fa-linkedin-in fa-lg mr-3" aria-hidden="true"></i></a>
            <a target="_blank" href="https://twitter.com/CAD_Micro"><i class="fab fa-twitter fa-lg mr-3"
                aria-hidden="true"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCb25bSD_S0bedYAvqd8YOYA"><i
                class="fab fa-youtube fa-lg" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <div class="widget clearfix">
          <h4 class="widget-title title-alt">PRODUCTS</h4>
          <div class="widget-body">
            <ul>
              <li>
                <a href="{{route('solidworks-3dcad')}}">SolidWorks</a>
              </li>
              <li>
                <a href="{{route('hp')}}">HP</a>
              </li>
              <li>
                <a href="{{route('3d-scanning.index')}}">3D Scanning</a>
              </li>
              <li>
                <a href="{{route('ultimaker')}}">Ultimaker</a>
              </li>
              <li>
                <a href="{{route('solidworks-simulation')}}">Simulation</a>
              </li>
              <li>
                <a href="{{route('solidworks-simulation-plastics')}}">Plastics</a>
              </li>
              <li>
                <a href="{{route('solidworks-Electrical-electrical')}}">Electrical</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <div class="widget clearfix">
          <h4 class="widget-title title-alt">EVENTS</h4>
          <div class="widget-body">
            <ul>
              <li>
                <a href="{{route('events.index')}}">Upcoming Events</a>
              </li>
              <li>
                <a href="{{route('events.index')."#recentEvents"}}">Recent Events</a>
              </li>
              <li>
                <a href="{{route('calendar',['filter'=>8,'search'=>'solidworks'])}}">SolidWorks</a>
              </li>
              <li>
                <a href="{{route('calendar',['filter'=>10])}}">Webinars</a>
              </li>
              <li>
                <a href="{{route('calendar',['filter'=>8,'search'=>'trade show'])}}">Trade Shows</a>
              </li>
              <li>
                <a href="{{route('calendar',['filter'=>1])}}">Courses</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-block d-sm-none d-md-block d-lg-none"></div>
      <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
        <div class="widget clearfix">
          <h4 class="widget-title title-alt">TRAINING</h4>
          <div class="widget-body">
            <ul>
              <li>
                <a href="{{route('training')}}">Our Training Services</a>
              </li>
              <li>
                <a href="{{route('training-solidworks')}}">SolidWorks Training</a>
              </li>
              <li>
                <a href="{{route('calendar')}}">Training Schedule</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
        <div class="widget contact-widget clearfix">
          <h4 class="widget-title title-alt">SITEMAP</h4>
          <div class="widget-body">
            <table class="w-100 mt-4">
              <tr>
                <td>
                  <ul class="mt-0">
                    <li>
                      <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                      <a href="{{route('blog')}}">Blog</a>
                    </li>

                    <li>
                      <a href="{{route('calendar')}}">Calendar</a>
                    </li>
                    <li>
                      <a href="{{route('events.index')}}">Events</a>
                    </li>
                    <li>
                      <a href="{{route('partner-products')}}">Partners</a>
                    </li>
                    <li>
                      <a href="{{route('training')}}">Training</a>
                    </li>
                    <li>
                      <a href="{{route('about')}}">About Us</a>
                    </li>
                  </ul>
                </td>
                <td>
                  <ul class="mt-0">
                    {{-- <li>
                      <a href="{{route('store')}}">Store</a>
                    </li> --}}
                    <li>
                      <a href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li>
                      <a href="{{route('solidworksSubscription')}}">SolidWorks Subscription</a>
                    </li>
                    <li>
                      <a target="_blank" href="{{route('support')}}">Support</a>
                    </li>
                    <li>
                      <a target="_blank" href="{{route('customer-experience-center')}}">Customer Experience Centre</a>
                    </li>
                    <li>
                      <a target="_blank" href="{{route('careers')}}">Careers</a>
                    </li>
                    <li>
                      <a href="{{route('testimonials')}}">Testimonials</a>
                    </li>
                    <li>
                      <a href="https://shop.cadmicro.com">Shop</a>
                    </li>
                  </ul>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-5 col-xs-12"></div>
      <div
        class="widget-body contact-widget clearfix mt-3 contact-widget clearfix w-100 d-flex flex-column flex-md-row px-3">
        <div class="w-100 col-lg-2 pr-3 d-sm-none d-xs-none d-lg-block d-block"></div>
        <div class="w-100 pr-3">
          <table>
            <tr>
              <td>
                <i class="fa fa-globe mr-3" aria-hidden="true"></i>
              </td>
              <td>
                <h5>FIND US</h5>
                <div class="mb-3">
                  <strong>ONTARIO – GTA</strong><br />
                  <a href="https://maps.google.com/?q=CAD MicroSolutions Inc. 30 International Blvd, Unit #1, Etobicoke, ON, M9W 1A2"
                    target="_blank">
                    <address>30 International Blvd, Unit #1, Etobicoke, ON, M9W 1A2</address>
                  </a>
                </div>
                <div class="mb-3">
                  <strong>ONTARIO – TRI-CITIES</strong><br />
                  <a href="https://maps.google.com/?q=225 Pinebush Rd, Suite 102, Cambridge, ON, N1T 1B9"
                    target="_blank">
                    <address>225 Pinebush Rd, Suite 102, Cambridge, ON, N1T 1B9</address>
                  </a>
                </div>
                <div class="mb-3">
                  <strong>QUEBEC</strong><br /><a
                    href="https://maps.google.com/?q=1285 rue Hodge, Suite 201-D, Montreal QC H4N 2B6"
                    target="_blank">
                    <address>1285 rue Hodge, Suite 201-D, Montreal QC H4N 2B6</address>
                  </a>
                </div>
                <div class="mb-3">
                  <strong>ALBERTA</strong><br /><a
                    href="https://maps.google.com/?q=Emergehub, 250-3515 17 AVE SE, Calgary, AB, T2A 0R5"
                    target="_blank">
                    <address>Emergehub, 250-3515 17 AVE SE, Calgary, AB, T2A 0R5</address>
                  </a>
                </div>
                <div class="mb-3">
                  <strong>BRITISH COLUMBIA</strong><br /><a
                    href="https://maps.google.com/?q=Network Hub, 810 Quayside Dr #205, New Westminster, BC, V3M 6B9"
                    target="_blank">
                    <address>Network Hub, 810 Quayside Dr #205, New Westminster, BC, V3M 6B9</address>
                  </a>
                </div>
              </td>
            </tr>
          </table>
          <table>
            <tr>
              <td>
                <i class="far fa-envelope mr-3" aria-hidden="true"></i>
              </td>
              <td>
                <h5>EMAIL US</h5>
                <a href="mailto:info@cadmicro.com">info@cadmicro.com</a>
              </td>
            </tr>
          </table>
          <div class="mt-4">
            <button class="btn btn-lg btn-primary w-100 rounded-0 dropdown-toggle" type="button" data-toggle="collapse"
              data-target="#newsletterSubscribeFooter" aria-expanded="false" aria-controls="newsletterSubscribeFooter">
              Subscribe to our Newsletter
            </button>
            <div class="collapse" id="newsletterSubscribeFooter">
              <div class="card text-white bg-dark mb-3 w-100 rounded-0">
                <div class="card-body">
                  <div data-form-block-id="5f005dc1-d572-eb11-a812-002248046855"></div>
                  <div id="dHGiW8w4n0n4to_ejrSVBySEt11BS4B85uUTfORS4P8o"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-100 pr-3">
          <table class="w-100">
            <tr>
              <td style="width:40px;">
                <i class="fa fa-phone mr-3" aria-hidden="true"></i>
              </td>
              <td>
                <h5>CALL US</h5>
                <strong>Toll-free:</strong> <span itemprop="telephone"><a
                    href="tel:+18884015885">1-888-401-5885</a></span><br>
                <strong>Phone:</strong> <span itemprop="telephone"><a
                    href="tel:+1-416-213-0533"><span>416-213-0533</span></a></span><br>
                <strong>Fax:</strong> <span itemprop="telephone"><a
                    href="tel:+14162130533">416-213-0538</a></span><br />
                <hr />
                <strong>GTA OFFICE:</strong><br />
                <span itemprop="telephone"><a href="tel:+1-416-213-0533">416-213-0533</a></span>
                <br /><br />
                <strong>TRI-CITIES OFFICE:</strong><br />
                <span itemprop="telephone"><a href="tel:+1-519-642-8222">519-642-8222</a></span>
                <br /><br />
                <strong>MONTREAL OFFICE:</strong><br />
                <span itemprop="telephone"><a href="tel:+1-438-834-1310">438-834-1310</a></span>
                <br /><br />
                <strong>CALGARY OFFICE:</strong><br />
                <span itemprop="telephone"><a href="tel:+1-587-747-4342">587-747-4342</a></span>
                <br /><br />
                <strong>NEW WESTMINSTER OFFICE:</strong><br />
                <span itemprop="telephone"><a href="tel:+1-604-256-6784">604-256-6784</a></span>
                <hr />
                <strong>Support:</strong> <br />
                <span itemprop="email"><u><a
                      href="mailto:support@cadmicro.com">support@cadmicro.com</a></u></span><br />
                <span itemprop="telephone"><a href="tel:+14162130533">1-416-213-0533</a> <span class="text-primary">DIAL
                    1</span></span><br />
                <a href="https://portalcadmicro.powerappsportals.com/">Support Website</a>
              </td>
            </tr>
            <tr>
              <td colspan="2" class="d-table-cell">
                <div class="p-4 my-3 d-flex align-items-center text-left" style="background: rgba(0,0,0,0.2);">
                  <a href="{{route('referral-program')}}" class="d-flex align-items-center" style="font-size:15px;"><i
                      class="fas fa-user-friends mb-0 mr-4 h3"></i> Join the
                    CAD MicroSolutions Referral Appreciation Program</a>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</footer>

<a class="back-to-top d-flex justify-content-center align-items-center text-decoration-none" data-scrollTo
  href="#body"><i class="fas fa-chevron-up"></i></a>

@push('after-scripts')
{{-- <script data-cfasync="false" type="text/javascript" data-bablic="58e5530100df3e3f8e18b8ef"
  data-bablic-m="['1491497385','en','en',1,['fr_ca'],0,0,0,0,0,0,0,0,[],'cadmicro.com/',[],['_v',2]]"
  src="//cdn2.bablic.com/js/bablic.3.9.js"></script> --}}
@if(session('message'))
<script>
  $.notify({
    // options
    message: '{{session('
    message ')}}'
  }, {
    // settings
    placement: {
      from: "bottom",
      align: "middle"
    },
    type: '{{session('
    success ')}}'
  });
</script>
@endif

@php
$links = Session::has('links') ? Session::get('links') : array();
$currentLink = Route::getCurrentRoute()->getName(); // getting current URL like 'category/books/'
array_unshift($links, $currentLink); // putting it in the beginning of an array
Session::flash('links', $links);
@endphp

<script type="text/javascript">
  adroll_adv_id = "FACMEDRYKNBYZLREL6CER6";
  adroll_pix_id = "G6YNQXMHU5CSNGAUIE5T6H";
  /* OPTIONAL: provide email to improve user identification */
  /* adroll_email = "username@example.com"; */
  (function () {
    var _onload = function () {
      if (document.readyState && !/loaded|complete/.test(document.readyState)) {
        setTimeout(_onload, 10);
        return
      }
      if (!window.__adroll_loaded) {
        __adroll_loaded = true;
        setTimeout(_onload, 50);
        return
      }
      var scr = document.createElement("script");
      var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
      scr.setAttribute('async', 'true');
      scr.type = "text/javascript";
      scr.src = host + "/j/roundtrip.js";
      ((document.getElementsByTagName('head') || [null])[0] ||
        document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
    };
    if (window.addEventListener) {
      window.addEventListener('load', _onload, false);
    } else {
      window.attachEvent('onload', _onload)
    }
  }());
</script>

<script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 1069215812;
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt=""
      src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1069215812/?guid=ON&amp;script=0" />
  </div>
</noscript>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function () {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5846fe5873e3d85bf125ad48/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
@endpush
@yield('footer')
<input type="hidden" id="csrf_token" value="{{csrf_token()}}" />
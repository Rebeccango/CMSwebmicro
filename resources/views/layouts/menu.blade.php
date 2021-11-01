@php
$promotionFamilies=\App\Promotion::active()->get()->groupBy("product_family");
$promotions = [];
@endphp
@if($promotionFamilies->count() > 0)
@foreach($promotionFamilies as $promo)
@php
$product_family = $promo[0]->productFamily()->first();
$promotions[] = ["slug"=>$product_family->slug, "name"=>$product_family->name]
@endphp
@endforeach
@endif
<keep-alive>
  <navigation :promotions="{{json_encode($promotions)}}"></navigation>
</keep-alive>

{{-- <header class="navbar-sticky-top shadow d-none" itemscope="" itemtype="https://schema.org/WPHeader">
  <div class="header-topbar">
    <div class="container-fluid d-flex p-0 h-100 justify-content-between align-items-center">
      <div class="w-auto pl-md-4 pl-lg-4 pl-xl-0 pl-4 pr-0 tb-left ml-3">
        <ul class="tb-links tb-left d-flex justify-content-start align-items-center">
          <li>
            <span itemprop="telephone"><a href="tel:+14162130533"><i class="fa fa-phone-square"
                  aria-hidden="true"></i><span class="d-none d-lg-inline ml-2" data-toggle="tooltip"
                  data-placement="auto" title="416-213-0533">+1 416-213-0533</span></a></span>
          </li>
          <li>
            <a href="mailto:info@cadmicro.com"><i class="fas fa-envelope" aria-hidden="true"></i><span
                class="d-none d-lg-inline ml-2" data-toggle="tooltip" data-placement="auto"
                title="info@cadmicro.com">info@cadmicro.com</span></a>
          </li>
        </ul>
      </div>
      <div class="d-flex align-items-center justify-content-center"><a
          class="btn btn-sm btn-light btn-rounded shadow-sm d-none d-xs-block d-sm-block"
          style="font-weight:600; line-height:1"
          href="{!! route ('solidworks-otherProducts-draftSight').'#buyDraftSight' !!}">BUY
          DRAFTSIGHT NOW</a></div>
      <div class="w-auto text-right p-0">
        <ul class="tb-links">
          <li>
            <a href="{{ route('calendar') }}"><i class="fas fa-calendar-alt d-inline d-md-none"
                aria-hidden="true"></i><span class="d-none d-md-inline">Calendar</span></a>
          </li>
          <li>
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">SUPPORT
              </button>
              <div class="dropdown-menu dropdown-menu-right support-button-dropdown">
                <a class="dropdown-item" href="mailto:support@cadmicro.com"><i
                    class="fas fa-headset mr-3"></i>support@cadmicro.com</a>
                <a class="dropdown-item" href="tel:1-416-213-0533"><i class="fas fa-phone mr-3"></i>1-416-213-0533 and
                  Dial 1</a>
                <a class="dropdown-item" href="https://portal.cadmicro.com/"><i
                    class="fas fa-external-link-square-alt mr-3"></i>Support Portal</a>
              </div>
            </div>
          </li>
          <li>
            <a href="{{route('blog')}}">Blog</a>
          </li>
          <li>
            <a href="{{route('events.index')}}">Events</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <nav data-scroll-header class="header navbar navbar-light navbar-full bg-faded navbar-default p-0">
    <div class="container-fluid h-100 mx-auto">
      <a class="navbar-brand mr-3" data-scrollTo href="{{route('home')}}"></a>
      <button class="navbar-toggler" type="button" data-toggle="offcanvas" data-target=".sidebar-nav"
        aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
      <div class="navbar-toggleable-xs hidden-sm-down visible-md-up" id="navbar">
        <ul class="nav navbar-nav  pull-xs-none pull-lg-right pull-md-right pull-sm-right">
          <li class="nav-item nav-link" data-toggle="collapse" href="#solidworks-menu" role="tab" aria-expanded="false">
            <a href="{{route('solidworks')}}">Solidworks</a>
            <div class="dropdown-arrow"></div>
          </li>
          <li class="nav-item nav-link" data-toggle="collapse" href="#printers-menu" role="tab" aria-expanded="false">
            <a href="{{route('additive-solutions.all')}}">3D Printers</a>
            <div class="dropdown-arrow"></div>
          </li>
          <li class="nav-item nav-link" data-toggle="collapse" href="#metrology-menu" role="tab" aria-expanded="false">
            <div>3D Metrology</div>
            <div class="dropdown-arrow"></div>
          </li>
          <li class="nav-item nav-link" data-toggle="collapse" href="#xr-menu" role="tab" aria-expanded="false">
            <div>Immersive Display</div>
            <div class="dropdown-arrow"></div>
          </li>
          <li class="nav-item nav-link" data-toggle="collapse" href="#training-menu" role="tab" aria-expanded="false">
            <a href="{{ route('training') }}">Training</a>
            <div class="dropdown-arrow"></div>
          </li>
          <li class="nav-item nav-link">
            <a href="{{ route('education.index') }}">Education</a>
          </li>
          <li class="nav-item nav-link">
            <a href="{{route('resources.index')}}">Resources</a>
          </li>
          <li class="nav-item nav-link pl-2 w-auto d-none d-md-flex">
            <a href="{{route('shop')}}" class="btn btn-primary btn-rounded py-3 text-light shadow-sm"><i
                class="fas fa-shopping-cart mr-2"></i>Shop</a>
          </li>
          <li class="nav-item nav-link d-flex d-md-none">
            <a href="{{route('shop')}}">Shop</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="mega-dropdown collapse container" id="solidworks-menu">
    <div class="dropdown-content-box p-0 shadow">
      <div class="d-flex py-0 w-100 align-items-start flex-wrap m-0">
        <div class="col-12 p-4 mega-dropdown-title">
          <a class="btn btn-primary btn-back d-inline-block d-lg-none" data-toggle="collapse" href="#solidworks-menu"
            role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-chevron-left mr-2"></i>Back
          </a>
          <h4 class="m-0">SOLIDWORKS Solutions</h4>
        </div>
        <div class="col-lg-4 col-md-12 p-0 mega-dropdown-section">
          <div class="nav flex-column nav-tabs" id="solidworks-solidworks-tab" role="tablist"
            aria-orientation="vertical">
            <div class="nav-link nav-title" id="solidworks-3dexperience-tab"
              aria-controls="solidworks-3dexperience-pane" href="#solidworks-3dexperience-pane" data-toggle="tab"
              role="tab" aria-selected="false">
              <a href="{{route('solidworks.3dexperience.platform')}}">3DEXPERIENCE Platform</a>
            </div>
            <div class="nav-link nav-title" id="solidworks-solidworks-tab" data-toggle="tab"
              href="#solidworks-solidworks-pane" role="tab" aria-controls="solidworks-solidworks-pane"
              aria-selected="true">
              3D Design Software
            </div>
            <div class="nav-link nav-title" id="solidworks-machining-tab" data-toggle="tab"
              href="#solidworks-machining-pane" role="tab" aria-controls="solidworks-machining-pane"
              aria-selected="false">
              Machining
            </div>
            <div class="nav-link nav-title" id="solidworks-design-validation-tab" data-toggle="tab"
              href="#solidworks-design-validation-pane" role="tab" aria-controls="solidworks-data-validation-pane"
              aria-selected="false">
              Design Validation
            </div>
            <div class="nav-link nav-title" id="solidworks-data-management-tab" data-toggle="tab"
              href="#solidworks-data-management-pane" role="tab" aria-controls="solidworks-data-management-pane"
              aria-selected="false">
              Data Management
            </div>
            <div class="nav-link nav-title" id="solidworks-electrical-tab" aria-controls="solidworks-electrical-pane"
              href="#solidworks-electrical-pane" data-toggle="tab" role="tab" aria-selected="false">
              Electrical / Electronics
            </div>
            <div class="nav-link nav-title" id="solidworks-techcomm-tab" aria-controls="solidworks-techcomm-pane"
              href="#solidworks-techcomm-pane" data-toggle="tab" role="tab" aria-selected="false">
              Technical Communication
            </div>
            <div class="nav-link nav-title" id="solidworks-ecommerce-tab" aria-controls="solidworks-ecommerce-pane"
              href="#solidworks-ecommerce-pane" data-toggle="tab" role="tab" aria-selected="false">
              eCommerce
            </div>
            <div class="nav-link nav-title" id="solidworks-partner-tab" aria-controls="solidworks-partner-pane"
              href="#solidworks-partner-pane" data-toggle="tab" role="tab" aria-selected="false">
              <a href="{{route('partner-products')}}">Partner Products</a>
            </div>
            <div class="nav-link nav-title" id="solidworks-other-tab" aria-controls="solidworks-other-pane"
              href="#solidworks-other-pane" data-toggle="tab" role="tab" aria-selected="false">
              <a href="{{route('partner-products')}}">Other Products</a>
            </div>
            <div class="nav-link nav-title" id="promotions-tab" aria-controls="promotions-pane" href="#promotions-pane"
              data-toggle="tab" role="tab" aria-selected="false">
              PROMOTIONS
            </div>
            <div class="nav-link nav-title">
              <a href="{{route('subscription-services')}}">Subscription Services</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 p-0 mega-dropdown-section">
          <div class="tab-content">
            <div class="tab-pane" id="solidworks-solidworks-pane" role="tabpanel"
              aria-labelledby="solidworks-solidworks-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks')}}">SOLIDWORKS</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-3dcad')}}">SOLIDWORKS Premium</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-simulation-plastics')}}">Plastics</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-simulation-sustainability')}}">Sustainabilty</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="solidworks-machining-pane" role="tabpanel"
              aria-labelledby="solidworks-machining-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-cam')}}">SOLIDWORKS CAM</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="solidworks-design-validation-pane" role="tabpanel"
              aria-labelledby="solidworks-design-validation-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-simulation')}}">Simulation</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-simulation-flowSimulation')}}">Flow Simulation</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-simulation-plastics')}}">Plastics</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-simulation-sustainability')}}">Sustainability</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="solidworks-data-management-pane" role="tabpanel"
              aria-labelledby="solidworks-data-management-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-dataManagement')}}">PDM</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-manage')}}">Manage</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-exalead')}}">ExaLead OnePart</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="solidworks-techcomm-pane" role="tabpanel"
              aria-labelledby="solidworks-techcomm-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-technical-composer')}}">Composer</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-technical-modelBasedDefinition')}}">Model Based Definition</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-technical-inspection')}}">Inspection</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-otherProducts-visualize')}}">Visualize</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="solidworks-electrical-pane" role="tabpanel"
              aria-labelledby="solidworks-electrical-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-Electrical-electrical')}}">Electrical</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-Electrical-pcb')}}">PCB</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('solidworks-Electrical-pcbConnector')}}">PCB Connector</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="solidworks-3dexperience-pane" role="tabpanel"
              aria-labelledby="solidworks-3dexperience-tab">
              <div class="row m-0 p-0">
                <div class="nav flex-column nav-tabs col-lg-6 col-md-12 p-0" role="tablist" aria-orientation="vertical">

                <div class="nav-link nav-title" id="solidworks-3dexperience-design-tab"
                  aria-controls="solidworks-3dexperience-design-pane" href="#solidworks-3dexperience-design-pane"
                  data-toggle="tab" role="tab" aria-selected="false">
                  <a href="{{route('solidworks.3dexperience.design.index')}}">Design</a>
                </div>
                <div class="nav-link nav-title" id="solidworks-3dexperience-simulate-tab"
                  aria-controls="solidworks-3dexperience-simulate-pane" href="#solidworks-3dexperience-simulate-pane"
                  data-toggle="tab" role="tab" aria-selected="false">
                  <a href="{{route('solidworks.3dexperience.simulate.index')}}">Simulate</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('solidworks.3dexperience.manage')}}">Manage</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('solidworks.3dexperience.startups')}}">3DEXPERIENCE Works for Startups</a>
                </div>

              </div>
              <div class="col-lg-6 col-md-12 p-0">
                <div class="tab-content">
                  <div class="tab-pane" id="solidworks-3dexperience-design-pane" role="tabpanel"
                    aria-labelledby="solidworks-3dexperience-design-tab">
                    <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                      <div class="nav-link nav-title">
                        <a href="{{route('solidworks.3dexperience.design.3d-sculptor')}}">3D Sculptor</a>
                      </div>
                      <div class="nav-link nav-title">
                        <a href="{{route('solidworks.3dexperience.design.3d-creator')}}">3D Creator</a>
                      </div>
                      <div class="nav-link nav-title">
                        <a href="{{route('solidworks.3dexperience.design.drafter')}}">Drafter</a>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="solidworks-3dexperience-simulate-pane" role="tabpanel"
                    aria-labelledby="solidworks-3dexperience-simulate-tab">
                    <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                      <div class="nav-link nav-title">
                        <a href="{{route('solidworks.3dexperience.simulate.simuliaworks')}}">SIMULIAworks</a>
                      </div>
                      <div class="nav-link nav-title">
                        <a href="{{route('solidworks.3dexperience.simulate.structural-professional-engineer')}}">Structural
                          Professional Engineer</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="solidworks-other-pane" role="tabpanel" aria-labelledby="solidworks-other-tab">
          <div class="col-lg-6 col-md-12 p-0">
            <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
              <div class="nav-link nav-title">
                <a href="{{route('solidworks-otherProducts-draftSight')}}">DraftSight</a>
              </div>
              <div class="nav-link nav-title">
                <a href="{{route('3dconnexion')}}">3DConnexion</a>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="promotions-pane" role="tabpanel" aria-labelledby="promotions-tab">
          <div class="col-lg-6 col-md-12 p-0">
            <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
              @php
              $promotionFamilies=\App\Promotion::active()->get()->groupBy("product_family");
              @endphp
              @if($promotionFamilies->count() > 0)
              @foreach($promotionFamilies as $promo)
              <div class="nav-link nav-title">
                @php
                $product_family = $promo[0]->productFamily()->first();
                @endphp
                <a href="{{route('promotions',$product_family->slug)}}">{{$product_family->name}}</a>
              </div>
              @endforeach
              @endif
            </div>
          </div>
        </div>
        <div class="tab-pane" id="solidworks-ecommerce-pane" role="tabpanel" aria-labelledby="solidworks-ecommerce-tab">
          <div class="col-lg-6 col-md-12 p-0">
            <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
              <div class="nav-link nav-title">
                <a href="{{route('solidworks-sell')}}">SOLIDWORKS Sell</a>
              </div>
              <div class="nav-link nav-title">
                <a href="{{route('driveWorks')}}">DriveWorks</a>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="solidworks-partner-pane" role="tabpanel" aria-labelledby="solidworks-partner-tab">
          <div class="d-flex flex-md-row flex-column">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{route('builtWorks')}}">BuiltWorks &amp; The Steel Detailer
                    (TSD)</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('camWorks')}}">CAMWorks</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('dataKit')}}">Datakit CrossCAD Translators</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('driveWorks')}}">DriveWorks</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('exactFlat')}}">ExactFlat</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('bimdex')}}">BIMDeX</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{route('keyShot')}}">KEYSHOT</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('logoPress')}}">LogoPress3</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('swood')}}">SWOOD</a>
                </div>
              <div class="nav-link nav-title">
                <a href="{{route('visualComponents')}}">Visual Components</a>
              </div>
              <div class="nav-link nav-title">
                <a href="{{route('simerics')}}">Simerics</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <div class="mega-dropdown collapse container" id="printers-menu">
    <div class="dropdown-content-box container p-0 shadow">
      <div class="d-flex py-0 w-100 align-items-start flex-wrap m-0">
        <div class="col-12 p-4 mega-dropdown-title">
          <a class="btn btn-primary btn-back d-inline-block d-lg-none" data-toggle="collapse" href="#printers-menu"
            role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-chevron-left mr-2"></i>Back
          </a>
          <h4 class="m-0">Additive Manufacturing Solutions</h4>
        </div>
        <div class="col-lg-4 col-md-12 p-0 mega-dropdown-section">
          <div class="nav flex-column nav-tabs" id="printers-tab" role="tablist" aria-orientation="vertical">
            <div class="nav-link nav-title" id="printers-markforged-tab" data-toggle="tab"
              href="#printers-markforged-pane" role="tab" aria-controls="printers-markforged-pane" aria-selected="true">
              <a href="{{route('markforged')}}">Markforged</a>
            </div>
            <div class="nav-link nav-title" id="printers-hp-tab" data-toggle="tab" href="#printers-hp-pane" role="tab"
              aria-controls="printers-hp-pane" aria-selected="false">
              <a href="{{route('hp')}}">HP</a>
            </div>
            <div class="nav-link nav-title" id="printers-formlabs-tab" data-toggle="tab" href="#printers-formlabs-pane"
              role="tab" aria-controls="printers-formlabs-pane" aria-selected="false">
              <a href="{{route('formlabs')}}">Formlabs</a>
            </div>
            <div class="nav-link nav-title" id="printers-ultimaker-tab" data-toggle="tab"
              href="#printers-ultimaker-pane" role="tab" aria-controls="printers-ultimaker-pane" aria-selected="false">
              <a href="{{route('ultimaker')}}">Ultimaker</a>
            </div>
            <div class="nav-link nav-title" id="printers-bigrep-tab" data-toggle="tab" href="#printers-bigrep-pane"
              role="tab" aria-controls="printers-bigrep-pane" aria-selected="false">
              <a href="{{route('bigrep')}}">BigRep</a>
            </div>
            <div class="nav-link nav-title" id="printers-intamsys-tab" aria-controls="printers-intamsys-pane"
              href="#printers-intamsys-pane" data-toggle="tab" role="tab" aria-selected="false">
              <a href="{{route('intamsys.index')}}">Intamsys</a>
            </div>
            <div class="nav-link nav-title" id="printers-nanodimension-tab" aria-controls="printers-nanodimension-pane"
              href="#printers-nanodimension-pane" data-toggle="tab" role="tab" aria-selected="false">
              Nano Dimension
            </div>
            <div class="nav-link nav-title" id="printers-dyemansion-tab" aria-controls="printers-dyemansion-pane"
              href="#printers-dyemansion-pane" data-toggle="tab" role="tab" aria-selected="false">
              <a href="{{route('dyemansion.index')}}">Dyemansion</a>
            </div>
            <div class="nav-link nav-title">
              <a href="{{route('nexa3d.index')}}">Nexa3D</a>
            </div>
            <div class="nav-link nav-title">
              <a href="{{route('customer-experience-center')}}">Customer Experience Center</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-12 p-0 mega-dropdown-section">
          <div class="tab-content">
            <div class="tab-pane" id="printers-markforged-pane" role="tabpanel"
              aria-labelledby="printers-markforged-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{route('metal-series')}}">Metal X</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('industrial-series')}}">Industrial Series</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('desktop-series')}}">Desktop Series</a>
                  </div>
                  @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','markforged')->first()->id)->active()->count()
                  > 0)
                  <div class="nav-link nav-title">
                    <a href="{{route('promotions','markforged')}}">Promotions</a>
                  </div>
                  @endif
                </div>
              </div>

            </div>
            <div class="tab-pane" id="printers-bigrep-pane" role="tabpanel" aria-labelledby="printers-bigrep-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{route('bigrep-one')}}">BigRep One</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('bigrep-studio-g2')}}">BigRep Studio G2</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('bigrep-pro')}}">BigRep PRO</a>
                  </div>
                  <div class="nav-link nav-title">
                    <a href="{{route('bigrep-edge')}}">BigRep EDGE</a>
                  </div>

              </div>
            </div>
          </div>
          <div class="tab-pane" id="printers-hp-pane" role="tabpanel" aria-labelledby="printers-hp-tab">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{route('jet-fusion-500-300-series')}}">HP Jet Fusion 500/300 Series</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('jet-fusion-4200')}}">HP Jet Fusion 4200</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('jet-fusion-5200-series')}}">HP Jet Fusion 5200 Series</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('hp-metal-jet')}}">HP Metal Jet <small>(Coming
                      Soon)</small></a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('materialise')}}">Materialise Magics</a>
                </div>
                @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','hp')->first()->id)->active()->count()
                > 0)
                <div class="nav-link nav-title">
                  <a href="{{route('promotions','hp')}}">Promotions</a>
                </div>
                @endif
              </div>
            </div>
          </div>
          <div class="tab-pane" id="printers-formlabs-pane" role="tabpanel" aria-labelledby="printers-formlabs-tab">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{ route('formlabs-form3') }}">Form 3</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{ route('formlabs-form3L') }}">Form 3L</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{ route('formlabs-form2') }}">Form 2</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{ route('formlabs-fuse1') }}">Fuse 1</a>
                </div>
                @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','formlabs')->first()->id)->active()->count()
                > 0)
                <div class="nav-link nav-title">
                  <a href="{{route('promotions','formlabs')}}">Promotions</a>
                </div>
                @endif
              </div>
            </div>
          </div>
          <div class="tab-pane" id="printers-ultimaker-pane" role="tabpanel" aria-labelledby="printers-ultimaker-tab">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{route('ultimaker-s5')}}">Ultimaker S5</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('ultimaker-s3')}}">Ultimaker S3</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('ultimaker-2')}}">Ultimaker 2+</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('ultimaker-original')}}">Ultimaker Original+</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('ultimaker-cura')}}">Ultimaker Cura Software & App</a>
                </div>
                @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','ultimaker')->first()->id)->active()->count()
                > 0)
                <div class="nav-link nav-title">
                  <a href="{{route('promotions','ultimaker')}}">Promotions</a>
                </div>
                @endif
              </div>
            </div>
          </div>
          <div class="tab-pane" id="printers-nano-pane" role="tabpanel" aria-labelledby="printers-nano-tab">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{route('dragonfly-ldm')}}">DragonFly LDM</a>
                </div>
                @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','nano-dimension')->first()->id)->active()->count()
                > 0)
                <div class="nav-link nav-title">
                  <a href="{{route('promotions','nano-dimension')}}">Promotions</a>
                </div>
                @endif
              </div>
            </div>
          </div>
          <div class="tab-pane" id="printers-intamsys-pane" role="tabpanel" aria-labelledby="printers-intamsys-tab">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{route('intamsys.funmat.ht')}}">Funmat HT</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('intamsys.funmat.pro410')}}">Funmat PRO 410</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('intamsys.funmat.pro610ht')}}">Funmat PRO 610 HT</a>
                </div>
                @if(\App\Promotion::where('product_family',$promoIntamSlug =
                \App\ProductFamily::where('slug','intamsys')->first() != null ? $promoIntamSlug->id :
                "")->active()->count() > 0)
                <div class="nav-link nav-title">
                  <a href="{{route('promotions','intamsys')}}">Promotions</a>
                </div>
                @endif
              </div>
            </div>
          </div>
          <div class="tab-pane" id="printers-nanodimension-pane" role="tabpanel"
            aria-labelledby="printers-nanodimension-tab">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{route('dragonfly-ldm')}}">DragonFly LDM</a>
                </div>
                @if(\App\Promotion::where('product_family',
                \App\ProductFamily::where('slug','nano-dimension')->first()->id)->active()->count() > 0)
                <div class="nav-link nav-title">
                  <a href="{{route('promotions','nano-dimension')}}">Promotions</a>
                </div>
                @endif
              </div>
            </div>
          </div>
          <div class="tab-pane" id="printers-dyemansion-pane" role="tabpanel" aria-labelledby="printers-dyemansion-tab">
            <div class="col-lg-6 col-md-12 p-0">
              <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                <div class="nav-link nav-title">
                  <a href="{{route('dyemansion.powershot-c')}}">Powershot C</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('dyemansion.powershot-s')}}">Powershot S</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('dyemansion.powerfuse-s')}}">Powerfuse S</a>
                </div>
                <div class="nav-link nav-title">
                  <a href="{{route('dyemansion.dyemansion-dm60')}}">DM60</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="mega-dropdown collapse container" id="metrology-menu">
    <div class="dropdown-content-box container p-0 shadow">
      <div class="d-flex py-0 w-100 align-items-start flex-wrap m-0">
        <div class="col-12 p-4 mega-dropdown-title">
          <a class="btn btn-primary btn-back d-inline-block d-lg-none" data-toggle="collapse" href="#metrology-menu"
            role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-chevron-left mr-2"></i>Back
          </a>
          <h4 class="m-0">3D Metrology Solutions</h4>
        </div>
        <div class="col-lg-4 col-md-12 p-0 mega-dropdown-section">
          <div class="nav flex-column nav-tabs" id="metrology-tab" role="tablist" aria-orientation="vertical">
            <div class="nav-link nav-title active" id="3dmetrology-gom-tab" data-toggle="tab"
              href="#3dmetrology-gom-pane" role="tab" aria-controls="3dmetrology-gom-pane" aria-selected="false">
              <a href="{{route('gom.index')}}">GOM</a>
            </div>
            <div class="nav-link nav-title">
              <a href="{{route('3d-metrology-services')}}">Services</a>
            </div>
            <div class="nav-link nav-title">
              <a href="{{ route('3d-metrology-training') }}">Training</a>
            </div>
            @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','gom')->first()->id)->active()->count()
            > 0)
            <div class="nav-link nav-title">
              <a href="{{route('promotions','gom')}}">Promotions</a>
            </div>
            @endif
          </div>
        </div>
        <div class="col-lg-8 col-md-12 p-0 mega-dropdown-section">
          <div class="">
            <div class="tab-pane collapse in show" id="3dmetrology-gom-pane" role="tabpanel"
              aria-labelledby="3dmetrology-gom-tab">
              <div class="col-lg-6 col-md-12 p-0">
                <div class="nav flex-column nav-tabs" role="tablist" aria-orientation="vertical">
                  <div class="nav-link nav-title">
                    <a href="{{ route('gom.atos-q') }}">ATOS Q</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mega-dropdown collapse container" id="xr-menu">
    <div class="dropdown-content-box container p-0 shadow">
      <div class="d-flex py-0 w-100 align-items-start flex-wrap m-0">
        <div class="col-12 p-4 mega-dropdown-title">
          <a class="btn btn-primary btn-back d-inline-block d-lg-none" data-toggle="collapse" href="#xr-menu"
            role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-chevron-left mr-2"></i>Back
          </a>
          <h4 class="m-0">Immersive Display Solutions</h4>
        </div>
        <div class="col-lg-4 col-md-12 p-0 mega-dropdown-section">
          <div class="nav flex-column nav-tabs" id="metrology-tab" role="tablist" aria-orientation="vertical">
            <div class="nav-link nav-title">
              <a href="{{route('xr.index')}}">Extended Reality (XR)
                Services</a>
            </div>
            <div class="nav-link nav-title">
              <a href="{{route('xr-virtalis')}}">Virtalis</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mega-dropdown collapse container" id="training-menu">
    <div class="dropdown-content-box container p-0 shadow">
      <div class="d-flex py-0 w-100 align-items-start flex-wrap m-0">
        <div class="col-12 p-4 mega-dropdown-title">
          <a class="btn btn-primary btn-back d-inline-block d-lg-none" data-toggle="collapse" href="#training-menu"
            role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fas fa-chevron-left mr-2"></i>Back
          </a>
          <h4 class="m-0">Training Solutions</h4>
        </div>
        <div class="col-lg-4 col-md-12 p-0 mega-dropdown-section">
          <div class="nav flex-column nav-tabs" id="metrology-tab" role="tablist" aria-orientation="vertical">
            <div class="nav-link nav-title">
              <a href="{{route('training-solidworks')}}">SOLIDWORKS</a>
            </div>
            <div class="nav-link nav-title">
              <a href="{{route('3d-metrology-training')}}">GOM</a>
            </div>
            <div class="nav-link nav-title">
              <a href="{{route('training-vr-ar')}}">VR & AR</a>
            </div>
            <div class="nav-link nav-title">
              <a href="{{route('calendar')}}">Calendar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
--}}
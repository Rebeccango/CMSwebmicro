<header class="navbar-sticky-top sticky-top shadow" itemscope="" itemtype="https://schema.org/WPHeader">
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
      <div class="d-flex align-items-center justify-content-center"><a class="btn btn-sm btn-light btn-rounded shadow-sm d-none d-xs-block d-sm-block" style="font-weight:600; line-height:1"
          href="{!! route ('solidworks-otherProducts-draftSight').'#buyDraftSight' !!}">BUY
          DRAFTSIGHT NOW</a></div>
      {{-- <div class="text-center tb-social-parent">
        <ul class="tb-social d-flex justify-content-center align-items-center">
          <li>
            <a href="https://www.linkedin.com/company/cad-microsolutions-inc-/?originalSubdomain=ca" target="_blank"><i
                class="fab fa-linkedin-in" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="https://twitter.com/CAD_Micro" target="_blank"><i class="fab fa-twitter"
                aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="https://www.facebook.com/CADMicro/" target="_blank"><i class="fab fa-facebook-f"
                aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCb25bSD_S0bedYAvqd8YOYA" target="_blank"><i class="fab fa-youtube"
                aria-hidden="true"></i></a>
          </li>
        </ul>
      </div> --}}
      <div class="w-auto text-right pr-3">
        <ul class="tb-links">
          <li>
            <a href="{{ route('calendar') }}"><i class="fas fa-calendar-alt d-inline d-md-none"
                aria-hidden="true"></i><span class="d-none d-md-inline">Calendar</span></a>
          </li>
          <li>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="support-button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><div><i
                  class="far fa-life-ring d-inline-block d-md-none"></i><div
                  class="d-none d-md-inline">SUPPORT</div></div>
              </button>
              <div class="dropdown-menu dropdown-menu-right support-button-dropdown" aria-labelledby="support-button">
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
          @if(Request::is('store/*') || Request::is('store'))
          {{-- <li class="m-0">
            <div class="dropdown">
              <button class="dropdown-toggle px-2" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><i class="fas fa-user-circle"></i></button>
              <div class="dropdown-menu dropdown-menu-right">
                @if (Auth::check() || Auth::viaRemember())
                <a class="dropdown-item" href="/account/orders"><i class="fa fa-cubes" aria-hidden="true"></i> My
                  Orders</a>
                <a class="dropdown-item" href="/account/settings"><i class="fa fa-cogs" aria-hidden="true"></i>
                  Settings</a>
                <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                @else
                <a class="dropdown-item" href="{{route('login-page')}}"><i class="fas fa-sign-in-alt"></i> Login </a>
                <a class="dropdown-item" href="{{route('register')}}"><i class="fa fa-user-plus"
                    aria-hidden="true"></i>Register</a>
                @endif
              </div>
            </div>
          </li> --}}
          {{-- <div class="dropdown shoppingcart_dropdown d-inline-block">
            <button class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <div class="badge">{{isset($calcCart) ? ($calcCart->num_items ? $calcCart->num_items : 0) : 0}}</div>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <h2><i class="fa fa-shopping-cart" aria-hidden="true" style="margin-right:10px;"></i> Cart <span
                  class="beta-badge badge badge-sm badge-secondary" data-container="body" data-toggle="popover"
                  data-placement="right" data-html="true" data-trigger="hover"
                  data-content="The CAD MicroSolutions Online Store is currently in Beta. <br>There may be bugs, if you run into any issues please don't hesitate to email us at <a href='mailto:support@cadmicro.com'>support@cadmicro.com</a>">BETA</span>
              </h2>
              <ul class="cart-items">
                @if(isset($calcCart) && $calcCart->num_items > 0 )
                @foreach($calcCart->products as $product)
                @php
                $cid = $product->category_id;
                $category = DB::table('categories')
                ->where('id','=',$cid)
                ->where('visible','=',1)
                ->first();
                @endphp
                <li class="cart-item" data-pid="{{$product->id}}">
                  <table width="100%">
                    <tr>
                      <td width="90%">
                        <table width="100%">
                          <tr>
                            <td class="pr-2 align-top">
                              <a href="/store/catalog/{{$category->slug}}/{{$product->slug}}">
                                <div class="cd-thumb" style='background-image:url("{{$product->thumbnail}}")'></div>
                              </a>
                            </td>
                            <td width="100%">
                              <a href="/store/catalog/{{$category->slug}}/{{$product->slug}}"
                                class="cd-item-name">{{$product->title}}</a>
                              <div class="d-flex w-100 justify-content-start align-items-center">
                                <div class="cd-qty">{{$product->qty}}</div>
                                <div class="times mx-1">&times;</div>
                                <div class="cd-price">$<span class="price mr-1">{{number_format($product->price,2, '.',
                                    ',')}}</span> {{$product->currency}}</div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </td>
                      <td width="10%" class="align-top">
                        @if(\Route::current()->getName() != 'checkout' && \Route::current()->getName() !=
                        'checkout-guest')
                        <button type="button" class="item-remove"></button>
                        @endif
                      </td>
                    </tr>
                  </table>
                </li>
                @endforeach
                @else
                <span class="empty">Your cart is empty</span>
                @endif
              </ul>
              @if(isset($calcCart) && $calcCart->coupon != "" )
              <div class="cart-coupon">
                <p>COUPON<span data-container="body" data-toggle="popover" data-html="true" data-trigger="hover"
                    data-placement="right"
                    data-content="<p><strong>Coupon Code:<br /> {{$calcCart->coupon->name}}</strong><br /></p><p><strong>Description:</strong></p><small>{{$calcCart->coupon->details}}</small>"><i
                      class="fa fa-lg fa-info-circle" aria-hidden="true"></i></span><span
                    class="pull-right">{{$calcCart->coupon->name}}</span></p>
              </div>
              @endif
              @if(isset($calcCart))
              <div class="cart-total">
                <p>TOTAL <span class="total"> {{"$".number_format($calcCart->total,2, '.', ',')." CAD"}}</span></p>
              </div>
              @endif
              <a href="{{route('checkout')}}" class="checkout-btn">Checkout</a>
              <p class="go-to-cart"><a href="{{route('cart')}}">Go to cart</a></p>
            </div>
          </div> --}}
          @else
          {{-- <li class="m-0">
            <a href="{{ route('store') }}">Store</a>
          </li> --}}
          @endif
        </ul>
      </div>
    </div>
  </div>

  <nav data-scroll-header class="header navbar navbar-light navbar-full bg-faded navbar-default p-0">
    <div class="container-fluid h-100 mx-auto">
      <a class="navbar-brand mr-3" data-scrollTo href="{{route('home')}}"></a>
      <button class="navbar-toggler" type="button" data-toggle="offcanvas" data-target=".sidebar-nav"
        aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
        {{-- <div class="navicon"></div> --}}
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>

      <div class="navbar-toggleable-xs hidden-sm-down visible-md-up" id="navbar">
        <ul class="nav navbar-nav  pull-xs-none pull-lg-right pull-md-right pull-sm-right">
          <li class="nav-item active">
            <a class="nav-link" data-toggle="collapse" href="#solidworksMenu2" data-href="{{route('solidworks')}}"
              aria-expanded="false">Solidworks <div class="dropdown-arrow"></div></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#3dprinters"
              data-href="{{route('additive-solutions.all')}}" aria-expanded="false">3D Printers<div
                class="dropdown-arrow"></div></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#3dmetrology" aria-expanded="false">3D Metrology<div
                class="dropdown-arrow"></div></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#xr" aria-expanded="false">Immersive Display<div
                class="dropdown-arrow"></div></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#trainingMenu2" data-href="{{ route('training') }}"
              aria-expanded="false">Training <div class="dropdown-arrow"></div></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('education.index') }}" aria-expanded="false">Education <div
                class="dropdown-arrow"></div></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#partnerMenu2" data-href="{{route('partner-products')}}"
              aria-expanded="false">Partner Products <div class="dropdown-arrow"></div></a>
          </li>
        </ul>
      </div>
    </div>
    @if(Request::is('store/*') || Request::is('store'))
    @include('layouts.menu_store_browse')
    @endif
  </nav>
  <div class="collapse full-width-dropdown" id="solidworksMenu2">
    <div class="dropdown-content-box " style="padding-bottom:0;">
      <div class="container-fluid">
        <div class="d-flex py-4 w-100 justify-content-between align-items-start flex-wrap">
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <ul class="list-group" style="height:auto">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>3D Design
                Software</li>
              <li class="list-group-item"><a href="{{route('solidworks')}}">SOLIDWORKS</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-3dcad')}}">SOLIDWORKS Premium</a></li>
            </ul>
            <ul class="list-group mt-3" style="height:auto">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Machining</li>
              <li class="list-group-item"><a href="{{route('solidworks-cam')}}">SolidWorks CAM</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <ul class="list-group">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Design
                Validation</li>
              <li class="list-group-item"><a href="{{route('solidworks-simulation')}}">Simulation</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-simulation-flowSimulation')}}">Flow
                  Simulation</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-simulation-plastics')}}">Plastics</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-simulation-sustainability')}}">Sustainabilty</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <ul class="list-group">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Data Management</li>
              <li class="list-group-item"><a href="{{route('solidworks-dataManagement')}}">PDM</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-manage')}}">Manage</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-exalead')}}">ExaLead OnePart</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <ul class="list-group">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Electrical /
                Electronics</li>
              <li class="list-group-item"><a href="{{route('solidworks-Electrical-electrical')}}">Electrical</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-Electrical-pcb')}}">PCB</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-Electrical-pcbConnector')}}">PCB Connector</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <ul class="list-group">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Technical
                Communication</li>
              <li class="list-group-item"><a href="{{route('solidworks-technical-composer')}}">Composer</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-technical-modelBasedDefinition')}}">Model Based
                  Definition</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-technical-inspection')}}">Inspection</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-visualize')}}">Visualize</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <ul class="list-group h-auto">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Other Products
              </li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-draftSight')}}">DraftSight</a></li>
              <li class="list-group-item"><a href="{{route('3dconnexion')}}">3DConnexion</a></li>
            </ul>
            <ul class="list-group h-auto">
              <li class="list-group-item list-group-title"><a href="{{route('solidworks.3dexperience.platform')}}"><i class="fas fa-chevron-right fa-xs mr-3"></i>3DExperience
                Platform</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-industrialDesigner')}}">Industrial
                  Designer</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-conceptualDesigner')}}">Conceptual
                  Designer</a></li>
              <li class="list-group-item"><a href="{{route('solidworks.3dexperience.startups')}}">3DEXPERIENCE Works for Startups</a></li>
              <li class="list-group-item"><a href="{{route('solidworks.3dexperience.design')}}">Design</a>
              </li>
              <li class="list-group-item"><a href="{{route('solidworks.3dexperience.simulate')}}">Simulate</a>
              </li>
              <li class="list-group-item"><a href="{{route('solidworks.3dexperience.manage')}}">Manage</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
            <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
              <ul class="list-group h-auto">
                <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>eCommerce
                </li>
                <li class="list-group-item"><a href="{{route('solidworks-sell')}}">SolidWorks Sell</a></li>
                <li class="list-group-item"><a href="{{route('driveWorks')}}">DriveWorks</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
          <ul class="list-group m-0 border-0 p-0 mt-2">
            @if(\App\Promotion::where('product_family',\App\ProductFamily::where('name','SolidWorks')->pluck('id'))->active()->count()
            > 0)
            <li class="list-group-item list-group-title text-center m-0 p-0">
              <a href="{{route('promotions','solidworks')}}" class="p-3 w-100">SOLIDWORKS PROMOTIONS</a>
            </li>
            @endif
            <li class="list-group-item list-group-title text-center m-0 p-0">
              <a href="{{route('subscription-services')}}" class="p-3 w-100">SUBSCRIPTION SERVICES</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="collapse full-width-dropdown" id="3dmetrology">
    <div class="dropdown-content-box ">
      <div class="container">
        <ul class="list-group list-center">
          <li class="list-group-item list-group-title d-inline"><i class="fas fa-chevron-right fa-xs mr-3"></i>3D
            METROLOGY:</li>
          <li class="list-group-item"><a href="{{route('gom.index')}}">GOM</a></li>
          <li class="list-group-item"><a href="{{route('3d-metrology-services')}}">SERVICES</a></li>
          <li class="list-group-item"><a href="{{ route('3d-metrology-training') }}">TRAINING</a></li>
          @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','gom')->first()->id)->active()->count()
          > 0)
          <li class="list-group-item">
            <a href="{{route('promotions','gom')}}">PROMOTIONS</a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
  <div class="collapse full-width-dropdown" id="3dprinters">
    <div class="dropdown-content-box pb-0 h-100">
      <div class="container-fluid">
        <div class="d-flex py-4 w-100 justify-content-between align-items-start">
          <div class="d-flex flex-row justify-content-between w-100 flex-wrap flex-md-nowrap">
            <ul class="list-group w-100">
              <a href="{{route('markforged')}}" style="color:white">
                <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Markforged
                </li>
              </a>
              <li class="list-group-item"><a href="{{route('metal-series')}}">Metal X</a></li>
              <li class="list-group-item"><a href="{{route('industrial-series')}}">Industrial Series</a></li>
              <li class="list-group-item"><a href="{{route('desktop-series')}}">Desktop Series</a></li>
              @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','markforged')->first()->id)->active()->count()
              > 0)
              <li class="list-group-item">
                <a href="{{route('promotions','markforged')}}">PROMOTIONS</a>
              </li>
              @endif
            </ul>
            <ul class="list-group w-100">
              <a href="{{route('bigrep')}}" style="color:white">
                <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>BigRep</li>
              </a>
              <li class="list-group-item"><a href="{{route('bigrep-one')}}">BigRep One</a></li>
              <li class="list-group-item"><a href="{{route('bigrep-studio-g2')}}">BigRep Studio G2</a></li>
              <li class="list-group-item"><a href="{{route('bigrep-pro')}}">BigRep PRO</a></li>
              <li class="list-group-item"><a href="{{route('bigrep-edge')}}">BigRep EDGE</a></li>
            </ul>
            {{-- </div>
          <div class="d-flex flex-row justify-content-between w-100 flex-wrap flex-md-nowrap"> --}}
            <ul class="list-group w-100">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>HP</li>
              <li class="list-group-item"><a href="{{route('jet-fusion-500-300-series')}}">HP Jet Fusion 500/300
                  Series</a></li>
              <li class="list-group-item"><a href="{{route('jet-fusion-4200')}}">HP Jet Fusion 4200</a></li>
              <li class="list-group-item"><a href="{{route('jet-fusion-5200-series')}}">HP Jet Fusion 5200 Series</a>
              </li>
              <li class="list-group-item"><a href="{{route('hp-metal-jet')}}">HP Metal Jet <small>(Coming
                    Soon)</small></a></li>
              <li class="list-group-item"><a href="{{route('materialise')}}">Materialise Magics</a></li>
              @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','hp')->first()->id)->active()->count()
              > 0)
              <li class="list-group-item">
                <a href="{{route('promotions','hp')}}">PROMOTIONS</a>
              </li>
              @endif
            </ul>
            <ul class="list-group w-100">
              <a href="{{route('formlabs')}}" style="color:white">
                <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Formlabs
                </li>
              </a>
              <li class="list-group-item"><a href="{{ route('formlabs-form3') }}">Form 3</a></li>
              <li class="list-group-item"><a href="{{ route('formlabs-form3L') }}">Form 3L</a></li>
              <li class="list-group-item"><a href="{{ route('formlabs-form2') }}">Form 2</a></li>
              <li class="list-group-item"><a href="{{ route('formlabs-fuse1') }}">Fuse 1</a></li>
              {{-- <li class="list-group-item"><a href="#" style="color: #8bb1da;">Software</a></li> --}}
              @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','formlabs')->first()->id)->active()->count()
              > 0)
              <li class="list-group-item">
                <a href="{{route('promotions','formlabs')}}">PROMOTIONS</a>
              </li>
              @endif
            </ul>
            {{-- </div>
          <div class="d-flex flex-row justify-content-between w-100 flex-wrap flex-md-nowrap"> --}}
            <ul class="list-group w-100">
              <a href="{{route('ultimaker')}}" style="color:white">
                <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Ultimaker
                </li>
              </a>
              <li class="list-group-item"><a href="{{route('ultimaker-original')}}">Ultimaker Original+</a></li>
              <li class="list-group-item"><a href="{{route('ultimaker-2')}}">Ultimaker 2+</a></li>
              <li class="list-group-item"><a href="{{route('ultimaker-s5')}}">Ultimaker S5</a></li>
              <li class="list-group-item"><a href="{{route('ultimaker-cura')}}">Ultimaker Cura Software & App</a></li>
              @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','ultimaker')->first()->id)->active()->count()
              > 0)
              <li class="list-group-item">
                <a href="{{route('promotions','ultimaker')}}">PROMOTIONS</a>
              </li>
              @endif
            </ul>
            <ul class="list-group w-100">
              <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Nano Dimension
              </li>
              <li class="list-group-item"><a href="{{route('dragonfly-ldm')}}">DragonFly LDM</a></li>
              @if(\App\Promotion::where('product_family',\App\ProductFamily::where('slug','nano-dimension')->first()->id)->active()->count()
              > 0)
              <li class="list-group-item">
                <a href="{{route('promotions','nano-dimension')}}">PROMOTIONS</a>
              </li>
              @endif
            </ul>
            <ul class="list-group w-100">
              <a href="{{route('intamsys.index')}}">
                <li class="list-group-item list-group-title"><i class="fas fa-chevron-right fa-xs mr-3"></i>Intamsys
                </li>
              </a>
              <li class="list-group-item"><a href="{{route('intamsys.funmat.ht')}}">Funmat HT</a></li>
              <li class="list-group-item"><a href="{{route('intamsys.funmat.pro410')}}">Funmat PRO 410</a></li>
              <li class="list-group-item"><a href="{{route('intamsys.funmat.pro610ht')}}">Funmat PRO 610 HT</a></li>
              @if(\App\Promotion::where('product_family',$promoIntamSlug =
              \App\ProductFamily::where('slug','intamsys')->first() != null ? $promoIntamSlug->id :
              "")->active()->count() > 0)
              <li class="list-group-item">
                <a href="{{route('promotions','intamsys')}}">PROMOTIONS</a>
              </li>
              @endif
            </ul>
          </div>
        </div>
        <div class="w-100">
          <ul class="list-group m-0 p-0 border-0 mt-2">
            <li class="list-group-item list-group-title text-center p-0 m-0">
              <a href="{{route('customer-experience-center')}}" class="p-3 w-100"><i
                  class="align-middle mr-4 fab fa-leanpub h4" aria-hidden="true"></i>Visit our Customer Experience
                Centre</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="collapse full-width-dropdown" id="xr">
    <div class="dropdown-content-box pb-0">
      <div class="container">
        <div class="d-flex justify-content-center d-block mx-auto">
          <ul class="list-group list-center w-auto d-block mx-auto">
            <li class="list-group-item d-inline-block"><a href="{{route('xr.index')}}">Extended Reality (XR)
                Services</a></li>
            <li class="list-group-item d-inline-block"><a href="{{route('xr-virtalis')}}">Virtalis</a></li>
            {{-- <li class="list-group-item d-inline-block border-0"><a href="{{route('meta')}}">Meta Viewer</a></li>
            --}}
          </ul>
        </div>
      </div>
      <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
        <ul class="list-group m-0 p-0 border-0 mt-2">
          <li class="list-group-item list-group-title text-center p-0 m-0">
            <a href="{{route('customer-experience-center')}}" class="p-3 w-100"><i
                class="align-middle mr-4 fab fa-leanpub h4" aria-hidden="true"></i>Visit our Customer Experience
              Centre</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="collapse full-width-dropdown" id="partnerMenu2">
    <div class="dropdown-content-box" style="max-height:600px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-md-down"></div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-md-down"></div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <ul class="list-group">
              <li class="list-group-item"><a href="{{route('builtWorks')}}">BuiltWorks &amp; The Steel Detailer
                  (TSD)</a></li>
              {{-- <li class="list-group-item"><a href="{{route('pcbWorks')}}">PCBWorks</a></li> --}}
              <li class="list-group-item"><a href="{{route('camWorks')}}">CAMWorks</a></li>
              <li class="list-group-item"><a href="{{route('dataKit')}}">Datakit CrossCAD Translators</a></li>
              <li class="list-group-item"><a href="{{route('driveWorks')}}">DriveWorks</a></li>
              <li class="list-group-item"><a href="{{route('exactFlat')}}">ExactFlat</a></li>
              <li class="list-group-item"><a href="{{route('hdrlightstudio')}}">HDR LIGHT STUDIO</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <ul class="list-group">
              <li class="list-group-item"><a href="{{route('keyShot')}}">KEYSHOT</a></li>
              <li class="list-group-item"><a href="{{route('logoPress')}}">LogoPress3</a></li>
              <li class="list-group-item"><a href="{{route('swood')}}">SWOOD</a></li>
              <li class="list-group-item"><a href="{{route('optisWork')}}">OptisWork</a></li>
              <li class="list-group-item"><a href="{{route('visualComponents')}}">Visual Components</a></li>
              <li class="list-group-item"><a href="{{route('simerics')}}">Simerics</a></li>
              <li class="list-group-item"><a href="{{route('bimdex')}}">BIMDeX</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="collapse full-width-dropdown" id="trainingMenu2">
    <div class="dropdown-content-box ">
      <div class="container">
        <ul class="list-group list-center">
          <li class="list-group-item list-group-title d-inline"><i class="fas fa-chevron-right fa-xs mr-3"></i><a
              class="d-inline" href="{{route('training')}}">TRAINING:</a></li>
          {{-- <li class="list-group-item"><a href="{{route('training-altium')}}">Altium</a></li> --}}
          <li class="list-group-item"><a href="{{route('training-solidworks')}}">SOLIDWORKS</a></li>
          <li class="list-group-item"><a href="{{route('3d-metrology-training')}}">GOM</a></li>
          <li class="list-group-item"><a href="{{route('training-vr-ar')}}">VR & AR</a></li>
          <li class="list-group-item"><a href="{{route('training-resources')}}">Resources</a></li>
          <li class="list-group-item"><a href="{{route('calendar')}}">Calendar</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
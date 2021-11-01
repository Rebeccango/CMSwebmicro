@push("after-scripts")
<script>
  var scrollbarInstances = $(".sidebar-nav-scroll").overlayScrollbars({
    resize: "none",
    autoUpdate: true
  });
</script>
@endpush

<div class="sidebar-offcanvas right" id="sidebar" role="navigation">
  <div class="sidebar-menu">
    <ul class="nav h-100 sidebar-nav-scroll" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route ('solidworks-otherProducts-draftSight').'#buyDraftSight'  }}">BUY DRAFTSIGHT
          NOW</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" data-toggle="collapse" href="#solidworksMenu" aria-expanded="false">Solidworks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#printers" aria-expanded="false">3D Printers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#metrology" aria-expanded="false">3D Metrology</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('xr.index')}}">Extended Reality Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#partnerMenu" aria-expanded="false">Partner
          Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('customer-experience-center')}}">Customer Experience
          Centre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('subscription-services')}}">Subscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#training" aria-expanded="false">Training</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('education.index')}}">Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('blog')}}">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('events.index')}}">Events</a>
      </li>
    </ul>
  </div>
  <div class="collapse sidebar-submenu" id="solidworksMenu">
    <div class="d-flex flex-column w-100 h-100">
      <a class="return w-100 d-flex m-0 p-4 justify-content-start align-items-center" data-toggle="collapse"
        href="#solidworksMenu"><i class="fas fa-long-arrow-alt-left mr-3"></i><span class="h5 m-0">SOLIDWORKS</span></a>
      <div class="dropdown-content-box sidebar-nav-scroll w-100 h-100 pb-5">
        <div class="mr-2">
          <div>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('solidworks')}}">3D CAD</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-3dcad')}}">SOLIDWORKS 3D CAD</a></li>
            </ul>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item"><a href="{{route('solidworks-simulation')}}">Simulation</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-simulation-flowSimulation')}}">Flow
                  Simulation</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-simulation-plastics')}}">Plastics</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-simulation-sustainability')}}">Sustainabilty</a>
              </li>
              <li class="list-group-item"><a href="{{route('solidworks-promotions')}}">Promotions</a></li>
            </ul>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item"><a href="{{route('solidworks-dataManagement')}}">PDM</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-manage')}}">Manage</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-exalead')}}">ExaLead OnePart</a></li>
            </ul>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a
                  href="{{route('solidworks.3dexperience.platform')}}">3DEXPERIENCE Platform</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-industrialDesigner')}}">Industrial
                  Designer</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-conceptualDesigner')}}">Conceptual
                  Designer</a></li>
              <li class="list-group-item"><a href="{{route('solidworks.3dexperience.startups')}}">3DEXPERIENCE Works for
                  Startups</a>
              </li>
              <li class="list-group-item"><a href="{{route('solidworks.3dexperience.design.index')}}">Design</a></li>
              <li class="list-group-item"><a href="{{route('solidworks.3dexperience.simulate')}}">Simulate</a></li>
              <li class="list-group-item"><a href="{{route('solidworks.3dexperience.manage')}}">Manage</a></li>
            </ul>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a
                  href="{{route('solidworks-Electrical-electrical')}}">Electrical / Electronics</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-Electrical-electrical')}}">Electrical</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-Electrical-pcb')}}">PCB</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-Electrical-pcbConnector')}}">PCB Connector</a>
              </li>
            </ul>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a
                  href="{{route('solidworks-technical-composer')}}">Technical Communication</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-technical-composer')}}">Composer</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-technical-modelBasedDefinition')}}">Model Based
                  Definition</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-technical-inspection')}}">Inspection</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-visualize')}}">Visualize</a></li>
            </ul>
          </div>
          <div>
            <ul class="list-group">
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-industrialDesigner')}}">Industrial
                  Designer</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-conceptualDesigner')}}">Conceptual
                  Designer</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-otherProducts-draftSight')}}">DraftSight</a></li>
              <li class="list-group-item"><a href="{{route('3dconnexion')}}">3DConnexion</a></li>
            </ul>
          </div>
          <div>
            <ul class="list-group">
              {{-- <li class="list-group-item list-group-title"><a href="{{route('solidworks-sell')}}">eCommerce</a></li>
              <li class="list-group-item"><a href="{{route('solidworks-sell')}}">SolidWorks Sell</a></li> --}}
              <li class="list-group-item"><a href="{{route('driveWorks')}}">DriveWorks</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="collapse sidebar-submenu" id="metrology">
    <div class="d-flex flex-column w-100 h-100">
      <a class="return w-100 d-flex m-0 p-4 justify-content-start align-items-center" data-toggle="collapse"
        href="#metrology"><i class="fas fa-long-arrow-alt-left mr-3"></i><span class="h5 m-0">3D
          Metrology</span></a>
      <div class="dropdown-content-box sidebar-nav-scroll w-100 h-100">
        <div class="mr-2">
          <div>
            <ul class="list-group">
              <li class="list-group-item"><a href="{{route('3d-scanning.index')}}">GOM</a></li>
              <li class="list-group-item"><a href="{{route('3d-scanning.services')}}">Services</a></li>
              <li class="list-group-item"><a href="{{route('3d-scanning.training')}}">Training</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="collapse sidebar-submenu" id="printers">
    <div class="d-flex flex-column w-100 h-100">
      <a class="return w-100 d-flex m-0 p-4 justify-content-start align-items-center" data-toggle="collapse"
        href="#printers"><i class="fas fa-long-arrow-alt-left mr-3"></i><span class="h5 m-0">3D
          Printers</span></a>
      <div class="dropdown-content-box sidebar-nav-scroll w-100 h-100 pb-5">
        <div class="mr-2">
          <div>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('markforged')}}">Markforged 3D Printers</a>
              </li>
              <li class="list-group-item"><a href="{{route('desktop-series')}}">Desktop Series</a></li>
              <li class="list-group-item"><a href="{{route('industrial-series')}}">Industrial Series</a></li>
              <li class="list-group-item"><a href="{{route('metal-series')}}">Metal Series</a></li>
              <li class="list-group-item"><a href="{{route('markforged-promotions')}}"> Promotions</a></li>
            </ul>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('nano-dimension')}}">Nano Dimension 3D
                  Printers</a></li>
              <li class="list-group-item"><a href="{{route('dragonfly-ldm')}}">DragonFly LDM</a></li>
            </ul>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('hp')}}">HP 3D Printers</a></li>
              <li class="list-group-item"><a href="{{route('jet-fusion-500-300-series')}}">HP Jet Fusion 500/300
                  Series</a></li>
              <li class="list-group-item"><a href="{{route('jet-fusion-4200')}}">HP Jet Fusion 4200</a></li>
              <li class="list-group-item"><a href="{{route('jet-fusion-5200-series')}}">HP Jet Fusion 5200 Series</a>
              </li>
              <li class="list-group-item"><a href="{{route('hp-metal-jet')}}">HP Metal Jet (Coming Soon)</a></li>
              <li class="list-group-item"><a href="{{route('materialise')}}">Materialise Magics</a></li>
            </ul>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('ultimaker')}}">Ultimaker</a></li>
              <li class="list-group-item"><a href="{{route('ultimaker-original')}}">Ultimaker Original+</a></li>
              <li class="list-group-item"><a href="{{route('ultimaker-2')}}">Ultimaker 2+</a></li>
              <li class="list-group-item"><a href="{{route('ultimaker-s5')}}">Ultimaker S5</a></li>
              <li class="list-group-item"><a href="{{route('ultimaker-cura')}}">Ultimaker Cura Software & App</a></li>
            </ul>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('bigrep')}}">BigRep</a></li>
              <li class="list-group-item"><a href="{{route('bigrep-one')}}">BigRep One</a></li>
              <li class="list-group-item"><a href="{{route('bigrep-studio-g2')}}">BigRep Studio</a></li>
              <li class="list-group-item"><a href="{{route('bigrep-pro')}}">BigRep PRO</a></li>
              <li class="list-group-item"><a href="{{route('bigrep-edge')}}">BigRep EDGE</a></li>
            </ul>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('formlabs')}}">Formlabs</a></li>
              <li class="list-group-item"><a href="{{ route('formlabs-form3') }}">Form 3</a></li>
              <li class="list-group-item"><a href="{{ route('formlabs-form3L') }}">Form 3L</a></li>
              {{-- <li class="list-group-item"><a href="{{ route('formlabs-form2') }}">Form 2</a></li> --}}
              <li class="list-group-item"><a href="{{ route('formlabs-fuse1') }}">Fuse 1</a></li>
              <li class="list-group-item"><a href="#" style="color: #8bb1da;">Software</a></li>
            </ul>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('intamsys.index')}}">Intamsys</a></li>
              <li class="list-group-item"><a href="{{ route('intamsys.funmat.ht') }}">Funmat HT</a></li>
              <li class="list-group-item"><a href="{{ route('intamsys.funmat.pro410') }}">Funmat Pro 410</a></li>
              <li class="list-group-item"><a href="{{ route('intamsys.funmat.pro610ht') }}">Funmat Pro 610 HT</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="collapse sidebar-submenu" id="training">
    <div class="d-flex flex-column w-100 h-100">
      <a class="return w-100 d-flex m-0 p-4 justify-content-start align-items-center" data-toggle="collapse"
        href="#training"><i class="fas fa-long-arrow-alt-left mr-3"></i><span class="h5 m-0">Training</span></a>
      <div class="dropdown-content-box sidebar-nav-scroll w-100 h-100">
        <div class="mr-2">
          <div>
            <ul class="list-group">
              <li class="list-group-item list-group-title"><a href="{{route('training')}}">Training</a></li>
              <li class="list-group-item"><a href="{{route('training-solidworks')}}">SOLIDWORKS Training</a></li>
              <li class="list-group-item"><a href="{{route('3d-metrology-training')}}">GOM Training</a></li>
              <li class="list-group-item"><a href="{{route('training-vr-ar')}}">VR & AR Training</a></li>
              <li class="list-group-item"><a href="{{route('training-resources')}}">Training Resources</a></li>
              <li class="list-group-item"><a href="{{route('calendar')}}">Training Calendar</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="collapse sidebar-submenu" id="partnerMenu">
    <div class="d-flex flex-column w-100 h-100">
      <a class="return w-100 d-flex m-0 p-4 justify-content-start align-items-center" data-toggle="collapse"
        href="#partnerMenu"><i class="fas fa-long-arrow-alt-left mr-3"></i><span class="h5 m-0">PARTNER
          PRODUCTS</span></a>
      <div class="dropdown-content-box sidebar-nav-scroll w-100 h-100 pb-5">
        <div class="mr-2">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="list-group">
              <li class="list-group-item"><a href="{{route('builtWorks')}}">BuiltWorks &amp; The Steel Detailer
                  (TSD)</a></li>
              {{-- <li class="list-group-item"><a href="{{route('pcbWorks')}}">PCBWorks</a></li> --}}
              <li class="list-group-item"><a href="{{route('camWorks')}}">CAMWorks</a></li>
              <li class="list-group-item"><a href="{{route('dataKit')}}">Datakit CrossCAD Translators</a></li>
              <li class="list-group-item"><a href="{{route('exactFlat')}}">ExactFlat</a></li>
              <li class="list-group-item"><a href="{{route('hdrlightstudio')}}">HDR LIGHT STUDIO</a></li>
            </ul>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="list-group">
              <li class="list-group-item"><a href="{{route('keyShot')}}">KEYSHOT</a></li>
              <li class="list-group-item"><a href="{{route('logoPress')}}">LogoPress3</a></li>
              <li class="list-group-item"><a href="{{route('swood.index')}}">SWOOD</a></li>
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
</div>
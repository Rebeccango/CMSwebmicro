<template>
  <div v-on-clickaway="clickAway" id="navigation">
    <!-- :class="{'scrolled-down': !scrolledUp && scrollPosition > 100 && !megaDropdown}" -->

    <div class="navbar-topbar">
      <div
        class="container-fluid d-flex p-0 h-100 justify-content-between align-items-center"
      >
        <div class="w-auto">
          <ul
            class="d-flex justify-content-start align-items-center list-unstyled"
          >
            <li class="nav-item">
              <button
                @click.prevent="toggleLanguage"
                data-toggle="tooltip"
                data-placement="auto"
                :title="
                  language == 'en' ? 'Switch to French' : 'Switch to English'
                "
                class="btn btn-primary p-1 border btn-sm language-selector"
              >
                {{ language == "en" ? "EN" : "FR" }}
              </button>
            </li>
            <li class="nav-item">
              <span itemprop="telephone">
                <a href="tel:+14162130533">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span
                    class="d-none d-lg-inline ml-2"
                    data-toggle="tooltip"
                    data-placement="auto"
                    title="416-213-0533"
                    >+1 416-213-0533</span
                  >
                </a>
              </span>
            </li>
            <li class="nav-item">
              <a href="mailto:info@cadmicro.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span
                  class="d-none d-lg-inline ml-2"
                  data-toggle="tooltip"
                  data-placement="auto"
                  title="info@cadmicro.com"
                  >info@cadmicro.com</span
                >
              </a>
            </li>
          </ul>
        </div>
        <div class="d-flex align-items-center justify-content-center">
          <a
            class="btn btn-sm btn-light btn-rounded shadow-sm d-none d-xs-block d-sm-block"
            style="font-weight: 600; line-height: 1"
            :href="
              route('solidworks-otherProducts-draftSight') + '#buyDraftSight'
            "
            >BUY DRAFTSIGHT NOW</a
          >
        </div>
        <div class="w-auto text-right p-0" ref="test">
          <ul
            class="d-flex justify-content-start align-items-center list-unstyled"
          >
            <li class="nav-item">
              <a :href="route('calendar')">
                <i
                  class="fas fa-calendar-alt d-inline d-md-none"
                  aria-hidden="true"
                ></i>
                <span class="d-none d-md-inline">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <button
                  type="button"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                >
                  Support
                </button>
                <div
                  class="dropdown-menu dropdown-menu-right support-button-dropdown"
                >
                  <a class="dropdown-item" href="mailto:support@cadmicro.com">
                    <i class="fas fa-headset mr-3"></i>support@cadmicro.com
                  </a>
                  <a class="dropdown-item" href="tel:1-416-213-0533">
                    <i class="fa fa-phone mr-3"></i>1-416-213-0533 and Dial 1
                  </a>
                  <a class="dropdown-item" href="https://portal.cadmicro.com/">
                    <i class="fas fa-external-link-square-alt mr-3"></i>Support
                    Portal
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a :href="route('blog')">Blog</a>
            </li>
            <li class="nav-item">
              <a :href="route('events.index')">Events</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="my-1">
          <a class="navbar-brand" :href="route('home')">Navbar</a>
        </div>
        <button
          class="hamburger hamburger--squeeze absolute right-0 d-flex d-lg-none justify-content-center align-items-center"
          :class="{ 'is-active': navbarOpen }"
          type="button"
          aria-label="Menu"
          aria-controls="navigation"
          @click="toggleNavbar"
        >
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div
          class="collapse navbar-collapse"
          :class="{ show: navbarOpen }"
          id="navbarContent"
        >
          <div class="navbar-heading">
            <!-- <button
              class="hamburger hamburger--squeeze"
              :class="{'is-active': navbarOpen}"
              type="button"
              aria-label="Menu"
              aria-controls="navigation"
              @click="toggleNavbar"
            >
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>-->
          </div>
          <div
            class="navbar-container w-100 d-flex"
            :style="{ 'max-height': megaDropdownHeight + 'px' }"
          >
            <ul class="navbar-nav w-100 d-flex">
              <li class="nav-item" :class="{ active: isActive('solidworks') }">
                <div class="nav-link" @click.prevent="setActive('solidworks')">
                  SolidWorks
                </div>
              </li>
              <li class="nav-item" :class="{ active: isActive('3d-printers') }">
                <div class="nav-link" @click.prevent="setActive('3d-printers')">
                  3D Printers
                </div>
              </li>
              <li class="nav-item" :class="{ active: isActive('3d-scanning') }">
                <div class="nav-link" @click.prevent="setActive('3d-scanning')">
                  3D Scanning
                </div>
              </li>
              <li class="nav-item" :class="{ active: isActive('xr') }">
                <div class="nav-link" @click.prevent="setActive('xr')">XR</div>
              </li>
              <li class="nav-item" :class="{ active: isActive('training') }">
                <div class="nav-link" @click.prevent="setActive('training')">
                  Training
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" :href="route('education.index')"
                  >Education</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" :href="route('resources.index')"
                  >Resources</a
                >
              </li>
              <li class="nav-item d-none d-lg-flex" style="flex: 0 0 auto">
                <a
                  href="https://shop.cadmicro.com"
                  class="btn btn-primary btn-rounded text-light shadow-sm"
                >
                  <i class="fas fa-shopping-cart mr-2"></i>Shop
                </a>
              </li>
              <li class="nav-item nav-link d-flex d-lg-none">
                <a href="https://shop.cadmicro.com">Shop</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <mega-dropdown :height="megaDropdownHeight" ref="megaDropdown">
        <div class="mega-dropdown-container p-0 position-relative">
          <div
            class="mega-dropdown-tab"
            :class="{ 'active show': isActive('solidworks') }"
          >
            <div class="mega-dropdown-heading align-items-center">
              <div class="mega-dropdown-title">
                <a :href="route('solidworks')">SolidWorks</a>
              </div>

              <div
                class="alert alert-primary mb-0 mr-3 d-none d-lg-flex rounded-lg py-1 px-2"
                style="text-transform: initial"
              >
                <i class="fas fa-exclamation-triangle pr-2 pt-1"></i>
                <div>
                  If you are unable to access your SOLIDWORKS license(s) due to
                  COVID, please contact us so that we can arrange temporary
                  licenses for you! Email us at
                  <a href="mailto:support@cadmicro.com">support@cadmicro.com</a>
                  for more information.
                </div>
              </div>

              <div class="mega-close" @click.prevent="close">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('solidworks.3dexperience.platform')"
                    >3DEXPERIENCE Platform</a
                  >
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('solidworks.3dexperience.design.index')"
                      >Design</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks.3dexperience.simulate.index')"
                      >Simulate</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks.3dexperience.manage')"
                      >Manage</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks.3dexperience.startups')"
                      >3DEXPERIENCE Works for Startups</a
                    >
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">3D Design Software</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('solidworks')">Solidworks</a>
                  </li>
                  <li>
                    <a :href="route('solidworks-3dcad')">Solidworks Premium</a>
                  </li>
                  <li>
                    <a :href="route('solidworks-simulation-plastics')"
                      >Plastics</a
                    >
                  </li>
                  <!-- <li>
                    <a :href="route('solidworks-simulation-sustainability')">Sustainability</a>
                  </li> -->
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">Machining</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('solidworks-cam')">SolidWorks CAM</a>
                  </li>
                  <li>
                    <a :href="route('camWorks')">CAMWorks</a>
                  </li>
                  <li>
                    <a :href="route('swood.index')">SWOOD</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">Design Validation</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('solidworks-simulation')">Simulation</a>
                  </li>
                  <li>
                    <a :href="route('solidworks-simulation-flowSimulation')"
                      >Flow Simulation</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks.ems')"
                      >Electromagnetic Simulation</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks.hfworks')"
                      >High Frequency Simulation</a
                    >
                  </li>
                  <li>
                    <a :href="route('simerics')">Simerics</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">Data Management</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('solidworks-dataManagement')">PDM</a>
                  </li>
                  <li>
                    <a :href="route('solidworks-manage')">Manage</a>
                  </li>
                  <li>
                    <a :href="route('solidworks-exalead')">ExaLead OnePart</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">Electrical</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('solidworks-Electrical-electrical')"
                      >Electrical</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks-Electrical-pcb')"
                      >Electronics &amp; PCB</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks-Electrical-pcbConnector')"
                      >PCB Connector</a
                    >
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">Technical Communication</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('solidworks-technical-composer')"
                      >Composer</a
                    >
                  </li>
                  <li>
                    <a
                      :href="route('solidworks-technical-modelBasedDefinition')"
                      >Model Based Definition</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks-technical-inspection')"
                      >Inspection</a
                    >
                  </li>
                  <li>
                    <a :href="route('solidworks-otherProducts-visualize')"
                      >Visualize</a
                    >
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">eCommerce</div>
                <ul class="list-unstyled list-group">
                  <!-- <li>
                    <a :href="route('solidworks-sell')">SOLIDWORKS Sell</a>
                  </li> -->
                  <li>
                    <a :href="route('driveWorks')">DriveWorks</a>
                  </li>
                </ul>
              </div>
              <div
                class="col-lg-4 py-1"
                v-if="promotionOfType('solidworks').length"
              >
                <div class="heading">
                  <a :href="route('promotions', 'solidworks')">Promotions</a>
                </div>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('partner-products')">Other Products</a>
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('solidworks-otherProducts-draftSight')"
                      >DraftSight</a
                    >
                  </li>
                  <li>
                    <a :href="route('3dconnexion')">3DConnexion</a>
                  </li>
                  <li>
                    <a :href="route('team-eda')">TeamEDA</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-8 py-3">
                <div class="heading">
                  <a :href="route('partner-products')">Partner Products</a>
                </div>
                <div class="row px-3">
                  <div class="col-lg-6 p-0">
                    <ul class="list-unstyled list-group">
                      <li>
                        <a :href="route('builtWorks')"
                          >BuiltWorks &amp; The Steel Detailer (TSD)</a
                        >
                      </li>
                      <li>
                        <a :href="route('dataKit')"
                          >Datakit CrossCAD Translators</a
                        >
                      </li>
                      <li>
                        <a :href="route('driveWorks')">DriveWorks</a>
                      </li>
                      <li>
                        <a :href="route('exactFlat')">ExactFlat</a>
                      </li>
                      <li>
                        <a :href="route('bimdex')">BIMDeX</a>
                      </li>
                      <li>
                        <a
                          :href="route('solidworks.design-software.solidsteel')"
                          >SolidSteel Parametric</a
                        >
                      </li>
                      <li>
                        <a :href="route('smap3d')">Smap3D</a>
                      </li>
                      <li v-if="promotionOfType('partner-products').length">
                        <a :href="route('promotions', 'partner-products')"
                          >Promotions</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-6 p-0">
                    <ul class="list-unstyled list-group">
                      <li>
                        <a :href="route('logoPress')">LogoPress3</a>
                      </li>
                      <li>
                        <a :href="route('visualComponents')"
                          >Visual Components</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mega-dropdown-tab"
            :class="{ 'active show': isActive('3d-printers') }"
          >
            <div class="mega-dropdown-heading">
              <div class="mega-dropdown-title">3D Printers</div>
              <div class="mega-close" @click.prevent="close">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('markforged')">Markforged</a>
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('metal-series')">Metal X</a>
                  </li>
                  <li>
                    <a :href="route('industrial-series')">Industrial Series</a>
                  </li>
                  <li>
                    <a :href="route('desktop-series')">Desktop Series</a>
                  </li>
                  <li v-if="promotionOfType('markforged').length">
                    <a :href="route('promotions', 'markforged')">Promotions</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('hp')">HP</a>
                </div>
                <ul class="list-unstyled list-group">
                  <!-- <li>
                    <a :href="route('jet-fusion-500-300-series')"
                      >HP Jet Fusion 500/300 Series</a
                    >
                  </li> -->
                  <li>
                    <a :href="route('jet-fusion-4200')">HP Jet Fusion 4200</a>
                  </li>
                  <li>
                    <a :href="route('jet-fusion-5200-series')"
                      >HP Jet Fusion 5200 Series</a
                    >
                  </li>
                  <li>
                    <a :href="route('hp-metal-jet')">HP Metal Jet</a>
                  </li>
                  <li>
                    <a :href="route('materialise')">Materialise Magics</a>
                  </li>
                  <li v-if="promotionOfType('hp').length">
                    <a :href="route('promotions', 'hp')">Promotions</a>
                  </li>
                </ul>
              </div>
							<div class="col-lg-4 py-1">
                <div class="heading">TRUMPF</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('trumpf.truprint')"
                      >TRUMPF TruPrint</a
                    >
                  </li>
                  <li>
                    <a :href="route('trumpf.trumark')">TRUMPF TruMark</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('formlabs')">Formlabs</a>
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('formlabs-form3')">Form 3</a>
                  </li>
                  <li>
                    <a :href="route('formlabs-form3L')">Form 3L</a>
                  </li>
                  <!-- <li>
                    <a :href="route('formlabs-form2')">Form 2</a>
                  </li> -->
                  <li>
                    <a :href="route('formlabs-fuse1')">Fuse 1</a>
                  </li>
                  <li v-if="promotionOfType('formlabs').length">
                    <a :href="route('promotions', 'formlabs')">Promotions</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('ultimaker')">Ultimaker</a>
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('ultimaker-s5')">Ultimaker S5</a>
                  </li>
                  <li>
                    <a :href="route('ultimaker-s3')">Ultimaker S3</a>
                  </li>
                  <li>
                    <a :href="route('ultimaker-2-plus-connect')"
                      >Ultimaker 2+ CONNECT</a
                    >
                  </li>
                  <li>
                    <a :href="route('ultimaker-essentials')"
                      >Ultimaker Essentials</a
                    >
                  </li>
                  <li>
                    <a :href="route('ultimaker-original')"
                      >Ultimaker Original+</a
                    >
                  </li>
                  <li>
                    <a :href="route('ultimaker-cura')"
                      >Ultimaker Cura Software &amp; App</a
                    >
                  </li>
                  <li v-if="promotionOfType('ultimaker').length">
                    <a :href="route('promotions', 'ultimaker')">Promotions</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('bigrep')">BigRep</a>
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('bigrep-one')">BigRep One</a>
                  </li>
                  <li>
                    <a :href="route('bigrep-studio-g2')">BigRep Studio G2</a>
                  </li>
                  <li>
                    <a :href="route('bigrep-pro')">BigRep PRO</a>
                  </li>
                  <!-- <li>
                    <a :href="route('bigrep-edge')">BigRep EDGE</a>
                  </li> -->
                  <li v-if="promotionOfType('bigrep').length">
                    <a :href="route('promotions', 'bigrep')">Promotions</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('intamsys.index')">Intamsys</a>
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('intamsys.funmat.ht')">Funmat HT</a>
                  </li>
                  <li>
                    <a :href="route('intamsys.funmat.pro410')"
                      >Funmat PRO 410</a
                    >
                  </li>
                  <li>
                    <a :href="route('intamsys.funmat.pro610ht')"
                      >Funmat PRO 610 HT</a
                    >
                  </li>
                  <li v-if="promotionOfType('intamsys').length">
                    <a :href="route('promotions', 'intamsys')">Promotions</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">Nano Dimension</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('dragonfly-ldm')">DragonFly LDM</a>
                  </li>
                  <li v-if="promotionOfType('nano-dimension').length">
                    <a :href="route('promotions', 'nano-dimension')"
                      >Promotions</a
                    >
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('dyemansion.index')">Dyemansion</a>
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('dyemansion.powershot-c')">Powershot C</a>
                  </li>
                  <li>
                    <a :href="route('dyemansion.powershot-s')">Powershot S</a>
                  </li>
                  <li>
                    <a :href="route('dyemansion.powerfuse-s')">Powerfuse S</a>
                  </li>
                  <li>
                    <a :href="route('dyemansion.dyemansion-dm60')">DM60</a>
                  </li>
                  <li v-if="promotionOfType('dyemansion').length">
                    <a :href="route('promotions', 'dyemansion')">Promotions</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-4 py-1">
                <div class="heading">Nexa3D</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('nexa3d.nxe400')">NXE 400</a>
                  </li>
                  <li>
                    <a :href="route('nexa3d.nxd200')">NXD 200</a>
                  </li>
                  <li v-if="promotionOfType('nexa3d').length">
                    <a :href="route('promotions', 'nexa3d')">Promotions</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('customer-experience-center')"
                    >Customer Experience Center</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div
            class="mega-dropdown-tab"
            :class="{ 'active show': isActive('3d-scanning') }"
          >
            <div class="mega-dropdown-heading">
              <div class="mega-dropdown-title">
                <a :href="route('3d-scanning.index')">3D Scanning</a>
              </div>
              <div class="mega-close" @click.prevent="close">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 py-1">
                <div class="heading">Hardware</div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('3d-scanning.hardware.gom-portable')"
                      >GOM Portable Solutions</a
                    >
                  </li>
                  <li>
                    <a :href="route('3d-scanning.hardware.gom-robot')"
                      >GOM Robot Solutions</a
                    >
                  </li>
                  <li>
                    <a :href="route('3d-scanning.hardware.zeiss-automated')"
                      >ZEISS Automated Solutions</a
                    >
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('3d-scanning.software.index')">Software</a>
                </div>
                <ul class="list-unstyled list-group">
                  <li>
                    <a :href="route('3d-scanning.software.gom-inspect-free')"
                      >GOM Inspect – Free</a
                    >
                  </li>
                  <li>
                    <a :href="route('3d-scanning.software.gom-inspect-pro')"
                      >GOM Inspect – Professional</a
                    >
                  </li>
                  <li>
                    <a
                      :href="
                        route('3d-scanning.software.geomagic-for-solidworks')
                      "
                      >GeoMagic for SOLIDWORKS</a
                    >
                  </li>
                  <li>
                    <a :href="route('3d-scanning.software.geomagic-design-x')"
                      >GeoMagic Design X</a
                    >
                  </li>
                  <li>
                    <a :href="route('3d-scanning.software.geomagic-control-x')"
                      >GeoMagic Control X</a
                    >
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 py-1" v-if="promotionOfType('gom').length">
                <div class="heading">
                  <a :href="route('promotions', 'gom')">Promotions</a>
                </div>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('3d-scanning.services')">Services</a>
                </div>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('3d-scanning.training')">Training</a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mega-dropdown-tab"
            :class="{ 'active show': isActive('xr') }"
          >
            <div class="mega-dropdown-heading">
              <div class="mega-dropdown-title">
                Extended Reality (VR &amp; AR)
              </div>
              <div class="mega-close" @click.prevent="close">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('xr.index')">Services</a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="mega-dropdown-tab"
            :class="{ 'active show': isActive('training') }"
          >
            <div class="mega-dropdown-heading">
              <div class="mega-dropdown-title">Training</div>
              <div class="mega-close" @click.prevent="close">
                <i class="fas fa-times"></i>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('training-solidworks')">Solidworks</a>
                </div>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('3d-scanning.training')">GOM</a>
                </div>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('training-vr-ar')">VR &amp; AR</a>
                </div>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('calendar')">Training Calendar</a>
                </div>
              </div>
              <div class="col-lg-4 py-1">
                <div class="heading">
                  <a :href="route('training-swood')">SWOOD</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </mega-dropdown>
    </nav>
  </div>
</template>

<script>
import MegaDropdown from "./MegaDropdown";
import { mixin as clickaway } from "vue-clickaway";
import { EventBus } from "../../app.js";

export default {
  mixins: [clickaway],
  props: {
    promotions: {
      type: Array,
    },
  },
  data() {
    return {
      scrollPosition: 0,
      scrolledUp: true,
      megaDropdownHeight: 220,
      megaDropdown: null,
      activeItem: "",
      navbarToggler: null,
      navbarOpen: false,
      language: "en",
    };
  },
  components: {
    MegaDropdown,
  },
  watch: {
    scrollPosition: function (newPos, oldPos) {
      if (newPos > oldPos) {
        this.scrolledUp = false;
      } else {
        this.scrolledUp = true;
      }
    },
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
    window.addEventListener("resize", this.handleResize);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
    window.removeEventListener("resize", this.handleResize);
  },
  mounted() {
    this.$nextTick(() => {
      this.language = bablic.getLocale();
    });
    this.handleResize();
    this.megaDropdown = this.$refs["megaDropdown"];
    this.navbarToggler = this.$refs["navbarToggler"];
  },
  methods: {
    promotionOfType(type) {
      return this.promotions.filter((promo) => promo.slug === type);
    },
    toggleLanguage() {
      if (this.language === "en") {
        bablic.redirectTo("fr_ca", { forceRedirect: true });
      } else {
        bablic.redirectTo("en", { forceRedirect: true });
      }
    },
    close() {
      this.activeItem = "";
      this.megaDropdown.toggle(false);
    },
    clickAway() {
      this.activeItem = "";
      this.navbarOpen = false;
      EventBus.$emit("navigationToggled", false);
      this.megaDropdown.toggle(false);
    },
    toggle(ref, visible) {
      this.navbarOpen = visible;
      this.megaDropdown.toggle(visible);
      EventBus.$emit("navigationToggled", visible);
    },
    handleScroll(event) {
      // this.scrollPosition = window.pageYOffset;
    },
    handleResize(event) {
      this.megaDropdownHeight = window.innerHeight - this.$el.offsetHeight;
    },
    isActive(menuItem) {
      return this.activeItem === menuItem;
    },
    toggleNavbar() {
      this.navbarOpen = !this.navbarOpen;
      EventBus.$emit("navigationToggled", this.navbarOpen);
    },
    setActive(menuItem) {
      if (this.activeItem === menuItem) {
        this.close();
      } else {
        this.toggle("megaDropdown", true);
        this.activeItem = menuItem;
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.language-selector {
  line-height: 1;
  padding: 0;
  width: 30px;
  font-weight: 600;
}
</style>
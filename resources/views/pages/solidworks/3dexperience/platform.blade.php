@extends('layouts.layout')
@section('title')
3DEXPERIENCE Platform
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.platform')}}" />
@stop
@section('description')Software, training, support & co-marketing resources to help early-stage startups get their
product to market, and their business off the ground.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:250px; background-image:url({{asset('/images/pages/solidworks/3dexperience/3dexperience2015-1550x345.jpg')}})">
  {{-- <div class="parallax-section__shadow"></div> --}}
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>3DEXPERIENCE Platform</h1>
          <div class="section-title-divider"></div>
        </div>
        <div class="Left">
          <p class="parallax-section__description">One Cloud Platform, Endless Possibilities</p>
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-lg btn-rounded btn-white mx-auto text-sm" data-toggle="modal" data-target="#experience">
            Learn More<i class="ml-2 far fa-caret-square-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-title center-block mx-auto">
      <h2>WHAT IS THE 3DEXPERIENCE PLATFORM?</h2>
      <div class="section-title-divider "></div>
    </div>
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <p>The 3DEXPERIENCE platform is a cloud-based environment that connects your product development process from
          design
          through manufacturing and delivery. Ideal for organizations of any size, as your organization and needs
          evolve, you can
          access a seamless and constantly growing portfolio of solutions to manage every aspect of your product
          lifecycle. The
          platform provides a single source of truth so your teams can share data securely from anywhere. The
          3DEXPERIENCE
          platform empowers organizations to collaborate in real-time from any device, connect with customers and
          suppliers, and
          track progress so you can deliver unrivaled products and customer experiences.</p>
        <p>Strengthen the SOLIDWORKS you love by connecting the world’s best design solution to powerful data and
          lifecycle
          management, simulation and manufacturing applications on the cloud.</p>
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <div class="main-title h4 mt-0">Benefits of the program include</div>
        <ul class="list-group">
          <li class="list-group-item d-flex flex-row align-items-center"><i
              class="fas fa-chevron-right mr-4"></i>12-month accounts of 3DEXPERIENCE Works including
            SOLIDWORKS for CAD,
            simulation, visualization,
            and more</li>
          <li class="list-group-item d-flex flex-row align-items-center"><i
              class="fas fa-chevron-right mr-4"></i>MySolidWorks online training</li>
          <li class="list-group-item d-flex flex-row align-items-center"><i
              class="fas fa-chevron-right mr-4"></i>Co-marketing opportunities such as speaking at
            SOLIDWORKS events and
            promotion in SOLIDWORKS
            campaigns and social communities</li>
          <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-chevron-right mr-4"></i>Design
            guidance from SOLIDWORKS engineers and
            technical managers</li>
          <li class="list-group-item d-flex flex-row align-items-center"><i
              class="fas fa-chevron-right mr-4"></i>Hundreds of white papers, videos, and feature articles
            with tips and
            tricks on taking your
            product to the next level</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<hr />
<section>
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto mb-0">
        <h2>WHAT SOLUTIONS DOES IT OFFER?</h2>
        <div class="section-title-divider"></div>
      </div>
      <div class="d-flex justify-content-center align-items-center w-100 row">
        <div class="col-lg-4 col-md-5 col-sm-12 col-12">
          <ul class="list-group content-center" style="max-width:700px">
            <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>Design</li>
            <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>Simulation
            </li>
            <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>Data
              Management</li>
            <li class="list-group-item d-flex flex-row align-items-center"><i
                class="fas fa-check mr-4"></i>Collaboration</li>
          </ul>
          <a href="https://www.youtube.com/watch?v=pGwtdAvStbE"
            class="my-4 mp-popup-video mp-single btn btn-primary btn-rounded"><i class="fab fa-youtube mr-3"></i>Short
            introduction video</a>
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12 col-12">
          <img src="{{asset('images/pages/solidworks/3dexperience/3ds-compass.png')}}" class="w-100 my-4">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="custom-nav-pills">
    <ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
      role="tablist">
      <li class="nav-item">
        <a class="nav-link active in" data-toggle="tab" href="#modeling" role="tab">3D Modeling</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#gendesign" role="tab">Generative Design</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#simulation" role="tab">Simulation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#collaboration" role="tab">Collaboration</a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade show active in  border-0" id="modeling" role="tabpanel">
        <div class="row d-flex justify-content-center align-items-start">
          <div class="col-xl-4 col-lg-5 col-md-6">
            <a href="https://www.youtube.com/watch?v=5kW0pGC0jnE"
              class="mp-popup-video mp-single mp-popup-video-button"><img
                src="{{asset('images/pages/solidworks/3dexperience/Cloud_3D-Modeling_1035x652.png')}}"
                class="w-100 mt-5 mb-0"></a>
          </div>
          <div class="col-xl-6 col-lg-5 col-md-6 p-5">
            <small>3DEXPERIENCE | 3D Modeling</small>
            <div class="h3">Design quickly and confidently</div>
            <p>Leverage best-in-class engineering capabilities to create high-quality and complex mechanical shapes.
            </p>
            <ul class="p-0">
              <li>Reach best level of surface quality thanks to local surface modifiers, and global deformation</li>
              <li>Compensate complex manufacturing deformation effects without need to re-design the product or its
                tooling</li>
              <li>Capture expert knowledge and reuse it anywhere</li>
              <li>Access the right and complete information directly in 3D for better compliance</li>
              <li>Validate your ideas with kinematics and structural insights</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-pane fade  border-0" id="gendesign" role="tabpanel">
        <div class="row d-flex justify-content-center align-items-start">
          <div class="col-lg-4 col-md-6">
            <a href="https://www.youtube.com/watch?v=ZtpalVl_-u0"
              class="mp-popup-video mp-single mp-popup-video-button"><img
                src="{{asset('images/pages/solidworks/3dexperience/Cloud_Generative-Design_1035x652.png')}}"
                class="w-100 mt-5 mb-0"></a>
          </div>
          <div class="col-xl-6 col-lg-5 col-md-6 p-5">
            <small>3DEXPERIENCE | Generative Design</small>
            <div class="h3">Design Simple or Complex Shapes</div>
            <p>Easily design, explore and validate variants of complex, repetitive and non-regular shapes and patterns
              with an intuitive algorithmic approach.</p>
            <ul class="p-0">
              <li>Amplify the design process by exploring a large number of alternatives to the main design and with
                styling capabilities</li>
              <li>Make more informed design decisions and shape research with an interactive and 3D-centric modeling
                experience</li>
              <li>Bring automation to a wider audience with knowledge reuse and best practices</li>
            </ul>
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
<section class="pt-0">
  <div class="custom-nav-pills">
    <ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
      role="tablist">
      <li class="nav-item">
        <a class="nav-link active in" data-toggle="tab" href="#costeffective" role="tab">Cost Effective</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#adaptable" role="tab">Adaptable</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#fostercollab" role="tab">Foster Collaboration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#secure" role="tab">Secure</a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade show active in  border-0" id="costeffective" role="tabpanel">
        <div class="row d-flex justify-content-center align-items-start icon-circles justify-content-center p-5">
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-immediate-access.png')}}"
                alt="Immediate Access">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Immediate Access</div>
              <p>Easy to deploy & ready to use without an IT investment</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-all-in-one-solution.png')}}"
                alt="All-in-One Solution">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">All-in-One Solution</div>
              <p>A complete package offering (SaaS, PaaS, IaaS)</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-accessible-technology.png')}}"
                alt="Accessible technology">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Accessible technology</div>
              <p>A portfolio of Enterprise-Class technologies including your favorite apps: CATIA, SIMULIA, DELMIA,
                ENOVIA</p>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade  border-0" id="adaptable" role="tabpanel">
        <div class="row d-flex justify-content-center align-items-start icon-circles justify-content-center p-5">
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-automatic-updates.png')}}"
                alt="Automatic updates">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Automatic updates</div>
              <p>Always on the latest version with frequent new features</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-flexible.png')}}" alt="Flexible">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Flexible</div>
              <p>Subscription model tailored to your needs</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-scalable.png')}}" alt="Scalable">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Scalable</div>
              <p>Add users or applications on the fly, as the business changes</p>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade border-0" id="fostercollab" role="tabpanel">
        <div class="row d-flex justify-content-center align-items-start icon-circles justify-content-center p-5">
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-mobile.png')}}" alt="Mobile">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Mobile</div>
              <p>Work online anywhere at any time</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-encourage-experimentation.png')}}"
                alt="Encourage Experimentation">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Encourage Experimentation</div>
              <p>Tools to quickly innovate from concept to production</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-highly-available.png')}}"
                alt="Highly available">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Highly available</div>
              <p>Access to real-time data for digital continuity</p>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade  border-0" id="secure" role="tabpanel">
        <div class="row d-flex justify-content-center align-items-start icon-circles justify-content-center p-5">
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-fully-secure.png')}}"
                alt="Fully secured">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Fully secured</div>
              <p>Data is encrypted at all layers (Saas, PaaS, IaaS)</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-protected.png')}}"
                alt="24-hour monitoring for intrusions">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Protected</div>
              <p>24-hour monitoring for intrusions</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-4">
            <div class="text-center rounded-circle mx-auto">
              <img src="{{asset('images/pages/solidworks/3dexperience/icons/cloud-environment-friendly.png')}}"
                alt="Environment friendly">
            </div>
            <div class="text-center w-100">
              <div class="h3 mt-4">Environment friendly</div>
              <p>30% less energy used than on-site servers</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="custom-nav-pills">
    <ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
      role="tablist">
      <li class="nav-item">
        <a class="nav-link active in" data-toggle="tab" href="#industry-innovation" role="tab">Industry Innovation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#business-innovation" role="tab">Business Innovation</a>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade show active in  border-0 p-0" id="industry-innovation" role="tabpanel">
        <div class="section-title center-block mx-auto mb-0 mt-5 text-center">
          <h2>INDUSTRY INNOVATION</h2>
          <div class="section-title-divider"></div>
          <p class="lead mx-auto" style="max-width:700px">Securely store, organize, and manage your content and
            collaborate in real-time with Industry Innovation on the 3DEXPERIENCE platform.
          </p>
        </div>
        <div class="row d-flex align-items-start icon-circles mt-5 p-0 mx-0 section-secondary">
          <div class="col-xl-5 col-lg-6 col-md-12 m-0 px-0 align-self-center">
            <img src="{{asset('images/pages/solidworks/3dexperience/Industry-Innovation-hero-001.jpg')}}"
              class="img-fluid" alt="...">
          </div>
          <div class="col-xl-4 col-lg-5 col-md-12 my-5 offset-lg-1 offset-0 align-self-center justify-self-center">
            <div class="h3">Industry Innovation</div>
            <p>Industry Innovation provides an essential set of apps for real-time, secure and structured data
              management on all product related content. It enables real-time collaboration in a secured manner,
              immersive business intelligence to manage business highlights, and easy management and organization of
              tasks.</p>
          </div>
        </div>
        <div class="container">
          <div class="section-title center-block mx-auto my-5 text-center">
            <div class="h2">Discover the features in Industry Innovation</div>
            <div class="section-title-divider"></div>
          </div>
          <table class="table table-striped" id="industry-innovation-accordion">
            <tbody>
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#basicdlm" aria-expanded="true" aria-controls="basicdlm">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Data and Lifecycle Management</div>
                  <div id="basicdlm" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                    <p>Industry Innovation introduces basic Data Management capabilities. Your designs are stored
                      online,
                      iterated and securely managed. Data cannot be lost or deleted by accident.

                      It also provides a scalable infrastructure to allow you to manage maturity of your products and
                      designs by using Lifecycle Management capabilities.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#mscec" aria-expanded="true" aria-controls="mscec">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Manage and Share Content for Effective Collaboration
                  </div>
                  <div id="mscec" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                    <p>Distributed team members can share any content in a very simplified way using the 3DSpace app.
                      The app enables users to create and manage collaborative spaces, add members with different access
                      right levels, and provide direct access to any stored content. Access to collaborative spaces is
                      secure, as each user is granted access as a member of a collaborative space with a given role for
                      a given organization.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#cmescs" aria-expanded="true" aria-controls="cmescs">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Collaborate More Effectively with Streamlined Content
                    Access</div>
                  <div id="cmescs" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                    <p>You can access your data anytime, anywhere from any device. Industry Innovation enables global
                      users to easily access product-content and data through a browser Industry Innovation supports the
                      product development process in any enterprise or in any industry. It provides virtual teams with a
                      robust set of collaborative services to increase the innovation, speed, and effectiveness
                      dramatically of core processes (engineering, design, manufacturing, quality, quality, marketing,
                      etc.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#roadc" aria-expanded="true" aria-controls="roadc">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Rapidly Obtain Accurate Design Context</div>
                  <div id="roadc" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                    <p>Because assemblies are managed in the “database” and not in “files”, only components selected
                      manually or resulting from intuitive 3D searches are retrieved. An accurate design context is
                      established quickly, Web-based visualization enables fast 3D navigation of an entire product to
                      help quickly establish the right context enabling more time for innovation.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#efri" aria-expanded="true" aria-controls="efri">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Easily Find and Reuse IP</div>
                  <div id="efri" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                    <p>Metadata and geometry are indexed, enabling users, from any location to quickly find parts
                      meeting their requirements. Users cans search by metadata or use 3D-based intelligent searches
                      from millions of parts in one single repository. Improved reuse reduces costs and improves quality
                      from using proven technology.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#ipq" aria-expanded="true" aria-controls="ipq">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Improve Product Quality</div>
                  <div id="ipq" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                    <p>As the design is authored by globally dispersed teams, the real-time DMU (Digital Mockup) is
                      accessible to anyone in the enterprise with a very intuitive interface that does not require CAD
                      skills. This enables all non-CAD users to participate in reviews to catch the issues much sooner
                      that can be expensive to resolve later in the cycle, thereby improving product quality and
                      reducing cost</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#pe" aria-expanded="true" aria-controls="pe">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Product Explorer</div>
                  <div id="pe" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                    <p>With Industry Innovation, users can navigate the entire product structure in 3D regardless of
                      size. Users can filter the product structure based on diverse criteria to find the needed parts
                      quickly. The used criteria for filtering can be saved for reuse. Owing to the common data model
                      and data-driven architecture, users can identify dependencies inside one domain and between
                      domains. They can navigate between design components and related items such as other designs,
                      simulations, drawings, manufacturing processes, functional and logical views, etc. Better
                      decision-making occurs when a user can determine the impact of design modifications.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#eibi" aria-expanded="true" aria-controls="eibi">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Enjoy Immersive Business Intelligence</div>
                  <div id="eibi" class="collapse mt-4" data-parent="#industry-innovation-accordion">
                    <p>Key performance indicators (KPIs) can be highlighted directly on the 3D design model, using the
                      B.I. Essential tool. Various stakeholders can visualize and present information quickly,
                      displaying specific attributes obtained from various 3DEXPERIENCE® apps. Examples include
                      regulatory compliance, failure rate, program risk level, and product lifecycle stage/maturity.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade border-0 p-0" id="business-innovation" role="tabpanel">
        <div class="section-title center-block mx-auto mb-0 mt-5 text-center">
          <h2>BUSINESS INNOVATION</h2>
          <div class="section-title-divider"></div>
          <p class="lead mx-auto" style="max-width:700px">Add the power of collaboration and data sharing on the
            3DEXPERIENCE platform to your SOLIDWORKS portfolio with Business Innovation and inspire unmatched product
            innovation.</p>
        </div>
        <div class="row d-flex align-items-start icon-circles mt-5 p-0 mx-0 section-secondary">
          <div class="col-xl-5 col-lg-6 col-md-12 m-0 px-0 align-self-center">
            <img src="{{asset('images/pages/solidworks/3dexperience/solidworks-3d-plm-servces-hero-001.jpg')}}"
              class="img-fluid" alt="...">
          </div>
          <div class="col-xl-4 col-lg-5 col-md-12 my-5 offset-lg-1 offset-0 align-self-center justify-self-center">
            <div class="h3">Collaborate with Your Entire Team Anywhere in the World</div>
            <p>The cloud-based 3DEXPERIENCE® platform provides access to a growing portfolio of solutions that work
              together seamlessly. It serves as a hub for all your product development needs. The Business Innovation
              solution on the platform enables your teams to create dashboards and communities, aggregate and share
              data, and connect people and data in one place to empower collaboration, agility, and faster time to
              market.</p>
          </div>
        </div>
        <div class="container">
          <div class="section-title center-block mx-auto my-5 text-center">
            <div class="h2">Discover the features in Business Innovation</div>
            <div class="section-title-divider"></div>
          </div>
          <table class="table table-striped" id="business-innovation-accordion">
            <tbody>
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#tmriaol" aria-expanded="true" aria-controls="tmriaol">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>The Most Relevant Information All in One Location</div>
                  <div id="tmriaol" class="collapse mt-4" data-parent="#business-innovation-accordion">
                    <p>Dashboards are the cornerstone of the 3DEXPERIENCE platform, allowing you to quickly and securely
                      share essential data such as key performance indicators with executives and customers. Easily
                      create your own dashboard to tailor the experience and display the information that is most
                      relevant to your teams in one convenient location online. Keep your project team informed by
                      sharing any type of media, including images, videos and any CAD files.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#ctc" aria-expanded="true" aria-controls="ctc">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Collaborate Through Communities
                  </div>
                  <div id="ctc" class="collapse mt-4" data-parent="#business-innovation-accordion">
                    <p>Easily create communities with 3DSWYM to share and collaborate on ideas, topics of interest and
                      projects. Share information with teams in real time just as you would on any social platform. Post
                      updates and requests for feedback, engage with ideas, and view and comment on designs regardless
                      of your location. Enable easy sharing of your engineering files with 3DDrive and share interactive
                      content with 3DPlay.
                    </p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#isec" aria-expanded="true" aria-controls="isec">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Intelligently Store Engineering Content
                  </div>
                  <div id="isec" class="collapse mt-4" data-parent="#business-innovation-accordion">
                    <p>Store everything in the cloud with a storage solution that understands the relationships between
                      the different files you create. From within your dashboard, you can easily add, access and share
                      your engineering content as desired. Visualize, annotate, mark-up and comment on any files, and
                      share them directly with anyone involved in your project.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#ageisp" aria-expanded="true" aria-controls="ageisp">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Access a Global Ecosystem of Industrial Service
                    Providers</div>
                  <div id="ageisp" class="collapse mt-4" data-parent="#business-innovation-accordion">
                    <p>The 3DEXPERIENCE Marketplace provides on-demand capabilities for getting your products from
                      design to manufacturing. It offers intelligent sourcing capabilities helping you find both
                      manufacturers and parts.</p>
                    <ul>
                      <li>Make - Access a worldwide ecosystem of qualified industrial manufacturers and identify the
                        best partner based on your specifications, across all manufacturing processes: 3D Printing, CNC
                        Machining, Injection molding, sheet metal, and more.</li>
                      <li>Part Supply - Source components directly from your design environment, with the most
                        comprehensive and intelligent online 3D components catalog.</li>
                    </ul>
                  </div>
                </td>
              </tr>{{-- end --}}
              <tr>
                <td>
                  <div data-toggle="collapse" data-target="#csd" aria-expanded="true" aria-controls="csd">
                    <i class="fas fa-plus fa-xs  ml-2 mr-4"></i>Connect to SOLIDWORKS Desktop</div>
                  <div id="csd" class="collapse mt-4" data-parent="#business-innovation-accordion">
                    <p>Easily connect your SOLIDWORKS® users with the 3DEXPERIENCE platform. Access all of your
                      information on the platform right from within SOLIDWORKS and combine the power of SOLIDWORKS to
                      quickly create and edit your engineering designs, with the collaborative features of the
                      3DEXPERIENCE Platform.</p>
                  </div>
                </td>
              </tr>{{-- end --}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container">
    @php
    $resources = App\Resource::find([61, 66]);
    @endphp
    @if(count($resources) > 0)
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link active in" data-toggle="tab" href="#datasheet" role="tab">Data Sheets</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade active show" id="datasheet" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            @foreach ($resources as $resource)
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a target="_blank" href="{{$resource->publicURL}}" class="pdf-item text-center mx-auto">
                <figure class="text-center">
                  <div class="figimg text-center">
                    <img src="{!! thumbnail($resource->thumbnail) !!}" style="width:100%;" alt="{{$resource->name}}">
                  </div>
                  <figcaption>{{$resource->name}}</figcaption>
                </figure>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</section>
@stop

@push('foot')
<div class="modal fade" id="experience" tabindex="-1" role="dialog" aria-labelledby="experience" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Learn More: 3D Experience Platform</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div data-form-block-id="6f52f019-1d57-ea11-a811-000d3a33fc30"></div>
        <div id="dNevIQowLlWmwWnPzOAUEtL5ZX2m8wXi-TSM7Z6I5zrY"></div>
      </div>
    </div>
  </div>
</div>
@endpush
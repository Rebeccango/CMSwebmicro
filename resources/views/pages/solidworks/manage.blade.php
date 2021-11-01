@extends('layouts.layout')
@section('title')
SOLIDWORKS Manage
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-manage')}}" />
@stop
@section('description')SOLIDWORKS Manage is an advanced data management system that extends the global file management
and application integrations enabled by SOLIDWORKS PDM Professional. @stop
@section('keywords')Project Management,Process Management, Item Management, Dashboards, reports, CAD, Solidworks,
Manage, PDM @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
  style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/manage/manage-banner.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks Manage</h1>
          <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
        </div>
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <p class="parallax-section__description">Advanced Data Management Tool</p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-5" style="background-color:#F2F2F2">
  <div class="container-fluid">
    <div class="content">
      <div class="section-title center-block mx-auto">
        <div class="h3 text-center">What is SOLIDWORKS Manage?</div>
        <div class="section-title-divider"></div>
      </div>
      <p class="text-center mx-auto lead" style="max-width:700px">SOLIDWORKS® Manage provides SOLIDWORKS customers with
        a unique set of advanced data management tools. This is accomplished by leveraging the file management
        capabilities and ease of use of SOLIDWORKS PDM Professional and adding powerful <em>project</em>,
        <em>process</em>, and <em>item management</em> capabilities.</p>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>Distributed Data Management</h3>
        <br />
        <p>SOLIDWORKS Manage takes the place of the separate disconnected tools that an organization might use to manage
          engineering resources and processes. It is compatible with many existing tools, and works to more efficiently
          and effectively maintain the integrity of enterprise information.</p>
        <p>With SOLIDWORKS Manage, organizations can now plan each stage of a project, assign resources and tasks, and
          attach required documentation within the same ecosystem used to design. When users complete their tasks,
          project progress is automatically updated. And, project managers can take advantage of powerful dashboard
          capabilities to see critical information in a single, easy-to-understand interface.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <img src="http://blogs.solidworks.com/solidworksblog/wp-content/uploads/sites/2/2017/11/manage_blog_image1.png"
          class="mx-auto w-100" />
      </div>
    </div>
    <div class="section-block row align-items-center py-5">
      <div class="col align-self-center mx-auto" style="max-width:850px; width:100%;">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/DB2EDade6VU" class="embed-responsive-item" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videoCaption w-100">What's New in SOLIDWORKS 2021 - Manage</div>
      </div>
    </div>
  </div>
</section>
<section class="pb-0">
  <div class="section-title center-block mx-auto">
    <h3 class="h3 text-center">Capabilities</h3>
    <p class="lead text-center mx-auto" style="max-width:700px">
      SOLIDWORKS Manage is here to help tame your data complexity with project management capabilities
    </p>
    <div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
  </div>
  <div class="container-fluid">
    <div class="row pb-4 order-sm-1  wow fadeInLeft no-gutters" data-wow-duration="0.8s" data-wow-delay="0s"
      id="SpaceMouse-Compact">
      <div class="col-lg-6 mx-auto" style="max-width:600px;">
        <div class="videoWrapper">
          <iframe width="auto" height="100%" class="w-100 mx-auto d-block p-3"
            src="https://www.youtube.com/embed/nwY3ouNXYeA" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="fas fa-chart-pie w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <div class="text-primary h2 text-left">Dashboards</div>
            <div class="text-primary h5 text-left">Create interactive graphical dashboards to display critical
              information</div>
            <p class=" text-left">With SOLIDWORKS Manage, information can be presented in an easy to understand
              dashboard that can be tailored not only to display the critical information you need, but also present the
              right information to the functional areas of your team.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row pb-4 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.3s">
      <div class="col-lg-6" id="project-task">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="fas fa-file-alt w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <h3 class="text-primary h2 text-left">Project Task Creation</h3>
            {{-- <div class="text-primary h5 text-left">Real-time Reporting</div> --}}
            <p class="text-left">Because SOLIDWORKS Manage is an extension of <a
                href="{{route('solidworks-dataManagement')}}">SOLIDWORKS PDM Professional</a>, it's now easy to attach
              document records from PDM to tasks.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center" id="real-time-report">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="far fa-clock w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <h3 class="text-primary h2 text-left">Real-time Reporting</h3>
            {{-- <div class="text-primary h5 text-left">Real-time Reporting</div> --}}
            <p class="text-left">Real-time Reporting can be tailored per user and can display data in a variety of chart
              styles to help everyone make sense out of the complex data that is important to them.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" id="project-list">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="far fa-list-alt w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <h3 class="text-primary h2 text-left">Project Lists</h3>
            {{-- <div class="text-primary h5 text-left">Real-time Reporting</div> --}}
            <p class="text-left">Project Lists give a deeper understanding of the progress status of your projects, and
              can quickly consume project details through project tabs.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" id="gantt-charts">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="fas fa-chart-area w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <h3 class="text-primary h2 text-left">Gantt Charts</h3>
            {{-- <div class="text-primary h5 text-left">Real-time Reporting</div> --}}
            <p class="text-left">Gantt charts can be created by templates that have key stages and milestones for your
              project process. Once created, timelines can be easily modified with simple drag and drop.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" id="project-bom">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="fas fa-sitemap w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <h3 class="text-primary h2 text-left">Project BOM</h3>
            {{-- <div class="text-primary h5 text-left">Real-time Reporting</div> --}}
            <p class="text-left">With SOLIDWORKS Manage you can leverage the existing mechanical BOM from SOLIDWORKS PDM
              Professional, as well as capture additional items like tooling, electrical components, and packaging</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" id="task-lists">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="fas fa-clipboard-check w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <h3 class="text-primary h2 text-left">Task Lists</h3>
            {{-- <div class="text-primary h5 text-left">Real-time Reporting</div> --}}
            <p class="text-left">SOLIDWORKS Manage reminds users through Task lists. When users log in, they will
              immediately see his to-do list of tasks. They even display on a calendar so users know when to work on
              each item.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" id="pdm-connection">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="fas fa-exchange-alt w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <h3 class="text-primary h2 text-left">PDM Connection</h3>
            {{-- <div class="text-primary h5 text-left">Real-time Reporting</div> --}}
            <p class="text-left">SOLIDWORKS Manage is directly connected to your SOLIDWORKS PDM. SOLIDWORKS PDM shows
              you where this part is used in assemblies and drawings. And now, with SOLIDWORKS Manage, you have
              visibility to its use in Bills of Materials, Projects...and several Engineering Change Requests.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6" id="bom-collaboration-variants">
        <div class="d-flex py-md-4 py-4">
          <div class="w-100" style="max-width: 80px;">
            <i class="far fa-copy w-100 lead text-primary fa-10x" style="font-size:40px"></i>
          </div>
          <div>
            <h3 class="text-primary h2 text-left">BOM Collaboration & Variants</h3>
            {{-- <div class="text-primary h5 text-left">Real-time Reporting</div> --}}
            <p class="text-left">SOLIDWORKS Manage allows cross functional collaboration on the BOM and different
              versions can be generated when required for different teams or applications.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container-fluid">
    <div class="custom-nav-pills">
      <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#documents" role="tab">Documents</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active" data-toggle="tab" href="#videos" role="tab">Videos</a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade" id="documents" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <a href="https://files.solidworks.com/secdl/253011_SW_Manage_Getting_Started_Guide_for_2018SP1.pdf"
                class="pdf-item">
                <figure>
                  <div class="figimg">
                    <img src="{{asset('storage/pdfs/solidworks/2018/conceptual_designer_2018.png')}}"
                      style="width:100%;" alt="SOLIDWORKS Conceptual Designer 2018">
                  </div>
                  <figcaption>SOLIDWORKS Manage 2018 Getting Started Guide</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active in" id="videos" role="tabpanel">
          <div class="row" style="margin:0; padding:0">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/2wl7uL7C_C8" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">SOLIDWORKS Manage 2018 - Process Management</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/MVrawKK-fLY" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">SOLIDWORKS Manage Overview Video</div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
              <div class="videoWrapper">
                <iframe width="100%" height="200px" src="https://www.youtube.com/embed/nwY3ouNXYeA" frameborder="0"
                  allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="videoCaption">SOLIDWORKS Manage 2018 - Dashboards</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container-fluid">
    <h3 class="main-title mt-0">SOLIDWORKS Manage Features</h2>
      <p class="lead">Features to tame your data complexity</p>
      <div class="responsive-tabs-block row" style="margin-top:10px">
        <div class="">
          <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#product-manage" role="tab"
                aria-expanded="true">Project Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#item-manage" role="tab">Item Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#process-manage" role="tab">Process Management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#dash-reports" role="tab">Dashboards and Reports</a>
            </li>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="tab-content responsive-tabsContent">
            <div class="tab-pane active show in" id="product-manage" role="tabpanel">
              <h3>Project Management</h3>
              <div class="row">
                <div class="col col-lg-7 col-sm-12">
                  <p class="lead">
                    SOLIDWORKS Manage provides critical information to help teams focus on important tasks and provides
                    an overview of resource capacity for better planning and utilization.
                  </p>
                </div>
                <div class="col col-lg-5 col-sm-12">
                  <ul>
                    <li>Manage project stages, timelines, and milestones.
                    <li>View resource utilization and capacity.
                    <li>Attach items, files, and list deliverables.
                    <li>Utilize user tasks and timesheets to track progress.
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="item-manage" role="tabpanel">
              <h3>Item Management</h3>
              <div class="row">
                <div class="col col-lg-7 col-sm-12">
                  <p class="lead">
                    SOLIDWORKS Manage brings together, in one place, all components required for product definition,
                    whether represented by a CAD model, document, or database-only items.
                  </p>
                </div>
                <div class="col col-lg-5 col-sm-12">
                  <ul>
                    <li>Create, edit and compare Bills of Materials (BOMs) using items and files.
                    <li>Automatically or selectively create items for SOLIDWORKS configurations.
                    <li>Drive SOLIDWORKS drawing BOMs and item numbers.
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="process-manage" role="tabpanel">
              <h3>Process Management</h3>
              <div class="row">
                <div class="col col-lg-7 col-sm-12">
                  <p class="lead">
                    SOLIDWORKS Manage streamlines business processes, automates document creation, and brings together
                    all involved stakeholders with new products, from sales and marketing to production and support.
                  </p>
                </div>
                <div class="col col-lg-5 col-sm-12">
                  <ul>
                    <li>Configure states and decision points for all types of business processes.
                    <li>Attach affected items and files and enable ad-hoc approvers and user tasks.
                  </ul>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="dash-reports" role="tabpanel">
              <h3>Dashboards and Reports</h3>
              <div class="row">
                <div class="col col-lg-7 col-sm-12">
                  <p class="lead">
                    SOLIDWORKS Manage provides instant access to critical information in an easy-to-consume format for
                    better decision making.
                  </p>
                </div>
                <div class="col col-lg-5 col-sm-12">
                  <ul>
                    <li>Create interactive graphical dashboards to display critical information.
                    <li>Configure reports to company standards and publish automatically or on demand.
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@stop
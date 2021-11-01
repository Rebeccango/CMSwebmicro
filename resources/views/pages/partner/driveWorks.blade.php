@extends('layouts.layout')
@section('title')
DriveWorks – Design Automation Software for SOLIDWORKS
@stop
@section('meta')
<link rel="canonical" href="{{route('driveWorks')}}" />
@stop
@section('description')Are your designs the same, but different? DriveWorks is a powerful design automation and product
configurator software
to create and configure custom products, fast. Get a trial to learn how SOLIDWORKS part, assembly & drawings automation
is made easy with DriveWorks. @stop
@push('after-styles')
<style>
  .learn-more-collapsable .card {
    cursor: pointer;
    border-radius: 5px;
    border-width: 2px;
  }

  .learn-more-collapsable .card:hover {
    background: #f2f2f2;
  }

  .learn-more-collapsable .card:not(.collapsed) {
    background: #f2f2f2;
    border-color: #007BFF;
    border-width: 2px;
  }

  span.circle {
    background: #007BFF;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    color: white;
    font-size: 24px;
    display: inline-block;
    font-weight: 500;
    line-height: 50px;
    margin-right: 5px;
    text-align: center;
    width: 50px;
  }
</style>
@endpush
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
  style="min-height:450px; background-image:url({{asset('storage/images/SolidWorks/driveworks-hero.jpg')}})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>DriveWorks</h1>
          <div class="section-title-divider "></div>
        </div>
        <div class="wow fadeInLeft">
          <p class="parallax-section__description">Powerful design automation & product configuration for manufacturers
          </p>
        </div>
        <div>
          @include('layouts.generic_contact_buttons')
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-4">
        <h3 class=" mb-4">DriveWorks Design Automation & Sales Configuration</h3>
        <p>DriveWorks software is used by companies large and small to build their own design automation and 3D online
          sales
          configuration solution for their products.</p>
        <p>Your engineers, sales teams, distributors and customers are all able to design, engineer and configure to
          order, on any
          device, from anywhere. Capturing and reusing design, manufacturing and cost estimation knowledge allows you to
          deliver
          custom products faster and with greater accuracy, while eliminating the need for complex macros, design tables
          or
          configurations.</p>
        <p>Reduce repetitive tasks, eliminate errors, increase sales and deliver custom products in record time with
          DriveWorks.</p>

        <a href="https://content.driveworks.co.uk/common/DriveWorks-DesignAutomation.pdf" target="_blank"
          class="btn btn-primary rounded-pill">Download Data Sheet</a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-4">
        <div class="videoWrapper">
          <iframe width="100%" height="auto" style="min-height:280px;" src="https://www.youtube.com/embed/CiqsEKWg9vE"
            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="videoCaption">What is DriveWorks?</div>
      </div>
    </div>
  </div>
</section>
<section class="parallax-section d-flex"
  style="min-height:450px; background-image:url(https://my.driveworks.co.uk/wp-content/uploads/2020/08/DriveWorks-Slider-DriveWorksSolo-1.webp)">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto text-white">
          <h3>Features & Benefits</h3>
          <div class="section-title-divider "></div>
        </div>
        <div class="row">
          <div class="col-lg-6 p-3">
            <div class="card w-100 shadow">
              <div class="card-body">
                <h5 class="card-title">Boost Quality</h5>
                <p class="card-text">Based on rules, calculations and logic, DriveWorks product configurators produce
                  high quality outputs that reduce costly
                  errors.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-3">
            <div class="card w-100 shadow">
              <div class="card-body">
                <h5 class="card-title">Respond Faster, Sell More</h5>
                <p class="card-text">With automatically generated, accurate quotes and sales responses, you can impress
                  your customers and respond quicker
                  than your competitors.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-3">
            <div class="card w-100 shadow">
              <div class="card-body">
                <h5 class="card-title">Any Device, Anywhere</h5>
                <p class="card-text">Your customers, sales teams and distributors can configure, price and quote on any
                  device, anywhere. Design details are
                  communicated with interactive 3D visualizations.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 p-3">
            <div class="card w-100 shadow">
              <div class="card-body">
                <h5 class="card-title">Faster Implementation</h5>
                <p class="card-text">DriveWorks configurators are easy to set up with no programming skills required.
                  Leave your implementation to the people
                  who know your products best – your engineers.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-primary text-white">
  <div class="container-fluid d-flex align-items-center justify-content-center flex-column">
    <div class="section-title center-block mx-auto mb-0">
      <h2>Get Your Free Trial</h2>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
      <button class="btn btn-white rounded-pill btn-dialog" id="contact" data-toggle="modal" data-target="#contactModal"
        data-type="contact" data-title="Contact an Agent">Contact Us</button>
    </div>
  </div>
</section>
<section class="pb-0">
  <div class="container">
    <div class="section-title center-block mx-auto mb-0 text-center mb-4">
      <h2>Design Automation & CPQ Configuration Solutions</h2>
      <div class="section-title-divider"></div>
      <p class="mx-auto lead">Flexible, Modular, Scalable.</p>
    </div>
    <div id="accordion">
      <div class="row mb-5">
        <div class="learn-more-collapsable col col-12 col-md-4 col-lg-4 d-flex flex-fill py-4">
          <div role="button" class="card w-full p-3 d-flex flex-fill" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <img class="card-img-top"
              src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-ProductCard-DriveWorksXpress.webp">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">DriveWorksXpress</h3>
              <p class="card-text flex-fill">Free entry level design automation included in every seat of SOLIDWORKS.
                Upscale to DriveWorks Solo
                or DriveWorks Pro anytime.</p>
              <button class="btn btn-primary rounded-pill btn-dialog collapsed" data-toggle="collapse"
                data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Learn more</button>
            </div>
          </div>
        </div>
        <div class="learn-more-collapsable col col-12 col-md-4 col-lg-4 d-flex flex-fill py-4">
          <div role="button" class="card w-full p-3 d-flex flex-fill collapsed" data-toggle="collapse"
            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <img class="card-img-top"
              src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-ProductCard-DriveWorksSolo.webp">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">DriveWorks Solo</h3>
              <p class="card-text flex-fill">Powerful SOLIDWORKS® design automation. Download your 30 day free trial of
                DriveWorks Solo.</p>
              <button class="btn btn-primary rounded-pill btn-dialog">Learn more</button>
            </div>
          </div>
        </div>
        <div class="learn-more-collapsable col col-12 col-md-4 col-lg-4 d-flex flex-fill py-4">
          <div role="button" class="card w-full p-3 d-flex flex-fill collapsed" data-toggle="collapse"
            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <img class="card-img-top"
              src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-ProductCard-DriveWorksPro-1.webp">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">DriveWorks Pro</h3>
              <p class="card-text flex-fill">
                Complete SOLIDWORKS® automation and online 3D CPQ configurator software. Try one of our configurator
                examples now.</p>
              <button class="btn btn-primary rounded-pill btn-dialog">Learn more</button>
            </div>
          </div>
        </div>

        <a href="{{route('driveWorks.compare')}}" class="btn btn-lg btn-danger rounded-pill btn-dialog mx-auto">Compare
          Features <i class="ml-3 fas fa-arrow-circle-right"></i></a>
      </div>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <h4 class="main-title mb-0">DriveWorksXpress</h4>
        <div class="row card-body">
          <div class="col-lg-6">
            <p class="h6">Key Benefits:</p>
            <ul>
              <li><strong>One Time Setup</strong> – Set it up once, and run it again and again without the need for
                complex macros,
                design
                tables or
                configurations.</li>
              <li><strong>Save Time & Innovate More</strong> – Automate your repetitive SOLIDWORKS tasks and free up
                your team’s time to
                focus on product
                innovation and development.</li>
              <li><strong>Eliminate Errors</strong> – Rules are used to eliminate errors and expensive, time-consuming
                design changes.
              </li>
              <li>Upgrade to DriveWorks Solo or DriveWorks Pro at anytime.</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <p class="h6">Key Features:</p>
            <ul>
              <li><strong>Automate SOLIDWORKS</strong> – Capture and control the parameters you manually change in your
                SOLIDWORKS models and assemblies.</li>
              <li><strong>Input Forms</strong> – Create input forms to enter product requirements, and add validation to
                controls to ensure inputs are
                always suitable.</li>
              <li><strong>Rules Builder</strong> – Build rules to link input controls with captured parameters using the
                intelligent DriveWorks Rules
                Builder.</li>
            </ul>
          </div>
          <div class="col-12 pt-5">
            <div class="section-title center-block mx-auto mb-0 text-center mb-4">
              <h3>Activate DriveWorksXpress</h3>
              <div class="section-title-divider"></div>
              <p class="mx-auto lead">Free entry level design automation included in every seat of SOLIDWORKS®</p>
            </div>
            <div class="row">
              <div class="col-lg-4 py-4">
                <div class="text-center">
                  <img class="card-img-top"
                    src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-Software-DriveWorksXpress-ActivateSteps-DriveWorksXpressCapture.png"
                    alt="DriveWorksXpress">
                  <div class="card-body">
                    <span class="circle">1</span>
                    <h5 class="card-title mt-4">Open DriveWorksXpress</h5>
                    <p class="card-text">Open DriveWorksXpress from the Tools menu in SOLIDWORKS, click the link and go
                      to your MySolidWorks Account.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 py-4">
                <div class="text-center">
                  <img class="card-img-top"
                    src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-Software-DriveWorksXpress-ActivateSteps-DriveWorksXpressMySolidWorks.png"
                    alt="Get Your Activation Code">
                  <div class="card-body">
                    <span class="circle">2</span>
                    <h5 class="card-title mt-4">Get Your Activation Code</h5>
                    <p class="card-text">Activate DriveWorksXpress in your <a href="https://my.solidworks.com/xpress"
                        target="_blank">MySolidWorks Account</a>, copy the code and paste it into the DriveWorksXpress
                      product
                      code box.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 py-4">
                <div class="text-center">
                  <img class="card-img-top"
                    src="https://www.cadmicro.com/storage/pages/driveworks/DriveWorks-Software-DriveWorksXpress-ActivateSteps-OpenDriveWorksXpress.png"
                    alt="DriveWorks-Software-DriveWorksXpress">
                  <div class="card-body">
                    <span class="circle">3</span>
                    <h5 class="card-title mt-4">Automate SOLIDWORKS</h5>
                    <p class="card-text">Setup DriveWorksXpress once and use your forms over and over again to configure
                      new variations.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <h4 class="main-title mb-0">DriveWorks Solo</h4>
        <div class="row card-body">
          <div class="col-lg-6">
            <p class="h6">Key Benefits:</p>
            <ul>
              <li><strong>Easy to Setup, Maintain & Use</strong> – Deliver custom products faster and with greater
                accuracy, without the
                need for complex
                macros, design tables or code.</li>

              <li><strong>Eliminate Errors</strong> – Rules are used to eliminate errors and expensive, time-consuming
                design changes.
              </li>

              <li><strong>Save Time & Innovate More</strong> – Automate your repetitive SOLIDWORKS tasks and free up
                your team’s time to
                focus on product
                innovation and development.</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <p class="h6">Key Features:</p>
            <ul>
              <li><strong>Automate SOLIDWORKS</strong> – Automate your SOLIDWORKS parts, assemblies and detailed
                drawings.</li>

              <li><strong>Advanced Drawing Control</strong> – Save time and boost product quality by automatically
                creating accurate
                manufacturing
                drawings.</li>

              <li><strong>Preview Results</strong> – Preview results as you enter design requirements and before you
                generate final
                models, drawings and
                documents.</li>

              <li><strong>File Formats & Save Location</strong> – Enjoy full control over the save location and file
                structure of files
                created by
                DriveWorks Solo.</li>

              <li><strong>Custom Input Forms</strong> - An inbuilt form designer helps you configure valid permutations.
              </li>

              <li><strong>Static Tabular Data</strong> – Add your existing static tabular data into DriveWorks Solo and
                use it on your
                forms and within
                your rules.</li>

              <li><strong>Customizable Documents</strong> – Quickly respond to sales enquiries with accurate documents
                using quote, cover
                letter and BOM
                templates.</li>
            </ul>
          </div>
        </div>
      </div>

      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <h4 class="main-title mb-0">DriveWorks Pro</h4>
        <div class="row card-body">
          <div class="col-lg-6">
            <p class="h6">Key Benefits:</p>
            <ul>
              <li><strong>Intelligent Guided Selling</strong> – Ensure customers and sales teams configure the ideal
                solution every time with intelligent
                rules-based guided selling.</li>

              <li><strong>Any Device, Anywhere</strong> – Enable customers and sales teams to configure custom products
                on any device with DriveWorks
                Live.</li>

              <li><strong>Integrate with Other Systems</strong> – DriveWorks Pro integrates seamlessly with company
                systems, helping you work more
                efficiently and effectively.</li>

              <li><strong>Connect Sales & Manufacturing</strong> – Validation ensures you only offer products that can
                manufactured, eliminating errors
                and boosting quality.</li>

              <li><strong>Eliminate Errors & Repetitive Tasks</strong> – DriveWorks SOLIDWORKS automation eliminates
                errors and expensive, time-consuming
                design changes.</li>

              <li><strong>Easy to Setup, Maintain & Use</strong> – Deliver custom products faster and with greater
                accuracy, without using complex
                macros, design tables or code.</li>
            </ul>
          </div>
          <div class="col-lg-6">
            <p class="h6">Key Features:</p>
            <ul>
              <li><strong>Complete SOLIDWORKS Automation</strong> – Capture and reuse design, manufacturing and cost
                estimation knowledge.</li>

              <li><strong>Online Visual Sales Configurator</strong> – Enable your sales team, distributors and customers
                to configure custom products on
                any device, anywhere.</li>

              <li><strong>Interactive 3D</strong> – Products are configured in 3D on any device with DriveWorks 3D
                Preview.</li>

              <li><strong>Integrate with Other Systems</strong> – Easily pass data between DriveWorks and your ERP, MRP
                and CRM systems.</li>

              <li><strong>Intelligent Workflow</strong> - Manage your team permissions, approval process and customer
                journeys to be in control of the
                who, what and when.</li>

              <li><strong>Automatically Generate Documents</strong> – Automatically created custom branded quotes, cover
                letters, delivery notes, BOMs
                and more.</li>

              <li><strong>Dynamic Data</strong> – Use external data such as SQL databases in your DriveWorks projects to
                create great user experiences.</li>

              <li><strong>Scalable & Cloud Ready</strong> – Easily scale using web API and support for Microsoft Azure,
                Amazon Web Services, and Google
                Cloud.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-0">
  <div class="container">
    @php
    $resources = App\Resource::find([247, 39]);
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

<section style="padding-top:0">
  <div class="container-fluid">
    <h2 class="main-title" style="margin-top:0;">
      DriveWorks capabilities</h2>
    <p class="wow fadeInUp">Listed below, are some of the powerful
      features that DriveWorks users benefit from. DriveWorks has the potential to vastly increase your productivity.
      If you would like to know more or have any questions, please use the box below.</p>
    <div class="responsive-tabs-block row" style="margin-top:10px">
      <div>
        <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#ug" role="tab">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#catiav4" role="tab">Benefits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#automation" role="tab">Design Automation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#configurator" role="tab">Sales Configurator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#driveworksxpress" role="tab">DriveWorksXpress</a>
          </li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="tab-content responsive-tabsContent">
          <div class="tab-pane active" id="ug" role="tabpanel">
            <h3>Features</h3>
            <ul>
              <li>
                Fully integrated with SolidWorks
              </li>
              <li>
                Generates 3D models, 2D drawings, cutting lists, DXF’s, and e-drawings
              </li>
              <li>
                Provides product configuration capabilities
              </li>
              <li>
                Creates client-specific documentation such as quotations through excel templates
              </li>
              <li>
                Provides user-interface for others to specify products, based on your company’s rules
              </li>
              <li>
                Internet enabled
              </li>
            </ul>
          </div>
          <div class="tab-pane" id="catiav4" role="tabpanel">
            <h3>Benefits</h3>
            <ul>
              <li>
                Deliver information to production and clients faster
              </li>
              <li>
                Take engineering know-how outside the design team
              </li>
              <li>
                Reduce delivery times for quotations and manufacturing data
              </li>
              <li>
                Increase quality and improve accuracy
              </li>
            </ul>
          </div>
          <div class="tab-pane" id="automation" role="tabpanel">
            <h3>Design Automation</h3>
            <p>Automating your design process lets you create custom designs quickly and efficiently. Automation is
              ideal for Same but Different design, where new orders or new products are based on a variation of your
              existing designs. Use Design Automation software to free up engineers from repetitive design tasks,
              enhance product quality and reduce errors. Save time and reduce development costs whilst increasing
              productivity.<br />Automatically generate 2D and 3D drawings of your SOLIDWORKS CAD models, sales
              quotes, letters and manufacturing data.</p>
          </div>
          <div class="tab-pane" id="configurator" role="tabpanel">
            <h3>Sales Configurator</h3>
            <img width="100%"
              src="https://hub.driveworks.co.uk/wp-content/uploads/2013/12/DriveWorksCoverImage-PlaySystem.jpg" />
            <p>Providing a Sales Configurator for your sales team, distributors and even customers to use is a very
              powerful sales tool. Use it to guide non-technical people through the custom options available, provide
              a fast response to sales enquiries and configure accurate quotes quickly. Whether your engineers and
              sales teams are in house, out in the field, or you work through dealers and distributors, a sales
              configurator will let you create custom designs and a custom response quickly and professionally.</p>
          </div>
          <div class="tab-pane" id="driveworksxpress" role="tabpanel">
            <h3>DriveWorksXpress</h3>
            <p>Entry level design automation included in every license of SOLIDWORKS®</p>
            <p>DriveWorksXpress is a free, easy to use design automation tool that allows you to quickly and
              accurately create multiple variations of your SOLIDWORKS parts, assemblies and drawings.</p>
            <p>If you offer many different product options or every customer order is bespoke, DriveWorksXpress can
              help you capture your design rules, recreate variations of existing designs, reduce repetitive tasks,
              save time, and improve product quality.</p>
            <p>DriveWorksXpress is already installed for free inside SOLIDWORKS. You can set up and run a design
              automation project in DriveWorksXpress, then run the project as many times as you like, fill out the
              form, and quickly generate multiple new versions of your parts, assemblies, and drawings. Here’s how:
            </p>
            <ol style="font-size:13px; margin-top:-10px;">
              <li>
                Capture the dimensions and features you want to drive in SOLIDWORKS.
              </li>
              <li>
                Create a form to input the values that drive your design.
              </li>
              <li>
                Build rules to drive your models using the values entered on the form.
              </li>
              <li>
                Run the project again and again to create custom design variations.
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-secondary">
  <div class="container-fluid d-flex align-items-center justify-content-center flex-column">
    <div class="section-title center-block mx-auto mb-0">
      <h2>Want to learn more?</h2>
      <div class="section-title-divider"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
      <button class="btn btn-white rounded-pill btn-dialog" id="contact" data-toggle="modal" data-target="#contactModal"
        data-type="contact" data-title="Contact an Agent">Contact Us</button>
    </div>
  </div>
</section>
@stop
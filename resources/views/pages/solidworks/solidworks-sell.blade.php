@extends('layouts.layout')
@section('title')
SolidWorks Sell - eCommerce
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-sell')}}" />
@stop
@section('description')SOLIDWORKS® Sell is a cloud-based 3D product configuration solution. This Software as a Service
(SaaS)
solution embeds into a brand’s website, allows for automatic software enhancements and reduces the need
for custom consulting solutions or additional hardware. Additionally, it lets internal teams, consumers and
other users quickly configure products to show rich variations. @stop
@section('keywords')3D, Design Software, CAD, 3D CAD, SolidWorks, 3D Software, Product Design, Engineering Software, 3D
Design, Design Analysis,Translate, Electrical, Premium, Standard, Professional @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
   style="min-height:450px; background-image:url({{asset('https://www.solidworks.com/sites/default/files/2018-03/SW-SELL-E-Commerce-hero-001.jpg')}});">
   <div class="parallax-section__shadow"></div>
   <div class="container-fluid">
      <div class="content white-content d-flex justify-content-center align-items-center flex-column">
         <div class="section-title parallax-section__title center-block mx-auto">
            <h1>SOLIDWORKS SELL</h1>
            <div class="section-title-divider"></div>
         </div>
         <div>
            <p class="parallax-section__description">SOLIDWORKS® Sell is a cloud-based 3D product configuration
               solution. This Software as a Service (SaaS) solution embeds into a brand’s website, allows for automatic
               software enhancements and reduces the
               need for custom consulting solutions or additional hardware. Additionally, it lets internal teams,
               consumers and other users quickly configure products to show rich variations.</p>
         </div>
         <div>
            @include('layouts.generic_contact_buttons')
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container-fluid">
      <div class="section-block row">
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h2>Why Choose SOLIDWORKS Sell-eCommerce
               as your 3D product configurator?</h2>
            <br />
            <p>Customers today expect custom products and SOLIDWORKS Sell makes it easy to transform your online
               shopping experience, allowing customers to easily configure a product’s attributes to their liking,
               including materials,
               color, size and shape. SOLIDWORKS Sell is a 3D product configurator sales tool that enables you to show
               your products
               in 3D, providing a deeper engagement for your customers. The SOLIDWORKS Sell product configurator has
               full cloud and web
               integration, meaning changes to product offerings can be made in minutes without the need for expensive
               custom
               software.</p>
            <a href="{{ route('solidworks-sell-demo') }}" target="_blank"
               class="btn btn-primary btn-rounded btn-md px-3">LIVE DEMO <i class="ml-3 fas fa-play fa-sm"></i></a>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
            <div class="videoWrapper">
               <iframe width="100%" height="auto" style="min-height:280px;"
                  src="https://www.youtube.com/embed/NNSBiL0BQsM" frameborder="0" allow="autoplay; encrypted-media"
                  allowfullscreen></iframe>
            </div>
            <div class="videoCaption">Video: The Fundamentals of SOLIDWORKS Sell</div>
         </div>
      </div>
   </div>
</section>
<section class="section-secondary">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 my-4">
            <h3 class="mb-4">ON-DEMAND WEBINAR</h3>
            <p class="h4">Get your products ready for e-commerce with SOLIDWORKS Sell</p>
            <p>See how SOLIDWORKS Sell enables you to engage your customers through product customization. This cloud
               solution simplifies implementation, supports expanded offerings to your customers and offers a new way
               for them to
               experience your products.</p>
            <a href="https://register.gotowebinar.com/register/4742662434439930883?source=cadmicro" target="_blank"
               class="btn btn-primary btn-rounded btn-md px-3">SIGN UP NOW</a>
         </div>
         <div class="col-lg-6 my-4">
            <h3 class="mb-4">Interested in SolidWorks Sell?</h3>
            <p class="h4 mb-4">Speak to a CAD MicroSolutions eCommerce Consultant</p>
            <button data-toggle="modal" data-target="#sell" class="btn btn-primary btn-rounded btn-md px-3">CONTACT
               US</button>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container-fluid">
      <div class="custom-nav-pills">
         <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
            </li>
            <li class="nav-item active">
               <a class="nav-link active" data-toggle="tab" href="#videos" role="tab">Videos</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-toggle="tab" href="#case-studies" role="tab">Case Studies</a>
            </li>
         </ul>
         <div class="tab-content">
            <div class="tab-pane fade" id="datasheet" role="tabpanel">
               <div class="row" style="margin:0; padding:0">
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a href="{{asset('storage/pdfs/solidworks/Sell.pdf')}}" target="_blank" class="pdf-item">
                        <figure>
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/solidworks/Sell.png')}}" style="width:100%;"
                                 alt="SOLIDWORKS SELL Premium Data Sheet">
                           </div>
                           <figcaption>SOLIDWORKS SELL Data Sheet</figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="case-studies" role="tabpanel">
               <div class="row m-0 p-0">
                  <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <a href="{{asset('storage/pdfs/solidworks/clearvision-customer-story.pdf')}}" target="_blank"
                        class="pdf-item">
                        <figure>
                           <div class="figimg">
                              <img src="{{asset('storage/pdfs/solidworks/clearvision-customer-story.png')}}"
                                 class="w-100" alt="CLEARVISION OPTICAL COMPANY">
                           </div>
                           <figcaption>CLEARVISION OPTICAL COMPANY</figcaption>
                        </figure>
                     </a>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade show active in" id="videos" role="tabpanel">
               <div class="row" style="margin:0; padding:0">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
                     <div class="videoWrapper">
                        <iframe width="100%" height="200px" src="https://www.youtube.com/embed/WsH6NLFCpEk"
                           frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                     <div class="videoCaption">SOLIDWORKS Sell Awareness with URB-E</div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 py-3">
                     <div class="videoWrapper">
                        <iframe width="100%" height="200px" src="https://www.youtube.com/embed/zmnD4XuazMc"
                           frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                     </div>
                     <div class="videoCaption">ClearVision allows their customers to customize eyeware using SOLIDWORKS
                        Sell</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section style="padding-top:0">
   <div class="container-fluid">
      <h2 class="main-title">
         SOLIDWORKS SELL FEATURES</h2>
      <div class="responsive-tabs-block row">
         <div class="">
            <!-- required for floating -->
            <ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#cloud" role="tab">Full Cloud Implementation</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#choice" role="tab">Simplify Choice for Customers</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#social" role="tab">Be Social</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#augment" role="tab">Augmented Reality</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#experience" role="tab">Make Buying an Experience</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#mobile" role="tab">Multi-device and Mobile Ready</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#updates" role="tab">Product Updates in Minutes</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#supports" role="tab">Supports eCommerce Platforms</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#secure" role="tab">Secure IP</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#render" role="tab">High Resolution On-demand
                     Rendering</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#sku" role="tab">Infinite Product SKU’s</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#bom" role="tab">Bill of Materials (BOM) Created on the
                     Fly</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#cad" role="tab">Multi-CAD Environment</a>
               </li>
            </ul>
         </div>
         <div class="col-md-8">
            <!-- Tab panes -->
            <div class="tab-content responsive-tabsContent">
               <div class="tab-pane active" id="cloud" role="tabpanel">
                  <p>Leveraging the power of the cloud, we simplify both implementation and management. No need for
                     specialized hardware or
                     additional computing software for you or your end customers.</p>
               </div>
               <div class="tab-pane" id="choice" role="tabpanel">
                  <p>Instead of hundreds of choices and decisions put the power of the product in your customer’s hands.
                     Your customers will
                     select the configurations and choices they want, personalizing products to their intent. Instead of
                     being confused by
                     too many choices, you allow your customers to make decisions in real time.</p>
               </div>
               <div class="tab-pane" id="social" role="tabpanel">
                  <p>As your customers create new personalized products, SOLIDWORKS Sell allows them to share their
                     designs with others. You
                     company benefits by providing your customers customized designs – by placing your brand logo on the
                     high-resolution
                     image. You benefit from customers sharing your brand and products on their social media
                     connections.</p>
               </div>
               <div class="tab-pane" id="augment" role="tabpanel">
                  <p>We offer you the opportunity to place your product in the setting of your customer’s choice using
                     Augmented Reality.
                     This functionality allows users to customize glasses on their face while wearing them OR place a
                     piece of furniture in
                     their room.</p>
               </div>
               <div class="tab-pane" id="experience" role="tabpanel">
                  <p>Every site has hundreds of images and difficult configuration tools. SOLIDWORKS Sell bring the
                     power of these tools to
                     the mass market by simplifying integration and implementation within your organization.</p>
               </div>
               <div class="tab-pane" id="mobile" role="tabpanel">
                  <p>Your customers can use the device of their choice (laptop, tablet, mobile) to engage your products
                     in a new and exciting
                     way. Giving your customers choice and seeing their custom creations will produce customer loyalty.
                  </p>
               </div>
               <div class="tab-pane" id="updates" role="tabpanel">
                  <p>Increase your time to market by creating immediate product updates on your website. Adding
                     SOLIDWORKS Sell to your
                     website allows changes or adding new products on your website within minutes, and without the need
                     to engage IT or your
                     Web team.</p>
               </div>
               <div class="tab-pane" id="supports" role="tabpanel">
                  <p>Whether you are looking at a complete website overhaul or a simple integration, SOLIDWORKS Sell has
                     you covered. We
                     integrate in using the latest web developer tools and shopping carts.</p>
               </div>
               <div class="tab-pane" id="secure" role="tabpanel">
                  <p>We don’t expose your 3D Intellectual Property to your customers. Using a proprietary process, we
                     keep your data safe.</p>
               </div>
               <div class="tab-pane" id="render" role="tabpanel">
                  <p>Have your customers create their unique offering and then create a high-resolution image OR create
                     highly rendered
                     images to show customers your best products. The choice is yours.</p>
               </div>
               <div class="tab-pane" id="sku" role="tabpanel">
                  <p>By creating choice, you create the possibility for near infinite product choices. You can expand or
                     limit what customers
                     are able to customize. We make sure you know what product each customer orders in the software, so
                     you remain
                     worry-free.</p>
               </div>
               <div class="tab-pane" id="bom" role="tabpanel">
                  <p>With all the possibilities this product creates for you, we take care of the BOM, so you can get
                     the right product to
                     the right customer each time–regardless of their choice.</p>
               </div>
               <div class="tab-pane" id="cad" role="tabpanel">
                  <p>Whether you are a SOLIDWORKS customer or using another CAD product, we have you covered. We accept
                     all CAD formats so
                     you can focus on creating great products.</p>
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
         <button class="btn btn-white rounded-pill btn-dialog" id="contact" data-toggle="modal"
            data-target="#contactModal" data-type="contact" data-title="Contact an Agent">Contact Us</button>
      </div>
   </div>
</section>
@stop

@push('foot')
<div class="modal fade" id="sell" tabindex="-1" role="dialog" aria-labelledby="sell" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Speak to a CAD MicroSolutions eCommerce Consultant</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div id="loaderSpinner"></div>
            <div data-form-block-id="d927d7a7-b2ac-e911-a987-000d3a3702ca"></div>
            <div id="dSxjkQfReUC8hF165ezKceNcvpKAdHK6We8fF0qbqVuo"></div>
         </div>
      </div>
   </div>
</div>
@endpush
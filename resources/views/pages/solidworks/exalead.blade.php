@extends('layouts.layout')
@section('title')
EXALEAD ONEPART
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-exalead')}}" />
@stop
@section('description')Dassault Systèmes®' EXALEAD OnePart provides a full set of applications to classify company
assets and ensure Engineering selects the preferred part. @stop
@section('keywords')sourcing and standardization intelligence, data intelligence, sourcing, standardization, reuse,
reduce, duplicate, master part, supply, procurement, onepart reuse, onepart reduce, onepart supply, cad, @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{ asset('storage/banners/EXALEAD-OnePart-1.png') }})">
  <div class="parallax-section__shadow"></div>
  <div class="container-fluid">
    <div class="content white-content d-flex justify-content-center align-items-center">
      <div>
        <div class="section-title parallax-section__title center-block mx-auto">
          <h1>EXALEAD OnePart</h1>
          <div></div>
        </div>
        <div>
          <p class="parallax-section__description">SOURCING & STANDARDIZATION INTELLIGENCE</p>
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
        <div class="h3 text-center">What is SOLIDWORKS EXALEAD ONEPART?</div>
        <div class="section-title-divider"></div>
      </div>
      <p class="text-center mx-auto lead" style="max-width:700px">EXALEAD OnePart provides a full set of applications to
        classify company assets, identify master parts for reuse, and ensure Engineering selects the preferred part,
        while monitoring over time the execution of company policy. Even more, Sourcing and Procurement will leverage
        these applications to optimize ordering by grouping orders or selecting the right price of technically viable
        alternative solutions.</p>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="section-block row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3>OnePart helps your business to simplify, organize and optimize your parts in selected contexts</h3>
        <br />
        <p>From the entire legacy of company assets, quality and method engineers are able to classify parts. Based on
          shape similarity and/or semantic criteria, each part is associated with the closest one to form a cluster that
          will eventually be classified into a family and sub-family. Once all the parts in the family are classified,
          specific parts can be tagged as either the master, alternate, or obsolete. This categorization of part
          families and sub-families, as well as the associated tags, is massively propagated into OnePart to guide part
          selection by designers and engineers and can be easily imported into the PDM and ERP systems. </p>
        <p>It also prevents deviation and ensures the organization doesn't proliferate the same part references already
          optimized in its catalog. Just as you previously ran checks every night: run OnePart catalog guards, based on
          the same predefined criteria used for catalog optimization, to receive a new part creation alert with a
          proposed classification or identification of existing similar parts to be reused.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <iframe width="100%" height="100%" class="mx-auto d-block" style="max-height:300px; max-width:500px"
          src="https://www.youtube.com/embed/Px-nfKlzW10" frameborder="0" allow="autoplay; encrypted-media"
          allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<section class="pb-0 pt-5 section-secondary">
  <div class="container-fluid">
    <div class="row pb-4 pt-3 order-sm-1  wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s"
      id="SpaceMouse-Compact">
      <div class="col col-lg-12 text-primary h2 text-left w-100 pb-0">EASE STANDARDIZATION</div>
      <div class="col-lg-6 mx-auto align-self-center" style="max-width:600px;">
        <iframe width="100%" height="100%" style="max-height: 350px;max-width:700px;min-height: 330px;"
          src="https://www.youtube.com/embed/s8wk02yh3FQ" frameborder="0" allow="autoplay; encrypted-media"
          allowfullscreen></iframe>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="d-flex py-md-4 py-4">
          <div>
            <div class="text-primary h5 text-left">OnePart helps your business to simplify, organize and optimize your
              parts in selected contexts</div>
            <p class=" text-left">From the entire legacy of company assets, quality and method engineers are able to
              classify parts. Based on shape similarity and/or semantic criteria, each part is associated with the
              closest one to form a cluster that will eventually be classified into a family and sub-family. Once all
              the parts in the family are classified, specific parts can be tagged as either the master, alternate, or
              obsolete. This categorization of part families and sub-families, as well as the associated tags, is
              massively propagated into OnePart to guide part selection by designers and engineers and can be easily
              imported into the PDM and ERP systems. </p>
            <p>
              It also prevents deviation and ensures the organization doesn't proliferate the same part references
              already optimized in its catalog. Just as you previously ran checks every night: run OnePart catalog
              guards, based on the same predefined criteria used for catalog optimization, to receive a new part
              creation alert with a proposed classification or identification of existing similar parts to be reused.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row pb-4 order-sm-1  wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0s" id="enforce">
      <div class="col-lg-6 align-self-center">
        <div class="text-primary h2 text-left w-100 pb-0 m-0">ENFORCE REUSE</div>
        <div class="d-flex py-md-4 py-4">
          <div>
            <div class="text-primary h5 text-left">Find and reuse existing parts, 2D/3D designs and related
              documentation</div>
            <p class=" text-left">EXALEAD OnePart provides designers and engineers with an intuitive application to
              reuse existing parts instead of recreating parts, wasting time or simply not finding the right part. With
              just a few clicks, users explore legacy parts and related 2D/3D designs, gaining immediate insight into
              vast amounts of previously hidden data. They can further refine their search using side-by-side
              comparisons to identify the right part for reuse. When a similar part is discovered, the user can also
              analyze important related documentation like specifications, testing, validation, and certification
              material in multiple formats (such as .xls & .pdf) to facilitate optimal reuse and a complete view of the
              situation.</p>
            <p><strong>The EXALEAD OnePart integrated search experience is uniquely capable of combining similarity,
                metadata, and semantic-linked documents and related information with shape search capabilities, all on a
                single page.</strong></p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="text-primary h2 text-left w-100 pb-0 m-0">EASE SOURCING</div>
        <div class="d-flex py-md-4 py-4">
          <div>
            <div class="text-primary h5 text-left">
              PartSupply is an online service aggregating tens of millions of sourceable parts that allows you to search
              and reuse public part catalogs
            </div>
            <p class=" text-left">Whether from Procurement, Sourcing or Engineering, accessing online standard part
              catalogs has always been a must-have. With millions of sourceable parts available from CAD design
              applications or from your Web browser, PartSupply on the 3DEXPERIENCE Marketplace brings you this
              capability with the ease of use of the intuitive user interface of OnePart.</p>
            <ul>
              <li>One unique UI access to both entreprise and supplier components
              <li>Single search, refinement, compare, etc.
              <li>Download models in CATIA V5, SOLIDWORKS and many other formats
            </ul>
            <p><strong>In addition, if OnePart Reuse is available on site, it’s as easy as a search to compare parts
                in-house and across countries.</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
@extends('layouts.layout')
@section('title')
3D Creator | 3DEXPERIENCE Platform
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.design.3d-creator')}}" />
@stop
@section('description')Quickly create and collaborate on 3D designs in
the cloud and deliver innovative products to market faster.
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
    style="min-height:250px; background-image:url({{asset('/images/pages/solidworks/3dexperience/3d-creator.jpg')}});">
    <div class="parallax-section__shadow"></div>
    <div class="container-fluid">
        <div class="content white-content d-flex justify-content-center align-items-center">
            <div>
                <div class="section-title parallax-section__title center-block mx-auto">
                    <h1>3D Creator</h1>

                    <div class="section-title-divider"></div>
                    <p class="parallax-section__description h4">3DEXPERIENCE Platform</p>

                    <h2 class="text-center mx-auto lead h6" style="max-width:500px">Quickly create and collaborate on 3D
                        designs in the cloud and deliver innovative products to market faster.</h2>
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
<section class="section-secondary">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <h3 class="mb-5">Create. Collaborate. Innovate.</h3>
                <p class="lead mb-0">Solve new problems with a cloud-based 3D modeling solution that runs on the
                    3DEXPERIENCE® platform and works seamlessly with SOLIDWORKS®. Easily and quickly create, review,
                    and evaluate 3D conceptual and detailed models with 3D Creator (which includes the xDesign app).
                    Collaborate without friction and use solutions that work together seamlessly on the platform to
                    design, simulate and manufacture your products and manage your product data and lifecycle.</p>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-0">
            <img src="{{asset('images/pages/solidworks/3dexperience/DesignGuidance.jpg')}}" class="img-fluid w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>3D Creator | Design</small>
                <h3>Inspire New Concepts with Design Guidance</h3>
                <ul class="pl-3">
                    <li>Let Design Guidance suggest where the minimum material should be to meet your
                        specifications.</li>
                    <li>Get design inspiration from real-world loads and fixtures.</li>
                    <li>Optimize and evolve existing designs with a generative design approach.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div
            class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
            <img src="{{asset('images/pages/solidworks/3dexperience/DesignGuidance2.jpg')}}" class="img-fluid  w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto  order-2 order-lg-1">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>3D Creator | Design</small>
                <h3>Focus on Design and Not File Management</h3>
                <ul class="pl-3 text-left">
                    <li>Iterate rapidly with the ability to change design intent without the rework associated with
                        traditional parametric modeling.</li>
                    <li>With all your data on the platform, there’s no need to worry about the structure of parts
                        and assemblies.</li>
                    <li>Built-in revision control enables traceability without the overhead of specialized tools.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center">
            <img src="{{asset('images/pages/solidworks/3dexperience/sidebyside.jfif')}}" class="img-fluid w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>3D Creator | Design</small>
                <h3>Easily Interact with SOLIDWORKS CAD</h3>
                <ul class="pl-3 text-left">
                    <li>Bring your 3D Creator designs into SOLIDWORKS desktop with direct import and export.</li>
                    <li>When you modify your models in SOLIDWORKS desktop or 3DEXPERIENCE design tools, your 3D
                        Creator files update automatically, and vice versa.</li>
                    <li>Seamlessly transition between 3D Creator and 3D Sculptor as well as other 3DEXPERIENCE
                        design solutions.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div
            class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
            <img src="{{asset('images/pages/solidworks/3dexperience/3d-sculptor5_0.jpg')}}" class="img-fluid w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto  order-2 order-lg-1">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>3D Creator | Design</small>
                <h3>Tap into Your Network with Collaboration Tools</h3>
                <ul class="pl-3 text-left">
                    <li>Create your own dashboards and communities to review and share the latest data. </li>
                    <li>Manage and assign tasks to team members with a drag-and-drop card-view tool.</li>
                    <li>Easily source parts and services from around the world in 3DEXPERIENCE Marketplace.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center">
            <img src="{{asset('images/pages/solidworks/3dexperience/3DS_2019_CLOUD_ILLUSTRATION_BUSINESS_1766x1179_RVB_CrOp.jpg')}}"
                class="img-fluid w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>3D Creator | Design</small>
                <h3>Accelerate Innovation with a Cloud-Based Platform</h3>
                <ul class="pl-3 text-left">
                    <li>With its growing solution portfolio, the 3DEXPERIENCE platform enables you to manage all facets
                        of your product development process.</li>
                    <li>View, annotate, manage and share designs from anywhere, at any time and on any device.</li>
                    <li>Reduce infrastructure costs, IT overhead, software maintenance, and complexity by using secure
                        cloud technology.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@php
$resources = App\Resource::find([58]);
@endphp
@if(count($resources) > 0)
<section class="pt-0">
    <div class="container">
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
                                        <img src="{!! thumbnail($resource->thumbnail) !!}" style="width:100%;"
                                            alt="{{$resource->name}}">
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
    </div>
</section>
@endif
<section class=" parallax-section parallax d-flex"
    style="min-height:500px; background-image:url({{asset('/images/pages/solidworks/3dexperience/3dxworksbannerb10.jpg')}});">
    <div class="parallax-section__shadow"></div>
    <div class="container-fluid">
        <div class="content white-content d-flex justify-content-start align-items-center">
            <div>
                <div class="section-title parallax-section__title center-block text-left">
                    <h3 class="h1 text-left">It's Time to Transform the Way You Work</h3>
                    <p class="lead">Contact us to learn more and get started with 3D Creator</p>
                </div>
                <button type="button" class="btn btn-lg btn-rounded btn-white mx-auto text-sm" data-toggle="modal" data-target="#experience">
                    Learn More<i class="ml-2 far fa-caret-square-right"></i>
                  </button>
            </div>
        </div>
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

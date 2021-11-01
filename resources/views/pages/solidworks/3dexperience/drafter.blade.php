@extends('layouts.layout')
@section('title')
Drafter | 3DEXPERIENCE Platform
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.design.drafter')}}" />
@stop
@section('description')Rapidly generate and detail 2D drawings from 3D models, speeding up the design-to-manufacturing
process.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
    style="min-height:250px; background-image:url({{asset('/images/pages/solidworks/3dexperience/drafter.jpg')}});">
    <div class="parallax-section__shadow"></div>
    <div class="container-fluid">
        <div class="content white-content d-flex justify-content-center align-items-center">
            <div>
                <div class="section-title parallax-section__title center-block mx-auto">
                    <h1>Drafter</h1>

                    <div class="section-title-divider"></div>
                    <p class="parallax-section__description h4">3DEXPERIENCE Platform</p>

                    <h2 class="text-center mx-auto lead h6" style="max-width:500px">Rapidly generate and detail 2D
                        drawings from 3D models, speeding up the design-to-manufacturing process.</h2>
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
                <h3 class="mb-5">Draft. Detail. Communicate.</h3>
                <p class="lead mb-0">Drafter enables you to quickly create and detail 2D drawings, and communicate how
                    your design must be manufactured. Whenever a change occurs in your 3D model, all drawing views are
                    automatically updated. Using Drafter’s comprehensive dimension, tolerancing and annotation toolset
                    accelerates the product development process by significantly reducing design-to-manufacturing time,
                    while decreasing costs.</p>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-0">
            <img src="{{asset('images/pages/solidworks/3dexperience/DrafterViews2_0.jpg')}}" class="img-fluid w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>Drafter | Design</small>
                <h3>Get Ready to Manufacture – Fast!</h3>
                <ul class="pl-3">
                    <li>Quickly generate production-ready 2D drawings from your 3D parts and assemblies.</li>
                    <li>Drag and drop your 3D model into a drawing to automatically create a view.</li>
                    <li>Your drawings are always up-to-date as, at the click of a button, they instantly refresh when
                        you modify your 3D model.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div
            class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
            <img src="{{asset('images/pages/solidworks/3dexperience/DrafterDetails2.jpg')}}" class="img-fluid  w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto  order-2 order-lg-1">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>Drafter | Design</small>
                <h3>Focus on the Details</h3>
                <ul class="pl-3 text-left">
                    <li>Create standard and detail views, sections, and more automatically and accurately based on your
                        3D model.</li>
                    <li>Easily apply production-quality dimensions and annotations to your drawings.</li>
                    <li>Create all necessary symbols, notes and tables.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center">
            <img src="{{asset('images/pages/solidworks/3dexperience/DrafterCommunication2.jpg')}}" class="img-fluid w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>Drafter | Design</small>
                <h3>Facilitate Collaboration and Communication</h3>
                <ul class="pl-3 text-left">
                    <li>With all data saved to the cloud, designers and engineers can share drawings in real time and
                        all stakeholders can view them in a web browser without needing to install viewers.</li>
                    <li>Drawings are available to view on any device, at any time, and from anywhere including the
                        manufacturing shop floor.</li>
                    <li>Automatic revision control of both the 3D data and the drawings is fully integrated.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="p-0">
    <div class="row d-flex align-items-start justify-content-end icon-circles p-0 mx-0">
        <div
            class="col-xl-6 col-lg-6 col-md-12 m-0 px-0 align-self-center d-flex justify-content-center order-lg-2 order-1">
            <img src="{{asset('images/pages/solidworks/3dexperience/3DS_2019_CLOUD_ILLUSTRATION_BUSINESS_1766x1179_RVB_CrOp.jpg')}}" class="img-fluid w-100">
        </div>
        <div class="col-xl-6 col-lg-5 col-md-12 py-5 py-lg-0 text-left m-auto  order-2 order-lg-1">
            <div class="w-100 mx-auto" style="max-width:500px">
                <small>Drafter | Design</small>
                <h3>Accelerate Innovation with a Cloud-Based Platform</h3>
                <ul class="pl-3 text-left">
                    <li>With its growing solution portfolio, the 3DEXPERIENCE® platform enables you to manage all facets
                        of your product development process.</li>
                    <li>Create your own dashboards and communities to review and share the latest product data. </li>
                    <li>Reduce infrastructure costs, IT overhead, software maintenance, and complexity by using secure
                        cloud technology.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@php
$resources = App\Resource::find([63]);
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
                    <p class="lead">Contact us to learn more and get started with Drafter</p>
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
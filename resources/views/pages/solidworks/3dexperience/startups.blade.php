@extends('layouts.layout')
@section('title')
3DEXPERIENCE Works for Startups
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.3dexperience.startups')}}" />
@stop
@section('description')Software, training, support & co-marketing resources to help early-stage startups get their
product to market, and their business off the ground.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
style="min-height:450px; background-image:url({{asset('/images/pages/solidworks/3dexperience/hero-startups.jpg')}})">
    <div class="parallax-section__shadow"></div>
    <div class="container-fluid">
        <div class="content white-content d-flex justify-content-center align-items-center">
            <div>
                <div class="section-title parallax-section__title center-block mx-auto">
                    <h1>3DEXPERIENCE WORKS FOR STARTUPS</h1>
                    <div class="section-title-divider"></div>
                </div>
                <div class="Left">
                    <p class="parallax-section__description">Software, training, support & co-marketing resources to
                        help early-stage startups get their product to market, and their business off the ground.
                    </p>
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
            <h2>SOLUTIONS FOR ENTREPRENEURS & STARTUPS</h2>
            <div class="section-title-divider "></div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <p>Starting a business from the ground-up isn’t easy, especially with limited resources in a
                    competitive market. The 3DEXPERIENCE Works for Startups program offers free CAD software to help
                    your
                    business get off the ground. In addition to software and training, qualifying companies that
                    register for
                    the program with CAD MicroSolutions get access to our robust technical support team, co-marketing
                    opportunities from both CAD Micro and SOLIDWORKS, and access to complimentary online webinars and
                    hands-on events to help you succeed.</p>

                <p>Check out the new features now available in <a href="{{route('solidworks')}}">SOLIDWORKS 2020</a> -
                    many of which are in direct response to
                    user requests – that provide users a suite of seamlessly integrated software tools that allow you to
                    go
                    from concept to manufactured product faster, all in the native SOLIDWORKS environment.</p>
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
                    <li class="list-group-item d-flex flex-row align-items-center"><i
                            class="fas fa-chevron-right mr-4"></i>Design guidance from SOLIDWORKS engineers and
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
<section class="section-secondary">
    <div class="container-fluid">
        <div class="content">
            <div class="section-title center-block mx-auto mb-0">
                <h2>DO I QUALIFY FOR THE PROGRAM?</h2>
                <div class="section-title-divider"></div>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column w-100">
                <p class="text-center" style="max-width:400px">The 3DEXPERIENCE Works for Startups program is tailored
                    for early-stage hardware startups that meet the following acceptance criteria:</p>
                <ul class="list-group content-center" style="max-width:700px">
                    <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>The
                        company is not currently a SOLIDWORKS customer</li>
                    <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>The
                        company is currently or plans to design, build and sell a physical product</li>
                    <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>The
                        company has less than $1 million in funding</li>
                    <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>The
                        company has less than $1 million in aggregate lifetime revenue</li>
                    <li class="list-group-item d-flex flex-row align-items-center"><i class="fas fa-check mr-4"></i>The
                        company has been in business for less than 3 years</li>
                </ul>
                <small class="text-primary mt-4">Service providers, resellers, contractors and consulting companies do
                    not qualify.</small>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <p>The ultimate goal of the 3DEXPERIENCE Works for Startups progam is to give back to the hardware startup
            community, help these companies access the tools they need to succeed, and to provide an affordable solution
            to keep their business moving forward after the initial program finishes. </p>
        <p>CAD MicroSolutions has helped many startups around Ontario get their business off the ground and achieve
            success by leveraging this program. Contact us if you’d like more information or would like to apply for the
            program.</p>
        <button class="btn btn-md pl-4 pr-3 btn-primary btn-rounded btn-dialog mr-3" data-toggle="modal"
            data-target="#contactModal" data-type="contact" data-title="Contact Request Form">Contact Us <i class="ml-4 fas fa-chevron-right"></i></button>
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
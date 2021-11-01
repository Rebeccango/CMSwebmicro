@extends('layouts.layout')
@section('title')
SMAP3D Plant Design
@stop
@section('meta')
<link rel="canonical" href="{{route('smap3d')}}" />
@stop
@section('description')Smap3D Plant Design enables automated and simplified 2D/3D plant and pipeline planning with
models for P&ID, 3D piping,
ad isometrics.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
	style="min-height:450px; background-image:url(https://www.cadmicro.com/storage/images/partner/smap3d/titelbild_swx-partner-page_smap3d707_45.jpg)">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>SMAP3D Plant Design</h1>
					<div class="section-title-divider"></div>
					<h2 class="h3">Intelligent 2D/3D Plant and Piping Design</h2>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>
<section class="flex-card py-5">
	<div class="container">
		<h2 class="h1 pb-0 mb-0">Networking, Automation, Simplification</h2>
		<div class="row d-flex justify-content-center align-items-start">
			<div class="col col-12 col-md-6 col-sm-12 pt-5">
				<p class="lead"><strong>Smap3D Plant Design</strong> enables automated and simplified 2D/3D plant and pipeline planning and is
					fully integrated in
					SOLIDWORKS. It covers the whole process, from P&ID through Piping and Isometrics.</p>
				<p class="lead">Smap3D enables you to design compete systems, including 3D mechanical, structural and pipe/tube
					design, all directly
					within the SOLIDWORKS environment. It closes the gap between plant, equipment and machine construction, saving
					time and
					increasing collaboration between design teams.</p>
			</div>
			<div class="col col-12 col-md-6 col-sm-12 pt-5">
				<p class="lead"><strong>P&amp;ID:</strong> Start with the P&ID module to design your schematics in an automated
					and
					simplified process.</p>
				<p class="lead"><strong>3D Piping:</strong> Move on to 3D pipeline planning with Smap3D Piping, turning
					SOLIDWORKS into
					an extremely powerful 3D plant
					engineering solution.</p>
				<p class="lead"><strong>Isometric:</strong> Smap3D Isometric is a highly configurable software for creating
					piping
					isometric drawings, and produces
					customized reports including BOMs.</p>
				<a href="#learnmore" class="btn btn-lg btn-rounded btn-primary mr-3 mt-4">Request a Demo</a>
			</div>
		</div>
	</div>
</section>
<section class="section-secondary py-5">
	<div class="container">
		<div class="row d-flex justify-content-center align-items-start">
			<div class="col col-12 col-md-12 col-lg-6 col-sm-12 py-5 px-5 order-1 order-md-1">
				<div class="h3">Key Features:</div>
				<ul class="lead">
					<li>3D Piping</li>
					<li>Quick start to production through supplied standard parts and symbols library</li>
					<li>Wide range of predefined industry pipe specs</li>
					<li>BOM, page templates, ISO styles included</li>
					<li>Automatic synchronization of lists and reports</li>
				</ul>
				<div class="h3 mt-5">Key Benefits:</div>
				<ul class="lead">
					<li>Time savings through complete solution: P&ID to Piping to ISO</li>
					<li>Linked workflow from P&ID to 3D piping and isometrics</li>
					<li>Fast and exact design of complex 3D piping systems according to the pipe specs</li>
					<li>Isometrics generated at the touch of a button</li>
					<li>Support and control the 3D pipeline creation with 3D Piping</li>
					<li>Importing of scan data to SOLIDWORKS</li>
				</ul>
			</div>
			<div class="col col-md-12 col-sm-12 col-lg-6 order-0 order-md-0 px-0">
				<div class="embed-responsive embed-responsive-4by3 mt-5">
					<iframe src="https://www.smap3d.com/fileadmin/user_upload/Video/_SMAP3D_Slider_Video_180299_RZ_EN.mp4"
						class="embed-responsive-item" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="videoCaption w-100">Smap3D Plant Design</div>
			</div>
		</div>
	</div>
</section>

<section id="learnmore">
	<div class="container mt-5">
		<div class="d-flex justify-content-center align-items-center flex-column w-100">
			<div class="section-title center-block mx-auto">
				<h2>Learn More or Request a Demo</h2>
				<div class="section-title-divider"></div>
			</div>
			<div data-form-block-id="3c57165f-d167-eb11-a812-002248029f9e"></div>
			<div id="dixgL6crj9bWvb8DAsgRY2rQ831uyka51xz6O2tybzRI"></div>
		</div>
	</div>
</section>
@stop
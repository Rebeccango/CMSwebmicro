@extends('layouts.layout')
@section('title') Robot Solutions | 3D Scanning @stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.hardware.gom-robot')}}" />
@stop
@section('description')The ATOS series of industrial non-contact 3D scanners using structured blue light provide
precision scans with detailed resolution at high speed. ATOS is engineered with advanced hardware and intelligent
software for repeatable, accurate
measurements with flexibility and process reliability.
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
background-image:url({{ asset('images/pages/3d-scanning/gom_scancobot-atos-q_technical-data.jpg') }})">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid mt-5">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>GOM Robot Solutions</h1>
					<div class="section-title-divider"></div>
					<h2 class="h4">Improving product quality and accelerating product development and manufacturing processes</h2>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-0">
	<div class=" border-bottom border-top">
		<div class="row p-0 mx-auto">
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0 border-right">
				<div class="d-flex align-items-center align-items-lg-start justify-content-between flex-column h-100">
					<img src="{{ asset("images/pages/3d-scanning/scanbox-4_720x840.jpg") }}" class="img-fluid w-100" />
					<div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
						<h3>ATOS ScanBox 4105</h3>
						<p class="lead">Measurement of Small Complex Components up to 500 mm in Size</p>
						<p class="mt-4">The ATOS ScanBox is a complete optical measuring machine that was developed by GOM for an
							efficient quality control in
							production and manufacturing processes. The ATOS ScanBox has been installed several hundred times
							worldwide and is
							successfully used in a variety of industries. Eleven models are available for different part sizes and
							applications.</p>
						<p>While mechanical measuring systems capture data in a point-based or linear manner, optical measuring
							systems provide
							full-field data about deviations between the actual 3D coordinates and the CAD data. As this measuring
							data contains all
							the object information, in addition to the surface deviations from the CAD, the software also
							automatically derives
							detailed information such as GD&T, trimming or hole positions.</p>

							<div class="embed-responsive embed-responsive-16by9 mt-5">
								<iframe src="https://www.youtube.com/embed/aT-R1m8YKQ8" class="embed-responsive-item" frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<div class="videoCaption w-100">GOM ATOS ScanBox 4105</div>
					</div>
				</div>
			</div>
			<hr class="col-lg-12 d-flex d-lg-none m-0" />
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center border-right p-0">
				<div class="d-flex align-items-center align-items-lg-start justify-content-between flex-column h-100">
					<img src="{{ asset("images/pages/3d-scanning/scancobot_720x480.jpg") }}" class="img-fluid w-100" />
					<div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
						<h3>GOM ScanCobot</h3>
						<p class="lead">The perfect combination for simple automated inspections tasks</p>
						<p class="mt-4">GOM ScanCobot is a mobile measuring station with a collaborative robot, a motorized rotation
							table and powerful
							software. In a short measuring time, the optical ATOS 3D scanner captures quality information at a high
							level of detail,
							providing a reliable basis for easy interpretation.
						</p>
						<p>To measure a part completely, the sensor must face the part from
							different directions. The GOM ScanCobot uses a collaborative robot to perform this normally manual work
							process.
							Combined with the motorized rotation table, the robot can move along the sensor positions very quickly one
							by one.
							Efficient scanning and subsequent automatic inspection speed up quality control processes.</p>
							<div class="embed-responsive embed-responsive-16by9 mt-5">
									<iframe src="https://www.youtube.com/embed/9a7g0Xgdt08" class="embed-responsive-item" frameborder="0"
										allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								<div class="videoCaption w-100">GOM ScanCobot - The Easy Automated Solution for Optical 3D Metrology</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
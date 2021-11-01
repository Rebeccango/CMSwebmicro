@extends('layouts.layout')
@section('title') ZEISS Automated Solutions | 3D Scanning @stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.hardware.zeiss-automated')}}" />
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
background-image:url(https://www.cadmicro.com/storage/pages/zeiss-automated-solutions/zeiss-automated-solutions-hero.jpg)">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid mt-5">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>ZEISS Automated Solutions</h1>
					<div class="section-title-divider"></div>
					<h2 class="h4">Pushing the limits of what’s possible with advanced optical sensors on robots.</h2>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-0">
	<div class="container">
		<div class="row p-0 mx-auto">
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0 d-flex align-items-end justify-content-center"
				style="background-color:#ffffff">
				<img
					src="https://www.cadmicro.com/storage/pages/zeiss-automated-solutions/zeiss-aimax-in-action.ts-1520932525374.jpg"
					class="img-fluid" style="max-height:400px" />
			</div>
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0">
				<div class="d-flex align-items-center align-items-center justify-content-center flex-column h-100">
					<div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
						<h2 class="display-4">Digital-optical 3D sensor</h2>
						<p class="h2">ZEISS AIMax</p>
						<p class="lead">Three measuring principles</p>
						<p class="mt-4">ZEISS AIMax is the new benchmark in robot-based 3D inline metrology with an unique
							combination of three measuring
							principles in one compact sensor.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="m-0"/>
<section class="py-0">
	<div class="container">
		<div class="row p-0 mx-auto">
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0 d-flex align-items-center justify-content-center order-1"
				style="background-color:#ffffff">
				<img
					src="https://www.cadmicro.com/storage/pages/zeiss-automated-solutions/zeiss-aimax-cloud.ts-1521023464750.jpg"
					class="img-fluid" />
			</div>
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0 order-0">
				<div class="d-flex align-items-center align-items-center justify-content-center flex-column h-100">
					<div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
						<h2 class="display-4">Capture 3D point clouds in-line</h2>
						<p class="h2">ZEISS AIMax cloud</p>
						<p class="lead">Optical 3D sensor for in-line measurements</p>
						<p class="mt-4">The ZEISS AIMax cloud optical 3D sensor is the new benchmark in robot-based 3D in-line metrology in the fields of sheet
						metal processing and car body construction. The sensor generates 3D point clouds directly at the production line and
						measures complex features with high precision in a fraction of a second.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="m-0" />
<section class="">
	<div class="container">
		<h2 class="display-4">Process inspection with stationary and mobile 3D sensors</h2>
		<div class="row p-0 mx-auto">
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0 d-flex align-items-start justify-content-center"
				style="background-color:#ffffff">
				<img
					src="https://www.cadmicro.com/storage/pages/zeiss-automated-solutions/zeiss-aimax-bestfit.ts-1521099348184.jpg"
					class="img-fluid" />
			</div>
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0">
				<div class="d-flex align-items-center align-items-center justify-content-center flex-column h-100">
					<div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
						<p class="h2">ZEISS AIMax Inline and AIMax BestFit</p>
						<p class="lead">Stationary and mobile 3D sensors</p>
						<p class="mt-4">The AIMax Inline and AIMax BestFit fixed sensors from ZEISS are compact, optical 3D geometry sensors designed for
						industrial use with in-line measuring technology. A comprehensive technology package allows you to complete various
						tasks such as quality assurance, location recognition and production-control jobs, including robot guidance.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr class="m-0" />
<section class="py-0">
	<div class="">
		<div class="row p-0 mx-auto">
			<div
				class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0 d-flex align-items-center justify-content-center order-1 p-0"
				style="background-color:#ffffff">
				<img
					src="https://www.cadmicro.com/storage/pages/zeiss-automated-solutions/zeiss-aicell-trace-2.ts-1591599993149.jpg"
					class="img-fluid w-100" />
			</div>
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 text-center p-0 order-0">
				<div class="d-flex align-items-center align-items-center justify-content-center flex-column h-100">
					<div class="w-100 position-relative text-center text-md-left p-5" style="z-index:1">
						<h2 class="display-4">A correlation-free inline measuring cell</h2>
						<p class="h2">ZEISS AICell trace</p>
						<p class="mt-4">The ZEISS AICell trace correlation-free in-line measuring cell enables real-time process monitoring of complex
						characteristics and ramp-up support of the car body production processes.</p>
						<ul class="text-left">
							<li>Correlation-free</li>
							<li>Reliable measuring results starting with the first part</li>
							<li>Usage in the production area including temperature fluctuations</li>
							<li>Robot-Independent accuracy</li>
							<li>Measurement of both individual parts and complete car body inline</li>
							<li>Higher system accuracy</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
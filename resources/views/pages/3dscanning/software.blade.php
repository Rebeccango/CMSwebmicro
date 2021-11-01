@extends('layouts.layout')
@section('title')Scanning Software | 3D Scanning @stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.software.index')}}" />
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
background-image:url({{ asset('images/pages/3d-scanning/gom_scancobot-atos-q_technical-data.jpg') }})">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid mt-5">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>Scanning Software</h1>
					<div class="section-title-divider"></div>
					<h2 class="h4">FOR YOUR ENTIRE DIGITAL MANUFACTURING WORKFLOW</h2>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-0">
	<div class=" border-bottom">
		<div class="row p-0 mx-auto">
			<div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center p-0 border-right border-bottom">
				<div class="d-flex align-items-center align-items-lg-start justify-content-between flex-column h-100">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/geomagic-control-x-overview.jpg" class="img-fluid d-none d-md-block" />
					<div class="w-100 position-relative text-center text-md-left px-5 pt-5 h-100" style="z-index:1">
						<h3>Geomagic Design X</h3>
						<p class="lead">Reverse Engineering Software</p>
						<ul class="pl-3 text-left">
							<li>
								Enables faster time to market, better fit, and longer product life cycles
							</li>
							<li>
								Works seamlessly with any CAD software
							</li>
							<li>
								Provides complete toolsets for solids, surfaces, and meshes
							</li>
							<li>
								Combines scan processing and CAD plus real-time feedback
							</li>
							<li>
								Works like your CAD software so you can start using it right away
							</li>
						</ul>
					</div>
					<div class="px-5 pb-5 d-flex align-items-center justify-content-center w-100">
					<a href="{{route('3d-scanning.software.geomagic-design-x')}}" class="btn btn-primary btn-rounded">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center border-right p-0 border-bottom">
				<div class="d-flex align-items-center align-items-lg-start justify-content-between flex-column h-100">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/geomagic-for-solidworks-monitor.jpg"
						class="img-fluid d-none d-md-block" />
					<div class="w-100 position-relative text-center text-md-left px-5 pt-5 h-100" style="z-index:1">
						<h3>Geomagic for SOLIDWORKS</h3>
						<p class="lead">Reverse Engineering-to-SOLIDWORKS Software</p>
						<ul class="pl-3 text-left">
							<li>
								Scans directly into SOLIDWORKS
							</li>
							<li>
								Uses plug-in toolsets that deliver a subset of Geomagic Design X tools
							</li>
							<li>
								Supports color scanning and file import
							</li>
							<li>
								Provides fast, automated point-cloud processing
							</li>
							<li>
								Offers industry-leading performance at a competitive price
							</li>
						</ul>
					</div>
					<div class="px-5 pb-5 d-flex align-items-center justify-content-center w-100">
						<a href="{{route('3d-scanning.software.geomagic-for-solidworks')}}" class="btn btn-primary btn-rounded">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center p-0 border-bottom">
				<div class="d-flex align-items-center align-items-lg-start justify-content-center flex-column h-100">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/geomagic-x-overview.jpg" class="img-fluid d-none d-md-block" />
					<div class="w-100 position-relative text-center text-md-left px-5 pt-5 h-100" style="z-index:1">
						<h3>Geomagic Control X</h3>
						<p class="lead">3D Inspection and Metrology Software</p>
						<ul class="pl-3 text-left">
							<li>
								Makes it easy to both capture and interpret scan data
							</li>
							<li>
								Enables anyone to get results with little or no training
							</li>
							<li>
								Handles huge data sets quickly and easily with scan-native algorithms built on a CAD kernel
							</li>
							<li>
								Provides all the tools you need for professional-level inspection
							</li>
							<li>
								Works with any 3D scanner or PCMM arm
							</li>
						</ul>
					</div>
					<div class="px-5 pb-5 d-flex align-items-center justify-content-center w-100">
						<a href="{{route('3d-scanning.software.geomagic-control-x')}}" class="btn btn-primary btn-rounded">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center border-right p-0 border-bottom">
				<div class="d-flex align-items-center align-items-lg-start justify-content-between flex-column h-100">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/gom/gom-inspect-elearning-classroom.jpg"
						class="img-fluid d-none d-md-block" />
					<div class="w-100 position-relative text-center text-md-left px-5 pt-5 h-100" style="z-index:1">
						<h3>GOM Inspect – Free</h3>
						<p class="lead">Evaluation software for 3D measurement data</p>
						<p>GOM Inspect software is used in product development, quality control and production. It facilitates shape
							and dimension
							analysis, 3D inspection and mesh processing for 3D point clouds and CAD data sets from fringe projection
							or laser
							scanners, coordinate measurement machines (CMM) and other measuring systems.</p>

					</div>
					<div class="px-5 pb-5 d-flex align-items-center justify-content-center w-100">
						<a href="{{route('3d-scanning.software.gom-inspect-free')}}" class="btn btn-primary btn-rounded">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 col-md-12 col-xs-12 text-center border-right p-0 border-bottom">
				<div class="d-flex align-items-center align-items-lg-start justify-content-between flex-column h-100">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/gom/gom-inspect-teaching-by-doing.jpg"
						class="img-fluid d-none d-md-block" />
					<div class="w-100 position-relative text-center text-md-left px-5 pt-5 h-100" style="z-index:1">
						<h3>GOM Inspect – Professional</h3>
						<p class="lead">Raise inspection to the next level.</p>
						<p>GOM Inspect Professional enables you and your team to work faster and more efficiently.</p>
						<p>Use GOM Inspect for the simplest or most complex inspection tasks throughout the entire inspection
								process – from
								scanning the part, mesh editing, CAD import, required GD&T computation to trend analyses, digital assembly
								or
								proprietary inspection.</p>
					</div>
					<div class="px-5 pb-5 d-flex align-items-center justify-content-center w-100">
						<a href="{{route('3d-scanning.software.gom-inspect-pro')}}" class="btn btn-primary btn-rounded">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
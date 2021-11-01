@extends('layouts.layout')
@section('title') Portable Solutions | 3D Scanning @stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.hardware.gom-portable')}}" />
@stop
@section('description')The ATOS series of industrial non-contact 3D scanners using structured blue light provide
precision scans with detailed
resolution at high speed. ATOS is engineered with advanced hardware and intelligent software for repeatable, accurate
measurements with flexibility and process reliability.
@stop
@section('body')
<section class="trans-header-window p-0">
	<section class="cd-hero">
		<ul class="cd-hero-slider" data-loopVideo="false" data-autoPlayDelay="0" data-height="800px">
			<li class="cd-bg-video selected">
				<div class="cd-bg-video-wrapper" data-poster="{{asset('images/pages/gom/atosq/gom_atos-q_header.png')}}"
					data-video="{!!asset('images/pages/gom/atosq/gom_atos-q_header')!!}">
				</div>
			</li>
		</ul>
	</section> <!-- .cd-hero -->
	<div class="trans-heading">
		<div class="container-fluid d-flex justify-content-center align-items-center">
			<div class="white-content d-flex justify-content-center align-items-center">
				<div class="d-flex flex-wrap justify-content-center align-items-center">
					<div class="text-center">
						<h1 class="h1 display-4">GOM Portable Solutions</h1>
					</div>
					<div class="w-100" style="margin-top:50%">
						@include('layouts.generic_contact_buttons')
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 py-4">
				<div class="card h-100 d-flex">
					<img class="card-img-top" src="https://www.cadmicro.com/images/pages/3d-scanning/gom_atos-compact-scan.jpg"
						alt="Card image cap">
					<div class="card-body d-flex flex-column">
						<h5 class="card-title">ATOS Compact Scan</h5>
						<p class="card-text" style="flex-grow:1">A precise mobile 3D scanning solution providing unparalleled
							accuracy, sharpness and reliability. Whether scanning,
							inspecting, reverse engineering, probing or optimizing your parts, the ATOS Compact Scan is ideal for
							parts both small
							and large.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 py-4">
				<div class="card h-100 d-flex">
					<img class="card-img-top" src="https://www.cadmicro.com/images/pages/3d-scanning/gom_atos-core.jpg"
						alt="Card image cap">
					<div class="card-body d-flex flex-column">
						<h5 class="card-title">ATOS Core</h5>
						<p class="card-text" style="flex-grow:1">Perfect for 3D measurement of small and medium sized objects up to
							500mm. From simple 3D scanning to fully automated
							measurement and inspection processes, the ATOS Core provides high quality data for reverse engineering or
							rapid
							prototyping applications.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 py-4">
				<div class="card h-100 d-flex">
					<img class="card-img-top" src="https://www.cadmicro.com/images/pages/3d-scanning/gom_atos-q-1.jpg"
						alt="Card image cap">
					<div class="card-body d-flex flex-column">
						<h5 class="card-title">ATOS Compact Scan</h5>
						<p class="card-text" style="flex-grow:1">A new level of reliability and versatility in 3D scanning, making
							it a perfect fit for complex measurement and
							inspection tasks for industry use. Whether performing quality assurance for parts that were additively
							manufactured,
							plastic or injection molded, casted, punched, formed or otherwise, the ATOS Q rises to the challenge.</p>
						<a href="https://www.cadmicro.com/3d-scanning/hardware/atos-q" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 py-4">
				<div class="card h-100 d-flex">
					<img class="card-img-top" src="https://www.cadmicro.com/images/pages/3d-scanning/gom-tritop-header.jpg"
						alt="Card image cap">
					<div class="card-body d-flex flex-column">
						<div style="flex-grow:1">
							<h5 class="card-title">TRITOP</h5>
							<p class="card-text" style="flex-grow:1">Portable and compact, the TRITOP system quickly and precisely
								measures the coordinates of 3D objects.
							</p>
							<p>Measuring tasks
								traditionally performed by tactile 3D coordinate measuring machines are now easily achieved with GOM’s
								TRITOP system.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 py-4">
				<div class="card h-100 d-flex">
					<img class="card-img-top" src="https://www.cadmicro.com/storage/pages/metrology/gom/gom_scan_1_680x420.jpg"
						alt="Card image cap">
					<div class="card-body d-flex flex-column">
						<h5 class="card-title">GOM Scan 1</h5>
						<div style="flex-grow:1">
							<p class="card-text">Compact, mobile, and versatile, the GOM Scan 1 is here to prove
								that it is the next small thing in metrology.

							</p>
							<p>GOM Scan 1
								features a compact shape and is a lightweight solution filled with advanced technologies. GOM fringe
								projection and Blue
								Light Technology deliver detailed and accurate 3D meshes. While GOM Inspect takes those meshes to the
								next
								level.</p>
							<p>GOM Scan 1 is the easy to operate specialist for simple and quick measurements of small to medium-sized
								parts.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
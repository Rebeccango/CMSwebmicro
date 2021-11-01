@extends('layouts.layout')
@section('title')
HP 3D Printing Solutions
@stop
@section('meta')
<link rel="canonical" href="{{route('hp')}}" />
@stop
@section('description')Reinvent manufacturing and prototyping with HP 3D printing solutions. Contact our additive manufacturing experts today
to get started. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
 style="min-height:450px; background-image:url({{asset('storage/banners/hp_jet_fusion_small_banner.png')}})">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>HP 3D Printing</h1>
					<div class="section-title-divider"></div>
					<h2 class="h3">Reinvent design, prototyping and manufacturing up to 10x faster with HP 3D printing solutions.
					</h2>
				</div>
				<p class="parallax-section__description">The HP Jet Fusion Printing Solution reinvents how you prototype and
					produce functional parts, delive2ring
					quality output, up to 10 times faster at half the cost!</p>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-4">Unlock the full potential of 3D printing with HP</h1>
				<p class="lead">Transform part properties voxel by voxel enabling a future of limitless applications, materials,
					and colors. Imagine a
					future where we can produce ‘smart parts’ with embedded electronics and integrated traceability and
					intelligence. HP is
					here to help your business get ready for the future era of digital manufacturing.</p>
			</div>
			<div class="col-lg-6">
				<div class="videoWrapper">
					<iframe width="100%" src="https://www.youtube.com/embed/tdNjlmNaNuU" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="videoCaption text-left">HP Multi Jet Fusion technology’s multi-agent and multi-pass printing process
					| 3D Printing | HP</div>
			</div>
		</div>
	</div>
</section>

<section class="section-secondary mt-0">
	<div class="section-title center-block mx-auto mb-0">
		<h2 class="">Learn More</h2>
		<div class="section-title-divider "></div>
	</div>
	<div class="container-fluid">
		<div class="d-flex justify-content-center align-items-center flex-column text-center">
			<button class="btn btn-sm btn-white btn-rounded Up btn-dialog mx-2" id="contact" data-toggle="modal"
			 data-target="#contactModal" data-type="contact" data-title="Contact Request Form">Contact Us</button>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">Jet Fusion 500/300 Series</h1>
				<h2 class="h4 lead mb-5">The most compact HP Jet Fusion 3D devices, designed for convenient in-house automated
					production</h2>
				<a href="{{route('jet-fusion-500-300-series')}}" title="Learn more about Jet Fusion 500/300 Series"
				 class="btn btn-lg btn-primary btn-rounded px-4">Learn More<i class="fas fa-chevron-right ml-3"></i></a>

				<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
				 href="https://www.youtube.com/watch?v=GExSj17SyzE" title="Watch: Meet the HP Jet Fusion 500/300 Series">Watch
					Video <i class="fas fa-play ml-3"></i></a>
			</div>
			<div class="col-lg-6">
				<img src="{{asset('storage/images/hp/hp_jet_fusion_300_500.png')}}"
				 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
				 alt="Jet Fusion 500/300 – HP Jet Fusion 500/300 series 3D printers" />
			</div>
		</div>
	</div>
</section>

<section class="section-secondary">
	<div class="container">
		<div class="row d-flex align-items-between">
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Accelerate your design – create, test, iterate in just hours</h4>
				<p class="lead">Increase productivity by producing multiple design iterations in the same time it takes to print
					a single part</p>
			</div>
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Produce accurate, functional parts with intricate detail</h4>
				<p class="lead">Produce engineering-grade thermoplastic parts with optimal mechanical properties</p>
			</div>
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Create full spectrum colour parts with a voxel-control system</h4>
				<p class="lead">Stay ahead of the competition with a future-ready technology and produce full-colour, black or
					white functional parts</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">Jet Fusion 4200</h1>
				<h2 class="h4 lead mb-5">Industrial prototyping and final part production</h2>
				<a href="{{route('jet-fusion-4200')}}" title="Learn more about Jet Fusion 4200 Series"
				 class="btn btn-lg btn-primary btn-rounded px-4">Learn More<i class="fas fa-chevron-right ml-3"></i></a>
				<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
				 href="https://www.youtube.com/watch?v=ZULljJAC7SE" title="Watch: Powering the HP Jet Fusion 3D Printers">Watch
					Video <i class="fas fa-play ml-3"></i></a>
			</div>
			<div class="col-lg-6">
				<img src="{{asset('storage/images/hp/jet_fusion_4200_printer.png')}}"
				 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
				 alt="Jet Fusion 4200 – HP Jet Fusion 4200 industrial 3D printing solution" />
			</div>
		</div>
	</div>
</section>

<section class="section-secondary">
	<div class="container">
		<div class="row d-flex align-items-between">
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Quality, functional parts</h4>
				<ul class="lead">
					<li>Ideal for functional prototyping and short-run production</li>
					<li>Achieve predictable print time and parts with best-in-class isotropy</li>
					<li>Choose between print modes tuned for mechanical/functional/aesthetic properties, accuracy, and speed</li>
				</ul>
			</div>
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Optimized productivity</h4>
				<ul class="lead">
					<li>Produce more parts per day with continuous printing</li>
					<li>Streamlines, cleaner experience with enclosed, automated mixing of materials</li>
					<li>Rely on HP’s world class HP Jet Fusion 3D Solution Services to maximize uptime and productivity</li>
				</ul>
			</div>
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Optimized costs</h4>
				<ul class="lead">
					<li>Reduce operation costs, opening your doors to short-run production</li>
					<li>Invest in a competitively priced 3D printing solutions and produce at a low cost per part</li>
					<li>Optimize cost and part quality, with cost-efficient materials</li>
				</ul>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">Jet Fusion 5200 Series</h1>
				<h2 class="h4 lead mb-5">Unleash new growth and scale production with HP’s most advanced plastics 3D printing
					solution</h2>
				<a href="{{route('jet-fusion-5200-series')}}" title="Learn more about Jet Fusion 5200 Series"
				 class="btn btn-lg btn-primary btn-rounded px-4">Learn More<i class="fas fa-chevron-right ml-3"></i></a>
				<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
				 href="https://www.youtube.com/watch?v=sdgdnluvqcI" title="Watch: Meet the HP Jet Fusion 5200 Series">Watch
					Video <i class="fas fa-play ml-3"></i></a>
			</div>
			<div class="col-lg-6">
				<img src="{{asset('storage/images/hp/jetfusion-5200-preview.webp')}}"
				 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
				 alt="Jet Fusion 5200 – HP Jet Fusion 5200 series industrial 3D printing solution" />
			</div>
		</div>
	</div>
</section>

<section class="section-secondary">
	<div class="container">
		<div class="row d-flex align-items-between">
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Manufacturing predictability</h4>
				<ul class="lead">
					<li>Quality – from fine detail to textures</li>
					<li>Dimensional accuracy and repeatability that rivals industrial tooling – faster</li>
					<li>Functional parts with best-in-class isotropy</li>
					<li>Maximize equipment uptime</li>
				</ul>
			</div>
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Breakthrough economics</h4>
				<ul class="lead">
					<li>Best-in-class economics and productivity</li>
					<li>Consistent print time for any type of part</li>
					<li>Flexibility and agility</li>
					<li>Centralized job tracking and production fleet streamlined workflow and HP’s most economical continuous 3D
						printing</li>
				</ul>
			</div>
			<div class="col-lg-4 px-4 py-4">
				<h4 class="mb-3">Expand into new applications and markets</h4>
				<ul class="lead">
					<li>Address more final part applications with new levels of repeatable accuracy</li>
					<li>Produce applications with flexible, elastomeric properties with TPU</li>
					<li>Deliver a breadth of applications for various markets</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="bg-primary">
	<div class="container-fluid text-white">
		<div class="d-flex flex-wrap align-items-center">
			<div>
				<h1 class="display-4">HP 3D Printing Materials</h1>
				<h2 class="h4 lead">Providing Optimal Quality and High Reusability at a Low Cost Per Part</h2>
			</div>
			<a href="https://shop.cadmicro.com/collections/all-materials" title="Learn more about Jet Fusion 5200 Series"
			 class="btn btn-lg btn-white btn-rounded px-4" target="_blank">Shop HP 3D Printing Materials<i
				 class="fas fa-chevron-right ml-3"></i></a>
		</div>
	</div>
</section>

@php
$resources = App\Resource::where('company_id', 2)->take(8)->get();
@endphp
@if(count($resources))
<section>
	<div class="container">
		<div class="d-flex w-100 flex-row flex-wrap justify-content-between align-items-center">
			<h3 class="display-4 ml-0">Resources</h3><a class="btn btn-lg btn-outline-primary btn-rounded px-4" target="_blank" href="https://www.cadmicro.com/resources?search=hp&product=&category=&type=" title="View all HP Resources">View All HP Resources &rsaquo;</a>
		</div>
		<div class="row">
			@foreach ($resources as $resource)
				@component('components.resource', ['resource' => $resource]) @endcomponent
			@endforeach
		</div>
	</div>
</section>
@endif
@stop

@push('foot')
<div class="modal fade" id="scheduleTechCentreDemo" tabindex="-1" role="dialog" aria-labelledby="scheduleTechCentreDemo"
 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Schedule a visit to the HP 580 demonstration site</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div data-form-block-id="6920d969-60ad-e911-a987-000d3a3702ca"></div>
				<div id="dVgOLzoc2WccmHK3LBJcCs-tnaKPxVU1v-tIGyVfcjPU"></div>
			</div>
		</div>
	</div>
</div>
@endpush
@push('after-styles')
<style>
	.ctable * {
		font-size: 12px;
	}
</style>
@endpush
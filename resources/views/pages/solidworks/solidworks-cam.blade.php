@extends('layouts.layout')
@section('title')
SolidWorks CAM
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-cam')}}" />
@stop
@section('description')SOLIDWORKS® CAM - powered by CAMWorks - uses rules-based technology that enables you to integrate
design and
manufacturing in one application, connecting design and manufacturing teams through a common software tool and 3D
model.@stop
{{-- @section('keywords')3D, Design Software, CAD, 3D CAD, SolidWorks, 3D Software, Product Design, Engineering Software, 3D Design, Design Analysis,Translate, Electrical, Premium @stop --}}
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px; background-image:url({{asset('/storage/images/SolidWorks/cam/solidworks-cam-hero.jpg')}})">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid mt-5">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">SolidWorks CAM</h1>
					<div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
				</div>
				<div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
					<p class="parallax-section__description">SOLIDWORKS® CAM - powered by CAMWorks - uses rules-based
						technology that enables you to integrate design and manufacturing in one application, connecting
						design and manufacturing teams through a common software tool and 3D model.</p>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>
<section id="solidworks-products">
	<div>
		<div class="container-fluid">
			<div class="section-block row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">What is SOLIDWORKS CAM?</h2>
					<br />
					<p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
						SOLIDWORKS® CAM is a fully integrated, Knowledge Based Machining (KBM) technology that allows you to
						integrate design and manufacturing processes under one system; to evaluate designs earlier in the
						process to avoid unexpected costs and delays in finishing products on time. It leverages the rich
						content in the 3D CAD model to speed up product development and reduce error prone, time consuming,
						repetitive manual steps in the current development process, like programming CNC machines. Knowledge
						Based Machining is the foundation for streamlining the programming process, learning as you program
						which frees up your time to focus on the critical areas of the components.</p>
					<p class="text-primary" style="lin">SOLIDWORKS CAM is an add-in to all versions of SOLIDWORKS 3D CAD.
						SOLIDWORKS CAM Standard is included free with all SOLIDWORKS 3D CAD 2018 licenses on Subscription.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1s"
					data-wow-delay="0.2s">
					<div class="videoWrapper">
						<iframe width="100%" height="auto" src="https://www.youtube.com/embed/gvA0yKq_M1E" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="videoCaption">Video: What's New in SOLIDWORKS 2020 - CAM Tab Cutting</div>
				</div>
			</div>
		</div>
	</div>
	<section>
		<div class="container-fluid">
			<div class="custom-nav-pills">
				<ul class="nav nav-pills" role="tablist">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#matrix" role="tab">Matrix</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active in" data-toggle="tab" href="#whatsnew" role="tab">What's new in 2020</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#webinars" role="tab">Webinars</a>
					</li>
					{{-- <li class="nav-item">
      	    <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Video Archive</a>
      	  </li> --}}
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade" id="matrix" role="tabpanel">
						@include('pages.matrix.solidworks-matrix')
					</div>
					<div class="tab-pane fade" id="datasheet" role="tabpanel">
						<div class="row" style="margin:0; padding:0">
							<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="{{asset('storage/pdfs/solidworks/2018/solidworks_cam_featured.pdf')}}"
									class="pdf-item">
									<figure>
										<div class="figimg">
											<img src="{{asset('storage/pdfs/solidworks/2018/solidworks_cam_featured.png')}}"
												style="width:100%;" alt="SOLIDWORKS 3D CAD Premium Data Sheet">
										</div>
										<figcaption>SOLIDWORKS CAM: THE SMART MANUFACTURING ECOSYSTEM </figcaption>
									</figure>
								</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade  show active in" id="whatsnew" role="tabpanel">
						<div class="row" style="margin:0; padding:0">
							<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<a href="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.pdf')}}" target="_blank" class="pdf-item">
									<figure style="width:200px;">
										<div class="figimg">
											<img src="{{asset('storage/pdfs/solidworks/2020/Top 10 3D CAD.png')}}" class="w-100"
												alt="What's new in SOLIDWORKS 2020">
										</div>
										<figcaption>What's new in SOLIDWORKS 2020</figcaption>
									</figure>
								</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="webinars" role="tabpanel">
						<div class="row" style="margin:0; padding:0">
							<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
									<div class="videoWrapper">
										<iframe width="100%" height="auto" src="https://www.youtube.com/embed/4n_BzYTqKio"
											frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</div>
									<div class="videoCaption">Video: Introduction to SolidWorks CAM</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pb-0">
		<div class="container-fluid">
			<h2 class="h2 wow fadeIn text-center" data-wow-duration="1s" data-wow-delay="0.5s">PACKAGES AVAILABLE</h1>
				<div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
				<div class="row">
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 py-4">
						{{-- <img class="rounded d-block img-shadow" src="https://www.solidworks.com/sites/default/files/styles/banner/public/2017-12/PRODUCTS-SW-CAM-CNC-manufacturing-CAMWorks-hero-002.jpg?itok=FwsxToBZ" width="100%" height="auto" /> --}}
						<div class="h4 w-100 my-3">SOLIDWORKS CAM Standard</div>
						<p class="text-sm">Included with all SOLIDWORKS 3D CAD 2018 licenses on Subscription</p>
						<p class="text-left w-100">SOLIDWORKS CAM Standard allows users to quickly program individual parts
							and configurations without leaving the SOLIDWORKS 3D CAD environment.</p>
					</div>
					<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 py-4">
						{{-- <img class="rounded d-block img-shadow" src="https://static.markforged.com/wf-assets/362-wf-l8podqz7-646.jpg" width="100%" height="auto" /> --}}
						<div class="h4 w-100 my-3">SOLIDWORKS CAM Professional</div>
						<p class="text-left w-100">SOLIDWORKS CAM Professional builds on the capabilities of SOLIDWORKS CAM
							Standard with Assembly Machining, Turning, High Speed Machining and 3+2 programming to drive four
							and five-axis machines.</p>
					</div>
				</div>
		</div>
	</section>
	<section>
		<div class="container-fluid">
			<h2 class="main-title wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:0;">
				SOLIDWORKS CAM Feature Matrix</h2>
			<table class="table mxcolor w-100 table-striped table-sm" id="matrix-cam">
				<tbody>
					<tr>
						<td>&nbsp;</td>
						<td style='font-size:16px'><strong class="visible-desktop">SOLIDWORKSCAM<br>Professional</strong></td>
						<td style='font-size:16px'><strong class="visible-desktop">SOLIDWORKS CAM<br>Standard</strong></td>
					</tr>
					<tr>
						<td>AFR - Automatic Feature Recognition - Holes</td>
						<td><i class="fas fa-check fa-2x"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>AFR - Automatic Feature Recognition - Pockets, Boss</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>AFR - Automatic Feature Recognition - Turn</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>KBM - Knowledge Based Machining</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Automatic Recognition of Multiple Setups</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Indexing of the 4th &amp; 5th axes including tombstone</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Sorting of the Operations</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Toolpath Simulation</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Step Through Simulation</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Tolerance Based Machining - C# macro</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Assembly Machining</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>CAMWorks Configurations</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Stock and Work in Process Models</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Setup Sheets - XML, XMLT, MDB</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>e-Drawings Publisher</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Universal Post Generator (UPG)*</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>CAMWorks Library Features (supports only 2.5x features)</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Import / Export of CAM data</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Contain and Avoid areas and features</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>MES Feed Speed Library*<br><small>*Ancillary applications installed separately</small></td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td colspan="3">
							<h3>2.5 Axis Milling Features</h3>
						</td>
					</tr>
					<tr>
						<td>Interactive Feature Creation</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Rough Milling</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Finish (Contour) Milling</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Face Milling</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Thread Milling</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Center Drilling</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Drilling</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Countersinking</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Reaming</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Tapping</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Engraving</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>VoluMill</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3">
							<h3>3 Axis Milling Features</h3>
						</td>
					</tr>
					<tr>
						<td>Multi-surface feature creation</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Area Clearance</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Z Level</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td>Flat Area</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
					<tr>
						<td colspan="3">
							<h3>Turning Features</h3>
						</td>
					</tr>
					<tr>
						<td>Face Rough</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Face Finish</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Rough Turn</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Finish Turn</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>OD Threading</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Cut-off</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Groove Rough</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Groove Finish</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Bore Rough</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Bore Finish</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Center Drill - on center</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Drill - on center</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>Tap - on center</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>ID Threading</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3">
							<h3>Extra Features</h3>
						</td>
					</tr>
					<tr>
						<td>High-Speed Machining</td>
						<td><i class="fas fa-check"></i></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>NC Editor</td>
						<td><i class="fas fa-check"></i></td>
						<td><i class="fas fa-check"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<section style="padding-top:0">
		<div class="container-fluid">
			<h2 class="main-title wow fadeInLeft" data-wow-duration="0.7s" data-wow-delay="0.1s" style="margin-top:0;">
				SOLIDWORKS CAM Capabilities</h2>
			<p class="wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.1s">Listed below, are some of the powerful
				features that SolidWorks CAM users benefit from.</p>
			<div class="responsive-tabs-block row" style="margin-top:10px">
				<div class="">
					<!-- required for floating -->
					<ul class="nav nav-tabs tabs-left responsive-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#toleranceMachining" role="tab">Tolerance Based
								Machining</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#rulesMachining" role="tab">Rules Based Machining</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#autoQuote" role="tab">Automatic Quoting</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#autoFeature" role="tab">Automatic Feature
								Recognition</a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<div class="tab-content responsive-tabsContent">
						<div class="tab-pane active" id="toleranceMachining" role="tabpanel">
							<div class="row">
								<div class="col-lg-5">
									<div class="videoWrapper">
										<iframe width="100%" height="auto" src="https://www.youtube.com/embed/JrO_vWoLoJw"
											frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									</div>
									<div class="videoCaption">Video: SOLIDWORKS CAM 2018 - Tolerance Based Machining</div>
								</div>
								<div class="col-lg-7 mt-4">
									<h3>Tolerance Based Machining</h3>
									<p>Leverage Model Based Definition (MBD) to ensure machining strategies are automatically
										adjusted based on tolerance specifications. Read tolerances and surface finishes to make
										decisions about how to manufacture the product.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="rulesMachining" role="tabpanel">
							<h3>Rules Based Machining</h3>
							<p>Automatically apply best manufacturing strategies that you like to use so that manufacturing
								processes can be not only faster, but also more standardized.</p>
						</div>
						<div class="tab-pane" id="autoQuote" role="tabpanel">
							<h3>Automatic Quoting</h3>
							<p>Automate quoting and compare it to traditional methods to ensure all aspects of the part are
								accounted for ahead of time.</p>
						</div>
						<div class="tab-pane" id="autoFeature" role="tabpanel">
							<h3>Automatic Feature Recognition</h3>
							<p>Recognize certain types of geometry not only as CAD features, but to understand how much those
								features will be manufactured, and even how much it will cost to manufacture.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
@stop
@push('after-styles')
<style>
	#matrix-cam td:nth-of-type(2),
	#matrix-cam td:nth-of-type(3) {
		background: #3781ef;
		color: white;
		text-align: center;
	}

	#matrix-cam td:nth-of-type(3) {
		background: #195ec4;
	}

	#matrix-cam td:nth-of-type(3) svg,
	#matrix-cam td:nth-of-type(2) svg {
		font-size: 25px;
	}
</style>
@endpush
@extends('layouts.layout')
@section('title')GOM Inspect Free | 3D Scanning Software @stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.software.gom-inspect-free')}}" />
@stop
@section('description')GOM Inspect software is used in product development, quality control and production. It facilitates shape
and dimension analysis, 3D inspection and mesh processing for 3D point clouds and CAD data sets from fringe projection or
laser scanners, coordinate measurement machines (CMM) and other measuring systems. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
background-image:url(https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_gom-inspect-suite-download.jpg)">
	<div class="container-fluid mt-5">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>GOM Inspect – Free</h1>
					<div class="section-title-divider"></div>
					<h2 class="h4">Evaluation software for 3D measurement data</h2>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="d-flex flex-wrap w-100 h-100" style="z-index:1;">
			<div
				class="d-flex col-12 col-md-12 col-lg-6 col-sm-12 justify-content-md-center justify-content-sm-center align-items-md-center flex-column align-items-sm-center mb-sm-5 mb-md-0">
				<div class="d-flex flex-column justify-content-end text-center text-lg-left p-5">
					<h3 class="h1">Precise Industrial 3D Metrology & Scanning</h3><br>
					<p>GOM Inspect software is used in product development, quality control and production. It facilitates shape
						and dimension
						analysis, 3D inspection and mesh processing for 3D point clouds and CAD data sets from fringe projection or
						laser
						scanners, coordinate measurement machines (CMM) and other measuring systems.</p>
					<p>Use GOM Inspect for the simplest or most complex inspection tasks throughout the entire inspection process
						– from
						scanning the part, mesh editing, CAD import, required GD&T computation to trend analyses, digital assembly
						or
						proprietary inspection.</p>
				</div>
			</div>
			<div class="d-flex col-12 col-md-12 col-lg-6 col-sm-12 justify-content-center align-items-center flex-column">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://www.youtube.com/embed/XgPnj2qCZvw" class="embed-responsive-item" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="videoCaption w-100">GOM Inspect Suite 2020 - New Software Platform for Inspection and Evaluation of
					3D Measuring Results</div>
			</div>
		</div>
	</div>
</section>
<section class="parallax-window parallax-section d-flex align-items-center justify-content-center flex-column"
	style="background-image:url(https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_gom-inspect-suite-download.jpg); background-repeat:no-repeat; background-position:center; background-size:cover; min-height:500px">
	<div class="parallax-section__shadow" style="z-index:0; opacity:60%"></div>
	<h3 class="display-4 mb-5 text-center text-white" style="max-width: 700px;z-index:1">Try the GOM Inspect Suite Free!</h3>
	<p class="lead text-white mb-5 text-center" style="max-width: 700px;z-index:1">Get the free GOM Inspect Suite now. It also includes the free 3D viewer GOM Inspect Lite, which allows you to open, edit
	and save projects.</p>
	<a href="#" class="btn btn-primary btn-lg btn-rounded shadow-lg" style="z-index:1">Download Now!</a>
</section>
<section class=" d-none d-md-block">
	<div class="container">
		<img src="https://www.cadmicro.com/storage/pages/3d-scanning/gom/csm_gom_inspect-suite-structure_en_21d733f7c7.jpg"
			class="w-100 h-100" />
	</div>
</section>
<hr class=" d-none d-md-block" />
<section class="px-4 px-sm-3">
	<div class="container">
		<h4 class="display-4 text-center mb-5">Start now free</h4>
		<p class="text-center px-4 lead">With 3D sensors and optical metrology, you not only get more accurate and
			comprehensive measurement results, the GOM
			Inspect Suite also provides you with detailed and versatile analyses, computations or reports. Getting started
			with GOM
			Inspect Suite is easy. You can import CAD data, create polygon meshes from point clouds, execute 3D inspections
			and
			compile your results easily and clearly in reports - all free of charge!</p>
		<div class="row d-flex align-items-center justify-content-center my-5">
			<div class="col col-md-6 col-12">
				<p class="h3 mb-4">CAD Import Basic Formats</p>
				<p>Neutral formats such as IGES, JT Open and STEP can be imported at no additional cost. The individual data
					formats are loaded by drag & drop and automatically recognized and assigned by the software.</p>
				<p>In concepts such as PLM (Product Lifecycle Management), as much process and part information as possible is
					recorded in the form of PMI (Product Manufacturing Information) to manage and control manufacturing chains
					holistically
					and company-wide. GOM supports interfaces for the digital transfer of inspection characteristics. Quality
					features
					and reference systems that have been implemented in CAD via semantic design can be digitally transferred and
					context-sensitive evaluated. Since the measurement plan is created directly during CAD import, there is no
					need for additional, complex programming.</p>
			</div>
			<div class="col col-md-6 col-12 py-4">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/gom/gom_3d-inspection-cad-import.png"
					class="w-100 h-100" />
			</div>
		</div>
		<div class="row d-flex align-items-center justify-content-center my-5">
			<div class="col col-md-6 col-12 order-0 order-md-1">
				<p class="h3 mb-4">Polygon meshes from point clouds</p>
				<p>From 3D point clouds, GOM Inspect Suite computes 3D meshes of parts and components for visualization,
					simulation,
					reverse engineering and target/actual comparison. These precise polygon meshes can be saved in common formats
					such as
					STL, G3D, JT Open, ASCII or PLY. Polygon meshes can also be exported in STL format for 3D printing, for
					example.</p>
				<p>You can also evaluate point clouds: For example, you can determine distances between individual points and
					compare the
					points to the CAD model. You can use the design functions to create geometry elements from several points.
					This allows
					you to check generated elements for dimensional accuracy or form and position tolerances such as flatness,
					roundness or
					position.</p>
			</div>
			<div class="col col-md-6 col-12 order-1 order-md-0 py-4">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/gom/gom_3d-inspection-polygon-meshes.jpg"
					class="w-100 h-100" />
			</div>
		</div>
		<hr class="d-block d-md-none" />
		<div class="row d-flex align-items-start justify-content-start my-5">
			<div class="col col-md-6 col-12 py-4 d-flex flex-column align-items-start justify-content-start">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/gom/gom_3d-inspection-alignment-functions.jpg"
					class="w-100 h-100 mb-4" />
				<p class="h3 mb-4">Alignment functions</p>
				<p>GOM Inspect Suite includes all standard alignment functions. This includes: RPS alignment, hierarchical
					alignment based
					on geometry elements, alignment in a local coordinate system, using reference points and various best-fit
					procedures
					such as global and local best-fit. In addition, customer-specific alignments, for example for turbine blades,
					such as
					Balanced Beam or Equalized Nested, can be executed.</p>
			</div>
			<div class="col col-md-6 col-12 py-4 d-flex flex-column align-items-start justify-content-start">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/gom/gom_3d-inspection-reporting.jpg"
					class="w-100 h-100 mb-4" />
				<p class="h3 mb-4">Reporting</p>
				<p>With the Reporting Module in GOM Inspect Suite, you can easily create reports with snapshots, images, tables,
					charts,
					text and graphics and then export them as PDF documents. Templates simplify the process and each scene saved
					in the
					report can be reactivated in the 3D window.</p>
			</div>
		</div>
	</div>
</section>
<section class="px-4 px-sm-3 section-secondary pt-5">
	<div class="container">
		<h4 class="display-4 text-center mb-5 mt-5">GOM Inspect Suite takes a close look: Inspection</h4>
		<p class="text-center px-4 lead">After the data acquisition follows the evaluation: With GOM Inspect Suite, you can
			execute a comprehensive 3D
			inspection. Various functions are available, from target/actual value comparison to shape and position
			computations to
			the inspection of turbine blades.</p>
		<div class="row d-flex align-items-center justify-content-center my-5">
			<div class="col col-md-6 col-12">
				<p class="h3 mb-4">Shape and position (GD&T)</p>
				<p>Form and position tolerances provide the metrologist with precise specifications for the verification of a
					part. GOM
					Inspect Suite contains form and position functionalities for comprehensive analysis of the size, shape and
					position of a
					part based on reference systems, compensation elements and tolerances. Corresponding GD&T elements are, for
					example,
					planarity, parallelism or cylindricity. A standard-compliant consideration of two-point dimensions and the
					maximum
					material condition is as possible as the position tolerance in the local reference and coordinate system. GOM
					supports
					both ISO and ASME standards and continuously implements updates of the standards in the software.</p>
			</div>
			<div class="col col-md-6 col-12 py-4">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-gd-and-t.jpg"
					class="w-100 h-100" />
			</div>
		</div>
		<div class="row d-flex align-items-start justify-content-start my-5">
			<div class="col col-md-6 col-12 py-4 d-flex flex-column align-items-start justify-content-start">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-nominal-actual-comparison.jpg"
					class="w-100 h-100 mb-4" />
				<p class="h3 mb-4">Nominal-Actual-Comparison</p>
				<p>Polygon meshes describe freeform surfaces and ruled geometries. In GOM Inspect Suite, these can be compared
					with the
					drawing or directly with the CAD data set by a surface comparison. You can realize a 3D inspection of
					surfaces, but also
					a 2D analysis of sections or points. A CAD-based generation of rule geometries such as lines, planes, circles
					or
					cylinders is also possible.</p>
			</div>
			<div class="col col-md-6 col-12 py-4 d-flex flex-column align-items-start justify-content-start">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-curve-inspection.jpg"
					class="w-100 h-100 mb-4" />
				<p class="h3 mb-4">Curve Inspection</p>
				<p>GOM Inspect Suite closes the gap between point-based and area-based inspection. Based on fully digitized
					data, design
					functions for curves can be applied and their properties visualized. For example, edge curves can be captured
					and radii
					and character lines can be analyzed and spline curves can be created. Curve-based inspection also makes it
					possible to
					evaluate gap and flush.</p>
			</div>
		</div>
		<hr class="d-block d-md-none"/>
		<div class="row d-flex align-items-center justify-content-center my-5">
			<div class="col col-md-6 col-12 order-0 order-md-1">
				<p class="h3 mb-4">Surface Inspection</p>
				<p>The optical measuring technique enables a reproducible evaluation of surface defects in series production.
					The results
					are objective and available faster than with a whetstone. To ensure that the surface defect representation is
					directly
					adapted to the shape of the part, the GOM Inspect Suite offers the inspection of surface defects even in
					curved
					orientation. The software also automatically computes the orientation of the surface normals.</p>
				<p>GOM Inspect Suite offers the possibility to inspect a part against the boundary sample part. This enables a
					simple
					actual/actual comparison and known, accepted defects are not shown in the result display.</p>
			</div>
			<div class="col col-md-6 col-12 order-1 order-md-0 py-4">
				<div class="video-wrapper">
					<video class="video-js vjs-16-9" controls preload="auto"
						src="https://www.gom.com/uploads/tx_livideo/gom_automated_surface_inspection_with_atos_en_18.mp4"
						poster="https://www.gom.com/uploads/tx_livideo/gom_3d-inspection-surface-inspection.jpg" data-setup='{"fluid": true}'>
						<source src="https://www.gom.com/uploads/tx_livideo/gom_automated_surface_inspection_with_atos_en_18.mp4" type='video/mp4'>
						<p class="vjs-no-js">
							To view this video please enable JavaScript, and consider upgrading to a web browser that
							<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
						</p>
					</video>
				</div>
				<div class="videoCaption w-100">GOM Inspect Suite 2020 - New Software Platform for Inspection and Evaluation of
					3D Measuring Results</div>
			</div>
		</div>
			<div class="row d-flex align-items-center justify-content-center my-5">
				<div class="col col-md-6 col-12">
					<p class="h3 mb-4">Blade Inspection</p>
					<p>GOM Inspect Suite combines general inspection functions with application-specific evaluations. The native quality
					control functions for the analysis of profiles and turbine blades include Inspection of the profile centerline, profile
					center of gravity and profile thickness of turbine blades based on 2D sections. The center of gravity, radii and twist
					of the profile can also be calculated. You can also create a custom inspection principle, custom labels, or custom
					reporting templates.</p>
				</div>
				<div class="col col-md-6 col-12 py-4">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_airfoil-inspection_teaser.jpg"
						class="w-100 h-100" />
				</div>
			</div>
			<div class="row d-flex align-items-center justify-content-center my-5">
				<div class="col col-md-6 col-12 order-0 order-md-1 ">
					<p class="h3 mb-4">Basic Volume Inspection</p>
					<p>Scanned solid models can be visualized and evaluated in GOM Inspect Suite. Volume data acquired by a computed tomography
					(CT) scanner can be imported and analyzed in the common formats (.vgi, .vgl, .pcr, .exv, .rek) and as raw data via drag
					& drop.</p>
					<p>The GOM Inspect Suite includes a volume rendering function which visualizes the whole part including the inner
					structures. You can cut the object and view it layer by layer. Furthermore, the different materials of a scanned object
					can be imported as separate meshes. In addition to individually scanned objects, you can also import data sets in which
					several objects have been recorded simultaneously with a CT.</p>
					<p>GOM Volume Inspect offers even more comprehensive volume inspections.</p>
				</div>
				<div class="col col-md-6 col-12  order-1 order-md-0 py-4">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-basic-volume-inspect.jpg"
						class="w-100 h-100" />
				</div>
			</div>
	</div>
</section>
<section class="bg-primary text-white d-flex align-items-center justify-content-center flex-column">
	<h4 class="mb-3 text-center mb-2 display-4">Interested in a free trial?</h4>
	<button class="btn btn-lg btn-white rounded-pill btn-dialog" data-toggle="modal"
		data-target="#gomInspectFreeTrialModal">Learn More</button>
</section>
@stop

@push('before-scripts')
<div class="modal fade" tabindex="-1" role="dialog" id="gomInspectFreeTrialModal"
	aria-labelledby="gomInspectFreeTrialModal">
	<div class="modal-dialog" role="document" style="max-width:700px">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="demoContactModalLabel">GOM Inspect Free Trial</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body p-4">
				<div class="loaderSpinner"></div>
				<div data-form-block-id="0a99dc43-812e-eb11-a813-000d3a5bf333"></div>
				<div id="d7Qc0lFhJ-HaEAVNmtSZQ0t9fIhkbMzb8tMiFu5alf4k"></div>
			</div>
		</div>
	</div>
</div>
@endpush
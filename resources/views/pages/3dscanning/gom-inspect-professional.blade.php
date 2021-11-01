@extends('layouts.layout')
@section('title')GOM Inspect Professional | 3D Scanning Software @stop
@section('meta')
<link rel="canonical" href="{{route('3d-scanning.software.gom-inspect-pro')}}" />
@stop
@section('description')GOM Inspect software is used in product development, quality control and production. It
facilitates shape and dimension analysis, 3D inspection and mesh processing for 3D point clouds and CAD data sets from fringe projection
or laser scanners, coordinate measurement machines (CMM) and other measuring systems. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax" style="min-height:450px;
background-image:url(https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_gom-inspect-suite-download.jpg)">
	<div class="container-fluid mt-5">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>GOM Inspect – Professional</h1>
					<div class="section-title-divider"></div>
					<h2 class="h4">GOM Inspect Professional enables you and your team to work faster and more efficiently.</h2>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>
<section class="px-4 px-sm-3">
	<div class="container">
		<h4 class="display-4 text-center mb-5">Raise inspection to the next level</h4>
		<p class="text-center px-4 lead">Would you like to work even faster and more productively? Then the GOM Inspect Suite supports you with numerous
		Professional functionalities, the Professional Module.</p>

		<div class="row d-flex align-items-start justify-content-start my-5">
			<div class="col col-md-6 col-12 py-4 d-flex flex-column align-items-start justify-content-start">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-more-cad.jpg"
					class="w-100 h-100 mb-4" />
				<p class="h3 mb-4">More CAD</p>
				<p>GOM Inspect Suite includes all standard alignment functions. This includes: RPS alignment, hierarchical
					alignment based
					on geometry elements, alignment in a local coordinate system, using reference points and various best-fit
					procedures
					such as global and local best-fit. In addition, customer-specific alignments, for example for turbine blades,
					such as
					Balanced Beam or Equalized Nested, can be executed.</p>
			</div>
			<div class="col col-md-6 col-12 py-4 d-flex flex-column align-items-start justify-content-start">
				<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-teaching-by-doing_en.jpg"
					class="w-100 h-100 mb-4" />
				<p class="h3 mb-4">Teaching by Doing</p>
				<p>Teaching by Doing allows the simple transfer of an evaluation to two or more components. Due to the parametric design,
				GOM Inspect Suite automatically saves every inspection step. There is no difference between a single or multiple
				evaluation. All evaluation sequences are executed without scripting, prior planning or user intervention. Also, there is
				no programming effort.</p>
			</div>
		</div>
		<div class="row d-flex align-items-center justify-content-center my-5">
				<div class="col col-md-6 col-12">
					<p class="h3 mb-4">Digital Assembly</p>
					<p>GOM Inspect Suite with its digital assembly feature offers the possibility to combine individual parts centrally and
					digitally, regardless of where the parts have been produced. You can virtually align several parts to each other and
					inspect them for accuracy of fit in a project. The assembly process is improved by this advance planning of the assembly
					and technical challenges are visible at an early stage.</p>
				</div>
				<div class="col col-md-6 col-12 py-4">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-digital-assembly.jpg"
						class="w-100 h-100" />
				</div>
			</div>
			<div class="row d-flex align-items-center justify-content-center my-5">
				<div class="col col-md-6 col-12 order-0 order-md-1">
					<p class="h3 mb-4">Scripting</p>
					<p>The concept of scripting is based on a command recorder that can record all operations executed in the software. The
					software saves the recording as a Python script. This allows you to execute it repeatedly or to adapt or generalize the
					recorded script to other requirements by editing it. Programming is based on customization or combination of recordings.</p>
				</div>
				<div class="col col-md-6 col-12 order-1 order-md-0 py-4">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection_scripting.jpg"
						class="w-100 h-100" />
				</div>
			</div>
			<div class="row d-flex align-items-center justify-content-center my-5">
				<div class="col col-md-6 col-12">
					<p class="h3 mb-4">Parametric Inspection</p>
					<p>The Professional Module in GOM Inspect Suite is based on a basic parametric concept. All process steps are traceable and
					the software ensures high process reliability of measurement results and reports. The parametric approach of the GOM
					Software allows trend analysis multiple evaluations, for example for statistical process control (SPC) or deformation
					analysis. This allows full-scale evaluation of several parts or stages within a single project and provides
					functionalities for determining statistical analysis values such as Cp, Cpk, Pp, Ppk, Min, Max, Avg and Sigma.</p>
				</div>
				<div class="col col-md-6 col-12 py-4">
					<img src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-parametric-inspection.jpg"
						class="w-100 h-100" />
				</div>
			</div>
	</div>
</section>
<section class="px-4 px-sm-3 section-secondary pt-5">
	<div class="container">
		<h4 class="display-4 text-center mb-5 mt-5">GOM Inspect Suite Grows With Your Needs</h4>
		<p class="text-center px-4 lead">These modules additionally extend your software</p>
		<div class="row d-flex align-items-stretch justify-content-stretch my-5">
			<div class="col col-md-4 col-12 flex-grow-1 flex-fill">
				<div class="card shadow-sm w-100 h-100">
					<img class="card-img-top" src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_virtual-measuring-room_teaser.png" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Virtual measuring room in GOM Inspect Suite</h5>
						<p class="card-text">The Virtual Measuring Room is an indispensable tool for automated 3D digitizing. GOM offers the VMR as an extra software
						module.</p>
					</div>
				</div>
			</div>
			<div class="col col-md-4 col-12 flex-grow-1 flex-fill">
				<div class="card shadow-sm w-100 h-100">
					<img class="card-img-top"
						src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_3d-inspection-basic-volume-inspect.jpg"
						alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">GOM Volume Inspect</h5>
						<p class="card-text">With GOM Inspect Suite you can look inside your part and analyze geometries, blowholes or internal structures and
						assembly situations. The operation is intuitive.</p>
					</div>
				</div>
			</div>
			<div class="col col-md-4 col-12 flex-grow-1 flex-fill">
				<div class="card shadow-sm w-100 h-100">
					<img class="card-img-top"
						src="https://www.cadmicro.com/storage/pages/3d-scanning/software/gom_inspect-suite_virtual-clamping.jpg"
						alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Virtual Clamping</h5>
						<p class="card-text">With Virtual Clamping, you can clamp sheet metal and injection-molded parts virtually and thus measure them without
						complex clamping fixtures.</p>
					</div>
				</div>
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
@extends('layouts.layout')
@section('title')
Electromagnetic Simulation | SolidWorks
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.ems')}}" />
@stop
@section('description') EMS is a Gold Certified Add-in to
SOLIDWORKS® and an Add-in to Autodesk® Inventor® which enables you to simulate the most intricate electrical machines,
motors, generators, sensors, transformers, high voltage apparatus, high power machines, electrical switches, valves,
actuators, PCB’s, levitation machines, loudspeakers, permanent magnet machines, NDT equipment, inverters, converters,
bus bars, inductors, bushings, or biomedical equipment.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex section-secondary"
	style="min-height:450px;">
	<div class="container-fluid">
		<div class="content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>ELECTROMAGNETIC SIMULATION</h1>
				</div>
				<div>
					<p class="lead text-center">Magnetic and Electric Field Modeling Software</p>
				</div>
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
			<div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 pb-4 pb-lg-0">
				<div class="d-flex align-items-md-start align-items-center flex-column text-lg-left text-center">
					<h2 class=" mx-lg-0 mb-3 mx-auto display-4 font-weight-bold">About EMS</h2>
					<p class="text-sm font-medium">EMS is an electromagnetic field simulation software which calculates fields
						(electric / magnetic / flux / potential / eddy currents), circuit parameters (inductance / capacitance / resistance / impedance / flux linkage),
						mechanical parameters (force / torque), and losses (eddy/core/hysteresis/ohmic). EMS is a Gold Certified Add-in to
						SOLIDWORKS® and an Add-in to Autodesk® Inventor® which enables you to simulate the most intricate electrical machines,
						motors, generators, sensors, transformers, high voltage apparatus, high power machines, electrical switches, valves,
						actuators, PCB’s, levitation machines, loudspeakers, permanent magnet machines, NDT equipment, inverters, converters,
						bus bars, inductors, bushings, or biomedical equipment.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="d-flex justify-content-center align-items-center flex-column ml-0 ml-md-3">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://www.youtube.com/embed/hB0S1uTTGGs" class="embed-responsive-item" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="videoCaption w-100">EMS for SOLIDWORKS - Short Introductory Video</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr />
<section>
	<div class="container-fluid">
		<div class=" mb-4">
			<h3 class=" mx-lg-0 mb-3 mx-auto display-4 font-weight-bold">Main Features and capabilities</h3>
		</div>
		<div class="row d-flex align-items-start">
			<div class="col-lg-6 col-12 d-flex flex-column">
				<p class="h5">Full 3D electromagnetic field simulation:</p>
				<p style="text-align: justify;">EMS enables you to do both
					electric and magnetic simulations using your complete 3D geometry to ensure 100% accuracy and integrity of
					your
					designs. EMS also allows you to do both 2D planar and axis-symmetry simulations for designs where such
					simplification
					yields significantly reduced time for solution with no compromise on accuracy.</p>
				<p class="h5">Seamless integration with CAD geometry:</p>
				<p style="text-align: justify;">EMS seamless integration in the
					two main CAD platforms – SOLIDWORKS, and Autodesk® Inventor® empowers you to simulate the most intricate
					electromagnetic designs. You don't need to "reinvent the wheel", just acquire a CAD model from the mechanical
					drafting
					personnel and start your electric or magnetic simulation instantly without any modification.</p>
				<p class="h5">Parametric simulation:</p>
				<p style="text-align: justify;">EMS enables numerous What if? analyses to obtain
					the best design for your application. Any CAD dimension or a simulation variable can be set as a parameter to
					study
					the effect of its changes on your design. This serves as a first step to optimize your designs.</p>
				<p class="h5">Multiphysics capabilities:</p>
				<p style="text-align: justify;">EMS is a true multi-physics software which
					enables you to couple your magnetic, and electrical design to Circuit, Motion, Thermal, and Structural
					analyses on the
					same model in a hassle-free integrated environment without any need to import/export any data. This integrated
					multi-physics environment brings the user efficiency, accuracy, and productivity.</p>
				<p class="h5">User friendly interface and embedded learning materials</p>
				<p style="text-align: justify;">Easy to use
					program with a very short learning curve. Follows the same philosophy of your CAD software. The demo viewer
					feature in
					the software gives you access to numerous training materials for fast learning and adoption of EMS.</p>
			</div>
			<div class="col-lg-6 col-12 d-flex flex-column">
				<div class="h3 pt-5 pt-lg-0 pb-4">Analysis Options</div>
				<div class="d-flex flex-wrap">

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/19ca14e7ea6328a42e0eb13d585e4c22_1.png?v=1"
								alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Electric field simulation software</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<div>
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/44f683a84163b3523afe57c2e008bc8c_1.jpg?v=1" alt="">
								</div>
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Conduction Analysis</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/03afdbd66e7929b125f8597834fa83a4_1.jpg?v=1" alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Magnetostatic Analysis</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/ea5d2f1c4608232e07d3aa3d998e5135_1.png?v=1" alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">AC Magnetic Analysis</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/fc490ca45c00b1249bbe3554a4fdf6fb_1.png?v=1" alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Transient Magnetic Analysis</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/19ca14e7ea6328a42e0eb13d585e4c22_1.png?v=1" alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">AC Electric</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/d2ddea18f00665ce8623e36bd4e3c7c5_1.jpg?v=1" alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Motion Coupling</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/d09bf41544a3365a46c9077ebb5e35c3_1.jpg?v=1" alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Structural Coupling</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/ad61ab143223efbc24c7d2583be69251_1.png?v=1" alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Thermal Coupling</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<hr />
<section>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="col-lg-6 order-1 order-lg-0">
				<a target="_blank" href="{{url('resources/240/hfworks-high-frequency-simulation-brochure')}}"
					class="pdf-item text-center mx-auto" style="min-height: auto; max-width:600px; width:100%">
					<figure class="text-center">
						<div class="figimg text-center" style="min-height: auto; max-width:600px; width:100%">
							<img class="img-fluid" src="{{url('storage/resources/October2020/5v4SX6N6AQeqEz912pEF.JPG')}}"
								style="width:100%;">
						</div>
					</figure>
				</a>
			</div>
			<div class="col-lg-6 order-0 order-lg-0">
				<h2 class="main-title ml-0">Brochure:</h2>
				<h2 class="display-4">Electromagnetic Simulation Software</h2>
			</div>
		</div>
	</div>
</section>
<section class="section-secondary pb-5">
	<div class="container">
		<h3 class="mx-lg-0 mb-3 mx-auto display-4 font-weight-bold text-center">Request a Free Trial</h3>
		<div class="flex w-full justify-content-center align-items-center mt-5">
			<div class="card mx-auto p-4" style="max-width: 700px">
				<div data-form-block-id="8799a8e3-3219-eb11-a813-0022480822ca"></div>
				<div id="dOHcSMiobcw0q_wc_Ir6pgfp9JZGmx-oxzzkVwKiRJac"></div>
			</div>
		</div>
	</div>
</section>
@stop
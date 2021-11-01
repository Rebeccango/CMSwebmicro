@extends('layouts.layout')
@section('title')
High Frequency Simulation | SolidWorks
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks.hfworks')}}" />
@stop
@section('description') HFWorks is an antenna and electromagnetic simulation software for RF, Microwave, mm-wave, and
high speed digital
circuits. HFWorks solves electromagnetic radiation, electromagnetic waves, electromagnetic propagation, electromagnetic
resonance, electromagnetic interference (EMI), electromagnetic compatibility (EMC), and signal integrity (SI) problems
for RF/MW frequencies and beyond. @stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex section-secondary"
	style="min-height:450px;">
	<div class="container-fluid">
		<div class="content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>HIGH FREQUENCY SIMULATION</h1>
				</div>
				<div>
					<p class="lead text-center">Antenna and Electromagnetic Simulation Software</p>
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
					<h2 class=" mx-lg-0 mb-3 mx-auto display-4 font-weight-bold">About HFWorks</h2>
					<p class="text-sm font-medium">FWorks is an antenna and electromagnetic simulation software for RF, Microwave,
						mm-wave, and high speed digital
						circuits. HFWorks solves electromagnetic radiation, electromagnetic waves, electromagnetic propagation,
						electromagnetic
						resonance, electromagnetic interference (EMI), electromagnetic compatibility (EMC), and signal integrity
						(SI) problems
						for RF/MW frequencies and beyond. It uses state-of-the-art finite element solvers and meshing technologies
						to compute
						fields as well as antennas and circuit parameters. It can simulate single antenna elements as well as
						multiple array
						antenna configurations. HFWorks can also be used for time domain computations such as TDR and Eye Diagram.
						It can
						predict power handling capabilities of 3D structures and localize potential field breakdown areas. It also
						provides the
						capability to simulate RF microwave heating as a function of applied power.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="d-flex justify-content-center align-items-center flex-column ml-0 ml-md-3">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe src="https://www.youtube.com/embed/znZMpQJivGQ" class="embed-responsive-item" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="videoCaption w-100">HFWorks for SolidWorks - Short Introductory Video</div>
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
				<p class="h5">Versatile High Frequency and High-Speed Tool:</p>
				<p style="text-align: justify;">Whether your design involves antennas, RF and Microwave components, signal
					integrity, power integrity, EMC/EMI,
					chip-packaging, PCB, connectors, cables, RF MEMS, or filters and whether you use planar circuit technologies,
					standard
					waveguides or dielectric guides, HFWorks covers your high frequency field simulation design needs for RF
					frequencies and
					much beyond.</p>
				<p class="h5">Solidworks embedded:</p>
				<p style="text-align: justify;">HFWorks is seamlessly integrated in Solidworks and Gold Certified by SOLIDWORKS®
					Corporation.</p>
				<p class="h5">User friendly interface and embedded learning materials:</p>
				<p style="text-align: justify;">Intuitive and easy to use graphical user interface. The demo viewer feature in
					the software gives you access to
					extensive training material for fast learning and adoption of HFWorks.</p>
				<p class="h5">Parametric simulation:</p>
				<p style="text-align: justify;">HFWorks enables numerous analyses to obtain the best design for your
					application. Any CAD dimension or a simulation
					variable can be set as a parameter to study the effect of its changes on your design.</p>
				<p class="h5">Time Domain Solution:</p>
				<p style="text-align: justify;">HFWorks comes with a Time Domain Analysis type that helps designers to allocate
					discontinuities in connectors, adapters,
					cable transitions and high speed interconnects.</p>
				<p class="h5">Integrated Electro-Thermal Analysis:</p>
				<p style="text-align: justify;">HFWorks comes with an integrated Electro-Thermal Analysis. It offers you a
					coherent environment where you can
					simultaneously study the electrical and thermal behavior of your high frequency design right on the same
					model.</p>
				<p class="h5">Power handling:</p>
				<p style="text-align: justify;">HFWorks produces safety factor maps that indicate where breakdown has occurred
					in the model or where it is most likely
					to occur for a given level or excitation power or stored energy.</p>
			</div>
			<div class="col-lg-6 col-12 d-flex flex-column">
				<div class="h3 pt-5 pt-lg-0 pb-4">Analysis Options</div>
				<div class="d-flex flex-wrap">

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/3295c76acbf4caaed33c36b1b5fc2cb1_1.png?v=1"
								alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">S-Parameters</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<div>
								<img class="card-img-top"
									src="https://www.emworks.com/media/images/category/large/735b90b4568125ed6c3f678819b6e058_1.png?v=1"
									alt="">
							</div>
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Resonance</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/a3f390d88e4c41f2747bfa2f1b5f87db_1.png?v=1"
								alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Antennas</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-4 d-flex align-items-stretch p-1">
						<div class="card w-100">
							<img class="card-img-top"
								src="https://www.emworks.com/media/images/category/large/fbd7939d674997cdb4692d34de8633c4_1.jpg?v=1"
								alt="">
							<div class="card-body p-2 text-center">
								<p class="card-title text-medium m-0">Time Domain</p>
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
				<h2 class="display-4">HFWorks (High Frequency Simulation)</h2>
			</div>
		</div>
	</div>
</section>

<section class="section-secondary pb-5">
	<div class="container">
		<h3 class="mx-lg-0 mb-3 mx-auto display-4 font-weight-bold text-center">Request a Free Trial</h3>
		<div class="flex w-full justify-content-center align-items-center mt-5">
			<div class="card mx-auto p-4" style="max-width: 700px">
		<div data-form-block-id="6833cce5-3119-eb11-a813-0022480822ca"></div>
		<div id="dpgYnbPHasyi77dzQkATU6cbLE-80a_qQGIR7LyuqstU"></div>
		</div>
		</div>
	</div>
</section>

@stop
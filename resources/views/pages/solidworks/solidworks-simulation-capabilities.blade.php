@extends('layouts.layout')
@section('title')
SOLIDWORKS Simulation Capabilities
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-simulation-capabilities')}}" />
@stop
@section('description')
Easy-to-use CAD-embedded analysis capabilities power SOLIDWORKS Simulation software tools and
solutions to enable all designers and engineers to simulate and analyse design performance.
@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
	style="min-height:450px; background-image:url({{asset('storage/banners/products_simulation_banner.jpg')}})">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>SolidWorks Simulation Capabilities</h1>
					<div class="section-title-divider"></div>
				</div>
				<div>
					<p class="parallax-section__description">Subject your designs to real world conditions to raise product
						quality while reducing prototyping and physical testing costs.</p>
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
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-4">
				<h2 class="display-4 text-uppercase">Choose the right Simulation Package</h2>
				<p class="lead mt-4">Easy-to-use CAD-embedded analysis capabilities power SOLIDWORKS Simulation software tools
					and solutions to enable all
					designers and engineers to simulate and analyse design performance. You can quickly and easily employ advanced
					simulation techniques to optimise performance while you design, to cut down on costly prototypes, eliminate
					rework and
					delays, and save you time and development costs.</p>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-4">
				<div class="videoWrapper">
					<iframe width="100%" height="auto" style="min-height:280px;" src="https://www.youtube.com/embed/oo_yqIEtf00"
						frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				<div class="videoCaption mb-4">What's New in SOLIDWORKS 2021 - Simulation</div>
			</div>
		</div>
	</div>
</section>
<hr />
<section>
	<div class="container">
		<div class="card shadow-sm">
			<h5 class="card-header">SOLIDWORKS SIMULATION STANDARD</h5>
			<div class="card-body">
				<div class="row d-flex align-items-stretch">
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden my-1">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/cp_StandardFEA.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Static Simulation</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img
											src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/cp_kineticmotionanalysis.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Kinematic Motion Analysis</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/cp_trendtracker.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Trend Tracker</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/cp_fatigue.jpg" width="65"
											height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Metal Fatigue Analysis</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card shadow-sm mt-4">
			<h5 class="card-header">SOLIDWORKS SIMULATION PROFESSIONAL</h5>
			<div class="card-body">
				<div class="row d-flex align-items-stretch">
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden my-1">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img
											src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/cp_SOLIDWORKSStandardPlus.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Simulation Standard+</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Droptest.jpg" width="65"
											height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Drop Test Analysis</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Frequencyanaly.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Frequency Analysis</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Pressurevessel.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Pressure Vessel Analysis</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Buckling.jpg" width="65"
											height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Buckling Analysis</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Eventbasedmotion.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Event Based Motion Analysis</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Thermalanalysis.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Thermal Analysis</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_submodellingsim.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Submodelling Simulation</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_2dsimplification.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">2D Simplification</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_paradesignop.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Design Optimisation</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_edgeweldconnector.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Edge Weld Connectors</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_loadcase.jpg" width="65"
											height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Load Case Manager</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Materialportal.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Material Portal</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Topologyop.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Topology Optimisation</p>
									</div>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="card shadow-sm mt-4">
			<h5 class="card-header">SOLIDWORKS SIMULATION PREMIUM</h5>
			<div class="card-body">
				<div class="row d-flex align-items-stretch">
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden my-1">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img
											src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/cp_SOLIDWORKSStandardPlus.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Simulation Standard+</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Dynamicanalysis.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Nonlinear Static & Dynamic</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Composites.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Composites Component</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_plastics.jpg" width="65"
											height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Advanced Material Models</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Time-history.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Linear Dynamics: Time History</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Harmonic.jpg" width="65"
											height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Linear Dynamics: Harmonic</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_response-spectra.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Linear Dynamics: Response</p>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 col-lg-3 px-2 my-1">
						<div class="card card-capabilities shadow-sm rounded-lg overflow-hidden">
							<div class="card-body p-0">
								<a href="#" class="d-flex align-items-stretch card-capabilities-link">
									<div class="px-0">
										<img src="https://www.cadmicro.com/storage/images/SolidWorks/simulation/CP_Random-vibration.jpg"
											width="65" height="65" />
									</div>
									<div
										class="py-0 mx-1 d-flex align-items-center justify-content-center text-center w-100 overflow-hidden">
										<p class="mb-0">Linear Dynamics: Random</p>
									</div>
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-secondary">
	<div class="container-fluid">
		<div class="custom-nav-pills shadow-sm">
			<ul class="nav nav-pills" role="tablist">
				<li class="nav-item">
					<a class="nav-link active in" data-toggle="tab" href="#feature-matrix" role="tab">Matrix</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#datasheet" role="tab">Data Sheet</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#whatsnew" role="tab">What's New</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade show active in" id="feature-matrix" role="tabpanel">
					@include('pages.matrix.solidworks-simulation')
				</div>
				<div class="tab-pane fade" id="datasheet" role="tabpanel">
					<div class="row" style="margin:0; padding:0">
						<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<a href="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Simulation.pdf')}}" class="pdf-item">
								<figure>
									<div class="figimg">
										<img src="{{asset('storage/pdfs/solidworks/2020/Data Sheet - Simulation.png')}}" style="width:100%;"
											alt="SOLIDWORKS Flow Simulation Data Sheet">
									</div>
									<figcaption>SolidWorks Flow Simulation Data Sheet</figcaption>
								</figure>
							</a>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="whatsnew" role="tabpanel">
					<div class="row" style="margin:0; padding:0">
						<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<a href="{{asset('storage/pdfs/solidworks/2020/Top 10 Simulation.pdf')}}" class="pdf-item">
								<figure>
									<div class="figimg">
										<img src="{{asset('storage/pdfs/solidworks/2020/Top 10 Simulation.png')}}" style="width:100%;"
											alt="What's new in SOLIDWORKS Simulation 2020">
									</div>
									<figcaption>SOLIDWORKS Simulation Top 10 in 2020</figcaption>
								</figure>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
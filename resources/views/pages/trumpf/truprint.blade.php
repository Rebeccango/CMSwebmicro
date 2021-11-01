@extends('layouts.layout')
@section('title')TRUMPF TruPrint 3D Printing Solutions @stop
@section('meta')
<link rel="canonical" href="{{route('trumpf.truprint')}}" />
@stop
@section('description')Find the right 3D printer for your industrial manufacturing processes. Contact our additive
manufacturing experts to
learn more.@stop
@section('body')
<section class="parallax-window parallax-section trans-header-window d-flex parallax"
 style="min-height:450px; background-image:url(https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint-Family.jpg)">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>Trumpf TruPrint 3D Printing Solutions</h1>
					<div class="section-title-divider"></div>
					<h2 class="h3">The right 3D printers for your industrial manufacturing processes</h2>
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
			<div class="col-lg-6">
				<h1 class="mb-4">Additive Production Systems</h1>
				<p class="lead">3D printing shapes the future of industrial production. Through additive processes, components
					are created from powder
					and light alone using 3D printers for metals. Highly productive laser processing machines enable innovative
					applications
					in the fields of coating and repair through laser metal deposition. TRUMPF offers you a complete solution
					comprising
					digitization, services and additive production systems.</p>
				<button class="btn btn-lg btn-outline-primary btn-rounded px-4" id="contact" data-toggle="modal"
				 data-target="#contactModal" data-type="contact" data-title="Contact Request Form"
				 title="Learn more about Jet Fusion 500/300 Series" class="btn btn-lg btn-primary btn-rounded px-4">Learn More<i
					 class="fas fa-chevron-right ml-3"></i></button>
			</div>
			<div class="col-lg-6">
				<a href="https://www.cadmicro.com/storage/pages/trumpf/truprint/TRUMPF%20AMParts[15506].PNG"
				 class="mp-popup-image mp-single"
				 title="TruPrint 1000 Part – Laser metal fusion for complex, metallic components">
					<img src="https://www.cadmicro.com/storage/pages/trumpf/truprint/TRUMPF%20AMParts[15506].PNG"
					 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
					 alt="TruPrint 1000 Part – Laser metal fusion for complex, metallic components" />
				</a>
			</div>
		</div>
	</div>
</section>
<hr />
<section class="pb-0">
	<div class="container-fluid">
		<div class="section-title center-block mx-auto mb-0">
			<h3>LASER METAL FUSION</h3>
			<div class="section-title-divider"></div>
		</div>
	</div>
</section>

<section class="pb-4">
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">TruPrint 1000</h1>
				<h2 class="h4 lead mb-3">Compact and robust 3D printing</h2>
				<p>The TruPrint 1000 is the most productive machine in compact form and offers you all the benefits of additive
					manufacturing. The build volume (cylinder) is 100 mm in diameter and a height of 100 mm. This can be reduced
					for
					precious metals. The TruPrint 1000 can be used to create components in almost any geometric shape. Even
					relatively
					complex shapes can be quickly and easily converted from the CAD design to a 3D metallic component – with top
					quality.</p>


				<div id="truprint-1000-features" class="accordion w-100 accordion--arrows my-4">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#truprint-1000-features_1" aria-expanded="false"
								 aria-controls="truprint-1000-features_1">
									Features
								</button>
							</h5>
						</div>

						<div id="truprint-1000-features_1" class="collapse" data-parent="#truprint-1000-features">
							<div class="card-body">
								<ul>
										<li>Simple and intuitive operation</li>
										<li>High process speed</li>
										<li>Maximum productivity</li>
										<li>Mobile operation and monitoring</li>
										<li>Can be individually adapted</li>
									</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="mt-4 mb-5">
					<button class="btn btn-lg btn-primary btn-rounded px-4" data-toggle="modal" data-target="#quoteContactModal"
					 data-type="quote" data-title="Quote Request Form">Get a Quote<i class="fas fa-chevron-right ml-3"></i></button>
					<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
					 href="https://www.youtube.com/watch?v=x5q8SEhYahY"
					 title="TRUMPF Additive Manufacturing: TruPrint 1000 - Compact and robust 3D printing">Watch
						Video <i class="fas fa-play ml-3"></i></a>
				</div>
			</div>
			<div class="col-lg-6">
				<a href="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%201000%20(with%20background).png"
				 class="mp-popup-image mp-single" title="TruPrint 1000 – Laser metal fusion for complex, metallic components">
					<img src="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%201000%20(with%20background).png"
					 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
					 alt="TruPrint 1000 – Laser metal fusion for complex, metallic components" />
				</a>
			</div>
		</div>
	</div>
</section>
<hr />
<section class="py-4">
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">TruPrint 1000 Green Edition</h1>
				<h2 class="h4 lead mb-3">Green laser: 3D printing copper and other precious metals</h2>
				<p>3D printing of pure copper thanks to the unique combination of green laser light and the additive manufacturing system</p>
				<p>As a leader in innovation and technology, TRUMPF combines the know-how on additive manufacturing with competence in
				developing cutting-edge industrial beam sources. The unique result: TruPrint 1000 Green Edition. The combination of the
				two products, TruPrint 1000 and TruDisk 1020, enables robust 3D printing of pure copper as well as the highly productive
				processing of copper alloys and precious metals.</p>

				<div id="truprint-1000-green-features" class="accordion w-100 accordion--arrows my-4">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#truprint-1000-green-features_1"
								 aria-expanded="false" aria-controls="truprint-1000-green-features_1">
									Features
								</button>
							</h5>
						</div>

						<div id="truprint-1000-green-features_1" class="collapse" data-parent="#truprint-1000-green-features">
							<div class="card-body">
								<ul>
									<li>Unique combination of the green laser and additive manufacturing</li>
									<li>Outstanding thermal and electrical conductivity</li>
									<li>Highest quality and productivity of printed pure copper, copper alloys and precious metals</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="mt-4">
					<button class="btn btn-lg btn-primary btn-rounded px-4" data-toggle="modal" data-target="#quoteContactModal"
					 data-type="quote" data-title="Quote Request Form">Get a Quote<i
						 class="fas fa-chevron-right ml-3"></i></button>
					<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
					 href="https://www.youtube.com/watch?v=P9qvtNdn1ug"
					 title="TRUMPF: Ask the Expert – TruPrint 1000 Green Edition">Watch
						Video <i class="fas fa-play ml-3"></i></a>
				</div>
			</div>
			<div class="col-lg-6">
				<a href="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%201000%20Green%20Edt%20(with%20background).png"
				 class="mp-popup-image mp-single" title="TruPrint 1000 Green Edition – 3D printing of copper and other precious metals">
					<img src="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%201000%20Green%20Edt%20(with%20background).png"
					 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
					 alt="TruPrint 1000 Green Edition – 3D printing of copper and other precious metals" />
				</a>
			</div>
		</div>
	</div>
</section>
<hr />
<section class="py-4">
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">TruPrint 2000</h1>
				<h2 class="h4 lead mb-3">Economical 3D printing with premium quality</h2>
				<p>With its small 55-µm laser beam diameter, the TruPrint 2000 provides a high-quality printing result which impresses with
				its surface quality and level of detail. It offers a build volume (cylinder) of 200 mm in diameter and a height of 200
				mm. The fullfield multilaser with two 300-watt fiber lasers from TRUMPF – which scan the entire build area – delivers
				top productivity. Melt Pool Monitoring and comprehensive process monitoring ensure the highest quality standards. The
				production process with the TruPrint 2000 is a closed powder circuit under shielding gas. This allows for easy and
				practical handling, with the highest operator safety.</p>
				<div id="truprint-2000-features" class="accordion w-100 accordion--arrows my-4">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#truprint-2000-features_1"
								 aria-expanded="false" aria-controls="truprint-2000-features_1">
									Features
								</button>
							</h5>
						</div>

						<div id="truprint-2000-features_1" class="collapse" data-parent="#truprint-2000-features">
							<div class="card-body">
								<ul>
									<li>Highly productive premium component quality</li>
									<li>Low costs per part</li>
									<li>The highest quality standards</li>
									<li>Simple operation</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="mt-4">
					<button class="btn btn-lg btn-primary btn-rounded px-4" data-toggle="modal" data-target="#quoteContactModal"
					 data-type="quote" data-title="Quote Request Form">Get a Quote<i
						 class="fas fa-chevron-right ml-3"></i></button>
					<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
					 href="https://www.youtube.com/watch?v=4K9wGhoT4L4"
					 title="TRUMPF Additive Manufacturing: TruPrint 2000 - Economical 3D printing with premium quality">Watch
						Video <i class="fas fa-play ml-3"></i></a>
				</div>
			</div>
			<div class="col-lg-6">
				<a href="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%202000%20(With%20Background).png"
				 class="mp-popup-image mp-single"
				 title="TruPrint 2000 – Make the most out of the cost-effective 3D printing with premium quality">
					<img src="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%202000%20(With%20Background).png"
					 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
					 alt="TruPrint 2000 – Make the most out of the cost-effective 3D printing with premium quality" />
				</a>
			</div>
		</div>
	</div>
</section>
<hr />
<section class="py-4">
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">TruPrint 3000</h1>
				<h2 class="h4 lead mb-3">Flexible solution for industrial 3D printing</h2>
				<p>Productivity is almost doubled, independent of the component geometry, and the part costs are significantly decreased.
				Automatic monitoring and calibration of the multilasers during the build job facilitates optimum quality for printed
				multilaser components. The latest developments in shielding gas control additionally increase the component quality and reproducibility of the parts. This is documented
				parallel to the build job thanks to Melt Pool Monitoring.</p>
				<div id="truprint-3000-features" class="accordion w-100 accordion--arrows my-4">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#truprint-3000-features_1"
								 aria-expanded="false" aria-controls="truprint-3000-features_1">
									Features
								</button>
							</h5>
						</div>

						<div id="truprint-3000-features_1" class="collapse" data-parent="#truprint-3000-features">
							<div class="card-body">
								<ul>
									<li>High level of process robustness
									<li>Full-field multilaser 2 x 500 watts</li>
									<li>Flexible production setup</li>
									<li>Extensive monitoring solutions</li>
									<li>Inert, closed powder circuit</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="mt-4">
					<button class="btn btn-lg btn-primary btn-rounded px-4" data-toggle="modal" data-target="#quoteContactModal"
					 data-type="quote" data-title="Quote Request Form">Get a Quote<i
						 class="fas fa-chevron-right ml-3"></i></button>
					<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
					 href="https://www.youtube.com/watch?v=pK2bVN7QGXI"
					 title="TRUMPF Additive Manufacturing: Highlights of the new TruPrint 3000">Watch
						Video <i class="fas fa-play ml-3"></i></a>
				</div>
			</div>
			<div class="col-lg-6">
				<a href="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%2030000.png"
				 class="mp-popup-image mp-single"
				 title="TruPrint 3000 – Flexible solution for industrial additive manufacturing">
					<img src="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint%2030000.png"
					 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
					 alt="TruPrint 3000 – Flexible solution for industrial additive manufacturing" />
				</a>
			</div>
		</div>
	</div>
</section>
<hr />
<section class="py-4">
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">TruPrint 5000</h1>
				<h2 class="h4 lead mb-3">Highly productive 3D printing for industrial serial production</h2>
				<p>The highly productive, partially automated TruPrint 5000 3D printing system provides the ideal basis for industrial
				series production. With optional features, including 500°C-preheating and the fullfield multilaser with three 500-watt
				TRUMPF fiber lasers, you are perfectly equipped to handle even the most demanding industrial applications. The machine
				quickly and reliably manufactures high-quality components from a range of different metal materials, all while meeting
				the stringent quality requirements for tool and mold making, the aviation and aerospace industry, and the medical
				technology sector.</p>
				<div id="truprint-5000-features" class="accordion w-100 accordion--arrows my-4">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#truprint-5000-features_1"
								 aria-expanded="false" aria-controls="truprint-5000-features_1">
									Features
								</button>
							</h5>
						</div>

						<div id="truprint-5000-features_1" class="collapse" data-parent="#truprint-5000-features">
							<div class="card-body">
								<ul>
									<li>Maximum productivity</li>
									<li>High component quality</li>
									<li>Automatic process start</li>
									<li>High machine utilization rate</li>
									<li>Zero-point clamping system for fast set up</li>
									<li>Industrial monitoring</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="mt-4">
					<button class="btn btn-lg btn-primary btn-rounded px-4" data-toggle="modal" data-target="#quoteContactModal"
					 data-type="quote" data-title="Quote Request Form">Get a Quote<i
						 class="fas fa-chevron-right ml-3"></i></button>
					<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
					 href="https://www.youtube.com/watch?v=LvkN4Jg0E0s"
					 title="TRUMPF Additive Manufacturing: TruPrint 5000 - Highly productive 3D printing for serial production">Watch
						Video <i class="fas fa-play ml-3"></i></a>
				</div>
			</div>
			<div class="col-lg-6">
				<a href="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint-5000.jpg"
				 class="mp-popup-image mp-single"
				 title="TruPrint 5000 – Create top-quality 3D components faster">
					<img src="https://www.cadmicro.com/storage/pages/trumpf/truprint/TruPrint-5000.jpg"
					 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
					 alt="TruPrint 5000 – Create top-quality 3D components faster" />
				</a>
			</div>
		</div>
	</div>
</section>
<hr />
<section class="py-4 pb-5">
	<div class="container-fluid">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<h1 class="mb-3 display-4">Industrial Part and Powder Management</h1>
				<h2 class="h4 lead mb-3">Optimal powder handling for maximum productivity</h2>
				<p>Optimal handling of the powder and components is crucial for additive series production on an industrial scale. The
				industrial part and powder management from TRUMPF enables you to increase productivity and profitability in your
				production operations as setup and powder removal on one or more TruPrint machines can be performed parallel to
				production.</p>
				<div id="truprint-5000-IPPM-features" class="accordion w-100 accordion--arrows my-4">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#truprint-5000-IPPM-features_1"
								 aria-expanded="false" aria-controls="truprint-5000-IPPM-features_1">
									Features
								</button>
							</h5>
						</div>

						<div id="truprint-5000-IPPM-features_1" class="collapse" data-parent="#truprint-5000-IPPM-features">
							<div class="card-body">
								<ul>
									<li>High productivity</li>
									<li>Clean production</li>
									<li>Short throughput times</li>
									<li>Great flexibility</li>
									<li>Powder handling under shielding gas</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="mt-4">
					<button class="btn btn-lg btn-primary btn-rounded px-4" data-toggle="modal" data-target="#quoteContactModal"
					 data-type="quote" data-title="Quote Request Form">Get a Quote<i
						 class="fas fa-chevron-right ml-3"></i></button>
					<a class="ml-4 mp-popup-video mp-single btn btn-lg btn-outline-primary btn-rounded px-4"
					 href="https://www.youtube.com/watch?v=Og--gPfk8zw"
					 title="TRUMPF Additive Manufacturing: TruPrint - industrial part and powder management">Watch
						Video <i class="fas fa-play ml-3"></i></a>
				</div>
			</div>
			<div class="col-lg-6">
				<a href="https://www.cadmicro.com/storage/pages/trumpf/truprint/IPPM%20-%20TruPrint.png"
				 class="mp-popup-image mp-single" title="TruPrint 5000 with IPPM – TruPrint components for powder and parts handling">
					<img src="https://www.cadmicro.com/storage/pages/trumpf/truprint/IPPM%20-%20TruPrint.png"
					 style="width:100%; height:auto; margin:15px 0;" width="100%" height="auto"
					 alt="TruPrint 5000 with IPPM – TruPrint components for powder and parts handling" />
				</a>
			</div>
		</div>
	</div>
</section>
@stop
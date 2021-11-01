@extends('layouts.layout')
@section('title')
ULTIMAKER 2+ CONNECT | Ultimaker
@stop
@section('meta')
<link rel="canonical" href="{{route('ultimaker-2-plus-connect')}}" />
@stop
@section('description')A seamless 3D printing workflow starts with the Ultimaker 2+ Connect. Networking capabilities, a
new touchscreen and
remote printing capabilities make the Ultimaker 2+ Connect an ideal solution for Enterprise and Education alike.@stop
@push('after-styles')
<style>
	.icon-block:hover {
		z-index: 2;
	}
</style>
@endpush
@section('body')
<section class="parallax-window parallax-section d-flex justify-content-center align-items-center"
	style="min-height:550px; background-image:url(https://www.cadmicro.com/storage/pages/3d-printing/ultimaker/1920_ultimaker-2-plus-connect-airmanager1.jpg); background-position:center;">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>ULTIMAKER 2+ CONNECT</h1>
					<div class="section-title-divider"></div>
					<h2 class="h3">Step into the world of easy, remote 3D printing.</h2>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-secondary">
	<div class="container-fluid">
		<div class="row justify-content-center align-items-center">
			<div class="col-md-12 col-lg-6 order-1 order-lg-0 py-5">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://www.youtube.com/embed/j20i4zz6LUE" class="embed-responsive-item" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="videoCaption w-100">Structural Steel Design with SOLIDWORKS - SolidSteel parametric</div>
			</div>
			<div class="col-md-12 col-lg-6 order-0 order-lg-1 p-5">
				<h2 class="mb-3 display-4">Ultimaker 2+ Connect</h2>
				<p class="h4">Start 3D printing the Ultimaker way</p>
				<p class="lead mt-4">A seamless 3D printing workflow starts with the Ultimaker 2+ Connect. Networking
					capabilities, a new touchscreen and
					remote printing capabilities make the Ultimaker 2+ Connect an ideal solution for Enterprise and Education
					alike.</p>
			</div>
		</div>
	</div>
</section>
<section class="bg-primary text-white">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="mx-auto text-left">
					<h2 class="display-4">Key Features</h2>
				</div>
				<p class="lead mt-4">Sometimes single extrusion simplicity is all you need.
					Built upon Ultimaker’s award-winning technology, the Ultimaker 2+
					Connect adds intuitive operation and deep software connectivity.</p>
			</div>
			<div class="col-12 col-md-6">
				<ul class="lead list-group-bordered pl-4">
					<li class="mb-3">223 x 220 x 205mm build volume (8.7 x 8.6 x 8 inches)</li>
					<li class="mb-3">Network connectivity via Wi-Fi or Ethernet for remote printing over the cloud with enhanced
						security</li>
					<li class="mb-3">2.4 inch colour touchscreen for easy control</li>
					<li class="mb-3">Ultimaker 2+ Connect Air Manager (sold separately) removes up to 95% of ultrafine particles
						and shields the print area</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section>
	<h3 class="display-4 text-center">Why the Ultimaker 2+ Connect?</h3>
	<div class="section-title-divider "></div>
	<div class="mt-5">
		<div class="custom-nav-pills">
			<ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
				role="tablist">
				<li class="nav-item">
					<a class="nav-link active in" data-toggle="tab" href="#setup" role="tab">Fast setup</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#maintenance" role="tab">Low maintenance</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#cloud" role="tab">Cloud printing</a>
				</li>
			</ul>
			<div class="tab-content py-5">
				<div class="tab-pane fade show active in  border-0" id="setup" role="tabpanel">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-start">
							<div class="col-12 col-lg-6 py-5">
								<div class="display-4 mb-4">Hit the ground printing</div>
								<p class="lead">Want a finished print from day one? Unbox and connect three components, and get started
									via the new touchscreen. This
									speedy setup even makes installing multiple 3D printers effortless.</p>
								<p class="lead">And register your Ultimaker 2+ Connect to access an exclusive 30-minute onboarding
									course taught by Ultimaker experts,
									who walkthrough installation, Ultimaker Cura, and maintenance.</p>

							</div>
							<div class="col-12 col-lg-6">
								<img
									src="https://www.cadmicro.com/storage/pages/3d-printing/ultimaker/ultimaker-2-plus-connect-3d-printer-setup.webp"
									style="width:100%;">
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade  border-0" id="maintenance" role="tabpanel">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-start">
							<div class="col-12 col-lg-6 py-5">
								<div class="display-4 mb-4">High uptime. Low maintenance</div>
								<p class="lead">Since 2015, over 6 million prints have been prepared for its predecessor. And the
									Ultimaker 2+ Connect improves on that
									workhorse legacy.</p>
								<p class="lead">A clean and updated design keeps maintenance to a minimum – just 20 minutes per month,
									without the need for special
									tools.</p>
								<p class="lead">And when it comes to changeovers, switch out swappable nozzles in less than 5 minutes
									for high uptime, from 0.25 mm for
									detailed prints up to 0.8 mm for fast drafts or 3D sketches.</p>
							</div>
							<div class="col-12 col-lg-6">
								<img
									src="https://www.cadmicro.com/storage/pages/3d-printing/ultimaker/ultimaker-2-plus-connect-easy-maintenance.webp"
									style="width:100%;">
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade border-0" id="cloud" role="tabpanel">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-start">
							<div class="col-12 col-lg-6 py-5">
								<div class="display-4 mb-4">Cloud 3D printing built in</div>
								<p class="lead">At home, in the office or classroom, easily send print jobs to the Ultimaker 2+ Connect.
									Via Wi-Fi or Ethernet, cloud 3D
									printing allows remote file transfer with added security from anywhere in the world.</p>
								<p class="lead">And with Ultimaker Marketplace, customize your slicing experience with plugins
									(including CAD integration) for a simpler
									3D printing workflow.</p>
							</div>
							<div class="col-12 col-lg-6">
								<img
									src="https://www.cadmicro.com/storage/pages/3d-printing/ultimaker/ultimaker-2-plus-connect-cloud-software.webp"
									style="width:100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-secondary py-5">
	<h3 class="display-4 text-center mt-5">Who is the Ultimaker 2+ Connect for?</h3>
	<div class="section-title-divider "></div>
	<div class="mt-5">
		<div class="custom-nav-pills">
			<ul
				class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0 bg-transparent"
				role="tablist">
				<li class="nav-item">
					<a class="nav-link active in" data-toggle="tab" href="#enterprise" role="tab">Enterprises</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#education" role="tab">Education</a>
				</li>
			</ul>
			<div class="tab-content py-5 bg-transparent">
				<div class="tab-pane fade show active in bg-transparent border-0" id="enterprise" role="tabpanel">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-start">
							<div class="col-12 col-lg-6 py-5">
								<div class="display-4 mb-4">Small enterprises that want big savings</div>
								<p class="lead">What if iterations could take just 8 hours instead of 80? That's the power of connected
									in-house 3D printing. And it's
									made possible with the Ultimaker 2+ Connect.</p>
								<p class="lead">Test your ideas for less – by 3D printing prototypes with your choice of affordable
									materials. On average, Ultimaker
									customers achieve more than 80% cost savings compared to outsourcing.</p>
							</div>
							<div class="col-12 col-lg-6">
								<img
									src="https://www.cadmicro.com/storage/pages/3d-printing/ultimaker/ultimaker-2-plus-connect-rapid-prototyping.webp"
									style="width:100%;">
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade bg-transparent border-0" id="education" role="tabpanel">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-start">
							<div class="col-12 col-lg-6 py-5">
								<div class="display-4 mb-4">Educators who want to equip more students with future skills</div>
								<p class="lead">The Ultimaker 2+ Connect is an ideal 3D printer to give more higher education students
									access to additive technology.
									Easily install multiple machines to facilitate students' projects – perfect for general access 3D
									printing labs.</p>
								<p class="lead">With its simple workflow, the Ultimaker 2+ Connect is the ideal machine for giving a
									wide range of students access to
									additive technology – no matter their skill level.</p>
							</div>
							<div class="col-12 col-lg-6">
								<img
									src="https://www.cadmicro.com/storage/pages/3d-printing/ultimaker/ultimaker-2-plus-connect-printers-education-lab.webp"
									style="width:100%;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="pt-5">
		<div class="section-title center-block mx-auto">
			<h2>Ultimaker S3 technical specifications</h2>
			<div class="section-title-divider "></div>
		</div>
		<div class="custom-nav-pills">
			<ul class="nav nav-pills d-flex justify-content-center mx-auto border-left-0 border-right-0 border-top-0"
				role="tablist">
				<li class="nav-item">
					<a class="nav-link active in" data-toggle="tab" href="#dimensions" role="tab">Dimensions</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#printer-properties" role="tab">Printer Properties</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#operation-parameters" role="tab">Operation Parameters</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#ecosystem" role="tab">Ecosystem</a>
				</li>
			</ul>
			<div class="tab-content container">
				<div class="tab-pane fade show active in border-0 pt-5" id="dimensions" role="tabpanel">
					<table class="table m-auto" style="max-width: 800px">
						<tbody>
							<tr>
								<th scope="row" class="border-top-0">Build volume <i class="far fa-question-circle"
										data-toggle="tooltip" data-placement="right"
										title="The physical space inside the Ultimaker S3 that can be used for single or dual extrusion 3D printing."></i>
								</th>
								<td class="border-top-0">223 x 220 x 205 mm<br />
									(8.7 x 8.6 x 8 inches)</td>
							</tr>
							<tr>
								<th scope="row">Assembled dimensions <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The XYZ 3D printer dimensions, including the spool holder and Bowden tubes."></i></th>
								<td>342 x 460 x 580 mm<br />
									(13.5 x 18.1 x 22.8 in)</td>
							</tr>
							<tr>
								<th scope="row">Print technology <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="This is the process of depositing layers of filament, one on top of the other, to build up shapes and models. It is a form of additive manufacturing technology and the process used by all Ultimaker 3D printers."></i>
								</th>
								<td>Fused filament fabrication (FFF)</td>
							</tr>
							<tr>
								<th scope="row">Compatible filament diameter <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The filament diameter that achieves optimal results on Ultimaker 3D printers."></i></th>
								<td>2.85 mm</td>
							</tr>
							<tr>
								<th scope="row">Weight <i class="far fa-question-circle" data-toggle="tooltip" data-placement="right"
										title="The net weight of the 3D printer."></i></th>
								<td>10.3 kg (22.7 lbs)</td>
							</tr>
							<tr>
								<th scope="row">Power input <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right" title="Required power input."></i></th>
								<td>100 - 240 VAC, 50 - 60 Hz</td>
							</tr>
							<tr>
								<th scope="row">Maximum power output <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The peak power output that the printer can reach – usually when the heated bed and hot ends are heating up."></i>
								</th>
								<td>221 W</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade border-0 pt-5" id="printer-properties" role="tabpanel">
					<table class="table m-auto" style="max-width: 800px">
						<tbody>
							<tr>
								<th scope="row" class="border-top-0">Layer Resolution <i class="far fa-question-circle"
										data-toggle="tooltip" data-placement="right"
										title="A micron is the measurement used to define the thickness of a 3D printed layer. 20 micron is 0.02 mm thick. Thinner layers are used for high-detail prints, thicker layers are great for fast prototypes."></i>
								</th>
								<td class="border-top-0">0.25 mm nozzle: 150 - 60 micron<br />
									0.4 mm nozzle: 200 - 20 micron<br />
									0.6 mm nozzle: 300 - 20 micron<br />
									0.8 mm nozzle: 600 - 20 micron<br />
							</tr>
							<tr>
								<th scope="row">XYZ Resolution <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The more accurate the stepper motors within the printer, the greater degree of accuracy and finer resolution can be achieved with each print."></i>
								</th>
								<td>12.5, 12.5, 5 micron</td>
							</tr>
							<tr>
								<th scope="row">Feeder type <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="A geared feeder exerts more force on the filament, and also reduces heat exposure from the motor."></i>
								</th>
								<td>Geared feeder</td>
							</tr>
							<tr>
								<th scope="row">Display</th>
								<td>2.4-inch (6 cm) TFT color touchscreen</td>
							</tr>
							<tr>
								<th scope="row">Print head <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="Thanks to the swappable nozzle, you can easily switch between different nozzle diameters. This results in higher uptime and easier maintenance of your 3D printer."></i>
								</th>
								<td>Single extrusion with swappable nozzle and dual cooling fans</td>
							</tr>
							<tr>
								<th scope="row">Nozzle Diameters <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="Smaller nozzle diameters enable more detailed prints, large diameters reduce overall print time. This 3D printer ships with two AA 0.4 mm print cores and one BB 0.4 mm print core."></i>
								</th>
								<td>0.25, 0.4, 0.6, 0.8 mm</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade border-0 pt-5" id="operation-parameters" role="tabpanel">
					<table class="table m-auto" style="max-width: 800px">
						<tbody>
							<tr>
								<th scope="row" class="border-top-0">Build speed <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The build speed relates to how fast the filament can be extruded through the hot end of the 3D printer. The higher the value the greater the achievable print speed."></i>
								</th>
								<td class="border-top-0">
									&lt; 24 mm³/s
							</tr>
							<tr>
								<th scope="row">Nozzle temperature <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="A wide nozzle temperature range means greater flexibility in the 3D printing material choice."></i>
								</th>
								<td>180 - 280 °C</td>
							</tr>
							<tr>
								<th scope="row">Nozzle heat-up time <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The nozzle heat-up time relates to how fast you can start printing, as well as how fast it can melt the polymer filament."></i>
								</th>
								<td>
									&lt; 2 minutes</td>
							</tr>
							<tr>
								<th scope="row">Operating sound <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="Thanks to their quiet operation, Ultimaker 3D printers are suitable for use in the office, studio, or classroom environment."></i>
								</th>
								<td>
									&lt; 50 dBA</td>
							</tr>
							<tr>
								<th scope="row">Build plate leveling <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="Assisted leveling is easy with the Ultimaker 2+ Connect. The setup wizard guides you through the process, using the included calibration card and build plate knobs to ensure the build plate is perfectly level."></i>
								</th>
								<td>Assisted leveling</td>
							</tr>
							<tr>
								<th scope="row">Build plate <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="With a build plate temperature range of 20 - 110 °C, you can be confident of reliable first-layer adhesion with a wide range of materials"></i>
								</th>
								<td>20 - 110 °C heated glass build plate</td>
							</tr>
							<tr>
								<th scope="row">Build plate heat-up time <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The build plate heat-up time relates to how fast it can reach the print-ready temperature."></i>
								</th>
								<td>
									&lt; 4 minutes (from 20 to 60 °C)</td>
							</tr>
							<tr>
								<th scope="row">Operating ambient temperature <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="This Ultimaker 3D printer operates best in locations between these temperatures."></i>
								</th>
								<td>20 - 110 °C heated glass build plate</td>
							</tr>
							<tr>
								<th scope="row">Non-operating temperature <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="This Ultimaker 3D printer can be safely stored or left inactive at these temperatures."></i>
								</th>
								<td>0 - 32 °C (32 - 90 °F)</td>
							</tr>
							<tr>
								<th scope="row">Air Manager filter technology <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The printer will notify you when the filter needs replacing (every 1,500 print hours – about once per year). Ultimaker 2+ Connect Air Manager sold separately."></i>
								</th>
								<td>Replaceable EPA filter</td>
							</tr>
							<tr>
								<th scope="row">Air Manager filter efficiency<i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="The Air Manager filter catches, traps, or diffuses up to 95% of ultrafine particles (UFPs). Ultimaker 2+ Connect Air Manager sold separately."></i>
								</th>
								<td>Up to 95% of UFPs</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="tab-pane fade border-0 pt-5" id="ecosystem" role="tabpanel">
					<table class="table m-auto" style="max-width: 800px">
						<tbody>
							<tr>
								<th scope="row" class="border-top-0">Supplied free software <i class="far fa-question-circle"
										data-toggle="tooltip" data-placement="right"
										title="Ultimaker Cura is our industry-leading slicing software that turns your 3D model into a file your printer can use. Print over your local network and you can use Ultimaker Connect to manage multiple Ultimaker 3D printers."></i>
								</th>
								<td class="border-top-0">Ultimaker Cura – print preparation software<br />
									Ultimaker Digital Factory</td>
							</tr>
							<tr>
								<th scope="row">Software security</th>
								<td>Data encryption in transit and at rest. Two-factor authentication</td>
							</tr>
							<tr>
								<th scope="row">Supported OS
								</th>
								<td>MacOS, Windows, and Linux</td>
							</tr>
							<tr>
								<th scope="row">Plugin Integration <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="More plugins are available from Ultimaker Cura Marketplace to make your 3D printing experience even easier."></i>
								</th>
								<td>SolidWorks, Siemens NX, Autodesk Inventor</td>
							</tr>
							<tr>
								<th scope="row">Supported file types <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="An STL file is the most used file type for 3D printing. Nearly any 3D modeling software program is able to create these files."></i>
								</th>
								<td>Ultimaker Cura: STL, OBJ, X3D, 3MF, BMP, GIF, JPG, PNG<br />
									Printable formats: UFP</td>
							</tr>
							<tr>
								<th scope="row">File transfer <i class="far fa-question-circle" data-toggle="tooltip"
										data-placement="right"
										title="With one click in Ultimaker Cura, you can print over a Wi-Fi or LAN connection. Or export your print job to a USB stick."></i>
								</th>
								<td>Wi-Fi, Ethernet, USB</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-secondary">
	<h4 class="display-4 text-center mx-auto" style="max-width: 800px">Drive progress with Ultimaker's success system</h4>
	<div class="section-icon-group row mt-4 mx-5">
		<div class="col-12 col-md-4 col-lg-3 p-4">
			<div class="icon-link text-center">
				<svg xmlns="http://www.w3.org/2000/svg" id="i-dual-extrusion" viewBox="0 0 120 120" width="100px">
					<g fill="currentColor">
						<path
							d="M84 17.3c.5 0 .9.4.9.8v42.1c0 .5-.3.8-.8.8H36c-.5 0-.8-.3-.8-.8V18.1c0-.5.3-.8.8-.8h48m0-4H36c-2.6-.1-4.7 2-4.8 4.6v42.3c0 2.7 2.1 4.8 4.8 4.8h48.1c2.7 0 4.8-2.1 4.8-4.8V18.1a5.1 5.1 0 00-4.9-4.8z">
						</path>
						<path
							d="M80.4 4v6.2c0 5.4 4.2 9.6 9.6 9.6h18.6l.1.1v.3l-.1.2L92.5 62l-.1.2c-.1.3-.6.6-1 .6h-3.5L86 61.6a4 4 0 00-2.1-.6h-48c-.8 0-1.5.2-2.2.6l-1.8 1.1h-3.6c-.4 0-.9-.3-1-.8l-16-41.8v-.3l.2-.1H30c5.4 0 9.6-4.2 9.6-9.6V4h40.8m4-4H35.5v10.2c0 3.1-2.4 5.6-5.6 5.6H11c-2.4.3-4 2.5-3.7 4.8 0 .4.1.7.3 1.1l16 41.8c.8 2 2.7 3.3 4.8 3.3h4.8L36 65h47.9l2.9 1.8h4.7a5 5 0 004.8-3.3l16.2-41.7c1-2.2 0-4.7-2.2-5.7-.4-.2-.7-.3-1.1-.3H90c-3 .1-5.5-2.4-5.6-5.4V0zM49.2 99.2H23.7v-3h22.5V74.4h3v24.8zm-25.5 4h47.9v3H23.7v-3zm0 6.9h47.9v3H23.7v-3zm0 6.9h47.9v3H23.7v-3z">
						</path>
						<path d="M68.1 64.9l3.9 3.8 3.8-3.8h-7.7zm-14.7-.2H42l-.4.3 6 5.9 6.1-5.9z"></path>
					</g>
				</svg>
			</div>
			<div class="icon-body mt-3">
				<h4 class="h4 mb-3 text-center">3D printers that simply work</h4>
				<p>Our award-winning 3D printers are robust, reliable, and easy to use. They deliver quality parts time and
					again. Designed
					and tested to run 24/7, they allow you to achieve the results you need more quickly and easily.</p>
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3 p-4">
			<div class="icon-link text-center">
				<svg xmlns="http://www.w3.org/2000/svg" id="i-cura" viewBox="0 0 120 120" width="100px">
					<g fill="currentColor">
						<path
							d="M114.3 87.1a12 12 0 01-8.6 4H14.3a12 12 0 01-8.6-4h108.6m5.7-4H0v.8c0 4.6 6.3 11.2 14.3 11.2h91.4c8 0 14.3-6.7 14.3-11.2v-.8z">
						</path>
						<path d="M106 28.9v54.2H14V28.9h92m4-4H10v62.2h100V24.9z"></path>
						<path
							d="M60.5 60.5h11.8v6.6H60.5c-7.7 0-12.5-5.3-12.5-12.8s4.7-12.7 12.5-12.7h11.8v6.6H60.5c-3.9 0-5.9 2.8-5.9 6.1 0 3.4 2 6.2 5.9 6.2m-8.2-27.6L36.9 48.5v30.6h30.7l15.6-15.6V32.9H52.3z">
						</path>
					</g>
				</svg>
			</div>
			<div class="icon-body mt-3">
				<h4 class="h4 mb-3 text-center">Software ready for Industry 4.0</h4>
				<p>Trusted by millions of users across 14 languages, Ultimaker  Cura  slices your model and integrates with any
					workflow
					through Marketplace plugins. Then scale production and digital distribution with Ultimaker Digital Factory.
				</p>
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3 p-4">
			<div class="icon-link text-center">
				<svg xmlns="http://www.w3.org/2000/svg" id="i-material" viewBox="0 0 120 120" width="100px">
					<g fill="currentColor">
						<path
							d="M73.1 16c13 0 24 20.1 24 44s-11 44-24 44-24-20.1-24-44 11-44 24-44m0-4c-15.5 0-28 21.5-28 48s12.5 48 28 48 28-21.5 28-48-12.5-48-28-48z">
						</path>
						<path
							d="M73.1 44.2c.7 0 3.1.3 5.6 4a23 23 0 012.7 11.6v.2c.1 4-.8 8-2.8 11.5-1.7 2.9-3.6 4.3-5.6 4.3-2.5 0-4.4-2.3-5.5-4.2A24.3 24.3 0 0164.7 60v-.2c-.1-4 .8-8 2.8-11.6.7-1.2 1.7-2.4 2.7-3.1 1-.6 1.9-.9 2.9-.9m0-4c-1.8 0-3.5.6-5.1 1.6-1.6 1.1-3 2.8-4 4.5A27.2 27.2 0 0060.7 60c-.1 4.8 1 9.5 3.3 13.7 2.3 3.9 5.4 6.2 9 6.2s6.7-2.2 9.1-6.3c2.3-4.2 3.4-8.9 3.3-13.7.1-4.8-1-9.5-3.3-13.7-3.3-5.1-7.1-6-9-6zM26.9 60h4v48h-4z">
						</path>
						<path
							d="M47.1 60c0-17.1 5.3-32.1 13.2-40H46.9c-9.5 0-20 16.4-20 40s10.5 40 20 40h13.5c-7.9-7.9-13.3-22.9-13.3-40z">
						</path>
						<path
							d="M22.9 60c0-23.9 11-44 24-44 4.8 0 9.3 2.7 13.1 7.4.9-1.1 1.8-2.1 2.8-2.9-4.5-5.3-10-8.4-15.9-8.4-15.5 0-28 21.5-28 48 0 9.1 1.5 17.5 4 24.8V60zM60 96.6c-3.8 4.6-8.3 7.4-13.1 7.4-4.3 0-8.4-2.2-12-6.1v5.5c3.6 3 7.7 4.6 12 4.6 5.9 0 11.4-3.1 15.9-8.4-1-.9-1.9-1.9-2.8-3z">
						</path>
					</g>
				</svg>
			</div>
			<div class="icon-body mt-3">
				<h4 class="h4 mb-3 text-center">Material choice like never before</h4>
				<p>Ultimaker offers the widest material choice on the market. Through our Material Alliance, choose the perfect
					filament
					for your application – from advanced polymers to carbon fiber composites.</p>
			</div>
		</div>
		<div class="col-12 col-md-4 col-lg-3 p-4">
			<div class="icon-link text-center">
				<svg xmlns="http://www.w3.org/2000/svg" id="i-support" viewBox="0 0 120 120" width="100px">
					<g fill="currentColor">
						<path d="M14 43.6v26.8a14 14 0 010-26.8m4-4.6C8.1 39 0 47.1 0 57s8.1 18 18 18V39z"></path>
						<path d="M105.4 41.4a48 48 0 00-90.8 0l1.4-.2V57a44 44 0 0188 0V41.1l1.4.3z"></path>
						<path d="M106 43.6a14 14 0 010 26.8V43.6m-4-4.6v36c9.9 0 18-8.1 18-18s-8.1-18-18-18z"></path>
						<path d="M104 72.9V57c0 22-16.3 40.3-37.5 43.5.3.8.5 1.6.5 2.5l-.2 1.5a47.9 47.9 0 0038.5-31.9l-1.3.3z">
						</path>
						<path d="M60 98c2.8 0 5 2.2 5 5s-2.2 5-5 5-5-2.2-5-5 2.2-5 5-5m0-4c-5 0-9 4-9 9s4 9 9 9 9-4 9-9-4-9-9-9z">
						</path>
						<path d="M60 22a35 35 0 110 70 35 35 0 010-70m0-4a39 39 0 10.1 78.1A39 39 0 0060 18z"></path>
					</g>
				</svg>
			</div>
			<div class="icon-body mt-3">
				<h4 class="h4 mb-3 text-center">Support dedicated to your success</h4>
				<p>Wherever you are in the world, Ultimaker support is close by. Our global network of service partners offer
					professional
					installation, training, and maintenance in your language and time zone.​</p>
			</div>
		</div>
	</div>
</section>
@endsection
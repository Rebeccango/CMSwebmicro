@extends('layouts.layout_nomenu')
@section('title')
3D Printers for Education | Inspiring Innovation in Future Generations
@stop
@section('meta')
<link rel="canonical" href="{{route('education.3d-printers')}}" />
@stop
@section('description')CAD MicroSolutions believes that aligning Industry and Academia through meaningful partnerships
will transform the learning experience and enable innovation in both instructors and students alike. We offer solutions
to Educational institutes across Canada that reinvent learning through the use of innovative technologies and
forward-looking curriculum. @stop
@section('header')
@include('pages.education.education_header')
@endsection
@section('body')
<section class="parallax-window parallax-section trans-header-window parallax d-flex"
	style="min-height:450px; background-image:url({{ asset('storage/images/education/education-hero.webp') }})">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto">
					<h1>3D Printing for Education</h1>
					<div class="section-title-divider"></div>
				</div>
				<div>
					@include('layouts.generic_contact_buttons')
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-primary">
	<div class="container">
		<div class="d-flex flex-row row flex-grow-1 flex-wrap flex-1">
			<div class="col-lg-4 flex-grow-1 d-flex flex-1 pb-4">
				<div class="card border-0 shadow flex-grow-1 p-4">
					<div class="card-body text-center p-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="my-3 mb-3" viewBox="0 0 24 24" width="54" height="54">
							<path
								d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72L5.18 9L12 5.28L18.82 9zM17 15.99l-5 2.73l-5-2.73v-3.72L12 15l5-2.73v3.72z" />
						</svg>
						<h5 class="card-title">Transform the classroom</h5>
						<p class="card-text">Introducing 3D scanners into the classroom or lab opens opportunities and enables
							hands-on learning.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 flex-grow-1 d-flex flex-1 pb-4">
				<div class="card border-0 shadow flex-grow-1 p-4">
					<div class="card-body text-center p-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="my-3 mb-3" viewBox="0 0 24 24" width="54" height="54">
							<path
								d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 0 0-5.5-1.65l-.5.67l-.5-.68C10.96 2.54 10.05 2 9 2C7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1zm11 15H4v-2h16v2zm0-5H4V9c0-.55.45-1 1-1h4.08L7.6 10.02a.995.995 0 0 0 .22 1.4c.44.32 1.07.22 1.39-.22L12 7.4l2.79 3.8c.32.44.95.54 1.39.22c.45-.32.55-.95.22-1.4L14.92 8H19c.55 0 1 .45 1 1v5z" />
						</svg>
						<h5 class="card-title">Special Pricing</h5>
						<p class="card-text">CAD MicroSolutions Education Solutions offer affordable, scalable and easy-to-implement solutions to educational
						institutes of all sizes across Canada.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 flex-grow-1 d-flex flex-1 pb-4">
				<div class="card border-0 shadow flex-grow-1 p-4">
					<div class="card-body text-center p-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="my-3 mb-3" viewBox="0 0 24 24" width="54" height="54">
							<path
								d="M11 23.59v-3.6c-5.01-.26-9-4.42-9-9.49C2 5.26 6.26 1 11.5 1S21 5.26 21 10.5c0 4.95-3.44 9.93-8.57 12.4l-1.43.69zM11.5 3C7.36 3 4 6.36 4 10.5S7.36 18 11.5 18H13v2.3c3.64-2.3 6-6.08 6-9.8C19 6.36 15.64 3 11.5 3zm-1 11.5h2v2h-2zm2-1.5h-2c0-3.25 3-3 3-5c0-1.1-.9-2-2-2s-2 .9-2 2h-2c0-2.21 1.79-4 4-4s4 1.79 4 4c0 2.5-3 2.75-3 5z" />
						</svg>
						<h5 class="card-title">Great support</h5>
						<p class="card-text">Our team is highly educated, professional, and certified. We are work hard to offer you professional support when and
						where you may need it.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="p-0">
	<div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
		<div class="col-lg-5 pr-0 order-2 order-md-1 flex-grow-1 p-0 overflow-hidden"><img
				src="{{ asset('images/pages/education/edu_1.jpg') }}" width="auto" height="100%">
		</div>
		<div class="col-lg-7 text-left d-flex justify-content-start order-sm-1 order-md-2">
			<div class="p-5">
				<h3 class="display-4">3D PRINTING FOR EDUCATION</h3>
				<p class="mt-3" style="max-width:600px;">3D printing is changing the way the world designs and manufactures.
					Whether in consumer goods, architecture, healthcare,
					industrial manufacturing, automotive, or nearly any other industry, additive manufacturing has been widely
					adopted to
					prototype, iterate, and produce end-use products. While Industry advances, Academia must embrace and adapt new
					technology to mitigate the skills gap and prepare students for the career paths of the future.
				</p>
			</div>
		</div>
	</div>
</section>
<section class="p-0 bg-primary text-white">
	<div class="d-flex flex-row row align-items-center justify-content-center">
		<div class="col-lg-12 text-left d-flex justify-content-center order-sm-1 order-md-2">
			<div class="p-5">
				<div class="center-block mx-auto text-center">
					<h3 class="display-4">BRIDGING THE SKILLS GAP</h3>
					<div class="section-title-divider bg-white"></div>
				</div>
				<div class="w-full  row d-flex align-content-stretch">
					<div class="col-lg-4 col-sm-12 my-3 flex-grow-1 px-4">
						<p class="lead">As 3D printing adoption in the workplace rises, organizations are increasingly facing the challenges of bridging the
						additive manufacturing skills gap. Advancements in 3D printing have opened up almost limitless applications for the
						technology in nearly every industry.</p>
					</div>
					<div class="col-lg-4 col-sm-12 my-3 flex-grow-1 px-4">
						<p class="lead">Employers have pointed out one missing piece of the puzzle: Staff generally lack the skill set necessary to leverage
						this solution to its full potential. This gap requires a new personnel pipeline, and Industry is looking to Education to
						fill it.</p>
					</div>
					<div class="col-lg-4 col-sm-12 my-3 flex-grow-1 px-4">
						<p class="lead">The existing workforce is often unfamiliar with the latest additive manufacturing technologies, and the rate of
						innovation and advancements in 3D printing make it difficult for even the most savvy companies to keep up. Building a
						more additively skilled workforce demands well-equipped educational institutes with programs and technology to
						facilitate learning.</p>
					</div>

					<div class="p-5 col-lg-12 flex-grow flex-grow-1 flex-1 border border-white text-center">
						<h4 class="section-title mb-0">Learn More About our Solutions for Education</h4>
						<button type="button" class="btn btn-lg btn-white mx-auto btn-rounded mt-3" data-toggle="modal"
							data-target="#educationGuides">Download Education Guides</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="p-0 section--grey">
	<div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
		<div class="col-lg-7 text-left d-flex justify-content-center">
			<div class="p-5 d-flex flex-column">
				<h3 class="display-4">INTRODUCING 3D PRINTING IN K-12</h3>
				<div class="">
					<p class="mt-3 mb-4" style="max-width:600px;">Spark creativity and imagination in the classroom while enabling three-dimensional learning and exposing students to
					professional-level technology that prepares them for the future. With applications in engineering, science, art, math
					and more, introducing 3D printing in the classroom allows educators to engage students like never before. Learn more
					about affordable, reliable and easy-to-use 3D printing solutions and the tutorials, learning and curriculum resources
					that come along with them.
					</p>
					<p class="mt-3 mb-4"><strong>Learn why Canadian education institutions across the country have equipped their labs and classrooms and modified their
					curriculum's to embrace 3D printing.</strong></p>
				</div>
			</div>
		</div>
		<div class="col-lg-5 pr-0 order-2 order-md-1 flex-grow-1 p-0 overflow-hidden"><img
				src="{{ asset('images/pages/education/edu_4.jpg') }}" width="auto" height="100%">
		</div>
	</div>
</section>
<section class="p-0">
	<div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
		<div class="col-lg-5 pr-0 order-2 order-md-1 flex-grow-1 p-0 overflow-hidden"><img
				src="{{ asset('images/pages/education/edu_5.jpg') }}" width="auto" height="100%">
		</div>
		<div class="col-lg-7 text-left d-flex justify-content-center order-1 order-md-2">
			<div class="p-5">
				<h3 class="display-4">3D PRINTING IN HIGHER EDUCATION</h3>
				<p class="mt-3" style="max-width:600px;">The past decade has seen a massive increase in 3D printing courses offered by Canadian educational institutes as the
				demand for a workforce with 3D printing know-how increases. FabLabs, research labs and innovation centres across the
				country are acquiring and implementing various 3D printing technology alongside their CNC machines, vacuum formers and
				injection moulding machines.</p>
			</div>
		</div>
	</div>
</section>
<section class="p-0 section--grey">
	<div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
		<div class="col-lg-7 text-left d-flex justify-content-center">
			<div class="p-5">
				<h3 class="display-4">SELECTING THE RIGHT TECHNOLOGY FOR YOUR SCHOOL</h3>
				<p class="float-left mt-3 mb-4" style="max-width:600px;">CAD MicroSolutions has partnered with some of the world’s leaders in additive manufacturing technology and has helped
				educational institutes across the country make the right investment in additive technology. Whether you’re implementing
				3D printing technology for the first time, or looking to add a different additive technology to compliment your existing
				lab, CAD MicroSolutions can help. Book a complimentary consultation with our team to learn more about our Education
				Solutions today.</p>

				<button class="btn btn-lg btn-outline-primary btn-rounded btn-dialog" id="contact" data-toggle="modal"
					data-target="#contactModal" data-type="contact" data-title="Contact Request Form">Contact Us</button>
			</div>
		</div>
		<div class="col-lg-5 pr-0 order-2 order-md-1 flex-grow-1 p-0 overflow-hidden"><img
				src="{{ asset('images/pages/education/edu_6.jpg') }}" width="auto" height="100%">
		</div>

	</div>
</section>

<section class="p-0 section--grey">
	<div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-stretch">
		<div class="col-lg-5 pr-0 flex-grow-1 p-0 overflow-hidden">
			<div class="embed-responsive embed-responsive-4by3 h-100">
				<iframe class="embed-responsive-item" width="100%" height="auto" src="https://www.youtube.com/embed/loAZsgMgeWE"
					frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="min-height:100%"></iframe>
			</div>
		</div>
		<div class="col-lg-7 text-left d-flex justify-content-center align-items-center">
			<div class="p-4 flex flex-column">
				<h3 class="lead" style="font-size:40px">Faces of the Frontline: Hargurdeep Singh from Sheridan</h3>
				<p class="mt-3 mb-4 lead" style="max-width:600px;">See first-hand how polytechnics are training and contributing talent for Canada's frontline. Learn more about this
				graduate's unique journey and how their polytechnic education prepared them to work on the frontline of the COVID-19
				pandemic.</p>

				<p><strong>This video is part of the <a href="https://polytechnicscanada.ca/resources/videos/">Faces of the Frontline</a> series created by <a href="https://polytechnicscanada.ca/">Polytechnics Canada</a>.</strong></p>
			</div>
		</div>
	</div>
</section>

<section class="p-0 bg-primary text-white">
	<div class="d-flex flex-row row align-items-center justify-content-start">
		<div class="col-lg-12 text-left d-flex justify-content-start">
			<div class=" container p-5">
				<h3 class="display-4">GET A CUSTOMIZED SOLUTION FOR YOUR EDUCATIONAL INSTITUTE</h3>

				<button class="btn btn-lg btn-outline-primary text-white border-white mt-4 btn-rounded btn-dialog" id="quote"
					data-toggle="modal" data-target="#quoteContactModal" data-type="quote" data-title="Quote Request Form">Get a
					Quote</button>
			</div>
		</div>
	</div>
</section>
@stop

@push('foot')
<div class="modal fade" id="educationGuides" tabindex="-1" role="dialog" aria-labelledby="education-guides"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<h5 class="modal-title w-100">Learn More About our Solutions for Education</h5>
				<p>Fill out the form below to gain access to the free education guides!</p>
				<button type="button" style="position: absolute; right: 15px;" class=" close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div data-form-block-id="493f44ff-3c06-ea11-a811-000d3a33f42d"></div>
				<div id="dBTkuPyztCMbgYjugaAz3w0XKXtqbzDpHatz5mOvUMYQ"></div>
			</div>
		</div>
	</div>
</div>
@endpush
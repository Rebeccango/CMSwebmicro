@extends('layouts.layout_nomenu')
@section('title')
CAD/CAM Software for Education | Inspiring Innovation in Future Generations
@stop
@section('meta')
<link rel="canonical" href="{{route('education.cadcam-software')}}" />
@stop
@section('description')Prepare students for success after graduation by exposing them to industry-standard tools and
technologies in the
classroom. SOLIDWORKS and the 3DEXPERIENCE Platform are leveraged by industry around the world, with over 80% of the
world’s top engineering schools choosing to teach with SOLIDWORKS. @stop
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
					<h1>3D Scanning & Metrology Solutions for Education</h1>
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
		<p class="lead text-center text-white mx-auto" style="max-width:800px">Prepare students for success after graduation
			by exposing them to industry-standard tools and technologies in the
			classroom. SOLIDWORKS and the 3DEXPERIENCE Platform are leveraged by industry around the world, with over 80% of
			the
			world’s top engineering schools choosing to teach with SOLIDWORKS.</p>
	</div>
</section>
<section class="p-0">
	<div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-stretch">
		<div class="col-lg-6 order-2 pr-0 order-md-1 flex-grow-1 overflow-hidden">
			<div class="p-5">
				<h1 style="font-size:45px; font-weight:300">CLOUD SOLUTIONS FOR EDUCATORS</h1>
				<p class="lead mb-4">The <strong>3DEXPERIENCE Platform</strong> offers a suite of apps and tools for schools,
					students and educators to collaborate
					seamlessly
					from anywhere in the world. New challenges in education has led to an evolution in teaching, and a need for
					schools
					and
					educators to adapt.</p>

				<h3 style="font-size:35px; font-weight:300">What’s driving this change?</h3>

				<p class="lead mb-4 mt-3">Students need to be able to collaborate across geographies, from any device, whether
					in the classroom or learning
					remotely. Having a cloud-based platform allows you to operate a virtual classroom when computer-locked desktop
					technology is not accessible. Teachers today struggle with disconnected data, with different systems for
					distributing
					syllabus and curriculum, collecting assignments, and engaging with students or other faculty. The teachers of
					tomorrow
					want a single, streamlined, connected solution.</p>

				<h3 style="font-size:35px; font-weight:300">What is the 3DEXPERIENCE Platform for Education?</h3>

				<p class="lead mb-4 mt-3"><strong>Everything you need – In one place.</strong><br /><br />
					With an ever-growing portfolio of apps living securely in the Cloud, the
					3DEXPERIENCE platform for education offers a complete CAD teaching tool without the need for costly IT and
					software and
					hardware maintenance.</p>

				<h4>The platform includes:</h4>

				<ul class="my-3 lead">
					<li>3D CAD solution for students, including SOLIDWORKS and more</li>
					<li>Online Cloud storage</li>
					<li>Collaborative Project & Task management</li>
					<li>Team messaging & tools for communication</li>
					<li>Newsfeeds inspired by social media</li>
				</ul>

				<button class="btn btn-lg btn-outline-primary btn-rounded btn-dialog mx-auto mt-4" id="quote"
					data-toggle="modal" style="width:200px" data-target="#quoteContactModal" data-type="quote"
					data-title="Quote Request Form">Get a Quote</button>
			</div>
		</div>
		<div
			class="col-lg-6 text-left p-0 d-flex justify-content-start order-sm-1 order-md-2 section-secondary flex-grow-1">
			<div class="p-5">
				<h1 style="font-size:45px; font-weight:300">DESKTOP SOLUTIONS FOR EDUCATORS</h1>
				<p class="lead mb-4">Leveraged by colleges and universities around the world, <strong>SOLIDWORKS Education
						Edition</strong> is a complete hands-on CAD
					teaching tool, including a full curriculum and interactive courseware. An all-inclusive resource for teaching
					3D CAD,
					data management and design validation in your educational institute.</p>

				<h3 style="font-size:35px; font-weight:300">What’s Included?</h3>

				<ul class="my-3 lead">
					<li>SOLIDWORKS Premium (3D CAD software)</li>
					<li>SOLIDWORKS Simulation Premium (FEA tools)</li>
					<li>SOLIDWORKS Flow Simulation (CFD tools)</li>
					<li>SOLIDWORKS Motion (Kinematics analysis)</li>
					<li>SOLIDWORKS Plastics Premium (Part & mold filling analysis)</li>
					<li>SOLIDWORKS Sustainability (Environmental impact tools)</li>
					<li>SOLIDWORKS Electrical Professional (Electrical systems design tools)</li>
					<li>SOLIDWORKS CAM Professional (Integrate design & manufacturing)</li>
					<li>SOLIDWORKS Model Based Definition (Define, organize and publish 3D PMI)</li>
					<li>SOLIDWORKS Composer (Technical documentation tools)</li>
					<li>SOLIDWORKS Visualize Professional (Develop rich, photo quality content)</li>
					<li>MySolidWorks for Students (online training and community)</li>
					<li>SOLIDWORKS PCB <em>(*available for an additional cost)</em></li>
				</ul>

				<p class="lead"><strong>Prepare students with the skills to land a job directly out of school, with experience
						and certification in the world’s
						most widely-used 3D design software.</strong></p>

				<button class="btn btn-lg btn-outline-primary btn-rounded btn-dialog mx-auto mt-4" id="quote"
					data-toggle="modal" style="width:200px" data-target="#quoteContactModal" data-type="quote"
					data-title="Quote Request Form">Get a Quote</button>
			</div>
		</div>
	</div>
</section>
<section class="p-0 section--grey">
	<div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-stretch">
		<div class="col-lg-5 pr-0 flex-grow-1 p-0 overflow-hidden">
			<div class="embed-responsive embed-responsive-4by3 h-100">
				<iframe class="embed-responsive-item" width="100%" height="auto" src="https://www.youtube.com/embed/lBNHPwZIcRg"
					frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="min-height:100%"></iframe>
			</div>
		</div>
		<div class="col-lg-7 text-left d-flex justify-content-center align-items-center">
			<div class="p-4">
				<h3 class="lead" style="font-size:40px">What's New in SOLIDWORKS Education 2020-2021</h3>
				<p class="float-left mt-3 mb-4" style="max-width:600px;">Want to get a head start on the 2020-2021 academic year? Watch our webinar to learn about the new SOLIDWORKS® Education
				product offerings, including our desktop product and our new cloud offering SOLIDWORKS 3D Designer for Education.</p>
			</div>
		</div>
	</div>
</section>


<section class="bg-primary">
	<div class="container text-center">
		<h2 class="text-white mb-4" style="font-size:34px; font-weight:300">DESKTOP SOLUTIONS FOR EDUCATORS</h2>
		<p class="lead text-white mx-auto" style="max-width:800px">CAD MicroSolutions works closely with Educational institutions across Canada to help prepare students for success after
		graduation.</p>
		<a href="https://www.cadmicro.com/landing/solidworks-resources-for-students" target="_blank" class="btn btn-white btn-outline-primary btn-rounded btn-dialog mx-auto mt-4"
				style="width:200px">Learn more</a>
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
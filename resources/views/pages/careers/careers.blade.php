@extends('layouts.layout')
@section('title')
CAD MicroSolutions Careers
@stop
@section('meta')
<link rel="canonical" href="{{route('careers')}}" />
@stop
@section('description')We are looking for people who understand our customers and can help them understand our
solutions. Our customers are involved in mechanical design and manufacturing. Our Solutions are technical and heavily
focused on CAD.@stop
@section('keywords') Careers, CAD MicroSolutions, Working, Jobs, Toronto, Etobicoke @stop
@section('body')
	<section data-z-index="0" class="parallax-window parallax-section trans-header-window parallax d-flex"
	style="min-height:400px; background-image:url({{asset('storage/banners/careers.jpg')}})">
		<div class="parallax-section__shadow"></div>
		<div class="container-fluid">
			<div class="content white-content d-flex justify-content-center align-items-center">
				<div>
					<div class="section-title parallax-section__title center-block mx-auto wow fadeIn"
						data-wow-duration="0.8s" data-wow-delay="0.5s">
						<h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">CAREERS</h1>
						<div class="section-title-divider"></div>
						<h2 class="h3">WE ARE ALWAYS LOOKING FOR NEW TALENT!</h2>
					</div>
					<div class="text-center">
						<a class="btn btn-lg btn-primary wow fadeIn mx-auto text-center" data-wow-duration="1s" data-wow-delay="0.2s"
							href="{{route('positions')}}" data-type="quote" data-title="Get a free quote">APPLY FOR A
							POSITION</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="pb-4">
		<div class="container-fluid">
			<div class="content">
				<div class="section-title center-block mx-auto">
					<h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">A CAREER AT CAD MicroSolutions</h1>
					<div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
				</div>
				<div class="section-block">
					<p class="text-justify m-x-auto" style="padding:0 20px;">CAD MicroSolutions is proud of our tradition of
						forming long term, successful relationships between our employees, suppliers, and our customers. We
						have a strong 24/7 work ethic (we do not a punch the clock 9-5). We are customer focused and are
						always trying to exceed our customers’ expectations. We LOVE to reward and recognize the role our
						employees have in helping our customers achieve success. And best of all, we have been able to create
						a culture of having fun while achieving success. BIG success and BIG fun.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="pb-5">
		<div class="container-fluid">
			<div class="content">
				<div class="section-title center-block mx-auto">
					<h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">What's Happening?</h1>
					<div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
				</div>
				<div class="section-block">
					<p class="text-justify m-x-auto px-3">It’s never a dull day at CAD MicroSolutions. We hold an amazing
						annual customer event each year called our “Launch Event”, customer appreciation nights at
						professional sports events, team building events for staff, celebrate milestones such as birthdays,
						and have a lot of fun celebrations around holidays, or just because we achieved a particularly
						successful business goal.<br />
						Employees receive world class training, professional development, and coaching and are encouraged to
						engage with our customers and suppliers as much as possible. Our employees also have the opportunity
						to travel to fantastic destinations for conferences and corporate awards trips.</p>
					<p class="text-justify m-x-auto px-3">
						How has CAD MicroSolutions achieved our goals? By attracting the best people. We believe the best
						team, made up of people from all backgrounds and walks of life, come up with the best ideas and
						deliver exceptional results for our customers. We hire based on energy, experience, values, and
						alignment of personal and professional goals. CAD MicroSolutions will always be the best organization
						in our industry if we are made up of the best people.
					</p>
					<a data-wow-duration="1s" data-wow-delay="0.2s"
						href="{{ route('events.index') }}"
						class="btn btn-lg btn-primary wow fadeInUp mx-auto d-block text-center mt-5"
						style="width: 300px;">View our Events</a>
				</div>
			</div>
		</div>
	</section>
	@stop
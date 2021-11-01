@extends('layouts.layout')
@section('title') Events @stop
@section('meta')
<link rel="canonical" href="{{route('events.index')}}" />
<meta property="og:url" content="{{route('events.index')}}">
@if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
	<meta property="og:image" content="{{ asset('storage/'.$upcomingEvents->first()->image) }}">
@elseif(isset($recentEvents) && $recentEvents->count() > 0)
	<meta property="og:image" content="{{ asset('storage/'.$recentEvents->first()->image) }}">
@endif
@stop
@section('description') Stay up-to-date on all of the events happening at CAD MicroSolutions and our partners. @stop
@section('body')


@if($upcomingEvents->count() > 0)
<section>
	<div class="container-fluid" id="upcomingEvents">
		<h1>Upcoming Events <span class="badge badge-lg badge-primary btn-rounded">{{ $upcomingEvents->count() }}</span>
		</h1>
		<a href="#recentEvents">View Recent Events</a>
		@foreach($upcomingEvents as $key => $event)
		<div class="card text-left border-1 shadow-sm my-4">
			<img class="card-img-top" src="holder.js/100px180/" alt="">
			<div class="card-body d-flex justify-content-center align-items-start">
				@if($event->image)
				<img src="{{ asset('storage/'.$event->image) }}" width="300" height="auto" class="d-none d-md-block mr-4">
				@endif
				<div class="d-flex flex-column align-self-stretch justify-content-between">
					<div class="d-flex flex-column">
						<a href="{{ route('calendar-event',[$event->id, $event->slug]) }}">
							<h4 class=" card-title mb-0 text-dark">{!! $event->title
								!!}</h4>
						</a>
						<div>
							<span class="mb-3 text-muted align-middle"><strong>Starts:</strong> {!!
								\Carbon\Carbon::parse($event->start_time)->format('F d, Y h:i A')
								!!}</span>
							<span class="mb-3 ml-3 text-muted  align-middle"><strong>Ends:</strong> {!!
								\Carbon\Carbon::parse($event->end_time)->format('F d, Y h:i A')
								!!}</span>
						</div>
						<p class="card-text my-3">
							{!! \Illuminate\Support\Str::words(strip_tags($event->content), $limit = 60, $end = '...') !!}
						</p>
					</div>
					<div>
						<a class="btn btn-sm btn-rounded btn-primary align-middle px-4"
							href="{{ route('calendar-event',[$event->id, $event->slug]) }}">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<div class="d-flex justify-content-between row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4 justify-content-center d-flex">
				{{ $upcomingEvents->appends(['recent_events' => $recentEvents->currentPage()])->fragment('upcomingEvents')->links() }}
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
</section>
@endif
<div class="anchor" id="recentEvents"></div>
<section class="pt-0">
	<div class="container-fluid">
		<h1>Recent Events (Last 3 Months)</h1>
		@foreach($recentEvents as $key => $event)
		<div class="card text-left border-1 shadow-sm my-4">
			<img class="card-img-top" src="holder.js/100px180/" alt="">
			<div class="card-body d-flex justify-content-center align-items-start">
				@if($event->image)
				<img src="{{ asset('storage/'.$event->image) }}" width="300" height="auto" class="d-none d-md-block mr-4">
				@endif
				<div class="d-flex flex-column align-self-stretch justify-content-between">
					<div class="d-flex flex-column">
						<a href="{{ route('calendar-event',[$event->id, $event->slug]) }}">
							<h4 class=" card-title mb-0 text-dark">{!! $event->title
								!!}</h4>
						</a>
						<div>
							<span class="mb-3 text-muted align-middle"><strong>Starts:</strong> {!!
								\Carbon\Carbon::parse($event->start_time)->format('F d, Y h:i A')
								!!}</span>
							<span class="mb-3 ml-3 text-muted  align-middle"><strong>Ends:</strong> {!!
								\Carbon\Carbon::parse($event->end_time)->format('F d, Y h:i A')
								!!}</span>
						</div>
						<p class="card-text my-3">
							{!! \Illuminate\Support\Str::words(strip_tags($event->content), $limit = 60, $end = '...') !!}
						</p>
					</div>
					<div>
						<a class="btn btn-sm btn-rounded btn-primary align-middle px-4"
							href="{{ route('calendar-event',[$event->id, $event->slug]) }}">READ MORE</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<div class="d-flex justify-content-between row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4 justify-content-center d-flex">
				{{ $recentEvents->appends(['upcoming_events' => $upcomingEvents->currentPage()])->fragment('recentEvents')->links() }}
			</div>
			<div class="col-lg-4"></div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid" id="upcomingEvents">
		<h1><i class="fas fa-thumbtack mr-3"></i>Pinned</h1>
		<div class="card text-left border-1 shadow-sm my-4">
			<div class="card-body d-flex justify-content-center align-items-start">
				<div class="d-flex flex-column align-self-stretch justify-content-between">
					<div class="d-flex flex-column"><a href="https://www.cadmicro.com/blog/160/plastics-knowledge-day-recap">
							<h4 class="card-title mb-0 text-dark">CANADA'S FIRST PLASTICS KNOWLEDGE DAY - A RECAP</h4>
						</a>
						<p class="card-text my-3">CAD MicroSolutions had the pleasure of hosting Canada’s first Plastics Knowledge
							Day
							alongside our 3D metrology partner, GOM, on November 27th at our Toronto head office. Although ours was
							the only
							event in Canada, Plastics Knowledge Day was a global series with events hosted in more than 30 countries
							around
							the world throughout 2019! The events brought together experts in optical 3D metrology and plastics to
							share
							information on the tools and technology making an impact on the plastics process chain in Industry 4.0.
						</p>
					</div>
					<div><a href="https://www.cadmicro.com/blog/160/plastics-knowledge-day-recap"
							class="btn btn-sm btn-rounded btn-primary align-middle px-4">READ MORE</a></div>
				</div>
			</div>
		</div>
		<div class="card text-left border-1 shadow-sm my-4">
			<div class="card-body d-flex justify-content-center align-items-start">
				<div class="d-flex flex-column align-self-stretch justify-content-between">
					<div class="d-flex flex-column"><a
							href="https://www.cadmicro.com/blog/157/what-s-new-in-solidworks-2020-launch-event-recap">
							<h4 class="card-title mb-0 text-dark">WHAT'S NEW IN SOLIDWORKS 2020 - LAUNCH EVENT RECAP VIDEO</h4>
						</a>
						<p class="card-text my-3">
							Every year, SOLIDWORKS releases a new and improved version of the software that directly addresses many of
							the requests and feedback from the SOLIDWORKS user community around the world. As our long-time clients
							have come to realize, CAD MicroSolutions prides ourselves on our technical prowess – and our ability to
							throw a pretty great get together for our network.
						</p>
					</div>
					<div><a href="https://www.cadmicro.com/blog/157/what-s-new-in-solidworks-2020-launch-event-recap"
							class="btn btn-sm btn-rounded btn-primary align-middle px-4">READ MORE</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop
@extends('layouts.layout')
@section('title')Careers @stop
@section('body')
<section style="padding-bottom: 80px;">
	<div class="container-fluid">
		<div class="content">
			<div class="section-title center-block mx-auto pt-4" style="padding-top:30px;">
				<h1>POSITIONS</h1>
				<div class="section-title-divider"></div>
				<h2 class="wow fadeIn text-center" style="font-weight:300; margin-top:20px;">JOIN OUR TEAM!</h2>
			</div>
			<div class="section-block">
				<h3 class="main-title">At present we are interested in hiring for the following positions</h3>
				<div>
					@foreach($positions as $p)
					<div class="d-flex flex-row card card-body align-items-start shadow-sm mb-4">

						<div style="width:100px">
							<img src="{{asset('storage/icons/hiring_light.png')}}" width="100" />
						</div>
						<div>
							<a href="/careers/positions/{{$p->slug}}">
								<h3 style="margin-left:20px;">{{$p->title}}</h3>
							</a>
							{{-- @if($p->open)
										<span class="text-success" style="margin-left:20px">CURRENTLY HIRING</span>
									@else
										<span class="text-warning" style="margin-left:20px;  vertical-align:center;">CURRENTLY NOT HIRING</span><span class="text-muted" style="font-size:12px; vertical-align:center; margin-left:15px;">(PLEASE COME BACK LATER)</span>
									@endif --}}
							<p class="text-justify m-x-auto" style="padding:0 20px;">
								{{$p->excerpt}}
							</p>
							<a href="/careers/positions/{{$p->slug}}" class="btn btn-sm btn-primary" style="margin-left:20px">Learn
								More</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@stop
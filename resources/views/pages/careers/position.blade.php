@extends('layouts.layout')
@section('title')
{{$position->title}} | Careers
@stop
@section('description'){{$position->meta_description}}@stop
@section('keywords'){{$position->meta_keywords}}@stop
@section('body')
	<section >
		<div class="container-fluid">
			<div class="content">
				<div class="row">
					<div class="col-lg-8 border-right">
						<nav class="breadcrumb">
							<a class="breadcrumb-item" href="/careers">Careers</a>
							<a class="breadcrumb-item" href="/careers/positions">Positions</a>
							<a class="breadcrumb-item active"
								href="/careers/positions/{{$position->slug}}">{{$position->title}}</a>
						</nav>
						<div class="section-title center-block mx-auto" style="padding-top:10px; margin-bottom:15px;">
							<h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">{{$position->title}}</h1>
							<div class="section-title-divider wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s"></div>
							<br />
							{{-- @if($position->open)
							<div class="alert alert-success">
								<div class="text-success text-center" style="font-size:18px">CURRENTLY HIRING</div>
							</div>
							@else
							<div class="alert alert-warning">
								<div class="text-warning text-center" style="font-size:18px">CURRENTLY NOT HIRING</div>
								<div class="text-center text-muted" style="font-size:12px;">PLEASE COME BACK LATER</div>
							</div>
							@endif --}}
						</div>
						<div class="section-block">
							{!!$position->body!!}
							@if($position->open)
							<hr />
							<h3>Submit your Application</h3>
							<p style="font-size:15px;">
								Interested applicants should submit their applications by emailing:</p>
							<a href="mailto:careers@cadmicro.com?Subject=[APPLICATION] {{$position->title}}"
								style='font-size:18px;' target="_top">careers@cadmicro.com</a>
							@endif
						</div>
					</div>
					<div class="col-lg-4">
						<div class="social-widget reverse">
							<div class="social-icons">
								<h3>Share:</h3>
								<div class="share-page" style="margin-bottom:20px"></div>
							</div>
						</div>
						<hr />
						<div class="textwidget"><b>CAD MicroSolutions, Inc.</b> <br>
							30 International Blvd., Unit #1 <br>
							Etobicoke, ON - M9W 1A2<br>
							<br>
							<b>Toll-free:</b> 1 (888) 401-5885<br>
							<b>Phone:</b> (416) 213-0533<br>
							<b>Fax:</b> (416) 213-0538<br>
							<br>
							<a href="mailto:sales@cadmicro.com?Subject=[SALES] Subject Here" style='font-size:18px;'
								target="_top">sales@cadmicro.com</a><br>
							<a href="mailto:support@cadmicro.com?Subject=[SUPPORT] Subject Here" style='font-size:18px;'
								target="_top">support@cadmicro.com</a><br>
							<a href="mailto:careers@cadmicro.com?Subject=[APPLICATION] {{$position->title}}"
								style='font-size:18px;' target="_top">careers@cadmicro.com</a><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script>
		$(function(){
			$(".share-page").jsSocials({
				url: "{{Request::url()}}",
				 text: "{{trim(preg_replace('/\s\s+/', ' ',str_replace(['“', '”','’'],"'",$position->excerpt)))}}",
				 showLabel: false,
				shares: ["twitter", "facebook"]
			});
		})
	</script>
	@stop
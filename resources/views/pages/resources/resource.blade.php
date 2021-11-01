@extends('layouts.layout')
@section('title')
{{ $resource->name }} | Resource Library
@stop
@section('meta')
<link rel="canonical" href="{{route('resources.resource',['id'=>$resource->id, 'slug'=>$resource->slug])}}" />
@stop
@section('description'){{ $resource->description }}@stop
@section('body')
<section
	class="d-flex justify-content-center align-items-center parallax-window parallax-section trans-header-window parallax"
	style="min-height:300px; background-image:url({{asset('images/pages/resources/resources_hero.jpg')}});">
	<div class="parallax-section__shadow"></div>
	<div class="container-fluid">
		<div class="content white-content d-flex justify-content-center align-items-center">
			<div>
				<div class="section-title parallax-section__title center-block mx-auto" style="max-width:700px">
					<h1>{{ $resource->resourceCategory->name }}</h1>
					<div class="section-title-divider"></div>
				</div>
				<div>
					<p class="parallax-section__description h4">{{ $resource->name }}</p>
				</div>
				{{-- <div>
					@include('layouts.generic_contact_buttons')
				</div> --}}
			</div>
		</div>
	</div>
</section>
<section id="resource" class="p-0" data-type="{{$resource->resourceType->slug}}"
	data-youtube="{{!empty($resource->video)}}">
	<div class="container">
		<div class="row">
			<div class="resource-sidebar col-lg-4 col-md-5">
				<div class="card-block card shadow">
					<div class="img-thumbnail border embed-responsive embed-responsive-1by1" style="height:200px">
						<div class="embed-responsive-item"
							style="background-image:url({!! thumbnail($resource->thumbnail) !!}); background-size:contain; background-position:center; background-repeat:no-repeat; background-color:#f2f2f2">
							<a href="{{ route('resources.index',['search' => '', 'type'=>$resource->resource_type, 'category'=>'', 'page'=>'']) }}"
								class="badge badge-sm badge-light btn-rounded float-right m-2 shadow-sm py-2 px-3
						d-absolute ">{{$resource->resourceType->name}}</a>
						</div>
					</div>
					<div class="d-flex justify-content-center align-items-start flex-column flex-fill flex-column pt-3">
						@php
						$product=$resource->companyProduct;
						@endphp
						@if($resource->video)
						@if($resource->form && !$resource->download_link)
						<a data-toggle="modal" data-target="#form" href="" id="watchButtonGated" href="#"
							class="btn btn-success btn-rounded w-100"><i class="fas fa-video mr-3"></i>Watch Video</a>
						@else(!$resource->form && !$resource->download_link)
						<a href="" data-toggle="modal" data-target="#videoModal" class="btn btn-success btn-rounded w-100 mb-3"><i
								class="fas fa-video mr-3"></i>Watch Video</a>
						@endif
						@endif
						@if($resource->download_link)
						<a @if($resource->form) data-toggle="modal" data-target="#form" href="" @else
							href="{{ $resource->download_link }}" @endif
							class="btn btn-primary btn-rounded w-100" target="_blank"><i
								class="fas fa-file-alt mr-3"></i>{{ $resource->button ? $resource->button : "View Resource" }}</a>
						@endif
						@if($resource->resource_group_id)
						<span class="mt-3"><span class="small">Product Group:</span><br />
							<a href="{{ route('resources.index',['search' => '', 'type'=>'', 'category'=>'','group'=>$resource->resource_group_id, 'page'=>'']) }}"
								class="d-inline h5">{{ $resource->resourceGroup->name }}</a></span>
						@endif
						@if($resource->company && $resource->company->image != "" && $resource->company->website != "")
						<a class="company-logo" target="_blank" href="{{ $resource->company->website }}">
							<img class="img-thumbnail mt-4" width="auto" style="max-height:120px"
								src="{{ asset("storage/".$resource->company->image)}}" />
						</a>
						@elseif($resource->company && $resource->company->image != "")
						<img class="img-thumbnail mt-4" width="auto" style="max-height:120px"
							src="{{ asset("storage/".$resource->company->image)}}" />
						@endif
						@if($resource->website)
						<span class="small mt-3">Website:</span>
						<a target="_blank" class="w-100 small" href=" {{ $resource->website }}">{{ $resource->website }}</a>
						@endif
						@if($resource->industry)
						<span class="mt-3"><span class="small">Industry:</span><br />
							{{ $resource->industry }}
						</span>
						@endif
						@if($resource->location)
						<span class="mt-3"><span class="small">Location:</span><br />
							<a target="_blank"
								href="https://www.google.com/maps/search/?api=1&query={{ $resource->location }}">{{ $resource->location }}</a>
						</span>
						@endif
						@if($resource->meta_tags)
						<div class="tags my-3">
							<span class="small">Tags:</span><br />
							@foreach($resource->all_meta_tags as $tag)
							<a href="{{ route('resources.index',['search' => '', 'type'=>'', 'category'=>'','group'=>'','tags'=>$tag['id'], 'page'=>'']) }}"
								class="d-inline badge badge-sm badge-secondary btn-rounded">{{ $tag['name'] }}</a>
							@endforeach
						</div>
						@endif

					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-7 resource-content">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('resources.index') }}">Resources</a></li>
						<li class="breadcrumb-item"><a
								href="{{ route('resources.index',['search' => '', 'type'=>'', 'category'=>$resource->category]) }}">{{ $resource->resourceCategory->name }}</a>
						</li>
						<li class="breadcrumb-item active"><a
								href="{{ route('resources.index',['search' => '', 'type'=>$resource->resource_type, 'category'=>$resource->category]) }}">{{ $resource->resourceType->name}}</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page" data-toggle="tooltip" data-placement="top"
							title="{{ $resource->name }}">
							{{ \Illuminate\Support\Str::limit($resource->name, $limit = 40, $end = '...')}}
						</li>
					</ol>
				</nav>
				{!! $resource->content !!}
			</div>
		</div>
	</div>
	<input type="hidden" class="" value="{{trim($resource->name)}}" id="ResourceDescription" name="ResourceDescription" />
	<div id="x" class='d-none'>
		<div class="d-none">
			<label for="ResourceURL">Resource URL</label>
			<input type="text" class="" value="{{route('resources.resource',['id'=>$resource->id, 'slug'=>$resource->slug])}}"
				id="ResourceURL" name="ResourceURL" />
		</div>
	</div>
	{{-- {{ dd($resource) }} --}}
</section>
@endsection

@if($resource->form)
@push('after-scripts')
<div class="modal fade" tabindex=" -1" role="dialog" id="form">
	<div class="modal-dialog  modal-dialog-centered" role="document" style="max-width:700px">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Please fill out the following form to gain instant access to
					the
					requested content</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div id="ResourceForm">
					{!! $resource->form !!}
					<div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endpush
@endif

@push('after-scripts')

@if($resource->video)

@php
$isYoutubeVideo =
preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/",
$resource->video, $videoID);
@endphp

<div class="modal fade" tabindex=" -1" role="dialog" id="videoModal">
	<div class="modal-dialog modal-dialog-centered" role="document" style="max-width:700px">
		<div class="modal-content">
			<div class="modal-header">
				Watch Video
				<button type="button" class="close stop-video" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="embed-responsive embed-responsive-4by3">
					@if($isYoutubeVideo)
					<div id="video-placeholder" class="embed-responsive-item"></div>
					@else
					<video id="videoPlayer" controls class="embed-responsive-item bg-dark" src="{{ $resource->video }}"></video>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://www.youtube.com/iframe_api"></script>

@if($isYoutubeVideo)
<script>
	var player;

	$('#videoModal').on('hide.bs.modal', function (e) {
		player.stopVideo();
	})

	function onYouTubeIframeAPIReady() {
		player = new YT.Player('video-placeholder', {
			videoId: '{{ $videoID[1] }}',
		});
	}
</script>
@else
<script>
	var player = document.getElementById('videoPlayer');

	$('#videoModal').on('show.bs.modal', function (e) {
		player.play();
	})

	$('#videoModal').on('hide.bs.modal', function (e) {
		player.pause();
	})
</script>
@endif

@endif

<script>
	//REDIRECT FORM
	$(function () {
		var url = $('#ResourceURL');
		var description = $('#ResourceDescription');
		var type = $('#resource').data('type');
		var youtube = $('#resource').data('youtube');

		if (description != undefined && url != undefined && typeof MsCrmMkt != undefined) {
			var vdescription = description.val();
			var vurl = url.val();
			var formid = $('#ResourceForm > div[data-form-block-id]').data('form-block-id');

			MsCrmMkt.MsCrmFormLoader.afterformrender = function (formPageId, formEvent) {
				if (formPageId == formid) {
					//add extra fields
					var form = $('[data-form-block-id="' + formPageId + '"] form');
					$(form).append($('#x').html());
					$('#x').remove();

					var label = $(form).find('label:contains("Description")');
					$(form).find('[id="' + label.attr("for") + '"]').val(vdescription);
				}
			};

			MsCrmMkt.MsCrmFormLoader.afterformsubmit = function (formPageId, event) {
				if (formPageId == formid) {
					if(type == "video" && youtube == true){
						$('#watchButtonGated').attr('data-target','#videoModal');
						$('#videoModal').modal('show');
						$('#form').modal('hide');
					}else{
						setTimeout(() => {
							window.location = vurl + "/file";
						}, 200);
					}
				}
			};
		}
	});
</script>
@endpush
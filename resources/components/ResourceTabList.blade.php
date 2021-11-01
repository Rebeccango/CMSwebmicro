@php
$resources = App\Resource::find($resources);
@endphp

@foreach ($resources as $resource)
<div class="col col-lg-3 col-md-4 col-sm-6 col-xs-12">
  <a target="_blank" href="{{$resource->publicURL}}" class="pdf-item text-center mx-auto">
    <figure class="text-center">
      <div class="figimg text-center">
        <img src="{!! thumbnail($resource->thumbnail) !!}" style="width:100%;" alt="{{$resource->name}}">
      </div>
      <figcaption>{{$resource->name}}</figcaption>
    </figure>
  </a>
</div>
@endforeach
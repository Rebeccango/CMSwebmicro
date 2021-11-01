@php
$resources = App\Resource::find($resources);
@endphp

@foreach ($resources as $resource)
<div class="p-3">
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
@extends('layouts.layout')
@section('title'){{$event->title}}@stop
@section('description'){{$event->meta_description}}@stop
@push('meta-tags')
<link rel="canonical" href="{{$event->canonical_link ?? route('calendar-event', ['id'=> $event->id, 'eventid'=>$event->slug])}}" />
<meta name="twitter:card" content="{{$event->excerpt}}" />
<meta name="twitter:site" content="@CAD_Micro" />
<meta name="twitter:creator" content="@CAD_Micro" />
<meta property="og:type" content="event" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:title" content="{{$event->title}}" />
<meta property="og:description" content="{{$event->meta_description}}" />
<meta property="og:image" content="{{asset('storage/public/'.$event->image)}}" />
{{-- <meta itemscope itemtype="https://schema.org/Article" />
  <meta itemprop="headline" content="{{$event->title}}" />
<meta itemprop="description" content="{{$event->meta_description}}" />
<meta itemprop="image" content="{{asset('storage/public/'.$event->image)}}" /> --}}
@endpush
@section('body')
<section>
  <div class="container">
    <div class="event-wrapper row" itemscope itemtype="https://schema.org/Event">
      <div class="col-lg-9">
        <div class="w-100 d-flex align-items-center flex-md-nowrap flex-wrap">
          <div class="text-left flex-grow-1 flex-md-nowrap flex-wrap mb-3 mb-md-0">
            <div class="d-flex">
              <span class="calendar-event-icon d-inline-block align-top" style="flex:none"></span>
              <h1 class="calendar-event-title m-0 ml-3 align-top d-inline align-self-center" itemprop="name">
                {{$event->title}}</span></h1>
            </div>
          </div>
          <div class="align-self-middle">
            <a download href="/exportEvent/{{$event->id}}" style="width:max-content" id="exportEvent"
              class="btn btn-sm btn-rounded px-3 btn-secondary"><i class="far fa-save fa-2x mr-2 align-middle"></i>
              Export Event</a>
          </div>
        </div>
        <div class="card mt-3 rounded-0">
          <div class="card-body p-3">
            <div class="calendar-event-dates h6 m-0">
              <?php
                $starts = (new DateTime($event->start_time))->format("F d, Y \\a\\t H:i");
                $ends = (new DateTime($event->end_time))->format("F d, Y \\a\\t H:i");
              ?>
              <i class="fa fa-calendar" aria-hidden="true"></i> <strong>Starts:</strong> <span>{!!$starts!!}</span>
              <i class="fas fa-long-arrow-alt-right fa-lg" aria-hidden="true" style="margin:0 15px;"></i>
              <i class="fa fa-calendar" aria-hidden="true"></i> <strong>Ends:</strong> <span>{!!$ends!!}</span>
            </div>
          </div>
        </div>
        @if($event->image != "")
        <div class="calendar-event-image-block card border-top-0 w-100 rounded-0">
          <img itemprop="image" src="{{asset('storage/'.$event->image)}}"
            class="card-body calendar-event-image p-0 m-0 w-100" alt="{{ $event->image }}" />
        </div>
        @endif
        <section class="event-section">
          <div class="event-body px-3" itemprop="description">
            {!!$event->content!!}
          </div>
        </section>
        <div class="card pb-0 mb-3 rounded-0 w-100" style="width: 18rem; border-bottom:3px solid #ccc">
          <div class="card-header d-flex justify-content-center px-3 py-4">
            @if($event->clickd_form != "")
            <button class="btn btn-primary calendar-event-btn mx-auto p-3 rounded-0 d-inline-block" style="width:250px"
              data-toggle="modal" data-target="#myModal"> {!! $event->clickd_form_text !!} </button>
            @endif
            @if($event->btn_link != "")
            <a class="btn btn-success calendar-event-btn mx-auto p-3 rounded-0 d-inline-block" style="width:250px"
              href="{{$event->btn_link}}" target="_blank">{!!$event->btn_link_text!!}</a>
            @endif
          </div>
        </div>
        <div class="event-location">
          @if( isset($event->location_id) && $event->location_id != null)
          <?php $location = DB::table('locations')->where('id',$event->location_id)->first()?>
          <div class="event-venue" itemprop="location" itemscope itemtype="https://schema.org/Place">
            <h2 class="main-title" style="margin-top: 0px; padding:15px; visibility: visible; display:inline-block"
              data-wow-delay="0.2s" itemprop="name">{{ $location->title }}</span></h2>
            <table class="icon-table">
              <th>
              <td></td>
              <td></td>
              <td></td>
              <td>
              </td>
              </th>
              <tr class="address">
                <td class="row-icon">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                </td>
                <td colspan="3">
                  <address itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <span itemprop="streetAddress">{{$location->address}}</span><br>
                    <span itemprop="addressLocality">{{$location->city}}</span>,
                    <span itemprop="addressRegion">{{$location->province}}</span>
                    <span itemprop="postalCode">{{$location->postal_code}}</span>
                  </address>
                </td>
              </tr>
              <tr>
                @if($location->phone !="")
                <td class="row-icon">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </td>
                <td>
                  <span itemprop="telephone">{{$location->phone}}</span>
                </td>
                @endif
                @if($location->fax !="")
                <td class="row-icon" style="padding-left: 30px;">
                  <span itemprop="faxNumber"><i class="fa fa-fax" aria-hidden="true"></i></span>
                </td>
                <td>
                  {{$location->fax}}
                </td>
                @endif
              </tr>
              <tr>
                @if($location->website !="")
                <td class="row-icon">
                  <i class="fa fa-link" aria-hidden="true"></i>
                </td>
                <td>
                  <a href="{{$location->website}}" itemprop="url">{{$location->website}}</a>
                </td>
                @endif
                <td class="row-icon" style="@if($location->website !="") padding-left:30px; @endif"><i
                    class="fas fa-envelope" aria-hidden="true"></i></td>
                <td><a href="mailto:info@cadmicro.com">info@cadmicro.com</a></td>
              </tr>
            </table>
          </div>
          <hr />
          @endif
          @if( isset($event->location_custom) && $event->location_custom != null)
          <h3>EVENT LOCATION: </h3>
          <div class="event-venue">
            <div class="address">
              {{$event->location_custom}}
            </div>
          </div>
          <br />
          <iframe width="100%" height="300px" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q={{rawurlencode($event->location_custom)}}, Canada&amp;key={{config('app.gmaps_key')}}"
            allowfullscreen></iframe>
          @elseif(isset($location))
          <h3>EVENT LOCATION: </h3>
          <div class="event-venue">
            <span style="display:none;">{{ $location->title }}</span>
            <div class="address">
              <span>{{ $location->address }}</span>,
              <span>{{ $location->city }}</span>,
              <span>{{ $location->province }}</span>
              <span>{{ $location->postal_code }}</span>
            </div>
          </div>
          <br />
          <iframe width="100%" height="300px" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?q={{rawurlencode($location->address)}}, Canada&amp;key={{config('app.gmaps_key')}}"
            allowfullscreen></iframe>
          @endif
        </div>
      </div>
      <div class="col-lg-3">
        <h3>Share this event:</h3>
        <div class="share-page" style="margin-bottom:20px"></div>
        <div class="card rounded-0 img-shadow">
          @if(isset($event->organizer) && $event->organizer !="")
          @php
          $organizer = \App\User::where('id',$event->organizer)->first();
          @endphp
          @if($organizer)
          <div class="card-block p-3" itemprop="organizer" itemscope itemtype="https://schema.org/Person">
            <h4 class="card-title text-center"><span itemprop="name">{{  $organizer->name }}</span></h4>
            <div
              class="mx-auto img-circle rounded-circle border d-flex justify-content-center align-items-center overflow-hidden"
              style="width:100px; height:100px;">
              <img width="auto" height="auto" style="max-width: 100px; max-height: 100px;"
                src="{{ asset('storage/'.$organizer->avatar) }}" alt="Avatar">
            </div>
            <span class="d-none" itemprop="affiliation">CAD MicroSolutions Inc.</span>
            {{-- <span class="d-none" itemprop="email">{{ asset('storage/'.$organizer->email) }}</span> --}}
          </div>
          @endif
          @endif
          <ul class="list-group list-group-flush">
            @if($event->category_id !="")<li class="list-group-item"><span
                class="blog-category"><strong>Category:</strong>
                {{\App\Categories::where('id', $event->category_id)->value('name')}}</span>@endif

            <li class="list-group-item"><span class="event-date"><strong>Starts: </strong><time itemprop="startDate"
                  content="{{$starts}}" datetime="{{$starts}}" itemprop="datePublished">{{$starts}}</time></span></li>

            @if($event->updated_at !="")<li class="list-group-item"><span class="event-date"><strong>Ends:</strong>
                <time datetime="{{$ends}}" itemprop="endDate" content="{{$starts}}">{{$ends}}</time></span>@endif

              {{-- @if($organizer)<li class="list-group-item"><span class="organizer-email"><strong>Email:</strong> <span>{{ $organizer->email }}</span></span>
            </li>@endif --}}

            @if($event->clickd_form != "")
            <li class="list-group-item p-0"><button
                class="btn btn-primary calendar-event-btn mx-auto p-3 rounded-0 d-inline-block w-100"
                data-toggle="modal" data-target="#myModal"> {!! $event->clickd_form_text !!} </button></li>
            @endif
            @if($event->btn_link != "")
            <li class="list-group-item p-0"><a
                class="btn btn-success calendar-event-btn mx-auto p-3 rounded-0 d-inline-block w-100"
                href="{{$event->btn_link}}" target="_blank">{!!$event->btn_link_text!!}</a></li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@stop

@push('after-scripts')
<script>
$(function(){
  $(".share-page").jsSocials({
    url: "{{Request::url()}}",
    text: "{{$event->excerpt}}",
    showLabel: false,
    shares: ["twitter", "facebook", "linkedin"]
  });

  let searchParams = new URLSearchParams(window.location.search)
  //TEMPLATE: https://register.gotowebinar.com/register/
  //ATTENDEE: https://attendee.gotowebinar.com/register/
  if(searchParams.has('gotowebinarsource')) {
    let source = searchParams.get('gotowebinarsource')
    $('a[href^="https://register.gotowebinar.com/register/"], a[href^="https://attendee.gotowebinar.com/register/"]').each(function() {
      let element = $(this);
      const url = new URL(element.attr('href'));
      url.searchParams.set('source', source);
      element.attr('href', url.href)
    })
  }
})
</script>
@endpush

@push('before-scripts')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">REGISTER NOW</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        {!!$event->clickd_form!!}
      </div>
    </div>
  </div>
</div>
@endpush
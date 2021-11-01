@extends('layouts.layout')
@section('title')Calendar &amp; Events @stop
@section('body')
<section class="px-2 py-5">
	<div class="container">
		<div class="alert alert-warning mb-5 shadow" role="alert">
			<p class="lead d-flex"><i class="fas fa-exclamation-triangle mr-3 pt-2"></i><span>Given the current COVID-19
					situation we are moving our regularly scheduled training and events into an online format.
					New digital sessions will be added to the calendar soon, but please feel free to reach out to us in the
					meantime if there is a particular training session you are looking for.</span>
			</p>
			<button data-toggle="modal" data-target="#contactModal" data-type="contact" data-title="Contact Request Form"
				class="btn btn-sm btn-white btn-rounded btn-dialog mt-0">Contact
				Us</button>
		</div>
		<h1 class="text-center">EVENTS &amp; TRAINING CALENDAR</h1>
		@if(isset($query) && count($search) > 0)
		@foreach($search as $result)
		{{ var_dump($result) }}
		@endforeach
		@elseif(isset($query))
		<h5>There are no events matching your search criteria for: <em><strong>"{{$query}}"</strong></em></span></h5>
		<p>
			The event you are looking for has either been <strong>removed</strong> or <strong>does not exist!</strong><br />
			Please try checking your spelling or try again later.
		</p>
		@endif
		<div class="btn-toolbar mb-4 d-flex justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
			<div class="btn-group mr-2" role="group" aria-label="First group">
				<a download href="" id="exportMonth" type="button"
					class="btn btn-md pull-right fc-button fc-state-default fc-corner-right"
					style="width: 150px; height: 40px; font-size: 13px; line-height: 24px;"><i class="fas fa-file-export"
						aria-hidden="true"></i>&nbsp; Export Month</a>
			</div>

			<div class="input-group">
				<form method='GET' class="d-flex">
					<div class="input-group mr-4">
						{{-- <label for="category_filter" class="ml-3 mr-2" style="line-height:35px">Show: </label> --}}
						<select id="category_filter" name="filter">
							<option value="" default>No Filter</option>
							<option value="8">Event</option>
							<option value="10">Webinar</option>
							<option value="1">Courses</option>
						</select>
					</div>
					<div class="input-group mb-3">
						<input type="text" name="search" id="calendarSearch" class="form-control" placeholder="Search"
							style="line-height: 25px;" aria-label="Input group example" aria-describedby="btnGroupAddon"
							{!!isset($_GET['search']) ? "value='" .$_GET['search']."'" : "" !!}>
						<div class="input-group-append">
							<button type="submit" class="input-group-text"><i class="fas fa-search"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div id='calendar'>
			<div class="loadingEvents"></div>
		</div>
	</div>
</section>
@push('after-scripts')
<script>
	$(document).ready(function () {
		$(document).arrive('.monthly-popover', function () {
			$(this).find('.popover-body').dotdotdot({
				ellipsis: '...',
				wrap: 'word',
				fallbackToLetter: true,
				watch: true,
			});
		});

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			contentHeight: "auto",
			navLinks: true, // can click day/week names to navigate views
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			timezone: "America/Toronto",
			dayRender: function (date, cell) {

			},
			viewRender: function (view, element) {

			},
			eventRender: function (event, element, view) {

				$(element).addClass('popover-trigger').data('data-toggle', 'popover');

				var monthNames = ["January", "February", "March", "April", "May", "June",
					"July", "August", "September", "October", "November", "December"
				];
				var start = new Date(event.start);
				var end = new Date(event.end);

				var eventStart = "<div class='event-time'>" + $.fullCalendar.moment.utc(start).format('LLLL');
				var eventEnd = $.fullCalendar.moment.utc(end).format('LLLL') + " (EST -5)" + "</div>";

				var tittle = "<h3>" + event.title + "</h3>" + eventStart +
					'<i class="fas fa-long-arrow-alt-right mx-2" aria-hidden="true"></i>' + eventEnd;

				var body = "NO DETAILS";
				if (event.excerpt != "") {
					body = event.excerpt;
				}

				$(element).popover({
					content: body,
					html: true,
					trigger: 'hover',
					placement: 'auto',
					container: 'body',
					template: '<div class="popover monthly-popover p-2" role="tooltip"><div class="popover-arrow"></div><div class="popover-title">' +
						tittle + '</div><div class="popover-content px-0 mx-0"><div class="popover-body px-0 mx-0"></div></div><hr class="my-1"/><span class="text-info">Click the event to view full details.</span></div></div>',
				}).on('shown.bs.popover', function () {
					$(document).arrive('.monthly-popover', function () {
						$(this).find('.popover-body').dotdotdot({
							ellipsis: '...',
							wrap: 'word',
							fallbackToLetter: true,
							watch: true,
						});
					});
				});

				var ntoday = new Date().getTime();
				var eventEnd = $.fullCalendar.moment(event.end).valueOf();
				var eventStart = $.fullCalendar.moment(event.start).valueOf();
				if (!event.end) {
					if (eventStart < ntoday) {
						element.addClass("past-event");
						element.children().addClass("past-event");
					}
				} else {
					if (eventEnd < ntoday) {
						element.addClass("past-event");
						element.children().addClass("past-event");
					}
				}
				return true;
				//return ['all', event.category].indexOf($('#category_filter').val()) >= 0
			},
			events: function (start, end, timezone, callback) {
				$filter = $('#category_filter').val();
				$.ajax({
					url: './calendar/events',
					method: 'post',
					dataType: 'json',
					data: {
						_token: $('#csrf_token').val(),
						start: start.format("YYYY-MM-DD HH:mm:ss"),
						end: end.format("YYYY-MM-DD HH:mm:ss"),
						filter: $filter,
						search:{!!isset($_GET['search']) ? "'".$_GET['search']."'" : "''"!!}
					},
					beforeSend: function () {
						$('.loadingEvents').show();
					},
					success: function (response) {
						var events = [];
						$.each(response.events, function (index, value) {
							events.push({
								id: value.id,
								title: value.title,
								start: value.start_time,
								end: value.end_time,
								backgroundColor: "#"+value.color,
								category: value.category_id,
								borderColor: "#"+value.color,
								excerpt: value.excerpt,
								url: "./calendar/event/" + value.id + "/" + value.slug
							});
						});
						if (events.length > 0) {
							$('#exportMonth').removeClass("disabled");
							var month_int = start.format("M");
							var year_int = start.format("Y");
							UpdateExportMonth(month_int, year_int);
						} else {
							$('#exportMonth').addClass("disabled");
						}
						callback(events);
					},
					complete: function () {
						$('.loadingEvents').hide();
					},
					error: function (error) {
						console.log(error.responseJSON.message);
					}
				});
			}
		});

		Date.prototype.addHours = function (h) {
			this.setHours(this.getHours() + h);
			return this;
		}

		function addZero(i) {
			if (i < 10) {
				i = "0" + i;
			}
			return i;
		}

		function getTime(d) {
			var h = addZero(d.getHours());
			var m = addZero(d.getMinutes());
			return h + ":" + m;
		}

		function UpdateExportMonth(month_int, year_int) {
			$('#exportMonth').attr('href', "/exportCalendar/" + year_int + "/" + month_int).attr('download');
			console.log($('#exportMonth').attr('href'));
			$('#exportMonth').removeClass('disabled');
		}

		$("#category_filter").select2({
			width: '150px'
		});

		$('#category_filter').on('change', function (event) {
			event.preventDefault();
			$('#calendar').fullCalendar('refetchEvents');
		});

		$.urlParam = function (name) {
			var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
			if (results == null) {
				return null;
			} else {
				return decodeURI(results[1]) || 0;
			}
		}

		if ($.urlParam('filter')) {
			$('#category_filter').val($.urlParam('filter')).trigger('change');
		}
	});
</script>
@endpush
@stop
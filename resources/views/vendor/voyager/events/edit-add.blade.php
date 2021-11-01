@extends('voyager::master')

@section('css')
<link rel="stylesheet" href="{{asset('css/pick-a-color-1.2.3.min.css')}}">
<link rel="stylesheet" href="{{voyager_asset('js/jquery-palette-color-picker-master/src/palette-color-picker.css')}}">

<style>
    .panel .mce-panel {
        border-left-color: #fff;
        border-right-color: #fff;
    }

    .panel .mce-toolbar,
    .panel .mce-statusbar {
        padding-left: 20px;
    }

    .panel .mce-edit-area,
    .panel .mce-edit-area iframe,
    .panel .mce-edit-area iframe html {
        padding: 0 10px;
        min-height: 350px;
    }

    .mce-content-body {
        color: #555;
        font-size: 14px;
    }

    .panel.is-fullscreen .mce-statusbar {
        position: absolute;
        bottom: 0;
        width: 100%;
        z-index: 200000;
    }

    .panel.is-fullscreen .mce-tinymce {
        height: 100%;
    }

    .panel.is-fullscreen .mce-edit-area,
    .panel.is-fullscreen .mce-edit-area iframe,
    .panel.is-fullscreen .mce-edit-area iframe html {
        height: 100%;
        position: absolute;
        width: 99%;
        overflow-y: scroll;
        overflow-x: hidden;
        min-height: 100%;
    }

    .color-menu {
        z-index: 999999;
    }

    .panel-body {
        overflow: visible !important;
    }

    .palette-color-picker-button {
        width: 38px;
        height: 32px;
        margin-right: 0;
        margin-top: 1px;
    }

    .swatch.clear {
        display: none !important;
    }

    .select2 {
        width: 100% !important;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@stop

@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif
    {{ $dataType->display_name_singular }}
</h1>
@stop

@section('content')
<div class="page-content container-fluid">
    @php
    if(isset($_GET['copy'])){
    $dataTypeContent = DB::table('events')
    ->select('title','author_id','content','slug','start_time','end_time','meta_description','meta_keywords','status','image','category_id','excerpt','location_id','location_custom','organizer','color','clickd_form')
    ->where('id','=',$_GET['copy'])
    ->first();
    }
    @endphp
    <form role="form" data-toggle="validator" action="@if(isset($dataTypeContent->id)){{ route('voyager.events.update', $dataTypeContent->id) }}
        @else{{ route('voyager.events.store') }}@endif" method="POST" enctype="multipart/form-data">
        <!-- PUT Method if we are editing -->
        @if(isset($dataTypeContent->id))
        {{ method_field("PUT") }}
        @endif
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-8">
                <!-- ### TITLE ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Post Event Title
                            <span class="panel-desc"> The title for the event</span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" name="title" placeholder="Title"
                            value="@if(isset($dataTypeContent->title)){{ $dataTypeContent->title }}@endif">
                    </div>
                </div>

                <!-- ### DATE ### -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- ### START ### -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="voyager-calendar"></i> EVENT START DATE
                                    <span class="panel-desc"> The start date for the event</span>
                                </h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                        aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(isset($dataTypeContent->start_time))
                                <h2>{{ $dataTypeContent->start_time }}</h2>
                                @endif
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' id="dp1" name="start_time" required class="form-control"
                                            value="{{ $dataTypeContent->start_time }}" />

                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                {{-- <input type='hidden' id="start_time" name="start_time" required class="form-control"
                                    value="{{ $dataTypeContent->start_time }}" /> --}}

                            </div>
                        </div>
                    </div>
                    <!-- ### END ### -->
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="voyager-calendar"></i> EVENT END DATE
                                    <span class="panel-desc"> The end date for the event</span>
                                </h3>

                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                        aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                {{--
                                <label for="every_month">
                                  <div class="icheckbox ">
                                    <input type="checkbox" name="every_month" >
                                  </div>
                                  <strong>Show Every Month</strong> (Shows this event for every month of the current year)</label>--}}

                                @if(isset($dataTypeContent->end_time))
                                <h2>{{ $dataTypeContent->end_time }}</h2>
                                @endif

                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input type='text' id="dp2" required name="end_time" class="form-control"
                                            value="{{ $dataTypeContent->end_time }}" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                {{-- <input type='hidden' id="end_time" name="end_time" required class="form-control"
                                    value="{{ $dataTypeContent->end_time }}" /> --}}

                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-calendar"></i> Event Location:
                            <span class="panel-desc"> Select the location of an event from your address book
                                <span class="text-info">(If you do not find your location, add it to locations <a
                                        href="/admin/locations/">here</a>)</span></span>
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php $locations = DB::table('locations')->orderBy('id','desc')->get(); ?>
                        <div class="form-group">
                            <label for="name">Select Preset Location: </label>
                            <select id="location" class="form-control js-basic-single" data-live-search="true"
                                name="location_id">
                                <option value="0">No Location Set</option>
                                @foreach($locations as $location)
                                <option value="{{ $location->id }}" @if(isset($dataTypeContent->location_id) &&
                                    $dataTypeContent->location_id ==
                                    $location->id){{ 'selected="selected"' }}@endif>{{ $location->title }} -
                                    {{ $location->address }}</option>
                                @endforeach
                            </select>
                            <script>
                                $(function () {
                                    $("#location").select2({
                                        placeholder: "Select a location"
                                    });
                                })
                            </script>
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="name">Custom Location: </label>
                            <textarea id="location_custom" class="form-control"
                                name="location_custom">@if(isset($dataTypeContent->location_custom)){{ $dataTypeContent->location_custom }}@endif</textarea>
                            <span class="text-info">Type out full address (copy from google)</span>
                        </div>
                    </div>
                </div>

                <!-- ### CONTENT ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-book"></i> Event Content</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <textarea class="richTextBox" name="content"
                        style="border:0px;">@if(isset($dataTypeContent->content)){{ $dataTypeContent->content }}@endif</textarea>
                </div><!-- .panel -->

                <!-- ### EXCERPT ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Excerpt <small>Small description of this post</small></h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <textarea class="form-control"
                            name="excerpt">@if (isset($dataTypeContent->excerpt)){{ $dataTypeContent->excerpt }}@endif</textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- ### DETAILS ### -->
                <div class="panel panel panel-bordered panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Post Details</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="name">URL slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="slug"
                                {{!! isFieldSlugAutoGenerator($dataType, $dataTypeContent, "slug") !!}}
                                value="@if(isset($dataTypeContent->slug)){{ $dataTypeContent->slug }}@endif">
                        </div>
                        <div class="form-group">
                            <label for="name">Post Status</label>
                            <select class="form-control" name="status">
                                <option value="ACTIVE" @if(isset($dataTypeContent->status) && $dataTypeContent->status
                                    == 'ACTIVE'){{ 'selected="selected"' }}@endif>ACTIVE</option>
                                <option value="ENDED" @if(isset($dataTypeContent->status) && $dataTypeContent->status ==
                                    'ENDED'){{ 'selected="selected"' }}@endif>ENDED</option>
                                <option value="HIDDEN" @if(isset($dataTypeContent->status) && $dataTypeContent->status
                                    == 'HIDDEN'){{ 'selected="selected"' }}@endif>HIDDEN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Event Color</label>
                            <div class="input-group" style="display:flex">
                                <div class="color-picker" name="color"></div><input style="width:60px; padding:5px; height:28px; border-left:0" type="text" class="form-control" readonly
                                    name="color" value="{{ $dataTypeContent->color }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Event Category</label>
                            <select id="event_cat" class="form-control js-basic-single" data-live-search="true"
                                name="category_id" required>
                                <option></option>
                                @foreach(DB::table('categories')->where('group','events')->orderBy('id','desc')->get()
                                as $category)
                                <option value="{{ $category->id }}" @if(isset($dataTypeContent->category_id) &&
                                    $dataTypeContent->category_id ==
                                    $category->id){{ 'selected="selected"' }}@endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="author_id" value="1" />
                        <div class="form-group">
                            <label for="name">Event Organizer</label>
                            <select id="organizer" class="form-control js-basic-single" data-live-search="true"
                                name="organizer">
                                <option value="0">None</option>
                                @foreach(DB::table('users')->where("is_author",1)->get() as $user)
                                <option value="{{ $user->id }}" @if(isset($dataTypeContent->organizer) &&
                                    $dataTypeContent->organizer ==
                                    $user->id){{ 'selected="selected"' }}@endif>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="panel panel-bordered panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-search"></i> Buttons</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="clickd_form">ClickDimensions Form Code</label>
                            <div id="clickd_form" data-theme="" data-language="" class="ace_editor min_height_200" name="clickd_form">{{ $dataTypeContent->clickd_form }}</div>
                            <textarea name="clickd_form" id="clickd_form_textarea" class="hidden">{{ $dataTypeContent->clickd_form }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="clickd_form_text">Form Button Text</label>
                            <input type="text" name="clickd_form_text" class="form-control"
                                value="{{isset($dataTypeContent->clickd_form_text) ? $dataTypeContent->clickd_form_text : "REGISTER NOW"}}" />
                        </div>
                        <hr />
                        <div class="form-group">
                            <label for="btn_link">Custom Button Link</label>
                            <textarea class="form-control" placeholder="Custom Button Link"
                                name="btn_link">{{isset($dataTypeContent->btn_link) ? $dataTypeContent->btn_link : "" }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="btn_link_text">Custom Button Text</label>
                            <input class="form-control" type="text" name="btn_link_text"
                                value="{{isset($dataTypeContent->btn_link_text) ? $dataTypeContent->btn_link_text : "REGISTER NOW" }}" />
                        </div>
                    </div>
                </div>

                <!-- ### SEO CONTENT ### -->
                <div class="panel panel-bordered panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-search"></i> SEO Content</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="name">Meta Description</label>
                            <textarea class="form-control"
                                name="meta_description">@if(isset($dataTypeContent->meta_description)){{ $dataTypeContent->meta_description }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Meta Keywords</label>
                            <textarea class="form-control"
                                name="meta_keywords">@if(isset($dataTypeContent->meta_keywords)){{ $dataTypeContent->meta_keywords }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">SEO Title</label>
                            <input type="text" class="form-control" name="seo_title" disabled placeholder="SEO Title"
                                value="@if(isset($dataTypeContent->seo_title)){{ $dataTypeContent->seo_title }}@endif">
                        </div>
                        <div class="form-group">
                            <label for="name">Canonical Link</label>
                            <input type="text" class="form-control" name="canonical_link" placeholder="ex. https://www.cadmicro.com"
                                value="@if(isset($dataTypeContent->canonical_link)){{ $dataTypeContent->canonical_link }}@endif">
                        </div>
                    </div>
                </div>

                <div class="panel panel-bordered panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-image"></i> Cover Image</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(isset($dataTypeContent->image) && isset($dataTypeContent->id))
                        <img src="{{ Voyager::image( $dataTypeContent->image ) }}" style="width:100%" />
                        @endif
                        <input type="file" name="image">
                    </div>
                </div>

                <!-- ### VIDEO ### -->
                {{-- <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> Post Video</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(isset($dataTypeContent->video))
                                <input type="text" value="{{ Voyager::image( $dataTypeContent->video ) }}" />
                @endif
            </div>
        </div> --}}
</div>
</div>

<button type="submit" class="btn btn-primary pull-right">
    @if(isset($dataTypeContent->id)){{ 'Update Post' }}@else Create New Post @endif
</button>

@if(isset($dataTypeContent->id))
<a href="{{url('calendar/event/'.$dataTypeContent->id.'/'.$dataTypeContent->slug)}}" target="_blank"
    style="margin-right:10px;" class="btn btn-sm btn-warning pull-right">
    <i class="voyager-eye"></i> PREVIEW
</a>
@endif
</form>
<iframe id="form_target" name="form_target" style="display:none"></iframe>
<form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
    enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
    {{ csrf_field() }}
    <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
    <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
</form>
</div>
@stop

@section('javascript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.4.1/tinycolor.min.js"></script>
<script src="{{asset('js/pick-a-color.js')}}"></script>
<script src="{{voyager_asset('js/jquery-palette-color-picker-master/src/palette-color-picker.min.js')}}"></script>

<script src="{{ voyager_asset('js/slugify.js') }}"></script>
<script>
    $(function () {
        $("#slug").keyup(function () {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
            $(this).val(Text);
        });
        $('#slug').slugify({
            "slugify": {
                "origin": "title",
                "forceUpdate": true
            }
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
                'format': "YYYY-MM-DD HH:mm:00",
                'defaultDate': '{{ $dataTypeContent->start_time }}',
                'sideBySide': true,
                'timeZone': 'America/Toronto'
            })
            .on("dp.show", function (e) {
                // $('#start_time').val(moment($('#dp1').val()).subtract(5, 'hours').format('YYYY-MM-DD HH:mm:00'));
            })
            .on("dp.change", function (e) {
                // $('#start_time').val(moment($('#dp1').val()).subtract(5, 'hours').format('YYYY-MM-DD HH:mm:00'));
            }).on("dp.update", function (e) {
                // $('#start_time').val(moment($('#dp1').val()).subtract(5, 'hours').format('YYYY-MM-DD HH:mm:00'));
            });
        $('#datetimepicker2').datetimepicker({
                'format': "YYYY-MM-DD HH:mm:00",
                'defaultDate': '{{ $dataTypeContent->end_time }}',
                'sideBySide': true,
                'timeZone': 'America/Toronto'
            })
            .on("dp.change", function (e) {
                // $('#end_time').val(moment($('#dp2').val()).subtract(5, 'hours').format('YYYY-MM-DD HH:mm:00'));
            }).on("dp.show", function (e) {
                // $('#end_time').val(moment($('#dp2').val()).subtract(5, 'hours').format('YYYY-MM-DD HH:mm:00'));
            });
        // $('#end_time').val(moment($('#dp2').val()).subtract(5, 'hours').format('YYYY-MM-DD HH:mm:00'));
    });
</script>
@stop
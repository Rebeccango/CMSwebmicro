@extends('voyager::master')

@section('css')
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
</style>
@stop

@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif
    {{ $dataType->display_name_singular }}
</h1>
@stop

@section('content')
<div class="page-content container-fluid">
    <form role="form" data-toggle="validator" action="@if(isset($dataTypeContent->id)){{ route('voyager.coupons.update', $dataTypeContent->id) }}
        @else{{ route('voyager.coupons.store') }}@endif" method="POST" enctype="multipart/form-data">
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
                            <i class="voyager-character"></i> Coupon Code
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" name="name" placeholder="Coupon Code"
                            value="@if(isset($dataTypeContent->name)){{ $dataTypeContent->name }}@endif">
                    </div>
                </div>

                <!-- ### DATE ### -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- ### START ### -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="voyager-calendar"></i> COUPON START DATE
                                    <span class="panel-desc"> The start date for the coupon (Not Required)</span>
                                </h3>
                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                        aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(isset($dataTypeContent->active_date))
                                <h2>{{ $dataTypeContent->active_date }}</h2>
                                @endif
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' name="active_date" class="form-control" value="" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ### END ### -->
                    <div class="col-lg-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="voyager-calendar"></i> COUPON EXPIRE DATE
                                    <span class="panel-desc"> The expire date for the coupon (Not Required)</span>
                                </h3>

                                <div class="panel-actions">
                                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                        aria-hidden="true"></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <label for="every_month">

                                    @if(isset($dataTypeContent->expire_date))
                                    <h2>{{ $dataTypeContent->expire_date }}</h2>
                                    @endif

                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker2'>
                                            <input type='text' name="expire_date" class="form-control" value="" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> Coupon Title
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" name="title" placeholder="Coupon Title"
                            value="@if(isset($dataTypeContent->title)){{ $dataTypeContent->title }}@endif">
                    </div>
                </div>

                <!-- ### CONTENT ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-book"></i> Coupon Details</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <textarea class="richTextBox" name="details"
                        style="border:0px;">@if(isset($dataTypeContent->details)){{ $dataTypeContent->details }}@endif</textarea>
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
                            <label for="type">Type</label>
                            <select class="form-control" name="type">
                                <option value="VALUE" @if(isset($dataTypeContent->type) && $dataTypeContent->type ==
                                    'VALUE'){{ 'selected="selected"' }}@endif>VALUE</option>
                                <option value="PERCENT" @if(isset($dataTypeContent->type) && $dataTypeContent->type ==
                                    'PERCENT'){{ 'selected="selected"' }}@endif>PERCENT</option>
                                <option value="SHIPPING" @if(isset($dataTypeContent->type) && $dataTypeContent->type ==
                                    'SHIPPING'){{ 'selected="selected"' }}@endif>SHIPPING</option>
                                <option value="ITEM" @if(isset($dataTypeContent->type) && $dataTypeContent->type ==
                                    'ITEM'){{ 'selected="selected"' }}@endif>ITEM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="number" step="any" class="form-control" name="value"
                                placeholder="Value of coupon"
                                value="@if(isset($dataTypeContent->value)){{ $dataTypeContent->value }}@endif">
                        </div>
                        <div class="form-group">
                            <label for="uses">Number of Uses</label>
                            <input type="number" class="form-control" name="uses" readonly
                                value="@if(isset($dataTypeContent->uses)){{ $dataTypeContent->uses }}@else{{0}}@endif">
                            <p class="help-block">Number of times this coupon was used.</p>
                        </div>
                        <div class="form-group">
                            <label for="max_uses">MAX Uses</label>
                            <input type="number" class="form-control" name="max_uses"
                                value="@if(isset($dataTypeContent->max_uses)){{ $dataTypeContent->max_uses }}@else{{0}}@endif">
                            <p class="help-block">Set a maximum number of uses. Set 0 for infinite</p>
                        </div>
                        <div class="form-group">
                            <label for="name">Status</label>
                            <select class="form-control" name="status">
                                <option value="ACTIVE" @if(isset($dataTypeContent->status) && $dataTypeContent->status
                                    == 'ACTIVE'){{ 'selected="selected"' }}@endif>ACTIVE</option>
                                <option value="INACTIVE" @if(isset($dataTypeContent->status) && $dataTypeContent->status
                                    == 'INACTIVE'){{ 'selected="selected"' }}@endif>INACTIVE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Specific Users</label>
                            <select id="user_ids" class="form-control  js-example-basic-multiple"
                                data-live-search="true" multiple="multiple" name="user_ids[]">
                                @php
                                if(isset($dataTypeContent->user_id)){
                                $user_ids = explode(",",$dataTypeContent->user_id);
                                }else{
                                $user_ids=array();
                                }
                                @endphp
                                @foreach(DB::table('users')->orderBy('name','desc')->get() as $users)
                                <option value="{{ $users->id }}" @foreach($user_ids as $user) @if($user==$users->
                                    id){{ 'selected="selected"' }}@endif
                                    @endforeach>{{ $users->name }} ({{ $users->email }})</option>
                                @endforeach
                            </select>
                            <input id="user_id" type="hidden" name="user_id" value="{{$dataTypeContent->user_id}}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Apply To</label>
                            <select id="applies" multiple="multiple" class="form-control js-example-basic-multiple"
                                name="applies[]" multiple="multiple" data-live-search="true">
                                @php
                                if(isset($dataTypeContent->applies_to)){
                                $applies = explode(",",$dataTypeContent->applies_to);
                                }else{
                                $applies=array();
                                }
                                @endphp
                                @foreach(DB::table('categories')->where('group','store')->orderBy('id','desc')->get() as
                                $category)
                                <option value="{{ $category->slug }}" @foreach($applies as $app) @if($app==$category->
                                    slug){{ 'selected="selected"' }}@endif
                                    @endforeach>{{ $category->slug }}</option>
                                @endforeach

                                @foreach(DB::table('products')->orderBy('id','desc')->get() as $category)
                                <option value="{{ $category->slug }}" @foreach($applies as $app) @if($app==$category->
                                    slug){{ 'selected="selected"' }}@endif
                                    @endforeach
                                    >{{ $category->slug }}</option>
                                @endforeach

                            </select>
                            <input id="applies_to" type="hidden" name="applies_to"
                                value="{{$dataTypeContent->applies_to}}" />
                        </div>
                        <div class="form-group">
                            <label for="apply_for">Apply for (Individual Items/Total Price)</label>
                            <select class="form-control" name="apply_for">
                                <option value="TOTAL" @if(isset($dataTypeContent->apply_for) &&
                                    $dataTypeContent->apply_for == 'TOTAL'){{ 'selected="selected"' }}@endif>TOTAL PRICE
                                </option>
                                <option value="INDIVIDUAL" @if(isset($dataTypeContent->apply_for) &&
                                    $dataTypeContent->apply_for ==
                                    'INDIVIDUAL'){{ 'selected="selected"' }}@endif>INDIVIDUAL ITEM</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="max_apply">MAX Apply To (For Individual items)</label>
                            <input type="number" class="form-control" name="max_apply"
                                value="@if(isset($dataTypeContent->max_apply)){{ $dataTypeContent->max_apply }}@else{{0}}@endif">
                            <p class="help-block">Set 0 for infinite</p>
                        </div>

                    </div>
                </div>

                <!-- ### IMAGE ### -->
                <div class="panel panel-bordered panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-image"></i> Post Image</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(isset($dataTypeContent->image))
                        <img src="{{ Voyager::image( $dataTypeContent->image ) }}" style="width:100%" />
                        @endif
                        <input type="file" name="image">
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary pull-right">
            @if(isset($dataTypeContent->id)){{ 'Update Coupon' }}@else<?= '<i class="icon wb-plus-circle"></i> Create New Post'; ?>@endif
        </button>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>

<link rel="stylesheet" href="{{asset('css/pick-a-color-1.2.3.min.css')}}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinycolor/1.4.1/tinycolor.min.js"></script>
<script src="{{asset('js/pick-a-color.js')}}"></script>


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

<script>
    $(function () {
        $("#applies").select2({
            placeholder: "Select a category"
        }).on('change', function (e) {
            var selMulti = $.map($("#applies option:selected"), function (el, i) {
                return $(el).text();
            });
            $("#applies_to").val(selMulti.join(","));
        });
        $("#user_ids").select2({
            placeholder: "Select Users"
        }).on('change', function (e) {
            var selMulti = $.map($("#user_ids option:selected"), function (el, i) {
                return $(el).val();
            });
            $("#user_id").val(selMulti.join(","));
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            'format': "YYYY-MM-DD HH:mm:00",
            @if(isset($dataTypeContent - > active_date))
            'defaultDate': "{{ $dataTypeContent->active_date }}"
            @endif
        });
    });
    $(function () {
        $('#datetimepicker2').datetimepicker({
            'format': "YYYY-MM-DD HH:mm:00",
            @if(isset($dataTypeContent - > expire_date))
            'defaultDate': "{{ $dataTypeContent->expire_date }}"
            @endif
        });
    });
</script>
@stop
@extends('voyager::master')

@if(isset($dataTypeContent->id))
@section('page_title','Edit '.$dataType->display_name_singular)
@else
@section('page_title','Add '.$dataType->display_name_singular)
@endif

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
    <form role="form" data-toggle="validator" novalidate
        action="@if(isset($dataTypeContent->id)){{ route('voyager.users.update', $dataTypeContent->id) }}@else{{ route('voyager.users.store') }}@endif"
        method="POST" enctype="multipart/form-data">
        <!-- PUT Method if we are editing -->
        @if(isset($dataTypeContent->id))
        {{ method_field("PUT") }}
        @endif
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-8">
                <!-- ### TITLE ### -->
                <div class="panel">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="voyager-character"></i> User Details
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="password">Username:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Username"
                                value="@if(isset($dataTypeContent->name)){{ $dataTypeContent->name }}@endif">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password"
                                value="">
                        </div>

                        @if(!isset($dataTypeContent->id))
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email"
                                value="@if(isset($dataTypeContent->email)){{ $dataTypeContent->email }}@endif">
                        </div>
                        @else
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" readonly
                                value="@if(isset($dataTypeContent->email)){{ $dataTypeContent->email }}@endif">
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="role_id">Role:</label>
                            @if(Auth::user()->role_id == 1)
                            <select id="role_id" class="form-control js-basic-single" data-live-search="true"
                                name="role_id">
                                @foreach(DB::table('roles')->get() as $role)
                                <option value="{{ $role->id }}" <?php
                                          if(isset($dataTypeContent->role_id) && $dataTypeContent->role_id == $role->id){
                                            echo 'selected="selected"';
                                          }
                                        ?>>{{ $role->display_name }}</option>
                                @endforeach
                            </select>
                            @else
                                @if(isset($dataTypeContent->id))
                                     <input type="text" class="form-control" disabled value="{{ DB::table('roles')->where('id',$dataTypeContent->role_id)->first()->pluck('display_name') }}">
                                    <input type="hidden" value="2">
                                @else
                                    <input type="text" class="form-control" disabled value="Normal User">
                                    <input type="hidden" name="role_id" value="2">
                                @endif
                            @endif
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="firstname">First Name:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name"
                            value="@if(isset($dataTypeContent->firstname)){{ $dataTypeContent->firstname }}@endif">
                            </div>
                            <div class="form-group">
                            <label for="lastname">Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name"
                            value="@if(isset($dataTypeContent->lastname)){{ $dataTypeContent->lastname }}@endif">
                            </div>
                            <div class="form-group">
                            <label for="address_1">Address Line 1:</label>
                        <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Address 1"
                            value="@if(isset($dataTypeContent->address_1)){{ $dataTypeContent->address_1 }}@endif">
                            </div>
                            <div class="form-group">
                            <label for="address_2"> Address Line 2:</label>
                        <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Address 2"
                            value="@if(isset($dataTypeContent->title)){{ $dataTypeContent->title }}@endif">
                            </div>

                            <div class="form-group">
                            <label for="province">Province:</label>
                        <input type="text" class="form-control" id="province" name="province" placeholder="Province"
                            value="@if(isset($dataTypeContent->province)){{ $dataTypeContent->province }}@endif">
                            </div>
                            <div class="form-group">
                            <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City"
                            value="@if(isset($dataTypeContent->city)){{ $dataTypeContent->city }}@endif">
                            </div>

                            <div class="form-group">
                            <label for="postal">Postal:</label>
                        <input type="text" class="form-control" id="postal" name="postal" placeholder="Postal"
                            value="@if(isset($dataTypeContent->postal)){{ $dataTypeContent->postal }}@endif">
                            </div>
                            <div class="form-group">
                            <label for="country">Country:</label>
                        <input type="text" class="form-control" disabled id="country" name="country" placeholder="Country"
                            value="CANADA">
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- ### IMAGE ### -->
                <div class="panel panel-bordered panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-image"></i> Avatar</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(isset($dataTypeContent->avatar))
                        <img src="{{ Voyager::image( $dataTypeContent->avatar ) }}" style="width:100%; max-width:150px; height:100%; max-height:150px;" />
                        @endif
                        <input type="file" name="avatar">
                    </div>
                </div>

                <div class="panel panel-bordered panel-alert">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-image"></i> Settings</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                           <div class="form-group">
                                <label for="is_author">
                                <input type="checkbox" id="is_author" name="is_author" @if(isset($dataTypeContent->is_author) && $dataTypeContent->is_author == '1'){{ 'checked="checked"' }}@endif> Author</label>
                            </div>
                       </div>
                        <div class="form-group">
                           <div class="form-group">
                                <label for="activated">
                                <input type="checkbox" id="activated" name="activated" @if(isset($dataTypeContent->activated) && $dataTypeContent->activated == '1'){{ 'checked="checked"' }}@endif>
                                Activated</label>
                            </div>
                       </div>
                       <div class="form-group">
                           <label>Login Attempts:</label>
                           <input type="text" class="form-control" disabled value="{{ $dataTypeContent->attempts }}">
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary pull-right">
            @if(isset($dataTypeContent->id)){{ 'Update User' }}@else<?= '<i class="icon wb-plus-circle"></i> Create User'; ?>@endif
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script src="{{asset('/vendor/tcg/voyager/assets/js/datetimepicker.min.js')}}"></script>
<script src="{{ config('voyager.assets_path') }}/lib/js/tinymce/tinymce.min.js"></script>
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

        $.fn.textCount = function () {
            var text_max = $(this).attr('maxlength');
            $(this).after('<div class="text-count-msg"></div>');
            var text_length = $(this).val().length;
            $(this).next('.text-count-msg').html(text_max - text_length + ' remaining');

            $(this).keyup(function () {
                text_length = $(this).val().length;
                var text_remaining = text_max - text_length;
                $(this).next('.text-count-msg').html(text_remaining + ' remaining');
            });
        };

        $('.text-count').textCount();
        $("#author_id").select2({
            placeholder: "Select Organizer"
        });
        $("#category_id").select2({
            placeholder: "Select Category"
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            'format': "YYYY-MM-DD HH:mm:00",
            'sideBySide': true,
            'defaultDate': moment(
                '{{ isset($dataTypeContent->created_at) ? $dataTypeContent->created_at : date('
                Y - m - d H: i: s ') }}'),
            'timeZone': 'America/Toronto'
        }).on('dp.change', function (e) {
            if (e.date._d == undefined) {
                $(this).data("DateTimePicker").date(moment(new Date).format('DD/MM/YYYY HH:mm:ss'));
            }
        })
    });
</script>
@stop
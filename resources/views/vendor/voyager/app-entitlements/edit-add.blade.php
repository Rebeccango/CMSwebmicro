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
            height:100%;
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

    <script type="text/javascript">
    $(function(){
        $("select").select2()
    })
    </script>
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif {{ $dataType->display_name_singular }}
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <form role="form" novalidate action="@if(isset($dataTypeContent->id)){{ route('voyager.app-entitlements.update', $dataTypeContent->id) }}@else{{ route('voyager.app-entitlements.store') }}@endif" method="POST" enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                      </div>
                      <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="name">Addin Name</label>
                            <input type="text" class="form-control" name="customer" placeholder="Customer" value="@if(isset($dataTypeContent->customer)){{ $dataTypeContent->customer }}@endif">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                              <label for="name">Addin Name</label>
                              <input type="text" class="form-control" name="addin_name" placeholder="Addin Name" value="@if(isset($dataTypeContent->addin_name)){{ $dataTypeContent->addin_name }}@endif">
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                              <label for="name">Addin Version</label>
                              <input type="text" class="form-control" name="addin_version" placeholder="Addin Version" value="@if(isset($dataTypeContent->addin_version)){{ $dataTypeContent->addin_version }}@endif">
                            </div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                <label for="name">Entitlement Date</label>
                                <div class='input-group date' id='datetimepicker1'>
                                    <input type='text'  id="dp1" name="entitlement_date" required class="form-control"
                                    value="{{ $dataTypeContent->entitlement_date }}" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                              <div class="form-group">
                                <label for="name">Max Activations</label>
                                <input type="number" class="form-control" name="max_activations" data-name="Max Activations" step="any" placeholder="Max Activations" value="1">
                              </div>
                          </div>
                        </div>
                      </div>

{{--
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-book"></i> Post Content</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                            </div>
                        </div>
                        <textarea class="richTextBox" name="body" required style="border:0px;">@if(isset($dataTypeContent->body)){{ $dataTypeContent->body }}@endif</textarea>
                    </div> --}}

                    <!-- ### EXCERPT ### -->
                    {{-- <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Excerpt <small>Small description of this post</small></h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                          <textarea class="form-control text-count" maxlength="500" required name="excerpt">@if (isset($dataTypeContent->excerpt)){{ $dataTypeContent->excerpt }}@endif</textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                          <script>

                            $.fn.textCount = function() {
                              var text_max = $(this).attr('maxlength');
                              $(this).after('<div class="text-count-msg"></div>');
                              var text_length = $(this).val().length;
                              $(this).next('.text-count-msg').html(text_max - text_length + ' remaining');

                              $(this).keyup(function() {
                                text_length = $(this).val().length;
                                var text_remaining = text_max - text_length;
                                $(this).next('.text-count-msg').html(text_remaining + ' remaining');
                              });
                            };
                            $(function(){
                                $('.text-count').textCount();
                            })
                          </script>
                        </div>
                    </div> --}}
                  </div>

                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right">
                @if(isset($dataTypeContent->id)){{ 'Update Entitlement' }}@else<?= '<i class="icon wb-plus-circle"></i> Create New Entitlment'; ?>@endif
            </button>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            {{ csrf_field() }}
            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
        </form>
    </div>
@stop


@section('javascript')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>

    <script src="{{asset('js/pick-a-color.js')}}"></script>
    <script src="{{ config('voyager.assets_path') }}/lib/js/tinymce/tinymce.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({
                'format' : "YYYY-MM-DD",
                'defaultDate' : '{{ $dataTypeContent->entitlement_date }}',
            });
        });
    </script>
@stop

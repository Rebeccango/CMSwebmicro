@extends('voyager::master')

@if(isset($dataTypeContent->id))
@section('page_title','Edit '.$dataType->display_name_singular)
@else
@section('page_title','Add '.$dataType->display_name_singular)
@endif

@section('css')
<style>
    .ace_ditor {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

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
    <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif {{
    $dataType->display_name_singular }}
</h1>
@stop

@section('content')
<div class="page-content container-fluid">
    <form role="form" data-toggle="validator" novalidate
        action="@if(isset($dataTypeContent->id)){{ route('voyager.landings.update', $dataTypeContent->id) }}@else{{ route('voyager.landings.store') }}@endif"
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
                            <i class="voyager-character"></i> Landing Page Title
                        </h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                            value="@if(isset($dataTypeContent->title)){{ $dataTypeContent->title }}@endif">
                    </div>
                </div>

                <!-- ### CONTENT ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-book"></i> Page Content</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <textarea class="richTextBox" name="body" required
                        style="border:0px;">@if(isset($dataTypeContent->body)){{ $dataTypeContent->body }}@endif</textarea>
                </div>

                <!-- ### EXCERPT ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Excerpt <small>Small description of this page</small></h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <textarea class="form-control text-count" maxlength="500" required
                                name="excerpt">@if (isset($dataTypeContent->excerpt)){{ $dataTypeContent->excerpt }}@endif</textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <!-- ### Style ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Style</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <textarea name="style" data-editor="css" width="100%" class="min_height_200 w-100"
                                style="width:100%">@if (isset($dataTypeContent->style)){!! $dataTypeContent->style !!}@endif</textarea>
                        </div>
                    </div>
                </div>
                <!-- ### Script ### -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Script</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <textarea name="script" data-editor="javascript" width="100%" class="min_height_200 w-100"
                                style="width:100%">@if (isset($dataTypeContent->script)){!! $dataTypeContent->script !!}@endif</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- ### DETAILS ### -->
                <div class="panel panel panel-bordered panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-clipboard"></i> Page Details</h3>
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
                                <option value="PUBLISHED" @if(isset($dataTypeContent->status) &&
                                    $dataTypeContent->status == 'PUBLISHED'){{ 'selected="selected"' }}@endif>Published
                                </option>
                                <option value="DRAFT" @if(isset($dataTypeContent->status) && $dataTypeContent->status
                                    == 'DRAFT'){{ 'selected="selected"' }}@endif>Draft</option>
                                <option value="PENDING" @if(isset($dataTypeContent->status) && $dataTypeContent->status
                                    == 'PENDING'){{ 'selected="selected"' }}@endif>Pending</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Post Category</label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                @foreach(DB::table('categories')->where('group','=','blog')->get() as $category)
                                <option value="{{ $category->id }}" @if(isset($dataTypeContent->category_id) &&
                                    $dataTypeContent->category_id == $category->id){{ 'selected="selected"' }}@endif>{{
                                    $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">
                                <input type="checkbox" id="featured" name="featured"
                                    @if(isset($dataTypeContent->featured)
                                && $dataTypeContent->featured == '1'){{ 'checked="checked"' }}@endif>
                                Featured</label>
                        </div>

                        <div class="form-group">
                            <label for="name">Author</label>
                            <select id="author_id" class="form-control js-basic-single" data-live-search="true"
                                name="author_id" required>
                                @foreach(DB::table('users')->get() as $user)
                                <option value="{{ $user->id }}" <?php if(!isset($dataTypeContent->author_id) &&
                                    Auth::user()->id == $user->id){
                                    echo 'selected="selected"';
                                    }
                                    elseif(isset($dataTypeContent->author_id) && $dataTypeContent->author_id ==
                                    $user->id){
                                    echo 'selected="selected"';
                                    }

                                    ?>>{{ $user->name }}</option>
                                @endforeach
                            </select>

                        </div>

                    </div>
                </div>

                {{--
                <!-- ### IMAGE ### -->
                <div class="panel panel-bordered panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="icon wb-image"></i> Post Image</h3>
                        <div class="panel-actions">
                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(isset($dataTypeContent->image))
                        <img src="{{ Voyager::image( $dataTypeContent->image ) }}" style="width:100%" />
                @endif
                <input type="file" name="image">
            </div>
        </div> --}}

        <!-- ### SEO CONTENT ### -->
        <div class="panel panel-bordered panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="icon wb-search"></i> SEO Content</h3>
                <div class="panel-actions">
                    <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
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
                    <input type="text" class="form-control" name="seo_title" placeholder="SEO Title"
                        value="@if(isset($dataTypeContent->seo_title)){{ $dataTypeContent->seo_title }}@endif">
                </div>
            </div>
        </div>
</div>
</div>

<button type="submit" class="btn btn-primary pull-right">
    @if(isset($dataTypeContent->id)){{ 'Update Page' }}@else
    <?= '<i class="icon wb-plus-circle"></i> Create Page'; ?>@endif
</button>

@if(isset($dataTypeContent->id))
<a href="{{url('landing/'.$dataTypeContent->slug)}}" target="_blank" style="margin-right:10px;"
    class="btn btn-sm btn-warning pull-right">
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
<script src="{{ voyager_asset('js/slugify.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>w
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/mode-javascript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/mode-css.js"></script>
<script>
    $(function () {
        $('textarea[data-editor]').each(function () {
            var textarea = $(this);
            var mode = textarea.data('editor');
            var editDiv = $('<div>', {
                position: 'absolute',
                width: textarea.width(),
                height: textarea.height(),
                'class': textarea.attr('class')
            }).insertBefore(textarea);
            textarea.css('visibility', 'hidden');
            var editor = ace.edit(editDiv[0]);
            editor.renderer.setShowGutter(true);
            editor.getSession().setValue(textarea.val());
            editor.getSession().setMode("ace/mode/" + mode);
            // editor.setTheme("ace/theme/idle_fingers");
            editor.getSession().on('change', function () {
                textarea.closest('form').submit(function () {
                    textarea.val(editor.getSession().getValue());
                    console.log(textarea.val());
                })
            });
            // copy back to textarea on form submit...
            textarea.closest('form').submit(function () {
                textarea.val(editor.getSession().getValue());
                console.log(textarea.val());
            })
        });
    });
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
        $("#author_id").select2({
            placeholder: "Select Organizer"
        });
        $("#category_id").select2({
            placeholder: "Select Organizer"
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
        $(function () {
            $('.text-count').textCount();
        })
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@stop
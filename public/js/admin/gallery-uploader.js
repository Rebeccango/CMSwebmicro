var acceptedFiles = [];

function handleFileSelect(evt) {

    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

        // Only process image files.
        if (!f.type.match('image.*') && !f.type.match('video.*')) {
            continue;
        }

        var reader = new FileReader();

        // Closure to capture the file information.
        reader.onload = (function(theFile) {
            return function(e) {

                $('.gallery-msg').fadeOut(function() {
                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.className = 'thumb new';
                    var ext = theFile.name.substring(theFile.name.lastIndexOf('.') + 1);

                    $.ajax({
                        url: '/admin/gallery/uniquename',
                        type: 'POST',
                        data: {
                            'name': theFile.name,
                            'ext': ext,
                            '_token': $("#csrf_token").val()
                        },
                        success: function(result) {

                            if (theFile.type.match('image.*')) {
                                span.innerHTML = ['<a href="' + e.target.result + '" rel="gallery" class="gallery-img swipebox" title="' + escape(result.name) + '"><div class="img" style="background-image:url(' + e.target.result +
                                    ');" title="' + escape(result.name) + '"></div></a><input type="hidden" class="new-file-name" name="new[]" value="' + escape(result.name) + '" /><input type="hidden" name="old[]" value="' + theFile.name +
                                    '" /><button type="button" class="gallery-del-image" data-toggle="tooltip" data-placement="right" title="Remove"></button>'
                                ].join('');
                            } else {
                                span.innerHTML = ['<a href="' + e.target.result + '" rel="gallery" class="gallery-img swipebox-video" title="' + escape(result.name) + '"><video width="150" height="150" controls>\
                                <source src="' + e.target.result + '" type="video/mp4">\
                                Your browser does not support the video tag.\
                                </video></a><input type="hidden" class="new-file-name" name="new[]" value="' + escape(result.name) + '" /><input type="hidden" name="old[]" value="' + theFile.name + '" /><button type="button" class="gallery-del-image" data-toggle="tooltip" data-placement="right" title="Remove"></button>'
                                ].join('');
                            }

                            document.getElementById('list').insertBefore(span, null);
                            acceptedFiles.push(result.name);
                        },
                        error: function(error){
                            console.log(error);
                        }
                    });

                });
            };
        })(f);

        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
    }
}

document.getElementById('files').addEventListener('change', handleFileSelect, false);



$(function() {
    $("#list").sortable({
        placeholder: 'ui-state-highlight ui-sort-position',
        helper: 'clone',
        sort: function(e, ui) {
            $(ui.placeholder).html('<div class="dashed"><div class="ui-sort-number"></div></div>');

            $(ui.placeholder).css('width', $('.ui-sortable-helper').width());
            $('#list').css('margin-top', -20);
        },
    });
    $("#list").disableSelection();

    $('.btn-embed-file').click(function(){
      bootbox.confirm({
          title: "Add an external image file",
          message: "Please enter the full URL of the external image file you would like to add.\
          <input type='text' id='embed-file-name' class='form-control' required placeholder='Example: http://lorempixel.com/1200/1200/nature/1/'></input>",
          buttons: {
              cancel: {
                  label: '<i class="fa fa-times"></i> Cancel'
              },
              confirm: {
                  label: '<i class="fa fa-check"></i> Add'
              }
          },
          callback: function(result) {
            var filename=$("#embed-file-name").val();

              if (result) {
                $.ajax({
                    url: '/admin/gallery/external-image',
                    type: 'POST',
                    data: {
                        'image': filename,
                        'product_id': $("#product_id").val(),
                        '_token': $("#csrf_token").val()
                    },
                    success: function(result) {
                        if (result) {
                          var span = document.createElement('span');
                          span.className = 'thumb new';

                          var ext = filename.substring(filename.lastIndexOf('.') + 1);

                              span.innerHTML = ['<button type="button" class="gallery-del-image"\ data-toggle="tooltip" data-placement="right" title="Remove"></button>\
                              <a class="gallery-img swipebox external-image" href="'+filename+'"  rel="gallery" title="'+filename+'">\
                              <div class="img" style="background-image:url('+filename+');" title="'+filename+'"></div>\
                              <input type="hidden" name="old[]" value="'+filename+'" />\
                              <input type="hidden" class="new-file-name" name="new[]" value="'+filename+'" />'
                              ].join('');

                          document.getElementById('list').insertBefore(span, null);
                          acceptedFiles.push(filename);
                        }
                    }
                });
              }
          }
      });
    });

    $('.btn-embed-video').click(function(){
      bootbox.confirm({
          title: "Add an external video file",
          message: "Please enter the embed URL of the external video file you would like to add.\
          <input type='text' id='embed-file-name' class='form-control' required placeholder='Example: https://www.youtube.com/embed/S_fLe0GQ5PM'></input>",
          buttons: {
              cancel: {
                  label: '<i class="fa fa-times"></i> Cancel'
              },
              confirm: {
                  label: '<i class="fa fa-check"></i> Add'
              }
          },
          callback: function(result) {
            var filename=$("#embed-file-name").val();

              if (result) {
                $.ajax({
                    url: '/admin/gallery/external-image',
                    type: 'POST',
                    data: {
                        'image': filename,
                        'product_id': $("#product_id").val(),
                        '_token': $("#csrf_token").val()
                    },
                    success: function(result) {
                        if (result) {
                          var span = document.createElement('span');
                          span.className = 'thumb new';

                          var ext = filename.substring(filename.lastIndexOf('.') + 1);

                              span.innerHTML = ['<button type="button" class="gallery-del-image"\ data-toggle="tooltip" data-placement="right" title="Remove"></button>\
                              <a class="gallery-img swipebox external-vide" href="'+filename+'"  rel="gallery" title="'+filename+'">\
                              <iframe width="150" height="150" src="'+filename+'" frameborder="0" allowfullscreen></iframe>\
                              <input type="hidden" name="old[]" value="'+filename+'" />\
                              <input type="hidden" class="new-file-name" name="new[]" value="'+filename+'" />'
                              ].join('');

                          document.getElementById('list').insertBefore(span, null);
                          acceptedFiles.push(filename);
                        }
                    }
                });
              }
          }
      });
    });
});

$('#gallery_uploader').submit(function(e) {
    $('#gallery_uploader .loading').fadeIn();
    var acceptedfiles = "";
    $.each(acceptedFiles, function(key, value) {
        if (acceptedfiles != "") acceptedfiles += ",";
        acceptedfiles += value;
    });
    $('#accepted_files').val(acceptedFiles);
    $.ajax({
        url: '/admin/gallery/multiple',
        type: 'POST',
        async: false,
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: 'json',
        name: 'multipleFiles',
        beforeSend: function() {
            $('#gallery_uploader .loading').fadeIn();
        },
        success: function(result) {
            $('.gallery-errors').fadeOut("slow");
            $('#gallery_uploader .loading').fadeOut("slow", function() {
                $('.gallery-errors').fadeOut("slow", function() {
                    $(this).html('');
                    if (result.success == "true") {
                        $('.gallery-errors').append('<div class="alert alert-success" role="alert"><strong>Success!</strong> Gallery has been saved.</div>').fadeIn('slow');
                        $('#gallery_uploader .thumb.new').removeClass('new');
                        acceptedFiles = [];
                        $('#accepted_files').val('');
                    } else {
                        $('.gallery-errors').append('<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> ' + result.msg + '</div>').fadeIn('slow');
                    }

                    setTimeout(function(){
                             window.location.reload();
                    }, 500);
                });
            });
        },
        error: function(error) {
            $('.gallery-errors').fadeOut("slow");
            $('#gallery_uploader .loading').fadeOut("slow", function() {
                $('.gallery-errors').fadeOut("slow", function() {
                    $(this).html('');
                    $('.gallery-errors').append('<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> There was a problem uploading the image(s)!</div>').fadeIn('slow');
                });
            });
        }
    });
    e.preventDefault();
});

$(function() {
    var delOpen = false;
    $(document).arrive('.gallery-del-image', function() {
        $('.gallery-del-image').click(function() {
            if (!delOpen) {
                delOpen = true;
                var thumb = $(this).parents('.thumb');
                bootbox.confirm({
                    title: "Delete this file?",
                    message: "Are you sure you want to delete this file? This cannot be undone.",
                    buttons: {
                        cancel: {
                            label: '<i class="fa fa-times"></i> Cancel'
                        },
                        confirm: {
                            label: '<i class="fa fa-check"></i> Confirm'
                        }
                    },
                    callback: function(result) {
                        if (result) {
                            if (!thumb.hasClass('new')) {
                              var external = thumb.find('.external-video, .external-image').length > 0;

                                $.ajax({
                                    url: '/admin/gallery/delete',
                                    type: 'POST',
                                    data: {
																				'external': external,
                                        'image': thumb.find('.new-file-name').val(),
                                        'product_id': $("#product_id").val(),
                                        '_token': $("#csrf_token").val()
                                    },
                                    success: function(result) {
                                        if (result.success == "true") {
                                            thumb.fadeOut('fast', function() {
                                                $(this).remove();
                                            });

                                            $('.gallery-errors').append('<div class="alert alert-success" role="alert"><strong>Success!</strong>'+result.msg+'</div>').fadeIn('slow');
                                        } else {
                                            thumb.addClass("error");
                                            $('.gallery-errors').append('<div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> ' + result.msg + '</div>').fadeIn('slow');
                                        }
                                    }
                                });
                            } else {
                                // $("#gallery_uploader").trigger("reset");
                                var removeFile = thumb.find('.new-file-name').val();

                                thumb.fadeOut('fast', function() {
                                    //$(this).remove();
                                })
                                acceptedFiles = jQuery.grep(acceptedFiles, function(value) {
                                    return value != removeFile;
                                });
                            }
                        }
                        delOpen = false;
                    }
                });
            }
        });
    });


    $('.gallery-del-image').click(function() {
        if (!delOpen) {
            delOpen = true;
            var thumb = $(this).parents('.thumb');
            bootbox.confirm({
                title: "Delete this file?",
                message: "Are you sure you want to delete this file? This cannot be undone.",
                buttons: {
                    cancel: {
                        label: '<i class="fa fa-times"></i> Cancel'
                    },
                    confirm: {
                        label: '<i class="fa fa-check"></i> Confirm'
                    }
                },
                callback: function(result) {
                    if (result) {
                        if (!thumb.hasClass('new')) {
                          var external = thumb.find('.external-video, .external-image').length > 0;
                          console.log(external);
                            $.ajax({
                                url: '/admin/gallery/delete',
                                type: 'POST',
                                data: {
																	  'external': external,
                                    'image': thumb.find('.new-file-name').val(),
                                    'product_id': $("#product_id").val(),
                                    '_token': $("#csrf_token").val()
                                },
                                success: function(result) {
                                    if (result) {
                                        thumb.fadeOut('fast', function() {
                                            $(this).remove();
                                        })
                                    } else {
                                        thumb.addClass("error");
                                    }
                                }
                            });
                        } else {
                            thumb.fadeOut('fast', function() {
                                $(this).remove();
                            })
                        }
                    }
                    delOpen = false;
                }
            });
        }
    });
});


$(function() {
    $('#gallery_uploader .swipebox').simpleLightbox();
})

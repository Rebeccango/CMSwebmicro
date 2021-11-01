var numeral = require('numeral');


$(function () {

  $.fn.serializeJSON = function () {
    var json = {};
    jQuery.map($(this).serializeArray(), function (n, _) {
      json[n['name']] = n['value'];
    });
    return json;
  };

  var checkout_step = $('#checkout_steps').data('checkout-step');

  $('#checkout-steps .nav-link').click(function () {
    $('#checkout-steps .nav-link').not('[href="' + $(this).attr('href') + '"]').parents('.nav-item').removeClass('active');
    $(this).parents('.nav-item').addClass('active');
    $('.tab-pane').not('[id="' + $(this).attr('href') + '"]').removeClass('active show');
    $($(this)).tab('show');
    $(this).parents('.nav-item').unbind('onmouseover').unbind('onmouseout');
  });

  var formValidation = [{
      framework: 'bootstrap4',
      icon: {
        valid: 'fas fa-check',
        invalid: 'fas fa-exclamation-triangle',
        validating: 'fas fa-spinner'
      },
      fields: {
        ship_firstname: {
          validators: {
            regexp: {
              regexp: /^[A-Za-z ]+$/,
              message: 'Your first name can only consist of alphabetical characters and spaces'
            },
            notEmpty: {
              message: 'Your first name is required'
            }
          }
        },
        ship_lastname: {
          validators: {
            regexp: {
              regexp: /^[A-Za-z ]+$/,
              message: 'Your last name can only consist of alphabetical characters and spaces'
            },
            notEmpty: {
              message: 'Your last name is required'
            }
          }
        },
        ship_address_1: {
          validators: {
            notEmpty: {
              message: 'Your shipping address is required'
            }
          }
        },
        ship_province: {
          icon: false,
          validators: {
            notEmpty: {
              message: 'Your province is required'
            }
          }
        },
        ship_postal: {
          validators: {
            regexp: {
              regexp: /^[ABCEGHJKLMNPRSTVXYabceghjklmnprstvxy]{1}\d{1}[aA-zZ]{1} *\d{1}[aA-zZ]{1}\d{1}$/,
              message: 'The postal code must be a valid 6 character code'
            },
            notEmpty: {
              message: 'Your billing postal code is required'
            }
          }
        },
        ship_city: {
          icon: false,
          validators: {
            notEmpty: {
              message: 'Your city is required'
            }
          }
        },
        ship_country: {
          validators: {
            notEmpty: {
              message: 'Your country is required'
            }
          }
        },
        ship_org: {
          validators: {
            notEmpty: {
              message: 'Your company/organization is required'
            }
          }
        },
        ship_tel: {
          validators: {
            phone: {
              country: 'US',
              message: '%s is not a valid phone number'
            },
            notEmpty: {
              message: 'Your phone number is required'
            }
          }
        }
      }
    },
    {
      framework: 'bootstrap4',
      icon: {
        valid: 'fas fa-check',
        invalid: 'fas fa-exclamation-triangle',
        validating: 'fas fa-spinner'
      },
      fields: {
        bill_firstname: {
          validators: {
            regexp: {
              regexp: /^[A-Za-z ]+$/,
              message: 'Your first name can only consist of alphabetical characters and spaces'
            },
            notEmpty: {
              message: 'Your first name is required'
            }
          }
        },
        bill_lastname: {
          validators: {
            regexp: {
              regexp: /^[A-Za-z ]+$/,
              message: 'Your last name can only consist of alphabetical characters and spaces'
            },
            notEmpty: {
              message: 'Your last name is required'
            }
          }
        },
        bill_address_1: {
          validators: {
            notEmpty: {
              message: 'Your billing address is required'
            }
          }
        },
        bill_province: {
          icon: false,
          validators: {
            notEmpty: {
              message: 'Your province is required'
            }
          }
        },
        bill_postal: {
          validators: {
            regexp: {
              regexp: /^[ABCEGHJKLMNPRSTVXYabceghjklmnprstvxy]{1}\d{1}[aA-zZ]{1} *\d{1}[aA-zZ]{1}\d{1}$/,
              message: 'The postal code must be a valid 6 character code'
            },
            notEmpty: {
              message: 'Your billing postal code is required'
            }
          }
        },
        bill_city: {
          icon: false,
          validators: {
            notEmpty: {
              message: 'Your city is required'
            }
          }
        },
        bill_country: {
          validators: {
            notEmpty: {
              message: 'Your country is required'
            }
          }
        },
        bill_org: {
          validators: {
            notEmpty: {
              message: 'Your company/organization is required'
            }
          }
        },
        bill_tel: {
          validators: {
            phone: {
              country: 'US',
              message: '%s is not a valid phone number'
            },
            notEmpty: {
              message: 'Your phone number is required'
            }
          }
        },
        credit_type: {
          icon: false,
          validators: {
            notEmpty: {
              message: 'The credit card type is required'
            }
          }
        },
        cc_name: {
          regexp: {
            regexp: /^[A-Za-z ]$/,
            message: 'The name can only consist of alphabetical characters and spaces'
          },
          validators: {
            notEmpty: {
              message: 'The name on your credit card is required'
            }
          }
        },
        cc_num: {
          // regexp: {
          //   regexp: /^(?:4[0-9]{12}(?:[0-9]{3})?|(?:5[1-5][0-9]{2}|222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720)[0-9]{12}|3[47][0-9]{13})$/,
          //   message: 'Credit card number must be 16 digits long'
          // },
          icon: false,
          validators: {
            notEmpty: {
              message: 'The credit card number is required'
            }
          }
        },
        cc_ccv: {
          icon: false,
          validators: {
            regexp: {
              regexp: /^[0-9,•]{3,3}$/,
              message: 'Must be 3 characters long and contain only numbers'
            },
            notEmpty: {
              message: 'The 3 digit CVC number on the back of your card is required'
            }
          }
        },
        cc_expire_1: {
          icon: false,
          validators: {
            notEmpty: {
              message: 'The month of expiry is required'
            }
          }
        },
        cc_expire_2: {
          icon: false,
          validators: {
            notEmpty: {
              message: 'The year of expiry is required'
            }
          }
        }
      }
    },
    {
      framework: 'bootstrap4',
      icon: {
        valid: 'fas fa-check',
        invalid: 'fas fa-exclamation-triangle',
        validating: 'fas fa-spinner'
      },
      fields: {
        agree_terms: {
          icon: false,
          validators: {
            notEmpty: {
              message: 'You must agree to the terms!'
            }
          }
        },
        email: {
          validators: {
            emailAddress: {
              message: 'The value is not a valid email address'
            },
            notEmpty: {
              message: 'You must provide an email!'
            }
          }
        },
      }
    }
  ];

  var checkoutStep = $('#checkout_steps').data('checkout-step');

  $(window).bind('beforeunload', function (e) {
    var form_state = $('#shipping form').serialize();
    if (shipping_form_state != form_state) {
      var message = "You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?";
      e.returnValue = message; // Cross-browser compatibility (src: MDN)
      return message;
    }
  });

  var shipping_form_state = $('#shipping form').serialize();
  var shipping_form_status = false;

  var shipping_form = $('#shipping form')
    .formValidation(formValidation[0])
    .on('prevalidate.form.fv', function (e, data) {
      shipping_form_status = false;
      PayButton();
    })
    .on('success.form.fv', function (e, data) {
      e.preventDefault();

      var $form = $(e.target), // Form instance
        // Get the clicked button
        $button = $form.find('.btn-next'),
        // You might need to update the "status" field before submitting the form
        $statusField = $form.find('[name="status"]'),

        $errors = $form.find(".errors");

      var checkout_step_tab = $('.checkout-step a[href="#' + $form.parent().attr('id') + '"]').parents('.checkout-step');

      checkout_step_tab.find('.loading').fadeIn(function () {
        $(this).addClass('in');
      })

      if (btnNextPressed) {
        btnNextPressed = false;
        $('#shipping form .btn-next').css({
          'cursor': 'pointer'
        }).click();
      }

      shipping_form_state = $('#shipping form').serialize();
      $.ajax({
        url: '/store/checkout/shipping',
        type: 'POST',
        data: shipping_form_state,
        dataType: 'json',
        success: function (response) {
          //console.log("Response" + response);
          $errors.html('');
          if (response.error != null) { // Problem!
            showFormErrors($form, response.error);
            shipping_form_status = false;
          } else {
            shipping_form_status = true;
            if (response.address != null) {
              checkout_step_tab.find('.checkout-step-content').html(response.address);
            } else {
              checkout_step_tab.find('.checkout-step-content')
                .html('<p> Enter your shipping details.</p>');
            }

            $form.parent().addClass("completed");
            //$form.data('formValidation').disableSubmitButtons(true);
            checkout_step_tab.removeClass('error').addClass("completed");

            $form.find('[type="submit"]').prop("disabled", false).removeAttr('disabled').removeClass("disabled");
          }
          setTimeout(function () {
            checkout_step_tab.find('.loading').fadeOut(function () {
              $(this).removeClass('in');
            })
          }, 400);
        },
        complete: function (data) {
          PayButton();
        },
        error: function (result) {
          shipping_form_status = false;
          console.log(result.responseText);
        }
      });
    }).on("err.field.fv", function (e, data) {
      shipping_form_status = false;
      onErrorField(e, data);
    }).on('success.field.fv', function (e, data) {
      onSuccessField(e, data);
    }).on("err.form.fv", function (e, data) {
      shipping_form_status = false;
      PayButton();
    });

  // $('#checkout-content button[type="submit"]').on('click',function(){
  //   console.log('clicked');
  //   if(!$(this).hasClass('disabled')){
  //     console.log("!disabled and click");
  //     // setTimeout(function(){
  //     //   if($(this).is(':visible')){
  //     //     console.log("visible and click");
  //     //     $(this).click();
  //     //   }
  //     // }, 50);
  //     console.log("visible and click");
  //     $(this).click();
  //   }
  // });


  var billing_form_status = false;
  var billing_form_state = $('#billing form').serialize();
  var billing_form = $('#billing form')
    .formValidation(formValidation[1])
    .on('prevalidate.form.fv', function (e, data) {
      billing_form_status = false;
      PayButton();
    })
    .on('success.form.fv', function (e, data) {
      e.preventDefault();
      if (!$('#billing').hasClass('locked')) {
        var $form = $(e.target), // Form instance
          // Get the clicked button
          $button = $form.find('.btn-next'),
          // You might need to update the "status" field before submitting the form
          $statusField = $form.find('[name="status"]'),
          $errors = $form.find('.errors');

        billing_form_state = $('#billing form').serialize();

        var checkout_step_tab = $('.checkout-step a[href="#' + $form.parent().attr('id') + '"]')
          .parents('.checkout-step');

        checkout_step_tab.find('.loading').fadeIn(function () {
          $(this).addClass('in');
        });

        if (btnNextPressed) {
          btnNextPressed = false;
          $('#billing form .btn-next').css({
            'cursor': 'pointer'
          }).click();
        }

        $.ajax({
          url: '/store/checkout/billing',
          type: 'POST',
          data: billing_form_state,
          dataType: 'json',
          success: function (response) {
            //console.log("Response" + response);
            $errors.html('');
            // console.log('errors: ' + response.error);
            // console.log('errors: ' + JSON.stringify(response.error));
            // console.log('type: ' + $.type(response.error));
            // console.log('success:' + ((response.error.length > 0 && response.error != null) || typeof response.error == "object" && response.error != ''))
            if ((response.error.length > 0 && response.error != null) || $.type(response.error) === "object" && response.error != '') { // Problem!
              showFormErrors($form, response.error);
              billing_form_status = false;
              $form.formValidation('revalidateField', 'credit_type');
              $form.formValidation('revalidateField', 'cc_ccv');
              $form.formValidation('revalidateField', 'cc_num');
              $form.formValidation('revalidateField', 'cc_name');
              paymentDetailsLock(false);
            } else {
              $('.errors:visible').hide();
              billing_form_status = true;
              if (response.address != null) {
                checkout_step_tab.find('.checkout-step-content').html(response.address);
              } else {
                checkout_step_tab.find('.checkout-step-content')
                  .html('<p> Enter your billing details.</p>');
              }
              $form.parent().addClass("completed");
              $form.data('formValidation').disableSubmitButtons(true);
              checkout_step_tab.removeClass('error').addClass("completed");
              $form.find('[type="submit"]').prop("disabled", false).removeAttr('disabled').removeClass("disabled");
              // console.log("carset " + response.card);
              if (response.card != "") {
                paymentDetailsLock(true);
              } else {
                paymentDetailsLock(false);
              }
            }

            setTimeout(function () {
              checkout_step_tab.find('.loading').fadeOut(function () {
                $(this).removeClass('in');
              });
            }, 400);
          },
          complete: function (data) {
            PayButton();
          },
          error: function (result) {
            console.log(result.responseText);
            billing_form_status = false;
          }
        });
      }
    })
    .on("err.field.fv", function (e, data) {
      billing_form_status = false;
      onErrorField(e, data);
    }).on('success.field.fv', function (e, data) {
      onSuccessField(e, data);
    }).on("err.form.fv", function (e, data) {
      billing_form_status = false;
      PayButton();
    });

  var complete_form_status = false;
  var complete_form = $('#complete form')
    .formValidation(formValidation[2])
    .on('prevalidate.form.fv', function (e, data) {
      complete_form_status = false;
      PayButton();
    })
    .on('success.form.fv', function (e, data) {
      e.preventDefault();
      $(this).prev('.loading').fadeOut();
      if (!$('#complete').hasClass('locked')) {
        var $form = $(e.target), // Form instance
          // Get the clicked button
          $button = $form.find('.btn-next'),
          // You might need to update the "status" field before submitting the form
          $statusField = $form.find('[name="status"]'),
          $errors = $form.find('.errors');

        var checkout_step_tab = $('.checkout-step a[href="#' + $form.parent().attr('id') + '"]')
          .parents('.checkout-step');

        complete_form_status = true;
        PayButton();
      }
    }).on("err.form.fv", function (e, data) {
      complete_form_status = false;
      PayButton();
      $(this).prev('.loading').fadeIn();
    })
    .on("err.field.fv", function (e, data) {
      complete_form_status = false;
      $(this).prev('.loading').fadeIn();
      onErrorField(e, data);
    }).on('success.field.fv', function (e, data) {
      onSuccessField(e, data);
    });

  function showFormErrors(form, errors) {
    $errors = form.find('.errors');
    if ($.type(errors) === "string") {
      errors = JSON.parse(JSON.stringify(errors));
    }
    if (Object.keys(errors).length > 0) {
      $errors.show();
    } else {
      $errors.hide();
    }
    $.each(errors, function (key, value) {
      // console.log("Key: " + key + " Value: " + value);
      form.formValidation('revalidateField', key);
      if ($errors.find('li[data-field=' + key + ']').length == 0 || $errors.find('li[data-field=' + key + '] a').html() != value) {
        $('<li/>')
          .attr('data-field', key)
          .wrapInner(
            $('<a/>')
            .attr('href', 'javascript: void(0);')
            .html(value)
            .on('click', function (e) {
              // Focus on the invalid field
              if ($('#' + key).length > 0) {
                $('[id=' + key + ']').focus();
                $('html, body').animate({
                  scrollTop: $('[id=' + key + ']').offset().top - 140
                }, 500);
              }
            })
          )
          .hide().appendTo($errors).fadeIn(500);
      } else {
        $('<li/>')
          .wrapInner(
            $('<a/>')
            .attr('href', 'javascript: void(0);')
            .html(value)
            .on('click', function (e) {
              // Focus on the invalid field
              if ($('#' + key).length > 0) {
                $('[id=' + key + ']').focus();
                $('html, body').animate({
                  scrollTop: $('[id=' + key + ']').offset().top - 140
                }, 500);
              }
            })
          )
          .hide().appendTo($errors).fadeIn(500);
      }
    });
    //form.find('.errors').html('');

    $('.checkout-step a[href="#' + $(form).parents('.form').attr('id') + '"]').parents('.checkout-step').removeClass('completed').addClass("error");
    form.find('[type="submit"]').prop("disabled", true).attr("disabled", "disabled").addClass("disabled");
  }

  bindPayButton();

  function bindPayButton() {
    $('#pay').bind('click', function () {
      var button = $(this);
      $('#pay').parents('form').formValidation('validate');

      if ($("#complete form").data('formValidation').isValid()) {
        $('.form-loading').addClass('in');
        $(this).prev('.loading').fadeIn();
        $.ajax({
          url: '/store/checkout/pay',
          type: 'POST',
          data: $('#complete form').serialize(),
          dataType: 'json',
          success: function (response) {
            $('.form-loading').removeClass('in');
            //console.log(response);
            if (response.success) {
              window.location.href = response.redirect;
            } else if (response.errors) {
              $.each(response.errors, function ($i, $v) {
                $.notify({
                  // options
                  message: $v
                }, {
                  // settings
                  type: 'danger',
                  placement: {
                    from: "bottom",
                    align: "right"
                  },
                  newest_on_top: true,
                });
              })
            }
          },
          error: function (result) {
            //window.location.href='http://www.google.com';
            console.log(result.responseText);
          }
        });
      } else {
        $(this).prev('.loading').fadeOut();
      }
    })
  }

  function paymentDetailsLock(active) {
    $('#cc_name').prop('readonly', active);
    $('#cc_num').prop('readonly', active);
    $('#cc_ccv').prop('readonly', active);

    $('#credit_type').prop("disabled", active);
    $('#cc_expire_1').prop("disabled", active);
    $('#cc_expire_2').prop("disabled", active);

    if (active) {
      $('#change-card').parent().show();
    } else {
      $('#change-card').parent().hide();
    }

    $('#billing form').formValidation('enableFieldValidators', 'credit_type', !active);
    $('#billing form').formValidation('enableFieldValidators', 'cc_name', !active);
    $('#billing form').formValidation('enableFieldValidators', 'cc_num', !active);
    $('#billing form').formValidation('enableFieldValidators', 'cc_ccv', !active);
    $('#billing form').formValidation('enableFieldValidators', 'cc_expire_1', !active);
    $('#billing form').formValidation('enableFieldValidators', 'cc_expire_2', !active);
    // $('#cc_num, #cc_name, #credit_type, #cc_ccv, #cc_expire_1, #cc_expire_2').prop('readonly',active);
  }

  $('#change-card').click(function () {
    var button = $(this).parent();

    $.ajax({
      url: '/store/checkout/resetCard',
      type: 'POST',
      dataType: 'json',
      data: {
        '_token': $("#csrf_token").val()
      },
      success: function (response) {
        if (response.success) {
          $('#credit_type').val('Visa').trigger("change");
          $('#cc_expire_1').val(null).trigger("change");
          $('#cc_expire_2').val(null).trigger("change");
          $('#cc_name').val('');
          $('#cc_num').val('');
          $('#cc_ccv').val('');
          button.hide();
          paymentDetailsLock(false);
        }
      },
      error: function (result) {
        $('body').html(result.responseText);
      }
    });
  })

  function onSuccessField(e, data) {
    // Remove the field messages
    $(e.target).parents('form').find('.errors').find('li[data-field="' + data.field + '"]').fadeOut(500, function () {
      $(this).remove();
      if ($(e.target).parents('form').find('.errors li').length == 0) {
        $('.checkout-step a[href="#' + $(e.target).parents('.form').attr('id') + '"]').parents('.checkout-step').removeClass("error");
        $(e.target).parents('form').find('.errors').hide();
      } else {
        $(e.target).parents('form').find('.errors').show();
      }
    });

    var messages = data.fv.getMessages(data.element);
    if ($(e.target).parents('.form').attr('id') == "complete") {
      if (messages.length == 0) {
        complete_form_status = true;
      } else {
        complete_form_status = false;
      }
    }
    PayButton();
  }

  function onErrorField(e, data) {
    var $form = $(e.target).parents('form'),
      $button = $form.find('button[type="submit"].btn-next'),
      $errors = $form.find('.errors');

    PayButton();

    //  $form.find('[type="submit"]').prop("disabled", true).attr('disabled','disabled').addClass("disabled");

    data.element
      .data('fv.messages')
      .find('.fv-control-feedback, .form-control-feedback').hide();

    $('.checkout-step a[href="#' + $(e.target).parents('.form').attr('id') + '"]').parents('.checkout-step').removeClass('completed').addClass("error");

    //news
    // data.fv      --> The FormValidation instance
    // data.field   --> The field name
    // data.element --> The field element

    // Get the messages of field
    var messages = data.fv.getMessages(data.element);

    // Remove the field messages if they're already available
    //$errors.find('li[data-field="' + data.field + '"]').remove();

    if (messages.length > 0) {
      $(e.target).parents('form').find('.errors').show();
    } else {
      $(e.target).parents('form').find('.errors').hide();
    }

    // Loop over the messages
    for (var i in messages) {
      if (!$errors.find("li[data-field=" + data.field + "] a").filter(function () {
          return $(this).text() == messages[i];
        }).length > 0) {
        $('<li/>')
          .attr('data-field', data.field)
          .wrapInner(
            $('<a/>')
            .attr('href', 'javascript: void(0);')
            .html(messages[i])
            .on('click', function (e) {
              // Focus on the invalid field
              data.element.focus();
            })
          )
          .hide().appendTo($errors).fadeIn(500);
      } else {
        //$errors.find('li[data-field='+data.field+']').html(messages[i]);
      }
    }

    // Hide the default message
    // data.element.data('fv.messages') returns the field messages element
    data.element
      .data('fv.messages')
      .find('.help-block[data-fv-for="' + data.field + '"]')
      .hide();
  }

  $('.form-submit-button').bind('click', function () {
    if ($(this).find('button').is(":disabled")) {
      if ($('.errors').is(":visible") && $('.errors').html() != "") {

        $('html, body').animate({
          scrollTop: $('.errors:visible').offset().top - 140
        }, 500);
      }
    }
  })

  function PayButton() {
    if (shipping_form_status == true &&
      billing_form_status == true &&
      complete_form_status == true) {
      $('#complete form').find('.loading').fadeOut();
      $('#complete form').data('formValidation').disableSubmitButtons(false);
      $('#complete form').find('[type="submit"]').prop("disabled", false).removeAttr('disabled').removeClass("disabled");
    } else {
      $('#complete form').data('formValidation').disableSubmitButtons(true);
      $('#complete form').find('[type="submit"]').prop("disabled", true).addClass("disabled");
      $('#complete form').find('.loading').fadeIn();
    }
  }

  var btnNextPressed = false;
  $('.btn-next').bind('click', function () {

    // if(checkoutStep != 1){
    //   $(this).formValidation('validate');
    //   btnNextPressed = true;
    //   $(this).css({'cursor' : 'wait'});
    // }
    btnNextPressed = true;
    if ($(this).parents("form").data('formValidation').isValid()) {
      btnNextPressed = false;
      $('.checkout-step a[href="#' + $('.form.active').attr('id') + '"]').parents('.checkout-step')
        .next().tab('show').find('a').trigger('click').removeClass("locked");
      $('#' + $('.form.active').attr('id')).removeClass("locked");
      $("html, body").animate({
        scrollTop: 0
      }, 800);
    }
  });

  $.each($('.form:not(locked) form'), function ($i, $value) {
    if (checkoutStep != 1) {
      $(this).formValidation('validate');
    }
  });

  var lastTab = $('.checkout-step.active');

  $('.checkout-step a[data-toggle="tab"]').click(function () {
    var $form = $($(lastTab).find('a').attr('href') + " > form").formValidation('validate');

    if ($form.data('formValidation').isValid()) {
      $('.checkout-step a[href="#' + $('form:visible').attr('id') + '"]').parents('.checkout-step').removeClass('error');
    }

    $('#complete form').data('formValidation').disableSubmitButtons(true);
    $('#complete form').find('[type="submit"]').prop("disabled", true).addClass("disabled");

    //PayButton();

    lastTab = $(this).parents(".checkout-step");

    $form.parent().removeClass("active");
    $('.checkout-step').removeClass("active");
    $(this).parents('.checkout-step').addClass("active").removeClass("locked").tab('show');
    $('#checkout-content .tab-pane').removeClass("active");
    $($(this).attr('href')).addClass('active');
    $('form:visible').parent().addClass("active");
  });

  ensureNumber = function (n) {
    n = parseInt(n, 10);
    if (isNaN(n) || n <= 0) {
      n = 0;
    }
    return n;
  };

  sameAddress = function (form) {
    $('#bill_firstname').val($('#ship_firstname').val()).trigger('change');
    $('#bill_lastname').val($('#ship_lastname').val()).trigger('change');
    $('#bill_address_1').val($('#ship_address_1').val()).trigger('change');
    $('#bill_address_2').val($('#ship_address_2').val()).trigger('change');
    $('#bill_province').val($('#ship_province').val()).trigger('change');
    $('#bill_postal').val($('#ship_postal').val()).trigger('change');
    $('#bill_country').val($('#ship_country').val()).trigger('change');
    $('#bill_city').val($('#ship_city').val()).trigger('change');
    $('#bill_org').val($('#ship_org').val()).trigger('change');
    $('#bill_tel').val($('#ship_tel').val()).trigger('change');

    var select = $('#bill_city');
    var option = $('<option></option>').
    attr('selected', true).
    text($('#ship_city').val()).
    val($('#ship_city').val());
    option.appendTo($('#bill_city'));
    select.trigger('change');

    form.formValidation('revalidateField', 'bill_firstname');
    form.formValidation('revalidateField', 'bill_lastname');
    form.formValidation('revalidateField', 'bill_address_1');
    form.formValidation('revalidateField', 'bill_address_2');
    form.formValidation('revalidateField', 'bill_province');
    form.formValidation('revalidateField', 'bill_postal');
    form.formValidation('revalidateField', 'bill_city');
    form.formValidation('revalidateField', 'bill_org');
    form.formValidation('revalidateField', 'bill_tell');
  }
  checkForm = function (form) {
    var value = true;

    if (form.find('.has-error').length > 0) {
      return false;
    }
    form.find('input, select, textarea').each(function () {
      if ($(this).parents('.has-error').length > 0) {
        value = false;
      } else if ($(this).prop('required') && ($(this).val() == "" || $(this).val() == null)) {
        value = false;
      }
    });
    return value;
  };

  var calcShippingRequest;

  function calcShipping() {

    var ship = false;
    var province = $('#ship_province').val();
    var postal_code = $('#ship_postal').val();
    var city = $('#ship_city').val();
    var address = $('#ship_address_1').val();
    var ship_method = $('input[name="ship_method"]:checked').val();
    var stop_loading = false;

    if (city != "" || postal_code != "" || province != "" || address != "") {
      stop_loading = true;
    }

    if (stop_loading) {
      if (calcShippingRequest != undefined) {
        calcShippingRequest.abort();
      }
      calcShippingRequest = $.ajax({
        url: '/store/calc/shipping',
        type: 'POST',
        data: {
          'ship_province': province,
          'ship_postal': postal_code,
          'ship_city': city,
          'ship_address_1': address,
          'ship_address_2': $('#ship_address_2').val(),
          'ship_method': ship_method,
          'ship_firstname': $('#ship_firstname').val(),
          'ship_lastname': $('#ship_lastname').val(),
          'ship_country': 'CA',
          'ship_org': $('#ship_org').val(),
          'ship_tel': $('#ship_tel').val(),
          'email': '',
          '_token': $("#csrf_token").val()
        },
        beforeSend: function () {
          $('#shippingOptions input').prop("disabled", true);
          $('#shippingOptions .form-loading').addClass('in');
          $('#shippingOptions').css("min-height", "150px");
        },
        success: function (result) {
          // console.log("Response" + JSON.stringify(result));
          if (result.result == "success") {
            $('#shippingOptions').css("min-height", "auto").find('.ship_option').remove();
            $('#defaultShippingMsg').fadeOut();

            if ($('#cart_shipping .cart-widget-value span').length) {
              $('#cart_shipping .cart-widget-value span').html(result.shipAmount).fadeIn();
            } else {
              $('#cart_shipping .cart-widget-value').html('$<span>' + result.shipAmount + '</span> CAD').fadeIn();
            }

            $.each(result.rates, function ($k, $rate) {
              var option = $('<label class="ship_option d-flex flex-row" for="' + $rate.serviceId + '">\
            <input type="radio" class="flex-column" data-amount="' + $rate.totalCharge + '" name="ship_method"  id="' + $rate.serviceId + '" value="' + $rate.serviceId + '" ' + ($k == 0 ? "checked" : "") + '/>\
            <span class="flex-column pl-4"> <span class="h6">' + $rate.carrierName + '</span> <span class="text-sm text-primary">' + $rate.serviceName + '</span></span>\
            <span class="small text-muted flex-column pl-3">(estimated ' + $rate.transitDays + ' days)</span>\
            <span class="small flex-column pl-3">$' + numeral($rate.totalCharge).format('0,0.00') + ' CAD</span>\
            </label>\
            ');
              option.hide().appendTo('#shippingOptions').fadeIn('fast');
            })

            bindShippingChangeEvent();

            ship = result.shipAmount;
            var loading1 = false;
            if (ship >= 0) {
              loading1 = true;
              $('#cart_shipping .cart-widget-value span').html(ship);
              $('#cart_shipping').fadeIn().show();

              updateTotal();
            }
          } else {
            $('.cart-loading-block').fadeOut('fast');
            $('#cart_shipping').fadeOut('fast');
            $('body').html(result);

            $.notify({
              // options
              message: result.msg
            }, {
              // settings
              type: result.result,
              placement: {
                from: "bottom",
                align: "right"
              },
              newest_on_top: true,
            });

            $('#shippingOptions .ship_option').fadeOut('fast', function () {
              $(this).remove();
            });

            if ($('#defaultShippingMsg').length == 0) {
              $('#shippingOptions').append('<div id="defaultShippingMsg" class="alert alert-' + result.result + '">' + result.msg + '</div>');
            } else {
              $('#shippingOptions #defaultShippingMsg').removeClass('alert-primary').addClass('alert-' + result.result).html(result.msg);
            }
            $('#defaultShippingMsg').fadeIn();
            shipping_form_status = false;
            $('#shipping form').formValidation('revalidateField', 'ship_method');
          }
          $('#shippingOptions input').prop("disabled", false);
          $('#shippingOptions .form-loading').removeClass('in');
        },
        error: function (result) {
          //console.log(result);
          console.log(result.responseText);
        }
      });
    } else {
      $('.cart-loading-block').fadeOut('fast');
    }
  }

  bindShippingChangeEvent();

  function bindShippingChangeEvent() {
    $('#shippingOptions input').on('change', function (event) {
      $('#cart_shipping .cart-widget-value span').html($(this).data('amount'));
      $('#cart_shipping').fadeIn();
      updateTotal();
      //calcTax();
      // calcShipping();
    });
  }

  calcTax = function () {
    var tax = false;
    //$('#cart_shipping').hide();
    $('#cart_tax').hide();
    $('.cart-loading-block').fadeIn('fast').show();
    var province = $('#ship_province').val();
    stop_loading = false;

    if (province != "") {
      stop_loading = true;
      $('#cart_tax').fadeOut('fast');
    }
    if (stop_loading) {
      $.ajax({
        url: '/store/taxes',
        type: 'POST',
        data: {
          'province': province,
          '_token': $("#csrf_token").val()
        },
        success: function (result) {
          if (result.result != "success") {
            $.notify({
              // options
              message: result.msg
            }, {
              // settings
              type: result.result,
              placement: {
                from: "bottom",
                align: "right"
              },
              newest_on_top: true,
            });
            return false;
          }
          tax = result.taxAmount;

          var loading2 = false;
          if (tax != false) {
            $('#cart_tax').fadeIn('fast');
            $('#cart_tax .cart-widget-value').html("$" + "<span id='tax_total'>" + numeral(result.taxAmount).format('0,0.00') + "</span>" + " CAD");
            updateTotal();
            loading2 = true;
          }
        },
        complete: function (result) {
          return tax;
        },
        error: function (result) {
          console.log(result.responseText);
        }
      });
    }
  }

  updateTotal = function () {
    var shipping = 0;
    var tax = $('#tax_total').length > 0 ? parseFloat($('#tax_total').text().replace(/,/g, '')) : 0.0;

    if ($('#cart_shipping .cart-widget-value span').text() != "") {
      shipping = parseFloat($('#cart_shipping .cart-widget-value span').text());
    } else {

    }

    var subtotal = parseFloat($('#sub_total').text().replace(/,/g, ''));
    var coupon = 0;

    $.ajax({
      url: '/store/calcTotal',
      type: 'POST',
      data: {
        '_token': $("#csrf_token").val()
      },
      success: function (result) {
        if (result.result != "success") {
          $('.discount_block').fadeOut('fast');
        }
        $('#checkout_total').html(numeral(result.total + shipping + tax).format('0,0.00'));
      },
      error: function (result) {
        console.log(result);
        //$(body).html(result.responseText);
      }
    });
  }

  $('input').on('ifClicked', function (event) {
    if ($(event.target).parent().hasClass('checked')) {
      $(event.target).prop('checked', false).trigger('change');
    } else {
      $(event.target).prop('checked', true).trigger('change');
    }
  });

  $('#ship_province, #ship_postal, #ship_city, #ship_address_1').change(function () {
    if ($(this).is('#ship_province')) {
      calcTax();
    }

    if ($('#ship_province').val() != "" && $('#ship_postal').val() != "" && $('#ship_city').val() != "" && $('#ship_address_1').val() != "") {
      calcShipping();
    }
  })

  calcTax();

  $('#promo').on('shown.bs.collapse', function () {
    var pos = $(window).scrollTop();
    var el = $('.fixed-widget');
    var el2 = $('.floating-widget');
    var el3 = $(this).outerHeight();
    var p1 = el.position().top + el.outerHeight();
    var p2 = el2.position().top + el2.outerHeight();

    if ($(window).width() > 992) {
      if (p2 > p1 || pos + el2.outerHeight() > p1) {
        pos = p1 - el2.outerHeight() - el3 + 40;
        el2.css('top', pos);
      }
    }
  }).on('hidden.bs.collapse', function () {
    var pos = $(window).scrollTop();
    var el = $('.fixed-widget');
    var el2 = $('.floating-widget');
    var el3 = $(this).outerHeight();
    var p1 = el.position().top + el.outerHeight();
    var p2 = el2.position().top + el2.outerHeight();

    if ($(window).width() > 992) {
      if (p2 > p1 || pos + el2.outerHeight() > p1) {
        pos = p1 - p2 + el3 - 20;
        el2.css('top', pos);
      }
    }
  })

  $(document).on('focus', '.select2', function () {
    //$(this).siblings('select').select2('open');
  });

  $('.btn-same-ship').click(function () {
    sameAddress($('#billing form'));
  })

  $(".postal-code").bind('keyup', function (e) {
    if (e.which >= 97 && e.which <= 122) {
      var newKey = e.which - 32;
      // I have tried setting those
      e.keyCode = newKey;
      e.charCode = newKey;
    }

    $(this).val(($(this).val()).toUpperCase());
  });

  $("#cc_expire_2, #cc_expire_1").bind('keydown', function (e) {
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
      // Allow: Ctrl+A, Command+A
      (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
      // Allow: home, end, left, right, down, up
      (e.keyCode >= 35 && e.keyCode <= 40)) {
      // let it happen, don't do anything
      return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
    }
  });

  $(".credit_type").select2({
    minimumResultsForSearch: Infinity
  });

  $(".province-select").select2({
    placeholder: "Select a state",
    width: '100%',
    allowClear: false
  })

  $('.checkout-steps .collapse').on('show.bs.collapse', function (e) {

    var prevForm = $(this).prev().prev();

    var proceed = checkForm(prevForm);

    if (proceed && !$(this).prev().hasClass('disabled')) {
      $(this).prev('a').removeClass("disabled")
    }

    if ($(this).prev('a').hasClass("disabled")) {
      e.preventDefault();
    }

  });

  $(window).scroll(function () {
    var pos = $(window).scrollTop();
    var el = $('.fixed-widget');
    var el2 = $('.floating-widget');
    var p1 = el.position().top + el.outerHeight();
    var p2 = el2.position().top + el2.outerHeight();

    var w_height = 0;
    $.each($('.floating-widget > div'), function (i, v) {
      w_height += $(v).outerHeight()
    })

    var offset = $('header').outerHeight();
    if ($(window).width() > 992) {
      // console.log(pos + " >= " + el.position().top + " && " + (w_height + el.position().top) + " <= " + p2 );
      if (pos - offset >= el.position().top &&
        el2.position().top >= el.position().top &&
        (w_height + pos) <= p1 + 55) {
        el2.css('top', pos - offset * 1.5 - 20);
      }

      if (pos <= el.position().top - offset) {
        el2.css('top', el.position().top - 30);
      }
    }
  })

  $('.cvv-info').popover({
    placement: 'auto',
    trigger: 'hover',
    html: true,
    content: "<img src='https://i.imgur.com/L4aM0FE.png' width='220px' class='p-3' />"
  });

  $('#email').change(function () {
    $('#agree_terms').prop('checked', false);
    // $('#agree_terms').iCheck('unckeck').prop('checked', false).iCheck('update');
  })
});
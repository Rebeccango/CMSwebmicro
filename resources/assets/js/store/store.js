var numeral = require('numeral');

$(function () {
  var shopping_cart = $('.shoppingcart_dropdown');

  $('.btn-add-to-cart').click(function () {
    var quantity = 1;
    $('.product-qty').each(function () {
      if ($(this).is(':visible')) {
        quantity = parseInt($(this).val());
      }
    });
    var pid = $(this).data('pid');
    $(this).prop('disabled', true).css({ 'cursor': 'wait' });
    $(document.body).css({ 'cursor': 'wait' });

    if (quantity > 0) {
      addItemToCart(pid, quantity, shopping_cart, $(this));
    }
  });

  $('.product-qty').on("change paste keyup input propertychange", function () {
    var val = $(this).val();
    if (val == "") {
      $(this).val(1);
    } else if (parseInt(val) <= 0) {
      $(this).val(1);
    }
  });

  $('.item-remove').click(function () {
    removeCartItem($(this).parents('.cart-item'), shopping_cart);
  });

  $('.cart-action-remove').click(function () {
    removeCartItem2($(this), $('#shopping_cart'));
  });



  var update_quantity_cart_timeout;
  $("#shopping_cart .product-qty").on("change paste keyup input propertychange", function () {
    clearTimeout(update_quantity_cart_timeout);
    var qty = $(this);
    update_quantity_cart_timeout = setTimeout(function () {
      updateQuantity(qty);
    }, 600);
  });

  $("#shopping_cart .btn-update").click(function () {
    setTimeout(function () {
      location.reload();
    }, 800);
  });

  $("#shopping_cart #checkout").click(function () {
    setTimeout(function () {
      window.location = "/store/checkout/";
    }, 500);
  });

  $("#couponinput").on("propertychange change click keyup input paste", function () {
    if ($(this).val() != "") {
      $('#cart_addcoupon').prop('disabled', false);
    } else {
      $('#cart_addcoupon').prop('disabled', true);
    }
  });

  $('#cart_addcoupon').click(function () {
    $.ajax({
      url: '/store/cart/coupon',
      type: 'POST',
      data: {
        'couponinput': $('#couponinput').val(),
        '_token': $("#csrf_token").val()
      },
      success: function (result) {
        $.notify({
          // options
          message: result.msg
        }, {
            // settings
            type: result.result,
            placement: {
              from: "bottom",
              align: "center"
            },
            newest_on_top: true,
            onShow: function () {
              if (result.result == "success") {
                setTimeout(function () {
                  // $.cookie("coupon", result.coupon, { expires: new Date(result.details.expire_date), path: "/" });
                  location.reload();
                }, 900);
              } else {

              }
            }
          });
        recalcCartSummary();
      },
      error: function (result) {
        $('.cart-widget-coupon').fadeOut(function () {
          $(this).remove();
        }, 'fast');
      }
    });
  });

  // $('[data-toggle="popover"]').popover();

  function recalcCartSummary() {
    $.ajax({
      url: '/store/calcCart',
      type: 'POST',
      dataType: 'json',
      data: {
        '_token': $("#csrf_token").val()
      },
      success: function (result2) {
        $('.shoppingcart_dropdown').find('.total').html('$' + numeral(result2.total).format('0,0.00') + ' CAD');
        $('.shoppingcart_dropdown').find('.badge').html(result2.num_items);
        $('.cart-total-items').html(result2.num_items);
        $('#shopping_cart .cart-total').html('$' + numeral(result2.total).format('0,0.00') + ' CAD');
        $('#shopping_cart .cart-subtotal').html('$' + numeral(result2.subtotal).format('0,0.00') + ' CAD');
        $('#shopping_cart .cart-loading').fadeOut();
        if (result2.coupon_status) {
          if ($('.cart-widget-coupon').length == 0) {
            $('<div class="cart-widget-block cart-widget-title cart-widget-coupon" data-couponname="' + result2.coupon.name + '">\
            <div class="cart-widget-label">COUPON<i class="fa fa-lg fa-info-circle" data-container="body" data-toggle="popover" data-html="true"  data-trigger="hover" data-placement="right" data-content="<strong>Coupon Code:</strong><br/>'+ result2.coupon.name + '<br/><strong>Description:</strong> ' + result2.coupon.details + '" aria-hidden="true"></i></div><div class="cart-widget-value green">' + result2.coupon.name + '</div></div>').insertBefore('.cart-widget-total');

            $('<div class="cart-coupon"><p>Coupon: <span class="pull-right">' + result2.coupon.name + '</span></p></div>').insertBefore('.shoppingcart_dropdown .cart-total');
          } else {
            if ($('.cart-widget-coupon').data('couponname') != result2.coupon.name) {
              $('.cart-widget-coupon .cart-widget-value').html(result2.coupon.name);
              $('.cart-widget-coupon .fa-info-circle').data('content', '<strong>Coupon Code:</strong><br/>' + result2.coupon.name + '<br/><strong>Description:</strong> ' + result2.coupon.details);
              $('.cart-coupon').html('<p>Coupon: <span class="pull-right">' + result2.coupon.name + '</span></p>');
            }
          }
        } else {
          $('.cart-widget-coupon + .shoppingcart_dropdown .cart-coupon').fadeOut('fast', function () {
            $(this).remove();
          });
        }
        $('.fa-info-circle').popover();
      },
      error: function (result) {
        $(body).html(result.responseText);
      }
    });
  }

  function addItemToCart(pid, quantity, shopping_cart, button) {
    var cart = shopping_cart.find('.cart-items');

    $.ajax({
      url: '/store/product/getProductDetails',
      type: 'POST',
      data: {
        'pid': pid,
        '_token': $("#csrf_token").val()
      },
      success: function (result) {
        $.ajax({
          url: '/store/product/addToCart',
          type: 'POST',
          data: {
            'pid': pid,
            'quantity': quantity,
            '_token': $("#csrf_token").val()
          },
          success: function (res) {
            cart.find('.empty').fadeOut('fast');
            var item;
            var error = "success";
            product = result.product;
            category = result.category;
            var existing = cart.find('li[data-pid=' + pid + ']');
            var quantity_1 = parseInt(existing.find('.cd-qty').html());

            $(document.body).css({ 'cursor': 'default' });
            button.prop('disabled', false).css({ 'cursor': 'default' });

            if (res.result == true) {

              $(shopping_cart).find('.badge').html(res.count);

              if (existing.length != 0) {
                item = null;
                existing.find('.cd-qty').html(res.quantity);
                var price = existing.find('.price').html();
                existing.find('.item-remove').click(function () {
                  removeCartItem(existing, shopping_cart);
                });
              } else {
                var price = numeral(parseFloat(product.sale_price == "" ? product.price : product.sale_price)).format('0,0.00');
                item = $('<li class="cart-item" data-pid="' + pid + '">\
                <table width="100%">\
                  <tr>\
                    <td width="90%">\
                      <table width="100%">\
                        <tr>\
                          <td class="pr-2 align-top">\
                            <div class="cd-thumb" style="background-image:url(\''+ product.thumbnail + '\'"></div></td>\
                          <td width="100%">\
                          <a href="/store/catalog/'+ category.slug + '/' + product.slug + '" class="cd-item-name">' + product.title + '</a>\
                          <div class="d-flex w-100 justify-content-start align-items-center">\
                          <div class="cd-qty">'+ quantity + '</div>\
                          <div class="times mx-1">&times;</div>\
                            <div class="cd-price">$<span class="price mr-1">'+ price + '</div> ' + product.currency + '</div>\
                            </div>\
                          </td>\
                        </tr>\
                      </table>\
                    </td>\
                    <td width="10%" class="align-top">\
                      <button type="button" class="item-remove"></button>\
                    </td>\
                  </tr>\
                </table>\
              </li>');

                cart.append(item);
                item.find('.item-remove').click(function () {
                  removeCartItem(item, shopping_cart);
                });
              }
              $('.product-qty').val(1);
              updateTotal(shopping_cart, res.total);
            } else {
              error = "danger";
            }

            var dialog = bootbox.dialog({
              message: '<div class="h4"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right:10px;"></i> Add item to cart</div><br><table style="width:100%"><tr><td><img src="' + product.thumbnail + '" width="100px" height="auto"/></td><td style="padding:0 15px;"><p>' + res.msg + '</p></td></tr><tr></table><div class="w-100 d-flex flex-row-reverse"><a href="https://www.cadmicro.com/store/checkout" class="btn btn-md btn-primary">Checkout</a><a href="https://www.cadmicro.com/store/cart" class="btn btn-md mr-3 btn-success">View Cart</a></div>',
              closeButton: true
            });

            setTimeout(function () {
              dialog.modal('hide');
            }, 15000)

          },
          error: function (result) {
            $(body).html(result.responseText);
          }
        });
      },
      error: function (result) {
        $(body).html(result.responseText);
      }
    });
  }

  function updateTotal(cart, total) {
    cart.find('.total').html("$" + numeral(total).format('0,0.00') + " CAD");
  }

  function removeCartItem(item, shopping_cart) {
    var pid = parseInt(item.data('pid'));
    var badge = item.parents('.shoppingcart_dropdown').find('.badge');
    $('#shopping_cart .cart-loading').fadeIn();

    $.ajax({
      url: '/store/product/removeFromCart',
      type: 'POST',
      data: {
        'pid': pid,
        '_token': $("#csrf_token").val()
      },
      success: function (result) {
        if (result.count == 0) {
          window.location.href = window.location.href;
        }
        if (typeof calcShipping == 'function') {
          calcShipping();
        }
        item.fadeOut("fast", function () {

          badge.html(result.count);
          updateTotal(shopping_cart, result.total);

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

          if (!result.coupon_status) {
            $('.cart-widget-coupon').fadeOut(function () {
              $(this).remove();
            }, 'fast');
          }

          $('.shoppingcart_dropdown').find('.total').html('$' + numeral(result.total).format('0,0.00') + ' CAD');
          $('.shoppingcart_dropdown').find('.badge').html(result.count);
          $('.cart-total-items').html(result.count);
          $('#shopping_cart .cart-total').html('$' + numeral(result.total).format('0,0.00') + ' CAD');
          $('#shopping_cart .cart-subtotal').html('$' + numeral(result.subtotal).format('0,0.00') + ' CAD');
          $('#shopping_cart .cart-loading').fadeOut();
          $('#shopping_cart .cart-items[data-pid="' + pid + '"]').fadeOut("fast", function () {
            $(this).remove();
          });
          $('.shoppingcart_dropdown .cart-item[data-pid="' + pid + '"]').remove();

          if (result.count == 0) {
            shopping_cart.find('.cart-items').html('<li class="empty">Your cart is empty</li>');
          }

          item.remove();
        });
      },
      error: function (result) {
        $(body).html(result.responseText);
      }
    });
  }

  function removeCartItem2(item, shopping_cart) {
    var pid = item.data('pid');
    var item = item.parents('.cart-item');
    var badge = $('.shoppingcart_dropdown .badge');

    $('#shopping_cart .cart-loading').fadeIn();

    $.ajax({
      url: '/store/product/removeFromCart',
      type: 'POST',
      data: {
        'pid': pid,
        '_token': $("#csrf_token").val()
      },
      success: function (result) {
        if (result.count == 0) {
          window.location.href = window.location.href;
        }
        updateTotal(shopping_cart, result.total);

        item.fadeOut("fast", function () {

          if (!result.coupon_status) {
            $('.cart-widget-coupon').fadeOut('fast', function () {
              $(this).remove();
            });
          }

          $('.shoppingcart_dropdown').find('.total').html('$' + numeral(result.total).format('0,0.00') + ' CAD');
          $('.shoppingcart_dropdown').find('.badge').html(result.count);
          $('.cart-total-items').html(result.count);
          $('#shopping_cart .cart-total').html('$' + numeral(result.total).format('0,0.00') + ' CAD');
          $('#shopping_cart .cart-subtotal').html('$' + numeral(result.subtotal).format('0,0.00') + ' CAD');
          $('#shopping_cart .cart-loading').fadeOut();
          $('#shopping_cart .cart-items[data-pid="' + pid + '"]').fadeOut("fast", function () {
            $(this).remove();
          });
          $('.shoppingcart_dropdown .cart-item[data-pid="' + pid + '"]').remove();

          if (result.count == 0) {
            shopping_cart.find('.cart-items').html('<li class="empty">Your cart is empty</li>');
          }

          item.remove();

          //location.reload();
        });
      },
      error: function (result) {
        $(body).html(result.responseText);
      }
    });
  }

  function updateQuantity(item) {
    var pid = item.parents(".cart-item").data('pid');
    var quantity = item.val();
    $(document.body).css({ 'cursor': 'wait' });
    $('#shopping_cart .cart-loading').fadeIn();
    $.ajax({
      url: '/store/cart/updateQuantity',
      type: 'POST',
      data: {
        'pid': pid,
        'quantity': quantity,
        '_token': $("#csrf_token").val()
      },
      success: function (result) {
        $.ajax({
          url: '/store/calcCart',
          type: 'POST',
          dataType: 'json',
          data: {
            '_token': $("#csrf_token").val()
          },
          success: function (result2) {
            setTimeout(function () {
              $(document.body).css({ 'cursor': 'default' });
              //$('.checkout-btn').prop('disabled', false).css('pointer-events', 'auto');
              item.parents(".cart-item").find('.cart-item-total').html('$' + numeral(result.itemTotal).format('0,0.00') + ' CAD');

              item.parents(".cart-item").find('.product-qty').val(result.quantity);

              $('.shoppingcart_dropdown').find('.total').html('$' + numeral(result2.total).format('0,0.00') + ' CAD');
              $('.shoppingcart_dropdown').find('.badge').html(result.num_items);
              $('.shoppingcart_dropdown .cart-item[data-pid="' + pid + '"] .cd-qty').html(result.quantity);

              $('.cart-total-items').html(result.num_items);
              $('#shopping_cart .cart-total').html('$' + numeral(result2.total).format('0,0.00') + ' CAD');
              $('#shopping_cart .cart-subtotal').html('$' + numeral(result2.subtotal).format('0,0.00') + ' CAD');
              $('#shopping_cart .cart-loading').fadeOut();
            }, 500);
          },
          error: function (result) {
            $(body).html(result.responseText);
          }
        });
      },
      error: function (result) {
        $(body).html(result.responseText);
      }
    });
  }

});

!function(t){var e={};function r(o){if(e[o])return e[o].exports;var n=e[o]={i:o,l:!1,exports:{}};return t[o].call(n.exports,n,n.exports,r),n.l=!0,n.exports}r.m=t,r.c=e,r.d=function(t,e,o){r.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:o})},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="/",r(r.s=2)}({2:function(t,e,r){t.exports=r("N71M")},N71M:function(t,e,r){var o=r("ViqS");$(function(){var t,e=$(".shoppingcart_dropdown");function r(t,e){t.find(".total").html("$"+o(e).format("0,0.00")+" CAD")}function n(t,e){var n=parseInt(t.data("pid")),a=t.parents(".shoppingcart_dropdown").find(".badge");$("#shopping_cart .cart-loading").fadeIn(),$.ajax({url:"/store/product/removeFromCart",type:"POST",data:{pid:n,_token:$("#csrf_token").val()},success:function(i){0==i.count&&(window.location.href=window.location.href),"function"==typeof calcShipping&&calcShipping(),t.fadeOut("fast",function(){a.html(i.count),r(e,i.total),$.notify({message:i.msg},{type:i.result,placement:{from:"bottom",align:"right"},newest_on_top:!0}),i.coupon_status||$(".cart-widget-coupon").fadeOut(function(){$(this).remove()},"fast"),$(".shoppingcart_dropdown").find(".total").html("$"+o(i.total).format("0,0.00")+" CAD"),$(".shoppingcart_dropdown").find(".badge").html(i.count),$(".cart-total-items").html(i.count),$("#shopping_cart .cart-total").html("$"+o(i.total).format("0,0.00")+" CAD"),$("#shopping_cart .cart-subtotal").html("$"+o(i.subtotal).format("0,0.00")+" CAD"),$("#shopping_cart .cart-loading").fadeOut(),$('#shopping_cart .cart-items[data-pid="'+n+'"]').fadeOut("fast",function(){$(this).remove()}),$('.shoppingcart_dropdown .cart-item[data-pid="'+n+'"]').remove(),0==i.count&&e.find(".cart-items").html('<li class="empty">Your cart is empty</li>'),t.remove()})},error:function(t){$(body).html(t.responseText)}})}$(".btn-add-to-cart").click(function(){var t=1;$(".product-qty").each(function(){$(this).is(":visible")&&(t=parseInt($(this).val()))});var a=$(this).data("pid");$(this).prop("disabled",!0).css({cursor:"wait"}),$(document.body).css({cursor:"wait"}),t>0&&function(t,e,a,i){var c=a.find(".cart-items");$.ajax({url:"/store/product/getProductDetails",type:"POST",data:{pid:t,_token:$("#csrf_token").val()},success:function(s){$.ajax({url:"/store/product/addToCart",type:"POST",data:{pid:t,quantity:e,_token:$("#csrf_token").val()},success:function(l){var u;c.find(".empty").fadeOut("fast");product=s.product,category=s.category;var d=c.find("li[data-pid="+t+"]");parseInt(d.find(".cd-qty").html());if($(document.body).css({cursor:"default"}),i.prop("disabled",!1).css({cursor:"default"}),1==l.result){if($(a).find(".badge").html(l.count),0!=d.length){u=null,d.find(".cd-qty").html(l.quantity);var p=d.find(".price").html();d.find(".item-remove").click(function(){n(d,a)})}else{var p=o(parseFloat(""==product.sale_price?product.price:product.sale_price)).format("0,0.00");u=$('<li class="cart-item" data-pid="'+t+'">                <table width="100%">                  <tr>                    <td width="90%">                      <table width="100%">                        <tr>                          <td class="pr-2 align-top">                            <div class="cd-thumb" style="background-image:url(\''+product.thumbnail+'\'"></div></td>                          <td width="100%">                          <a href="/store/catalog/'+category.slug+"/"+product.slug+'" class="cd-item-name">'+product.title+'</a>                          <div class="d-flex w-100 justify-content-start align-items-center">                          <div class="cd-qty">'+e+'</div>                          <div class="times mx-1">&times;</div>                            <div class="cd-price">$<span class="price mr-1">'+p+"</div> "+product.currency+'</div>                            </div>                          </td>                        </tr>                      </table>                    </td>                    <td width="10%" class="align-top">                      <button type="button" class="item-remove"></button>                    </td>                  </tr>                </table>              </li>'),c.append(u),u.find(".item-remove").click(function(){n(u,a)})}$(".product-qty").val(1),r(a,l.total)}else"danger";var f=bootbox.dialog({message:'<div class="h4"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-right:10px;"></i> Add item to cart</div><br><table style="width:100%"><tr><td><img src="'+product.thumbnail+'" width="100px" height="auto"/></td><td style="padding:0 15px;"><p>'+l.msg+'</p></td></tr><tr></table><div class="w-100 d-flex flex-row-reverse"><a href="https://www.cadmicro.com/store/checkout" class="btn btn-md btn-primary">Checkout</a><a href="https://www.cadmicro.com/store/cart" class="btn btn-md mr-3 btn-success">View Cart</a></div>',closeButton:!0});setTimeout(function(){f.modal("hide")},15e3)},error:function(t){$(body).html(t.responseText)}})},error:function(t){$(body).html(t.responseText)}})}(a,t,e,$(this))}),$(".product-qty").on("change paste keyup input propertychange",function(){var t=$(this).val();""==t?$(this).val(1):parseInt(t)<=0&&$(this).val(1)}),$(".item-remove").click(function(){n($(this).parents(".cart-item"),e)}),$(".cart-action-remove").click(function(){!function(t,e){var n=t.data("pid"),t=t.parents(".cart-item");$(".shoppingcart_dropdown .badge");$("#shopping_cart .cart-loading").fadeIn(),$.ajax({url:"/store/product/removeFromCart",type:"POST",data:{pid:n,_token:$("#csrf_token").val()},success:function(a){0==a.count&&(window.location.href=window.location.href),r(e,a.total),t.fadeOut("fast",function(){a.coupon_status||$(".cart-widget-coupon").fadeOut("fast",function(){$(this).remove()}),$(".shoppingcart_dropdown").find(".total").html("$"+o(a.total).format("0,0.00")+" CAD"),$(".shoppingcart_dropdown").find(".badge").html(a.count),$(".cart-total-items").html(a.count),$("#shopping_cart .cart-total").html("$"+o(a.total).format("0,0.00")+" CAD"),$("#shopping_cart .cart-subtotal").html("$"+o(a.subtotal).format("0,0.00")+" CAD"),$("#shopping_cart .cart-loading").fadeOut(),$('#shopping_cart .cart-items[data-pid="'+n+'"]').fadeOut("fast",function(){$(this).remove()}),$('.shoppingcart_dropdown .cart-item[data-pid="'+n+'"]').remove(),0==a.count&&e.find(".cart-items").html('<li class="empty">Your cart is empty</li>'),t.remove()})},error:function(t){$(body).html(t.responseText)}})}($(this),$("#shopping_cart"))}),$("#shopping_cart .product-qty").on("change paste keyup input propertychange",function(){clearTimeout(t);var e=$(this);t=setTimeout(function(){var t,r,n;t=e,r=t.parents(".cart-item").data("pid"),n=t.val(),$(document.body).css({cursor:"wait"}),$("#shopping_cart .cart-loading").fadeIn(),$.ajax({url:"/store/cart/updateQuantity",type:"POST",data:{pid:r,quantity:n,_token:$("#csrf_token").val()},success:function(e){$.ajax({url:"/store/calcCart",type:"POST",dataType:"json",data:{_token:$("#csrf_token").val()},success:function(n){setTimeout(function(){$(document.body).css({cursor:"default"}),t.parents(".cart-item").find(".cart-item-total").html("$"+o(e.itemTotal).format("0,0.00")+" CAD"),t.parents(".cart-item").find(".product-qty").val(e.quantity),$(".shoppingcart_dropdown").find(".total").html("$"+o(n.total).format("0,0.00")+" CAD"),$(".shoppingcart_dropdown").find(".badge").html(e.num_items),$('.shoppingcart_dropdown .cart-item[data-pid="'+r+'"] .cd-qty').html(e.quantity),$(".cart-total-items").html(e.num_items),$("#shopping_cart .cart-total").html("$"+o(n.total).format("0,0.00")+" CAD"),$("#shopping_cart .cart-subtotal").html("$"+o(n.subtotal).format("0,0.00")+" CAD"),$("#shopping_cart .cart-loading").fadeOut()},500)},error:function(t){$(body).html(t.responseText)}})},error:function(t){$(body).html(t.responseText)}})},600)}),$("#shopping_cart .btn-update").click(function(){setTimeout(function(){location.reload()},800)}),$("#shopping_cart #checkout").click(function(){setTimeout(function(){window.location="/store/checkout/"},500)}),$("#couponinput").on("propertychange change click keyup input paste",function(){""!=$(this).val()?$("#cart_addcoupon").prop("disabled",!1):$("#cart_addcoupon").prop("disabled",!0)}),$("#cart_addcoupon").click(function(){$.ajax({url:"/store/cart/coupon",type:"POST",data:{couponinput:$("#couponinput").val(),_token:$("#csrf_token").val()},success:function(t){$.notify({message:t.msg},{type:t.result,placement:{from:"bottom",align:"center"},newest_on_top:!0,onShow:function(){"success"==t.result&&setTimeout(function(){location.reload()},900)}}),$.ajax({url:"/store/calcCart",type:"POST",dataType:"json",data:{_token:$("#csrf_token").val()},success:function(t){$(".shoppingcart_dropdown").find(".total").html("$"+o(t.total).format("0,0.00")+" CAD"),$(".shoppingcart_dropdown").find(".badge").html(t.num_items),$(".cart-total-items").html(t.num_items),$("#shopping_cart .cart-total").html("$"+o(t.total).format("0,0.00")+" CAD"),$("#shopping_cart .cart-subtotal").html("$"+o(t.subtotal).format("0,0.00")+" CAD"),$("#shopping_cart .cart-loading").fadeOut(),t.coupon_status?0==$(".cart-widget-coupon").length?($('<div class="cart-widget-block cart-widget-title cart-widget-coupon" data-couponname="'+t.coupon.name+'">            <div class="cart-widget-label">COUPON<i class="fa fa-lg fa-info-circle" data-container="body" data-toggle="popover" data-html="true"  data-trigger="hover" data-placement="right" data-content="<strong>Coupon Code:</strong><br/>'+t.coupon.name+"<br/><strong>Description:</strong> "+t.coupon.details+'" aria-hidden="true"></i></div><div class="cart-widget-value green">'+t.coupon.name+"</div></div>").insertBefore(".cart-widget-total"),$('<div class="cart-coupon"><p>Coupon: <span class="pull-right">'+t.coupon.name+"</span></p></div>").insertBefore(".shoppingcart_dropdown .cart-total")):$(".cart-widget-coupon").data("couponname")!=t.coupon.name&&($(".cart-widget-coupon .cart-widget-value").html(t.coupon.name),$(".cart-widget-coupon .fa-info-circle").data("content","<strong>Coupon Code:</strong><br/>"+t.coupon.name+"<br/><strong>Description:</strong> "+t.coupon.details),$(".cart-coupon").html('<p>Coupon: <span class="pull-right">'+t.coupon.name+"</span></p>")):$(".cart-widget-coupon + .shoppingcart_dropdown .cart-coupon").fadeOut("fast",function(){$(this).remove()}),$(".fa-info-circle").popover()},error:function(t){$(body).html(t.responseText)}})},error:function(t){$(".cart-widget-coupon").fadeOut(function(){$(this).remove()},"fast")}})})})},ViqS:function(t,e,r){var o,n,a;a=function(){var t,e,r,o,n,a,i={},c={},s={currentLocale:"en",zeroFormat:null,nullFormat:null,defaultFormat:"0,0",scalePercentBy100:!0},l={currentLocale:s.currentLocale,zeroFormat:s.zeroFormat,nullFormat:s.nullFormat,defaultFormat:s.defaultFormat,scalePercentBy100:s.scalePercentBy100};function u(t,e){this._input=t,this._value=e}return t=function(r){var o,n,a,c;if(t.isNumeral(r))o=r.value();else if(0===r||void 0===r)o=0;else if(null===r||e.isNaN(r))o=null;else if("string"==typeof r)if(l.zeroFormat&&r===l.zeroFormat)o=0;else if(l.nullFormat&&r===l.nullFormat||!r.replace(/[^0-9]+/g,"").length)o=null;else{for(n in i)if(c="function"==typeof i[n].regexps.unformat?i[n].regexps.unformat():i[n].regexps.unformat,c&&r.match(c)){a=i[n].unformat;break}a=a||t._.stringToNumber,o=a(r)}else o=Number(r)||null;return new u(r,o)},t.version="2.0.6",t.isNumeral=function(t){return t instanceof u},t._=e={numberToFormat:function(e,r,o){var n,a,i,s,l,u,d,p,f=c[t.options.currentLocale],m=!1,h=!1,g="",b="",v=!1;if(e=e||0,i=Math.abs(e),t._.includes(r,"(")?(m=!0,r=r.replace(/[\(|\)]/g,"")):(t._.includes(r,"+")||t._.includes(r,"-"))&&(u=t._.includes(r,"+")?r.indexOf("+"):e<0?r.indexOf("-"):-1,r=r.replace(/[\+|\-]/g,"")),t._.includes(r,"a")&&(a=r.match(/a(k|m|b|t)?/),a=!!a&&a[1],t._.includes(r," a")&&(g=" "),r=r.replace(new RegExp(g+"a[kmbt]?"),""),i>=1e12&&!a||"t"===a?(g+=f.abbreviations.trillion,e/=1e12):i<1e12&&i>=1e9&&!a||"b"===a?(g+=f.abbreviations.billion,e/=1e9):i<1e9&&i>=1e6&&!a||"m"===a?(g+=f.abbreviations.million,e/=1e6):(i<1e6&&i>=1e3&&!a||"k"===a)&&(g+=f.abbreviations.thousand,e/=1e3)),t._.includes(r,"[.]")&&(h=!0,r=r.replace("[.]",".")),s=e.toString().split(".")[0],l=r.split(".")[1],d=r.indexOf(","),n=(r.split(".")[0].split(",")[0].match(/0/g)||[]).length,l?(t._.includes(l,"[")?(l=l.replace("]",""),l=l.split("["),b=t._.toFixed(e,l[0].length+l[1].length,o,l[1].length)):b=t._.toFixed(e,l.length,o),s=b.split(".")[0],b=t._.includes(b,".")?f.delimiters.decimal+b.split(".")[1]:"",h&&0===Number(b.slice(1))&&(b="")):s=t._.toFixed(e,0,o),g&&!a&&Number(s)>=1e3&&g!==f.abbreviations.trillion)switch(s=String(Number(s)/1e3),g){case f.abbreviations.thousand:g=f.abbreviations.million;break;case f.abbreviations.million:g=f.abbreviations.billion;break;case f.abbreviations.billion:g=f.abbreviations.trillion}if(t._.includes(s,"-")&&(s=s.slice(1),v=!0),s.length<n)for(var $=n-s.length;$>0;$--)s="0"+s;return d>-1&&(s=s.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g,"$1"+f.delimiters.thousands)),0===r.indexOf(".")&&(s=""),p=s+b+(g||""),m?p=(m&&v?"(":"")+p+(m&&v?")":""):u>=0?p=0===u?(v?"-":"+")+p:p+(v?"-":"+"):v&&(p="-"+p),p},stringToNumber:function(t){var e,r,o,n=c[l.currentLocale],a=t,i={thousand:3,million:6,billion:9,trillion:12};if(l.zeroFormat&&t===l.zeroFormat)r=0;else if(l.nullFormat&&t===l.nullFormat||!t.replace(/[^0-9]+/g,"").length)r=null;else{for(e in r=1,"."!==n.delimiters.decimal&&(t=t.replace(/\./g,"").replace(n.delimiters.decimal,".")),i)if(o=new RegExp("[^a-zA-Z]"+n.abbreviations[e]+"(?:\\)|(\\"+n.currency.symbol+")?(?:\\))?)?$"),a.match(o)){r*=Math.pow(10,i[e]);break}r*=(t.split("-").length+Math.min(t.split("(").length-1,t.split(")").length-1))%2?1:-1,t=t.replace(/[^0-9\.]+/g,""),r*=Number(t)}return r},isNaN:function(t){return"number"==typeof t&&isNaN(t)},includes:function(t,e){return-1!==t.indexOf(e)},insert:function(t,e,r){return t.slice(0,r)+e+t.slice(r)},reduce:function(t,e){if(null===this)throw new TypeError("Array.prototype.reduce called on null or undefined");if("function"!=typeof e)throw new TypeError(e+" is not a function");var r,o=Object(t),n=o.length>>>0,a=0;if(3===arguments.length)r=arguments[2];else{for(;a<n&&!(a in o);)a++;if(a>=n)throw new TypeError("Reduce of empty array with no initial value");r=o[a++]}for(;a<n;a++)a in o&&(r=e(r,o[a],a,o));return r},multiplier:function(t){var e=t.toString().split(".");return e.length<2?1:Math.pow(10,e[1].length)},correctionFactor:function(){var t=Array.prototype.slice.call(arguments);return t.reduce(function(t,r){var o=e.multiplier(r);return t>o?t:o},1)},toFixed:function(t,e,r,o){var n,a,i,c,s=t.toString().split("."),l=e-(o||0);return n=2===s.length?Math.min(Math.max(s[1].length,l),e):l,i=Math.pow(10,n),c=(r(t+"e+"+n)/i).toFixed(n),o>e-n&&(a=new RegExp("\\.?0{1,"+(o-(e-n))+"}$"),c=c.replace(a,"")),c}},t.options=l,t.formats=i,t.locales=c,t.locale=function(t){return t&&(l.currentLocale=t.toLowerCase()),l.currentLocale},t.localeData=function(t){if(!t)return c[l.currentLocale];if(t=t.toLowerCase(),!c[t])throw new Error("Unknown locale : "+t);return c[t]},t.reset=function(){for(var t in s)l[t]=s[t]},t.zeroFormat=function(t){l.zeroFormat="string"==typeof t?t:null},t.nullFormat=function(t){l.nullFormat="string"==typeof t?t:null},t.defaultFormat=function(t){l.defaultFormat="string"==typeof t?t:"0.0"},t.register=function(t,e,r){if(e=e.toLowerCase(),this[t+"s"][e])throw new TypeError(e+" "+t+" already registered.");return this[t+"s"][e]=r,r},t.validate=function(e,r){var o,n,a,i,c,s,l,u;if("string"!=typeof e&&(e+="",console.warn&&console.warn("Numeral.js: Value is not string. It has been co-erced to: ",e)),e=e.trim(),e.match(/^\d+$/))return!0;if(""===e)return!1;try{l=t.localeData(r)}catch(e){l=t.localeData(t.locale())}return a=l.currency.symbol,c=l.abbreviations,o=l.delimiters.decimal,n="."===l.delimiters.thousands?"\\.":l.delimiters.thousands,u=e.match(/^[^\d]+/),(null===u||(e=e.substr(1),u[0]===a))&&(u=e.match(/[^\d]+$/),(null===u||(e=e.slice(0,-1),u[0]===c.thousand||u[0]===c.million||u[0]===c.billion||u[0]===c.trillion))&&(s=new RegExp(n+"{2}"),!e.match(/[^\d.,]/g)&&(i=e.split(o),!(i.length>2)&&(i.length<2?!!i[0].match(/^\d+.*\d$/)&&!i[0].match(s):1===i[0].length?!!i[0].match(/^\d+$/)&&!i[0].match(s)&&!!i[1].match(/^\d+$/):!!i[0].match(/^\d+.*\d$/)&&!i[0].match(s)&&!!i[1].match(/^\d+$/)))))},t.fn=u.prototype={clone:function(){return t(this)},format:function(e,r){var o,n,a,c=this._value,s=e||l.defaultFormat;if(r=r||Math.round,0===c&&null!==l.zeroFormat)n=l.zeroFormat;else if(null===c&&null!==l.nullFormat)n=l.nullFormat;else{for(o in i)if(s.match(i[o].regexps.format)){a=i[o].format;break}a=a||t._.numberToFormat,n=a(c,s,r)}return n},value:function(){return this._value},input:function(){return this._input},set:function(t){return this._value=Number(t),this},add:function(t){var r=e.correctionFactor.call(null,this._value,t);return this._value=e.reduce([this._value,t],function(t,e,o,n){return t+Math.round(r*e)},0)/r,this},subtract:function(t){var r=e.correctionFactor.call(null,this._value,t);return this._value=e.reduce([t],function(t,e,o,n){return t-Math.round(r*e)},Math.round(this._value*r))/r,this},multiply:function(t){return this._value=e.reduce([this._value,t],function(t,r,o,n){var a=e.correctionFactor(t,r);return Math.round(t*a)*Math.round(r*a)/Math.round(a*a)},1),this},divide:function(t){return this._value=e.reduce([this._value,t],function(t,r,o,n){var a=e.correctionFactor(t,r);return Math.round(t*a)/Math.round(r*a)}),this},difference:function(e){return Math.abs(t(this._value).subtract(e).value())}},t.register("locale","en",{delimiters:{thousands:",",decimal:"."},abbreviations:{thousand:"k",million:"m",billion:"b",trillion:"t"},ordinal:function(t){var e=t%10;return 1==~~(t%100/10)?"th":1===e?"st":2===e?"nd":3===e?"rd":"th"},currency:{symbol:"$"}}),t.register("format","bps",{regexps:{format:/(BPS)/,unformat:/(BPS)/},format:function(e,r,o){var n,a=t._.includes(r," BPS")?" ":"";return e*=1e4,r=r.replace(/\s?BPS/,""),n=t._.numberToFormat(e,r,o),t._.includes(n,")")?(n=n.split(""),n.splice(-1,0,a+"BPS"),n=n.join("")):n=n+a+"BPS",n},unformat:function(e){return+(1e-4*t._.stringToNumber(e)).toFixed(15)}}),r={base:1e3,suffixes:["B","KB","MB","GB","TB","PB","EB","ZB","YB"]},o={base:1024,suffixes:["B","KiB","MiB","GiB","TiB","PiB","EiB","ZiB","YiB"]},n=r.suffixes.concat(o.suffixes.filter(function(t){return r.suffixes.indexOf(t)<0})),a=n.join("|"),a="("+a.replace("B","B(?!PS)")+")",t.register("format","bytes",{regexps:{format:/([0\s]i?b)/,unformat:new RegExp(a)},format:function(e,n,a){var i,c,s,l,u=t._.includes(n,"ib")?o:r,d=t._.includes(n," b")||t._.includes(n," ib")?" ":"";for(n=n.replace(/\s?i?b/,""),c=0;c<=u.suffixes.length;c++)if(s=Math.pow(u.base,c),l=Math.pow(u.base,c+1),null===e||0===e||e>=s&&e<l){d+=u.suffixes[c],s>0&&(e/=s);break}return i=t._.numberToFormat(e,n,a),i+d},unformat:function(e){var n,a,i=t._.stringToNumber(e);if(i){for(n=r.suffixes.length-1;n>=0;n--){if(t._.includes(e,r.suffixes[n])){a=Math.pow(r.base,n);break}if(t._.includes(e,o.suffixes[n])){a=Math.pow(o.base,n);break}}i*=a||1}return i}}),t.register("format","currency",{regexps:{format:/(\$)/},format:function(e,r,o){var n,a,i,c=t.locales[t.options.currentLocale],s={before:r.match(/^([\+|\-|\(|\s|\$]*)/)[0],after:r.match(/([\+|\-|\)|\s|\$]*)$/)[0]};for(r=r.replace(/\s?\$\s?/,""),n=t._.numberToFormat(e,r,o),e>=0?(s.before=s.before.replace(/[\-\(]/,""),s.after=s.after.replace(/[\-\)]/,"")):e<0&&!t._.includes(s.before,"-")&&!t._.includes(s.before,"(")&&(s.before="-"+s.before),i=0;i<s.before.length;i++)switch(a=s.before[i],a){case"$":n=t._.insert(n,c.currency.symbol,i);break;case" ":n=t._.insert(n," ",i+c.currency.symbol.length-1)}for(i=s.after.length-1;i>=0;i--)switch(a=s.after[i],a){case"$":n=i===s.after.length-1?n+c.currency.symbol:t._.insert(n,c.currency.symbol,-(s.after.length-(1+i)));break;case" ":n=i===s.after.length-1?n+" ":t._.insert(n," ",-(s.after.length-(1+i)+c.currency.symbol.length-1))}return n}}),t.register("format","exponential",{regexps:{format:/(e\+|e-)/,unformat:/(e\+|e-)/},format:function(e,r,o){var n,a="number"!=typeof e||t._.isNaN(e)?"0e+0":e.toExponential(),i=a.split("e");return r=r.replace(/e[\+|\-]{1}0/,""),n=t._.numberToFormat(Number(i[0]),r,o),n+"e"+i[1]},unformat:function(e){var r=t._.includes(e,"e+")?e.split("e+"):e.split("e-"),o=Number(r[0]),n=Number(r[1]);return n=t._.includes(e,"e-")?n*=-1:n,t._.reduce([o,Math.pow(10,n)],function(e,r,o,n){var a=t._.correctionFactor(e,r),i=e*a*(r*a)/(a*a);return i},1)}}),t.register("format","ordinal",{regexps:{format:/(o)/},format:function(e,r,o){var n,a=t.locales[t.options.currentLocale],i=t._.includes(r," o")?" ":"";return r=r.replace(/\s?o/,""),i+=a.ordinal(e),n=t._.numberToFormat(e,r,o),n+i}}),t.register("format","percentage",{regexps:{format:/(%)/,unformat:/(%)/},format:function(e,r,o){var n,a=t._.includes(r," %")?" ":"";return t.options.scalePercentBy100&&(e*=100),r=r.replace(/\s?\%/,""),n=t._.numberToFormat(e,r,o),t._.includes(n,")")?(n=n.split(""),n.splice(-1,0,a+"%"),n=n.join("")):n=n+a+"%",n},unformat:function(e){var r=t._.stringToNumber(e);return t.options.scalePercentBy100?.01*r:r}}),t.register("format","time",{regexps:{format:/(:)/,unformat:/(:)/},format:function(t,e,r){var o=Math.floor(t/60/60),n=Math.floor((t-60*o*60)/60),a=Math.round(t-60*o*60-60*n);return o+":"+(n<10?"0"+n:n)+":"+(a<10?"0"+a:a)},unformat:function(t){var e=t.split(":"),r=0;return 3===e.length?(r+=60*Number(e[0])*60,r+=60*Number(e[1]),r+=Number(e[2])):2===e.length&&(r+=60*Number(e[0]),r+=Number(e[1])),Number(r)}}),t},o=a,n="function"==typeof o?o.call(e,r,e,t):o,void 0===n||(t.exports=n)}});
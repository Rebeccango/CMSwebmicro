@php
use App\Http\Controllers\ShippingController;
@endphp
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
@stop

@section('page_header')
<h1 class="page-title">
  <i class="{{ $dataType->icon }}"></i> @if(isset($dataTypeContent->id)){{ 'Edit' }}@else{{ 'New' }}@endif
  {{ $dataType->display_name_singular }}
</h1>
@stop

@section('content')

@php
\Stripe\Stripe::setApiKey(env('STRIPE_API_KEY'));
$shipping = (new ShippingController())->eShipperOrderInfoRequest($dataTypeContent->shipment_id);

$charge = \Stripe\Charge::retrieve($dataTypeContent->stripe_id);

$parcels = DB::table("shipments")->where("order_id",'=',$dataTypeContent->order_id)->get();

$shipments = array();
foreach($parcels as $parcel)
{
$box = DB::table("packaging_boxes")->where('id','=',$parcel->box_id)->first();

$shipmentItems = ($parcel->items);

$shippo_data[] = (object)["parcel"=>$parcel,
// "sParcel"=>
// Shippo_Parcel::retrieve($parcel->parcel_id), "transaction"=>
// Shippo_Transaction::retrieve($parcel->transaction_id),
"box"=>$box,
"items"=>$shipmentItems
];
}
$totalParcels = count($shippo_data);
//
// $shippo_data = (object)$shippo_data;
// $shipment = Shippo_Shipment::retrieve($dataTypeContent->shipment_id);

@endphp

<div class="page-content container-fluid">
  <form class="form-edit-add" role="form"
    action="@if(isset($dataTypeContent->id)){{ route('voyager.orders.update', $dataTypeContent->id) }}@else{{ route('voyager.orders.store') }}@endif"
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
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="fas fa-boxes"></i> Shipping & Billing Details
            </h3>
            <div class="panel-actions">
              <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
            </div>
          </div>
          <div class="panel-body">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h4>Shipping Details</h4>
              <table class="table-striped table table-condensed table-sm" style="width:100%; font-size:13px"
                cellpadding="20">
                <tr>
                  <td>
                    <strong>Name:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->ship_firstname}} {{$dataTypeContent->ship_lastname}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Address:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->ship_address_1}}
                  </td>
                </tr>
                @if($dataTypeContent->ship_address_2 !== "")
                <tr>
                  <td>
                    <strong>Address Line 2:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->ship_address_2}}
                  </td>
                </tr>
                @endif
                <tr>
                  <td>
                    <strong>City:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->ship_city}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Province:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->ship_province}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Postal Code:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->ship_postal}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Country:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->ship_country}}
                  </td>
                </tr>
                <tr>
                  <td>
                    Phone:
                  </td>
                  <td>
                    {{ $dataTypeContent->ship_tel}}
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h4>Billing Details</h4>
              <table class="table-striped table table-condensed table-sm" style="width:100%; font-size:13px"
                cellpadding="20">
                <tr>
                  <td>
                    <strong>Name:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->bill_firstname}} {{$dataTypeContent->bill_lastname}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Address:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->bill_address_1}}
                  </td>
                </tr>
                @if($dataTypeContent->bill_address_2 !== "")
                <tr>
                  <td>
                    <strong>Address Line 2:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->bill_address_2}}
                  </td>
                </tr>
                @endif
                <tr>
                  <td>
                    <strong>City:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->bill_city}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Province:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->bill_province}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Postal Code:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->bill_postal}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Country:</strong>
                  </td>
                  <td>
                    {{$dataTypeContent->bill_country}}
                  </td>
                </tr>
                <tr>
                  <td>
                    Phone:
                  </td>
                  <td>
                    {{ $dataTypeContent->bill_tel}}
                  </td>
                </tr>
              </table>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <h4>Credit Card Details</h4>
              <table class="table-striped table table-condensed table-sm" style="width:100%; font-size:13px"
                cellpadding="20">
                <tr>
                  <td>
                    <strong>Name:</strong>
                  </td>
                  <td>
                    {{$charge->source->name}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Card:</strong>
                  </td>
                  <td>
                    {{$charge->source->brand}} ····{{$charge->source->last4}}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>Expiry Date:</strong>
                  </td>
                  <td>
                    {{$charge->source->exp_month}}/{{$charge->source->exp_year}}
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">
              <i class="fas fa-boxes"></i> Parcels & Items
              <span class="panel-desc">The Parcels and their respective items for this order</span>
            </h3>
            <div class="panel-actions">
              <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
            </div>
          </div>

          <div class="panel-body">
            @php
            $totalItems = 0;
            foreach($shippo_data as $shipp){
            $totalItems += count($shipp->items);
            }
            @endphp
            <style>
              .trow1 {
                margin: 0;
                width: auto;
                margin-bottom: 20px;
              }

              .trow1 .titem {
                padding: 0px 10px;
              }

              .trow1 .titem:not(:last-child) {
                border-right: 1px solid #ccc;
                padding-left: 0;
              }

              .custom-action {
                right: 10px !important;
              }
            </style>

            <table class="trow1">
              <tr>
                <td class="titem">
                  <strong>Total Parcels:</strong> {{ $totalParcels }}
                </td>
                <td class="titem" style="padding-left: 10px;">
                  <strong>Total Items:</strong> {{ $totalItems  }}
                </td>
                {{-- <td class="titem" style="padding-left: 10px;">
                                  <a class="btn btn-sm btn-success" style="margin:0; font-size: 13px; padding:5px;" href="{{ route('order-label',['orderid'=>$dataTypeContent->shipment_id]) }}"
                target="_blank"><i class="voyager-file-text icon"></i>Print Shipping Label</a>
                </td> --}}
                <td class="titem" style="padding-left:10px;">
                  <strong>Tracking #:</strong> <a href="{{ $dataTypeContent->tracking_url }}"
                    target="_blank">{{ $dataTypeContent->tracking_number }}</a>
                </td>
                <td class="titem">
                  <strong>Status:</strong>
                  {{ $shipping->response['OrderInformationReply']['Status']['@'.'attributes']['statusName'] }}
                </td>
              </tr>
            </table>
            @php
            $i = 0
            @endphp

            @foreach($shippo_data as $shipp)
            {{-- {{ $shipp-> }} --}}
            <div class="panel">
              <div class="panel-heading">
                <div class="panel-title">
                  <table width="100%" style="margin-top:0;">
                    <tr>
                      <td style="width:30px; vertical-align:center; cursor:pointer;" data-toggle="collapse"
                        aria-hidden="true" data-target="#{{ $i }}-parcel">
                        <i class="fas fa-box fa-1x"></i>
                      </td>
                      <td>
                        <span class="badge" data-toggle="tooltip" data-placement="top"
                          title="Number of Items in Parcel">{{count($shipp->items)}}</span>
                      </td>
                      <td>
                        <table>
                          <tr data-toggle="collapse" aria-hidden="true" style="cursor:pointer;"
                            data-target="#{{ $i }}-parcel">
                            <td>
                              @if(isset($shipp->box->reference))
                              <h3 style="margin:0"> {{ $shipp->box->reference }}</h3>
                              @else
                              <h3 style="margin:0"> {{ $shipp->parcel->box_id }}</h3>
                              @endif
                            </td>
                          </tr>
                          <tr data-toggle="collapse" aria-hidden="true" style="cursor:pointer;"
                            data-target="#{{ $i }}-parcel">
                            <td>
                              {{-- <h6 style="margin:0">({{ $shipp->box->outerWidth }}" W x
                              {{ $shipp->box->outerLength }}" L x {{ $shipp->box->outerDepth }}" D - Packed Weight:
                              {{ round($shipp->sParcel->weight,1) . $shipp->sParcel->mass_unit }})</h6> --}}
                            </td>
                          </tr>
                        </table>
                      </td>

                      {{-- <td>
                                            <a href="{{ route('voyager.shipments.edit', $shipp->parcel->id) }}"
                      target="_blank" title="{{ __('voyager.generic.edit') }}" class="btn btn-sm btn-primary edit">
                      <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm"></span>
                      </a>
                      </td> --}}
                    </tr>
                  </table>
                </div>
                <div class="panel-actions  custom-action">
                  <a class="panel-action  voyager-angle-down" data-toggle="collapse" aria-hidden="true"
                    data-target="#{{ $i }}-parcel"></a>
                </div>
              </div>

              <div class="panel-body collapse" id="{{ $i }}-parcel">
                <table class="trow1">
                  <tr>
                    <td class="titem" style="padding-left:10px;">
                      Tracking #: <a href="{{ $dataTypeContent->tracking_url }}"
                        target="_blank">{{ $dataTypeContent->tracking_number }}</a>
                    </td>
                    <td class="titem">
                      Status:
                    </td>
                  </tr>
                </table>
                @php
                $itemQuantities = new StdClass();
                $items = array();
                foreach($shipp->items as $item){
                if(property_exists($itemQuantities, strval($item))){
                $itemQuantities->{strval($item)}++;
                }else{
                $itemQuantities->{strval($item)} = 1;
                $items []=
                DB::table("products_ordered")->where('product_id','=',strval($item))->where('order_id','=',$dataTypeContent->order_id)->first();
                }
                }
                @endphp
                <table class="table table-sm table-striped">
                  <thead>
                    <tr>
                      <th style="width:50px; text-align:center;">Qty</th>
                      <th style="width:70px; text-align:center;"></th>
                      <th>Name</th>
                      <th style="width:50px; text-align:center;">Ind. Weight</th>
                      <th style="width:50px; text-align:center;">Total Weight</th>
                    </tr>
                  </thead>
                  @foreach($items as $item)
                  @php
                  $quantity = $itemQuantities
                  ->{strval($item->product_id)};
                  @endphp
                  <tr>
                    <td style="vertical-align:middle; text-align:center;">
                      {{ $quantity }}
                    </td>
                    <td style="vertical-align:middle; text-align:center;">
                      <img src="{{ asset('storage/'.$item->thumbnail) }}" width="70px" />
                    </td>
                    <td style="vertical-align:middle">
                      {{ $item->title }}
                    </td>
                    <td style="vertical-align:middle; text-align:center;">
                      {{ $item->weight }}lb
                    </td>
                    <td style="vertical-align:middle; text-align:center;">
                      {{ round($item->weight *  $quantity,2)}}lb
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
            @php
            $i++
            @endphp
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <!-- ### DETAILS ### -->
        <div class="panel panel panel-bordered panel-warning">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="icon wb-clipboard"></i> Order Details</h3>
            <div class="panel-actions">
              <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
            </div>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="status">Order Status</label>
              <select class="form-control {{ $dataTypeContent->status =="CANCELLED" ? "disabled" : "" }}"
                {{ $dataTypeContent->status =="CANCELLED" ? 'disabled' : "" }} name="status">
                @if($dataTypeContent->status !="CANCELLED")
                <option value="PROCESSING" @if(isset($dataTypeContent->status) && $dataTypeContent->status ==
                  'PROCESSING'){{ 'selected="selected"' }}@endif>Processing</option>
                <option value="COMPLETED" @if(isset($dataTypeContent->status) && $dataTypeContent->status ==
                  'COMPLETED'){{ 'selected="selected"' }}@endif>Completed</option>
                <option value="PAYMENT" @if(isset($dataTypeContent->status) && $dataTypeContent->status ==
                  'PAYMENT'){{ 'selected="selected"' }}@endif>Payment</option>
                @else
                <option value="CANCELLED" selected>Order Cancelled</option>
                @endif
              </select>
            </div>
            <table class="table table-sm table-striped">
              <tr>
                <td style="vertical-align:middle">
                  <strong>Order ID:</strong>
                </td>
                <td>
                  <table width="100%">
                    <tr>
                      <td>
                        <span>{{ $dataTypeContent->order_id }}</span>
                      </td>
                      <td>
                        <a class="btn btn-sm btn-primary pull-right" target="_blank"
                          href="{{ route('order-invoice', $dataTypeContent->order_id) }}">Printable Invoice</a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Order Date:</strong>
                </td>
                <td>
                  {{ $dataTypeContent->created_at }}
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Payment Status:</strong>
                </td>
                <td>
                  <select class="form-control {{ $dataTypeContent->payment_status =="REFUNDED" ? "disabled" : "" }}"
                    {{ $dataTypeContent->payment_status =="REFUNDED" ? 'disabled' : "" }} name="payment_status">
                    @if($dataTypeContent->payment_status !="REFUNDED")
                    <option value="PROCESSING" @if(isset($dataTypeContent->payment_status) &&
                      $dataTypeContent->payment_status == 'PROCESSING'){{ 'selected="selected"' }}@endif>Processing
                    </option>
                    <option value="COMPLETED" @if(isset($dataTypeContent->payment_status) &&
                      $dataTypeContent->payment_status == 'COMPLETED'){{ 'selected="selected"' }}@endif>Completed
                    </option>
                    @else
                    <option value="REFUNDED" selected>REFUNDED</option>
                    @endif
                  </select>
                </td>
              </tr>
              <td style="vertical-align:middle">
                Shipped
              </td>
              <td>
                <input type="checkbox" name="shipped" class="toggleswitch" data-on="Yes" data-off="No"
                  @if($dataTypeContent->shipped == 1) checked @endif>
              </td>
              <tr>
                <td>
                  <strong>Full Name:</strong>
                </td>
                <td>
                  {{ $dataTypeContent->firstname . " " . $dataTypeContent->lastname }}
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Email:</strong>
                </td>
                <td>
                  <a href="mailto:{{ $dataTypeContent->email }}?Subject=Regarding Order #{{ $dataTypeContent->order_id }} from CAD MicroSolutions Online Store"
                    target="_top">{{ $dataTypeContent->email }}</a>
                </td>
              </tr>
            </table>
            <table class="table table-striped">
              <tr>
                <td>
                  <strong>Subtotal:</strong>
                </td>
                <td>
                  ${{ $dataTypeContent->sub_cost }} CAD
                </td>
              </tr>
              @if($dataTypeContent->coupon != "")
              <tr>
                <td>
                  <strong>Coupon:</strong>
                </td>
                <td>
                  {{ $dataTypeContent->coupon }}
                </td>
              </tr>
              @endif
              <tr>
                <td>
                  <strong>Shipping Cost:</strong>
                </td>
                <td>
                  ${{ $dataTypeContent->shipping_cost }} CAD
                </td>
              </tr>
              <tr>
                <td>
                  <strong>Tax:</strong>
                </td>
                <td>
                  ${{ $dataTypeContent->tax }} CAD
                </td>
              </tr>
              <tr>
                <td>
                  <h5><strong>Total:</strong></h5>
                </td>
                <td>
                  <h5><strong>${{ $dataTypeContent->total_cost }} CAD</strong>
                    <h5>
                </td>
              </tr>
            </table>

            @if($dataTypeContent->shipped != 1)
            <a class="btn btn-lg {{ $dataTypeContent->status !="CANCELLED" ? "btn-danger active" : "btn-default disabled" }}"
              id="cancelRefundOrder" style="margin-bottom: 20px; font-size: 20px; width:100%; padding:10px;"
              target="_blank">REFUND &amp; CANCEL ORDER</a>
            @if($dataTypeContent->refund_id != "" || $dataTypeContent->shippo_refund_id != "")
            <table class="table table-striped">
              @if($dataTypeContent->refund_id != "")
              <tr>
                <td>
                  <strong>Stripe Refund:</strong>
                </td>
                <td>
                  @php
                  $refundStatus = \Stripe\Refund::retrieve($dataTypeContent->refund_id)->status;
                  @endphp
                  {{ $refundStatus == "succeeded" ? "SUCCESS" : $refundStatus}}
                </td>
              </tr>
              @endif

              @if($dataTypeContent->shippo_refund_id != "")
              <tr>
                <td>
                  <strong>Shippo Refund:</strong>
                </td>
                <td>
                  {{Shippo_Refund::retrieve($dataTypeContent->shippo_refund_id)->status}}
                </td>
              </tr>
              @endif
            </table>
            @endif
            @else
            @if($dataTypeContent->returnLabel =="")
            <a class="btn btn-lg {{ $dataTypeContent->shippo_refund_id == "" && $dataTypeContent->returnLabel == "" ? "btn-primary active" : "btn-default disabled" }}"
              id="returnLabel" style="margin-bottom: 20px; font-size: 20px; width:100%; padding:10px;"
              target="_blank">GENERATE RETURN LABEL(S)</a>
            @else
            <a class="btn btn-lg btn-success active" id="printReturnLabels"
              style="margin-bottom: 20px; font-size: 20px; width:100%; padding:10px;" target="_blank">PRINT RETURN
              LABEL(S)</a>
            @endif

            <a class="btn btn-lg {{ $dataTypeContent->refund_id == "" && $dataTypeContent->shippo_refund_id == "" && $dataTypeContent->returnLabel == "" ? "btn-default disabled" : "btn-danger active" }}"
              id="refundOrder" style="margin-bottom: 20px; font-size: 20px; width:100%; padding:10px;"
              target="_blank">REFUND ORDER</a>
            @endif
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary pull-right" style="margin-right: 15px;">
        @if(isset($dataTypeContent->id)){{ 'Update Order' }}@else <i class="icon wb-plus-circle"></i> Create New Post
        @endif
      </button>
    </div>
  </form>
</div>
@stop

@section('javascript')
<script src="{{ voyager_asset('js/slugify.js') }}"></script>
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('.toggleswitch').bootstrapToggle();
    $("#slug").keyup(function () {
      var Text = $(this).val();
      Text = Text.toLowerCase();
      Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
      $(this).val(Text);
    });
    $('#slug').slugify();
    $('#returnLabel').click(function () {
      var $btn = $(this).addClass("disabled");
      $(document.body).css({
        'cursor': 'wait'
      });
      bootbox.confirm({
        title: "Are you sure you want to generate the return labels?",
        message: "Once generated they will automatically be emailed to the clients email address so that they may print them and send the item(s) back. Once they have been returned and the tracking status is DELIVERED, you may refund the order.",
        buttons: {
          confirm: {
            label: 'Yes',
            className: 'btn-success'
          },
          cancel: {
            label: 'No',
            className: 'btn-danger'
          }
        },
        callback: function (result) {
          $(document.body).css({
            'cursor': 'default'
          });
          if (result) {
            $(document.body).css({
              'cursor': 'default'
            });
          } else {
            $(document.body).css({
              'cursor': 'default'
            });
          }
          $btn.removeClass('disabled');
        }
      });
    });
    $('#cancelRefundOrder').click(function () {
      var $btn = $(this).addClass("disabled");
      $(document.body).css({
        'cursor': 'wait'
      });
      bootbox.confirm({
        title: "Refund and Cancel Order?",
        message: "Are you sure you want to refund and cancel this order? Refunding will return the entire total to the credit card associated with the order, and also refund the shipping label charges.",
        buttons: {
          confirm: {
            label: 'Yes',
            className: 'btn-success'
          },
          cancel: {
            label: 'No',
            className: 'btn-danger'
          }
        },
        callback: function (result) {
          if (result) {
            $.ajax({
              url: '{{route('
              refundCancelOrder ',$dataTypeContent->id)}}',
              type: 'POST',
              data: {
                '_token': '{{ csrf_token() }}'
              },
              success: function (result) {
                location.reload();
                if (result.status) {
                  $.notify({
                    message: 'Successfully cancelled and refunded the order! Please refresh page now.'
                  }, {
                    type: 'success',
                    placement: {
                      from: "bottom",
                      align: "right"
                    },
                    onClosed: function () {
                      location.reload();
                    }
                  });
                }
                if (result.errors) {
                  $(document.body).css({
                    'cursor': 'default'
                  });
                  $btn.removeClass('disabled');
                  $.each(result.errors, function ($i, $v) {
                    $.notify({
                      message: $v,
                      icon: 'glyphicon glyphicon-warning-sign',
                    }, {
                      type: 'danger',
                      placement: {
                        from: "bottom",
                        align: "right"
                      }
                    });
                  })
                }
              },
              error: function (result) {}
            });
          } else {
            $(document.body).css({
              'cursor': 'default'
            });
            $btn.removeClass('disabled');
          }
        }
      });
    });
  });
</script>
@stop
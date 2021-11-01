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

    @php
      $order = DB::table("orders")->where("order_id",'=',$dataTypeContent->order_id)->first();

      $shippo = Shippo_Transaction::retrieve($dataTypeContent->transaction_id);

      $shipment = Shippo_Shipment::retrieve($order->shipment_id);

      $parcel = Shippo_Parcel::retrieve($dataTypeContent->parcel_id);

      $box = DB::table("packaging_boxes")->where('id','=',$dataTypeContent->box_id)->first();

      $items = DB::table("products_ordered")->where('order_id','=',$order->order_id)->get();

      $shipmentItems = ($dataTypeContent->items);
    @endphp

    <div class="page-content container-fluid">
        <form role="form" novalidate action="@if(isset($dataTypeContent->id)){{ route('voyager.shipments.update', $dataTypeContent->id) }}@else{{ route('voyager.shipments.store') }}@endif" method="POST" enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-7">
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
                              <i class="fas fa-boxes"></i> Parcel Details
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                          <table class="table" style="margin-bottom:0;">
                            @php
                              $parcels = DB::table('shipments')->where('order_id','=',$order->order_id)->get();
                            @endphp
                            <tr>
                              <td style="vertical-align:middle;">
                                Parcel {{$dataTypeContent->order}} of {{count($parcels)}}
                              </td>
                              <td style="text-align:right">
                                @php
                                  $prevBtn = $dataTypeContent->order > 1;
                                  $nextBtn = $dataTypeContent->order < count($parcels);

                                  $prevLink = "";
                                  if($prevBtn){
                                    $prevLink = route("voyager.shipments.edit",DB::table('shipments')->where('order_id','=',$order->order_id)->where('order','=',$dataTypeContent->order - 1)->pluck('id')[0]);
                                  }
                                  $nextLink = "";
                                  if($nextBtn){
                                    $nextLink = route("voyager.shipments.edit",DB::table('shipments')->where('order_id','=',$order->order_id)->where('order','=',$dataTypeContent->order + 1)->pluck('id')[0]);
                                  }
                                @endphp
                                <a href="{{$prevLink}}" class="btn btn-sm {{ $prevBtn ? "btn-primary" : "btn-default" }}" {{ !$prevBtn ? "disabled" : "" }}><i class="fas fa-chevron-left"></i></a>
                                <a href="{{$nextLink}}" class="btn btn-sm {{ $nextBtn ? "btn-primary" : "btn-default" }}" {{ !$nextBtn ? "disabled" : "" }}><i class="fas fa-chevron-right"></i></a>
                              </td>
                            </tr>
                          </table>
                          <table width="100%" style="margin-top:0;">
                            <tr>
                              <td style="width:60px; vertical-align:center">
                                <i class="fas fa-box fa-3x"></i>
                              </td>
                              <td>
                                <table>
                                  <tr>
                                    <td>
                                      <h3 style="margin:0"> {{ $box->reference }}</h3>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <h4 style="margin:0">({{ $box->outerWidth }}" W x {{ $box->outerLength }}" L x {{ $box->outerDepth }}" D - Packed Weight: {{ round($parcel->weight,1) . $parcel->mass_unit }})</h4>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                           <hr />
                           <h3 class="panel-title" style="padding-left: 0; padding-top:0">
                              Items <span class="badge">{{ count($shipmentItems) }}</span>
                            </h3>
                            <table class="table table-sm table-striped">
                              <thead>
                               <tr>
                                  <th style="width:50px; text-align:center;">Qty</th>
                                  <th style="width:70px; text-align:center;"></th>
                                  <th>Name</th>
                                  <th style="width:50px; text-align:center;">Weight</th>
                               </tr>
                              </thead>
                             @php
                               $itemQuantities = new StdClass();
                               foreach($shipmentItems as $item){
                                 if(property_exists($itemQuantities, strval($item))){
                                   $itemQuantities->{strval($item)}++;
                                 }else{
                                   $itemQuantities->{strval($item)} = 1;
                                 }
                               }
                             @endphp
                             @foreach($items as $item)
                               <tr>
                                 <td style="vertical-align:middle; text-align:center;">
                                  @php echo $itemQuantities->{strval($item->product_id)}
                                  @endphp
                                 </td>
                                 <td style="vertical-align:middle; text-align:center;">
                                   <img src="{{ asset('storage/'.$item->thumbnail) }}"  width="70px"/>
                                 </td>
                                 <td style="vertical-align:middle">
                                   {{ $item->title }}
                                 </td>
                                 <td style="vertical-align:middle; text-align:center;">
                                   {{ $item->weight }}lb
                                 </td>
                               </tr>
                             @endforeach
                         </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-clipboard"></i> Details</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                          <a class="btn btn-lg btn-success" style="margin-bottom: 20px; font-size: 20px; width:100%; padding:10px;" href="{{ $shippo->label_url }}" target="_blank"><i class="voyager-file-text icon"></i>Print Shipping Label</a>
                          <table width="100%" class="table table-sm">
                            <tr>
                              <td style="vertical-align:middle">
                                Shipped
                              </td>
                              <td>
                                <input type="checkbox" name="shipped" class="toggleswitch" data-on="Yes" data-off="No"
                                @if($dataTypeContent->shipped == 1) checked @endif>
                                <button type="submit" class="btn btn-primary">Save</button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Order ID:
                              </td>
                              <td>
                                <a href="{{ route('voyager.orders.edit', $order->id) }}" target="_blank">{{ $dataTypeContent->order_id }}</a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Shipment State:
                              </td>
                              <td>
                                {{ $shippo->object_state }}
                              </td>
                            </tr>
                            <tr>
                              <td>
                                  Tracking #:
                              </td>
                              <td>
                                <a href="{{ $shippo->tracking_url_provider }}" target="_blank">{{ $shippo->tracking_number }}</a>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                Tracking Status:
                              </td>
                              <td>
                                {{ $shippo->tracking_status }}
                              </td>
                            </tr>

                            <tr>
                              <td>
                                Total Packages:
                              </td>
                              <td>
                                {{count($parcels)}}
                              </td>
                            </tr>
                            @if($shippo->eta !="")
                            <tr>
                              <td style="vertical-align:middle">
                                ETA:
                              </td>
                              <td>
                                <small>{{ $shippo->eta }}</small>
                              </td>
                            </tr>
                            @endif
                            @if($shippo->commercial_invoice_url !="")
                            <tr>
                              <td style="vertical-align:middle">
                                Commercial Invoice:
                              </td>
                              <td>
                                <a href="{{ $shippo->commercial_invoice_url }}" target="_blank">View Invoice</a>
                              </td>
                            </tr>
                            @endif
                            <tr>
                              <td>
                                Created On:
                              </td>
                              <td>
                                {{ $dataTypeContent->created_at }}
                              </td>
                            </tr>
                          </table>
                        </div>
                    </div>
                </div>
            </div>


        </form>

    </div>
@stop


@section('javascript')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>

    <script src="{{asset('js/pick-a-color.js')}}"></script>
    script src="{{ voyager_asset('lib/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ voyager_asset('js/voyager_tinymce.js') }}"></script>
    <script src="{{ voyager_asset('js/slugify.js') }}"></script>

      <script type="text/javascript">
          $(function () {
            $('.toggleswitch').bootstrapToggle();
              $('#datetimepicker1').datetimepicker({
                  'format' : "YYYY-MM-DD",
                  'defaultDate' : '{{ $dataTypeContent->entitlement_date }}',
              });
              $("#slug").keyup(function(){
  		    		        var Text = $(this).val();
  		    		        Text = Text.toLowerCase();
  		    		        Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
  		    		        $(this).val(Text);
  						});
              $('#slug').slugify();
          });
      </script>
@stop

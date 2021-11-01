@extends('layouts.layout')
@section('title')
{!! $product_family->name !!} Promotions | CAD MicroSolutions Inc.
@stop
@section('body')
<section class="section-secondary pt-5">
   <div class="container-fluid">
      <div class="content">
         <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <h1>{!! $product_family->name !!} Promotions</h1>
               <div class="lead" style="font-size:18px;">Keep an eye on the latest promotions and save big!</div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-sm-4 mt-md-0">
               @include('layouts.generic_contact_buttons')
            </div>
         </div>
      </div>
   </div>
</section>
{{-- @if(strtolower($product_family->name) === "solidworks")
<section>
   <div class="container">
      <div class="d-flex flex-row row flex-grow-1 flex-wrap align-items-center">
         <div class="col-md-5 pt-0 flex-grow-1 overflow-hidden d-none d-md-flex justify-content-center"><img
               src="https://www.cadmicro.com/storage/uploads/May2021/giftcard.png" alt="Gift Card" title="Gift Card"
               class="img-fluid"></div>
         <div class="col-md-7 text-left d-flex justify-content-center align-items-center">
            <div class="flex flex-column">
               <h3 class="lead mb-4" style="font-size: 28px; font-weight:600">BONUS offer from CAD Micro!</h3>
               <p class="lead">Until June 30th, take advantage of these SOLIDWORKS deals and receive a Canadian Tire gift card on us:</p>
               <ul class="pl-4" style="font-size: 16px;">
                  <li class="mb-2">Spend over $3000CDN before tax – Receive a $100CDN Canadian Tire Gift Card</li>
                  <li class="mb-2">Spend over $6000CDN before tax - Receive a $200 Canadian Tire Gift Card</li>
                  <li class="mb-2">Spend over $9000CDN before tax - Receive a $400 Canadian Tire Gift Card</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<hr />
@endif --}}
<section>
   <div class="container">
      <div id="promotions">
         @if(empty($promotions))
         <div class="card mb-3">
            <p class="section-secondary p-3 m-0">
               For additional information on the current {!! $product_family->name !!} promotions, please give us
               a call or <a href="#" class="btn-dialog" data-toggle="modal" data-target="#contactModal"
                  data-title="Contact an Agent">contact us</a>
            </p>
         </div>
         <div class="card rounded-0 border-bottom-0 mb-0 alert alert-primary">
            <div class="card-block p-4 row ">
               <div class="col-lg-8 align-self-center pl-0">
                  <strong class="h3 mt-0 pt-0 m-0">Currently, there are no {!! $product_family->name !!}
                     promotions.</strong>
               </div>
            </div>
         </div>
         @else
         @foreach($promotions as $i=>$promo)
         <div class="promotion card rounded-0 mb-0 p-4" style="border-style:dashed">
            <div class="card-block">
               <div class="align-middle d-flex h5 mb-0">
                  @if(\Carbon\Carbon::parse($promo->end_at)->diffInDays(\Carbon\Carbon::parse($promo->start_at)) > 10)
                  <div class="badge btn-rounded badge-lg badge-success align-self-start mr-2">NEW!</div>
                  @elseif(\Carbon\Carbon::parse($promo->end_at)->diffInDays(\Carbon\Carbon::parse($promo->start_at)) <
                     5) <div class="badge btn-rounded badge-lg badge-danger align-self-start mr-2">ACT NOW!</div>
               @endif
               <div>
                  <h3 class="m-0">
                     {!! $promo->title !!}
                  </h3>
                  @if($promo->subtitle != "")
                  <h4 class="m-0 h5">
                     {!! $promo->subtitle !!}
                  </h4>
                  @endif
               </div>
            </div>
         </div>
         <hr class="my-4" />
         <div class="promo-content">
            {!! $promo->content !!}
         </div>
         <hr class="my-4" />
         <div class="d-flex small text-sm w-100 justify-content-between align-items-center">
            <div>
               @if(!empty($promo->legal))
               <a href="#" data-toggle="modal" data-target="#terms-{{ $i }}">* Terms & Conditions</a>
               <span class="px-3">|</span>
               @endif
               @if(!empty($promo->end_at))
               <span>Valid Until: {{ \Carbon\Carbon::parse($promo->end_at)->format('M jS, Y') }}</span>
               @endif
               @if(!empty($promo->promo_code))
               <span class="px-3">|</span>
               <span>Promo Code: {{ $promo->promo_code }}</span>
               @endif
            </div>
            @if(!empty($promo->form))
            <div class="text-center align-self-center pull-right">
               <button class="btn btn-md btn-primary btn-dialog btn-rounded" data-toggle="modal"
                  data-target="#promo-{{ $i }}">USE THIS PROMOTION</button>
            </div>
            @endif
         </div>
      </div>
      @push('before-scripts')
      @if(!empty($promo->form))
      <div class="modal fade" tabindex="-1" role="dialog" id="promo-{{ $i }}" aria-labelledby="promo-{{ $i }}">
         <div class="modal-dialog" role="document" style="max-width:700px">
            <div class="modal-content">
               <div class="modal-header">
                  <div class="modal-title h5 mt-0 w-100">{!! $promo->title !!}<br><strong class="h6">Valid Until:
                        {{ \Carbon\Carbon::parse($promo->end_at)->format('M jS, Y') }}</strong>
                  </div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-body py-4 px-2">
                  {!! $promo->form !!}
               </div>
            </div>
         </div>
      </div>
      @endif
      @if(!empty($promo->legal))
      <div class="modal fade" tabindex="-1" role="dialog" id="terms-{{ $i }}" aria-labelledby="terms-{{ $i }}">
         <div class="modal-dialog" role="document" style="max-width:700px">
            <div class="modal-content p-3">
               <div class="modal-header">
                  <div class="modal-title h4 mt-0 w-100">TERMS & CONDITIONS
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                           aria-hidden="true">&times;</span></button>
                  </div>
               </div>
               <div class="modal-body" style="padding:5px; padding-right:0">
                  {!! $promo->legal !!}
               </div>
            </div>
         </div>
      </div>
      @endif
      @endpush
      @endforeach
      @endif
   </div>
</section>
@stop
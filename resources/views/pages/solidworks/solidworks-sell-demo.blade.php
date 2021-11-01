@extends('layouts.layout')
@section('title')
SolidWorks Sell Demo - eCommerce
@stop
@section('meta')
<link rel="canonical" href="{{route('solidworks-sell-demo')}}" />
@stop
@section('description')SOLIDWORKS® Sell is a cloud-based 3D product configuration solution. This Software as a Service
(SaaS) solution embeds into a brand’s website, allows for automatic software enhancements and reduces the need
for custom consulting solutions or additional hardware. Additionally, it lets internal teams, consumers and
other users quickly configure products to show rich variations. @stop
@section('keywords')3D, Design Software, CAD, 3D CAD, SolidWorks, 3D Software, Product Design, Engineering Software, 3D
Design, Design Analysis,Translate, Electrical, Premium, Standard, Professional @stop
@push('after-scripts')
<script>
   $(function(){
      $('iframe').sectionvh();
   })
</script>
@endpush
@section('body')
<iframe src="https://demo.solidworks-sell.com/view/cadmicro" width="100%" class="border-0" style="margin-bottom:-10px; margin-top:-50px;"></iframe>
@stop
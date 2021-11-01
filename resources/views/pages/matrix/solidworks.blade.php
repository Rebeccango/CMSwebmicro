@extends('layouts.layout')
@section('title')
  SolidWorks Feature Matrix
@stop
@section('meta')
  <link rel="canonical" href="{{route('matrix-solidworks')}}"/>
@stop
@section('description')SolidWorks Feature Matrix @stop
@section('keywords') SolidWorks, CAD, Feature, Matrix, Standard, Professional, Premium @stop
@section('body')
<section>
  <div class="container">
    @include('pages.matrix.solidworks-matrix')
  </div>
</section>
@stop

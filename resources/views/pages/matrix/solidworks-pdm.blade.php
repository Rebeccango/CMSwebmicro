@extends('layouts.layout')
@section('title')
  SolidWorks PDM Feature Matrix
@stop
@section('meta')
  <link rel="canonical" href="{{route('matrix-solidworks-pdm')}}"/>
@stop
@section('description')SolidWorks PDM Feature Matrix @stop
@section('keywords')SolidWorks, PDM, CAD, Feature, Matrix, Standard, Professional, Manage, Project, Data, Management @stop
@section('body')
<section>
  <div class="container">
    @include('pages.matrix.solidworks-pdm-matrix')
  </div>
</section>
@stop

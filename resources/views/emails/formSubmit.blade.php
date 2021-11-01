@extends('layouts.email-default')
@section('meta')
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<base href="{{ url('/') }}" />
@stop
@section('imports')
@endsection
@push('head.style')
<style>
   body {
      background: #efefef;
      margin-bottom: 30px;
   }

   main {
      background: #efefef;
      width: 100%;
      height: 100%;
   }

   table {
      border-collapse: separate;
      border-spacing: 2px;
   }

   table td * {
      font-size: 13px;
   }

   .container {
      background: white;
      padding: 15px;
      max-width: 600px;
   }

   tr:nth-child(even) {
      background-color: #f2f2f2;
   }

   .striped {
      background-color: #f2f2f2;
   }

   th,
   td {
      padding: 10px;
      text-align: left;
      vertical-align: middle;
   }
</style>
@endpush

@section('body')
<div class="container" style="margin:0 auto">
   <table class="table table-striped w-100">
      <thead>
         <tr>
            <th>Question</th>
            <th>Response</th>
         </tr>
      </thead>
      @foreach($data as $i => $input)
      @if(!empty($input['label']))
      <tr @if ($i % 2==0) class="striped" @endif>
         <td><strong>{{ $input['label'] ?? "" }}</strong></td>
         <td>{!! $input['value'] ?? "" !!}</td>
      </tr>
      @endif
      @endforeach
   </table>

</div>
@stop
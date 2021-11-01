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
{!! response()->json($data)->getContent() !!}
</div>
@stop
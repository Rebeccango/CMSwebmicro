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
		max-width: 800px;
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

	.w-100 {
		width: 100%;
	}

	.display-4 {
		font-size: 34px;
	}
</style>
@endpush

@section('body')
<div class="container" style="margin:0 auto">

	<h1 class="display-4">Benchmark Request</h1>
	<table class="table table-striped w-100">
		<thead>
			<tr>
				<th scope="col">Question</th>
				<th class="w-100" scope="col">Response</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">Benchmark File URL</th>
				<td><a href="{{$folder_url}}">{{$folder_name}}</a></td>
			</tr>
			@isset($data['firstname'])
			<tr>
				<th scope="row">Firstname</th>
				<td>{{$data['firstname']}}</td>
			</tr>
			@endisset
			@isset($data['lastname'])
			<tr>
				<th scope="row">Lastname</th>
				<td>{{$data['lastname']}}</td>
			</tr>
			@endisset
			@isset($data['email'])
			<tr>
				<th scope="row">Email</th>
				<td>{{$data['email']}}</td>
			</tr>
			@endisset
			@isset($data['phone'])
			<tr>
				<th scope="row">Phone</th>
				<td>{{$data['phone']}}</td>
			</tr>
			@endisset
			@isset($data['company'])
			<tr>
				<th scope="row">Company</th>
				<td>{{$data['company']}}</td>
			</tr>
			@endisset
			@isset($data['province'])
			<tr>
				<th scope="row">Province</th>
				<td>{{$data['province']}}</td>
			</tr>
			@endisset
			@isset($data['city'])
			<tr>
				<th scope="row">City</th>
				<td>{{$data['city']}}</td>
			</tr>
			@endisset
			@isset($data['bm_application_1'])
			<tr>
				<th scope="row">Application / Part Name / Part Description</th>
				<td>{{$data['bm_application_1']}}</td>
			</tr>
			@endisset
			@isset($data['bm_application_2'])
			<tr>
				<th scope="row">Application Type</th>
				<td>{{$data['bm_application_2']}}</td>
			</tr>
			@endisset
			@isset($data['bm_application_3'])
			<tr>
				<th scope="row">Describe the part function and required properties for it to be successful in your intended
					application.</th>
				<td>{{$data['bm_application_3']}}</td>
			</tr>
			@endisset
			@isset($data['bm_application_4'])
			<tr>
				<th scope="row">Stage in the Manufacturing process the part is used.</th>
				<td>{{$data['bm_application_4']}}</td>
			</tr>
			@endisset
			@isset($data['bm_application_5'])
			<tr>
				<th scope="row">Where is the part produced currently.</th>
				<td>{{$data['bm_application_5']}}</td>
			</tr>
			@endisset
			@isset($data['bm_application_6'])
			<tr>
				<th scope="row">Current Process - How is the part currently manufactured?</th>
				<td>{{$data['bm_application_6']}}</td>
			</tr>
			@endisset
			@isset($data['bm_application_7'])
			<tr>
				<th scope="row">Current part material type and why?</th>
				<td>{{$data['bm_application_7']}}</td>
			</tr>
			@endisset
			@isset($data['bm_businessoutcome_1'])
			<tr>
				<th scope="row">Current State (People - Process - Technology)</th>
				<td>{{$data['bm_businessoutcome_1']}}</td>
			</tr>
			@endisset
			@isset($data['bm_businessoutcome_2'])
			<tr>
				<th scope="row">What is the point of failure or challenge/issue with the current part or process?</th>
				<td>{{$data['bm_businessoutcome_2']}}</td>
			</tr>
			@endisset
			@isset($data['bm_businessoutcome_3'])
			<tr>
				<th scope="row">What is the negative consequence or wide-scale business impact of this issue as an outcome of
					the current state?</th>
				<td>{{$data['bm_businessoutcome_3']}}</td>
			</tr>
			@endisset
			@isset($data['bm_businessoutcome_4'])
			<tr>
				<th scope="row">What is the desired state? (future vision state)</th>
				<td>{{$data['bm_businessoutcome_4']}}</td>
			</tr>
			@endisset
			@isset($data['bm_businessoutcome_5'])
			<tr>
				<th scope="row">What is the positive impact to your business unit of printing this part and other parts like it?
				</th>
				<td>{{$data['bm_businessoutcome_5']}}</td>
			</tr>
			@endisset
			@isset($data['bm_capabilities_1'])
			<tr>
				<th scope="row">Explain the solution capabilities that are required to achieve the desired state and the
					positive business outcomes?</th>
				<td>{{$data['bm_capabilities_1']}}</td>
			</tr>
			@endisset
			@isset($data['bm_capabilities_2'])
			<tr>
				<th scope="row">Please give a detailed description of loading / environmental conditions, critical features,
					etc. for this part?</th>
				<td>{{$data['bm_capabilities_2']}}</td>
			</tr>
			@endisset
			@isset($data['bm_capabilities_3'])
			<tr>
				<th scope="row">Are you open to redesigning this part for Additive Manufacturing? If not, why?</th>
				<td>{{$data['bm_capabilities_3']}}</td>
			</tr>
			@endisset
			@isset($data['bm_capabilities_4'])
			<tr>
				<th scope="row">What metrics will be used to indicate how well the printed part meets your required capabilities
					to achieve your
					business outcomes? What does success look like? What are the objective metrics that will be used to evaluate
					the printed
					part?</th>
				<td>{{$data['bm_capabilities_4']}}</td>
			</tr>
			@endisset
			@isset($data['bm_value_1'])
			<tr>
				<th scope="row">Current cost per unit</th>
				<td>{{$data['bm_value_1']}}</td>
			</tr>
			@endisset
			@isset($data['bm_value_2'])
			<tr>
				<th scope="row">Current lead time</th>
				<td>{{$data['bm_value_2']}}</td>
			</tr>
			@endisset
			@isset($data['bm_value_3'])
			<tr>
				<th scope="row">Quantity per month / per year</th>
				<td>{{$data['bm_value_3']}}</td>
			</tr>
			@endisset
			@isset($data['bm_value_4'])
			<tr>
				<th scope="row">Labor rate</th>
				<td>{{$data['bm_value_4']}}</td>
			</tr>
			@endisset
			@isset($data['bm_value_5'])
			<tr>
				<th scope="row">Labor hours</th>
				<td>{{$data['bm_value_5']}}</td>
			</tr>
			@endisset
			@isset($data['bm_value_6'])
			<tr>
				<th scope="row">What is the Total Estimate Value at Stake?</th>
				<td>{{$data['bm_value_6']}}</td>
			</tr>
			@endisset

			{{--
			@foreach ($data as $key => $node)
			<tr>
				<th scope="row">{{$key}}</th>
			<td>{{$node}}</td>
			</tr>
			@endforeach --}}
		</tbody>
	</table>
</div>
@endsection
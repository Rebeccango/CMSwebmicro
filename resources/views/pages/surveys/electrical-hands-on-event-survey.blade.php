@extends('layouts.layout')
@section('title')
SOLIDWORKS Electrical Hands on Test Drive Follow Up Survey
@stop
@section('body')
<section style="margin-top:120px; padding-bottom:0;">
	<div class="content">
		<div class="container-fluid">
			<h1 class="main-title">SOLIDWORKS Electrical Hands on Test Drive Follow Up Survey</h1>
			<h3 style="margin-left:10px;">Answer scale:</h3>
			<table width="100%" class="scaleTable" style="margin-bottom:30px;">
				<tr>
					<td>
						1
					</td>
					<td>
						2
					</td>
					<td>
						3
					</td>
					<td>
						4
					</td>
					<td>
						5
					</td>
				</tr>
				<tr>
					<td colspan="5">
						<div class="scaleBar"></div>
					</td>
				</tr>
				<tr>
					<td>
						Strongly Disagree/Highly Unlikely/Very Disappointed
					</td>
					<td>
						Disagree
					</td>
					<td>
						Neutral
					</td>
					<td>
						Agree
					</td>
					<td>
						Strongly Agree/Highly Likely/Very Satisfied
					</td>
				</tr>
			</table>
			<div pageID="n9o9zn5oeeebdeahg3flkq"></div>
		</div>
	</div>
</section>
@stop

@push('after-styles')
<style>
	.scaleTable {
		text-align: center;
	}

	.scaleTable td {
		width: 20%;
	}

	.scaleTable tr:first-child td {
		font-weight: bold;
		font-size: 20px;
	}

	.scaleTable tr:nth-child(2) td {
		font-size: 14px;
	}

	.scaleBar {
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ff3232+0,fff200+50,2eff00+100 */
		background: #ff3232;
		/* Old browsers */
		background: -moz-linear-gradient(left, #ff3232 0%, #fff200 50%, #2eff00 100%);
		/* FF3.6-15 */
		background: -webkit-linear-gradient(left, #ff3232 0%, #fff200 50%, #2eff00 100%);
		/* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(to right, #ff3232 0%, #fff200 50%, #2eff00 100%);
		/* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff3232', endColorstr='#2eff00', GradientType=1);
		/* IE6-9 */
		display: block;
		width: 100%;
		height: 10px;
		margin: 10px;
	}
</style>
@endpush
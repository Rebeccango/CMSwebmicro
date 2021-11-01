<select class="form-control {{ $row->field }}-select2 multiple" @if($row->required == 1) required @endif
	name="{{ $row->field }}[]"
	data-name="{{ $row->display_name }}"
	multiple="multiple">
	@foreach(\App\MetaTags::where('model', (new \ReflectionClass($dataTypeContent))->getName())->get() as $metatag)
	<option value="{{ $metatag->id }}" @if($dataTypeContent->{$row->field} != null && in_array($metatag->id,
		$dataTypeContent->{$row->field})) selected
		@endif>{{ $metatag->slug }}
	</option>
	@endforeach
</select>
{{-- @dd($dataTypeContent->{$row->field}) --}}
@section('javascript')
@parent
<script type="application/javascript">
	$('.{{ $row->field }}-select2').select2({
	placeholder: "{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}",
	allowClear: true,
	tags: true
	});
</script>
@endsection
{{--
<input type="number" class="form-control" name="{{ $row->field }}" data-name="{{ $row->display_name }}"
	@if($row->required == 1) required @endif
step="any"
placeholder="{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}"
value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif"> --}}
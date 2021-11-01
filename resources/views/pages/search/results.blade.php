@if(isset($suggestions))
  {{ print_r($suggestions) }}
  <br />
  <br />
@endif

@if(isset($results))
  {{ print_r($results) }}
@else
  NO RESULTS
@endif

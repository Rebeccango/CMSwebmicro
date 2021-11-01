<table class="table table-striped">
   <tr>
      <td>URL:</td>
      <td><a href="{!! $url !!}">{!! $url !!}</a></td>
   </tr>

   @if($email)
   <tr>
      <td>User:</td>
      <td>{!! $email !!}</td>
   </tr>
   @endif

   @if($input)
   <tr>
      <td colspan='2'>Form Inputs</td>
   </tr>
   @foreach($input as $key=>$value)
   <tr>
      <td>{!! $key !!}</td>
      <td>{!! $value !!}</td>
   </tr>
   @endforeach
   @endif
</table>

{!! $content !!}
@extends('layouts.blank')
@section('title')
  Thank you for contacting CAD MicroSolutions!
@stop
@section('body')
<section>
  <div class="container-fluid">
    <div class="content">
      <h1 class="main-title wow fadeInTop" data-wow-duration="1s" style="margin-top:0" data-wow-delay="0.2s">@if(isset($_GET['title'])) {{$_GET['title']}} @else Thank you for contacting CAD MicroSolutions! @endif</h1>
      <div >
        <p style="font-size:17px;">
					@if(isset($_GET['body'])) {{$_GET['body']}} @else We will get back to you as soon as possible! @endif
				</p>
      </div>
    </div>
  </div>
</section>
@stop

@push("after-scripts")
<!-- Google Code for Form Filled Conversion Page -->
<script type="text/javascript">
	/* <![CDATA[ */
		var google_conversion_id = 1069215812;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "1FYTCOLvqnEQxODr_QM";
		var google_remarketing_only = false;
		/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt=""
			src="//www.googleadservices.com/pagead/conversion/1069215812/?label=1FYTCOLvqnEQxODr_QM&amp;guid=ON&amp;script=0" />
	</div>
</noscript>
@endpush
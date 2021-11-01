<div class="custom-nav-pills" id="resource-tabs">
  <ul class="nav nav-pills" role="tablist">
    @if(isset($datasheet))
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#resource-tab-datasheet" role="tab">Data Sheets</a>
    </li>
    @endif
    @if(isset($matrix))
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#resource-tab-matrix" role="tab">Matrix</a>
    </li>
    @endif
    @if(isset($whatsnew))
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#resource-tab-whatsnew" role="tab">What's New</a>
    </li>
    @endif
    @if(isset($cases))
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#resource-tab-cases" role="tab">Case Studies</a>
    </li>
    @endif
    @if(isset($brochures))
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#resource-tab-brochures" role="tab">Brochures</a>
    </li>
    @endif
    @if(isset($videos))
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#resource-tab-videos" role="tab">Videos</a>
    </li>
    @endif
    @if(isset($customTabs))
      {{$customTabs}}
    @endif
  </ul>
  <div class="tab-content">
    @if(isset($customPanes))
      {{$customPanes}}
    @endif
    @if(isset($datasheet))
    <div class="tab-pane fade" id="resource-tab-datasheet" role="tabpanel">
      <div class="d-flex flex-wrap">
        {{$datasheet}}
      </div>
    </div>
    @endif
    @if(isset($matrix))
    <div class="tab-pane fade" id="resource-tab-matrix" role="tabpanel">
      <div class="d-flex flex-wrap">
        {!!$matrix!!}
      </div>
    </div>
    @endif
    @if(isset($whatsnew))
    <div class="tab-pane fade" id="resource-tab-whatsnew" role="tabpanel">
      <div class="d-flex flex-wrap">
        {{$whatsnew}}
      </div>
    </div>
    @endif
    @if(isset($cases))
    <div class="tab-pane fade" id="resource-tab-cases" role="tabpanel">
      <div class="d-flex flex-wrap">
        {{$cases}}
      </div>
    </div>
    @endif
    @if(isset($brochures))
    <div class="tab-pane fade" id="resource-tab-brochures" role="tabpanel">
      <div class="d-flex flex-wrap">
        {{$brochures}}
      </div>
    </div>
    @endif
    @if(isset($videos))
    <div class="tab-pane fade" id="resource-tab-videos" role="tabpanel">
      <div class="d-flex flex-wrap">
        {{$videos}}
      </div>
    </div>
    @endif
  </div>
</div>

@push('after-scripts')
<script>
  $(function() {
    var resourcetabActive = $('#resource-tabs li.nav-item .nav-link.active');
    if(resourcetabActive.length == 0) {
      var resourcetabActive = $('#resource-tabs li.nav-item:first-child .nav-link');
    }
    $(resourcetabActive).tab('show');
  })
</script>
@endpush
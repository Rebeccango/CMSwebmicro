<div class="store_bar" >
  <div class="store_bar_content collapse" id="store_bar_collapse">
    <div class="container">
      <div class="row pt-2">
        <div class="col-lg-7">
          <a href="{{route('store')}}" style="text-decoration:none; color:white;" class="mb-1">
            <div class="h4 h4 w-auto d-inline"><i class="fa fa-shopping-basket mr-4" aria-hidden="true"></i><span class="align-middle">BROWSE STORE <span class="beta-badge badge badge-sm badge-secondary" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-trigger="hover" data-content="The CAD MicroSolutions Online Store is currently in Beta. <br>There may be bugs, if you run into any issues please don't hesitate to email us at <a href='mailto:support@cadmicro.com'>support@cadmicro.com</a>">BETA</span></span>
            </div>
          </a>
        </div>
        <div class="col-lg-5">
          <form method="post" id="search-store" class="store-searchbar" action="{{route('store-search1')}}" data-toggle="validator" role="form" novalidate="true">
            <input type="hidden" name="_token" id="_token" value="{{csrf_token()}}" />
            <i class="fa fa-search" aria-hidden="true"></i>
            <div class="form-group required has-error has-danger">
              <div class="input-group">
                <input type="text" class="form-control ml-3" value="{{ session('query') }}" name="search" id="search" placeholder="Search Store"
                  autocomplete="off">
              </div>
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors"></div>
            </div>
          </form>
        </div>
      </div>
      <hr />
      <div class="scrollable h-100">
      <div class="row mr-0">
        <div class="col-lg-3 pr-0">
          <div class="title h5">Shop by Category</div>
          <ul class="nav-link-list ">
						@php
							$categories =  DB::table('categories')
									->where('group','=','store')
									->where('visible','=','1')
									->orderBy('parent_id','desc')
									->get();
							$sorted = $categories;
							foreach($categories as $cat){
								if($cat->parent_id == 1){
									echo '<li class="nav-link"><a href="/store/catalog/'.$cat->slug.'">'.$cat->name.'</a></li>';
								}
							}
						@endphp
          </ul>
        </div>
        <div class="col-lg-9 pl-4" style="border-left: 1px solid rgba(0,0,0,.1);">
          <div class="title h5">Shop by Subcategory</div>
          <div>
            <div class="">
              @php
              $count =  DB::table('categories')
                  ->where('group','=','store')
                  ->where('visible','=','1')
                  ->where('parent_id','=','1')
                  ->count();

              $column_size = 5;
              $sorted = array();

              foreach($categories as $cat){
								if($cat->parent_id == 1){
									foreach($categories as $cat2){

                    if($cat2->parent_id == $cat->id){
                      $sorted []= $cat2;
                    }
                  }
                }
              }
              $j = 0;
              foreach($sorted as $cat){
                if($j % $column_size == 0){
                  if($j > 0){
                    echo '</ul>';
                  }
                  if($j != $count+1){
                    echo '<ul class="col nav-link-list col-lg-3">';
                  }
                }
                echo '<li class="nav-link"><a href="/store/catalog/'.$cat->slug.'">'.$cat->name.'</a></li>';
                $j++;
              }
              @endphp
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <button class="expand_store_bar" type="button" data-toggle="collapse" data-target="#store_bar_collapse" aria-expanded="false" aria-controls="store_bar_collapse">
    <i class="fa fa-bars" aria-hidden="true" style="margin-right:10px"></i>  BROWSE STORE 
    {{-- <span class="beta-badge badge badge-sm badge-secondary" data-container="body" data-toggle="popover" data-placement="right" data-html="true" data-trigger="hover" data-content="The CAD MicroSolutions Online Store is currently in Beta. <br>There may be bugs, if you run into any issues please don't hesitate to email us at <a href='mailto:support@cadmicro.com'>support@cadmicro.com</a>">BETA</span> --}}
 </button>
</div>
@push('after-scripts')
<script>
  var menustorebrowsescroll = $(".store_bar .scrollable").overlayScrollbars({
  resize: "none",
  autoUpdate: true,
});
</script>
@endpush
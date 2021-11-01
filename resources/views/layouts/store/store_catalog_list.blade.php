<div id="catalog_filters_collapse" data-toggle="collapse" data-target="#catalog_filters"><i class="fas fa-filter mr-4"></i> SHOW FILTERS</div>
<div id="catalog_filters" aria-expanded="false" class="collapse">
	<div class="filter-title--section py-0">Search</div>
	<form method="post"  id="catalog-search" class="dark store-searchbar filter-item" action="{{route('store-search1')}}" data-toggle="validator" role="form" novalidate="true">
		<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}" />
		<i class="fa fa-search" aria-hidden="true"></i>
		<div class="form-group required has-error has-danger ml-3 mb-3">
			<div class="input-group">
				<input type="text" class="form-control" value="{{ session('query') }}"name="search" id="search" required placeholder="Search Store" autocomplete="off">
			</div>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
	</form>
	<ul class="product-categories filter-section">
	<div class="filter-title--section">Categories</div>
		@php
			$categories =  DB::table('categories')
					->where('group','=','store')
					->where('parent_id','=','1')
					->where('visible','=','1')
					->get();
			$sorted = $categories;

			foreach($categories as $cat){
				if(isset($current_category)){
					categoryPrint($cat, $current_category);
				}else{
					categoryPrint($cat, null);
				}
			}

			function categoryPrint($cat, $current_category){
				$active = false;
				
				$categories =  DB::table('categories')
						->where('group','=','store')
						->where('parent_id','=',$cat->id)
						->where('visible','=','1')
						->get();
				// $products =  DB::table('products')
				// 		->where('category_id',$cat->id)
				// 		->orderBy('title','desc')
				// 		->get();
				if($current_category != null){
					if($cat->id == $current_category->id){
						$active = true;
					}
					if($cat->id ==$current_category->parent_id){
						$active = true;
					}
					// foreach($products as $prod){
					// 	if($prod->category_id == $current_category->id){
					// 		$active = true;
					// 	}
					// }
					foreach($categories as $catss){
						if($catss->parent_id == $current_category->id){
							$active = true;
						}
					}
					$id = $current_category->id;
					while($id != 1){
						$category=  DB::table('categories')
								->where('group','=','store')
								->where('id','=',$id)
								->first();
						$id = $category->parent_id;
						if($cat->id == $id){
							$active = true;
							break;
						}
					}
				}

				echo '<ul class="main-category '.($active ? "active" : "").'" >
						<li class="filter-item" data-toggle="collapse" data-target="#category_'.$cat->id.'" aria-expanded="'.($active ? "true" : "false").'">
						<a href="/store/catalog/'.$cat->slug.'">'.$cat->name.'</a></li>';
				echo '<ul class="sub-category collapse '.($active ? " show " : "").'" id="category_'.$cat->id.'" aria-expanded="'.($active ? "true" : "false").'">';
						// foreach($products as $product){
						// 	echo '<li class="filter-item"><a  href="/store/catalog/'.$cat->slug.'/'.$product->slug.'">'.$product->title.'</a></li>';
						// }

						foreach($categories as $cat2){
							categoryPrint($cat2,$current_category);
						}
						echo '</ul>';
				echo'</ul>';
			}
		@endphp
	</ul>
</div>

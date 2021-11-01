<?php

namespace App\Http\Controllers;

use App\CompanyProduct;
use App\Resource;
use App\ResourceCategory;
use App\ResourceType;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ResourceController extends Controller
{
    public $paginate_size = 15;

    public $query;

    public function __construct(Request $request)
    {
        $this->query = Resource::query();
        $this->filter($request);
    }

    public function resource($id, $slug)
    {
        $resource = $this->query->where('id', $id)->where('slug', $slug)->first();
        if ($resource) {
            if ($resource->status == 0) {
                if (Auth::check()) {
                    if (!Auth::user()->hasPermission('edit_resources')) {
                        abort(404);
                    }
                } else {
                    abort(404);
                }
            }

            $resource->download_link = "";
            if ($resource->url) {
                $resource->download_link = $resource->url;
            } else {
                if ($file = json_decode(trim($resource->file), true)) {
                    $resource->download_link = asset("storage/" . $file[0]['download_link']);
                }
            }
            return view('pages.resources.resource', ['resource' => $resource]);
        }
        abort(404);
    }

    public function file($id, $slug)
    {
        $resource = $this->query->where('id', $id)->where('slug', $slug)->first();

        if ($resource) {
            $resource->download_link = "";
            if ($resource->url) {
                $resource->download_link = $resource->url;
            } else {
                if ($file = json_decode(trim($resource->file), true)) {
                    $resource->download_link = asset("storage/" . $file[0]['download_link']);
                }
            }
            return redirect($resource->download_link);
        }
        abort(404);
    }

    public function index(Request $request)
    {
        $resource_categories = ResourceCategory::where('active', 1)->orderBy('order', 'asc')->get();
        $products = CompanyProduct::all();
        $resource_types = ResourceType::where('status', 1)->get();
        $resource_type_ids = $resource_types->pluck('id')->toArray();

        $resources = $this->query
            ->where('status', 1)
            ->whereIn('resource_type', $resource_type_ids)
            ->get();

        //meta tags
        $tag_filters = Resource::query();
        $tag_filters = $tag_filters->where('status', 1)
            ->whereIn('resource_type', $resource_type_ids);

        $tags = explode(',', $request->input('search'));
        $tags = \App\MetaTags::whereIn('name', $tags)->whereIn('slug', $tags, 'or')->get()->pluck('id')->toArray();
        if (count($tags)) {
            $tag_filters->where(function ($query) use ($tags) {
                $query->where('meta_tags', 'like', '%"' . $tags[0] . '"%');
                array_shift($tags);
                foreach ($tags as $tag) {
                    $query->orWhere('meta_tags', 'like', '%"' . $tag . '"%');
                }
            });

            $tag_filters = $tag_filters->get();
            $append_resources = [];
            foreach($tag_filters as $k => $tag){
                $add = true;
                foreach($resources as $i => $r) {
                    if($r->id === $tag->id)
                    {
                        $add = false;
                        break;
                    }
                }
                if($add){
                    $append_resources[] = $tag;
                }
            }
            foreach($append_resources as $append){
                $resources->push($append);
            }
        }

        $resources = $resources->sortBy('created_at', SORT_REGULAR, true);

        $paginate_results = $this->pagination($resources, $request);

        return view('pages.resources.index', ['resources' => $paginate_results, 'resource_types' => $resource_types, 'categories' => $resource_categories, 'products' => $products]);
    }

    public function pagination($data, Request $request)
    {
        $perPage = $this->paginate_size;
        // $resources = $resources->paginate($this->paginate_size);
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = array_slice($data->toArray(), $perPage * ($currentPage - 1), $perPage);
        $paginator = new LengthAwarePaginator($currentItems, count($data), $perPage, $currentPage, ['path' => $request->path()]);
        $results = $paginator->appends('search', request('search'))
            ->appends('category', request('category'))
            ->appends('product', request('product'))
            ->appends('type', request('type'));

        return $results;
    }

    public function filter(Request $request)
    {
        $filters = $this->query;

        if ($request->has('search')) {
            $search = $request->input('search');

            if ($search != '') {
                // $filters = $filters->where('name', 'like', '%' . $search . '%');
                // $filters = $filters->where('content', 'like', '%' . $search . '%');
                $filters->where(function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%')
                        ->orWhere('content', 'like', '%' . $search . '%');
                });

            }
        }

        if ($request->has('type')) {
            if ($request->input('type') != '') {
                $filters = $filters->where('resource_type', $request->input('type'));
            }
        }

        if ($request->has('category')) {
            if ($request->input('category') != '') {
                $filters = $filters->where('category', $request->input('category'));
            }
        }

        if ($request->has('product')) {
            if ($request->input('product') != '') {
                $filters = $filters->where('company_product_id', $request->input('product'));
            }
        }

        if ($request->has('tags')) {
            if ($request->input('tags') != '') {
                $filters = $filters->where('meta_tags', 'like', '%"' . $request->input('tags') . '"%');
            }
        }

        $this->query = $filters;

        return $filters;
    }
}

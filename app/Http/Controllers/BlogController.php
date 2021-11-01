<?php

namespace App\Http\Controllers;

use DB;
use Route;
use Request;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class BlogController extends Controller
{

  public $paginate_size = 3;


  public function __construct()
  {
  }

  public function searcher(Request $request)
  {
    return redirect()->action('BlogController@search', Request::input('search'));
  }

  public function paginate_size() {
    return $this->paginate_size;
  }

  public function index()
  {
      $results =  DB::table('posts')
                   ->where(function ($query) {
                      $query->where(function ($query) {
                                $query->where('status', "PUBLISHED")
                                      ->whereNull('created_at');
                            })
                      ->orWhere(function ($query) {
                          $query->where('status', "PUBLISHED")
                                ->where('created_at', '<=',date("Y-m-d H:i:s"));
                      });
                    })
                    ->orderBy('created_at', 'DESC')
                    ->paginate($this->paginate_size);
      if(count($results) > 0){
        return view('pages.blog.index', ['posts' => $results]);
      }else {
        return view('pages.blog.missing');
      }
  }

  public function post($postid, $slug=null)
  {
      $post = null;

      if ($slug == "" || is_null($slug)){
        $post = DB::table('posts')
    						->where('id','=',$postid)->first();
        if(is_null($post)){

          $post = DB::table('posts')
                  ->where(function ($query) {
                    $query->where(function ($query) {
                              $query->where('status', "PUBLISHED")
                                    ->whereNull('created_at');
                          })
                    ->orWhere(function ($query) {
                        $query->where('status', "PUBLISHED")
                              ->where('created_at', '<=',date("Y-m-d H:i:s"));
                    });
                  })
									->where('slug','=',$postid)->first();
					if(is_null($post)){
						return view('pages.blog.missing', ['postid'=>$postid,'slug'=>$slug, 'post' => $post]);
					}else{
            $postid= $post->id;
          }
        }
        return redirect()->route('blog-post', [$postid, $post->slug]);
      }

      $slug=strtolower($slug);
      $slug=Str::slug($slug, '-');

      $post = DB::table('posts')
							->where('id','=',$postid)->first();


      if(!is_null($post)){
        if($post->slug != $slug){
          return redirect()->route('blog-post', [$post->id, $post->slug]);
        }

        return view('pages.blog.post', ['postid'=>$postid,'slug'=>$slug, 'post' => $post]);
      }else {
        return view('pages.blog.missing', ['postid'=>$postid,'slug'=>$slug, 'post' => $post]);
      }
  }

  public function postRedirect($postid)
  {
    $post = DB::table('posts')->where('id','=',$postid)->first();
    if(!is_null($post)){
      $this->post($post->id,$post->slug);
    }else{
      return view('pages.blog.missing', ['postid'=>$postid, 'post'=>$post]);
    }
  }

  public function search($query = null)
  {
    if($query != null){
      $results =  DB::table('posts');

      $keywords = preg_split('/[\ \n\,]+/', $query);
      foreach($keywords as $word) {
        $results
        ->where(function ($query) {
            $query->where('status', "PUBLISHED")
                  ->where(function ($query) {
                    $query->where('status', "PUBLISHED")
                          ->orWhere('created_at', '<=',date("Y-m-d H:i:s"));
                  });
        })
        ->where(function ($query) use ($word){
          $query->where('title', 'LIKE', "%$word%")
                ->orWhere('meta_description', 'LIKE', "%$word%")
                ->orWhere('meta_keywords', 'LIKE', "%$word%")
                ->orWhere('body', 'LIKE', "%$word%")
                ->orWhere('created_at', 'LIKE', "%$word%")
                ->orWhere('seo_title', 'LIKE', "%$word%");
         });
      }
      $results = $results
                  ->orderBy('created_at','desc')
                  ->paginate($this->paginate_size());
      return view('pages.blog.search', ['query'=>$query, 'results'=>$results]);
    }else{
      $results =  DB::table('posts')
                     ->where(function ($query) {
                        $query->where('status', "PUBLISHED")
                              ->where(function ($query) {
                                $query->where('status', "PUBLISHED")
                                      ->orWhere('created_at', '<=',date("Y-m-d H:i:s"));
                              });
                    })
                    ->orderBy('created_at','desc')
                    ->paginate($this->paginate_size);

      return view('pages.blog.index', ['posts' => $results]);
    }
  }

  public function category($query)
  {
    $catid = DB::table('categories')->where('slug','=',$query)->pluck('id')->first();
    $results = null;

    if(!$catid){
      return abort(404);
    }

    if($query != "" || !is_null($query)){
        $results =  DB::table('posts')->where('category_id','=',$catid);

        $results = $results
                    ->where('status','=','PUBLISHED')
                    ->orderBy('created_at','desc')
                    ->paginate($this->paginate_size());

    }

    return view('pages.blog.search', ['query'=>$query, 'results'=>$results]);
  }

  public function date_on($date) {

    $results = DB::table('posts');
    $query = "Posted On: " . $date;

    $date = explode('-', $date);

    if (!isset($date[1])){
      $results->whereYear('created_at', '=', $date[0]);
    }else if(isset($date[1]) && !isset($date[2])){
      $results->whereYear('created_at', '=', $date[0])
              ->whereMonth('created_at', '=', $date[1]);
    }else if (isset($date[1]) && isset($date[2])){
      $results->whereYear('created_at', '=', $date[0])
              ->whereMonth('created_at', '=', $date[1])
              ->whereDay('created_at', '=', $date[2]);
    }

    $results = $results
                 ->where(function ($query) {
                    $query->where('status', "PUBLISHED")
                          ->where(function ($query) {
                            $query->where('status', "PUBLISHED")
                                  ->orWhere('created_at', '<=',date("Y-m-d H:i:s"));
                          });
                })
                ->orderBy('created_at','desc')
                ->paginate($this->paginate_size());

    return view('pages.blog.search', ['query'=>$query, 'results'=>$results]);
  }

  public function date_from($date){
    $query = "From: ".$date;

    $date = explode('-', $date);

    $results =  DB::table('posts')
                  ->whereYear('created_at', '>=', $date[0])
                  ->whereMonth('created_at', '>=', (isset($date[1]) ? $date[1] : 1))
                  ->whereDay('created_at', '>=',(isset($date[2]) ? $date[2] : 1))
                  ->where(function ($query) {
                      $query->where('status', "PUBLISHED")
                            ->where(function ($query) {
                              $query->where('status', "PUBLISHED")
                                    ->orWhere('created_at', '<=',date("Y-m-d H:i:s"));
                            });
                  })
                  ->orderBy('created_at','desc')
                  ->paginate($this->paginate_size());

    return view('pages.blog.search', ['query'=>$query, 'results'=>$results]);
  }

  public function date_from_to($date, $date2){
    $query = "From: ".$date." To: ".$date2;

    $date = explode('-', $date);
    $date2 = explode('-', $date2);

    $results =  DB::table('posts')
                  ->whereYear('created_at', '>=', $date[0])
                  ->whereYear('created_at', '<=', $date2[0])
                  ->whereMonth('created_at', '>=', (isset($date[1]) ? $date[1] : 1))
                  ->whereMonth('created_at', '<=', (isset($date2[1]) ? $date2[1] : Date('m')))
                  ->whereDay('created_at', '>=',(isset($date[2]) ? $date[2] : 1))
                  ->whereDay('created_at', '<=', (isset($date2[2]) ? $date2[2] : Date('d')))
                  ->where(function ($query) {
                      $query->where('status', "PUBLISHED")
                            ->where(function ($query) {
                              $query->where('status', "PUBLISHED")
                                    ->orWhere('created_at', '<=',date("Y-m-d H:i:s"));
                            });
                  })
                  ->orderBy('created_at','desc')
                  ->paginate($this->paginate_size());

    return view('pages.blog.search', ['query'=>$query, 'date'=>$date, 'date2'=>$date2, 'results'=>$results]);
  }

  public function date_search_on($query = null, $date) {

    $results =  DB::table('posts');

    if ($query == null){
      $query = "Posted On: " . $date;
    }

    $keywords = preg_split('/[\ \n\,]+/', $query);
    foreach($keywords as $word) {
      $results->where('posts.title', 'LIKE', "%$word%")
      ->orWhere('posts.meta_description', 'LIKE', "%$word%")
      ->orWhere('posts.meta_keywords', 'LIKE', "%$word%")
      ->orWhere('posts.body', 'LIKE', "%$word%")
      ->orWhere('posts.created_at', 'LIKE', "%$word%")
      ->orWhere('posts.seo_title', 'LIKE', "%$word%");
    }

    $date = explode('-', $date);
    if (!isset($date[1])){
      $results->whereYear('created_at', '=', $date[0]);
    }else if(isset($date[1]) && !isset($date[2])){
      $results->whereYear('created_at', '=', $date[0])
              ->whereMonth('created_at', '=', $date[1]);
    }else if (isset($date[1]) && isset($date[2])){
      $results->whereYear('created_at', '=', $date[0])
              ->whereMonth('created_at', '=', $date[1])
              ->whereDay('created_at', '=', $date[2]);
    }

    $results = $results->where(function ($query) {
                        $query->where('status', "PUBLISHED")
                              ->where(function ($query) {
                                $query->where('status', "PUBLISHED")
                                      ->orWhere('created_at', '<=',date("Y-m-d H:i:s"));
                              });
                        })
                        ->orderBy('created_at','desc')
                        ->paginate($this->paginate_size());

    return view('pages.blog.search', ['query'=>$query, 'date'=>$date, 'results'=>$results]);
  }

  public function date_search_from($query = null, $date) {

    $results = DB::table('posts');

    if ($query == null){
      $query = "Posted On: " . $date;
    }else {
      $query = $query." Posted On: " . $date;
      $keywords = preg_split('/[\ \n\,]+/', $query);
      foreach($keywords as $word) {
        $results->where('posts.title', 'LIKE', "%$word%")
        ->orWhere('posts.meta_description', 'LIKE', "%$word%")
        ->orWhere('posts.meta_keywords', 'LIKE', "%$word%")
        ->orWhere('posts.body', 'LIKE', "%$word%")
        ->orWhere('posts.created_at', 'LIKE', "%$word%")
        ->orWhere('posts.seo_title', 'LIKE', "%$word%");
      }
    }

    $date = explode('-', $date);

    $results = $results->whereYear('created_at', '>=', $date[0])
                  ->whereMonth('created_at', '>=', (isset($date[1]) ? $date[1] : 1))
                  ->whereDay('created_at', '>=',(isset($date[2]) ? $date[2] : 1))
                  ->where(function ($query) {
                      $query->where('status', "PUBLISHED")
                            ->where(function ($query) {
                              $query->where('status', "PUBLISHED")
                                    ->orWhere('created_at', '<=',date("Y-m-d H:i:s"));
                            });
                  })
                  ->orderBy('created_at','desc')
                  ->paginate($this->paginate_size());

    return view('pages.blog.search', ['query'=>$query, 'date'=>$date, 'results'=>$results]);
  }

  public function date_search_from_to($query = null, $date, $date2) {
    $results = DB::table('posts');

    if ($query == null){
      $query = "Posted On: " . $date;
    }else {
      $query = $query." Posted On: " . $date;
      $keywords = preg_split('/[\ \n\,]+/', $query);
      foreach($keywords as $word) {
        $results->where('posts.title', 'LIKE', "%$word%")
        ->orWhere('posts.meta_description', 'LIKE', "%$word%")
        ->orWhere('posts.meta_keywords', 'LIKE', "%$word%")
        ->orWhere('posts.body', 'LIKE', "%$word%")
        ->orWhere('posts.created_at', 'LIKE', "%$word%")
        ->orWhere('posts.seo_title', 'LIKE', "%$word%");
      }
    }

    $date = explode('-', $date);
    $date2 = explode('-', $date2);

    $results = $results->whereYear('created_at', '>=', $date[0])
                  ->whereYear('created_at', '<=', $date2[0])
                  ->whereMonth('created_at', '>=', (isset($date[1]) ? $date[1] : 1))
                  ->whereMonth('created_at', '<=', (isset($date2[1]) ? $date2[1] : Date('m')))
                  ->whereDay('created_at', '>=',(isset($date[2]) ? $date[2] : 1))
                  ->whereDay('created_at', '<=', (isset($date2[2]) ? $date2[2] : Date('d')))
                  ->where(function ($query) {
                      $query->where('status', "PUBLISHED")
                            ->where(function ($query) {
                              $query->where('status', "PUBLISHED")
                                    ->orWhere('created_at', '<=',date("Y-m-d H:i:s"));
                            });
                  })
                  ->orderBy('created_at','desc')
                  ->paginate($this->paginate_size());

    return view('pages.blog.search', ['query'=>$query, 'date'=>$date, 'results'=>$results]);
  }
}

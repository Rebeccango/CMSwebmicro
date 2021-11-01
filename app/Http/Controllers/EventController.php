<?php

namespace App\Http\Controllers;

use DB;
use Route;
use Request;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class EventController extends Controller
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
                    ->where('status','=','PUBLISHED')
                    ->orderBy('created_at','desc')
                    ->paginate($this->paginate_size);

      if(count($results) > 0){
        return view('pages.blog.index', ['posts' => $results]);
      }else {
        return view('pages.blog.missing');
      }
  }

  public function post($postid)
  {
      $postid=strtolower($postid);
      $postid=Str::slug($postid, '-');
      $post = DB::select('select * from posts where slug=:slug LIMIT 1', ['slug'=>$postid]);
      if(count($post) > 0){
        return view('pages.blog.post', ['postid'=>$postid, 'post' => $post[0]]);
      }else {
        return view('pages.blog.missing', ['postid'=>$postid]);
      }
  }

  public function search($query)
  {

    $results =  DB::table('posts');

    $keywords = preg_split('/[\ \n\,]+/', $query);
    foreach($keywords as $word) {
      $results->where('posts.title', 'LIKE', "%$word%")
      ->orWhere('posts.meta_description', 'LIKE', "%$word%")
      ->orWhere('posts.meta_keywords', 'LIKE', "%$word%")
      ->orWhere('posts.body', 'LIKE', "%$word%")
      ->orWhere('posts.created_at', 'LIKE', "%$word%")
      ->orWhere('posts.seo_title', 'LIKE', "%$word%");
    }

    $results = $results
                ->where('status','=','PUBLISHED')
                ->orderBy('created_at','desc')
                ->paginate($this->paginate_size());
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
                ->where('posts.status','=','PUBLISHED')
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
                  ->where('posts.status','=','PUBLISHED')
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
                  ->where('posts.status','=','PUBLISHED')
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

    $results = $results->where('posts.status','=','PUBLISHED')
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
                  ->where('posts.status','=','PUBLISHED')
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
                  ->where('posts.status','=','PUBLISHED')
                  ->orderBy('created_at','desc')
                  ->paginate($this->paginate_size());

    return view('pages.blog.search', ['query'=>$query, 'date'=>$date, 'results'=>$results]);
  }
}

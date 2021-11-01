<?php
namespace App\Http\Controllers;

use Log;
use DB;
use Redirect;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Request;
use Route;
use Input;
use URL;
use File;

class VideosController extends Controller
{
	public function get_videos(){
    $videos = DB::table('videos')->where('status','1')->orderBy('published_on','asc')->paginate(1);
    return view('pages.videos.videos')->with('videos',$videos);
  }

  public function get_video_id($videoid){
    $video = DB::table('videos')->where('id','=',$videoid)->first();

    if($video){
      return redirect()->route('video', [$video->id, $video->slug]);
    }else{
      $video = DB::table('videos')->where('slug','=',$videoid)->first();
      if($video){
        return redirect()->route('video', [$video->id, $video->slug]);
      }
      return view('pages.videos.videonotfound');
    }
  }

  public function get_video($videoid = null, $slug = null){
    $video = DB::table('videos')->where('id','=',$videoid)->orWhere('slug','=',$videoid)->first();

    if($video){
      if($slug != $video->slug){
        return redirect()->route('video', [$video->id, $video->slug]);
      }
			$related = DB::table('videos')->where('id',
			'<>', $video->id)->where('title', 'like', $video->title)->orWhere('body', 'like', $video->body)->orderBy('title','desc')->take(3)->get();

			$category =  DB::table('categories')->where('id','=',$video->category_id)->first();

      return view('pages.videos.video')->with(['video' => $video, 'related' =>$related , 'current_category'=> $category]);
    }else{
      return view('pages.videos.videonotfound');
    }
  }

  public function get_videos_category($categoryid)
  {
      $videos = collect();
			$categories = collect();
			$cats = array();

      $category = DB::table('categories')
      ->where('group','=','videos')
      ->orWhere('slug','=',$categoryid);
      $mainCat = $category->get();
      $mainId = $category->first()->id;

			$cats[] = $mainId;

      if($mainCat){
        $parent_id = $mainId;
        while(true){
          $parent = DB::table('categories')->where('group','=','videos')->where('parent_id','=',$parent_id)->first();
          if($parent){
            $parent_id = $parent->id;
						$cats[]=$parent_id;
          }else{
            break;
          }
        }

				$categories = DB::table('categories')
	      ->where('group','=','videos')->whereIn('id',$cats)->get();

				$videos = DB::table('videos');

				if(Input::get('search') != null){
					$videos= $videos->where('title', 'LIKE', '%'. Input::get('search') .'%')
				->orWhere('body', 'LIKE', '%'. Input::get('search') .'%');
				}

				$videos = $videos->whereIn('category_id',$cats)
				->paginate(1);
     }
    return view('pages.videos.videos')->with(['videos'=>$videos,'mainCat'=>$mainCat,'categories'=>$categories]);
  }
}

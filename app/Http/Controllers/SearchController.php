<?php
namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Log;
use DB;
use Redirect;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Request;
use Route;
use Input;
use URL;
use File;

class SearchController extends Controller
{
  public function search($string = ""){
    if($string != ""){
      $results = DB::table('pages')
      ->where('body', 'LIKE', '%'.$string.'%')
      ->orWhere('body', 'LIKE', '%'.$string.'%')
      ->get();
      if($results->count() > 0) {
        return view('pages.search.results',['results'=>$results, "suggestions"=>$this->suggestions($string)]);
      }
      return view('pages.search.results',['suggestions'=>$this->suggestions($string)]);
    }

    return view('pages.search.results');
  }

  public function suggestions($query){
    $pspell_config = pspell_config_create("en");
    pspell_config_personal($pspell_config, resource_path().'/lang/dictionary/'."custom.pws");
    pspell_config_repl($pspell_config, resource_path().'/lang/dictionary/'."custom.repl");
    $pspell_link = pspell_new_config($pspell_config);

    $words = preg_split ("/\s+/", $query);
    $ii = count($words);

    global $spellchecked;
    $spellchecked = "";

    for($i=0;$i<$ii;$i++){

        if (pspell_check($pspell_link, $words[$i]))
        {
            $spellchecked .= $words[$i]." ";
        }
        else
        {
            $erroneous = "yes";
            $suggestions = pspell_suggest($pspell_link, $words[$i]);
            $spellchecked .= $suggestions[0]." ";
        }
    }
    if($erroneous == "yes")
    {
        return $spellchecked;
    }
  }
}

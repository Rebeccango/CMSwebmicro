<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use User;
class Events extends Model
{
    use Searchable;

    protected $primaryKey = "id";

    protected $table = "events";

    public function user()
    {
        return $this->belongsTo('App\User', 'author_id' ,'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Categories', 'category_id' ,'id');
    }


    public function searchableAs(){
        return 'events_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        $user = implode(" ",$this->user()->get(['name'])->first()->toArray());
        //$category = implode(" ",$this->category()->get(['name'])->first()->toArray());
        $array["author_name"] = $user;
        $array["organizer_name"] = $user;
        //$array["category_name"] = $category;

        //dd($array);
        return $array;
    }
}

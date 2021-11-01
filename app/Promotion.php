<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Promotion extends Model
{
   protected $table = 'promotions';
   protected $guarded = [];

   public function scopeActive($query){
      $now = Carbon::now();
      return $query->where('active',1)->whereDate('end_at', '>=', $now)->whereDate('start_at', '<=', $now);
   }

   public function productFamily(){
        return $this->belongsTo('App\Company','product_family','id');
    }
}

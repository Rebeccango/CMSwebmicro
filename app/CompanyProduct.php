<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyProduct extends Model
{
    protected $table = "company_products";
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo('App\Company', 'company_id', 'id');
    }
}

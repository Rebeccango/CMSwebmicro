<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany('App\CompanyProduct', 'id', 'company_product_id');
    }
}

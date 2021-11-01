<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $table = 'exchange_rates';

    protected $guarded = [];
}

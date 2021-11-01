<?php

namespace App;
use App\Events\CategoryDeleted;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categories extends Model
{
    use Notifiable;
    protected $table = 'categories';
    protected $guarded = ['id'];
}

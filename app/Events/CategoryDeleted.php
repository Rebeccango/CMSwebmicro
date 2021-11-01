<?php

namespace App\Events;

use App\Categories;
use Illuminate\Queue\SerializesModels;

class CategoryDeleted
{
    use SerializesModels;

    public $category;

    /**
     * Create a new event instance.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function __construct(Order $category)
    {
        $this->category = $category;
    }
}
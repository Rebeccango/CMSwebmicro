<?php

namespace App\Listeners;

use App\Events\CategoryDeleted;

class SendShipmentNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderShipped  $event
     * @return void
     */
    public function handle(CategoryDeleted $event)
    {
        
        // Access the order using $event->order...
    }
}
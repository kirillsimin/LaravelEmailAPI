<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailSent
{
    public function handle($event)
    {
        $event->data["email"]->update(['sent_at' => \Carbon\Carbon::now()]);
    }
}

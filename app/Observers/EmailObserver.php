<?php

namespace App\Observers;

use App\Services\EmailService;

use App\Models\Email;

class EmailObserver
{
    public function created(Email $email)
    {
        EmailService::send($email);
    }
}

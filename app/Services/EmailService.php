<?php

namespace App\Services;

use App\Models\Email;
use App\Mail\UserEmail;
use GuzzleHttp\Exception\ClientException;

class EmailService
{
    public static function send(Email $email)
    {
        try {
            $sent = \Mail::to($email->user->email)->send(new UserEmail($email));
            dd($sent);
        } catch (\Exception $e) {
            config(['mail.driver' => 'mailgun']);
            // \Mail::to($email->user->email)->send(new UserEmail($email));
        }
    }
}

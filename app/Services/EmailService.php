<?php

namespace App\Services;

use Mail;
use Exception;
use Config;

use App\Models\Email;
use App\Mail\UserEmail;
use GuzzleHttp\Exception\ClientException;

class EmailService
{
    public static function send(Email $email)
    {
        try {
            Config(['mail.driver' => 'mailgun']);
            Mail::to($email->user->emai)->send(new UserEmail($email));
        } catch (Exception $e) {
            Mail::to($email->user->email)->send(new UserEmail($email));
        }
    }
}

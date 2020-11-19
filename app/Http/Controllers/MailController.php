<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail()
    {
        $email = [
            'title'=>'mail form laravel.local',
            'body'=>"THis is for testing html code: Strong",

        ];

        Mail::to('sunbohouse@hotmail.com')->send(new TestMail($email));
        return 'email sent';
    }
}

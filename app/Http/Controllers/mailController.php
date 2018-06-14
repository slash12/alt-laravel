<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;

class mailController extends Controller
{
    public function sendEmail()
    {
        
        Mail::send(new sendMail());
          
    }
}

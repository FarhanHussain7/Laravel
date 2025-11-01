<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
class O20_MailController extends Controller
{
    //
    function SendEmail(){
        $to="farhanhussain81303@gmail.com";
        $msg=" Dummy Email For checking";
        $subject="Code For email Sending";
        Mail::to($to)->send(new WelcomeEmail($msg,$subject));
    }
}

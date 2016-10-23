<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    
    public function contact(Request $request)
    {
        $myEmail = 'haiwind95@gmail.com';
        Mail::to($myEmail)->send(new ContactMail($request));
        return back();
    }
}

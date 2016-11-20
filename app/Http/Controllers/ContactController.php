<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;
use App\Mail\ContactMail;
use Validator;

class ContactController extends Controller
{
    
    public function contact(Request $request)
    {
    	 $messages = [
               'name.required'=>'Choose category for this post',
               'email.required'=>'Enter the tittle for this post',
               'email.email'=>'This email is not match anyone',
               'subject.required'=>'This tittle is already existing',
               'message.required'=>'Enter the content for this post',
               'g-recaptcha-response.required' => 'Enter the captcha',
               'g-recaptcha-response.captcha' =>'Captcha not correct',
        ];
        $validator = Validator:: make($request->all(),[
              'name' => 'required',
              'email'=>'required|email',
              'subject'=>'required',
              'message'=>'required',
              'g-recaptcha-response' => 'required|captcha'
        ], $messages);
        $myEmail = 'hanusoft.dev@gmail.com';
        if ($validator->fails()) {
        	return back()->withErrors($validator)->withInput()->with('status','error');
        } else {
        	Mail::to($myEmail)->send(new ContactMail($request));
        	return back()->with('status','successful');
        }
       
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendcustomeremail;
use Session;
use Illuminate\Mail\Mailable;
class customermailController extends Controller
{
    public function index(Request $get){
      $this->validate($get,[
       'name' => 'required',
       'email' => 'required',
       'subject' => 'required',
       'message' => 'required',
       'captcha' => 'required|captcha',

    ],[
       'name.required' => 'Name is required',
       'email.required' => 'Email is required',
       'subject.required' => 'Subject is required',
       'message.required' => 'Message body is required',
       'captcha.required' => 'Captcha validate required',
       'captcha.captcha' => 'Type Correct Capcha',

    ]);

    $name=$get->name;
    $replay=$get->email;
    $subject=$get->subject;
    $message=$get->message;

  $mailsend=Mail::to('info@clippingpathaid.com')->send(new sendcustomeremail($name,$subject,$replay, $message));


   if($mailsend==true){
     Session::flash('status','value');
       return redirect()->back();
   }else{
     Session::flash('status','value');
       return redirect()->back();
   }

    }
}

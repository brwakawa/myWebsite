<?php

namespace App\Http\Controllers;
use Mail; // we need this
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(Request $request)
    {
      $this->validate($request,
      [
        'fullName'=>'required',
        'email'=>'required|email',
        'message'=>'required',
        
      ]);
//we used - use($request) - because inside brakets we cant use outer variables
      Mail::send('emails.contact-message',
        [
          'msg'=> $request->message
        ],
        function ($mail) use($request)
        {
          $mail->from($request->email, $request->fullName);

          $mail->to('mirzabrwa@gmail.com')->subject('My Website');
        }
      );
      return redirect()->back()->with('flash_message','Thank you for choosing us.');
    }
}
// dont forget to change .eng file : change mail driver to ( log ) and dellete storage/log and in  mail.php
// after confic use php artisan config:cache

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MessageController extends Controller
{
    //
    public function create($data)
    {
        
        
                 
        Mail::to('info@ogxaffaire.com')->send(new \App\Mail\MessageMail($data['name'],$data['textarea'],$data['email']));
        return true;
    }
}

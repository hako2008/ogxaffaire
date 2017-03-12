<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class FeedbackController extends Controller
{
    //
    public function create($data)
    {
        
        
        $feedback = \App\Feedback::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'content' => $data['textarea'],
            
            
            
        ]);
        $feedback->save();
         
        Mail::to('info@ogxaffaire.com')->send(new \App\Mail\FeedbackMail($feedback->id,$data['name'],$data['textarea'],$data['email']));
        //return $comment->id;
    }
}

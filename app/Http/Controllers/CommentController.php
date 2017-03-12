<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Comment;
use App\CommentAnswer;
use App\User;
use Mail;
class CommentController extends Controller
{
    //
    public function create($data)
    {
        
        
        $comment = Comment::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'content' => $data['textarea'],
            'article_id' => $data['articleid'],
            
            
        ]);
        $comment->save();
         
        Mail::to('info@ogxaffaire.com')->send(new \App\Mail\commentmail($comment->id,$data['articleid'],$data['name'],$data['textarea'],$data['email']));
        return $comment->id;
    }

    public function createAnswer($data)
    {
        
        
        $comment = CommentAnswer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'content' => $data['textarea'],
            'comment_id' => $data['comment_id'],
            
            
        ]);
        $comment->save();
        $originalcomment = Comment::findOrFail($data['comment_id']);
        if(User::where('email', $originalcomment->email)->exists()){
          $user = User::where('email','=', $originalcomment->email)->first();
          
          App::setLocale(User::where('email','=', $originalcomment->email)->first()->lang);
        }

        Mail::to($originalcomment->email)->send(new \App\Mail\commentAnswerMail($comment->id,$data['name'],$data['textarea'],$data['email'],$comment->id,App::getLocale()));
        return $comment->id;
    }
}

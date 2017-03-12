<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function commentAnswers(){
        return $this->hasMany('App\CommentAnswer');
    }

    public function user(){
    	return $this->belongsTo('App\Article');
    }

    protected $fillable = [
        'name', 'email', 'content','article_id',
    ];
}

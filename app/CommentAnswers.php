<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentAnswers extends Model
{
    //
    public function comment(){
    	return $this->belongsTo('App\Comment');
    }

    protected $fillable = [
        'name', 'email', '	content',
    ];
}

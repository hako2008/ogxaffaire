<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentAnswer extends Model
{
    //
    public function comment(){
    	return $this->belongsTo('App\Comment');
    }

    protected $fillable = [
        'name', 'email', 'content','comment_id',
    ];
}

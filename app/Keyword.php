<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    //
    

    
    
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }

     public function user(){
    	return $this->belongsTo('App\User');
    }
    
    public $fillable = ['name'];

}

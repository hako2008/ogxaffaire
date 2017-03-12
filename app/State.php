<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Dimsav\Translatable\Translatable;

class State extends Model
{
    //
	use \Dimsav\Translatable\Translatable;


    public $translatedAttributes = ['name'];


    protected $fillable = ['code'];

    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
    


}

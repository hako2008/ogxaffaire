<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Category extends Model
{
    //
    
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'description'];

    public function user(){ 
    	return $this->belongsTo('App\User','author');
    }
    
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
    
   

    protected $fillable = [
        'image', 'relatedto', 'author',
    ];
    
   


}

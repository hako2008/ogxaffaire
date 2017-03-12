<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    //
    
    use \Dimsav\Translatable\Translatable;
    
    public $translatedAttributes = ['title', 'content', 'abstract'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function states()
    {
        return $this->belongsToMany('App\State');
    }
    
    public function keywords()
    {
        return $this->belongsToMany('App\Keyword');
    }

    public function comments(){
        return $this->hasMany('App\Comment')->orderBy('created_at','desc');
    }

    protected $fillable = [
        'image', 'published', 'author','category',
    ];

    

    
}

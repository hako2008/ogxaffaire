<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ArticleTranslation extends Model
{
    use Searchable;

    public $timestamps = false;
    public $fillable = ['title','content','abstract'];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    public function article(){
    	return $this->belongsTo('App\Article');
    }

}

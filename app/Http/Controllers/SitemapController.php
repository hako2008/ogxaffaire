<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    //
    public function categories($lang = null){

    	return response()->view('categoriessitemap',compact('lang'))->header('Content-Type', 'text/xml');
    }

    public function keywords($lang = null){

    	return response()->view('keywordssitemap',compact('lang'))->header('Content-Type', 'text/xml');
    }

    public function articles($lang = null){
        //$lang = 'fr';
    	return response()->view('articlessitemap',compact('lang'))->header('Content-Type', 'text/xml');
    }
}

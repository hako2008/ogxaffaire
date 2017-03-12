<?php
namespace App\lib;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Auth;
use Session;
use Cookie;
use App;
class Lang {
	
	public $lang;

	function __construct($lang = 'ar')
	{
		
		
		
		if (Auth::check())
		{
			$user = Auth::user();  
			$locale = $user->lang;
			App::setLocale($locale);
			Session::set('COOKIElang', $locale);
			Cookie::queue('COOKIElang', $locale,2592000);
			
			
			
			
		}
		else
		{
			if(!empty(Cookie::get('COOKIElang')))
			{
				
				App::setLocale(Cookie::get('COOKIElang'));
			}
		}	/**/	
		
		$this->lang = App::getLocale();
	}

	public function change($langc = 'ar'){

		if (Auth::check())
		{
			$user = Auth::user();  
			$user->lang = $langc;
			$user->save();
			$locale = $user->lang;
			App::setLocale($locale);
			Session::set('COOKIElang', $locale);
			Cookie::queue('COOKIElang', $locale,2592000);
			
			
			
			
		}
		else
		{
			Cookie::queue('COOKIElang', $langc,2592000);
			App::setLocale($langc);
			
		}

		$this->lang = App::getLocale();
	}
}
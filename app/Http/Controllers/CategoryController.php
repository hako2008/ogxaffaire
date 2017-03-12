<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
class CategoryController extends Controller
{
    //

    public function __construct()
    {
        
        
        $this->middleware('auth');
        $this->middleware('admin');

    }

    

    protected function create(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();   
        
        
        
        $category = Category::create([
            'relatedto' => $data['relatedto'],
            
            
        ]);

         //= new State();App\State::where('code', '30')->first();
        
        $user->categories()->save($category);
       

        $category->save();
        

        $category->translateOrNew('ar')->name = $_POST['lang1'];
        $category->translateOrNew('en')->name = $_POST['lang2'];
        $category->translateOrNew('fr')->name = $_POST['lang3'];

        $category->translateOrNew('ar')->description = $_POST['desc1'];
        $category->translateOrNew('en')->description = $_POST['desc2'];
        $category->translateOrNew('fr')->description = $_POST['desc3'];

        $category->save();
        /*echo "<pre>";
        var_dump($data);
        var_dump($user);
        var_dump($category);
        die();*/
        return view('category');
    }

    

    public function index()
    {
        return view('category');
    }
}

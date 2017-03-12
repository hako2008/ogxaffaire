<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;
use App\Keyword;
use App\Log;

class ArticleController extends Controller
{
    //
    


    /*protected function __construct(){
        $lang = new Lang;
    }*/

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    

    protected function create(Request $request)
    {
        
        $data = $request->all();
        $user = Auth::user();
        $log = array();
        //echo '<pre>';
        //preg_replace('/[^\x{0600}-\x{06FF}A-Za-z0-9 ,، !@#$%^&*()]/u','', $data['keywords'])
        $data['keywords'] =preg_replace('/[^\x{0600}-\x{06FF}A-Za-z0-9,،  éèëêÉÈËÊáàäâåÁÀÄÂÅóòöôÓÒÖÔíìïîÍÌÏÎúùüûÚÙÜÛýÿÝøØœŒÆçÇ]/u','', $data['keywords']);
        //var_dump($data['keywords']);
        //var_dump(array_unique(array_filter(explode(",", preg_replace('/\s+/', '',str_replace("،", ",", str_replace(" ", ",", $data['keywords'])))))));

        $ArticleKeywords = array_filter(explode(",", str_replace("،", ",",$data['keywords'])));
        //var_dump($ArticleKeywords);
        //var_dump($ArticleKeywords);
        foreach ($ArticleKeywords as $key => $ArticleKeyword) {
            if(!preg_match('/[^\\p{Common}\\p{Latin}]/u', $ArticleKeyword))
                $ArticleKeywords[$key] = mb_strtolower($ArticleKeyword);
            //echo $key.': '.$ArticleKeyword.' : '.preg_match('/[^\\p{Common}\\p{Latin}]/u', $ArticleKeyword).'<br>';
        }
        $ArticleKeywords = array_unique($ArticleKeywords);
        //var_dump($ArticleKeywords);
        //die();

        $log['submit'] = $data['submit'];
        $log['user']   = $user;
        $log['keywords'] = $ArticleKeywords;
        $log['lang'] = $data['lang'];

         if($data['submit'] == 'publish')
         {
            
            $Article = Article::create([
            'image' => $data['image'],
            'published' => 1,
            
            
            ]);

            
            foreach ($ArticleKeywords as $Keyword)
            {
                           
               if (Keyword::where('name', $Keyword)->exists())
               {
                   $Keyword1 = Keyword::where('name', $Keyword)->first();
                   
                   
                    $Article->Keywords()->attach($Keyword1->id);
                   
                        
                  
                }
                else
                {
                    $Keyword1 = Keyword::create(['name' => $Keyword]);

                    //Keyword::where;
                    //$data['lang'] was sent from the view to the controller post method
                    
                    $Keyword1->save();
                    $user->Keywords()->save($Keyword1);

                    
                    $Article->Keywords()->attach($Keyword1->id);
                   
                }
                
                   
            }

            if(isset($data["categories"]))
            {
                $log['categories'] = $data["categories"];
                foreach ($data["categories"] as $category)
                {
                   
                   $Article->categories()->attach($category);
                }
            }

            if(isset($data["states"]))
            {
                $log['states'] = $data["states"];
                foreach ($data["states"] as $state)
                {
                   
                   $Article->states()->attach($state);
                }
            }
            

            
            $user->articles()->save($Article);
           

            $Article->save();
            

            $Article->translateOrNew($data['lang'])->title = $data['title'];
            $Article->translateOrNew($data['lang'])->content = $data['editor'];
            $Article->translateOrNew($data['lang'])->abstract = $data['abstract'];
            

            $Article->save();

            $log['article'] = $Article;
            $logRecord = Log::create(['json' => json_encode($log)]);
            $user->logs()->save($logRecord);

            return view('articlecreate',['id'=> $Article->id]);

        }
        elseif($data['submit'] == 'savepost'){

            if(isset($data['posteid'])){
                $Article = Article::find($data['posteid']);
                $Article->image = $data['image'];
                $Article->published = 0;
            }else{
                $Article = Article::create([
                'image' => $data['image'],
                'published' => 0,
                
                
                ]);
                $user->articles()->save($Article);
            }
            
            
            // Detach all Keywords from the Article...
            $Article->Keywords()->detach();

            foreach ($ArticleKeywords as $Keyword)
            {
                           
               if (Keyword::where('name', $Keyword)->exists())
               {
                   $Keyword1 = Keyword::where('name', $Keyword)->first();
                   
                   
                    $Article->Keywords()->attach($Keyword1->id);
                   
                }
                else
                {
                    $Keyword1 = Keyword::create(['name' => $Keyword]);
                    //$data['lang'] was sent from the view to the controller post method
                    
                    $Keyword1->save();
                    $user->Keywords()->save($Keyword1);

                    
                    
                    $Article->Keywords()->attach($Keyword1->id);
                   
                }
                
                   
            }

            // Detach all categories from the Article...
            $Article->categories()->detach();

            if(isset($data["categories"]))
            {
                $log['categories'] = $data["categories"];

                foreach ($data["categories"] as $category)
                {
                   
                   $Article->categories()->attach($category);
                }
            }

            // Detach all states from the Article...
            $Article->states()->detach();

            if(isset($data["states"]))
            {
                $log['states'] = $data["states"];

                foreach ($data["states"] as $state)
                {
                   
                   $Article->states()->attach($state);
                }
            }
            

            
            
           

            $Article->save();
            

            $Article->translateOrNew($data['lang'])->title = $data['title'];
            $Article->translateOrNew($data['lang'])->content = $data['editor'];
            $Article->translateOrNew($data['lang'])->abstract = $data['abstract'];
            

            $Article->save();
            $log['article'] = $Article;

            $logRecord = Log::create(['json' => json_encode($log)]);
            $user->logs()->save($logRecord);

            return view('articlecreate',['id'=> $Article->id]);

        }elseif($data['submit'] == 'update'){
            
            $Article = Article::find($data['posteid']);
            $Article->image = $data['image'];
            $Article->published = 1;

            // Detach all Keywords from the Article...
            $Article->Keywords()->detach();
            
            foreach ($ArticleKeywords as $Keyword)
            {
                           
               if (Keyword::where('name', $Keyword)->exists())
               {
                   $Keyword1 = Keyword::where('name', $Keyword)->first();
                   
                   
                    $Article->Keywords()->attach($Keyword1->id);
                   
                }
                else
                {
                    $Keyword1 = Keyword::create(['name' => $Keyword]);
                    //$data['lang'] was sent from the view to the controller post method
                    
                    $Keyword1->save();
                    $user->Keywords()->save($Keyword1);

                    
                    
                    $Article->Keywords()->attach($Keyword1->id);
                   
                }
                
                   
            }

            // Detach all categories from the Article...
            $Article->categories()->detach();

            if(isset($data["categories"]))
            {
                $log['categories'] = $data["categories"];

                foreach ($data["categories"] as $category)
                {
                   
                   $Article->categories()->attach($category);
                }
            }

            // Detach all states from the Article...
            $Article->states()->detach();

            if(isset($data["states"]))
            {
                $log['states'] = $data["states"];

                foreach ($data["states"] as $state)
                {
                   
                   $Article->states()->attach($state);
                }
            }
            

            
            
           

            $Article->save();
            

            $Article->translateOrNew($data['lang'])->title = $data['title'];
            $Article->translateOrNew($data['lang'])->content = $data['editor'];
            $Article->translateOrNew($data['lang'])->abstract = $data['abstract'];
            

            $Article->save();
            $log['article'] = $Article;

            $logRecord = Log::create(['json' => json_encode($log)]);
            $user->logs()->save($logRecord);

            return view('articlecreate',['id'=> $Article->id]);

        }elseif($data['submit'] == 'delete'){
            
            $Article = Article::find($data['posteid']);
            $log['article'] = $Article;

            // Detach all categories from the Article...
            $Article->categories()->detach();

            // Detach all Keywords from the Article...
            $Article->Keywords()->detach();

            // Detach all states from the Article...
            $Article->states()->detach();

            // Detach the Article from his user...
            $Article->user()->dissociate();

            // Remove all translations linked to the Article...
            $Article->deleteTranslations();
            
            // Remove all comments linked to the Article...
            $comments = $Article->comments;
            
            foreach ($comments as $comment) {
                $answers = $comment->commentAnswers;
                foreach ($answers as $answer) {
                    $answer->delete();
                }
                $comment->delete();
            }

            $Article->delete();
            $logRecord = Log::create(['json' => json_encode($log)]);
            $user->logs()->save($logRecord);

            return view('article');
        }

        
       
               
        

        /*echo "<pre>";
        var_dump($data);
        var_dump($user);
        var_dump($category);
        die();*/
    }

    public function index($id,$lang = null)
    {
        
        if(!empty($lang)){
            $getarray = ['id' => $id, 'lang' => $lang];
        }else{
            $getarray = ['id' => $id];
        }
        return view('article',$getarray);
    }
}

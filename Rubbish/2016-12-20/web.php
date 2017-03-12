<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/**/
Route::get('/sitemap.xml', function(){
    return response()->view('sitemap')->header('Content-Type', 'text/xml');
});
Route::get('/articles.xml', 'SitemapController@articles');
Route::get('/categories.xml', 'SitemapController@categories');
Route::get('/keywords.xml', 'SitemapController@keywords');

Route::get('/articles.xml/{lang}', 'SitemapController@articles');
Route::get('/categories.xml/{lang}', 'SitemapController@categories');
Route::get('/keywords.xml/{lang}', 'SitemapController@keywords');

Route::post('/newsletter', function(){    
    
    if(!App\Newsletter::where('email', '=', $_POST['email'])->exists())
        App\Newsletter::create(['email' => $_POST['email']]);
    
    return Redirect::back()->withErrors(['msg', 'success']);
});

Route::get('/categories', function (){
    return view('categories');
});

Route::get('/categories/{lang}', function ($lang){
    return view('categories',array('lang' => $lang));
});


/**/

Route::get('/article/{id}/{lang}', ['uses' =>'ArticleController@index']);





Route::get('/keyword/{id}', function ($id){
    return view('keyword',array('id' => $id));
});
Route::get('/keyword/{id}/{lang}', function ($id,$lang){
    return view('keyword',array('id' => $id,'lang' => $lang));
});

Route::post('/feedback', function(){    
    
    
    app('App\Http\Controllers\FeedbackController')->create($_POST);
    return Redirect::back();
});

Route::post('/contactmessage', function(){    
    
    
    app('App\Http\Controllers\MessageController')->create($_POST);
    return Redirect::back();
});

Route::get('/search', function (){
    return view('search');
});

Route::get('/search/{lang}', function ($lang){
    return view('search',array('lang' => $lang));
});


Route::get('/feedback', function () {
    
    return view('mail.message');
    
});
Route::get('lang/{locale}', function ($locale) {
    $lang = new Lang;
    $lang->change($locale);

    return Redirect::back();
    
});
Route::post('/comment', function(){    
    
    
    return redirect(URL::previous().'#comment'.app('App\Http\Controllers\CommentController')->create($_POST));
});

Route::post('/commentanswer', function(){    
    
    
    return redirect(URL::previous().'#commentanswer'.app('App\Http\Controllers\CommentController')->createAnswer($_POST));
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/about_us/{lang}', function ($lang){
    return view('about_us',array('lang' => $lang));
});

Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/contacts/{lang}', function ($lang){
    return view('contacts',array('lang' => $lang));
});

Route::get('/page/{page}', function ($page){
    return view('home',array('page' => $page));
});

Auth::routes();

Route::get('admin', function () {
    echo "hello admin";
})->Middleware('admin');

Route::get('state', function () {
    return view('state');
});

Route::get('/home', 'HomeController@index');
Route::get('/category', 'CategoryController@index');
Route::post('/category', 'CategoryController@create');

Route::get('/articlecreate/{id}', function ($id){
    return view('articlecreate',array('id' => $id));
})->Middleware('admin');
Route::get('/articlecreate', function (){
    return view('articlecreate');
})->Middleware('admin');

Route::post('/articlecreate', 'ArticleController@create');
Route::post('/articlecreate/{id}', 'ArticleController@create');

Route::get('/404', function (){
    return view('404');
});
Route::get('/article/{id}', ['uses' =>'ArticleController@index']);
Route::get('/article', function (){
    return view('article');
});

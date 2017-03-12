<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;
if(isset($lang) && !empty($lang)){
  
  App::setlocale($lang);

}else{
  $lang = new Lang;
}

$FmyFunctions1 = new MyFunctions;
$categoryList = $FmyFunctions1->fetchCategoryTree();
$states = App\State::all();
?>
<?php

    $showen = 0;
    if((isset($_GET['category'])))
    {
      
      $id = isset($_GET['category']) ? $_GET['category'] : $id;
      try
      {
          
        $keyword = App\Category::findOrFail($id);
        $articles = $keyword->articles;
          
      }
      // catch(Exception $e) catch any exception
      catch(ModelNotFoundException $e)
      {
           
?>
    <div class="col-md-6 md-margin-b-30">
        <div class="row" style="display: table-cell; vertical-align: middle;">
            <div class="text-center col-md-4 col-md-offset-4">
                <div class="error-template text-centre">
                    <h1 class="text-centre">
                        {{trans('messages.oops')}}</h1>
                    <h2 class="text-centre">
                        {{trans('messages.404')}}</h2>
                    <div class="error-details text-centre">
                        {{trans('messages.404error')}}
                    </div>
                    <div class="error-template center-block">
                       <img src="{{ url('images/404-error-page.png') }}" class="img-responsive"> 
                    </div>
                </div>
            </div>
        </div>
                   
                    <!-- End Paginations v3 -->   
    </div>
<?php
       die();
}
  
}else{
  $keyword = new App\Category;
}

?>
@extends('layouts.admin')
@section('header')
<meta name="keywords" content="category search,recherche par categorie,بحث بالفئة,{{$keyword->name}},{{trans('messages.headermetakeyword')}}" />
<meta name="description" content="{{trans('messages.ogxaffaire')}}">
<meta name="designer" content="Hamza KOUADRI">
<meta name="contact" content="info@ogxaffaire.com">
<meta name="copyright" content="Copyright © 2016 Ogxaffaire. All Rights Reserved.">



<meta property="og:title" content="{{$keyword->name}}-{{ config('app.name', 'Laravel') }}" />

<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:image" content="{{ url('/images/logo.png') }}" />
<meta property="og:image:width" content="268">
<meta property="og:image:height" content="249">
<meta name="robots" content="index,follow">

<title>{{$keyword->name}}-{{ config('app.name', 'Laravel') }}</title>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1856175307944184'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1856175307944184&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<style type="text/css">
  @import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

.container { margin-top: 20px; }
.mb20 { margin-bottom: 20px; } 

hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }

.search-result .thumbnail { border-radius: 0 !important; }
.search-result:first-child { margin-top: 0 !important; }
.search-result { margin-top: 20px; }
.search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
.search-result ul { padding-left: 0 !important; list-style: none;  }
.search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
.search-result ul li i { padding-right: 5px; }
.search-result .col-md-7 { position: relative; }
.search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
.search-result h3 > a, .search-result i { color: #248dc1 !important; }
.search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 
.search-result span.plus { position: absolute; right: 0; top: 126px; }
.search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
.search-result span.plus a:hover { background-color: #414141; }
.search-result span.plus a i { color: #fff !important; }
.search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }
/**********************************************************/

</style>
@endsection
@section('content')
<?php

    $showen = 0;
    if(isset($id)){
      

      try
      {
          
        $keyword = App\Category::findOrFail($id);
        $articles = $keyword->articles;
          
      }
      // catch(Exception $e) catch any exception
      catch(ModelNotFoundException $e)
      {
           
?>
    <div class="col-md-6 md-margin-b-30">
        <div class="row" style="display: table-cell; vertical-align: middle;">
            <div class="text-center col-md-4 col-md-offset-4">
                <div class="error-template text-centre">
                    <h1 class="text-centre">
                        {{trans('messages.oops')}}</h1>
                    <h2 class="text-centre">
                        {{trans('messages.404')}}</h2>
                    <div class="error-details text-centre">
                        {{trans('messages.404error')}}
                    </div>
                    <div class="error-template center-block">
                       <img src="{{ url('images/404-error-page.png') }}" class="img-responsive"> 
                    </div>
                </div>
            </div>
        </div>
                   
                    <!-- End Paginations v3 -->   
    </div>
<?php
       die();
}
  
}

?>

<!--section class="breadcrumbs">
    <div style="display: table; max-height: 90px !importent; max-width: 728px;overflow: hidden;" class="container text-centre" align="centre">
        
        <div id='afscontainer1' style="vertical-align: middle;display: table-cell;max-height: 90px !importent; max-width: 728px!importent;"></div>

        <script type="text/javascript" charset="utf-8">

          var pageOptions = {
            "pubId": "pub-9616389000213823", // Make sure this the correct client ID!
            "query": "hotels",
            "adPage": 1
          };

          var adblock1 = {
            "container": "afscontainer1",
            "width": "Auto",
            "number": 1
          };

          _googCsa('ads', pageOptions, adblock1);

        </script>
        
    </div>
</section-->
<div class="container">
  <div class="row">
        <div id="filter-panel" class="filter-panel collapse in">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" role="form" method="GET" action="{{ url('/categories') }}">
                        <!-- form group [rows] -->
                        
                        
                        <span>{{ trans('messages.chooseanothercategory') }}</span>
                        <div class="form-group">                            
                            <select id="pref-orderby" name="category" class="form-control">
                                <option value="">{{ trans('messages.categories') }}</option>
                                
                                  @foreach ($categoryList as $category)
                                  
                                    <?php $categorySplited = $FmyFunctions1->SplitWhitespace($category['name']); ?> 
                                    <option value="{{$category['id']}}" @if(isset($id) && $id == $category['id']) selected @endif>{{ $categorySplited[0] }}{{$categorySplited[1]}}</option>

                                  @endforeach
                                
                            </select>                                
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-default filter-col">
                                <span class="glyphicon glyphicon-search"></span>{{ trans('messages.search') }}
                            </button>  
                        </div>

                    </form>
                </div>
            </div>
        </div>
  </div>
</div>
@if (isset($id))
      
        <hgroup class="mb20 animated-headline-v1 text-left color-black">
          <!-- Animated Headline v1 -->
          <h1 class="animated-headline-title letters type color-black">
            {{ trans('messages.searchresults') }}<span class="color-base"> {{ trans('messages.category') }}: </span>
            

          </h1>
          <h2 class="lead"><strong id="resultscount" class="text-danger"></strong> {{ trans('messages.resultsnumefound') }} <strong class="text-danger">'{{$keyword->name}}'</strong></h2>               
        </hgroup>
        <!-- End Animated Headline v1 -->
        <section class="col-xs-12 col-sm-6 col-md-12">
        @foreach ($articles as $article)
              
            
            @if ($article->published)
              <?php  $showen++; ?>    
            <?php $image= str_replace("/ogxaffaire/public_html/","",$article->image); ?>
            <article class="search-result row">
              <div class="col-xs-12 col-sm-12 col-md-3">
                <a href="{{ url('/article').'/'.$article->id }}" title="Lorem ipsum" class="thumbnail"><img src="data:{{(string)Image::make(url($image))->resize(250, 140)->encode('data-url')}}" /></a>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-2">
                <ul class="meta-search">
                  <li><i class="glyphicon glyphicon-calendar"></i> <span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('d/m/Y')}}</span></li>
                  <li><i class="glyphicon glyphicon-comment"></i> <span>{{$article->comments->count()}}</span></li>
                  <li><i class="glyphicon glyphicon-eye-open"></i> <span>{{$article->views}}</span></li>
                  <li><i class="glyphicon glyphicon-tags"></i> <span>
                    @foreach($article->categories as $key => $category)                      
                        
                        @if($category->relatedto == 0)
                            @if(! ($key == 0) && ($key == $article->categories->count()-1) ){{','.$category->name}}@else{{$category->name}}
                            @endif
                        @endif

                        
                    @endforeach
                  </span></li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                <h3><a href="{{ url('/article').'/'.$article->id }}" title="">{{$article->title}}</a></h3>
                <p>{{$article->abstract}}.</p>            
                        <span class="plus"><a href="{{ url('/article').'/'.$article->id }}" title="{{$article->title}}"><i class="glyphicon glyphicon-plus"></i></a></span>
              </div>
              <span class="clearfix borda"></span>
            </article>
            @endif
        @endforeach
        <input id="showen" type="hidden" value="{{$showen}}">   
      </section>
    </div>
    @endsection

    @section('script')
    <script type="text/javascript" src="{{ url('assets/scripts/components/animated-headline.js') }}"></script>




    <script type="text/javascript">
      $(document).ready(function(){
            $('#resultscount').text($('#showen').val());
        })
    </script>
@endif
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79647465-1', 'auto');
      ga('send', 'pageview');

    </script>

@endsection

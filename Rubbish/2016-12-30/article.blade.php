<?php

use Illuminate\Database\Eloquent\ModelNotFoundException; 
use Illuminate\Http\Response;

if(isset($lang) && !empty($lang)){
  
  App::setlocale($lang);

}else{
  $lang = new Lang;
}

?>
<?php

$FmyFunctions1 = new MyFunctions;
$categoryList = $FmyFunctions1->fetchCategoryTree();

if(isset($id)){
  
  try
  {
      

      $article = App\Article::findOrFail($id);
      if(Auth::guest() || (Auth::user()->admin < 1)){
         $article->views = $article->views +1;
         $article->save();
      }
      
      $articleCategories = $article->categories;
      $articleStates = $article->states;
      $articleKeywords = $article->keywords;
      $articleComments = $article->comments;
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


@extends('layouts.OneSidebarLayout')

@section('header')
<?php
$metakeywords = '';

foreach($articleKeywords as $key => $keyword){
  if(($key > 0) && ($key < $articleKeywords->count()) )
      $metakeywords = $metakeywords.','.$keyword->name;
  else
      $metakeywords = $metakeywords.$keyword->name;
  
}
           
$metaarticleCategories = '';
foreach($articleCategories as $key => $category)
      if(($key > 0) && ($key < $articleCategories->count()) )
      $metaarticleCategories = $metaarticleCategories.','.$category->name;
  else
      $metaarticleCategories = $metaarticleCategories.$category->name;
?>

<meta name="keywords" content="{{$metakeywords}}" />
<meta name="description" content="{{$article->abstract}}">
<meta name="author" content="{{$article->user->name}}">
<meta name="designer" content="Hamza KOUADRI">
<meta name="contact" content="info@ogxaffaire.com">
<meta name="copyright" content="Copyright © 2016 Ogxaffaire. All Rights Reserved.">

<meta property="article:author" content="{{$article->user->name}}">
<meta property="article:section" content="{{$metaarticleCategories}}">
<meta property="article:published_time" content="{{$article->created_at}}"-->

<meta property="og:title" content="{{ $article->title.'-'.config('app.name', 'Laravel') }}" />
<meta property="og:type" content="article">
<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

<meta property="og:url" content="{{Request::url()}}" />
<?php $image= str_replace("/ogxaffaire/public_html/","",$article->image); ?>
   
<meta property="og:image" content="{{url('/'.$image)}}"/>
<meta property="og:image:width" content="{{Image::make(url($image))->width()}}">
<meta property="og:image:height" content="{{Image::make(url($image))->height()}}">
<meta name="robots" content="index,follow">

<title>{{ $article->title.'-'.config('app.name', 'Laravel') }}</title>

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

@endsection

@section('content')
<?php 


?>
<div class="col-md-9 md-margin-b-50">
   <!-- Blog Grid -->
   <article class="blog-grid margin-b-30">
      <!-- Image -->
      <?php
        $imagefile = 'images/articles/article'.$article->created_at.$article->id.'.jpg';
        if (!File::exists($imagefile))
        {
            $image = Image::make(url($image))->resize(847.5, 476.72)->encode('jpg', 75);
            $image->save($imagefile);
        }
        

      ?>
      <img class="img-responsive" src="{{url($imagefile)}}" alt="">

      <!-- End Image -->
      <!-- Blog Grid Content -->
      <div class="blog-grid-content">
         <h2 class="blog-grid-title-lg"><a class="blog-grid-title-link" href="">{{$article->title}}</a></h2>
         <h5>
            <i class="fa fa-calendar" style="margin-right: 5px; margin-left: 5px;" aria-hidden="true"></i>
            <?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $article->created_at)->format('d/m/Y'); ?>
            <i class="fa fa-eye" style="margin-right: 5px; margin-left: 5px;" aria-hidden="true"></i>({{$article->views}}){{trans('messages.views')}}
            <i class="fa fa-comments-o" style="margin-right: 5px; margin-left: 5px;" aria-hidden="true"></i>({{$article->comments->count()}}) {{trans('messages.comments')}}
           
            @if(!Auth::guest() && Auth::user()->admin == 1)
            <a title="{{trans('messages.editarticle')}}" href="{{url('/articlecreate/').'/'.$article->id}}">
               <i class="fa fa-pencil-square-o" style="margin-right: 5px; margin-left: 5px;" aria-hidden="true"></i>
            </a>
            @endif
            
         </h5>
         
        
         <?php echo $article->content ?>
         
         <!-- Blog Grid Tags -->
         <ul class="list-inline blog-sidebar-tags">
            @foreach($articleKeywords as $keyword)
            <li><a class="radius-50" href="{{url('/keyword/').'/'.$keyword->id}}">{{$keyword->name}}</a></li>
            @endforeach
         </ul>
         <!-- End Blog Grid Tags -->
      </div>
      <!-- End Blog Grid Content -->
   </article>
   <!-- End Blog Grid -->
   
   <!-- Blog Comment -->
   <div class="bg-color-white margin-b-30">
      <div class="blog-single-post-content">
         <!-- Heading v1 -->
         <div class="heading-v1 text-center margin-b-50">
            <h2 class="heading-v1-title">{{trans('messages.leavecomment')}}</h2>
         </div>
         <!-- End Heading v1 -->
         <!-- Single Post Comment Form -->
         <div class="blog-single-post-comment-form">
            <!-- Comment Form -->
            <form id="comment-form" class="comment-form-error" action="{{url('/comment')}}" method="post">
               {{ csrf_field() }}
               <input type="hidden" name="articleid" value="{{$article->id}}">
               <div class="row">
                  @if (Auth::guest())
                  <div class="col-md-6 margin-b-30">
                     <input type="text" name="name" class="form-control blog-single-post-form radius-3" placeholder="{{trans('messages.fullname')}} *" required>
                  </div>
                  <div class="col-md-6 margin-b-30">
                     <input type="email" name="email" class="form-control blog-single-post-form radius-3" placeholder="{{trans('messages.email')}} *" name="email" required>
                  </div>
                  @else
                  <h2>{{ Auth::user()->name }}</h1>
                  <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                   <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                  @endif
               </div>
               <!--// end row -->
               <div class="margin-b-30">
                  <textarea  class="form-control blog-single-post-form radius-3" rows="6" placeholder="{{trans('messages.yourmessage')}} *" name="textarea" required></textarea>
               </div>
               <button type="submit" class="btn-dark-brd btn-base-sm footer-v5-btn radius-3">{{trans('messages.publish')}}</button>
            </form>
            <!-- End Comment Form -->
            <hr class="md-hr">
            
            @foreach ($articleComments as $comment)
               @if($comment->commentAnswers->count() > 0 )
                  <!-- Single Post Comment -->
                  <div id = "comment{{$comment->id}}" class="blog-single-post-comment blog-single-post-comment-first-child">
                     <div class="blog-single-post-comment-media">
                        <img class="blog-single-post-comment-media-img radius-circle" src="{{url('/images/Photo_non_disponible.png')}}" alt="">
                     </div>
                     <div class="blog-single-post-comment-content">
                        <h4 class="blog-single-post-comment-username"><a href="#">{{$comment->name}}</a></h4>
                        <small class="blog-single-post-comment-time" title="<?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d/m/Y H:i:s'); ?>"><?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d/m/Y H:i'); ?></small>
                        <p class="blog-single-post-comment-text">{{$comment->content}}</p>
                        <ul class="list-inline blog-single-post-comment-share">
                        <?php $commentAnswers = $comment->commentAnswers; ?>
                           
                           
                           <li class="blog-single-post-comment-share-item">
                              <a id="answer{{$comment->id}}" class="answer blog-single-post-comment-share-link" >
                              {{ trans('messages.answer') }}
                              </a>
                           </li>
                           
                           <li class="blog-single-post-comment-share-item pull-right">
                              <a class="blog-single-post-comment-share-link">
                              ({{$commentAnswers->count()}}) {{ trans('messages.answers') }}
                              </a>
                           </li>
                        </ul>
                        <!-- End Single Post Comment Share -->
                     </div>
                     @foreach ($commentAnswers as $Answer)
                        {{-- expr --}}
                     
                     <!-- Single Post Comment -->
                     <div id = "commentanswer{{$Answer->id}}" class="blog-single-post-comment">
                        <div class="blog-single-post-comment-media">
                           <img class="blog-single-post-comment-media-img radius-circle" src="{{url('/images/Photo_non_disponible.png')}}" alt="">
                        </div>
                        <div class="blog-single-post-comment-content">
                           <h4 class="blog-single-post-comment-username"><a href="#">{{$Answer->name}}</a></h4>
                           <small class="blog-single-post-comment-time" title="<?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d/m/Y H:i:s'); ?>"><?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Answer->created_at)->format('d/m/Y H:i'); ?></small>
                           <p class="blog-single-post-comment-text">{{$Answer->content}}</p>
                           <!-- Single Post Comment Share -->
                           <ul class="list-inline blog-single-post-comment-share">
                              
                              <li  class="blog-single-post-comment-share-item">
                                 <a id="answer{{$comment->id}}" class="answer blog-single-post-comment-share-link">
                                 {{ trans('messages.answer') }}
                                 </a>
                              </li>
                              
                           </ul>
                           <!-- End Single Post Comment Share -->
                        </div>
                     </div>
                     <!-- End Single Post Comment -->
                     @endforeach
                     <div id="hidden{{$comment->id}}" style="display: none;" class="blog-single-post-comment">
                        <form id="form{{$comment->id}}" class="comment-form-error" action="{{url('/commentanswer')}}" method="post">
                           {{ csrf_field() }}
                           <input type="hidden" name="comment_id" value="{{$comment->id}}"/>
                           <!--li id="hidden{{$comment->id}}" class="blog-single-post-comment-share-item"-->
                              @if (Auth::guest())
                              <input type="text" name="name" class="form-control" placeholder="{{trans('messages.lastname')}} *" required>
                              <input type="email" name="email" class="form-control" placeholder="{{trans('messages.email')}} *" name="email" required>
                              @else
                              <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                              <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                              @endif
                              <div class="input-group">                                    
                                 <textarea id="textarea{{$comment->id}}" class="textcomment form-control blog-single-post-form radius-3" rows="6" placeholder="{{ trans('messages.commentanswer') }} *" name="textarea" required></textarea>

                                 <span class="input-group-addon">
                                    <button type="submit" class="btn-dark-brd" style="width: 100%; height: 100%;">{{trans('messages.publish')}}</button>
                                 </span>
                              </div>
                           
                        </form>
                     </div>

                  </div>
                  <!-- End Blog Single Post Comment -->
                  <!-- **************************************************** -->
               @else
                  <!-- Single Post Comment -->
                  <div id = "comment{{$comment->id}}" class="blog-single-post-comment">
                     <div class="blog-single-post-comment-media">
                        <img class="blog-single-post-comment-media-img radius-circle" src="{{url('/images/Photo_non_disponible.png')}}" alt="">
                     </div>
                     <div class="blog-single-post-comment-content">
                        <h4 class="blog-single-post-comment-username"><a>{{$comment->name}}</a></h4>
                        <small class="blog-single-post-comment-time" title="<?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d/m/Y H:i'); ?>"><?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $comment->created_at)->format('d/m/Y H:i'); ?></small>
                        <p class="blog-single-post-comment-text">{{$comment->content}}</p>
                        <!-- Single Post Comment Share -->
                        <ul class="list-inline blog-single-post-comment-share">
                           
                           <li class="blog-single-post-comment-share-item">
                              <a id="answer{{$comment->id}}" class="answer blog-single-post-comment-share-link" style="cursor: pointer;">
                              {{ trans('messages.answer') }}
                              </a>
                           </li>
                           <form id="form{{$comment->id}}" class="comment-form-error" action="{{url('/commentanswer')}}" method="post">
                              {{ csrf_field() }}
                              <input type="hidden" name="comment_id" value="{{$comment->id}}"/>
                              <li id="hidden{{$comment->id}}" style="display: none;" class="blog-single-post-comment-share-item">
                                 @if (Auth::guest())
                                 <input type="text" name="name" class="form-control" placeholder="{{trans('messages.lastname')}} *" required>
                                 <input type="email" name="email" class="form-control" placeholder="{{trans('messages.email')}} *" name="email" required>
                                 @else
                                 <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                 <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                 @endif
                                 <div class="input-group">                                    
                                    <textarea id="textarea{{$comment->id}}" class="textcomment form-control blog-single-post-form radius-3" rows="6" placeholder="{{ trans('messages.commentanswer') }} *" name="textarea" required></textarea>

                                    <span class="input-group-addon">
                                       <button type="submit" class="btn-dark-brd" style="width: 100%; height: 100%;">{{trans('messages.publish')}}</button>
                                    </span>
                                 </div>
                              </li>
                           </form>
                        </ul>
                        <!-- End Single Post Comment Share -->
                     </div>

                  </div>
                  
                  <!-- End Single Post Comment -->
               @endif
            @endforeach
         </div>
         <!-- Single Post Comment Form -->
      </div>
   </div>
   <!-- End Blog Comment -->
</div>



@endsection
@section('script')
<script type="text/javascript">
   $(document).ready(function(){
     $('.answer').on({
         'click': function(){
             var id = this.id.split("answer");
             $('#hidden'+id[1]).removeAttr("style");
             $('#textarea'+id[1]).focus();
             //hidden3
         }
      });
     $('.textcomment').keypress(function(e) {
        if(e.which == 13) {
            
            $( "#"+'form'+this.id.split('textarea')[1]).submit();
        }
    });
   });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79647465-1', 'auto');
  ga('send', 'pageview');

</script>
@endsection
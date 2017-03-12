<?php
if(isset($_GET['lang']) && !empty($_GET['lang'])){
  
  App::setlocale($_GET['lang']);

}else{
  $lang = new Lang;
}

?>
@extends('layouts.app')

@section('header')
<meta name="keywords" content="{{trans('messages.headermetakeyword')}}" />
<meta name="description" content="{{trans('messages.ogxaffaire')}}">
<meta name="designer" content="Hamza KOUADRI">
<meta name="contact" content="info@ogxaffaire.com">
<meta name="copyright" content="Copyright © 2016 Ogxaffaire. All Rights Reserved.">



<meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
<meta property="article:section" content="homepage">
<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:image" content="{{ url('/images/logo.png') }}" />
<meta property="og:image:width" content="268">
<meta property="og:image:height" content="249">
<meta name="robots" content="index,follow">

<title>{{ config('app.name', 'Laravel') }}</title>

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
 <div class="col-md-6 md-margin-b-30">
                <div class="row margin-b-30">
                    <!-- News v5 -->
                    <?php 
                        if((!isset($page)))
                            $page = 0;
                        else
                            $page = 3 * ($page-1);
                        $Articles = App\Article::orderBy('created_at', 'desc')->skip($page)->take(3)->get(); //take(30)->skip(30)->get();
                        foreach ($Articles as $Article){


                    ?>
                    
                    @if($Article->published)
                    <div class="content-md container-xs" style="padding: 0;">
                        <!-- News v5 -->
                        <div style="height: 30%;" class="vertical-center news-v5 margin-b-30 sm-margin-b-50 wow fadeInUp" data-wow-duration=".2" data-wow-delay=".1s">
                            <div style="width: 20%; padding: 0; min-height: 100% !important;" class="news-v5-col news-v5-col-p-left sm-margin-b-30">
                                
                            </div>
                            <div class="news-v5-content" style="width: 100%;">
                                
                                <div class="news-v5-inner" style="text-decoration: none; border: solid 1px black;">
                                    <a href="{{url('/article').'/'. $Article->id}}" style="text-decoration: none;">
                                       <div class="news-v5-inner-body">
                                            <div class="margin-b-20">

                                                <h3 class="news-v5-order-name"><?php echo $Article->title; ?></h3>
                                                <i class="fa fa-calendar" style="margin-right: 5px; margin-left: 5px;" aria-hidden="true"></i>
                                                <?php echo Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $Article->created_at)->format('d/m/Y'); ?>
                                                <i class="fa fa-eye" style="margin-right: 5px; margin-left: 5px;" aria-hidden="true"></i>({{$Article->views}}){{trans('messages.views')}}
                                                <i class="fa fa-comments-o" style="margin-right: 5px; margin-left: 5px;" aria-hidden="true"></i>({{$Article->comments->count()}}){{trans('messages.comments')}}
                                                
                                                <i class="fa fa-object-group" style="margin-right: 5px; margin-left: 5px;" aria-hidden="true"></i>
                                                <?php $categories = $Article->categories; ?> 
                                                (
                                                @foreach($categories as $key => $category)                      
                                                    
                                                    @if($category->relatedto == 0)
                                                        @if(($key > 0) && ($key < $categories->count()) )
                                                            {{' | '.$category->name}}
                                                        @else
                                                            {{$category->name}}
                                                        @endif
                                                    @endif

                                                    
                                                @endforeach
                                                ) 
                                            </div>
                                        
                                        </div>
                                        <?php $image= str_replace("/ogxaffaire/public_html/","",$Article->image); ?>
                                        <img width="100%" height="100%" class="img-responsive .img-thumbnail" src="data:{{(string)Image::make(url($image))->resize(583, 388)->encode('data-url')}}" alt="">
                                        
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        <!--// end row -->
                        <!-- End News v5 -->
                    </div>
                    @endif
                    <?php
                    }
                    ?>
                </div>
                <!--// end row -->

                <!-- Paginations v3 -->
                <?php 
                    $pagenumber = ceil((App\Article::all()->count())/3);

                ?>
                 @if(App::getLocale() == 'ar')
                 <div class="paginations-v3 text-center margin-b-60">
                    <ul class="paginations-v3-list">
                        @if($page != 0)
                        <li class="previous">
                            <a href=" {{url('/page')}}<?php echo '/'.((($page/3)+1)-1); ?>  " aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
                                
                            </a>
                        </li>
                        @endif
                        <?php 
                            $pagenumber = ceil((App\Article::all()->count())/3);

                        ?>
                        @for ($i = 1; $i <= $pagenumber; $i++)
                        <li @if($i == (($page/3)+1)) class="active" @endif><a href=" @if(!($i == (($page/3)+1))) {{url('/page').'/'.$i}} @endif">{{$i}}</a></li>
                        @endfor
                        @if($pagenumber != (($page/3)+1))
                        <li class="next">
                            <a href=" {{url('/page')}}<?php echo '/'.((($page/3)+1)+1); ?> " aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
                 @else
                 <div class="paginations-v3 text-center margin-b-60">
                    <ul class="paginations-v3-list">
                        @if($page != 0)
                        <li class="previous">
                            <a href=" {{url('/page')}}<?php echo '/'.((($page/3)+1)-1); ?>  " aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
                            </a>
                        </li>
                        @endif
                        <?php 
                            $pagenumber = ceil((App\Article::all()->count())/3);

                        ?>
                        @for ($i = 1; $i <= $pagenumber; $i++)
                        <li @if($i == (($page/3)+1)) class="active" @endif><a href=" @if(!($i == (($page/3)+1))) {{url('/page').'/'.$i}} @endif">{{$i}}</a></li>
                        @endfor
                        @if($pagenumber != (($page/3)+1))
                        <li class="next">
                            <a href=" {{url('/page')}}<?php echo '/'.((($page/3)+1)+1); ?> " aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
                 @endif
                    
               
                <!-- End Paginations v3 -->   
            </div>

@endsection
@section('script')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79647465-1', 'auto');
  ga('send', 'pageview');

</script>
@endsection
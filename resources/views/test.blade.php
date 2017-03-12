<?php $lang = new Lang; ?>
<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{trans('messages.headermetakeyword')}}" />
    <meta name="description" content="{{trans('messages.headermetakeyword')}}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700,500,300,300italic&" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic&" rel="stylesheet" type="text/css">
    

    <link href="{{url('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('/css/languages.min.css')}}">

    @if(App::getLocale() == 'ar')
    <link href="{{url('assets/plugins/bootstrap/css/bootstrap-rtl.css')}}" rel="stylesheet" type="text/css">    
    <link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=vip-hakm-bold" />
    @endif

    <link href="{{url('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/plugins/et-line/et-line.css')}}" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME PLUGINS STYLE -->
    <link href="{{url('assets/plugins/scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END THEME PLUGINS STYLE -->

    <!-- THEME STYLES -->
    <link href="{{url('assets/css/global.css')}}" rel="stylesheet" type="text/css">
    @if(App::getLocale() == 'ar')
    <link href="{{url('assets/css-rtl/global-rtl.css')}}" rel="stylesheet" type="text/css">
    
    @endif
    <!-- END THEME STYLES -->

    <!-- THEME -->
    <link href="{{url('assets/css/theme/dark.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/css/theme/base.css')}}" rel="stylesheet" type="text/css" id="style-color"/>
    <!-- END THEME -->

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{url('images/five.png')}}">
    <!-- END FAVICON -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles >
    <link href="{{url('/css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/css/bootstrap-select.min.css')}}"-->
    
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

    </script>

    <script async="async" src="https://www.google.com/adsense/search/ads.js"></script>

    <!-- other head elements from your page -->

    <script type="text/javascript" charset="utf-8">
    (function(g,o){g[o]=g[o]||function(){(g[o]['q']=g[o]['q']||[]).push(
      arguments)},g[o]['t']=1*new Date})(window,'_googCsa');
    </script>

</head>
<body @if(App::getLocale() == 'ar') dir="rtl" @endif>
    <div class="wrapper wrapper-top-space animsition" id="app">
        <header class="header navbar-fixed-top header-sticky">
            <!-- Navbar -->
            <nav class="navbar mega-menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        

                        <!-- Logo -->
                        <div class="navbar-logo">
                            <a class="navbar-logo-wrap" href="{{ url('/') }}">
                                <img class="navbar-logo-img navbar-logo-img-white" src="{{url('images/Header-Dark-Logotype-image.png')}}" alt="OgxAffaire">
                                
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="nav-item-child radius-3" href="{{ url('/') }}">
                                        {{trans('messages.home')}}
                                    </a>
                                    
                                </li>
                                <!-- End Home -->

                                <!-- Pages -->
                                <li class="nav-item mega-menu-fullwidth">
                                    <a class="nav-item-child radius-3">
                                        {{trans('messages.categories')}}
                                    </a>
                                    
                                </li>
                                <!-- End Pages -->

                                <!-- Features -->
                                <li class="nav-item dropdown">
                                    <a class="nav-item-child radius-3" href="">
                                        {{trans('messages.aboutus')}}
                                    </a>
                                    
                                </li>
                                <!-- End Features -->

                                

                                <!-- Shortcodes -->
                                <li class="nav-item dropdown mega-menu-fullwidth">
                                    <a class="nav-item-child radius-3" href="javascript:void(0);" data-toggle="dropdown">
                                        {{trans('messages.contactus')}}
                                    </a>
                                    
                                </li>
                                <!-- End Shortcodes -->

                                <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li>
                                        <a class="nav-item-child radius-3 active" href="{{ url('/login') }}">
                                            {{trans('messages.login')}}
                                        </a>
                                        
                                    </li>
                                    <li class="nav-item nav-item-bg form-modal-nav">
                                        <a class="nav-item-child form-modal-login radius-3" href="{{ url('/register') }}">{{trans('messages.register')}}</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown" >
                                        <a class="nav-item-child dropdown-toggle radius-3" href="javascript:void(0);" data-toggle="dropdown">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    {{ trans('messages.logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                            @if(Auth::user()->admin == 1)
                                            <li>
                                                <a href="{{ url('/articlecreate') }}">
                                                    {{trans('messages.createarticle')}}
                                                </a>

                                                
                                            </li>
                                            <li>
                                                <a href="{{ url('/logout') }}"">
                                                    {{trans('messages.managearticles')}}
                                                </a>

                                                
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                @endif
                                <!-- End Login -->
                                <!-- Languages selector -->
                                <li class="nav-item">
                                    <li class="nav-item dropdown" >
                                        <a class="nav-item-child dropdown-toggle radius-3" data-toggle="dropdown">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <span class="lang-sm" lang="{{App::getLocale()}}"></span> <span class="caret"></span>
                                            </button>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ url('/lang/ar') }}">
                                                    <span class="lang-sm" lang="ar"></span> العربية
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="{{ url('/lang/en') }}">
                                                    <span class="lang-sm" lang="en"></span> English
                                                </a>

                                                
                                            </li>
                                            <li>
                                                <a href="{{ url('/lang/fr') }}">
                                                    <span  class="lang-sm" lang="fr"></span> Français
                                                </a>

                                                
                                            </li>
                                            
                                        </ul>
                                    </li>
                                </li>
                                <!-- end Languages selector -->
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
                <!--// End Container-->
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== AD header-banner ==========-->
        <section class="breadcrumbs-v1">
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
        </section>

        <!--========== End AD header-banner ==========-->
        <!--========== PAGE CONTENT ==========-->
<div class="bg-color-sky-light">
    <div class="content-md container">
        <div class="row">
            <!--========== BLOG SIDEBAR ==========-->
            <div class="col-md-3 md-margin-b-30">
                <!-- Blog Sidebar -->
                <div class="blog-sidebar margin-b-30">
                    <div class="blog-sidebar-heading">
                        <i class="blog-sidebar-heading-icon icon-book-open"></i>
                        <h4 class="blog-sidebar-heading-title">{{trans('messages.latest')}}</h4>
                    </div>
                    <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                        <!-- Latest Tutorials -->
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/06.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Visual brand designing</a></h5>
                                <small class="latest-tuts-content-time">35 minutes ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/11.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Photoshop: Image Cropping</a></h5>
                                <small class="latest-tuts-content-time">7 hours ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/08.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Video editing</a></h5>
                                <small class="latest-tuts-content-time">12 hours ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/09.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Web development technologies</a></h5>
                                <small class="latest-tuts-content-time">1 day ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/10.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">The section element - HTML</a></h5>
                                <small class="latest-tuts-content-time">2 days ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/07.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Creata a logo using Adobe Illustrator</a></h5>
                                <small class="latest-tuts-content-time">3 days ago</small>
                            </div>
                        </article>
                        <!-- End Latest Tutorials -->
                    </div>
                </div>
                <!-- End Blog Sidebar -->

                <!-- Blog Sidebar -->
                <div class="blog-sidebar margin-b-30">
                    <div class="blog-sidebar-heading">
                        <i class="blog-sidebar-heading-icon icon-tools"></i>
                        <h4 class="blog-sidebar-heading-title">Post Timeline</h4>
                    </div>
                    <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                        <!--Timeline v2 -->
                        <ul class="timeline-v2">
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
                            </li>
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Nunc efficitur auctor felis, et tempus libero commodo non.</a></h5>
                            </li>
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Phasellus neque eros, finibus quis velit in, fringilla gravida est.</a></h5>
                            </li>
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Nunc efficitur auctor felis, et tempus libero commodo non.</a></h5>
                            </li>
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-comments-o"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Phasellus neque eros, finibus quis velit in, fringilla gravida est.</a></h5>
                            </li>
                            <li class="clearfix" style="float: none;"></li>
                        </ul>
                        <!-- End Timeline v2 -->
                    </div>
                </div>
                <!-- End Blog Sidebar -->

                <!-- Blog Sidebar -->
                <div class="blog-sidebar margin-b-30">
                    <div class="blog-sidebar-heading">
                        <i class="blog-sidebar-heading-icon icon-chat"></i>
                        <h4 class="blog-sidebar-heading-title">Twitter feed</h4>
                    </div>
                    <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                        <!-- Twitter Feed -->
                        <ul class="list-unstyled twitter-feed">
                            <li class="twitter-feed-item">
                                <div class="twitter-feed-media">
                                    <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/01.jpg" alt="">
                                </div>
                                <div class="twitter-feed-content">
                                    <strong class="twitter-feed-profile-name">Dr.Cafee</strong>
                                    <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@DrCafee</a></span>
                                    <span class="twitter-feed-posted-time">4h</span>
                                    <p class="twitter-feed-paragraph">Sequat ultrices metus et malesuada.</p>
                                    <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                </div>
                            </li>
                            <li class="twitter-feed-item">
                                <div class="twitter-feed-media">
                                    <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/04.jpg" alt="">
                                </div>
                                <div class="twitter-feed-content">
                                    <strong class="twitter-feed-profile-name">Nickos</strong>
                                    <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@Nicko</a></span>
                                    <span class="twitter-feed-posted-time">5h</span>
                                    <p class="twitter-feed-paragraph">Nam bibendum urna in arcu mollis suscipit.</p>
                                    <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                </div>
                            </li>
                            <li class="twitter-feed-item">
                                <div class="twitter-feed-media">
                                    <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/02.jpg" alt="">
                                </div>
                                <div class="twitter-feed-content">
                                    <strong class="twitter-feed-profile-name">PhotoStudio</strong>
                                    <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@PS</a></span>
                                    <span class="twitter-feed-posted-time">7h</span>
                                    <p class="twitter-feed-paragraph">Curabitur leo turpis, tempus id tincidunt non, pharetra sed urna.</p>
                                    <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                </div>
                            </li>
                            <li class="twitter-feed-item">
                                <div class="twitter-feed-media">
                                    <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/03.jpg" alt="">
                                </div>
                                <div class="twitter-feed-content">
                                    <strong class="twitter-feed-profile-name">Mr.Dog</strong>
                                    <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@Mr.Dog</a></span>
                                    <span class="twitter-feed-posted-time">1d</span>
                                    <p class="twitter-feed-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                </div>
                            </li>
                        </ul>
                        <!-- End Twitter Feed -->
                    </div>
                </div>
                <!-- End Blog Sidebar -->

                <!-- Featured Article -->
                <a class="featured-article margin-b-30" href="#">
                    <img class="img-responsive" src="assets/img/970x647/26.jpg" alt="">
                    <div class="featured-article-content-wrap">
                        <div class="featured-article-content">
                            <p class="featured-article-content-title">Preview: First look at new device</p>
                            <small class="featured-article-content-time">10 Aug, 2016</small>
                        </div>
                    </div>
                </a>
                <!-- End Featured Article -->

                <!-- Blog Sidebar -->
                <div class="blog-sidebar">
                    <div class="blog-sidebar-heading">
                        <i class="blog-sidebar-heading-icon icon-paperclip"></i>
                        <h4 class="blog-sidebar-heading-title">Tags</h4>
                    </div>
                    <div class="blog-sidebar-content">
                        <!-- Blog Grid Tags -->
                        <ul class="list-inline blog-sidebar-tags">
                            <li><a class="radius-50" href="#">envato</a></li>
                            <li><a class="radius-50" href="#">featured</a></li>
                            <li><a class="radius-50" href="#">material</a></li>
                            <li><a class="radius-50" href="#">fashion</a></li>
                            <li><a class="radius-50" href="#">themeforest</a></li>
                            <li><a class="radius-50" href="#">css3</a></li>
                            <li><a class="radius-50" href="#">photoshop</a></li>
                            <li><a class="radius-50" href="#">wordpress</a></li>
                        </ul>
                        <!-- End Blog Grid Tags -->
                    </div>
                </div>
                <!-- End Blog Sidebar -->
            </div>
            <!--========== END BLOG SIDEBAR ==========-->
        
           @yield('content')

            <!--========== BLOG SIDEBAR ==========-->
            <div class="col-md-3">
                <!-- Blog Sidebar -->
                <div class="blog-sidebar margin-b-30">
                    <div class="blog-sidebar-heading">
                        <i class="blog-sidebar-heading-icon icon-book-open"></i>
                        <h4 class="blog-sidebar-heading-title">{{ trans('messages.tutorials') }}</h4>
                    </div>
                    <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                        <!-- Latest Tutorials -->
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/06.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Visual brand designing</a></h5>
                                <small class="latest-tuts-content-time">35 minutes ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/11.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Photoshop: Image Cropping</a></h5>
                                <small class="latest-tuts-content-time">7 hours ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/08.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Video editing</a></h5>
                                <small class="latest-tuts-content-time">12 hours ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/09.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Web development technologies</a></h5>
                                <small class="latest-tuts-content-time">1 day ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/10.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">The section element - HTML</a></h5>
                                <small class="latest-tuts-content-time">2 days ago</small>
                            </div>
                        </article>
                        <article class="latest-tuts">
                            <div class="latest-tuts-media">
                                <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/07.jpg" alt="">
                            </div>
                            <div class="latest-tuts-content">
                                <h5 class="latest-tuts-content-title"><a href="#">Creata a logo using Adobe Illustrator</a></h5>
                                <small class="latest-tuts-content-time">3 days ago</small>
                            </div>
                        </article>
                        <!-- End Latest Tutorials -->
                    </div>
                </div>
                <!-- End Blog Sidebar -->

                <!-- Blog Sidebar -->
                <div class="blog-sidebar margin-b-30">
                    <div class="blog-sidebar-heading">
                        <i class="blog-sidebar-heading-icon icon-tools"></i>
                        <h4 class="blog-sidebar-heading-title">Post Timeline</h4>
                    </div>
                    <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                        <!--Timeline v2 -->
                        <ul class="timeline-v2">
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
                            </li>
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Nunc efficitur auctor felis, et tempus libero commodo non.</a></h5>
                            </li>
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Phasellus neque eros, finibus quis velit in, fringilla gravida est.</a></h5>
                            </li>
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Nunc efficitur auctor felis, et tempus libero commodo non.</a></h5>
                            </li>
                            <li class="timeline-v2-list-item">
                                <i class="timeline-v2-badge-icon radius-circle fa fa-comments-o"></i>
                                <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                <h5 class="timeline-v2-news-title"><a href="#">Phasellus neque eros, finibus quis velit in, fringilla gravida est.</a></h5>
                            </li>
                            <li class="clearfix" style="float: none;"></li>
                        </ul>
                        <!-- End Timeline v2 -->
                    </div>
                </div>
                <!-- End Blog Sidebar -->

                <!-- Blog Sidebar -->
                <div class="blog-sidebar margin-b-30">
                    <div class="blog-sidebar-heading">
                        <i class="blog-sidebar-heading-icon icon-chat"></i>
                        <h4 class="blog-sidebar-heading-title">Twitter feed</h4>
                    </div>
                    <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                        <!-- Twitter Feed -->
                        <ul class="list-unstyled twitter-feed">
                            <li class="twitter-feed-item">
                                <div class="twitter-feed-media">
                                    <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/01.jpg" alt="">
                                </div>
                                <div class="twitter-feed-content">
                                    <strong class="twitter-feed-profile-name">Dr.Cafee</strong>
                                    <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@DrCafee</a></span>
                                    <span class="twitter-feed-posted-time">4h</span>
                                    <p class="twitter-feed-paragraph">Sequat ultrices metus et malesuada.</p>
                                    <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                </div>
                            </li>
                            <li class="twitter-feed-item">
                                <div class="twitter-feed-media">
                                    <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/04.jpg" alt="">
                                </div>
                                <div class="twitter-feed-content">
                                    <strong class="twitter-feed-profile-name">Nickos</strong>
                                    <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@Nicko</a></span>
                                    <span class="twitter-feed-posted-time">5h</span>
                                    <p class="twitter-feed-paragraph">Nam bibendum urna in arcu mollis suscipit.</p>
                                    <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                </div>
                            </li>
                            <li class="twitter-feed-item">
                                <div class="twitter-feed-media">
                                    <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/02.jpg" alt="">
                                </div>
                                <div class="twitter-feed-content">
                                    <strong class="twitter-feed-profile-name">PhotoStudio</strong>
                                    <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@PS</a></span>
                                    <span class="twitter-feed-posted-time">7h</span>
                                    <p class="twitter-feed-paragraph">Curabitur leo turpis, tempus id tincidunt non, pharetra sed urna.</p>
                                    <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                </div>
                            </li>
                            <li class="twitter-feed-item">
                                <div class="twitter-feed-media">
                                    <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/03.jpg" alt="">
                                </div>
                                <div class="twitter-feed-content">
                                    <strong class="twitter-feed-profile-name">Mr.Dog</strong>
                                    <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@Mr.Dog</a></span>
                                    <span class="twitter-feed-posted-time">1d</span>
                                    <p class="twitter-feed-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                </div>
                            </li>
                        </ul>
                        <!-- End Twitter Feed -->
                    </div>
                </div>
                <!-- End Blog Sidebar -->

                <!-- Featured Article -->
                <a class="featured-article margin-b-30" href="#">
                    <img class="img-responsive" src="assets/img/970x647/26.jpg" alt="">
                    <div class="featured-article-content-wrap">
                        <div class="featured-article-content">
                            <p class="featured-article-content-title">Preview: First look at new device</p>
                            <small class="featured-article-content-time">10 Aug, 2016</small>
                        </div>
                    </div>
                </a>
                <!-- End Featured Article -->

                <!-- Blog Sidebar -->
                <div class="blog-sidebar">
                    <div class="blog-sidebar-heading">
                        <i class="blog-sidebar-heading-icon icon-paperclip"></i>
                        <h4 class="blog-sidebar-heading-title">Tags</h4>
                    </div>
                    <div class="blog-sidebar-content">
                        <!-- Blog Grid Tags -->
                        <ul class="list-inline blog-sidebar-tags">
                            <li><a class="radius-50" href="#">envato</a></li>
                            <li><a class="radius-50" href="#">featured</a></li>
                            <li><a class="radius-50" href="#">material</a></li>
                            <li><a class="radius-50" href="#">fashion</a></li>
                            <li><a class="radius-50" href="#">themeforest</a></li>
                            <li><a class="radius-50" href="#">css3</a></li>
                            <li><a class="radius-50" href="#">photoshop</a></li>
                            <li><a class="radius-50" href="#">wordpress</a></li>
                        </ul>
                        <!-- End Blog Grid Tags -->
                    </div>
                </div>
                <!-- End Blog Sidebar -->
            </div>
            <!--========== END BLOG SIDEBAR ==========-->
        </div>
        <!--// end row -->
    </div>
    
    
</div>
<!--========== END PAGE CONTENT ==========-->
        
        <!--========== FOOTER ==========-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row margin-b-50">
                    <div class="col-sm-6 sm-margin-b-30">
                        <!-- Address -->
                        <div class="footer-address">
                            <h3 class="footer-title">Headquarter</h3>
                            <p class="footer-address-text">795 Folsom Ave, Suite 600, San Francisco, CA 94107</p>
                            <p class="footer-address-text">+123 456 7890</p>
                            <a class="footer-address-link" href="#">prothemes.net@gmail.com</a>
                        </div>
                        <!-- Address -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Testimonials -->
                        <div class="footer-testimonials">
                            <div class="footer-testimonials-quote">
                                <p>Ark is the most amazing premium template with powerful customization settings and ultra fully responsive template with modern and smart design.</p>
                            </div>
                            <span class="footer-testimonials-author">&#8212; Kenny Johnson</span>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                </div>
                <!-- end row -->

                <div class="row margin-b-50">
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width md-margin-b-50">
                        <h3 class="footer-title">Information</h3>
                        <!-- News List -->
                        <ul class="list-unstyled footer-news-list">
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">How you can impact your customers</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">24/7 Support</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Is your website user friendly?</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Astonishing Eelements</a>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Why our customers love Ark?</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">What we do is all about passion</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Mobile ready</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Ark offers weekly stunning designs.</a>
                            </li>
                        </ul>
                        <!-- End News List -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width md-margin-b-50">
                        <h3 class="footer-title">Latest news</h3>
                        <!-- News Media -->
                        <ul class="list-unstyled footer-media">
                            <li class="footer-media-item">
                                <div class="footer-media-poster">
                                    <img class="footer-media-img radius-circle" src="assets/img/250x250/09.jpg" alt="">
                                </div>
                                <div class="footer-media-info">
                                    <a class="footer-media-link" href="#">
                                        Smart and beautiful design
                                    </a>
                                    <small class="footer-media-date">Aug 25, 2016</small>
                                </div>
                            </li>
                            <li class="footer-media-item">
                                <div class="footer-media-poster">
                                    <img class="footer-media-img radius-circle" src="assets/img/250x250/08.jpg" alt="">
                                </div>
                                <div class="footer-media-info">
                                    <a class="footer-media-link" href="#">
                                        Royal pictures
                                    </a>
                                    <small class="footer-media-date">Aug 25, 2016</small>
                                </div>
                            </li>
                            <li class="footer-media-item">
                                <div class="footer-media-poster">
                                    <img class="footer-media-img radius-circle" src="assets/img/250x250/07.jpg" alt="">
                                </div>
                                <div class="footer-media-info">
                                    <a class="footer-media-link" href="#">
                                        Unlimited elements to get started
                                    </a>
                                    <small class="footer-media-date">Aug 25, 2016</small>
                                </div>
                            </li>
                            <li class="footer-media-item">
                                <div class="footer-media-poster">
                                    <img class="footer-media-img radius-circle" src="assets/img/250x250/11.jpg" alt="">
                                </div>
                                <div class="footer-media-info">
                                    <a class="footer-media-link" href="#">
                                        Latest trends and much more...
                                    </a>
                                    <small class="footer-media-date">Aug 25, 2016</small>
                                </div>
                            </li>
                        </ul>
                        <!-- End News Media -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width xs-margin-b-50">
                        <h3 class="footer-title">Tags</h3>
                        <!-- Tags -->
                        <ul class="list-inline footer-tags margin-b-30">
                            <li><a class="radius-50" href="#">envato</a></li>
                            <li><a class="radius-50" href="#">featured</a></li>
                            <li><a class="radius-50" href="#">material</a></li>
                            <li><a class="radius-50" href="#">fashion</a></li>
                            <li><a class="radius-50" href="#">themeforest</a></li>
                            <li><a class="radius-50" href="#">css3</a></li>
                        </ul>
                        <!-- End Tags -->

                        <h3 class="footer-title">Support</h3>
                        <!-- News List -->
                        <ul class="list-unstyled footer-news-list">
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">FAQ</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Forum</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="#">Support</a>
                            </li>
                        </ul>
                        <!-- End News List -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width">
                        <!-- Video -->
                        <h3 class="footer-title">Video Blog</h3>
                        <div class="footer-video">
                            <img class="img-responsive" src="assets/img/970x600/01.jpg" alt="">
                            <div class="footer-video-player">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=J7ArPgBRR94" title="Better">
                                    <img src="assets/img/widgets/video-play.png" alt="" width="35" height="35">
                                </a>
                            </div>
                        </div>
                        <h4 class="footer-video-title">
                            <a class="footer-video-title-link" href="blog_single_post_video.html">Better - it's a powerful word and powerful idea.</a>
                        </h4>
                        <!-- End Video -->
                    </div>
                </div>
                <!--// end row -->

                <!-- Copyright -->
                <ul class="list-inline footer-copyright">
                    <li class="footer-copyright-item">Copyright &#169; 2016 Prothemes. All Rights Reserved.</li>
                    <li class="footer-copyright-item"><a href="#">Terms &amp; Conditions</a></li>
                    <li class="footer-copyright-item"><a href="#">Privacy &amp; Policy</a></li>
                    <li class="footer-copyright-item-toggle-trigger"><a class="footer-toggle-trigger footer-toggle-trigger-style" href="javascript:void(0);">View Branches</a></li>
                </ul>
                <!-- End Copyright -->

                <!-- Collapse -->
                <div class="footer-toggle-collapse footer-toggle">
                    <div class="row">
                        <div class="col-sm-4 sm-margin-b-50">
                            <h4 class="footer-toggle-title">United States</h4>
                            <p class="footer-toggle-text">1600 Amphitheatre Parkway, Mountain View, CA 94043</p>
                            <p class="footer-toggle-text">Phone: +1 650-253-0000</p>
                            <a class="footer-toggle-link" href="#">Email: us.prothemes.net@gmail.com</a>
                        </div>
                        <div class="col-sm-4 sm-margin-b-50">
                            <h4 class="footer-toggle-title">Canada</h4>
                            <p class="footer-toggle-text">1253 McGill College Montreal, Quebec, H3B 2Y5</p>
                            <p class="footer-toggle-text">Phone: +1 514-670-8700</p>
                            <a class="footer-toggle-link" href="#">Email: canada.prothemes.net@gmail.com</a>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="footer-toggle-title">Australia</h4>
                            <p class="footer-toggle-text">Level 5, 48 Pirrama Road, Pyrmont, NSW 2009</p>
                            <p class="footer-toggle-text">Phone: +61 2 9374 4000</p>
                            <a class="footer-toggle-link" href="#">Email: australia.prothemes.net@gmail.com</a>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
                <!-- End Collapse -->
            </div>
        </footer>
    </div>
    
    

    <!-- Scripts -->
    
    <!--script src="{{url('/js/app.js')}}"></script-->
    
    <!-- BEGIN JQUERY -->
    <script type="text/javascript" src="{{url('/assets/plugins/jquery.min.js')}}"></script>
    <!-- END JQUERY -->
    <script src="{{url('/js/bootstrap-select.min.js')}}"></script>

    <!--========== JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{url('assets/plugins/jquery.migrate.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="{{url('assets/plugins/jquery.back-to-top.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/jquery.smooth-scroll.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/jquery.animsition.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="{{url('assets/scripts/app.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/scripts/components/header-sticky.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/scripts/components/animsition.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/scripts/components/scrollbar.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/scripts/components/form-modal.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/scripts/components/magnific-popup.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!--========== END JAVASCRIPTS ==========-->
    
    
</body>
</html>

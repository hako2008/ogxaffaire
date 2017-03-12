<?php 
use Carbon\Carbon;
$lang = new Lang; 
?>
<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('header')
    
    

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
    <link rel="shortcut icon" href="{{url('/images/logofive.png')}}">
    <!-- END FAVICON -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles >
    <link href="{{url('/css/app.css')}}" rel="stylesheet"-->
    
    
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
    <!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"N2Ylo1IW181052", domain:"ogxaffaire.com",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=N2Ylo1IW181052" style="display:none" height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript --> 
</head>
<body @if(App::getLocale() == 'ar') dir="rtl" @endif>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KK8BKGB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="wrapper wrapper-top-space animsition" id="app">
        <header class="header navbar-fixed-top header-sticky">
            
            <!-- Search Field -->
            <form action="{{url('/search')}}" method="GET">
                
                <div class="search-field">
                    <div class="container">
                        <input type="text" name="query" class="form-control search-field-input" placeholder="{{ trans('messages.search') }}..." required>
                    </div>
                </div>
            </form>
            <!-- End Search Field -->

            <!-- Navbar -->
            <nav class="navbar mega-menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        
                        <!-- Navbar Actions -->
                    <div class="navbar-actions">
                        <!-- Search -->
                        <div class="navbar-actions-shrink search">
                            <div class="search-btn">
                                <i class="search-btn-default fa fa-search"></i>
                                <i class="search-btn-active fa fa-times"></i>
                            </div>
                        </div>
                        <!-- End Search -->
                        
                        <!-- Language v1 -->
                        <div class="navbar-actions-shrink">
                            <div class="language-v1">
                                <a class="language-v1-toggle js-language-trigger" href="javascript:void(0);">
                                    <img class="language-v1-img xs-hidden" src="{{ url('assets/flags').'/'.trans('messages.flag') }}/32.png" alt="">
                                    {{App::getLocale()}}
                                    <i class="language-v1-icon fa fa-angle-down"></i>
                                </a>
                                <ul class="list-unstyled language-v1-dropdown js-language-dropdown" style="display: none;">
                                    <li class="language-v1-dropdown-item">
                                        <a class="language-v1-dropdown-link" href="{{ url('/lang/ar') }}">
                                                <span class="lang-sm" lang="ar"></span> العربية
                                        </a>
                                    </li>
                                    <li class="language-v1-dropdown-item">
                                        <a class="language-v1-dropdown-link" href="{{ url('/lang/en') }}">
                                                <span class="lang-sm" lang="en"></span> English
                                        </a>
                                    </li>
                                    <li class="language-v1-dropdown-item">
                                        <a class="language-v1-dropdown-link" href="{{ url('/lang/fr') }}">
                                                <span class="lang-sm" lang="fr"></span> Français
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Language v1 -->
                    </div>
                    <!-- End Navbar Actions -->
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
                                <li class="nav-item dropdown mega-menu-fullwidth">
                                    <a class="nav-item-child dropdown-toggle radius-3" href="javascript:void(0);" data-toggle="dropdown">
                                        {{trans('messages.categories')}}
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <!-- About Pages -->
                                                <ul class="list-unstyled mega-menu-list">
                                                    <li><span class="mega-menu-title">{{trans('messages.tenders')}}</span></li>
                                                    <?php 
                                                        $categories = App\Category::where('relatedto','1')->withCount('articles')->orderBy('articles_count', 'desc')->paginate(5);
                                                    ?>
                                                    @foreach($categories as $category)
                                                        <li class="mega-menu-item"><a class="mega-menu-child" href="{{url('/categories?category=').$category->id}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                                <!-- End About Pages -->
                                            </div>
                                            <div class="col-md-3">
                                                <!-- Business Pages -->
                                                <ul class="list-unstyled mega-menu-list">
                                                    <li><span class="mega-menu-title">{{trans('messages.tutorials')}}</span></li>
                                                    <?php 
                                                        $categories = App\Category::where('relatedto','2')->withCount('articles')->orderBy('articles_count', 'desc')->paginate(5);
                                                    ?>
                                                    @foreach($categories as $category)
                                                        <li class="mega-menu-item"><a class="mega-menu-child" href="{{url('/categories?category=').$category->id}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                    
                                                </ul>
                                                <!-- End Business Pages -->
                                            </div>
                                            <div class="col-md-3">
                                                <!-- Utility Pages -->
                                                <ul class="list-unstyled mega-menu-list">
                                                    <li><span class="mega-menu-title">{{trans('messages.projectideas')}}</span></li>
                                                    <?php 
                                                        $categories = App\Category::where('relatedto','3')->withCount('articles')->orderBy('articles_count', 'desc')->paginate(5);
                                                    ?>
                                                    @foreach($categories as $category)
                                                        <li class="mega-menu-item"><a class="mega-menu-child" href="{{url('/categories?category=').$category->id}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                                <!-- End Utility Pages -->
                                            </div>
                                            <div class="col-md-3">
                                                <!-- Login Pages -->
                                                <ul class="list-unstyled mega-menu-list">
                                                    <li><span class="mega-menu-title">{{trans('messages.economicnews')}}</span></li>
                                                    <?php 
                                                        $categories = App\Category::where('relatedto','4')->withCount('articles')->orderBy('articles_count', 'desc')->paginate(5);
                                                    ?>
                                                    @foreach($categories as $category)
                                                        <li class="mega-menu-item"><a class="mega-menu-child" href="{{url('/categories?category=').$category->id}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                                <!-- End Login Pages -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                    
                                </li>
                                <!-- End Pages -->

                                <!-- Features -->
                                <li class="nav-item dropdown">
                                    <a class="nav-item-child radius-3" href="{{url('/about_us')}}">
                                        {{trans('messages.aboutus')}}
                                    </a>
                                    
                                </li>
                                <!-- End Features -->

                                

                                <!-- Shortcodes -->
                                <li class="nav-item dropdown">
                                    <a class="nav-item-child radius-3" href="{{ url('/contacts') }}">
                                        {{trans('messages.contactus')}}
                                    </a>
                                    
                                </li>
                                <!-- End Shortcodes -->
                                <!-- Shortcodes -->
                                <li class="nav-item dropdown mega-menu-fullwidth footer-copyright-item-toggle-trigger">
                                    <a class="nav-item-child radius-3 footer-toggle-trigger footer-toggle-trigger-style" href="javascript:void(0);" data-toggle="dropdown">
                                        {{trans('messages.menufeedback')}}
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
                                                <a href="{{ url('/manage') }}"">
                                                    {{trans('messages.managearticles')}}
                                                </a>

                                                
                                            </li>
                                            @endif
                                        </ul>
                                    </li>
                                @endif
                                <!-- End Login -->
                                
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
                <!--// End Container-->
            </nav>
            <!-- Navbar -->
        </header>
        
        <!--========== PAGE CONTENT ==========-->
<div class="bg-color-sky-light">
    
    <div class="content-md container">
        <div class="row">
            
        
           @yield('content')

            
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
                            <h3 class="footer-title">{{trans('messages.headquarter')}}</h3>

                            <p class="footer-address-text">{{trans('messages.headquarter2')}}</p>
                            <p class="footer-address-text"><a dir="ltr" href="tel:+213663818580">+213 663 81 85 80</a></p>
                            <a class="footer-address-link" href="mailto:info@ogxaffaire.com">info@ogxaffaire.com</a>
                        </div>
                        <!-- Address -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Testimonials -->
                        <div class="footer-testimonials">
                            <div class="footer-testimonials-quote">
                                <p>{{trans('messages.ogxaffaire')}}</p>
                            </div>
                            <span class="footer-testimonials-author">&#8212; {{trans('messages.co-founder')}}</span>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                </div>
                <!-- end row -->

                <div class="row margin-b-50">
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width md-margin-b-50">
                        <h3 class="footer-title">{{trans('messages.informations')}}</h3>
                        <!-- News List -->
                        <ul class="list-unstyled footer-news-list">
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="http://ogxaffaire.com/about_us#services">{{ trans('aboutus.whatsyourservices') }}</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="http://ogxaffaire.com/about_us#growupbusiness">{{ trans('aboutus.helpyougiveme') }}</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="http://ogxaffaire.com/about_us#properties">{{ trans('aboutus.portalproperties') }}</a>
                            </li>
                            <li class="footer-news-list-item">
                                <i class="footer-news-list-icon fa fa-angle-right"></i>
                                <a class="footer-news-list-link" href="http://ogxaffaire.com/about_us#opensource">{{ trans('aboutus.developwebsitelikethis') }}</a>
                            </li>
                        </ul>
                        <!-- End News List -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width md-margin-b-50">
                        <h3 class="footer-title">{{trans('messages.latest')}}</h3>
                        <!-- News Media -->
                        <ul class="list-unstyled footer-media">
                        <?php 
                            
                            $Articles = App\Article::orderBy('created_at', 'desc')->take(4)->get();                        


                        ?>
                        <!-- Latest  -->
                        @foreach ($Articles as $Article)
                                @if($Article->published)
                                    <li class="footer-media-item">
                                        <div class="footer-media-poster">
                                            <?php $image= str_replace("/ogxaffaire/public_html/","",$Article->image); ?>
                                        
                                            <img class="footer-media-img radius-circle" src="data:{{(string)Image::make(url($image))->resize(250, 250)->encode('data-url')}}" alt="">
                                        </div>
                                        <div class="footer-media-info">
                                            <a class="footer-media-link" href="{{url('/article').'/'. $Article->id}}">
                                                {{$Article->title}}
                                            </a>
                                            <small class="footer-media-date">
                                                <?php 

                                                    //echo \Carbon\Carbon::createFromTimeStamp(strtotime($Article->created_at))->diffForHumans() ?>
                                                <?php 
                                                Carbon::setLocale(App::getLocale());
                                                echo Carbon::createFromTimeStamp(strtotime($Article->created_at))->diffForHumans();
                                                ?>
                                            </small>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                            
                        </ul>
                        <!-- End News Media -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width xs-margin-b-50">
                        <h3 class="footer-title">{{trans('messages.tags')}}</h3>
                        <!-- Tags -->
                        <ul class="list-inline footer-tags margin-b-30">
                            <?php 
                                $keywords = App\Keyword::withCount('articles')->orderBy('articles_count', 'desc')->paginate(10);
                            ?>

                            
                            @foreach($keywords as $keyword)
                            <li><a class="radius-50" href="{{url('/keyword/').'/'.$keyword->id}}">{{$keyword->name}}</a></li>
                            @endforeach
                        </ul>
                        <!-- End Tags -->
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 xs-full-width">
                        <!-- Video -->
                        <!--h3 class="footer-title">Video Blog</h3-->
                        <div class="footer-video">

                            @if(App::getLocale() == 'ar')
                            <img class="img-responsive" src="data:{{(string)Image::make(url('/images/-1-1.jpg'))->resize(480, 360)->encode('data-url')}}" alt="">
                            <div class="footer-video-player">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=O6UrmFO370k" title="Better">
                            @elseif(App::getLocale() == 'en')
                            <img class="img-responsive" src="data:{{(string)Image::make(url('/images/[2016.11.29_16.11.10].jpg'))->resize(480, 360)->encode('data-url')}}" alt="">
                            <div class="footer-video-player">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=ATLUouxwykM" title="Better">
                            @else
                            <img class="img-responsive" src="data:{{(string)Image::make(url('/images/[2016.11.29_16.08.34].jpg'))->resize(480, 360)->encode('data-url')}}" alt="">
                            <div class="footer-video-player">
                                <a class="popup-youtube" href="https://www.youtube.com/watch?v=qBVtxoOZI0M" title="Better">
                            @endif
                                    <img src="{{ url('/assets/img/widgets/video-play.png') }}" alt="" width="35" height="35">
                                </a>
                            </div>
                        </div>
                        <h4 class="footer-video-title">
                            <a class="footer-video-title-link" >{{trans('messages.better')}}</a>
                        </h4>
                        <!-- End Video -->
                    </div>
                </div>
                <!--// end row -->

                <!-- Copyright -->
                <ul class="list-inline footer-copyright">
                    <li class="footer-copyright-item">{{trans('messages.copyright')}}</li>
                    <li class="footer-copyright-item">
                        <ul class="list-inline team-v6-socials ul-li-lr-3">
                            <li class="theme-icons-wrap"><a target="_blank" href="https://www.facebook.com/ogxaffaire"><i class="theme-icons theme-icons-fb theme-icons-md radius-circle fa fa-facebook"></i></a></li>
                            <li class="theme-icons-wrap"><a target="_blank" href="https://twitter.com/ogxaffaire"><i class="theme-icons theme-icons-tw theme-icons-md radius-circle fa fa-twitter"></i></a></li>
                            <li class="theme-icons-wrap"><a target="_blank" href="https://plus.google.com/118401061016666309585"><i class="theme-icons theme-icons-gplus theme-icons-md radius-circle fa fa-google-plus"></i></a></li>
                            <li class="theme-icons-wrap"><a target="_blank" href="https://www.youtube.com/channel/UCMMN0ezvnL3gjcpxpYRL7mw"><i class="theme-icons theme-icons-yt theme-icons-md radius-circle fa fa-youtube"></i></a></li>
                            <li class="theme-icons-wrap"><a target="_blank" href="https://www.linkedin.com/company/ogxaffaire"><i class="theme-icons theme-icons-linkedin theme-icons-md radius-circle fa fa-linkedin"></i></a></li>
                            <li class="theme-icons-wrap"><a target="_blank" href="https://github.com/hako2008/ogxaffaire"><i class="theme-icons theme-icons-github theme-icons-md radius-circle fa fa-github"></i></a></li>
                        </ul>
                    </li>
                    <li class="footer-copyright-item-toggle-trigger"><a class="footer-toggle-trigger footer-toggle-trigger-style" href="javascript:void(0);">{{trans('messages.feedback')}}</a></li>
                </ul>
                <!-- End Copyright -->

                <!-- Collapse -->
                <div class="footer-toggle-collapse footer-toggle">
                    <div class="row">
                        <form id="comment-form" class="comment-form-error" action="{{url('/feedback')}}" method="post">
                           {{ csrf_field() }}
                        
                           <div class="row">
                              @if (Auth::guest())
                              <div class="col-md-6 margin-b-30">
                                 <input type="text" name="name" class="form-control blog-single-post-form radius-3" placeholder="{{trans('messages.lastname')}} *" required>
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
                              <textarea  class="form-control blog-single-post-form radius-3" rows="6" placeholder="{{trans('messages.suggestion')}} *" name="textarea" required></textarea>
                           </div>
                           <button style="width: 100%; color: white;" type="submit" class="btn-dark-brd btn-base-sm footer-v5-btn radius-3">{{trans('messages.publish')}}</button>
                        </form>
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
    @yield('script')
    <!-- END PAGE LEVEL SCRIPTS -->
    <!--========== END JAVASCRIPTS ==========-->
    
    
</body>
</html>

<?php
if(isset($lang) && !empty($lang)){
  
  App::setlocale($lang);

}else{
  $lang = new Lang;
}
?>
@extends('layouts.admin')
@section('header')
<meta name="keywords" content="{{ trans('messages.aboutus')}},{{trans('messages.headermetakeyword')}}" />
<meta name="description" content="{{trans('messages.ogxaffaire')}}">

<meta name="designer" content="Hamza KOUADRI">
<meta name="contact" content="info@ogxaffaire.com">
<meta name="copyright" content="Copyright © 2016 Ogxaffaire. All Rights Reserved.">



<meta property="og:title" content="{{ trans('messages.aboutus').'-'.config('app.name', 'Laravel') }}" />

<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:image" content="{{ url('/images/logo.png') }}" />
<meta property="og:image:width" content="268">
<meta property="og:image:height" content="249">
<meta name="robots" content="index,follow">

<title>{{ trans('messages.aboutus').'-'.config('app.name', 'Laravel') }}</title>
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
    
     .container {
    }
    #floating_alert {
        position: absolute;
        top: 20px;
        
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        z-index: 5000;
    }
</style>
@endsection

@section('content')

    <!--========== AD header-banner ==========-->
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

        <!--========== End AD header-banner ==========-->
    <!--========== PAGE CONTENT ==========-->
    <!-- Process v1 -->
    <div id="services" class="content-md container">
        <!-- Heading v1 -->
        <div class="heading-v1 text-center margin-b-80">
            <h2 class="heading-v1-title">{{trans('aboutus.greatportal')}}</h2>
            <p class="heading-v1-text">{{trans('aboutus.interestedin')}}</p>
        </div>
        <!-- End Heading v1 -->

        <div class="row">
            <div class="col-md-4 md-margin-b-50">
                <!-- Process v1 -->
                <div class="process-v1 img-one">
                    <div class="process-v1-body">
                        <div class="process-v1-flip">
                            <div class="process-v1-front img-one">
                                <div class="process-v1-center-align" style="width: 115px; height: 168px;">
                                    <h4 class="process-v1-title">{{trans('messages.projectideas')}}</h4>
                                </div>
                            </div>
                            <div class="process-v1-back">
                                <div class="process-v1-center-align" style="width: 115px; height: 168px;">
                                    <p class="process-v1-text">{{trans('aboutus.projectideas')}}</p>
                                </div>
                            </div>
                        </div>
                        <a class="process-v1-link"></a>
                    </div>
                </div>
                <!-- End Process v1 -->
            </div>
            <div class="col-md-4 md-margin-b-50">
                <!-- Process v1 -->
                <div class="process-v1 img-two">
                    <div class="process-v1-body">
                        <div class="process-v1-flip">
                            <div class="process-v1-front img-two">
                                <div class="process-v1-center-align" style="width: 115px; height: 168px;">
                                    <h4 class="process-v1-title">{{trans('messages.tenders')}}</h4>
                                </div>
                            </div>
                            <div class="process-v1-back">
                                <div class="process-v1-center-align" style="width: 115px; height: 168px;">
                                    <p class="process-v1-text">{{trans('aboutus.tenders')}}</p>
                                </div>
                            </div>
                        </div>
                        <a class="process-v1-link" ></a>
                    </div>
                </div>
                <!-- End Process v1 -->
            </div>
            <div class="col-md-4">
                <!-- Process v1 -->
                <div class="process-v1 img-three">
                    <div class="process-v1-body">
                        <div class="process-v1-flip">
                            <div class="process-v1-front img-three">
                                <div class="process-v1-center-align" style="width: 115px; height: 168px;">
                                    <h4 class="process-v1-title">{{trans('messages.tutorials')}}</h4>
                                </div>
                            </div>
                            <div class="process-v1-back">
                                <div class="process-v1-center-align" style="width: 115px; height: 168px;">
                                    <p class="process-v1-text">{{trans('aboutus.tutorials')}}</p>
                                </div>
                            </div>
                        </div>
                        <a class="process-v1-link" ></a>
                    </div>
                </div>
                <!-- End Process v1 -->
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Process v1 -->

    <!-- Make Your Business -->
    <div id="growupbusiness" class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-60">
                <h2 class="heading-v1-title">{{trans('aboutus.growupbusiness')}}</h2>
                <p class="heading-v1-text">{{trans('aboutus.growupbusiness2')}}</p>
            </div>
            <!-- End Heading v1 -->

            <!-- Icon Box v4 -->
            <div id="properties" class="row">
                <div class="col-md-4 md-margin-b-50">
                    <!-- Icon Box v4 -->
                    <div class="icon-box-v4">
                        <div class="margin-b-30">
                            <img class="img-responsive" src="assets/img/mockup/double-iphone-01.png" alt="">
                        </div>
                        <h3 class="icon-box-v4-body-title">{{trans('aboutus.accessibleeverywhere')}}</h3>
                        <p>{{trans('aboutus.accessibleeverywheretext')}}</p>
                    </div>
                    <!-- End Icon Box v4 -->
                </div>
                <div class="col-md-4 md-margin-b-50">
                    <!-- Icon Box v4 -->
                    <div class="icon-box-v4">
                        <div class="margin-b-30">
                            <img class="img-responsive" src="assets/img/mockup/browser-01.png" alt="">
                        </div>
                        <h3 class="icon-box-v4-body-title">{{trans('aboutus.powerfulyetsimple')}}</h3>
                        <p>{{trans('aboutus.powerfulyetsimpletext')}}</p>
                    </div>
                    <!-- End Icon Box v4 -->
                </div>
                <div class="col-md-4">
                    <!-- Icon Box v4 -->
                    <div class="icon-box-v4">
                        <div class="margin-b-30">
                            <img class="img-responsive" src="assets/img/mockup/e-commerce.png" alt="">
                        </div>
                        <h3 class="icon-box-v4-body-title">{{trans('aboutus.nosmallbusiness')}}</h3>
                        <p>{{trans('aboutus.nosmallbusinesstext')}}</p>
                    </div>
                    <!-- End Icon Box v4 -->
                </div>
            </div>
            <!--// end row -->
            <!-- End Icon Box v4 -->
        </div>
    </div>
    <!-- End Make Your Business -->

        
        
    </div>
    <!-- End Team v6 -->

    

    <!-- Services v7 -->
    <div id="opensource" class="content-md container">
        <!-- Heading v1 -->
        <div class="heading-v1 text-center margin-b-80">
            <h2 class="heading-v1-title">{{trans('aboutus.opensourcehint')}}<br/><a target="_blank" href="https://github.com/hako2008/ogxaffaire">{{ trans('aboutus.githubrepository') }}</a></h2>
            <p class="heading-v1-text">{{ trans('aboutus.shouldknow') }}</p>
        </div>
        <!-- End Heading v1 -->

        <div class="row">
            <div class="col-md-4 md-margin-b-30">
                <div class="overflow-h">
                    <!-- Services v7 -->
                    <div class="services-v7 services-v7-img-one">
                        <div class="services-v7-body">
                            <h2 class="services-v7-title">{{ trans('aboutus.bootstrap') }}</h2>
                            <div class="services-v7-collapsed margin-b-50">
                                <p class="services-v7-text">{{ trans('aboutus.bootstraptext') }}</p>
                            </div>
                            <div class="services-v7-more">
                                <a class="services-v7-link" href="{{ url('/article/1') }}">
                                    <i class="services-v7-link-icon radius-circle"></i>
                                    <span class="services-v7-link-title">{{ trans('aboutus.readmore') }}</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Services v7 -->
                </div>
            </div>
            <div class="col-md-4 md-margin-b-30">
                <div class="overflow-h">
                    <!-- Services v7 -->
                    <div class="services-v7 services-v7-img-two">
                        <div class="services-v7-body">
                            <h2 class="services-v7-title">{{ trans('aboutus.jquery') }}</h2>
                            <div class="services-v7-collapsed margin-b-50">
                                <p class="services-v7-text">{{ trans('aboutus.jquerytext') }}</p>
                            </div>
                            <div class="services-v7-more">
                                <a class="services-v7-link" href="{{ url('/article/2') }}">
                                    <i class="services-v7-link-icon radius-circle"></i>
                                    <span class="services-v7-link-title">{{ trans('aboutus.readmore') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Services v7 -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="overflow-h">
                    <!-- Services v7 -->
                    <div class="services-v7 services-v7-img-three">
                        <div class="services-v7-body">
                            <h2 class="services-v7-title">{{ trans('aboutus.laravel') }}</h2>
                            <div class="services-v7-collapsed margin-b-50">
                                <p class="services-v7-text">{{ trans('aboutus.laraveltext') }}</p>
                            </div>
                            <div class="services-v7-more">
                                <a class="services-v7-link" href="{{ url('/article/6') }}">
                                    <i class="services-v7-link-icon radius-circle"></i>
                                    <span class="services-v7-link-title">{{ trans('aboutus.readmore') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Services v7 -->
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Services v7 -->
    <!-- Newsletter v3 -->
    
    <section class="newsletter-v3 bg-color-sky-light">
        <div class="content-md container-xs">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-40">
                <h2 class="heading-v1-title">{{ trans('aboutus.newsletter') }}</h2>
                <p class="heading-v1-text">{{ trans('aboutus.newslettertext') }}</p>
                <p class="heading-v1-text">{{ trans('aboutus.nospamming') }}</p>
            </div>
            <!-- End Heading v1 -->

            <div class="row space-row-5">
                <form action="{{url('/newsletter')}}" method="post" id="comment-form" action="index.html" method="get">
                {{ csrf_field() }}
                    <div class="col-xs-8 xs-full-width xs-margin-b-20">
                        <input value="@if(!Auth::guest()){{Auth::user()->email}}@endif" type="email" name="email" class="form-control newsletter-v3-form radius-3" placeholder="{{ trans('messages.email') }}" required>
                    </div>
                    <div class="col-xs-4 xs-full-width">
                        <button class="btn-dark-bg btn-base-md btn-block radius-3" type="submit">{{ trans('aboutus.subscribe') }}</button>
                    </div>
                </form>
            </div>
            <!--// end row -->
        </div>
    </section>
    <div id="alert">
       
    </div>
    
    <!-- End Newsletter v3 -->
    <!-- Clients v4 >
    <div class="bg-color-sky-light">
        <div class="content-md container">
            
            <div class="heading-v1 text-center margin-b-80">
                <h2 class="heading-v1-title">Clients we work with</h2>
                <p class="heading-v1-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    
                    <ul class="list-inline owl-carousel-clients-five-item clients-v1">
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-01.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-01.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-02.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-02.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-05.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-05.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-06.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-06.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-03.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-03.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-04.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-04.png" alt="">
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients v4 >
    <!--========== END PAGE CONTENT ==========-->

@endsection
@section('script')
    <script type="text/javascript">
        bootstrap_alert = function () {}
        bootstrap_alert.warning = function (message, alert, timeout) {
            $('<div id="floating_alert" class="text-center alert alert-' + alert + ' fade in"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' + message + '&nbsp;&nbsp;</div>').appendTo('#alert');


            setTimeout(function () {
                $(".alert").alert('close');
            }, timeout);

        }

        @if($errors->any())
            bootstrap_alert.warning('<strong>{{ trans('aboutus.newslettersuccess') }}</strong>', 'success', 7000);
        @endif
        
            // available: success, info, warning, danger
        
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
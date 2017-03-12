<?php
if(isset($lang) && !empty($lang)){
  
  App::setlocale($lang);

}else{
  $lang = new Lang;
}
?>
@extends('layouts.admin')
@section('header')
<meta name="keywords" content="{{trans('messages.headermetakeyword')}}" />
<meta name="description" content="{{trans('messages.ogxaffaire')}}">

<meta name="designer" content="Hamza KOUADRI">
<meta name="contact" content="info@ogxaffaire.com">
<meta name="copyright" content="Copyright © 2016 Ogxaffaire. All Rights Reserved.">



<meta property="og:title" content="{{ trans('messages.contactus').'-'.config('app.name', 'Laravel') }}" />

<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:image" content="{{ url('/images/logo.png') }}" />
<meta property="og:image:width" content="268">
<meta property="og:image:height" content="249">
<meta name="robots" content="index,follow">

<title>{{ trans('messages.contactus').'-'.config('app.name', 'Laravel') }}</title>

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
    <!-- Contacts -->
    <div class="content-md container">
        <div class="row">
            <div class="col-md-3 col-sm-6 md-margin-b-50">
                <!-- Contacts -->
                <div class="text-center">
                    <i class="font-size-36 color-base margin-b-20 icon-phone"></i>
                    <h3 class="font-size-20">{{trans('contacts.telephone')}} 1</h3>
                    <p><a href="tel:+213663818580">0663818580</a></p>
                </div>
                <!-- End Contacts -->
            </div>
            <div class="col-md-3 col-sm-6 md-margin-b-50">
                <!-- Contacts -->
                <div class="text-center">
                    <i class="font-size-36 color-base margin-b-20 icon-phone"></i>
                    <h3 class="font-size-20">{{trans('contacts.telephonefax')}}</h3>
                    <p><a href="tel:+21329714262">029714262</a></p>
                </div>
                <!-- End Contacts -->
            </div>
            <div class="col-md-3 col-sm-6 sm-margin-b-50">
                <!-- Contacts -->
                <div class="text-center">
                    <i class="font-size-36 color-base margin-b-20 icon-map-pin"></i>
                    <h3 class="font-size-20">{{trans('contacts.address')}}</h3>
                    <p>{{trans('contacts.addresstext')}}</p>
                </div>
                <!-- End Contacts -->
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Contacts -->
                <div class="text-center">
                    <i class="font-size-36 color-base margin-b-20 icon-envelope"></i>
                    <h3 class="font-size-20">{{trans('contacts.email')}}</h3>
                    <p><a href="mailto:info@ogxaffaire.com">info@ogxaffaire.com</a></p>
                </div>
                <!-- End Contacts -->
            </div>
        </div>
        
        <!-- // end row -->
    </div>
    <!-- End Contacts -->

    <!-- Contact v2 -->
    <div class="bg-color-sky-light">
        <div class="content-md container">
            <div class="row">            
            <div class="col-md-12 col-sm-6">
                <!-- Contacts -->
                <div class="text-center">
                    
                <ul class="list-inline footer-copyright">                    
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
                    
                </ul>
                
                </div>
                <!-- End Contacts -->
            </div>
        </div>
            <div class="row">
                <div class="col-md-6 md-margin-b-30">
                    <!-- Comment Form v1 -->
                    <form action="{{url('/contactmessage')}}" method="post" id="comment-form" class="comment-form-v1 comment-form-error contact-us-equal-height bg-color-white padding-40" action="index.html" method="get">
                    {{ csrf_field() }}
                        <h2 class="font-size-28 margin-b-40">{{trans('contacts.leavemessage')}}</h2>
                        <div class="row space-row-10">
                            @if (Auth::guest())
                            <div class="col-md-6 margin-b-20">
                                <input type="text" class="form-control comment-form-v1-input" placeholder="{{trans('messages.fullname')}} *" name="name" required>
                            </div>
                            <div class="col-md-6 margin-b-20">
                                <input type="email" class="form-control comment-form-v1-input" placeholder="{{trans('messages.email')}} *" name="email" required>
                            </div>
                            @else
                            <h2>{{ Auth::user()->name }}</h1>
                            <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                            @endif
                        </div>
                        <!--// end row -->
                        
                        <div class="margin-b-20">
                            <textarea class="form-control comment-form-v1-input" rows="5" placeholder="{{trans('messages.yourmessage')}} *" name="textarea" required></textarea>
                        </div>
                        <div class="margin-b-20">
                            <button type="submit" class="btn-base-bg btn-base-sm radius-3">{{trans('messages.submit')}}</button>
                        </div>
                        
                    </form>
                    <!-- End Comment Form v1 -->
                </div>
                
                <!-- Contact Timeline -->
                <div class="col-md-6">
                    <div class="contact-us contact-us-equal-height bg-color-white">
                        <h2 class="font-size-28 margin-b-40">{{trans('contacts.weareopenat')}}</h2>
                        <p class="font-style-italic margin-b-40">{{trans('contacts.weareopenatmessage')}}</p>
                        <div class="row margin-b-30 md-margin-b-20">
                            <div class="col-md-3 md-margin-b-20">
                                <span class="contact-us-timeline-day">{{trans('contacts.saturday')}}</span>
                                <span class="contact-us-timeline-time">09am - 06pm</span>
                            </div>
                            <div class="col-md-3 md-margin-b-20">
                                <span class="contact-us-timeline-day">{{trans('contacts.sunday')}}</span>
                                <span class="contact-us-timeline-time">09am - 06pm</span>
                            </div>
                            <div class="col-md-3 md-margin-b-20">
                                <span class="contact-us-timeline-day">{{trans('contacts.monday')}}</span>
                                <span class="contact-us-timeline-time">09am - 06pm</span>
                            </div>
                            <div class="col-md-3">
                                <span class="contact-us-timeline-day">{{trans('contacts.tuesday')}}</span>
                                <span class="contact-us-timeline-time">09am - 06pm</span>
                            </div>
                        </div>
                        <!--// end row -->
                        
                        <div class="row">
                            <div class="col-md-3 md-margin-b-20">
                                <span class="contact-us-timeline-day">{{trans('contacts.wednesday')}}</span>
                                <span class="contact-us-timeline-time">09am - 06pm</span>
                            </div>
                            <div class="col-md-3 md-margin-b-20">
                                <span class="contact-us-timeline-day">{{trans('contacts.thursday')}}</span>
                                <span class="contact-us-timeline-time">09am - 06pm</span>
                            </div>
                            <div class="col-md-3 md-margin-b-20">
                                <span class="contact-us-timeline-day bg-color-red">{{trans('contacts.friday')}}</span>
                                <span class="contact-us-timeline-time">{{trans('contacts.closed')}}</span>
                            </div>
                            <div class="col-md-3">
                                <span class="contact-us-timeline-day bg-color-red">{{trans('contacts.holiday')}}</span>
                                <span class="contact-us-timeline-time">{{trans('contacts.closed')}}</span>
                            </div>
                        </div>
                        <!--// end row -->
                    </div>
                </div>
                <!-- End Contact Timeline -->
            </div>
            <!--// end row -->
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
            <!-- End Newsletter v3 -->
            <div id="alert">
               
            </div>
        </div>
    </div>
    <!-- End Contact v2 -->

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
<?php
$lang = new Lang;

?>
@extends('layouts.admin')

@section('header')
<meta name="keywords" content="connexion,login,تسجيل الدخول,{{trans('messages.headermetakeyword')}}" />
<meta name="description" content="{{trans('messages.ogxaffaire')}}">
<meta name="designer" content="Hamza KOUADRI">
<meta name="contact" content="info@ogxaffaire.com">
<meta name="copyright" content="Copyright © 2016 Ogxaffaire. All Rights Reserved.">



<meta property="og:title" content="{{ trans('messages.login') }}-{{ config('app.name', 'Laravel') }}" />

<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:image" content="{{ url('/images/logo.png') }}" />
<meta property="og:image:width" content="268">
<meta property="og:image:height" content="249">
<meta name="robots" content="index,follow">

<title>{{ trans('messages.login') }}-{{ config('app.name', 'Laravel') }}</title>

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
<div class="wrapper animsition">   
    <!--========== PAGE CONTENT ==========-->
    <!-- Login -->
    <div class="content-sm container-xs center-block">
        <!-- Login -->
        <div class="login">
            
            <div class="login-content radius-3 margin-b-30">
                <!-- Login Form -->
                <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                    <div class="margin-b-30">
                        <h1 class="login-form-title">{{ trans('messages.login') }}</h1>
                        <p>{{ trans('auth.yourcredentials') }}</p>
                    </div>
                    <div class="form-group">
                        
                        <input class="form-control" id="email" type="email" placeholder="{{ trans('messages.email') }}" autocomplete="on" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        
                        <input class="form-control" id="password" type="password" placeholder="{{ trans('auth.password') }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="login-form-actions">
                        <div class="checkbox pull-left" style="margin-top: 0;">                            
                            <input type="checkbox" name="remember">
                            <label for="checkbox">
                                {{ trans('auth.rememberme') }}
                            </label>
                        </div>
                        <a @if(App::getLocale() == "ar") style="float: right;" @endif href="{{ url('/password/reset') }}" id="forgot-password" class="login-form-forgot">{{ trans('auth.forgotpassword') }}</a>
                    </div>
                    <button type="submit" class="btn-base-bg btn-base-sm btn-block radius-3 margin-b-30">{{ trans('auth.login') }}</button>
                    <p>
                        {{ trans('auth.haventaccount') }}
                        <a href="{{ url('/register') }}" id="go-to-signup-form-btn">{{ trans('messages.register') }}</a>
                    </p>
                </form>
                <!-- End Login Form -->
                <?php                        
                    Session::set('backUrl', URL::previous());
                ?>
                
            </div>            
        </div>
        <!-- End Login -->
    </div>
    <!-- End Login -->
<!--========== END PAGE CONTENT ==========-->
</div>
<!-- END WRAPPER -->
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



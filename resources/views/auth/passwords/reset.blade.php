<?php $lang = new Lang; ?>
@extends('layouts.admin')

@section('header')
<meta name="keywords" content="connexion,login,تسجيل الدخول,{{trans('messages.headermetakeyword')}}" />
<meta name="description" content="{{trans('messages.ogxaffaire')}}">
<meta name="designer" content="Hamza KOUADRI">
<meta name="contact" content="info@ogxaffaire.com">
<meta name="copyright" content="Copyright © 2016 Ogxaffaire. All Rights Reserved.">



<meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />

<meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:image" content="{{ url('/images/logo.png') }}" />
<meta property="og:image:width" content="268">
<meta property="og:image:height" content="249">
<meta name="robots" content="index,follow">

<title>{{ trans('auth.resetpassword') }}-{{ config('app.name', 'Laravel') }}</title>
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('auth.resetpassword') }}</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{ trans('messages.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{ trans('auth.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" autocomplete="off" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">{{ trans('auth.confirmpd') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" autocomplete="off" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('auth.resetpassword') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

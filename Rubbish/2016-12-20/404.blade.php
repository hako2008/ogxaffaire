<?php 
$lang = new Lang;
?>
@extends('layouts.app')
@section('header')


<meta name="description" content="{{trans('messages.404error')}}">
<meta name="robots" content="noindex,nofollow">

<title>{{ '404-'.config('app.name', 'Laravel') }}</title>

@endsection

@section('content')

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
                   <img src="images/404-error-page.png" class="img-responsive"> 
                </div>
            </div>
        </div>
    </div>
               
                <!-- End Paginations v3 -->   
</div>
@endsection

<?php
$lang = new \App\lib\Lang;

$originalcomment = App\Comment::findOrFail($commentid);
$articleid = $originalcomment->article_id;
if(App\User::where('email', $originalcomment->email)->exists()){
  $user = App\User::where('email','=', $originalcomment->email)->first();
  
  App::setLocale(App\User::where('email','=', $originalcomment->email)->first()->lang);
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>{{trans('messages.commentstate')}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
<style type="text/css">
  * {
  margin: 0;
  padding: 0;
  font-size: 100%;
  font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  line-height: 1.65; }

img {
  max-width: 100%;
  margin: 0 auto;
  display: block; }

body,
.body-wrap {
  width: 100% !important;
  height: 100%;
  background: #efefef;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: none; }

a {
  color: #ed1d34;
  text-decoration: none; }

.text-center {
  text-align: center; }

.text-right {
  text-align: right; }

.text-left {
  text-align: left; }

.button {
  display: inline-block;
  color: white;
  background: #ed1d34;
  border: solid #ed1d34;
  border-width: 10px 20px 8px;
  font-weight: bold;
  border-radius: 4px; }

h1, h2, h3, h4, h5, h6 {
  margin-bottom: 20px;
  line-height: 1.25; }

h1 {
  font-size: 32px; }

h2 {
  font-size: 28px; }

h3 {
  font-size: 24px; }

h4 {
  font-size: 20px; }

h5 {
  font-size: 16px; }

p, ul, ol {
  font-size: 16px;
  font-weight: normal;
  margin-bottom: 20px; }

.container {
  display: block !important;
  clear: both !important;
  margin: 0 auto !important;
  max-width: 580px !important; }
  .container table {
    width: 100% !important;
    border-collapse: collapse; }
  .container .masthead {
    padding: 80px 0;
    background: #fff;
    color: white; }
    .container .masthead h1 {
      margin: 0 auto !important;
      max-width: 90%;
      color: #333;
      text-transform: uppercase; }
  .container .content {
    background: #6d6e70;
    padding: 30px 35px;
    color: #fff;
  }
    .container .content.footer {
      background: none; }
      .container .content.footer p {
        margin-bottom: 0;
        color: #888;
        text-align: center;
        font-size: 14px; }
      .container .content.footer a {
        color: #888;
        text-decoration: none;
        font-weight: bold; }
.headerimage {
    width: 100%;
    height: 50px;
    background-image: url('{{url('/images/logofive.png')}}');
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    
}
</style>

</head>

<body>

  <table class="body-wrap">
      <tr>
          <td class="container">

              <!-- Message start -->
              <table @if(App::getLocale() == 'ar') dir="rtl" @endif>
                  <tr>
                      <td align="center" class="masthead">

                          <div class="headerimage"></div>
                          <h1>{{trans('messages.commentstate')}}</h1>

                      </td>
                  </tr>
                  <tr>
                      <td class="content">

                          <h2><a href="mailto:{{$email}}">{{$name}}</a> {{trans('messages.repliedtoyourcomment')}} <a href="{{url('/article').'/'. $articleid.'#comment'. $commentid}}">{{trans('messages.comment')}}</a></h2>
                          <h3><a href="{{url('/article').'/'. $articleid.'#commentanswer'. $responseid}}">{{trans('messages.newcomment')}}</a></h3>

                          <p>
                            {{$content}}
                          </p>

                          <table>
                              <tr>
                                  <td align="center">
                                      <p>
                                          <a href="{{url('/article').'/'. $articleid.'#commentanswer'. $responseid}}" class="button">{{trans('messages.check')}}</a>
                                      </p>
                                  </td>
                              </tr>
                          </table>

                          <p>{{trans('messages.visit')}} <a href="http://ogxaffaire.com">OgxAffaire</a>.</p>

                          <p><em>– {{trans('messages.ogxaffaireteam')}}</em></p>

                      </td>
                  </tr>
              </table>

          </td>
      </tr>
      <tr>
          <td class="container">

              <!-- Message start -->
              <table>
                  <tr>
                      <td class="content footer" align="center">
                          <p>{{trans('messages.sentby')}} <a href="http://ogxaffaire.com">OgxAffaire</a></p>
                          <p><a href="mailto:info@ogxaffaire.com">info@ogxaffaire.com</a> | {{trans('messages.donotreply')}}</p>
                      </td>
                  </tr>
              </table>

          </td>
      </tr>
  </table>
</body>
</html>
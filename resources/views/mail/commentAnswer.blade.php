<?php
namespace App\Http\Controllers;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ètat de Commentaire</title>
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
  color: #6d6e70;
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
  background: #6d6e70;
  border: solid #6d6e70;
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
    background: #ed1d34;
    color: white; }
    .container .masthead h1 {
      margin: 0 auto !important;
      max-width: 90%;
      color: #333;
      text-transform: uppercase; }
  .container .content {
    background: white;
    padding: 30px 35px; }
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

</style>
</head>
<?php if (!isset($articleid)) {
  $articleid = 1;
  $name = 'Hamza KOUADRI';
  $content = 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها. ';
  $commentid = 1;
  $email = 'hamza.kouadridz@gmail.com';
  $user = 
} ?>
<body>

  <table class="body-wrap">
      <tr>
          <td class="container">

              <!-- Message start -->
              <table>
                  <tr>
                      <td align="center" class="masthead">

                          <h1>Ètat de Commentaire</h1>

                      </td>
                  </tr>
                  <tr>
                      <td class="content">

                          <h2>Nouveau <a href="{{url('/article').'/'. $articleid.'#comment'. $commentid}}">commentaire</a>,</h2>
                          <h3>Nouveau <a href="{{url('/article').'/'. $articleid.'#comment'. $commentid}}">commentaire</a> dans <a href="{{url('/article').'/'. $articleid}}">l'article</a></h3>

                          <p>
                            <h3>par : {{$name}}</h3>
                            <h6><a href="mailto:{{$email}}">{{$email}}</a></h6>
                            {{$content}}
                          </p>

                          <table>
                              <tr>
                                  <td align="center">
                                      <p>
                                          <a href="{{url('/article').'/'. $articleid.'#comment'. $commentid}}" class="button">vérifier</a>
                                      </p>
                                  </td>
                              </tr>
                          </table>

                          <p>visitez <a href="http://ogxaffaire.com">OgxAffaire</a>.</p>

                          <p><em>– L'Équipe OgxAffaire</em></p>

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
                          <p>Envoyé par <a href="http://ogxaffaire.com">OgxAffaire</a></p>
                          <p><a href="mailto:info@ogxaffaire.com">info@ogxaffaire.com</a> | Ne pas répondre dans cette adresse</p>
                      </td>
                  </tr>
              </table>

          </td>
      </tr>
  </table>
</body>
</html>
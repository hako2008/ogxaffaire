<?php
use Illuminate\Database\Eloquent\ModelNotFoundException; 
$lang = new Lang;
?>
<?php

$FmyFunctions1 = new MyFunctions;
$categoryList = $FmyFunctions1->fetchCategoryTree();

?>


@extends('layouts.admin')
@section('header')
<meta name="robots" content="noindex,nofollow">
<meta name="robots" content="index,follow">
<link rel="stylesheet" href="{{url('/css/app.css ')}}">
<title>{{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')
<script src="{{url('/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{url('/js/ckeditor.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#deletethumbnail').on({
      'click': function(){
          $('#img').attr('src','');
          $('#thumbnailimage').val('');
      }
  });
});

function openKCFinder(div) {
    window.KCFinder = {
        callBack: function(url) {
            window.KCFinder = null;
            div.innerHTML = '<div style="margin:5px">Loading...</div>';
            var img = new Image();
            img.src = url;
            img.onload = function() {
                div.innerHTML = '<img id="img" class="img-responsive" alt="{{trans("messages.imagehint")}}" src="' + url + '" />';
                document.getElementById("thumbnailimage").value = url;
                var img = document.getElementById('img');
                var o_w = img.offsetWidth;
                var o_h = img.offsetHeight;
                var f_w = div.offsetWidth;
                var f_h = div.offsetHeight;
                if ((o_w > f_w) || (o_h > f_h)) {
                    if ((f_w / f_h) > (o_w / o_h))
                        f_w = parseInt((o_w * f_h) / o_h);
                    else if ((f_w / f_h) < (o_w / o_h))
                        f_h = parseInt((o_h * f_w) / o_w);
                    img.style.width = f_w + "px";
                    img.style.height = f_h + "px";
                } else {
                    f_w = o_w;
                    f_h = o_h;
                }
                img.style.marginLeft = parseInt((div.offsetWidth - f_w) / 2) + 'px';
                img.style.marginTop = parseInt((div.offsetHeight - f_h) / 2) + 'px';
                img.style.visibility = "visible";
            }
        }
    };
    window.open('{{url("/js/kcfinder/browse.php?type=images&dir=images/public")}}',
        'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
}

</script>
<?php 
if(isset($id)){
  // Will return a ModelNotFoundException if no user with that id
  try
  {
      //$user = User::findOrFail($id);

      $article = App\Article::findOrFail($id);
      $articleGategories = $article->categories;
      $articleStates = $article->states;
      $articleKeywords = $article->keywords;

  }
  // catch(Exception $e) catch any exception
  catch(ModelNotFoundException $e)
  {
      
      die(trans('errors.articlenotfound'));
  }

/*echo "<pre>";
var_dump($articleGategories[0]);
foreach ($articleGategories as $articleGategorie) {
  # code...
  echo $articleGategorie->id." : ".$articleGategorie->name." : ";
  var_dump($articleGategorie['attributes']["id"]);
}

die();*/
  
}

?>

<div class="container-fluid">
    <form action="" method="post">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-9">
              
                {{ csrf_field() }}
                <input type="hidden" name="lang" value="{{App::getLocale()}}">
                @if(isset($id))
                    <input type="hidden" name="posteid" value="{{$id}}">
                @endif
                <div class="form-group">
                  
                  <input type="text" style="color: black;font-weight: bold;" value="@if(isset($id)){{$article->title}}@endif" class="form-control" name="title" placeholder="{{trans('messages.title')}}" required>
                </div>
                <div class="form-group">
                             
                  <textarea name="editor" class="ckeditor form-control" required>@if(isset($id)){{$article->content}}@endif</textarea>
                </div>
                <div class="form-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">{{trans('messages.abstract')}}</div>
                    <div class="panel-body">                      
                      <textarea class="form-control" rows="5" name="abstract" required>@if(isset($id)){{$article->abstract}}@endif</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="panel panel-default">
                    <div class="panel-heading">{{trans('messages.keywords')}}</div>
                    <div class="panel-body">
                      <label for="comment" style="font-size: 10px;">{{trans('messages.keywordshelp')}}:</label>
                      <textarea class="form-control" rows="5" name="keywords" required><?php 
                      if(isset($id)){
                        foreach ($articleKeywords as $keyword)
                        {
                            echo $keyword->name.",";
                        } 
                      }
                      
                        ?></textarea>                      
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">{{trans('messages.publishgroup')}}</div>
                  <div class="panel-body">
                    @if(isset($id))
                      <button  type="submit" name="submit" value="update" class="btn btn-info">{{trans('messages.updatepost')}}</button>
                    @else
                      <button  type="submit" name="submit" value="publish" class="btn btn-info">{{trans('messages.publish')}}</button>
                    @endif
                    
                    <button  type="submit" name="submit" value="savepost" class="btn btn-success">{{trans('messages.savepost')}}</button>
                    @if(isset($id))
                      <button  type="submit" name="submit" value="delete" class="btn btn-danger">{{trans('messages.deletpost')}}</button>
                    @endif
                    @if(isset($id))
                      @if($article->published)
                        <div class="led-box">
                          <div class="led-green"></div>
                          <p>{{trans('messages.enableddarticle')}}</p>
                        </div>
                      @else
                        <div class="led-box">
                          <div class="led-red"></div>
                          <p>{{trans('messages.disabledarticle')}}</p>
                        </div>
                      @endif
                    @endif
                  </div>
                </div>
            
            
          </div>
          <!--div class="col-xs-12 col-md-3">
            
          </div-->
          <div class="col-xs-6 col-md-3">
              <div class="panel panel-default">
                <div class="panel-heading">{{trans('messages.categories')}}</div>
                <div class="panel-body">
                  <div class="pre-scrollable">
                        
                      <?php 
                      foreach ($categoryList as $category)
                      {
                        $categorySplited = $FmyFunctions1->SplitWhitespace($category['name']);
                        
                      
                    ?> 
                      <div class="checkbox">
                        {{ $categorySplited[0] }}<input id="checkbox{{$category['id']}}" type="checkbox" name="categories[]" value="{{$category['id']}}" <?php 
                      if(isset($id)) if($article->categories->contains($category['id'])) echo "checked";
                    ?>><label for="checkbox{{$category['id']}}">{{$categorySplited[1]}}</label>          
                      </div>

                    <?php 
                      }
                    ?>
                    
                  </div>
                </div>
              </div>    
          </div>
          <div class="col-xs-6 col-md-3">
              <div class="panel panel-default">
                <div class="panel-heading">{{trans('messages.states')}}</div>
                <div class="panel-body">
                  <div class="pre-scrollable">
                      <?php
                      $states = App\State::all();
                      foreach ($states as $state)
                      {
                        
                        
                      
                    ?> 
                      <div class="checkbox">
                        {{""}}<input id="checkboxstate{{$state->id}}" type="checkbox" name="states[]" value="{{$state->id}}" <?php 
                      if(isset($id)) if($article->states->contains($state->id)) echo "checked";
                    ?>><label for="checkboxstate{{$state->id}}">{{$state->name}}</label>          
                      </div>

                    <?php 
                      }
                    ?>
                  </div>
                </div>
              </div>    
          </div>
          <div class="col-xs-6 col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">{{trans('messages.setpostthumbnail')}}</div>
              <div class="panel-body">
                <input id="thumbnailimage" type="hidden" value="@if(isset($id)){{$article->image}}@endif" name="image">
                <?php
                  if(isset($id)):
                ?>
                <div id="image"  onclick="openKCFinder(this)" style="cursor: pointer;" class=""><img id="img" class="img-responsive" alt="{{trans('messages.imagehint')}}" src="{{$article->image}}" style="width: 275px; height: 137px; margin-left: 0px; margin-top: 0px; visibility: visible;"></div>
                <?php
                  else:
                ?>
                <div id="image" onclick="openKCFinder(this)" style="cursor: pointer;" class=""><div style="margin:5px">{{trans('messages.imagehint')}}</div></div>
                <?php
                  endif;
                ?>
                <a style="cursor: pointer;" id="deletethumbnail" class="btn-danger center-block"><div  class="text-center">{{trans('messages.imageremove')}}</div></a>
              </div>
            </div>
          </div>
          
          
        </div>
    </form> 
    
</div>
<script type="text/javascript">
        CKEDITOR.replace( 'editor', {
        language: '{{App::getLocale()}}',
        
    });
</script>

@endsection

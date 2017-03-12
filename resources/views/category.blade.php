@extends('layouts.admin')
@section('header')
<meta name="robots" content="noindex,nofollow">


<title>{{ config('app.name', 'Laravel') }}</title>
@endsection

<?php App::setlocale('fr'); ?>
@section('content')
<div class="container">
    <div class="row">
  <div class="col-md-9 col-md-push-3">
      <ul class="list-group">
        <?php
            $categories = array();
            $FmyFunctions1 = new MyFunctions;
            $categoryList = $FmyFunctions1->fetchCategoryTree();
            
        ?>
         
         @foreach ($categoryList as $category)
            
            <li class="list-group-item">{{ $category["name"] }}</li>
         @endforeach
        

          
        </ul>
  </div>
  <div class="col-md-3 col-md-pull-9">
      <form role="form" data-toggle="validator" method="post">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="inputName" class="control-label">Category arabe</label>
            <input type="text" name="lang1" class="form-control" id="inputName" placeholder="الزراعية" required>
        </div>
        <div class="form-group">
            <label for="inputName" class="control-label">Category en</label>
            <input type="text" name="lang2" class="form-control" id="inputName" placeholder="agri" required>
        </div>
        <div class="form-group">
            <label for="inputName" class="control-label">Category fr</label>
            <input type="text" name="lang3" class="form-control" id="inputName" placeholder="Agroalimentaire" required>
        </div>

        <div class="form-group">
            <label for="inputName" class="control-label">description arabe</label>
            <textarea class="form-control" rows="5" name="desc1"></textarea>
            
        </div>
        <div class="form-group">
            <label for="inputName" class="control-label">description en</label>
            <textarea class="form-control" rows="5" name="desc2"></textarea>
        </div>
        <div class="form-group">
            <label for="inputName" class="control-label">description fr</label>
            <textarea class="form-control" rows="5" name="desc3"></textarea>
        </div>

        <div class="form-group">
            <label for="inputName" class="control-label">Père</label>
            
            <select name="relatedto" class="selectpicker" data-live-search="true">
                <option value="0" >Rien sélectionné</option>
                @foreach ($categoryList as $category)
                <option class="level-1" value="{{ $category['id'] }}">{{ $category["name"] }}</option>
                @endforeach
                
            </select>
            
            <script type="text/javascript">
                $('.selectpicker').selectpicker();
            </script>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">OK</button>
        </div>
        
    </form>
  </div>
</div>

</div>
@endsection

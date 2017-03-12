@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
  <div class="col-md-9 col-md-push-3">
      <ul class="list-group">
        <?php
            $states = App\State::orderBy('code')->get();
            
        ?>
           
         @foreach ($states as $state)
            
            <li class="list-group-item">{{ App::setLocale('ar')}} {{ $state->code }} | {{ $state->name }} | {{ App::setLocale('en')}} {{ $state->name }} | {{ App::setLocale('fr')}} {{ $state->name }}</li>
         @endforeach
          
          
        </ul>
  </div>
  <div class="col-md-3 col-md-pull-9">
      <form role="form" data-toggle="validator" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputName" class="control-label">code</label>
            <input type="number" name="code" class="form-control" id="inputName" placeholder="30" required>
        </div>
        <div class="form-group">
            <label for="inputName" class="control-label">wilaya arabe</label>
            <input type="text" name="lang1" class="form-control" id="inputName" placeholder="ورقلة" required>
        </div>
        <div class="form-group">
            <label for="inputName" class="control-label">wilaya en</label>
            <input type="text" name="lang2" class="form-control" id="inputName" placeholder="wargla" required>
        </div>
        <div class="form-group">
            <label for="inputName" class="control-label">wilaya fr</label>
            <input type="text" name="lang3" class="form-control" id="inputName" placeholder="Ouargla" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">OK</button>
        </div>
        
    </form>
  </div>
</div>

</div>
@endsection

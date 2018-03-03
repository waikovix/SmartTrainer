@extends('layouts.app_layout')
@section('title')
KG progress
@endsection
@section('content')
<form class="form-horizontal" action="" method="post">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}

<div class="form-group">
    <label for="kg" class="col-md-4 control-label">KG:</label>

    <div class="col-md-6">
        <input id="kg" type="number" step="any" class="form-control" name="kg" value="{{$kg->kg}}" required autofocus>
    </div>
</div>
<div class="form-group">
    <label for="body_fat" class="col-md-4 control-label">Body fat %:</label>

    <div class="col-md-6">
        <input id="body_fat" type="number" step="any" class="form-control" name="body_fat" value="{{$kg->body_fat}}" required autofocus>
    </div>
</div>
<div class="form-group">


    <div class="col-md-6">
      <button type="submit" class="btn btn-primary">
          Update
      </button>

    </div>
</div>
</form>
<form class="" action="" method="post">
  {{ method_field('Delete') }}
  {{csrf_field()}}
  <button type="submit" class="btn btn-danger">
      Delete
  </button>

</form>
@endsection

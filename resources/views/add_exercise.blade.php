@extends('layouts.app_layout')
@section('title')
Add exercise
@endsection
@section('content')
<form class="" action="" method="post">

{{csrf_field()}}
<div class="form-group">
    <label for="password" class="col-md-4 control-label">Exercise name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Add exercise
            </button>
        </div>
</div>
</form>
@endsection

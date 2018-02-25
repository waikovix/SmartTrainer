@extends('layouts.app_layout')
@section('title')
Add food
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Note:Add a correct calories and macros for 100gr</h1></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/food/create">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Food name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('calories') ? ' has-error' : '' }}">
                            <label for="calories" class="col-md-4 control-label">Calories</label>

                            <div class="col-md-6">
                                <input id="calories" type="number" class="form-control" name="calories" required autofocus>

                                @if ($errors->has('calories'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('calories') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('calories') ? ' has-error' : '' }}">
                            <label for="calories" class="col-md-4 control-label">Protein</label>

                            <div class="col-md-6">
                                <input id="protein" type="number" class="form-control" name="protein" required autofocus>

                                @if ($errors->has('protein'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('protein') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('carbs') ? ' has-error' : '' }}">
                            <label for="carbs" class="col-md-4 control-label">Carbs</label>

                            <div class="col-md-6">
                                <input id="carbs" type="number" class="form-control" name="carbs" required autofocus>

                                @if ($errors->has('carbs'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('calories') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fat') ? ' has-error' : '' }}">
                            <label for="fat" class="col-md-4 control-label">Fat</label>

                            <div class="col-md-6">
                                <input id="fat" type="number" class="form-control" name="fat" required>

                                @if ($errors->has('fat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create food
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
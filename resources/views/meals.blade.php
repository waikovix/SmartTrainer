@extends('layouts.app_layout')
@section('title')
Insert Meal
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('meal') ? ' has-error' : '' }}">
                            <label for="meal" class="col-md-4 control-label">Meal Type</label>

                            <div class="col-md-6">
                               <select name="meal" id="meal" class="form-control">
                                <option value="breakfast" >Breakfast</option>
                                <option value="lunch" >Lunch</option>
                                <option value="dinner" >Dinner</option>
                               </select>
                            </div>
                        </div>

                        <meal-info protein = "{{($macros->protein)/100}}" carbs = "{{($macros->carbs)/100}}" fat = "{{($macros->fat)/100}}" calories = "{{($macros->calories)/100}}"></meal-info>
                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
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

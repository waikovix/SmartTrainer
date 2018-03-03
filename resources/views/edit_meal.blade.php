@extends('layouts.app_layout')
@section('title')
Edit meal
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}
                          {{ method_field('PATCH') }}



                        <div class="form-group">
                            <label for="meal" class="col-md-4 control-label">Meal Type</label>

                            <div class="col-md-6">
                               <select name="meal" id="meal" class="form-control">
                                <option value="breakfast" >Breakfast</option>
                                <option value="lunch" >Lunch</option>
                                <option value="dinner" >Dinner</option>
                               </select>
                            </div>
                        </div>

                        <meal-info protein = "{{($meal->protein)/$meal->amount}}" carbs = "{{($meal->carbs)/$meal->amount}}" fat = "{{($meal->fat)/$meal->amount}}" calories = "{{($meal->calories)/$meal->amount}}"></meal-info>

                            <h1>Old values</h1>
                            P:{{$meal->protein}}
                            C:{{$meal->carbs}}
                            F:{{$meal->fat}}
                            Calories:{{$meal->calories}}
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

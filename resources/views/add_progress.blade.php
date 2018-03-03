@extends('layouts.app_layout')
@section('title')
Progress
@endsection
@section('content')
@if(!empty($progress))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label for="kg" class="col-md-4 control-label">KG:</label>

                            <div class="col-md-6">
                                <input id="kg" type="number" step = "any" class="form-control" name="kg" value="{{$progress->kg}}" required autofocus>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sets" class="col-md-4 control-label">Sets</label>

                            <div class="col-md-6">
                                <input id="sets" type="number" class="form-control" name="sets" value = "{{$progress->sets}}" required>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="reps" class="col-md-4 control-label">Reps</label>

                            <div class="col-md-6">
                                <input id="reps" type="number" class="form-control" name="reps" value = "{{$progress->reps}}"required>

                            </div>
                        </div>



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
                      {{csf}}
                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Delete
                              </button>


                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="kg" class="col-md-4 control-label">KG:</label>

                            <div class="col-md-6">
                                <input id="kg" type="number" step = "any" class="form-control" name="kg" value="" required autofocus>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sets" class="col-md-4 control-label">Sets</label>

                            <div class="col-md-6">
                                <input id="sets" type="number" class="form-control" name="sets" required>


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="reps" class="col-md-4 control-label">Reps</label>

                            <div class="col-md-6">
                                <input id="reps" type="number" class="form-control" name="reps" required>

                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

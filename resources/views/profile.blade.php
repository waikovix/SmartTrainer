@extends('layouts.app_layout')
@section('title')
My profile
@endsection
@section('content')
<div>

      <h1>{{Auth::user()->name}}</h1>
      <br>
      <md-card>
        <md-card-header><h1>Calories</h1></md-card-header>
        <md-card-content>
                {{Auth::user()->daily_calories}}


                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      <button type = "submit" class = "btn btn-danger">Logout </button>
                  </form>

        </md-card-content>
      </md-card>
    </div>
@endsection

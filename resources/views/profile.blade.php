@extends('layouts.app_layout')

@section('content')
<div>
      
      <h1>{{Auth::user()->name}}</h1>
      <br>
      <md-card>
        <md-card-header><h1>Calories</h1></md-card-header>
        <md-card-content>
                {{Auth::user()->daily_calories}}
        </md-card-content>
      </md-card>
    </div>
@endsection
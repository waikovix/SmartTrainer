@extends('layouts.app_layout')
@section('title')
Home
@endsection
@section('content')
<div>
      <md-card>
        <md-card-header>
          <div class="md-title"><h1>Calories</h1></div>
         {{Auth::user()->meals->sum('calories')}}/{{Auth::user()->daily_calories}}
        </md-card-header>

        <md-card-content>

          <br>
          <div>
            <progress-bar  value = "{{Auth::user()->meals->sum('protein')}}"valueof="{{ Auth::user()->protein }}" id="myBar-green" element="Proteins"></progress-bar>
            <br>
            <progress-bar value = "{{Auth::user()->meals->sum('fat')}}" valueof="{{ Auth::user()->fat }}" id="myBar-red" element="Fat"></progress-bar>
            <br>
            <progress-bar value = "{{Auth::user()->meals->sum('carbs')}}" valueof="{{ Auth::user()->carbs }}" id="myBar-blue" element="Carbs"></progress-bar>
          </div>

        </md-card-content>


      </md-card>
      <br>
      <md-card>
        <md-card-header>
          <div class="md-title">Last weight</div>
        </md-card-header>

        <md-card-content>
          <h1>74.4kg</h1>
        </md-card-content>
      </md-card>
      <h1>Latest news</h1>
      <hr>

    </div>




@endsection
@section('scripts')
@endsection
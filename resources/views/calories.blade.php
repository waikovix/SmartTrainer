@extends('layouts.app_layout')
@section('title')
Daily Intake
@endsection

@section('addons')
<div class="md-toolbar-section-end">
            <md-button class="md-icon-button" @click = "showDialog = true">
              <md-icon>add</md-icon>
            </md-button>
          </div>
@endsection
@section('content')
<div>
    <md-card>
      <md-card-header>
        <h1>Calories</h1>
      </md-card-header>
      <md-card-content>
        <h2>
        {{Auth::user()->meals->sum('calories')}}

        /{{Auth::user()->daily_calories}}</h2>
      </md-card-content>
    </md-card>
  <br>
  <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>Add food</md-dialog-title>

      <md-tabs md-dynamic-height>
        <md-tab md-label="Search for food">
        <md-field>
      <label>Type here!</label>
      <md-input  v-model = "search" @keyup = "Search"></md-input>
      <span class="md-helper-text">And select a food from list down bellow</span>
    </md-field>
    <h1>Result</h1>
    <a href="/food/add">Not find what you want.Create here</a>
    <hr>
    <ul>
    <li  v-for = "item in items"><meal-item  :mealid = 'item.id' :name = 'item.name'></meal-item></li>
    </ul>
    <md-dialog-actions>
        <md-button class="md-primary" @click="showDialog = false">Close</md-button>
        </md-dialog-actions>
        </md-tab>

    </md-dialog>
    <md-dialog :md-active.sync="showNutrion">
      <md-dialog-title>Nutrition Info</md-dialog-title>

      <md-tabs md-dynamic-height>
        <md-tab md-label="Nutrition info">
          <h1>Protein:
          {{Auth::user()->meals->sum('protein')}}
           /{{Auth::user()->protein}}g</h1>
           <h1>Fat:
           {{Auth::user()->meals->sum('fat')}}
           /{{Auth::user()->fat}}g</h1>
           <h1>Carbs:
           {{Auth::user()->meals->sum('carbs')}}
           /{{Auth::user()->carbs}}g</h1>
          <md-dialog-actions>
        <md-button class="md-primary" @click="showNutrion = false">Close</md-button>
        <md-dialog-actions>
        </md-tab>

    </md-dialog>
    <md-card>
      <md-card-header>
        <div class="md-title">Breakfast</div>
        <div class="md-subhead"></div>
      </md-card-header>

      <md-card-expand>
        <md-card-actions md-alignment="space-between">
           <div>

          </div>

          <md-card-expand-trigger>
            <md-button class="md-icon-button">
              <md-icon>keyboard_arrow_down</md-icon>
            </md-button>
          </md-card-expand-trigger>
        </md-card-actions>

        <md-card-expand-content>
          <md-card-content>
           <md-list >
            @foreach(Auth::user()->meals as $meal)
            @if($meal->type == 'breakfast')
                <md-list-item>{{$meal->food['name']}} - {{$meal->calories}}kcal <a href = "/meals/edit/{{$meal->id}}"><md-icon>create</md-icon></a></md-list-item>
            @endif
            @endforeach
           </md-list>
          </md-card-content>
        </md-card-expand-content>
      </md-card-expand>
    </md-card>
    <br>
    <md-card>
      <md-card-header>
        <div class="md-title">Lunch</div>
        <div class="md-subhead"></div>
      </md-card-header>

      <md-card-expand>
        <md-card-actions md-alignment="space-between">
           <div>

          </div>

          <md-card-expand-trigger>
            <md-button class="md-icon-button">
              <md-icon>keyboard_arrow_down</md-icon>
            </md-button>
          </md-card-expand-trigger>
        </md-card-actions>

        <md-card-expand-content>
          <md-card-content>
           <md-list>
           @foreach(Auth::user()->meals as $meal)
            @if($meal->type == 'lunch')
              <md-list-item>{{$meal->food['name']}} - {{$meal->calories}}kcal <a href = "/meals/edit/{{$meal->id}}"><md-icon>create</md-icon></a></md-list-item>
            @endif
            @endforeach
           </md-list>
          </md-card-content>
        </md-card-expand-content>
      </md-card-expand>
    </md-card>
    <br>
    <md-card>
      <md-card-header>
        <div class="md-title">Dinner</div>
        <div class="md-subhead"></div>
      </md-card-header>

      <md-card-expand>
        <md-card-actions md-alignment="space-between">
           <div>

          </div>

          <md-card-expand-trigger>
            <md-button class="md-icon-button">
              <md-icon>keyboard_arrow_down</md-icon>
            </md-button>
          </md-card-expand-trigger>
        </md-card-actions>

        <md-card-expand-content>
          <md-card-content>
           <md-list>
             @foreach(Auth::user()->meals as $meal)
            @if($meal->type == 'dinner')
              <md-list-item>{{$meal->food['name']}} - {{$meal->calories}}kcal <a href = "/meals/edit/{{$meal->id}}"><md-icon>create</md-icon></a></md-list-item>
            @endif
            @endforeach
           </md-list>
          </md-card-content>
        </md-card-expand-content>
      </md-card-expand>
    </md-card>
   <md-button @click = "showNutrion = true" class = "left"><md-icon>pie_chart</md-icon>Nutrition</md-button>
  </div>
  @endsection
  @section('style')
  <style>
    .md-tab{
      min-height:500px;
    }
    .left{
    float:left;
    }
    a{
    text-decoration:none;
    }
  </style>
  @endsection

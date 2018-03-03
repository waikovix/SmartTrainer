@extends('layouts.app_layout')
@section('title')
Progress
@endsection
@section('addons')
<div class="md-toolbar-section-end">
            <md-button class="md-icon-button" @click = "showDialog = true">
              <md-icon>add</md-icon>
            </md-button>
          </div>
@endsection

@section('content')
<md-table md-card >
  <md-table-toolbar>
        <h1 class="md-title">Exercise progress</h1>
      </md-table-toolbar>
      <md-table-row>
        <md-table-head md-numeric>ID</md-table-head>
        <md-table-head>Exercise name</md-table-head>
        <md-table-head>Kg</md-table-head>
        <md-table-head>reps</md-table-head>
        <md-table-head>sets</md-table-head>
        <md-table-head>Date</md-table-head>
        <md-table-head>Edit</md-table-head>
      </md-table-row>
      @foreach(Auth::user()->progress  as $progress)
      <md-table-row>
        <md-table-cell md-numeric>{{$progress->id}}</md-table-cell>
        <md-table-cell>{{$progress->exercise->name}}</md-table-cell>
        <md-table-cell>{{$progress->kg}}</md-table-cell>
        <md-table-cell>{{$progress->reps}}</md-table-cell>
          <md-table-cell>{{$progress->sets}}</md-table-cell>
          <md-table-cell>{{$progress->created_at}}</md-table-cell>
          <md-table-cell> <a href = "/progress/exercise/edit/{{$progress->id}}"><md-icon>create</md-icon></a></md-table-cell>


      </md-table-row>
      @endforeach


    </md-table>
<md-table md-card >
  <md-table-toolbar>
        <h1 class="md-title">Kg progress</h1>
      </md-table-toolbar>
      <md-table-row>
        <md-table-head md-numeric>ID</md-table-head>
        <md-table-head>KG</md-table-head>
        <md-table-head>Body fat %</md-table-head>
        <md-table-head>Date</md-table-head>
        <md-table-head>Edit</md-table-head>
      </md-table-row>
      @foreach(Auth::user()->kg_progress  as $kg)
      <md-table-row>
        <md-table-cell md-numeric>{{$kg->id}}</md-table-cell>
        <md-table-cell>{{$kg->kg}}</md-table-cell>
        <md-table-cell>{{$kg->body_fat}}</md-table-cell>
        <md-table-cell>{{$kg->created_at}}</md-table-cell>
          <md-table-cell> <a href = "/progress/kg/edit/{{$kg->id}}"><md-icon>create</md-icon></a></md-table-cell>

      </md-table-row>
      @endforeach


    </md-table>

    <md-dialog :md-active.sync="showDialog">
     <md-dialog-title>Preferences</md-dialog-title>

     <md-tabs md-dynamic-height>
       <md-tab md-label="Exercise Progress">
           <md-field>
       <label>Type here!</label>
       <md-input  v-model = "search" @keyup = "findexercise"></md-input>
     </md-field>
     <h1>Result</h1>
     <a href="/exercise/add">Not find what you need.Create one now</a>
     <hr>
     <ul>
     <li  v-for = "item in items"><item  :mealid = 'item.id' :name = 'item.name' urll = '/progress/exercise/add/'></item></li>
     </ul>
   </md-field>
       </md-tab>

       <md-tab md-label="Kg Progress">
         <form class="" action="/progress/kg/add" method="post">
           {{csrf_field()}}
             <div class="form-group">
                 <label for="kg" class="col-md-4 control-label">KG:</label>

                 <div class="col-md-6">
                     <input id="kg" type="number" step="any" class="form-control" name="kg" value="" required autofocus>
                 </div>
             </div>
             <div class="form-group">
                 <label for="body_fat" class="col-md-4 control-label">Body fat %:</label>

                 <div class="col-md-6">
                     <input id="body_fat" type="number" step="any" class="form-control" name="body_fat" value="" required autofocus>
                 </div>
             </div>
             <div class="form-group">


                 <div class="col-md-6">
                   <button type="submit" class="btn btn-primary">
                       Submit
                   </button>
                 </div>
             </div>
         </form>

       </md-tab>


     </md-tabs>

     <md-dialog-actions>
       <md-button class="md-primary" @click="showDialog = false">Close</md-button>
     </md-dialog-actions>
   </md-dialog>

@endsection
@section('style')
<style>
  .md-card{
    width:40%;
    float:left;
    overflow: auto;
  }
</style>
@endsection

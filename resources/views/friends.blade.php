@extends('layouts.app_layout')
@section('title')
Friends
@endsection
@section('addons')
<div class="md-toolbar-section-end">
            <md-button class="md-icon-button" @click = "showDialog = true">
              <md-icon>add</md-icon>
            </md-button>
          </div>
@endsection
@section('content')
<md-card>
@foreach(Auth::user()->friends as $friend)
        <md-card-header>
          <div class="md-title">$friend->user->user_id</div>
          <div class="md-subhead">$friend->user->meals->sum('calories')</div>
        </md-card-header>

        <md-card-expand>
          <md-card-actions md-alignment="space-between">
            <div>
              <md-button>Action</md-button>
              <md-button>Action</md-button>
            </div>

            <md-card-expand-trigger>
              <md-button class="md-icon-button">
                <md-icon>keyboard_arrow_down</md-icon>
              </md-button>
            </md-card-expand-trigger>
          </md-card-actions>

          <md-card-expand-content>
            <md-card-content>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio itaque ea, nostrum odio. Dolores, sed accusantium quasi non, voluptas eius illo quas, saepe voluptate pariatur in deleniti minus sint. Excepturi.
            </md-card-content>
          </md-card-expand-content>
        </md-card-expand>
      </md-card>
      @endforeach
      <md-dialog :md-active.sync="showDialog">
      <md-dialog-title>Add Friend</md-dialog-title>

      <md-tabs md-dynamic-height>
        <md-tab md-label="Search for food">
        <md-field>
      <label>Type here!</label>
      <md-input  v-model = "search" @keyup = "findUser"></md-input>
    </md-field>
    <h1>Result</h1>
    <hr>
    <ul>
    <li  v-for = "item in items"><item  :mealid = 'item.id' :name = 'item.name' urll = '/user/'></item></li>
    </ul>
    <md-dialog-actions>
        <md-button class="md-primary" @click="showDialog = false">Close</md-button>
        </md-dialog-actions>
        </md-tab>

    </md-dialog>
@endsection
@section('style')
<style>
.md-card {
    width: 320px;
    margin: 4px;
    display: inline-block;
    vertical-align: top;

  }
</style>
@endsection

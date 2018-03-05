@extends('layouts.app_layout')
@section('title')
Blog
@endsection
@section('content')
@foreach($posts as $post)
<a href="/blog/post/{{$post->id}}">
<md-card md-with-hover>
    <md-ripple>
      <md-card-header>
        <div class="md-title">{{$post->title}}</div>
      </md-card-header>

    </md-ripple>
  </md-card>
  </a>
  <br>
  @endforeach
@endsection

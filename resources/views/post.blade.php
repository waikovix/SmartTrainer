@extends('layouts.app_layout')
@section('title')
{{$post->title}}
@endsection
@section('content')
<render-post post-body = "{{$post->body}}"></render-post>
@endsection

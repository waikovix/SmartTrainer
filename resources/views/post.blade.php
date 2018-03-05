@extends('layouts.app_layout')
@section('title')
{{$post->title}}
@endsection
@section('content')
{!! $post->body !!}
@endsection

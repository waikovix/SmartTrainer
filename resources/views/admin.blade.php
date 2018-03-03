@if(Auth::user()->admin)
@extends('layouts.app')

@section('content')
	
@endsecrion
@endif
@else
	your not alowed to be here
@endelse

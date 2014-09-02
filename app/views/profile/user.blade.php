@extends('layout.default')

@include('layout.navbar')


@section('content')
	
<p>{{ $user->username }} ({{ $user->email}})</p>
	
@stop
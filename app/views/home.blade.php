@extends('layout.main')



@section('formContent')
	

	@if(Auth::check())
		<p>Hello {{ Auth::user()->username }}</p>
	@else
		<p>You are not signed in!</p>
	@endif
@stop
@extends('layout.main')


@section('formContent')
	
<p>{{ $user->username }} ({{ $user->email}})</p>
	
@stop
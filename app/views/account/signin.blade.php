@extends('layout.default')

@include('layout.navbar')

@section('content')
	<form action="{{ URL::route('account-sign-in-post') }}" method="post">
		<div>
			Email:<input type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
			@if($errors->has('email'))
				{{$errors->first('email')}}
			@endif
		</div>
		<div>
			password:<input type="password" name ="password">
			@if($errors->has('password'))
				{{$errors->first('password')}}
			@endif
		</div>
		<div>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">
				Remember Me
			</label>
		</div>	
		<input type="submit" value="Sign in">
		{{Form::token()}}
	</form>

@stop
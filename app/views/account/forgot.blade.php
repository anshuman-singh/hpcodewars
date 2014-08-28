@extends('layout.main')


@section('formContent')
	
	<form action="{{ URL::route('account-forgot-password-post')}}" method="post">
		<div>
			Email:<input type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
			@if($errors->has('email'))
				{{$errors->first('email')}}
			@endif
		</div>
		<input type="submit" value="Recover">
		{{Form::token()}}
	</form>
	
@stop
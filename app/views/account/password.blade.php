@extends('layout.default')

@include('layout.navbar')


@section('content')
	<form action="{{ URL::route('account-change-password-post') }}" method="post">
		<div>
			Old password: <input type="password" name="old_password">
			@if($errors->has('old_password'))
				{{$errors->first('old_password')}}
			@endif
		</div>
		<div>
			New password: <input type="password" name="password">
			@if($errors->has('password'))
				{{$errors->first('password')}}
			@endif
		</div>
		<div>
			Confirm password: <input type="password" name="password_again">
			@if($errors->has('password_again'))
				{{$errors->first('password_again')}}
			@endif
		</div>


				<input type="submit" class="uk-button uk-button-primary" value="Change Password">
				{{Form::token()}}
			</form>
@stop
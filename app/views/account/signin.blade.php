@extends('layout.default')

@include('layout.navbar')


@section('content')

<section class="uk-grid">
	<div class="uk-width-1-3 uk-push-1-3 login-content">
		<div class="login">
			<form class="uk-form uk-form-stacked" action="{{ URL::route('account-sign-in-post') }}" method="post">
				<h2>Login</h2>
				<fieldset data-uk-margin>
					<label class="uk=form-label">Primary Email</label>
					<input  placeholder="Type your email Address" class="uk-form-width-large" type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
					@if($errors->has('email'))
						{{$errors->first('email')}}
					@endif
				</fieldset>
				<fieldset data-uk-margin>
					<label class="uk=form-label">Password</label>
					<input  placeholder="Type your password" class="uk-form-width-large" type="password" name ="password">
					@if($errors->has('password'))
						{{$errors->first('password')}}
					@endif
				</fieldset>
				<fieldset data-uk-margin>
					<input  type="checkbox" name="remember" id="remember">
					<label for="remember">
						Remember Me
					</label>
				</fieldset>	
				<input class="uk-button uk-button-primary" type="submit" value="Sign in">
				{{Form::token()}}
			</form>
			<li><a href="{{ URL::route('account-forgot-password') }}">Forgot password</a></li>
		</div>
	</div>
</section>


@stop
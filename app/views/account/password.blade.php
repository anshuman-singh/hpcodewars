@extends('layout.main')



@section('formContent')
<section class="uk-grid">
	<div class="uk-width-1-3 uk-push-1-3 login-content">
		<div class="login">
			<form class="uk-form uk-form-stacked" action="{{ URL::route('account-change-password-post') }}" method="post">
				<h2>Change Password</h2>
				<div class="form-items">
					<label>Old password</label>
					<input class="uk-form-width-large" placeholder="Your old password" type="password" name="old_password">
					@if($errors->has('old_password'))
						{{$errors->first('old_password')}}
					@endif
				</div>
				<div class="form-items">
					<label>New password</label>
					<input class="uk-form-width-large" placeholder="Your new password" type="password" name="password">
					@if($errors->has('password'))
						{{$errors->first('password')}}
					@endif
				</div>
				<div class="form-items">
					<label>Confirm password</label>
					<input class="uk-form-width-large" placeholder="Confirm your new password" type="password" name="password_again">
					@if($errors->has('password_again'))
						{{$errors->first('password_again')}}
					@endif
				</div>

				<input type="submit" class="uk-button uk-button-primary" value="Change Password">
				{{Form::token()}}
			</form>
		</div>
	</div>
</section>
@stop
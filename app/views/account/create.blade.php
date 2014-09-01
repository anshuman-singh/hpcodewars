@extends('layout.main')



@section('formContent')


	
<section class="uk-grid">
	<div class="uk-width-1-3 uk-push-1-3 login-content">
		<div class="login">
			<form  class="uk-form uk-form-stacked" action="{{ URL::route('account-create-post') }}" method="post">
				<h2>Signup</h2>
				<filedset data-uk-margin>
					<label class="uk-form-label">Primary Email</label>
					<input class="uk-form-width-large" placeholder="Your Primary email id" type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
					@if($errors->has('email'))
						{{$errors->first('email')}}
					@endif
				</filedset>
				<filedset data-uk-margin>
					<label class="uk-form-label">Secondary Email</label>
					<input class="uk-form-width-large"  placeholder="Your Secondary email id"type="text" name ="email_sec" {{ (Input::old('email_sec')) ? ' value="' . e(Input::old('email_sec')) . '"' : ''}}>
					@if($errors->has('email_sec'))
						{{$errors->first('email_sec')}}
					@endif
				</filedset>
				<filedset data-uk-margin>
					<label class="uk-form-label">Team name</label>
					<input class="uk-form-width-large" placeholder="Your Team name" type="text" name ="username" {{ (Input::old('username')) ? ' value="' . e(Input::old('username')) . '"' : ''}}>
					@if($errors->has('username'))
						{{$errors->first('username')}}
					@endif

				</filedset>
				<filedset data-uk-margin>
					<label class="uk-form-label">Password</label>
					<input class="uk-form-width-large" placeholder="Password " type="password" name ="password">
					@if($errors->has('password'))
						{{$errors->first('password')}}
					@endif

				</filedset>
				<filedset data-uk-margin>
					<label class="uk-form-label">Confirm Password</label>
					<input class="uk-form-width-large" placeholder="Retype your password" type="password" name ="password_again">
					@if($errors->has('password_again'))
						{{$errors->first('password_again')}}
					@endif

				</filedset> 

				<input class="uk-button uk-button-primary" type="submit" value="Create account">
				{{Form::token()}}		
			</form>
		</div>
	</div>
</section>

@stop
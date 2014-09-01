@extends('layout.main')


@section('formContentForget')
<section class="uk-grid">
	<div class="uk-width-1-3 uk-push-1-3 login-content">
		<div class="login">	
			<form action="{{ URL::route('account-forgot-password-post')}}" method="post">
				<div>
					<label class="uk-form-label">Primary Email</label>
					<input class="uk-form-width-large" placeholder="Your Primary email id" type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
					@if($errors->has('email'))
						{{$errors->first('email')}}
					@endif
				</div>
				<input type="submit" class="uk-button uk-button-primary" value="Recover">
				{{Form::token()}}
			</form>
		</div>
	</div>
</section>
	
@stop
@extends('layout.default')

@include('layout.navbar')


@section('content')




	
<!-- <section class="uk-grid">
	<div class="uk-width-1-3 uk-push-1-3 login-content">
		<div class="login">
			<form  class="uk-form uk-form-stacked" action="{{ URL::route('account-create-post') }}" method="post">
				<h2>Signup</h2>
				<filedset data-uk-margin>
					<label class="uk-form-label">Primary Email</label>
					<input class="form-control input-lg" placeholder="Your Primary email id" type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
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
</section>-->

<div class="container">
	<div class=" alert alert-info">
		<b><i>NOTE:</i></b> Use HP email id only! People registering with non-HP email id will be <b>disqualified</b> automatically!
	</div>
	<div class="col-lg-6 col-lg-offset-3 form-blk " >
		<div class="login">
			<div class="blk-title">
				Sign Up
			</div>
			<div class="col-lg-10 col-lg-offset-1 blk-content" >
				<form role="form" action="{{ URL::route('account-create-post') }}" method="post" id="signup-form">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Primary Email (1st Participant)</label>
				    <input class="form-control input-lg" placeholder="Enter Primary Email" type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
					@if($errors->has('email'))
						<div class="input-error">* {{$errors->first('email')}}</div>
					@endif
				  </div>

				  <div class="form-group">
				    <label for="exampleInputEmail1">Secondary Email (2nd Participant)</label>
				    <input class="form-control input-lg"  placeholder="Enter Secondary Email"type="text" name ="email_sec" {{ (Input::old('email_sec')) ? ' value="' . e(Input::old('email_sec')) . '"' : ''}}>
					@if($errors->has('email_sec'))
						<div class="input-error">* {{$errors->first('email_sec')}}</div>
					@endif
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Team name</label>
				    <input class="form-control input-lg" placeholder="Your Team name" type="text" name ="username" {{ (Input::old('username')) ? ' value="' . e(Input::old('username')) . '"' : ''}}>
					@if($errors->has('username'))
						<div class="input-error">* {{$errors->first('username')}}</div>
					@endif
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input class="form-control input-lg" placeholder="Password " type="password" name ="password" >
					@if($errors->has('password'))
						<div class="input-error">* {{$errors->first('password')}}</div>
					@endif
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Confirm Password</label>
				    <input class="form-control input-lg" placeholder="Retype your password" type="password" name ="password_again">
					@if($errors->has('password_again'))
						<div class="input-error">* {{$errors->first('password_again')}}</div>
					@endif
				  </div>
				  
				  
				  <input class="btn btn-primary pull-right" type="submit" value="Sign Up" id="signup-btn" >
					{{Form::token()}}
				</form>
				<div class="clearfix">&nbsp;</div>
			</div>
		</div>
	</div>
</div>

@stop
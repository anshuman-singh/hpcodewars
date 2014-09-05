@extends('layout.default')

@include('layout.navbar')


@section('content')


<div class="container">
	<div class=" alert alert-info">
		<b><i>NOTE:</i></b> Use your team Primary email id to login!
	</div>
	<div class="col-lg-6 col-lg-offset-3 form-blk">
		<div class="login">
			<div class="blk-title">
				Sign In
			</div>
			<div class="col-lg-10 col-lg-offset-1 blk-content" >
				<form role="form" action="{{ URL::route('account-sign-in-post') }}" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input  placeholder="Email address" class="form-control input-lg" type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
						@if($errors->has('email'))
							<div class="input-error">* {{$errors->first('email')}}</div>
						@endif
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input  placeholder="Password" class="form-control input-lg" type="password" name ="password">
						@if($errors->has('password'))
							<div class="input-error">* {{$errors->first('password')}}</div>
						@endif
				  </div>
				  
				  <div class="checkbox">
				    <label>
				      <input type="checkbox" name="remember" id="remember"> Remember Me
				    </label>
				  </div>
				  <input class="btn btn-primary pull-right" type="submit" value="Sign in">
					{{Form::token()}}
				</form>

				<a class="blk-link" href="{{ URL::route('account-forgot-password') }}">Forgot password ?</a>
				<div class="clearfix">&nbsp;</div>
			</div>


			<!-- <form class="" action="{{ URL::route('account-sign-in-post') }}" method="post">
				
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
				<input class="btn btn-primary" type="submit" value="Sign in">
				{{Form::token()}}
			</form> -->
		</div>
	</div>
</div>


@stop
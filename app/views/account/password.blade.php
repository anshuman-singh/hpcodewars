@extends('layout.default')

@include('layout.navbar')


@section('content')

<div class="container">
	<div class="col-lg-6 col-lg-offset-3 form-blk">
		<div class="login">
			<div class="blk-title">
				Change Password
			</div>
			<div class="col-lg-10 col-lg-offset-1 blk-content" >
				<form role="form" action="{{ URL::route('account-change-password-post') }}" method="post">
				 
				  <div class="form-group">
				    <label for="old_password">Old Password</label>
				    <input  placeholder="Password" class="form-control input-lg" type="password"  name="old_password">
						@if($errors->has('old_password'))
							<div class="input-error">* {{$errors->first('old_password')}}</div>
						@endif
				  </div>

				  <div class="form-group">
				    <label for="old_password">New Password</label>
				    <input  placeholder="Password" class="form-control input-lg" type="password"  name="password">
						@if($errors->has('password'))
							<div class="input-error">* {{$errors->first('password')}}</div>
						@endif
				  </div>

				  <div class="form-group">
				    <label for="old_password">Confirm Password</label>
				    <input  placeholder="Password" class="form-control input-lg" type="password"  name="password_again">
						@if($errors->has('password_again'))
							<div class="input-error">* {{$errors->first('password_again')}}</div>
						@endif
				  </div>
				 
				  <input class="btn btn-primary pull-right" type="submit" value="Change Password">
					{{Form::token()}}
				</form>

				
				<div class="clearfix">&nbsp;</div>
			</div>

		</div>
	</div>
</div>
	<!-- <form action="{{ URL::route('account-change-password-post') }}" method="post">
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
			</form> -->
@stop
@extends('layout.default')

@include('layout.navbar')

@section('content')
	
	
<!-- <section class="uk-grid">
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
 -->

<div class="container">
	<div class="col-lg-6 col-lg-offset-3 form-blk">
		<div class="login">
			<div class="blk-title">
				Forgot Password?
			</div>
			<div class="col-lg-10 col-lg-offset-1 blk-content" >
				<form role="form" action="{{ URL::route('account-forgot-password-post')}}" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Primary Email address</label>
				    <input class="form-control input-lg" placeholder="Enter Primary email Address" type="text" name ="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : ''}}>
					@if($errors->has('email'))
						<div class="input-error">* {{$errors->first('email')}}</div>
					@endif
				  </div>				  
				  <input class="btn btn-primary pull-right" type="submit" value="Recover">
					{{Form::token()}}
					<div class="clearfix">&nbsp;</div>
				</form>
			</div>
		</div>
	</div>
</div>
	
@stop
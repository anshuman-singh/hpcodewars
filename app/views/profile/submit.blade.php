@extends('layout.default')

@include('layout.navbar')


@section('content')
	


<div class="container">
	<h2 class="text-center">Hi , Please check this space for prelims!</h2>
</div>
	
	<!-- <div class="container" id="upload">
		<form action="{{ URL::route('profile-user-post') }}" method="post">
		<input type="file" name="file" id="file">
			<input class="btn btn-primary pull-right"  type="submit" value="upload">
			{{Form::token()}}
		</form>
	</div> -->
	<div class="container">
		<div class="col-lg-10 col-lg-offset-1 blk-content">
		{{ Form::open(array('action' => 'ProfileController@upload' ,'files'=>true) ) }}
			{{ Form::token() }}
			<div class="input-lg">{{ Form::file('file') }}</div>
			<div class="btn btn-primary pull-right">{{ Form::submit('Upload') }}</div>
		{{ Form::close() }}
		</div>
	</div>
@stop
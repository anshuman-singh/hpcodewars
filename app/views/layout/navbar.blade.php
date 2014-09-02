<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ URL::route('home') }}">Codewars 2014</a>
		</div>
		<div class="collapse navbar-collapse">

			
			<ul class="nav navbar-nav">
				@if(Auth::check())
					<li><a href="{{ URL::route('profile-submission') }}">Submissions</a></li>
				@else
				<li class="active"><a href="{{ URL::route('home') }}">Home</a></li>
				
				<li><a  data-scroll href="#calendar">Calendar</a></li>
	        	<li><a  data-scroll href="#rules">Rules</a></li>
	        	<li><a  data-scroll href="#faq">FAQ</a></li>
	        	@endif
			</ul>
			

			<ul class="nav navbar-nav navbar-right">

			@if(Auth::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>&nbsp; {{ Auth::user()->username}} <b class="caret"></b></a>
					<ul class="dropdown-menu">
						
						<li><a href="{{ URL::route('account-change-password') }}">Change Password</a></li>

						<li><a href="{{ URL::route('account-sign-out') }}">Sign Out</a></li>						
					</ul>
				</li>
				<!-- <li><a href="{{ URL::route('account-sign-out') }}">Sign Out</a></li> -->
			@else
				<li><a href="{{ URL::route('account-sign-in') }}">Sign In</a></li>
				<li><a href="{{ URL::route('account-create') }}">Sign Up</a></li>

			@endif
				
			</ul>
		</div>
	</div>
</div>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<strong><a class="header-link navbar-brand" href="{{ URL::route('home') }}">R&amp;D Codewars 2014</a></strong>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a class="header-link" href="{{ URL::route('home') }}">Home</a></li>				
				<li><a class="header-link"  data-scroll href="#calendar">Calendar</a></li>
	        	<li><a class="header-link"  data-scroll href="#rules">Rules</a></li>
	        	<li><a class="header-link"  data-scroll href="#faq">FAQ</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">

			@if(Auth::check())
				<li class="dropdown">
					<a class="header-link" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>&nbsp; {{ Auth::user()->fullname}} <b class="caret"></b></a>
					<ul class="dropdown-menu">
						
						<li><a class="header-link" href="{{ URL::route('account-change-password') }}">Change Password</a></li>

						<li><a class="header-link" href="{{ URL::route('account-sign-out') }}">Sign Out</a></li>						
					</ul>
				</li>
				<!-- <li><a class="header-link" href="{{ URL::route('account-sign-out') }}">Sign Out</a></li> -->
			@else
				<li><a class="header-link" href="{{ URL::route('account-sign-in') }}">Sign In</a></li>
				<li><a class="header-link" href="{{ URL::route('account-create') }}">Sign Up</a></li>

			@endif
				
			</ul>
		</div>
	</div>
</div>
<<<<<<< HEAD
=======
<!-- <nav>
	<ul>
		<li><a href="{{ URL::route('home') }}">Home</a></li> -->

		@if(Auth::check())
			<li><a href="{{ URL::route('account-sign-out') }}">Sign out</a></li>
			<li><a href="{{ URL::route('account-change-password') }}">Change Password</a></li>

		@else
			<li><a href="{{ URL::route('account-sign-in') }}">Sign in</a></li>
			<li><a href="{{ URL::route('account-create') }}">Sign Up</a></li>
			<!-- <li><a href="{{ URL::route('account-forgot-password') }}">Forgot password</a></li> -->

		@endif

	<!-- </ul>
	</nav> -->
>>>>>>> f6d79e52dac6dd55ee258658e44e0e7ef8d54593

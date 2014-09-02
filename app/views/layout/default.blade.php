<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
		<title>Sticky Footer Navbar Template for Bootstrap</title>
		<!-- Bootstrap core CSS -->
		{{ HTML::style('css/bootstrap.css') }}

        {{ HTML::style('css/sticky-footer-navbar.css') }}


        {{ HTML::style('css/styles.css') }}
	</head>
	<body>
		
		
		<!-- Begin page content -->
		
			@if(Session::has('global'))
				<div class="container">
					<div class="alert alert-success">{{ Session::get('global') }}</div>
				</div>
			@endif

			@yield('content')
		<div id="footer">
			<div class="container">
				<p class="text-muted">Place sticky footer content here.</p>
			</div>
		</div>
			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
		{{ HTML::script('js/jquery.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/bind-polyfill.min.js') }}
        {{ HTML::script('js/smooth-scroll.min.js') }}

        {{ HTML::script('js/main.js') }}

        <script>
        	smoothScroll.init();
        </script>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
		<title>R&amp;D CodeWars 2014</title>
		<!-- Bootstrap core CSS -->
		{{ HTML::style('css/bootstrap.css') }}

        {{ HTML::style('css/sticky-footer-navbar.css') }}


        {{ HTML::style('css/styles.css') }}

        

	</head>
	<body>
		
		
		<!-- Begin page content -->
		
			@if(Session::has('global'))
				<div class="container">
					{{ Session::get('global') }}
				</div>
			@endif

			@yield('content')
		<footer id="footer">
			<div class="container">
				<p class="pull-left">&copy; R&amp;D CodeWars 2014 &nbsp; &nbsp;<a href="mailto:codewarcommandos@hp.com">Help</a> </p>

				<div class="pull-right">
					Developed By- <strong><a href="mailto:saini@hpcom">Aakanksha Saini</a></strong> &amp;<strong> <a href="mailto:anshuman.singh2@hp.com">Anshuman Singh</a></strong>
				</div>
			</div>
		</footer>
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
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('./front/css/animate.css')}}">

	<link rel="stylesheet" href="{{asset('./front/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('./front/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('./front/css/magnific-popup.css')}}">

	<link rel="stylesheet" href="{{asset('./front/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('./front/css/style.css')}}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">Clyde<span>.</span></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
                @include('frontoffice.layouts.nav')
			</div>
		</div>
	</nav>
    @yield('content')


    @include('frontoffice.layouts.footer')



		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="{{asset('./front/js/jquery.min.js')}}"></script>
		<script src="{{asset('./front/js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{asset('./front/js/popper.min.js')}}"></script>
		<script src="{{asset('./front/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('./front/js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('./front/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('./front/js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('./front/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('./front/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('./front/js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{asset('./front/js/scrollax.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{asset('./front/js/google-map.js')}}"></script>

		<script src="{{asset('./front/js/main.js')}}"></script>

	</body>
	</html>

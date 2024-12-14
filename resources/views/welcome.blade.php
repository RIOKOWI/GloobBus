<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>GlooBus</title>
		<link rel="icon" href="{{ asset('images/Bus.png') }}" type="image/png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
		<noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<!-- <span class="fas fa-bus"></span>-->
							<img class="gloobus" src="images/GloBus Full.png" alt="">
						</div>
						<div class="content">
							<div class="inner">
								<h1>GLOOBUS</h1>
								<p>A fully responsive site template designed by HTML5 UP and released<br />
								for free under the Creative Commons license.</p>
							</div>
						</div>
						<nav>
							<ul>
								@if (Route::has('login'))
									@auth
										<li>
											<a
												href="{{ url('/dashboard') }}"
												class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
											>
												Dashboard
											</a>
										</li>
									@else
										<li>
											<a
												href="{{ route('login') }}"
												class="button"
											>
												Log in
											</a>
										</li>
										@if (Route::has('register'))
											<li>
												<a
													href="{{ route('register') }}"
													class="button"
												>
													Register
												</a>
											</li>
										@endif
									@endauth
								@endif
							</ul>
						</nav>
						
					</header>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; RIO ACHYAR | MUHAMMAD TURTUSI AFRIZAL PERDANA</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/breakpoints.min.js"></script>
			<script src="js/browser.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>

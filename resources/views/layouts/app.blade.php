<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app" class="container">
		<header class="header"></header>
		<main class="main">Main</main>
		<aside class="aside">Aside</aside>
		<nav class="navbar">
			<div class="profile-wrapper">
				<!-- <i class="icon ion-search"></i> Search -->
			</div>
			<div class="navigation-wrapper">
				<ul class="main-navigation">
					<li><a href="#">Projects</a></li>
					<li><a href="#">Clients</a></li>
					<li><a href="#">Settings</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

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
	<div id="app" class="main-container">
		<header class="header">
			<button class="navbar-toggle" id="navbar-toggle" v-on:click="navbarToggle">
				<i class="icon ion-navicon"></i>
			</button>
		</header>
		<main class="main">Main</main>
		<aside class="aside">Aside</aside>
		<nav class="navbar">
			<div class="profile-wrapper">
				@include('layouts.partials.profile')
			</div>
			<div class="navigation-wrapper">
				@include('layouts.partials.navigation')
			</div>
		</nav>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

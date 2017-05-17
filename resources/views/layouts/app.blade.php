<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Scripts -->
	<script>
	window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
	]) !!};
	</script>
</head>
<body>
	<div id="app">
		<div class="top-bar">
			<div class="top-bar-left">
				<div class="page-title">
					<a href="{{ route('home') }}">{{ config('app.name') }}</a>
				</div>
			</div>

			<div class="top-bar-right">
				@if (Auth::user())
				<ul class="dropdown menu" data-dropdown-menu data-disable-hover="true" data-click-open="true">
					<!-- <li>
						<a href="#">Projects <i class="fi-monitor"></i></a>
					</li>
					<li>
						<a href="#">Administration <i class="fi-shield"></i></a>
					</li> -->
					<li>
						<a href="#">User avatar</a>
						<ul class="menu">
							<li>
								<a href="#">Profile</a>
							</li>
							<li>
								<a href="#" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
					<li>
						<button type="button" name="navbar-toggle" class="navbar-toggle" v-on:click="toggleNavbar">&middot; &middot; &middot;</button>
					</li>
				</ul>
				@endif
			</div>
		</div>

		<div id="main-wrapper">
			<aside id="toolbar">
				@yield('toolbar')
			</aside>
			<main id="main-content">
				@yield('content')
			</main>
			<nav id="navbar">
				<time>{{ date('d.m Y') }}</time>
				<hr>
				<ul class="vertical menu" data-drilldown>
					<li><a href="{{ route('projects') }}">Projects</a></li>
					<li><a href="{{ route('clients') }}">Clients</a></li>
					<li>
						<a href="#">Settings</a>
						<ul class="vertical menu">
							<li><a href="#">Users</a></li>
							<li><a href="#">Roles</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

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
				<div class="page-title">{{ config('app.name') }}</div>
			</div>

			<div class="top-bar-right">
				@if (Auth::user())
				<ul class="dropdown menu" data-dropdown-menu data-disable-hover="true" data-click-open="true">
					<li>
						<a href="#">Projects <i class="fi-monitor"></i></a>
					</li>
					<li>
						<a href="#">Administration <i class="fi-shield"></i></a>
					</li>
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
						<button type="button" name="navbar-toggle" class="navbar-toggle">&middot; &middot; &middot;</button>
					</li>
				</ul>
				@endif
			</div>
		</div>

		<main>
			@yield('content')
		</main>
	</div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

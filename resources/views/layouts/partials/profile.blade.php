<!-- <i class="icon ion-search"></i> Search -->

<div class="profile-overlay">
	<div class="profile-top-bar">
		<time datetime="@php echo date('d-m-Y'); @endphp">@php echo date('d-m-Y'); @endphp</time>

		<a href="{{ ('/logout') }}" class="pull-right icon-link"
			onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
			<i class="icon ion-log-out"></i> Logout
		</a>
		<form id="logout-form" action="{{ url('/logout') }}" method="POST" class="hide">
			{{ csrf_field() }}
		</form>
	</div>
</div>

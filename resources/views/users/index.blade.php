@extends('layouts.app')

@section('main')
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>
					<a href="{{ route('users.edit', $user) }}">{{ $user->name }}</a>
				</td>
				<td>
					<a href="{{ route('users.edit', $user) }}">{{ $user->firstname }}
				</td>
				<td>
					<a href="{{ route('users.edit', $user) }}">{{ $user->lastname }}
				</td>
				<td>
					<a href="{{ route('users.edit', $user) }}">{{ $user->email }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection

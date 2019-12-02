@extends('layouts.app')
@section('content')
<div class="container" >
	<div class="container" >
		<a href="{{ url('/users/add') }}"  class="w3-right w3-btn w3-green w3-margin" >Add a new user</a>
	</div>	
	<table class="table table-bordered table-striped" >
		<thead>
			<tr>
				<th>S/n</th>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					@if($user->role==1)
					Worker
					@else
					Administrator
					@endif
				</td>
				<td>Actions</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection

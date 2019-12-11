@extends('layouts.app')
@section("content")
<div class="container" >
	@if(isset($shopitems))
		<a href="{{ url('shopitems/add') }}" class="btn w3-blue  mb-2" >New Shop Item</a>
		<h1 class="alert alert-info" align="center" >Listed items</h1>
		<table class="w3-table table-bordered table-striped" >
		<thead>
			<tr>
				<th>S/n</th>
				<th>Item_name</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			@foreach($shopitems as $item)
			<tr>
				<th>{{ $item->id }}</th>
				<td>{{ $item->name }}</td>
				<td>{{ $item->price }}</td>
			</tr>
			@endforeach
		</tbody>	
		
		</table>
	@else
		<h1 class="alert alert-danger ">
			Sorry there is no record
		</h1>
	@endif
</div>
@endsection
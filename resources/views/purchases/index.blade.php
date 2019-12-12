@extends('../layouts.app')
@section('content')
<title>Purchaseses</title>
<div class="container" >
<a href="{{ url('purchases/create') }}" class="btn w3-blue  mb-2" >New Purchase Records</a>
@if(count($purchases)>0)
<div class="alert alert-info" >
	<h1>Here we will show purchases</h1>
</div>
<table  class="table table-striped table-bordered" >
	<thead>
		<th>S/N</th>
		<th>Item Name</th>
		<th>Quantity</th>
		<th>Recorded at</th>
	</thead>
	<tbody>
		@foreach($purchases as $key => $item )
		<tr>
			<td>{{ $key+1 ?? '#' }}</td>
			<td>{{ $item->shopitem->name }}</td>
			<td>{{ $item->quantity }}</td>
			<td>{{ $item->created_at }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@else
<div class="alert alert-danger" >
	<h1>Sorry there is no any purchases!</h1>
</div>
@endif

</div>
@endsection
@extends('../layouts.app')
@section('content')
<div class="container" >
		<a href="{{ url('sales/add') }}" class="btn w3-blue  mb-2" >New Sales Records</a>
		<table class="table" >
			<thead>
				<tr>
					<th>S/n</th>
					<th>ShopItem</th>
					<th>Quantity</th>
					<th>Total price</th>
					<th>Created at</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sales as $key =>$sale)
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $sale->shopitem->name }}</td>
					<td>{{ $sale->quantity }}</td>
					<td>{{ $sale->price }}</td>
					<td>{{ $sale->created_at }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
</div>
@endsection
@extends('layouts.app')
<title>Newshop Item</title>
@section('content')
<div class="container" >
	<form method="post" action="{{ url('shopitems') }}" >
		@csrf
		<label>Item Name</label>
		<input required type="text" name="name" class="w3-input" placeholder="Gas kubwa" >
		<label>Price</label>
		<input required type="number" name="price" class="w3-input" placeholder="50000">
		<input type="submit" name="" class="w3-btn w3-block w3-grey mt-2 w3-round" >
	</form>
</div>
@endsection
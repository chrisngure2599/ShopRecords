@extends('../layouts.app')
@section('content')
<title>Add new Purchase record</title>
<form class="container" method="post" action="/purchases" >
	@csrf
	<div class="alert w3-gray" >
	<h1 align="center" >Add new Purchase data</h1>	
	</div>
	<div class="form-group" >
		<label>Select Shop Item</label>
		<select class="w3-input w3-round" name="shop_item_id" required >
			<option value="" >Select Item</option>
			@foreach($items as $item)
			<option value="{{ $item->id }}" >{{ $item->name }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group" >
		<label>Quantity</label>	
		<input type="number" min="1" class="w3-input" name="quantity" required  value="0">	
	</div>
	<div>
		<label>Description</label>
		<textarea placeholder="Maelezo yeyote!. Mfano hii ni mpyaa" name="description" class="w3-input" ></textarea>
	</div><br>
	<input type="submit" class="w3-input btn-info">
</form>
@endsection
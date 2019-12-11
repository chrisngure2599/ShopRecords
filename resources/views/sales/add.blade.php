@extends('../layouts.app')
@section('content')
<div class="container" >
	<h3 align="center" >Add sales record</h3>
	<form class="form" method="post" >
		<div class="form-group" >
			@csrf
			<label>Select shop item</label>
			<select class="w3-input" name="shop_item_id" id="shopitem" >
				<option selected disabled >Select shop items</option>
				@foreach($shopitems as $item )				
					<option value="{{ $item->id }}" price="{{ $item->price }}"  >{{ $item->name }}</option>				
				@endforeach
			</select>	
			@error('shopitem')
			 <div class="alert alert-danger" >
			 	{{ $message }}
			 </div>
			@enderror		
		</div>
		<div class="form-group" >
			<label>Quantity</label>
			<input type="number" name="quantity" id="quantity" class="w3-input" >
			@error('quantity')
			 <div class="alert alert-danger" >
			 	{{ $message }}
			 </div>
			@enderror
		</div>
		<div class="w3-input">
			<label>Price</label>
			<input type="number" value="0" readonly class="w3-input disabled" name="price" id="price">
			@error('price')
			 <div class="alert alert-danger" >
			 	{{ $message }}
			 </div>
			@enderror
		</div>
		<input type="submit" name="" class="w3-input btn-info">
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$("body").on('change', '#shopitem', function(event) {
			var price = $(this).children("option:selected").attr('price');
			var qty = $("#quantity").val();
			var total=price*qty;
			$("#price").val(total)
		});
		$(document).ready(function() {
		$("body").on('change keydown', '#quantity', function(event) {
			var price = $("#shopitem").children("option:selected").attr('price');
			var qty = $("#quantity").val();
			var total=price*qty;
			$("#price").val(total)

		});
	});
	});
</script>
@endsection

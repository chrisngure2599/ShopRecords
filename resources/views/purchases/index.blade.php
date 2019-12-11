@extends('../layouts.app')
@section('content')
<title>Purchaseses</title>
<a href="{{ url('purchases/create') }}" class="btn w3-blue  mb-2" >New Purchase Records</a>
<div class="alert alert-info" >
	<h1>Here we will show purchaseses</h1>
</div>
@endsection
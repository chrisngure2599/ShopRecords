@extends('layouts.app')
<title>Create a new user</title>
@section('content')
<div class="container" >
	<form method="post" action="" >
		@csrf
		<label>Name</label>
		<input type="text" placeholder="Eg Mr Mbekure" name="name" class="w3-input w3-round" >
		<label>Email</label>
		<input type="email" placeholder="Eg Mr Mbekure@shoprecords.com" name="email" class="w3-input w3-round" >
		<label>Role</label>
		<select class="w3-input w3-round" name="role" >
			<option  value="1" >Worker</option>
			<option value="2" >Administrator</option>
		</select>
		<label>Password</label>
		<input type="password" readonly class="w3-input" name="password" value="<?php echo uniqid() ?>"  >
		<input type="submit" name="" class="w3-input w3-margin" >
	</form>
</div>
@endsection
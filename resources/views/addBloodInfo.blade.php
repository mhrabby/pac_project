@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">		
		<form action="{{'input_data'}}" method="post">
			{{ csrf_field() }}
			<div class="form-group col-md-12">
				<label >Doner Name</label>
		    <input type="text" class="form-control" name="doner_name" id="donerName"  placeholder="Doner Name">
		    	<label >Blood Group</label>
		    <input type="text" class="form-control" name="blood_group" id="bloodGroup" placeholder="Blood Group">
		    <label >Phone number</label>
		    <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="Phone Number">
		    <label >Address</label>
		    <input type="text" class="form-control" name="address" id="addres" placeholder="Address">
			<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>
@endsection
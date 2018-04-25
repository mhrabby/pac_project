@extends('layouts.app')

@section('content')
<div class="col-md-4">
	@foreach($blos as $blo)
		<h3>{{$blo->blood_group}}</h3>
		<h4>{{$blo->doner_name}}</h4>
		<h5>{{$blo->phone}}</h5>
		<h6>{{$blo->address}}</h6><br>
	@endforeach
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

       <div class="col-md-3">
             <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('blood_list')}}">Blood List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('addBloodInfo')}}">Add Blood Info</a>
              </li>
            </ul>
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

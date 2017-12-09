@extends('layouts.master')

@section('content')

<h1> {{ $test }} </h1>

@if(true)
	<div class="alert alert-success">
	  <strong>Success!</strong> Indicates a successful or positive action.
	</div>
@endif



<h2> Daily goal </h2>



<form method="POST" action="/config/set_daily_goal">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="subject">Hours</label>
    <input type="text" class="form-control" id="hours" name="hours" >
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

  @include('layouts.errors')


@endsection
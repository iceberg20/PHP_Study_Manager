@extends('layouts.master')

@section('content')


<h2> Daily goal </h2>

<form method="Post" action="/config">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="subject">Hours</label>
    <input type="text" class="form-control" id="subject" name="subject" >
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

  @include('layouts.errors')


@endsection
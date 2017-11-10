@extends('layouts.master')

@section('content')
        <div class="container">
          <h1 class="blog-post-title">Show</h1>
          <p class="lead blog-description">Details of your study section.</p>
        </div>
        <hr>
<div class='container'> 
	<p> <span> Id: </span> {{$studysection->id}} </p> 
	<p> <span> Subject: </span>  {{$studysection->subject}} </p>
	<p> <span> Descriptions: </span>  {{$studysection->description}} </p>
	<p> <span> Minutes: </span>  {{$studysection->minutes}} </p>
	<p> <span> Minutes: </span>  {{$studysection->s_date}} </p>
</div>

<hr>

<div class="container">
	@if(count($studysection->goals))
	<p class="lead blog-description">Section Goals</p>
	@endif
	<ul class"list-group">
		@foreach($studysection->goals as $goal)
		<li class"list-group-item">
			{{ $goal->name }}
		</li>
		@endforeach
	</ul>
</div>

{{-- Add a Goal --}}

<div>
	<div class="card-block">
		<p class="lead blog-description">Create a Goal to the section</p>
		<form method="POST" action="/studysection/{{ $studysection->id}}/goals">
	
			{{ csrf_field() }}
			<div class="form-group" >
				<textarea class="form-control" name="name" placeholder="your goal" required></textarea>
			</div>
			<div class="form-group">
   				<button type="submit" class="btn btn-primary">Add Goal</button>
			</div>
		</form>

		@include('layouts.errors')
	</div>
</div>

@endsection


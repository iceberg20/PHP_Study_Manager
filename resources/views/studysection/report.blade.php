@extends('layouts.master')


@section('content')
<\h2> Report <\h2>

Your Daily goal: {{ Auth::user()->daily_goal }}



@endsection
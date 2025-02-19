@extends('layout')
@section('title')
<h1>Create Job Here </h1>
@endsection
@section('content')
    <form action="/jobs" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter Job Title"></br ></br >
    <textarea name="desc" id="desc" placeholder="Enter Job description"></textarea></br ></br >
    <button>Submit</button>
</form>
@endsection
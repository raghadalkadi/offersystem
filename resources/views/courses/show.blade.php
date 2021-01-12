@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col">
      </div>
    </div>
    <div class="row">
      <div class="col">
          <div class="card">
            <div class="card-body">
                <h1 class="card-title" align="center">The Course name: {{$course->name}}</h1>
                <h2 class="card-text" align="center">Number of hours: {{$course->hours}} h</h2>
                <h3 class="card-text" align="center">Teacher's name: {{$course->teacher->name}}</h3>
                <p class="card-text" align="center">About the course: {{$course->description}}</p>
                <h4 class="card-text" align="center">The price is: {{$course->price}}</h4>
                <a class="btn btn-success" align="center" href="{{route('courses')}}">All Courses</a>
            </div>
          </div>
      </div>
    </div>
  </div>

  @endsection

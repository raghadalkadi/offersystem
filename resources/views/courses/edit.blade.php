@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Course</div>
                <div class="card-body">
                    <form method="POST" action="{{route('course.update', ['id'=>$course->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{$course->name}}" >
                          </div>

                            <div class="form-group">
                                    <select name="teacher_id">
                                  <option value="" hidden>Choose Teacher</option>
                                  @foreach ($teachers as $item)
                                  <option  value="{{$item->id}}" label="{{$item->name}}" ></option>
                                  @endforeach
                                </select>
                                </div>

                                <div class="form-group">
                                    <label for="hours">Hours</label>
                                    <input type="text" name="hours" value="{{$course->hours }}" >
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" value="{{ $course->price }}" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea  class="form-control" name="description"  rows="3">{{ $course->description }}</textarea>
                                  </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

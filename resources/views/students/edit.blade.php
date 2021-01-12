@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Student</div>
                <div class="card-body">
                    <form method="POST"  action="{{route('student.update', ['id'=>$student->id])}}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{$student->name }}" >
                          </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" value="{{ $student->phone }}" >
                                </div>

                                <div class="form-group">
                                    <label for="receipt_number">Receipt Number</label>
                                    <input type="text" name="receipt_number" value="{{ $student->receipt_number}}" >
                                </div>

                                <div class="form-group">
                                    <select name="courses">
                                  <option>Choose Course</option>
                                  @foreach ($courses as $item)
                                  <option  value="{{$item->id}}" label="{{$item->name}}" ></option>
                                  @endforeach
                                </select>
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

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Teacher</div>
                <div class="card-body">
                    <form method="POST" action="{{route('teacher.update', ['id'=>$teacher->id])}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{$teacher->name}}" >
                          </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" value="{{ $teacher->price }}" >
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

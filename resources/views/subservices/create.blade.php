@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Sub Service</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('subservice.store') }}">
                        @csrf

                            <div class="form-group">
                            <select name="service_id">
                              <option selected="selected">Choose Service</option>
                              @foreach ($services as $item)
                              <option  value="{{$item->id}}"  label="{{$item->name}}" ></option>
                              @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" name="name" class="form-control" >
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Price</label>
                                <input type="number" name="price" class="form-control" >
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Currency</label>
                                <br>
                                <label class="tm-w-50">
                                  <input
                                    type="radio"
                                    class="with-gap"
                                    name="currency"
                                     value="$"/>
                                  <span>$</span>
                                </label>
<br>
                                <label class="tm-w-50">
                                  <input
                                    type="radio"
                                    class="with-gap"
                                    name="currency"
                                     value="syp"/>
                                  <span>SYP</span>
                                </label>
                              </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
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


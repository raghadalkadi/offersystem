@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Price</div>
                <div class="card-body">
                    <form method="POST" action="{{route('serviceprice.update', ['id'=>$serviceprice->id])}}">
                        @csrf
                        @method("PUT")

                            <div class="form-group">
                                @foreach ($services as $item)
                                <label>{{$item->name}}</label>
                                <input type="radio" name="service_id"  value="{{$item->id}}">

                                @endforeach

                              </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $serviceprice->price }}" required autocomplete="price" autofocus>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rate" class="col-md-4 col-form-label text-md-right">{{ __('Rate') }}</label>
                            <div class="col-md-6">
                                <input id="rate" type="text" class="form-control @error('rate') is-invalid @enderror" name="rate" value="{{ $serviceprice->rate }}" required autocomplete="rate" autofocus>
                                @error('rate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            @foreach ($marketers as $item)
                            <label>{{$item->name}}</label>
                            <input type="radio" name="marketer_id"  value="{{$item->id}}">

                            @endforeach

                          </div>

                        <div class="form-group">
                            @foreach ($contracts as $item)
                            <label>{{$item->name}}</label>
                            <input type="radio" name="contract_id"  value="{{$item->id}}">

                            @endforeach

                          </div>

                        <div class="form-group">
                            @foreach ($salesmanagers as $item)
                            <label>{{$item->name}}</label>
                            <input type="radio" name="salesmanager_id"  value="{{$item->id}}">

                            @endforeach

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

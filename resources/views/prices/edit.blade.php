@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Price</div>
                <div class="card-body">
                    <form method="POST" action="{{route('price.update', ['id'=>$price->id])}}">
                        @csrf
                        @method("PUT")

                            <div class="form-group">
                                @foreach ($equipments as $item)
                                <label>{{$item->name}}</label>
                                <input type="radio" name="equipment_id"  value="{{$item->id}}">

                                @endforeach

                              </div>

                        <div class="form-group row">
                            <label for="cost_price" class="col-md-4 col-form-label text-md-right">{{ __('Cost price') }}</label>
                            <div class="col-md-6">
                                <input id="cost_price" type="text" class="form-control @error('cost_price') is-invalid @enderror" name="cost_price" value="{{ $price->cost_price }}" required autocomplete="cost_price" autofocus>
                                @error('cost_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sale_price" class="col-md-4 col-form-label text-md-right">{{ __('Sale price') }}</label>
                            <div class="col-md-6">
                                <input id="sale_price" type="text" class="form-control @error('sale_price') is-invalid @enderror" name="sale_price" value="{{ $price->sale_price }}" required autocomplete="sale_price" autofocus>
                                    @error('sale_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rate" class="col-md-4 col-form-label text-md-right">{{ __('Rate') }}</label>
                            <div class="col-md-6">
                                <input id="rate" type="text" class="form-control @error('rate') is-invalid @enderror" name="rate" value="{{ $price->rate }}" required autocomplete="rate" autofocus>
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

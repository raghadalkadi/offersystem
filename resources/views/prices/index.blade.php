@extends('layouts.app')

@section('content')


<div class="container" >
    <div class="row">
      <div class="col" >

            <h1 class="display-4">All Prices</h1>
            <a class="btn btn-success" style="background-color:#60a3bc; border-color:#60a3bc;" href="{{route('price.create')}}">Create Price</a>

        </div>
      </div>
      <br>
    </div>


        @if ($prices->count()>0)


        <div class="table-responsive" style=" padding-left: 20px; padding-right: 20px">
        <table class="table">
            <thead class="" style="background-color:#60a3bc; color:white;">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Equipment</th>
                <th scope="col">Cost price</th>
                <th scope="col">Sale price</th>
                <th scope="col">Rate</th>
                <th scope="col">Cost price </th>
                <th scope="col">Sale price </th>
                <th scope="col">Marketer</th>
                <th scope="col">Marketer total</th>
                <th scope="col">Contract</th>
                <th scope="col">Contract total</th>
                <th scope="col">Marketing total</th>
                <th scope="col">Market total</th>
                <th scope="col">Manager</th>
                <th scope="col">Sales Manager total</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($prices as $item)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->equipment->name}}</td>
                    <td>{{$item->cost_price}} $</td>
                    <td>{{$item->sale_price}} $</td>
                    <td>{{$item->rate}} $</td>
                    <td>{{$item->cost_price_sy}} SYP</td>
                    <td>{{$item->sale_price_sy}} SYP</td>
                    <td>{{$item->marketer->name}}</td>
                    <td>{{$item->marketer_total}}</td>
                    <td>{{$item->contract->name ?? ''}}</td>
                    <td>{{$item->contract_total}}</td>
                    <td>{{$item->marketing_total}}</td>
                    <td>{{$item->market_total}}</td>
                    <td>{{$item->salesmanager->name}}</td>
                    <td>{{$item->salesmanager_total}}</td>
                    <td>
                        <a href="{{route('price.edit',  $item->id)}}"><i class="fas fa fa-edit"></i></a> &nbsp;
                        <a class="text-danger" href="{{route('price.destroy', ['id'=>$item->id])}}"><i class="fas fa fa-trash-alt"></i></a>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
      </div>
          @else
          <div class="col">
          <div class="alert alert-danger" role="alert">
             No Prices!
            </div>
        </div>
          @endif

  @endsection

  <style>
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        word-wrap: break-word;
      white-space: nowrap;
    }
    .table {
        width: 100%;
    }
    </style>

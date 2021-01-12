@extends('layouts.app')

@section('content')


<div class="container" >
    <div class="row">
      <div class="col" >

            <h1 class="display-4">All Receipts</h1>
            <a class="btn btn-success" style="background-color:#60a3bc; border-color:#60a3bc;" href="{{route('receipt.create')}}">Create Receipt</a>

        </div>
      </div>
      <br>
    </div>

        @if ($recettes->count()>0)

        <div class="table-responsive" style=" padding-left: 20px; padding-right: 20px">
        <table class="table">
            <thead class="" style="background-color:#60a3bc; color:white;">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Customer</th>
                <th scope="col">Invoice</th>
                <th scope="col">First receipt</th>
                <th scope="col">Second receipt</th>
                <th scope="col">Third receipt</th>
                <th scope="col">Marketer</th>
                <th scope="col">Marketer ftotal</th>
                <th scope="col">Marketer stotal</th>
                <th scope="col">Marketer thtotal</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($recettes as $item)

                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->customer->name ?? ''}}</td>
                    <td>{{$item->offer->total ?? ''}}</td>
                    <td>{{$item->first}}</td>
                    <td>{{$item->second}}</td>
                    <td>{{$item->third}}</td>
                    <td>{{$item->marketer->name}}</td>
                    <td>{{$item->marketer_first}}</td>
                    <td>{{$item->marketer_second}}</td>
                    <td>{{$item->marketer_third}}</td>
                    <td>
                        <a href="{{route('receipt.edit',  $item->id)}}"><i class="fas fa-2x fa-edit"></i></a> &nbsp;
                        <a class="text-danger" href="{{route('receipt.destroy', ['id'=>$item->id])}}"><i class="fas fa-2x fa-trash-alt"></i></a>
                    </td>

                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
          @else
          <div class="col">
          <div class="alert alert-danger" role="alert">
             No Receipts!
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

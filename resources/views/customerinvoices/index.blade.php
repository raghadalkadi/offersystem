@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row">
      <div class="col" >

            <h1 class="display-4">All Invoices</h1>
            <a class="btn btn-success" style="background-color:#60a3bc; border-color:#60a3bc " href="{{route('customerinvoice.create')}}">Create Invoice</a>
        </div>
      </div>
      <br>
    </div>

        @if ($customerinvoices->count()>0)

        <div class="table-responsive" style=" padding-left: 20px; padding-right: 20px">
        <table class="table">
            <thead class="" style="background-color:#60a3bc; color:white;">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Customer</th>
                <th scope="col">Equipment invoice</th>
                <th scope="col">Service invoice</th>
                <th scope="col">External costs</th>
                <th scope="col">Total invoice</th>
                <th scope="col">Payment Situation</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($customerinvoices as $item)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->customer->name ?? ''}}</td>
                    <td>{{$item->offer->totale ?? ''}}</td>
                    <td>{{$item->offer->totals ?? ''}}</td>
                    <td>{{$item->offer->external ?? ''}}</td>
                    <td>{{$item->offer->total ?? ''}}</td>
                    <td>{{$item->payment_situation}}</td>
                    <td>
                        <a href="{{route('customerinvoice.edit',  $item->id)}}"><i class="fas fa-2x fa-edit"></i></a> &nbsp;
                        <a class="text-danger" href="{{route('customerinvoice.destroy', ['id'=>$item->id])}}"><i class="fas fa-2x fa-trash-alt"></i></a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
          @else
          <div class="col">
          <div class="alert alert-danger" role="alert">
             No Invoices!
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

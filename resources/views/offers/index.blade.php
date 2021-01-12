@extends('layouts.app')

@section('content')


<div class="container" >
    <div class="row">
      <div class="col" >

            <h1 class="display-4">All Offers</h1>
            <a class="btn btn-success" style="background-color:#60a3bc; border-color:#60a3bc " href="{{route('offer.create')}}">Create Offer</a>

        </div>
      </div>
      <br>
    </div>


        @if ($offers->count()>0)

        <div class="table-responsive" style=" padding-left: 20px; padding-right: 20px">

        <table class="table">
            <thead class="" style="background-color:#60a3bc; color:white ">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Customer name</th>
                <th scope="col">Info</th>
                <th scope="col">RFQ</th>
                <th scope="col">Offer date</th>
                <th scope="col">Valid date</th>
                <th scope="col">total</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($offers as $item)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->customer->name}}</td>
                    <td>
                        <img src="{{ asset($item->info)}}" alt="{{$item->info}}" class="img-thumbnail" width="100" height="100">
                    </td>
                    <td>{{$item->rfq}}</td>
                    <td>{{$item->offer_date}}</td>
                    <td>{{$item->valid_date}}</td>
                    <td>{{$item->total}}</td>
                    <td>
                        <a href="{{route('offer.edit',  $item->id)}}"><i class="fas fa-2x fa-edit"></i></a> &nbsp;
                        <a class="text-danger" href="{{route('offer.destroy', ['id'=>$item->id])}}"><i class="fas fa-2x fa-trash-alt"></i></a>&nbsp;
                        <a class="" href="{{route('offer.html_email', $item->id)}}"><i class="far fa-2x fa-envelope"></i></a>&nbsp;
                        <a class="" href="{{route('offer.print', ['id'=>$item->id])}}"><i class="fas fa-2x fa-print"></i></a>
                    </td>

                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
          @else
          <div class="col">
          <div class="alert alert-danger" role="alert">
             No Offers!
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

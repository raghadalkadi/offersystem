@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row">
      <div class="col" >

            <h1 class="display-4">All Courses</h1>
            <a class="btn btn-success" style="background-color:#60a3bc; border-color:#60a3bc " href="{{route('course.create')}}">Create Course</a>
        </div>
      </div>
      <br>
    </div>

        @if ($courses->count()>0)

        <div class="table-responsive" style=" padding-left: 20px; padding-right: 20px">

        <table class="table">
            <thead class="" style="background-color:#60a3bc; color:white ">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Teacher</th>
                <th scope="col">Hours</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($courses as $item)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->teacher->name}}</td>
                    <td>{{$item->hours}} h</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <a class="text-success" href="{{route('course.show', $item->slug)}}"><i class="fas fa-2x fa-eye"></i></a> &nbsp;
                        <a href="{{route('course.edit',  $item->id)}}"><i class="fas fa-2x fa-edit"></i></a> &nbsp;
                        <a class="text-danger" href="{{route('course.destroy', ['id'=>$item->id])}}"><i class="fas fa-2x fa-trash-alt"></i></a>
                    </td>

                  </tr>
                @endforeach

            </tbody>
          </table>
        </div>
          @else
          <div class="col">
          <div class="alert alert-danger" role="alert">
             No Courses!
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

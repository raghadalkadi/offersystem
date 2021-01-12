@extends('layouts.app')

@section('content')

<style>
    html, body {
                background-color: white;
                color: #60a3bc;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                border-color:
            }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }
    .margin{
        margin-top: 8%;
    }


    .m-b-md {
        margin-bottom: 30px;
    }
</style>

<div class="content">
    <div class="title m-b-md margin">
        Welcome
    </div>

    <div class="content">
        <div class=" m-b-md">
            You are in!
        </div>
    </div>













{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Account</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('account.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="dep_name">Department Name</label>
                            <input type="text" name="dep_name" value="{{ old('dep_name') }}" >
                          </div>

                                <div class="form-group">
                                    <label for="fund">Fund</label>
                                    <input type="text" name="fund" value="{{ old('fund') }}" >
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

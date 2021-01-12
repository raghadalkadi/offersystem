@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Receipt</div>
                <div class="card-body">
                        <form method="POST" action="{{route('receipt.update', ['id'=>$receipt->id])}}">
                            @csrf
                            @method("PUT")

                                    <div class="form-group">
                                        <select id="customer" name="customer_id">
                                            <option value="" hidden>Choose Customer</option>
                                            @foreach ($customers as $item)
                                        <option class="e" value="{{$item->id}}" label="{{$item->name}}">
                                        </option>
                                            @endforeach
                                        </select>
                                        <br>
                                        Offer for this customer with his total amount
                                        <select id="offer" name="offer_id"
                                         class="offer">
                                        </select>
                                    </div>

                                        <div class="form-group">
                                            <label for="first" class="label">{{ __('First receipt') }}</label>
                                            <input id="first" type="text" class="input" name="first" value="{{$receipt->first}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="second" class="label">{{ __('Second receipt') }}</label>
                                            <input id="second" type="text" class="input" name="second" value="{{$receipt->second}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="third" class="label">{{ __('Third receipt') }}</label>
                                            <input id="third" type="text" class="input" name="third" value="{{$receipt->third}}">
                                        </div>

                                        <div class="form-group">
                                                @foreach ($marketers as $item)
                                                <label>{{$item->name}}</label>
                                                <input type="radio" name="marketer_id"  value="{{$item->id}}">
                                                @endforeach
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

@section('js')
<script>
    $(document).ready(function(){
$('#customer').on('change',function(){
    var id = $(this).val();
   $.ajax({
    url: "{{ URL::to('offerget')}}/" + id,
    type:"get",
    contentType: 'application/json',
    success: function(data){
        var t ;
        $.each(data,function(key , value){
            t += " <option value="+ value.id +" label="+ value.total+">" + value.total+ "</option>"
        });
        $('#offer').html(t);
    },

   });
   });

});
</script>
@endsection

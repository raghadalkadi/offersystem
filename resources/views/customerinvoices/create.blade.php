@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Invoice</div>
                <div class="card-body">
                        <form method="POST" action="{{ route('customerinvoice.store') }}">
                            @csrf

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

                            <div class="form-group row">

                                <div class="form-group tm-choices-container tm-text-secondary">
                                    <label for="name" class="label">{{ __('Payment situation') }}</label>
                                    <label class="tm-w-50">
                                      <input
                                        type="radio"
                                        class="with-gap"
                                        name="payment_situation"
                                        value="yes" />
                                      <span>Yes</span>
                                    </label>

                                    <label class="tm-w-50">
                                      <input
                                        type="radio"
                                        class="with-gap"
                                        name="payment_situation"
                                        value="no" />
                                      <span>No</span>
                                    </label>
                                  </div>

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

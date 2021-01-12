@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class='print' style="border: 1px solid #a1a1a1; width: 500px; background: white; padding: 10px; margin: 0 auto; text-align: center;">
                    <div class="invoice-title" align="center">
                        <h1>This is your offer</h1>
                    </div>
                    <div class="invoice-title" align="left">

                        <h2>Customer Name is: {{$data['customer_id']}}</h2>
                    </div>
                    <div class="invoice-title" align="left">
                        <h2>Your RFQ is: {{$data['rfq']}}</h2>
                    </div>
                    <div class="invoice-title" align="left">
                        <h2>The Condition is: {{$data['conditionn']}}</h2>
                    </div>
                    <div class="invoice-title" align="left">
                        <h2>Offer Date is: {{$data['offer_date']}}</h2>
                    </div>
                    <div class="invoice-title" align="left">
                        <h2>Valid Date is: {{$data['valid_date']}}</h2>
                    </div>
                    <div class="invoice-title" align="left">
                        <h2>Discount is: {{$data['discount']}}</h2>
                    </div>
                    <div class="invoice-title" align="center">
                        <h2>Total Amount is:{{$data['total']}}</h2>
                    </div>
                    <div class="invoice-title" align="center">
                        <h1>Thank You</h1>
                    </div>
                    <input style="padding:5px;" value="Print Offer" type="button" class="button">
                </div>
            </div>
        </div>
        </div>
</div>
                @endsection
                @section('js')
                    <script>
                        $(document).ready(function(){
                        $(".button").click(function(){
                        window.print();
                        });
                        });
                    </script>
@endsection


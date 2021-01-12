@extends('layouts.app')

@section('content')
<h1>This is your offer</h1>
<h2>Customer Name is: {{$customer_id}}</h2>
<h2>Your RFQ is: {{$rfq}}</h2>
<h2>The Condition is: {{$conditionn}}</h2>
<h2>Offer Date is: {{$offer_date}}</h2>
<h2>Valid Date is: {{$valid_date}}</h2>
<h2>Discount is: {{$discount}}</h2>
<h2>Total Amount is:{{$total}}</h2>
<h1>Thank You</h1>

@endsection

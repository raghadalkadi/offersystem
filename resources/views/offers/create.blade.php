@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Offer</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('offer.store') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                    <select name="customer_id">
                                  <option>Choose Customer</option>
                                  @foreach ($customers as $item)
                                  <option  value="{{$item->id}}"  label="{{$item->name}}" ></option>
                                  @endforeach
                                </select>
                                </div>

                               <div class="form-group">
                                <label for="info">Info</label>
                                <input type="file" name="info" value="{{ old('info') }}" >
                              </div>

                               <div class="form-group">
                                <label for="rfq">RFQ</label>
                                <select id="rfq">
                                    <option>Select one</option>
                                    <option value="number">number</option>
                                    <option value="email">email</option>
                                    <option value="telephone">telephone</option>
                                    <option value="meeting">meeting</option>
                                </select>
                                <input type="text" name="rfq" value="{{ old('rfq') }}">
                              </div>

                              <div class="form-group">
                                <label for="offer_date">Offer date</label>
                                <input type="date" name="offer_date" value="2020-12-22">
                              </div>

                               <div class="form-group">
                                <label for="valid_date">Valid date</label>
                                <input type="date" name="valid_date" value="2020-12-22">
                              </div>

                              <div class="form-group">
                                <button type="button" class="btn btn-outline-info"
                                data-toggle="tooltip" data-placement="right" title="Show Equipments">Equipments</button>
                                </div>

                             <div class="form-group equipment" style="display: none">
                                @foreach ($equipments as $item)
                                <label>{{$item->name}}</label>
                                <input type="checkbox" class="e" name="equipment_id"
                             value="{{$item->id}}" data-test="{{$item->name}}">
                              <div class="content"></div>
                                @endforeach
                            </div>

                            {{-- <div class="form-group">
                                <select id="equipment" class="equipment" name="equipment_id">
                                    <option value="" hidden>Choose Service</option>
                                    @foreach ($equipments as $item)
                                <option class="" value="{{$item->id}}" label="{{$item->name}}">
                                </option>
                                    @endforeach
                                </select>
                                <div class="content"></div>
                            </div> --}}

                            <div class="form-group">
                                Equipments Total
                            <input type="text" id="total1" value="" name="totale">
                            </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">Condition </label>
                            <textarea name="conditionn" rows="2" style="display:block; width: 50%; height: 85px;">
Payment will be change according to the price change in the local market.
Payment 100% before delivery.
</textarea>
                          </div>

                            <div class="form-group">
                                <select id="service" name="service_id">
                                    <option value="" hidden>Choose Service</option>
                                    @foreach ($services as $item)
                                <option class="e" value="{{$item->id}}" label="{{$item->name}}">
                                </option>
                                    @endforeach
                                </select>

                                <select id="subservice" name="subservice"
                                 class="subservice">
                                </select>
                                <div class="content"></div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-outline-primary"
                                data-toggle="tooltip" data-placement="right" title="Show Subservices">Subservices</button>
                            </div>

                            <div class="form-group subservices" style="display: none">
                                @foreach ($subservices as $item)
                                <label>{{$item->name}}</label>
                                <input type="checkbox" class="e1" name="subservice_id"
                                 value="{{$item->id}}" data-test="{{$item->name}}">
                                 <div class="content2"></div>
                                @endforeach

                              </div>

                                <div class="form-group">
                                    Services Total
                                <input type="text" id="total2" value="" name="totals">
                                </div>

                                <div class="form-group">
                                    External Costs
                                <input type="text" id="external" value="" name="external">
                                </div>

                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="number" class="discount" name="discount" step="0.01" value="{{ old('discount') }}"> %
                  </div>

                  <div class="form-group">
                      final total
                  <input type="text" class="total" value="" name="total">
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

        $(".btn-outline-info").click(function(){
        $(".equipment").toggle();
       });

       $(".e").click(function(){
            if($(this).prop( "checked" )){
                var x = $(this).attr("data-test");
                $(this).next().html(`
                <div class="wweq">
                                    Currency:$
                                    Price: <input class="price1" name="x-${x}" type="text">
                                    <br>
                                    Quantity: <input class="quantity1" type="text" value="1">

                                 </div>
                `);
    }
    else{
        var x = $(this).attr("data-test");
                $(this).next().html(`
                <div class="wweq">
                                 </div>
                `);
    }
        });

    // $(".equipment").change(function(){
    //     if($(this).filter( ":selected" )){
    //             $(this).next().append(`
    //             <div class="wweq">
    //                                 Currency:$
    //                                 Price: <input class="price1" type="text">
    //                                 <br>
    //                                 Quantity: <input class="quantity1" type="text" value="1">

    //                              </div>
    //             `);
    //     }

    // });


        $('#service').on('change',function(){
        var id = $(this).val();
       $.ajax({
        url: "{{ URL::to('subservicesget')}}/" + id,
        type:"get",
        contentType: 'application/json',
        success: function(data){
            var t ;
            $.each(data,function(key , value){
                t += " <option value="+ value.id +" label="+ value.name+">" + value.name+ "</option>"
            });
            $('#subservice').html(t);
        },

       });
       });


       $(".btn-outline-primary").click(function(){
        $(".subservices").toggle();
       });

       $(".e1").click(function(){
            if($(this).prop( "checked" )){
                var x = $(this).attr("data-test");
                $(this).next().html(`
                <div class="ser">
                                    Currency:$
                                    Price: <input class="price2" name="x-${x}" type="text">
                                    <br>
                                    Quantity: <input class="quantity2" type="text" value="1">

                                 </div>
                `);
    }
    else{
        var x = $(this).attr("data-test");
                $(this).next().html(`
                <div class="ser">
                                 </div>
                `);
    }
        });

$(document).on("keyup", ".price1 , .quantity1", function() {
    var e= $(this).parent();

    var multi = 0  ;

    $( ".wweq" ).each(function( index ){
        console.log(1);
       var x = $(this).find('.price1').val();
       var y =$(this).find('.quantity1').val();
       multi += x * y ;
            });
    $("#total1").val(multi);
});

$(document).on("keyup", ".price2 , .quantity2", function() {
    var ee= $(this).parent();

    var multip = 0  ;

    $( ".ser" ).each(function( index ){
        console.log(1);
       var xx = $(this).find('.price2').val();
       var yy =$(this).find('.quantity2').val();
       multip += xx * yy ;
            });
    $("#total2").val(multip);
});

$(document).on("change", "#total1 , #total2, .discount, #external", function() {
   var final1 = 0;
   var final2 = 0;
   var final3 = 0;
   var final4 = 0;
   var final5 = 0;
   var final6 = 0;
   var sum1 = 0;
   var sum2 = 0;
   var sum3 = 0;
   var sum4 = 0;
   var tot = $('#total1').val();
   var toto = $('#total2').val();
   var dis = $('.discount').val();
   var ex = $('#external').val();
   sum1 = parseInt(tot) + parseInt(toto);
   sum2 = parseInt(tot);
   sum3 = parseInt(toto);
   final1 += (sum1 + parseInt(ex)) * dis;
   final2 += (sum2 + parseInt(ex)) * dis;
   final3 += (sum3 + parseInt(ex)) * dis;
   final4 += sum1 + parseInt(ex);
   final5 += sum2 + parseInt(ex);
   final6 += sum3 + parseInt(ex);
   if(tot == 0 & toto != 0 & dis != 0){
    $(".total").val(final3);
   }
   else if (toto == 0 & tot != 0 & dis != 0){
    $(".total").val(final2);
   }
   else if (tot != 0 & toto == 0 & dis == 0){
    $(".total").val(final5);
   }
   else if(toto != 0 & tot == 0 & dis == 0){
    $(".total").val(final6);
   }
   else if (tot != 0 & toto != 0 & dis == 0){
    $(".total").val(final4);
   }
   else{
   $(".total").val(final1);}
});

        });
</script>
@endsection

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customerinvoice extends Model
{
    protected $fillable = [
        'payment_situation',
        'customer_id',
        'offer_id',
    ];

 public function customer()
 {
     return $this->belongsTo('App\Customer', 'customer_id');
 }

 public function offer()
 {
     return $this->belongsTo('App\Offer', 'offer_id');
 }

}

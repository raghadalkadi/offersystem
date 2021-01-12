<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplierinvoices extends Model
{
    protected $fillable = [
        'payment_situation',
        'invoice',
        'supplier_id',
    ];

 public function supplier()
 {
     return $this->belongsTo('App\Supplier', 'supplier_id');
 }
}

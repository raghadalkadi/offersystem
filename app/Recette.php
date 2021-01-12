<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    protected $fillable = [
        'customer_id',
        'offer_id',
        'first',
        'second',
        'third',
        'marketer_id',
        'marketer_first',
        'marketer_second',
        'marketer_third',
    ];

    public function marketer()
    {
        return $this->belongsTo('App\Marketer', 'marketer_id');
    }

    public function customer()
    {
     return $this->belongsTo('App\Customer', 'customer_id');
    }

    public function offer()
    {
     return $this->belongsTo('App\Offer', 'offer_id');
    }
}

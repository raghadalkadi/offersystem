<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'customer_id',
        'info',
        'rfq',
        'offer_date',
        'valid_date',
        'service_id',
        'subservice_id',
        'equipment_id',
        'conditionn',
        'total',
        'totale',
        'totals',
        'external',
        'discount'
    ];
    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customer_id');
    }

    public function service()
    {
        return $this->belongsTo('App\Service', 'service_id');
    }

    public function equipment()
    {
        return $this->belongsTo('App\Equipment', 'equipment_id');
    }

    public function subservice()
    {
        return $this->belongsTo('App\Subservice', 'subservice_id');
    }

    public function invoice()
    {
        return $this->hasOne('App\Customerinvoice');
    }

    public function receite()
    {
        return $this->hasOne('App\Receite');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serviceprice extends Model
{
    protected $fillable = [
        'service_id',
        'price',
        'rate',
        'price_sy',
        'marketer_id',
        'marketer_total',
        'contract_id',
        'contract_total',
        'marketing_total',
        'market_total',
        'salesmanager_id',
        'salesmanager_total',
    ];
    public function service()
    {
        return $this->belongsTo('App\Service', 'service_id');
    }

    public function marketer()
    {
        return $this->belongsTo('App\Marketer', 'marketer_id');
    }

    public function contract()
    {
        return $this->belongsTo('App\Contract', 'contract_id');
    }

    public function salesmanager()
    {
        return $this->belongsTo('App\Salesmanager', 'salesmanager_id');
    }
}

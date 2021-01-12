<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'equipment_id',
        'cost_price',
        'sale_price',
        'rate',
        'cost_price_sy',
        'sale_price_sy',
        'marketer_id',
        'marketer_total',
        'contract_id',
        'contract_total',
        'marketing_total',
        'market_total',
        'salesmanager_id',
        'salesmanager_total',
    ];
    public function equipment()
    {
        return $this->belongsTo('App\Equipment', 'equipment_id');
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


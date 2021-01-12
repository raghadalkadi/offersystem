<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subservice extends Model
{
    protected $fillable = [
        'service_id',
        'price',
        'name',
        'currency',
    ];
    public function service()
    {
        return $this->belongsTo('App\Service', 'service_id');
    }

    public function subservice()
    {
        return $this->hasOne('App\Offer');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $fillable = [
        'name',
    ];

    public function price()
    {
        return $this->hasOne('App\Price');
     }

     public function serviceprice()
    {
        return $this->hasOne('App\Serviceprice');
     }
}

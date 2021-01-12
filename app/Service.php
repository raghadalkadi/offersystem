<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
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

     public function supplier()
     {
         return $this->belongsToMany('App\Supplier');
     }

     public function offer()
     {
         return $this->hasOne('App\Offer');
     }

     public function subservice()
     {
         return $this->hasMany('App\Subservice', 'parent_id');
     }
}

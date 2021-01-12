<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [
        'name',
    ];
    public function price()
    {
        return $this->hasOne('App\Price');
     }

     public function suppliers()
     {
         return $this->belongsToMany('App\Supplier');
     }

     public function offer()
     {
         return $this->hasMany('App\Offer');
     }
}

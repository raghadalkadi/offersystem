<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'address',
        'authorized_person',
        'person_phone',
        'email',
        'job_title',
    ];

    public function invoice()
    {
        return $this->hasMany('App\Customerinvoice');
     }

     public function offer()
     {
        return $this->hasMany('App\Offer');
     }

     public function receipt()
     {
        return $this->hasMany('App\Recette');
     }
}

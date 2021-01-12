<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'logo'
    ];

    public function offer()
    {
        return $this->hasOne('App\Offer');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'dep_name',
        'fund',
    ];

    public function person()
    {
        return $this->belongsToMany('App\Person');
    }
}

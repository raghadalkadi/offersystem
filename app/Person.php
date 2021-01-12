<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name',
        'address',
        'person_phone',
        'type'
    ];

    public function account()
    {
        return $this->belongsToMany('App\Account');
    }
}

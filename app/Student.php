<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'receipt_number'
    ];

    public function course()
    {
        return $this->belongsToMany('App\Course');
    }
}

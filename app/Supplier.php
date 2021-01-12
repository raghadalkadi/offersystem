<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
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
    return $this->hasOne('App\Supplierinvoices');
 }

 public function equipment()
 {
     return $this->belongsToMany('App\Equipment');
 }

 public function service()
 {
     return $this->belongsToMany('App\Service');
 }
}

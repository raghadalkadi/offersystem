<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    protected $fillable =[
        'name',
        'description',
        'hours',
        'slug',
        'teacher_id',
        'price'
    ];

        public function teacher()
        {
            return $this->belongsTo('App\Teacher', 'teacher_id');
        }

        public function student()
        {
            return $this->belongsToMany('App\Student');
        }
}

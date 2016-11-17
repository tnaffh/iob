<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    function semester(){
        return $this->belongsTo(Semester::class);
    }

    function exams(){
        return $this->hasMany(Examination::class);
    }
}

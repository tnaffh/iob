<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    function course(){
        return $this->hasMany(Course::class);
    }


}

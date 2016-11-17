<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{

    function course(){
        return $this->belongsTo(Course::class);
    }
    function scores(){
        return $this->hasMany(Score::class);
    }
}

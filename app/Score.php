<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    function student(){
        return $this->belongsTo(User::class);
    }

    function exam(){
        return $this->belongsTo(Examination::class);
    }
}

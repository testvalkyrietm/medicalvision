<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    function submissions() {
        return $this->hasMany('App\Submission');
    }
}

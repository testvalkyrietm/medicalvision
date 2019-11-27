<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    function submissions() {
        return $this->hasMany('App\Submission');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonTitle extends Model
{
    function submissions() {
        return $this->hasMany('App\Submission');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Submission extends Model
{
    protected $fillable = ['title_id', 'language_id', 'email', 'country_id', 'first_name', 'last_name', 'center_name'];


    function country() {
        return $this->belongsTo('App\Country', "country_id");
    }

    function language() {
        return $this->belongsTo('App\Language', "language_id");
    }

    function personTitle() {
        return $this->belongsTo('App\PersonTitle', "title_id");
    }
}

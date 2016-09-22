<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    public function link()
    {
        return $this->belongsTo('App\Link');
    }
}

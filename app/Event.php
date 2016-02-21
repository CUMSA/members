<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Table used to store information for this model
    protected $table = 'events';

    /*
     * Get the attendees for this event.
     */
    public function attendees()
    {
        return $this->hasMany('App\EventAttendee');
    }
}

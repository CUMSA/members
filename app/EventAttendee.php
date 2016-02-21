<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventAttendee extends Model
{
    // Table used to store information for this model
    protected $table = 'event_attendees';

    /**
     * Get the event this attendee belongs to.
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}

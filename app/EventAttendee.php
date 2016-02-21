<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventAttendee extends Model
{
    // Table used to store information for this model
    protected $table = 'event_attendees';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['time_admitted', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Get the event this attendee belongs to.
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}

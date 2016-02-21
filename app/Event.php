<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Table used to store information for this model
    protected $table = 'events';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /*
     * Get the attendees for this event.
     */
    public function attendees()
    {
        return $this->hasMany('App\EventAttendee');
    }
}

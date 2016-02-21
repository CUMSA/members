<?php

namespace App\Http\Controllers\Events;

use App\Event;
use App\EventAttendee;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventAttendeesController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Event Attendees Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the lookup and admittance of event attendees.
    |
    */

    /**
     * Handle an attendee retrieval request
     * @param Request $request
     * @param $event_id
     * @param $crsid TODO: replace with member id
     * @return \Illuminate\View\View
     */
    public function getAttendee(Request $request, $event_id, $crsid) {
        $event = Event::find(1);
        if($event === null) {
            abort(404, "Event not found");
        }

        $attendee = $event->attendees()->where('crsid', strtolower($crsid))->first();
        if($attendee == null) {
            abort(404, "Attendee not found");
        }

        echo 'Attendee ' . $attendee->crsid . ' is attending event ' . $attendee->event->name . '.';
    }

}

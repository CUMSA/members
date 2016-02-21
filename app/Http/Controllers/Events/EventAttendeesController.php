<?php

namespace App\Http\Controllers\Events;

use App\Event;
use App\EventAttendee;
use Carbon\Carbon;
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
    public function getAttendee(Request $request, $event_id, $crsid)
    {
        $attendee = $this->getEventAttendee($crsid);

        if($attendee !== null) {
            echo 'Attendee ' . $attendee->crsid . ' is attending event ' . $attendee->event->name . '.';
        } else {
            abort(404, 'Attendee not found.');
        }
    }

    /**
     * Scan an attendee to mark attendee as present
     * @param Request $request
     * @param $event_id
     * @param $crsid TODO: replace with member id
     * @return \Illuminate\View\View
     */
    public function scanAttendee(Request $request, $event_id, $crsid)
    {
        $attendee = $this->getEventAttendee($crsid);

        if($attendee !== null) {
            $admit_time = Carbon::now();
            $attendee->time_admitted = $admit_time;
            $attendee->save();
            echo 'Attendee ' . $attendee->crsid . ' marked as attending at ' . $admit_time->toDateTimeString() . '.';
            echo '<br />';
            echo 'Comments: '. $attendee->comments;
        } else {
            abort(404, 'Attendee not found.');
        }
    }

    /**
     * @param $crsid
     * @return mixed
     */
    public function getEventAttendee($crsid)
    {
        $event = Event::find(1);
        if ($event === null) {
            return null;
        }

        $attendee = $event->attendees()->where('crsid', strtolower($crsid))->first();
        return $attendee;
    }

}

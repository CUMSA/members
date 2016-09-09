<?php

namespace App\Http\Controllers\Events;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class EventsController extends Controller
{
    public function show()
    {
        $events = Auth::user()->member->getEvents();
        return view('members.events.index')
            ->with('events', $events);
    }
}

@extends('layouts.panel')

@section('panel-cols', '8')
@section('panel-offset', '2')
@section('panel-heading', 'Events List')
@section('panel-body')
    @parent
    <ul>
        @foreach($events as $event)
            <li><font size="5"><b><u> {{ $event->name }} </u></b></font></li>
            <ul>
                <li>{{ date_format(new DateTime($event->datetime_start), 'D-M-Y H:i') }}</li>
                <li>Location: {{ $event->location }}</li>
                <li>{{ $event->description }}</li>
            </ul>
        @endforeach
    </ul>

@endsection

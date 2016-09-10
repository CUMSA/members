@extends('layouts.panel')

@section('panel-cols', '8')
@section('panel-offset', '2')
@section('panel-heading', 'Your upcoming events')
@section('panel-body')
    @parent
    <ul>
        @if($events != null)
            @foreach($events as $event)
                <li><span style = "font-size:20px"><b><u> {{ $event->name }} </u></b></span></li>
                <ul>
                    <li>{{ date_format(new DateTime($event->datetime_start), 'D-M-Y H:i') }}</li>
                    <li>Location: {{ $event->location }}</li>
                    <li>{{ $event->description }}</li>
                </ul>
            @endforeach
        @else
            <span style = "font-size:20px"> You have nothing coming up! Be sure to check out our <a href={{ $cumsaweb_events }}> events</a> page for more events! </span>
        @endif
    </ul>

@endsection

@extends('layouts.default')
@section('content')
    @if ($success)
        <div class="header">{{ $attendee }} marked present.</div>
        <div class="sub_header">Comments : {{ $comments }}</div>
    @else
        <div class="header">{{ $error }}</div>
    @endif
@stop

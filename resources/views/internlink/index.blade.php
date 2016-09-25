@extends('layouts.panel')
@section('panel-cols', '10')
@section('panel-offset', '1')
@section('panel-heading', 'InternLink')
@section('panel-body')

    <h3><b>Find out more about your dream internship!</b></h3>
    <h4>Internlink is a platform for you to connect with others to gain insights into the internship of your choice</h4>
    <h4>There are currently {!! $internship_count !!} entries in the database</h4>
    <h4><a href="{!! route('internlink.all') !!}">View all entries</a></h4>
    {!! form($form) !!}
    <h4><a href="{!! route('internlink.signup') !!}">Signup For Internlink</a></h4>

@endsection
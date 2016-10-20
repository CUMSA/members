@extends('layouts.panel')
@section('panel-cols', '10')
@section('panel-offset', '1')
@section('panel-heading', 'InternLink')
@section('panel-body')
    @if(Session::has('alert-warning'))
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">×</a>
            {{ Session::get('alert-warning') }}
        </div>
    @endif
    <h3><b>Find out more about your dream internship!</b></h3>
    <h4>Internlink is a platform for you to connect with others to gain insights into the internship of your choice</h4>
    <h4>There are currently {{ $internship_count }} entries in the database</h4>
    <h4><a href="{{ route('internlink.all') }}">View all entries</a></h4>
    {!! form($form) !!}
    @if(!$link_exists)
        <h3>Alternatively, you can <a href="{{ route('internlink.signup') }}">signup</a> for Internlink</h3>
    @else
        <h3>Update my <a href="{{ route('internlink.profile.contact') }}">profile</a></h3>
        <h5><a href="{{ route('internlink.policy') }}">Usage Policy</a></h5>
    @endif
@endsection

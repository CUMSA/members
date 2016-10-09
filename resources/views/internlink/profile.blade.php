@extends('layouts.panel')
@section('panel-cols', '10')
@section('panel-offset', '1')
@section('panel-heading', 'InternLink')
@section('panel-body')
    @if(Session::has('alert-success'))
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert">×</a>
            {{ Session::get('alert-success') }}
        </div>
    @endif

    @if(Session::has('alert-warning'))
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">×</a>
            {{ Session::get('alert-warning') }}
        </div>
    @endif
    <h4>Update profile for:</h4>
    <div id="buttons">
        <a href="{{ route('internlink.profile', 'contact') }}" class="btn btn-success" id="contact">Contact Information</a>
        @foreach($internships as $internship)
            <a href="{{ route('internlink.profile', $internship->id) }}" class="btn btn-success" id="{{ $internship->id }}">{{ $internship->company_name }}</a>
        @endforeach
    </div>
    <h4>
        <a href="{{ route('internlink.signup.internship') }}" class="btn btn-success" id="contact">Add internship</a>
    </h4>
    {!! form($form) !!}

    <style>
        #buttons {
            margin-bottom: 20px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $(document).getElementsByTagName('button').on('click', function(e) {
                e.preventDefault();
            });
        });
    </script>
@endsection
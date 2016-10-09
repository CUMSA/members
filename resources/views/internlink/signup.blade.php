@extends('layouts.panel')
@section('panel-cols', '8')
@section('panel-offset', '2')
@section('panel-heading', 'Add Internship Details')
@section('panel-body')
    @if(Session::has('alert-warning'))
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">×</a>
            {{ Session::get('alert-warning') }}
        </div>
    @endif

    @if(Session::has('alert-success'))
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert">×</a>
            {{ Session::get('alert-success') }}
        </div>
    @endif

    @if(Session::has('signup'))
        <div class="alert alert-warning">
            <a class="close" data-dismiss="alert">×</a>
            {{ Session::get('signup') }}
        </div>
    @endif
    {!! form($form) !!}
@endsection

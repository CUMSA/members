@extends('layouts.panel')

@section('panel-cols', '8')
@section('panel-offset', '2')
@section('panel-heading', 'Fresher Registration')
@section('panel-body')
    @parent

    @if(isset($error))
        <h2 class="form-signin-heading">{{ $error }}</h2>
    @endif

    {!! form($form) !!}

@endsection
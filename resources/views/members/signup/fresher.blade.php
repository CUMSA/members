@extends('layouts.panel')

@section('panel-cols', '8')
@section('panel-offset', '2')
@section('panel-heading', 'Fresher Registration')
@section('panel-body')
    @parent

    @if(isset($error))
        <h2 class="form-signin-heading">{{ $error }}</h2>
    @endif

	@if(Session::has('alert-success'))		
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert">×</a>
			{{ Session::get('alert-success') }}
        </div>
    @endif

	@if(Session::has('alert-warning'))		
        <div class="alert alert-warning">
            <a class="close" data-dismiss="alert">×</a>
			{{ Session::get('alert-warning') }}
        </div>
    @endif

    {!! form($form) !!}

@endsection
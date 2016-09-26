@extends('layouts.panel')
@section('header')
    <style type="text/css">
        .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .btn {
        margin-top: 10px;
        }
        .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
        .success {
            background-color: lightgreen;
        }

        .error {
            background-color: #db7093;
        }

        .warning {
            background-color: yellow;
        }
    </style>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {{ $validator }}
@endsection

@section('panel-body')
    @parent
    @if (session('alert-danger'))
        <div class="alert alert-danger">
            {{ session('alert-danger') }}
        </div>
    @endif
    @if (session('alert-warning'))
        <div class="alert alert-warning">
            {{ session('alert-warning') }}
        </div>
    @endif
    @if (session('alert-success'))
        <div class="alert alert-success">
            {{ session('alert-success') }}
        </div>
    @endif
@endsection

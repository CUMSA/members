@extends('layouts.default')
@section('header')
<style type="text/css">
    body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #eee;
    }

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
</style>

@stop

@section('body')
    <body>
        <div class="container">
            <form method="post" id="scan_attendee" class="form-signin" target="{!! route('event.attendee.post', ['event_id' => $event_id]) !!}">

            @if ($success)
                <h2 class="form-signin-heading">{{ $attendee }} marked present.</h2>
                <h4 class="sub_header">Comments : {{ $comments }}</h4>
            @else
                <h2 class="form-signin-heading">{{ $error }}</h2>
            @endif
                <label for="inputCrsid" class="sr-only">crsid</label>
                <input type="text" id="inputCrsid" name="crsid" class="form-control" placeholder="crsid" required autofocus>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Check in">
            </form>

        </div> <!-- /container -->
    </body>
@stop

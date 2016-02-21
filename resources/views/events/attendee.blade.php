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

<script language="text/javascript">
    function submit() {
        document.getElementById('scan_attendee').target += "/" + document.getElementById('inputCrsid').value;
        return true;
    }
</script>

@stop

@section('body')
    <body>
        <div class="container">
            <form type="post" id="scan_attendee" onsubmit="return submit();" class="form-signin" target="{!! route('event.attendee.scan', ['event_id' => $event_id, 'crsid' => '']) !!}">

            @if ($success)
                <h2 class="form-signin-heading">{{ $attendee }} marked present.</h2>
                <h4 class="sub_header">Comments : {{ $comments }}</h4>
            @else
                <h2 class="form-signin-heading">{{ $error }}</h2>
            @endif
                <label for="inputCrsid" class="sr-only">crsid</label>
                <input type="text" id="inputCrsid" class="form-control" placeholder="crsid" required autofocus>
                <input type="hidden" name="event_id" value="{{ $event_id }}">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Check in</button>
            </form>

        </div> <!-- /container -->
    </body>
@stop

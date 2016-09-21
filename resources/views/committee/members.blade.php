
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="panel panel-default">

            @yield('panel-heading')

            <div class="panel-body">
                <p>
                    @yield('buttons')

                    <style>
                        label {
                            padding-right: 15px;
                        }
                    </style>
                    <!-- TODO: Checkbox to show only current members -->
                </p>
                <div id="hot"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://handsontable.com/static/bower_components/handsontable-pro/dist/handsontable.full.js"></script>
<link href="https://handsontable.com/static/bower_components/handsontable-pro/dist/handsontable.full.css" type="text/css" rel="stylesheet">

@yield('tablescript')

@endsection

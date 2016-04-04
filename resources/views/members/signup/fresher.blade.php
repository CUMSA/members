@extends('layouts.form')

@section('body')
@parent
<body>
    <div class="container">
        @parent

        @if(isset($error))
            <h2 class="form-signin-heading">{{ $error }}</h2>
        @endif

        {!! form($form) !!}
    </div>
</body>
@endsection
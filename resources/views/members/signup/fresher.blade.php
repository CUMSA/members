@extends('layouts.form')

@section('body')
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
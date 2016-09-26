@extends('layouts.panel')
@section('panel-cols', '8')
@section('panel-offset', '2')
@section('panel-heading', 'Signup For InternLink')
@section('panel-body')
    @if(Session::has('alert-warning'))
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">×</a>
            {!! Session::get('alert-warning') !!}
        </div>
    @endif
    {!! form_start($form) !!}
    {!! form_until($form, 'describe_self') !!}

    <div id="internships" class="collection-container" data-prototype="{{ form_row($form->internship->prototype()) }}">
        {{--{!! form_row($form->internship) !!}--}}
    </div>

    <h4><button id="add_internship" class="btn btn-success">Add Internship</button></h4>
    {!! form_row($form->submit) !!}
    {!! form_end($form, false) !!}

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $('#add_internship').on('click', function(e) {
                e.preventDefault();
                var container = $('.collection-container');
                var count = container.children().length;
                var proto = container.data('prototype').replace(/__NAME__/g, count);
                container.append(proto);
            });
            $('.form-control').on('click', function(e) {

                e.preventDefault();
                $('.form-control').trigger('click');
            });
        });
    </script>
@endsection

@extends('layouts.panel')
@section('panel-cols', '10')
@section('panel-offset', '1')
@section('panel-heading', 'InternLink')
@section('panel-body')
    <h3>Search results</h3>
    <table id="results">
        <tr>
            <th>Name</th>
            <th>Internship Role</th>
            <th>Company Name</th>
            <th>Location</th>
        </tr>
        @foreach($internships as $internship)
                <tr class="clickable-row" data-href="{!! route('internlink.internship', $internship->id) !!}">
                    <td>{!! $internship->link->member->full_name !!}</td>
                    <td>{!! $internship->role_name !!}</td>
                    <td>{!! $internship->company_name !!}</td>
                    <td>{!! $internship->location !!}</td>
                </tr>
            </a>
        @endforeach
    </table>
    <style>
        #results {
            background-color: #e7f5fe;
        }
        .clickable-row:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }
        th, td {
            text-align: left;
            padding: 8px;
            width: 300px;
            border: 1px solid white;
            border-radius: 7px;
        }
        th {
            background-color: #94b8b8;
            color: white;
        }
    </style>

    <script>
        $(document).ready(function() {
            $(".clickable-row").click(function() {
                window.document.location = $(this).data("href");
            });
            $(".clickable-row").hover(function() {
                $(this).toggleClass('hover');
            });
        });
    </script>
@endsection
@extends('layouts.panel')
@section('panel-cols', '10')
@section('panel-offset', '1')
@section('panel-heading', 'Internship Profile')
@section('panel-body')
    <table id="profile">
        <tr>
            <td id="col1">Name</td>
            <td id="col2">{!! $member_details['name'] !!}</td>
        </tr>
        @if(isset($member_details['mobile_uk']))
            <tr>
                <td id="col1">UK Mobile</td>
                <td id="col2">{!! $member_details['mobile_uk'] !!}</td>
            </tr>
        @endif

        @if(isset($member_details['mobile_home']))
            <tr>
                <td id="col1">UK Mobile</td>
                <td id="col2">{!! $member_details['mobile_home'] !!}</td>
            </tr>
        @endif

        @if(isset($member_details['email_hermes']))
            <tr>
                <td id="col1">UK Mobile</td>
                <td id="col2">{!! $member_details['email_hermes'] !!}</td>
            </tr>
        @endif

        @if(isset($member_details['email_other']))
            <tr>
                <td id="col1">UK Mobile</td>
                <td id="col2">{!! $member_details['email_other'] !!}</td>
            </tr>
        @endif

        <tr>
            <td id="col1">Role</td>
            <td id="col2">{!! $internship->role_name !!}</td>
        </tr>

        <tr>
            <td id="col1">Company</td>
            <td id="col2">{!! $internship->company_name !!}</td>
        </tr>
        <tr>
            <td id="col1">Location</td>
            <td id="col2">{!! $internship->location !!}</td>
        </tr>
        <tr>
            <td id="col1">Start Date</td>
            <td id="col2">{{ date('F Y', strtotime($internship->start_date)) }}</td>
        </tr>
        <tr>
            <td id="col1">End Date</td>
            <td id="col2">{{ date('F Y', strtotime($internship->start_date)) }}</td>
        </tr>
        <tr>
            <td id="col1">Description</td>
            <td id="col2">{!! $internship->description !!}</td>
        </tr>
    </table>

    <style>
        td {
            border-radius: 7px;
            text-align: left;
            padding: 8px;
            border: 1px solid white;
        }
        #col1 {
            background-color: #94b8b8;
            color: white;
            width:200px;
        }
        #col2 {
            background-color: #e7f5fe;
            width: 700px;
        }
        #profile {
        }

    </style>
@endsection
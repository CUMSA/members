
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Committee Members Dashboard</div>

                <div class="panel-body">
                    {!! form($form) !!}
                    <p>
                        <br>
                        <button id='export' class='btn btn-success'>Export as CSV</button>
                        <!-- TODO: Chose columns to show/hide -->
                        <!-- TODO: Checkbox to show only current members -->
                    </p>
                    <div id="hot"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://handsontable.com/static/bower_components/handsontable-pro/dist/handsontable.full.js"></script>
    <link href="https://handsontable.com/static/bower_components/handsontable-pro/dist/handsontable.full.css" type="text/css" rel="stylesheet">
    {{ $colspan = 5 }}

    <script>
        var dataObj = {!! $membersJson !!};
        var cols = new Array();
        var nestedCols = new Array();
        var headers = new Array();

        @if (Input::all() == null || in_array('crsid', Input::get('Columns')))

            cols = cols.concat([
                { data: "crsid"}
            ]);

            nestedCols.push("");

            headers.push("CRSid");

        @endif

        @if (Input::all() == null || in_array('Bio', Input::get('Columns')))

            cols = cols.concat([
                { data: "full_name" },
                { data: "first_name" },
                { data: "last_name" },
                { data: "gender" },
                { data: "date_of_birth", type: "date", dateFormat: "YYYY-MM-DD" },
            ]);

            nestedCols.push({label: "Bio", colspan: 5});

            headers = headers.concat([
                "Name",
                "First",
                "Last",
                "Gender",
                "Date of Birth",
            ]);

        @endif

        @if (Input::all() == null || in_array('Nationality', Input::get('Columns')))

            cols = cols.concat([
                { data: "nationality" },
                { data: "is_singapore_pr", type: "checkbox", "checkedTemplate": "1", "uncheckedTemplate": "0" },
                { data: "nric" },
            ]);

            nestedCols.push({label: "Nationality", colspan: 3})

            headers = headers.concat([
                "Nationality",
                "SG PR?",
                "NRIC",
            ]);

        @endif

        @if (Input::all() == null || in_array('College', Input::get('Columns')))

            cols = cols.concat([
                { data: "college_name" },
            ]);

            nestedCols.push("");

            headers = headers.concat([
                "College",
            ]);

        @endif

        @if (Input::all() == null || in_array('Course', Input::get('Columns')))

            cols = cols.concat([
                { data: "course_name" },
                { data: "scholarship_name" },
                { data: "previous_school" },
                { data: "release_info", type: "checkbox", "checkedTemplate": "1", "uncheckedTemplate": "0" },
            ]);

            nestedCols.push({label: "Course/Scholarship/Prev School", colspan: 4});

            headers = headers.concat([
                "Course",
                "Scholarship",
                "Previous School",
                "Release Info",
            ]);

        @endif

        @if (Input::all() == null || in_array('Email', Input::get('Columns')))

            cols = cols.concat([
                { data: "email_hermes" },
                { data: "email_other" },
            ]);

            nestedCols.push({label: "Email", colspan: 2});

            headers = headers.concat([
                "Hermes",
                "External Email",
            ]);

        @endif

        @if (Input::all() == null || in_array('Contact', Input::get('Columns')))

            cols = cols.concat([
                { data: "mobile_uk" },
                { data: "mobile_home" },
            ]);

            nestedCols.push({label: "Contact", colspan: 2});

            headers = headers.concat([
                "UK Contact",
                "Home Contact",
            ]);

        @endif

        @if (Input::all() == null || in_array('Address', Input::get('Columns')))

            cols = cols.concat([
                { data: "address_uk" },
                { data: "address_home" },
            ]);

            nestedCols.push({label: "Address", colspan: 2});

            headers = headers.concat([
                "UK Address",
                "Home Address",
            ]);

        @endif

        @if (Input::all() == null || in_array('Remarks', Input::get('Columns')))

            cols = cols.concat([
                { data: "remarks" },
            ]);

            nestedCols.push("");

            headers = headers.concat([
               "Remarks",
            ]);

        @endif

            $(document).ready(function() {
            $('#hot').handsontable({
                data: dataObj, // see the Data tab
                columns: cols,
                nestedHeaders: [nestedCols, headers],
                stretchH: "all",
                autoWrapRow: true,
                rowHeaders: true,
                readOnly: true,
                columnSorting: true,
                sortIndicator: true,
                autoColumnSize: {
                    "samplingRatio": 23
                },
                manualRowResize: true,
                manualColumnResize: true,
                manualRowMove: true,
                manualColumnMove: true,
                contextMenu: false,
                collapsibleColumns: true,
                hiddenColumns: true,
                dropdownMenu: ['filter_by_value', 'filter_by_condition', 'filter_action_bar'],
                filters: true,
            });
            setTimeout(function() {
                var inst = $('#hot').handsontable('getInstance');
                inst.getPlugin('collapsibleColumns').collapseAll();
                $('#export').click(function() {
                    inst.getPlugin('exportFile').downloadFile('csv', {
                        filename: 'members-filtered'
                    });
                });
                $('#refresh').click(function(){
                    location.reload()
                });
            }, 500);
        });
    </script>
@endsection

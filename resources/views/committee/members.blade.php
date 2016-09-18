
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Committee Members Dashboard</div>

            <div class="panel-body">
                <p>
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
<script>
    $(document).ready(function() {
        var dataObj = {!! $membersJson !!};
        $('#hot').handsontable({
            data: dataObj, // see the Data tab
            columns: [
                { data: "crsid" },

                { data: "full_name" },
                { data: "first_name" },
                { data: "last_name" },
                { data: "gender" },
                { data: "date_of_birth", type: "date", dateFormat: "YYYY-MM-DD" },

                { data: "nationality" },
                { data: "is_singapore_pr", type: "checkbox", "checkedTemplate": "1", "uncheckedTemplate": "0" },
                { data: "nric" },

                { data: "college_name" },

                { data: "course_name" },
                { data: "scholarship_name" },
                { data: "previous_school" },
                { data: "release_info", type: "checkbox", "checkedTemplate": "1", "uncheckedTemplate": "0" },

                { data: "email_hermes" },
                { data: "email_other" },

                { data: "mobile_uk" },
                { data: "mobile_home" },

                { data: "address_uk" },
                { data: "address_home" },

                { data: "remarks" },
            ],
            nestedHeaders: [
                ["", {label: "Bio", colspan: 5}, {label: "Nationality", colspan: 3},
                 "",  {label: "Course/Scholarship/Prev School", colspan: 4},
                 {label: "Email", colspan: 2}, {label: "Contact", colspan: 2}, {label: "Address", colspan: 2}],
                [
                    "CRSid",
                    "Name",
                    "First",
                    "Last",
                    "Gender",
                    "Date of Birth",
                    "Nationality",
                    "SG PR?",
                    "NRIC",
                    "College",
                    "Course",
                    "Scholarship",
                    "Previous School",
                    "Release Info",
                    "Hermes",
                    "External Email",
                    "UK Contact",
                    "Home Contact",
                    "UK Address",
                    "Home Address",
                    "Remarks",
                ]
            ],
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
        }, 500);
    });
</script>
@endsection

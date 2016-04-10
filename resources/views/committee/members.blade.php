
@extends('layouts.default')

@section('body')
<body>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/handsontable/0.24.1/handsontable.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/handsontable/0.24.1/handsontable.css">
--><script src="https://handsontable.com/static/bower_components/handsontable-pro/dist/handsontable.full.js"></script>
<link href="https://handsontable.com/static/bower_components/handsontable-pro/dist/handsontable.full.css" type="text/css" rel="stylesheet">
<div id="hot"></div>
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

                { data: "address_home" },
                { data: "address_uk" },
            ],
            stretchH: "all",
            autoWrapRow: true,
            rowHeaders: true,
            readOnly: true,
            nestedHeaders: [
                ["CRSid", {label: "Bio", colspan: 5}, {label: "Nationality", colspan: 3},
                 "College",  {label: "Course/Scholarship/Prev School", colspan: 4},
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
                    "Hermes Email",
                    "External Email",
                    "Contact (UK)",
                    "Contact (Home)",
                    "Address (UK)",
                    "Address (Home)",
                ]
            ],
            columnSorting: true,
            sortIndicator: true,
            autoColumnSize: {
                "samplingRatio": 23
            },
            manualRowResize: true,
            manualColumnResize: true,
            manualRowMove: true,
            manualColumnMove: true,
            contextMenu: true,
            collapsibleColumns: true,
            hiddenColumns: true,
            dropdownMenu: true,
            filters: true,
        });
        setTimeout(function() {
            $('#hot').handsontable('getInstance').getPlugin('collapsibleColumns').collapseAll();
        }, 1000);
    });
</script>
</body>
@endsection

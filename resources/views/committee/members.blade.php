
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Committee Members Dashboard</div>

            <div class="panel-body">
                <p>
                    <b><u>Columns</u></b><br>
                    <div id="columnControls">
                        <input type="checkbox" name="crsid" checked="checked"><span style="margin-right:1em"> CRSid</span>
                        <input type="checkbox" name="bio" checked="checked"><span style="margin-right:1em"> Bio</span>
                        <input type="checkbox" name="nationality" checked="checked"><span style="margin-right:1em"> Nationality</span>
                        <input type="checkbox" name="college" checked="checked"><span style="margin-right:1em"> College</span>
                        <input type="checkbox" name="course" checked="checked"><span style="margin-right:1em"> Course/Scholarship/Previous School</span>
                        <input type="checkbox" name="email" checked="checked"><span style="margin-right:1em"> Email</span>
                        <input type="checkbox" name="contact" checked="checked"><span style="margin-right:1em"> Contact</span>
                        <input type="checkbox" name="address" checked="checked"><span style="margin-right:1em"> Address</span>
                        <input type="checkbox" name="remarks" checked="checked"><span style="margin-right:1em"> Remarks</span>
                    </div>
                    <br>
                    <button id='export' class='btn btn-success'>Export as CSV</button>
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
            preventOverflow: "horizontal",
        });

        var inst = $('#hot').handsontable('getInstance');
        setTimeout(function() {
            inst.getPlugin('collapsibleColumns').collapseAll();
            $('#export').click(function() {
                inst.getPlugin('exportFile').downloadFile('csv', {
                    filename: 'members-filtered'
                });
            });
        }, 500);

        var colIndexes = {
            "crsid"         : [0],
            "bio"           : [1, 2, 3, 4, 5],
            "nationality"   : [6, 7, 8],
            "college"       : [9],
            "course"        : [10, 11, 12, 13],
            "email"         : [14, 15],
            "contact"       : [16, 17],
            "address"       : [18, 19],
            "remarks"       : [20]
        }

        $('#columnControls').find('[type=checkbox]').change(function() {
            if($(this).prop('checked'))
            {
                inst.getPlugin('hiddenColumns').showColumns(colIndexes[$(this).prop('name')]);
            }
            else
            {
                inst.getPlugin('hiddenColumns').hideColumns(colIndexes[$(this).prop('name')]);
            }
            inst.render();
        });
    });
</script>
@endsection

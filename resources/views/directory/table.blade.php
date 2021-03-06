@extends('committee.members')
@section('panel-heading')
    <div class="panel-heading">Members Directory</div>
@endsection

@section('tablescript')
    <script>
        $(document).ready(function() {
            var dataObj = {!! $membersJson !!};
            $('#hot').handsontable({
                data: dataObj, // see the Data tab
                columns: [
                    { data: "full_name" },
                    { data: "gender" },
                    { data: "college_name" },
                    { data: "course_name" },
                    { data: "start_year"},
                    { data: "end_year"},
                ],
                nestedHeaders: [
                    [
                        "Name",
                        "Gender",
                        "College",
                        "Course",
                        "Start Year",
                        "End Year",
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
                width: 1140,
                height: 500,
            });

            var inst = $('#hot').handsontable('getInstance');
            setTimeout(function() {
                inst.getPlugin('collapsibleColumns').collapseAll();
            }, 500);

            var colIndexes = {
                "name"      : [0],
                "gender"    : [1],
                "college"   : [2],
                "course"    : [3],
                "startYr"   : [4],
                "endYr"     : [5],
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
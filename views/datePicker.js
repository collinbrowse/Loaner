// Date Picker JS taken from tutorial at formden.com
// Link: https://formden.com/blog/date-picker

$(document).ready(function() {
    var date_input=$('input[name="date"]'); //date input has the name "date"
    var date_input1=$('input[name="date1"]'); //date input has the name "date"
    date_input.datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
    })
    date_input1.datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
    })
});
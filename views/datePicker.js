// Date Picker JS taken from tutorial at formden.com
// Link: https://formden.com/blog/date-picker

$(document).ready(function() {
    var date_input=$('input[name="date"]'); //date input has the name "date"
    date_input.datepicker({
        format: 'mm/dd/yyyy',
        todayHighlight: true,
        autoclose: true,
    })
});
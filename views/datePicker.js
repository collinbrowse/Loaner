// Date Picker JS taken from tutorial at formden.com
// Link: https://formden.com/blog/date-picker

$(document).ready(function() {
    var date_input=$('input[name="start_rental"]'); //date input has the name "date"
    var date_input1=$('input[name="end_rental"]'); 
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
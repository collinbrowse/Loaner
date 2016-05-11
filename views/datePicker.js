// Date Picker JS taken from tutorial at formden.com
// Link: https://formden.com/blog/date-picker

// Add a datepicker box to the rental search bar as well as the add a car option in owner
$(document).ready(function() {
    var date_input=$('input[name="start_rental"]'); 
    var date_input1=$('input[name="end_rental"]'); 
    date_input.datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        orientation: "top"
    })
    date_input1.datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        orientation: "top"
    })
});
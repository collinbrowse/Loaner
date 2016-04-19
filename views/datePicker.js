// Date Picker JS taken from tutorial at formden.com
// Link: https://formden.com/blog/date-picker

$(document).ready(function() {
  var date_input=$('input[name="date"]'); //date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })
});
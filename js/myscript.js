$(document).ready(function () {
   $("form").validate();
   $("#departuredate").datepicker({
      changeYear: true,
      changeMonth: true,
      dateFormat: "dd-mm-yy",
      minDate:0
   });
});
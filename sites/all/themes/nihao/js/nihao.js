$(document).ready(function(){
  $("#edit-submitted-begintime" ).datepicker({
   dateFormat: "yy-mm-dd",
   changeMonth: true,
   changeYear: true,
  });
 $("#edit-submitted-begintime").focus(function(){
 $(this).blur();
  });
})
$(document).ready(function(){
  $("#edit-submitted-endtime" ).datepicker({
   dateFormat: "yy-mm-dd",
   changeMonth: true,
   changeYear: true,
  });
 $("#edit-submitted-endtime").focus(function(){
 $(this).blur();
  });
});
$(document).ready(function(){
   $("#webform-client-form-29").attr("action","http://www.chine-evasion.com:8080/lrcrm/order.handle");
   $("#webform-client-form-30").attr("action","http://www.chine-evasion.com:8080/lrcrm/order.handle");
   $("#webform-client-form-31").attr("action","http://www.chine-evasion.com:8080/lrcrm/order.handle");
   $("#webform-client-form-32").attr("action","http://www.chine-evasion.com:8080/lrcrm/order.handle");
});
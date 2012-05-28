$(document).ready(function(){

  $('#edit-title').datepicker({
	changeMonth: true,
	changeYear: true,
	showOn: 'both', buttonImage: '/drupal-6.16/sites/all/themes/simple/images/calendar.gif', buttonImageOnly: true,
    buttonText: 'Choose a date'
  });

  $("#edit-title").focus(function(){
	$(this).blur();
  });

});
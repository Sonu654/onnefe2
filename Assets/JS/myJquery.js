$(document).ready(function(){
	$('#regButton').click(function(){
		$('#register').show();
		$('#login').hide();
		return false;
	});

	$('#logButton').click(function(){
		$('#register').hide();
		$('#login').show();
		return false;
	});

	
});
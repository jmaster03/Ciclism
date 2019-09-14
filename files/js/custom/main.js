



$('#login').show();
$('#register').hide();


$(document).on('click', '#regBtn', function() {
	$('#login').hide();
	$('#register').show();
});

$(document).on('click', '#logBtn', function() {
    	$('#register').hide();
	$('#login').show();

});



$('input[type=radio][name=acaExpulsion]').change(function() {
	if (this.value == 'Aca_respondYes') {
		$('#inputRespondYes').show();
	} else if (this.value == 'Aca_respondNo') {
		$('#inputRespondYes').hide();
	}
});
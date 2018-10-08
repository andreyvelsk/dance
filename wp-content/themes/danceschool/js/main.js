$(document).ready(function () {

	//антиспам-галочка set unchecked
	jQuery('.agree').prop('checked', false);


	//-------------------------------------
	//Яндекс - метрика
	//-------------------------------------
	document.addEventListener( 'wpcf7mailsent', function( event ) {
			if ( '33' == event.detail.contactFormId ) {
				yaCounter50556952.reachGoal('otpravka_formy');
			}

			if ( '34' == event.detail.contactFormId ) {
				yaCounter50556952.reachGoal('zvonok');
			}
		}, false );

	$('#call').click(function(){
		yaCounter50556952.reachGoal('Click_telefon');
	});

	//-----------------------------
	//end of Яндекс - метрика
	//-----------------------------
});
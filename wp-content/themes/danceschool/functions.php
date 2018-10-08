<?php 
 function dance_style() {  

 	wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_uri());
}

function dance_script() {
	// необходимо разрегистрировать jquery  от wordpress  и подключить CDN
	wp_deregister_script( 'jquery-core' ); 
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('bootstrapjs', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts','dance_style' );
add_action('wp_enqueue_scripts', 'dance_script');


//метрика
function metrica_script() {

   wp_add_inline_script( 'jquery-migrate', "
		
		document.addEventListener( 'wpcf7submit', function( event ) {
			if ( '33' == event.detail.contactFormId ) {
				yaCounter50562052.reachGoal('FRONTSEND');
			}

			if ( '34' == event.detail.contactFormId ) {
				yaCounter50562052.reachGoal('call');
			}
		}, false );

		function test(){
		    alert( 'Спасибо' );
		};


		$( \"#calllink\" ).click(function() {
  alert( \"called.\" );
});
   	" );
}

//add_action( 'wp_enqueue_scripts', 'metrica_script' );


?>
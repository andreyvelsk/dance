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
}

add_action('wp_enqueue_scripts','dance_style' );
add_action('wp_enqueue_scripts', 'dance_script');

?>
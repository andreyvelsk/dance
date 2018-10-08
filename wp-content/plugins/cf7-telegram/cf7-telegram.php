<?php
/*
Plugin Name: Contact Form 7 + Telegram
Description: Paste the <code>[telegram]</code>-shortcode to your Contact Forms for sending messages
Author: Hokku
Version: 0.1
*/

require ( __DIR__ . '/inc/class-wpcf7telegram.php' );
$wpcf7_telegram = new wpcf7_Telegram;
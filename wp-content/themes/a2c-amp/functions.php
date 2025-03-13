<?php

define( 'A_THEME_ROOT', get_template_directory_uri());
define( 'A_IMG_DIR', A_THEME_ROOT .'/images');

add_action( 'wp_enqueue_script' , 'theme_add_scripts');
function theme_add_scripts() {
	wp_enqueue_script ('style-css', get_template_directory_uri().'/css/production.min.css');
}
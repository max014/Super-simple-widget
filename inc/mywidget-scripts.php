<?php
// Add scripts
function mw_add_scripts(){
	// Add main CSS
	wp_enqueue_style('mw-main-style', plugins_url().'/mywidget/css/style.css');
	// Add main js
	wp_enqueue_script('mw-main-script', plugins_url().'/mywidget/js/main.js');
}

add_action('wp_enqueue_scripts', mw_add_scripts());
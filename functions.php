<?php

// Path and URL constant
define('dwp_theme_dir', get_stylesheet_directory_uri());
define('site_url', site_url());

// Add Themes Support
add_theme_support('menus');
add_theme_support('post-thumbnails');

$custom_header = array(
		'width' => 2992,
		'height' => 2000,
		'default-image' => dwp_theme_dir . '/assets/img/dwp.jpg',
		'header-text' => false
	);

add_theme_support('custom-header', $custom_header);
<?php

// Utilities

include('configure/utilities.php');

// CONFIG

include('configure/configure.php');

// JAVASCRIPT & CSS

include('configure/js-css.php');

// SHORTCODES

include('configure/shortcodes.php');

// ACF

include('configure/acf.php');

// HOOKS ADMIN

if (is_admin()) {
	include('configure/admin.php');
}

add_theme_support('custom-logo');
function fs_get_wp_config_path()
{
	$base = dirname(__FILE__);
	$path = false;

	if (@file_exists(dirname(dirname($base)) . "/wp-config.php")) {
		$path = dirname(dirname($base)) . "/wp-config.php";
	} else
    if (@file_exists(dirname(dirname(dirname($base))) . "/wp-config.php")) {
		$path = dirname(dirname(dirname($base))) . "/wp-config.php";
	} else
		$path = false;

	if ($path != false) {
		$path = str_replace("\\", "/", $path);
	}
	return $path;
}


//Get data function
function custom_get_data($url)
{
	$request = wp_remote_get($url);
	if (is_wp_error($request)) {
		return false;
	}
	$body = wp_remote_retrieve_body($request);
	$data = json_decode($body, true);

	return $data;
}

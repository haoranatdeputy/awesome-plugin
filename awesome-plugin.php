<?php
/*
 * Plugin Name: Haoran's Awesome Plugin
 * Plugin URI: https://www.github.com/....
 * Description: Demos a Wordpress Plugin
 * Version: 0.1
 * Author: Haoran Un
 */

// Demo filter: reverses the Title.
add_filter('wp_title', function ($title, $id = 0) {
	return strrev($title);
}, 99, 2);
<?php
	/* 
		Plugin Name: Chapter 2 - Generator Filter
		Plugin	URI:	
		Description: generate meta data for the plugin author.
		Version: 1.0 
		Author: Tyquan Reddick 
		Author URI:	http://tyquanreddick.us
		License: GPLv2 
	*/

// add_filter('hook_name', 'your_function_name', [priority], [accepted_args]);

add_filter('the_generator', 'generator_filter', 10, 2);

function generator_filter ($html, $type) {
	if ($type == 'xhtml') {
		$html = preg_replace('("WordPress.*?")', '"Tyquan Reddick"', $html);
	}
	return $html;
}
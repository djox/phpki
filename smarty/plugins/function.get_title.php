<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.get_title.php
 * Type:     function
 * Name:     get_title
 * Purpose:  gets the title of the web page
 * -------------------------------------------------------------
 */
function smarty_function_get_title($params, $smarty) {
	global $config;
	$title = ($config['header_title']?$config['header_title']:'PHPki Certificate Authority');
	return $title;
}
?>
<?php

spl_autoload_register( 'myAutoLoader' );

function myAutoLoader( $class_name ) {
	$path = 'classes/';
	$extension = '.php';
	$prefix = 'class-';
	$full_path = $path . $prefix . $class_name . $extension;

	/*
	 * cleans up errors
	 * check to see if the file exists
	 * if not, just skip the include so you only
	 * get the no class error instead of giving
	 * you the missing linked file too.
	 */

	if (!file_exists($full_path)) {
		return false;
	}

	include_once $full_path;
}

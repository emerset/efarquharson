<?php 
// Include Configuration
require_once('config/config.php');

// Helper Function Files

/*
 * Create any classes you want in libraries,
 * as long as the file name matches class name,
 * it will be automatically required.
 */
// Autoload Classes
function __autoload($class_name) {
	require_once('libraries/'.$class_name.'.php');
}

<?php

require('core/init.php'); 

// check for project id
if (!isset($_GET['id'])) {
	//Redirect
	header ('Location: '. BASE_URI);
	exit;
}

include 'templates/project.php';?>

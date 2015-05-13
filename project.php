<?php require('core/init.php') ?> 

<?
// check for project id
if (!isset($_GET['id'])) {
	//Redirect
	header ('Location: '. BASE_URI);
	exit;
}
?>

<?php
// Assign local vars
$home = '';
$about = '';
$contact = '';
?>

<?php include 'templates/project.php';?>

<?php require('core/init.php'); ?>

<?php
$validate = new Validator();

$errors = array();
$success = false;

// Check for submitted form
if (isset($_POST['submit'])) {
	// Validate data
	if(isset($_POST['email'])) {
		if(isset($_POST['message'])) {
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				// Assign email variables
				$to = "emerset@gmail.com";
				$subject = (isset($_POST['name'])) ? $_POST['name'] : "No Subject";
				$message = $_POST['message'];
				$header = "From: ".$_POST['email'];
				// Send mail
				$send = mail($to, $subject, $message, $header);
				if ($send) {
					$success = "Your message has been sent. I will reply as soon as possible.";
					$_POST = array();
				} else {
					array_push($errors, "There was a problem sending your email. Please try again.");
				}
			} else { // email invalid
				array_push($errors, "Invalid email address");
			}
		} else { // message not added
			array_push($errors, "Please add a message");
		}
	} else { // email not added
		array_push($errors, "Please add an email so I can reply");
	}
}
?>

<?php
// Assign local vars
$home = '';
$about = '';
$contact = ' class="active"';
?>

<?php include 'templates/contact.php';?>

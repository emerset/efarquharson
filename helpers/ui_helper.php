<?php
/*
 * Select Active Label
 */
function selectLabel($current_label, $get_label){
	if (!isset($get_label)){
		return 'label-option';
	}
	if ($current_label == $get_label){
		return 'label-select';
	} else {
		return 'label-option';
	}
}

function displayMessages($errors, $success){
	if($success){
		echo '<div class="alert alert-success">' . $success . '</div>';
	}
	
	foreach ($errors as $error){
		echo '<div class="alert alert-danger">' . $error . '</div>';
	}
}

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

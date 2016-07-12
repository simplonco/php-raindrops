<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function raindrops($number) {

	$output = '';

	if ($number % 3 === 0) {
		$output .= 'Pling';
	}

	if ($number % 5 === 0) {
		$output .= 'Plang';
	}

	if ($number % 7 === 0) {
		$output .= 'Plong';
	}

	if (empty($output)) {
		$output = "$number";
	}

	return $output;
}

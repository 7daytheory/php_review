<?php

	// CONDITIONALS

	/*
		==
		===

		< 
		>
		<=
		>=
		!=
		!==
	*/

	$num = 5;

	if($num === 5) {
		echo "5 passed<br>";
	} else {
		echo "Does not equal";
	}

	$stringNum = "5";
	if($num == 5) {
		echo "5 passed<br>";
	} else {
		echo "5 did not pass";
	}

	$number = 6;

	if($number != 5) {
		echo "5 passed<br>";
	} else {
		echo "Did not pass";
	}

	$num2 = 5;

	if($num2 > 4) {
		if($num2 < 10) {
			echo "$num2 passed!<br>";
		}
	}

	/* Logical Operators

	and && - both are true
	or ||	- either or is true, or one of them is true
	xor - ONE is true, but not both

	*/

	if($num2 > 4 && $num2 < 10) {
		echo "$num2 passed!<br>";
	}

	if($num2 > 12 OR $num2 < 4) {
		echo "$num2 OR passed<br>";
	}

	if ($num2 > 15 XOR $num2 === 1 ) {
		echo "$num2 XOR passed!";
	}
	echo "<br><br>";
	//Switch
	$favColor = 'red';

	switch($favColor) {
		case 'red': 
			echo 'Your favourite color is red';
		break;
		case 'green': 
			echo 'Your favourite color is green';
		break;
		case 'blue': 
			echo 'Your favourite color is blue';
		break;
		case 'yellow': 
			echo 'Your favourite color is yellow';
		break;
		default: 
			echo 'Your favourite color is something else';
	}
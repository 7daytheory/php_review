<?php
	//Comments Example Single Line
	# Single Line Comment
	/*
	Multi line Comment
	*/

	$output = "Hello World!";
	echo $output;

?>

<h1>Variables</h1>

<?php
	
	/********** Variables *********
	 * Prefix $ (ugh)
	 * Can only start with a letter or underscore
	 * Only letters, numbers or underscores in var name
	 */

	#Data Types
		/* 
		String
		Integers
		floats
		booleans
		Arrays
		Objects
		NULL
		Resource
		*/
	$_num1 = 1;
	$_num2 = 4;
	$sum = $_num1 + $_num2;

	$string1 = 'Hello';
	$string2 = 'World';
	$concat = $string1 . ' ' . $string2; // Concatenation

	$float1 = 4.4;
	$bool1 = true;

	echo $sum;
?>


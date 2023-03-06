<?php
/********** Arrays ************/
	//variable that holds multiple values(kill me its still so simple)

	/* Types of arrays
		- Indexed
		- Associative
		- Multi-dimensional
	*/

	//Indexed Arrays

		$people = array('Matt', 'Erin', 'Glenn', 'Michele'); //Create with array function
		//echo $people[0]; // Matt

	$ids = [1, 2, 3, 4]; //Create with Brackets

	$ids[4] = 5; //Adds 5 to position 4(the end)

	$ids[] = 6; // Adds to last position

	//Some important array functions
	count($ids); //Counts number of items in array
	print_r($ids); //echo for arrays basically
	var_dump($ids); //print_r with more data like data type

	


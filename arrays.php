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
		// count($ids); //Counts number of items in array
		// print_r($ids); //echo for arrays basically
		// var_dump($ids); //print_r with more data like data type

	//Associative arrays (Define keys and value)
	$people2 = array('Matt' => 31, 'Erin' => 34, 'Glenn' => 62, 'Michele' => 59);
	echo $people2['Matt']; //31
	$ids2 = [31 => 'Matt', 34 => 'Erin', 62 => 'Glenn', 59 => 'Michele'];
	echo $ids2[31];

	$people2['Jill' => 45]; //Add the same way as indexed arrays basically
		count($ids2);
		print_r($ids2);
		var_dump($ids2);

	


<?php
	//Loops - Executing codes a set number of times(basically)

	/* Loop types
		For
		While
		Do..While
		Foreach
	*/

	# For Loop
	#Params - init, condition, increments

		 //Will echo out 0 - 9 bc once it hits 10 it is no longer less than 10 (ugh I KNOW)
		for($i = 0;$i < 10; $i++) {
			echo 'Number : ' . $i . '<br>';
		}

	#While Loop
	#Params - Condition
		//Used generally if you don't know the set number times it will run
	$i2 = 0;
	while($i < 10) {
		echo "While Number : " . $i2 . '<br>';
		$i2++;
	}
	
	#Do..While Loop
	#Params - Condition
		//Will ALWAYS run at least once

	$i3 = 0;
	do {
		echo $i3;
		echo '<br>';
		$i++;
	}

	while($i3 < 10);

	#ForEach loop - Made to work with ARRAYS
	
	//Indexed Array
	// $people = array('Matt', 'Erin', 'Glenn', 'Michele');

	// //Generally (Plural as Singular)
	// foreach($people as $person) {
	// 	echo $person . '<br>';
	//}

	//Associative Array
	$people = array('Matt' => 'Matt@gmail.com', 'Erin' => 'Erin@gmail.com', 'Glenn' => 'Glenn@gmail.com', 'Michele' => 'Michele@gmail.com');

	//Generally (Plural as Singular => variable name)
	foreach($people as $person => $email) {
		echo $person . ' : ' . $email;
		echo '<br>';
	}
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
		for($i = 0;$i < 10; i++) {
			echo 'Number : ' . $i . '<br>';
		}

	#While Loop
	#Params - Condition
		//Used generally if you don't know the set number times it will run
	$i = 0;
	while($i < 10) {
		echo "While Number : " . $i . '<br>';
		i++;
	}
	
	#Do..While Loop
	#Params - Condition
	
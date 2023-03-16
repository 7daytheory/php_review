<?php

 //Functions commonly used with arrays
 $fruits = ['apple', 'orange', 'pear'];

 //Get length
 echo count($fruits) . '<br>'; // Get number of objects in array

 //Search Array
 var_dump(in_array('apple', $fruits)); //Gets boolean value of true(since apple is in array)
 echo "<br>";

 //Adding items to array
 $fruits[] = 'grape'; // Automatically adds to end of array

 array_push($fruits, 'blueberry', 'strawberry'); //Adds items to end of array
 array_unshift($fruits, 'mango'); // Adds to beginning of array

 //Remove from array
 array_pop($fruits); // Removes item from end of array
array_shift($fruits); // Removes item from start of array
 // unset($fruits[0]); Obviously removes the first item since the [0] - [1] would remove second item

 // Split into 2 chunks
 $chunked_array = array_chunk($fruits, 2); // Splits array in 2 (can use any number)

 print_r($chunked_array);

echo "<br><h3>Array List</h3>";
 print_r($fruits);

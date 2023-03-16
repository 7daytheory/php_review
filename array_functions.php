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

 echo "<br><br><h2>Combining/Merging Arrays</h2>";

 //Merging arrays
 $arr1 = [1,2,3];
 $arr2 = [4,5,6];

 $arr3 = array_merge($arr1, $arr2); // Merges arr1 and arr2

 $arr_3 = [...$arr1, ...$arr2]; // Using spread operator to merge
 
 print_r($arr3);
 print_r($arr_3);

 echo "<br><br><h3>Use array as keys when merging another array</h3>";

 $a = ["Green", "Red", "Blue"];
 $b = ["Unripe Banana", "Apple", "Blueberry"];

 $c = array_combine($a, $b); // Merges array, uses $a as keys to $b
 print_r($c);

 $keys = array_keys($c);
 print_r($keys); // Show all the keys in the array ($a values in this isntance)

 $flipped = array_flip($c); //Flips keys/values ($b keys to $a);
 print_r($flipped);

 $numbers = range(1,20); //Creates array to range from 1 -> 20 (1,2,3 ... 18, 19, 20)
 print_r($numbers);


 

<?php

$string = "Anything";

//Get length of string
echo strlen($string) . '<br>';

//Find the position of the first occurence of a substring in a string
echo strpos($string, 't') . '<br>'; //Checks for first occurence of t in string

//Find the position of the last occurent of substring in a string
echo strrpos($string, 'n') . '<br>'; //Checks for last n

//Reverse the string(no idea why you'd want to do that)
echo strrev($string) . '<br>';

//Convert string to lowercase
echo strtolower($string) . '<br>';

//Convert string to uppercase
echo strtoupper($string) . '<br>';

// Uppercase the first character of the string(useful - never really used)
echo ucwords($string) . '<br>';

// String replace
echo str_replace('Nothing', 'Anything', $string) . '<br>';

//Return the portion of the string specified by the offset of length
echo substr($string, 0, 5) . '<br>'; //Would display chars 0-5 (Anyth)
echo substr($string, 5) . '<br>'; // Start at 5 and displays the rest (ing)

//Starts with
    if(str_starts_with($string, 'Any')) {
        echo "Yes <br>";
    }

//Ends with
    if(str_ends_with($string, 'ing')) {
        echo "Yes <br>";
    }

<?php

	//Functions
	
		/* 
		Naming Conventions:

		CamelCase - myFunction()
		lowercase - my_function()
		PascalCase - MyFunction() - usually used for classes
		*/

	//Define the function
	function simpleFunction() {
		echo "Holy crap this is still so basic";
	}

	//Call/Run the function
	simpleFunction();

	//Pass Params to function
	function sayHello($name){
		echo "Hello $name";
	}

	sayHello("Matthew");
	sayHello("Joe");

	//Set Default Param Function
	function sayHi($name = 'Matthew') {
		echo "Hello $name";
	}

	sayHi();
	sayHi('Glenn');

	function addNumbers($num1, $num2){
		return $num1 + $num2;
	}

	// echo addNumbers(5,6);

	$sum = addNumbers(1, 2);
	echo $sum;

	//By Reference
	$myNum = 10;

	//Doesn't manipulate the variable ($var)
	function addFive($num) {
		$num += 5;
	}

	//Manipulates the variable (&$var)
	function addTen(&$num){
		$num += 10;
	}

	addFive($myNum);

	echo "Sum : $myNum <br>";

	addTen($myNum);

	echo "Value : $myNum <br>";



<?php
// Multiple of 3 print Fizz
// Multiple of 5 print Buzz
//Print 1 to 100

$arr = [];
$num = 15;

for($i = 1;$i <= 100; $i++) {
	if($i % 3 === 0 AND $i % 5 === 0) {
		array_push($arr, "Fizz Buzz");
	} else if($i % 3 === 0) {
		array_push($arr, "Fizz");
	} else if ($i % 5 === 0) {
		array_push($arr, "Buzz");
	} else {
		array_push($arr, $i);
	}

}

	if($arr[$num - 1] === "Fizz Buzz") {
		if($num % 3 === 0 AND $num % 5 === 0) {
			echo "true";
		} else {
			echo "False";
		}
	} 
		else if ($arr[$num - 1] === "Fizz") {
		if($num % 3 === 0) {
			echo "true";
		} else {
			echo "False";
		}
	} else if ($arr[$num - 1] === "Buzz") {
		if($num % 5 === 0) {
			echo "true";
		} else {
			echo "False";
		}
	} else if($arr[$num -1] === $num){
		echo $num;
	}

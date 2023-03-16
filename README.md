# PHP Overview

## What is PHP?
PHP is a general purpose scripting langauge geared towards web development
<ul>
	<li>Interpreted server-side langauge</li>
	<li>Can be written alongside HTML within the PHP Tags</li>
	<li>Often used with a relational database such as MySQL</li>
	<li>Somewhat easy langauge to learn</li>
</ul>

Questions that can commonly come up in interviews that I don't necessarily use on a day to day basis.

## Higher Order Functions - Functions that either TAKE IN functions as a param or return Functions

	- .map and .filter are good examples of Higher Order Functions
		- Pass in functions to map or filter to tell function what to do

Array functions - ES6 addon that makes creating a function more concise
				- implicity return , so don't need to add return
				- Can't use arrow functions as objects obstructors (ex: const Car = (color) => { this.color = color;);  const redCar = new Car('red'); //Throws error)

## Question : What will be output
		function run() {
			console.log(1);
			console.log(function(){console.log(2)},setTimeout(1000);
			console.log(function(){console.log(3)},setTimeout(0);
			console.log(4);
		}
		run();
		
	// Answer 1 3 4 2 (4/3 is trick question - setTimeout is saying call as soon as possible, which would be after console.log(4))

## Question - What will these return
	function foo1() {
		return {
			bar: "Hello"
		};
	}

	function foo2() {
		return // linebreak after return - ; gets inserted and therefore is really "return ;" Won't execute the rest
		{
			bar: "Hello"
		};
	}

Answer : 1 an object, 2 undefined - see above

## Promises
	What are promises and name a use case
		Promises are ASYNC and wait for the function to complete before doing anything else
		ex: loading a list of images

## Common Interview non written questions

Answers:
### What experience do you have with PHP development?
I have 5+ years of experience in PHP development, with a focus on web application development and receiving requests from front-end applications to parse data received and return the data required to run the application correctly.


### What do you consider to be the most important aspects of PHP development?
I believe the most important aspects of PHP development are writing clean, readable code, adhering to coding standards, and ensuring scalability.

### How have you handled database interaction in previous projects?
I have worked with MySQL, PostgreSQL, MongoDB, and other relational databases to manage data in my past projects. I have also implemented ORM (Object-Relational Mapping) libraries to simplify database interactions.

### What techniques have you used to optimize your PHP code?
I have used methods such as caching and optimization techniques to improve the performance of my code. I have also used profiling tools to identify potential bottlenecks.

### How familiar are you with object-oriented programming principles?
I have worked extensively with OOP (Object-Oriented Programming) principles and have a good understanding of the concepts.

### Have you ever used a third-party API in a PHP project?
Yes, I have used several third-party APIs in the past, such as Google Maps and Facebook APIs.

### How do you debug and troubleshoot PHP code?
When debugging PHP code, I use tools such as Xdebug and FirePHP to identify errors and pinpoint the source of the issue. I also use log files and tracing to troubleshoot any problems I encounter.

### What frameworks have you used in the past and what do you think of them?
I have used several frameworks in the past, including Laravel and other MVC front-end frameworks. They are all powerful and reliable frameworks with great documentation and support. I particularly like Laravel for its ease of use and modular design.

### What have you done to ensure your code is secure?
When writing code, I always make sure to use the latest security measures such as input validation and output sanitization. I also use prepared statements to prevent SQL injection attacks.

### What challenges have you encountered when building a complex PHP application?
When building a complex application, one of the biggest challenges is managing the complexity of the codebase. I have used object-oriented programming principles and design patterns to ensure the code is modular, organized, and easy to maintain. Additionally, I have used unit tests to ensure the code is working as expected and refactored the code when needed. I also have used to most up to date encryption methods (last being SODIUM) to encrypt information stored in our databases, and storing information like keys/hashes/db info in different places so that if one part of our server gets exploited they don't have all the information.

### Difference Between Relational and non relational DBs
Relational databases store data in tables that consist of rows and columns, with data typically being related to one another through the use of primary and foreign keys. Non-relational databases, on the other hand, store data as documents, objects, or graphs that are not related to one another. Non-relational databases can be more flexible than relational databases and can be used to store data with complex structures.


### What is MVC and what advantages does it offer?

MVC stands for Model-View-Controller, and is an architectural pattern used to separate the application logic from the user interface. It offers advantages such as improved code organization, faster development, better code reusability, improved scalability,

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

## More Common PHP Questions

### Does the PHP coding language resemble any others?
Yes, the PHP coding language resembles other languages such as JavaScript and C.

### What is the difference between variables and constants?
Variables are used to store information that can be changed, while constants are values that cannot be changed.

### Explain what a session is in PHP.
A session in PHP is a collection of variables that are stored on a web server, which can be accessed by a user during a single visit to a website.

### Explain what PEAR means.
PEAR stands for PHP Extension and Application Repository. It is a collection of code written by developers, which can be used for a variety of tasks.

### Is the PHP language case sensitive?
Yes, the PHP language is case sensitive.

### Outline three PHP variables.
Three PHP variables are strings, integers, and booleans.

### Which rules must be used when naming variables in PHP?
Variables in PHP must begin with a letter or underscore, and cannot contain spaces or symbols.

### Explain the difference between “print” and “echo.”
The difference between “print” and “echo” is that “print” returns a value and “echo” does not.

### What are some advantages of PHP?
Some advantages of PHP are that it is open source, free to use, and easy to learn.

### What are some disadvantages of PHP?
Some disadvantages of PHP are that it is not as secure as other languages, and debugging can be difficult.

### Which technical skills do you need to use PHP?
To use PHP, you need technical skills in HTML, CSS, JavaScript, databases, and general web development.

### Which soft skills do you need to use PHP in a team of developers?
Soft skills needed to use PHP in a team of developers include communication, collaboration, problem-solving, and organization.

### Can PHP interact with HTML?
Yes, PHP can interact with HTML.

### Name three uses of PHP.
Three uses of PHP are server-side scripting, command line scripting, and writing desktop applications.

### Describe how dynamic and static websites are different.
Dynamic websites are those that are constantly changing and are driven by a database. Static websites, on the other hand, remain the same until manually changed.

### Explain what “NULL” means.
NULL is a special type of value that indicates that no value has been set.

### What is meant by defining constants, and how would you do this in PHP?
Defining constants in PHP means declaring a variable that cannot be changed throughout the program. To define constants in PHP, you can use the “define()” function.

### What does the “break” statement do?
The “break” statement is used to break out of a loop, switch statement, or other code block.

### What does the “continue” statement do?
The “continue” statement is used to skip the current iteration of a loop and move on to the next iteration.

### How are PHP5 and PHP7 different?
PHP5 and PHP7 differ in terms of speed, security, and syntax. PHP7 is faster, more secure, and has more advanced syntax than PHP5.

### What is meant by single inheritance in PHP?
Single inheritance in PHP means that a class can only inherit from one parent class. 

### Does PHP support multiple inheritance?
No, PHP does not support multiple inheritance.

### What does the GD library do in PHP?
The GD library in PHP is a graphics library that allows for the creation, manipulation, and saving of images.

### What does “imagetypes()” do?
The imagetypes() function returns the image types supported by the current version of the GD library.

### How would you export data in PHP to Excel?
You can export data in PHP to Excel using the PHPExcel library.

## OOP
<uL>
<li>Why OOP? Companies want OOP, not procecdural</li>
<li>It works better in a team setting</li>
<li>Makes easier Re-usable code!</li>
<li>Better organized code</li>
<li>Better with medium to large sized websites</li>
</ul>

# MVC
### Model
Model connects to the Database - reuse this code as much as needed

### Controller
Controls the input from the user, queries the database

### View
Gets data from the database, shows user data on the website

## 3 Main tasks of PHP
<ul>
	<li>Connect to the DB and Query within it</li>
	<li>Handle data submitted by user</li>
	<li>Show DB data to the user</li>
</ul>

# Classes
Basically, a large object that contains variables and functions that are all related to one thing (For example : users)<br>
OOP - variables and functions are called Props and Methods. Very similar but not exactly the same<br>
Naming Classes - Start with Uppercase letter<br>
Instantiate a class - creating an object that contains all the props and methods inside the class<br>

### Inheritance
Using the extends keyword, a class can get access to another class by inheriting data from a separate class

### Private vs Public
Private variables/props are only used within the class while public can be used outside the class. A good way of doing this is setting them all to private and figuring out which ones need to be public after.

### Protected
Can only be accessed within the same class, like private. However, it can be accessed by other classes that extends to it(inheritance)

## Constructor and Destructor
Constructor: A constructor is a method that is automatically called when an object is created from a class. It is used to initialize the object's properties or perform any other setup tasks.<br>
Destructor: A destructor is a method that is automatically called when an object is destroyed or goes out of scope. It is used to perform cleanup tasks such as releasing resources or closing database connections.<br>

<code>
class MyClass {
    private $property;

    public function __construct($value) {
        $this->property = $value;
    }

    public function __destruct() {
        // Cleanup tasks
        // e.g., closing a database connection
    }
}
</code>


<?php

// class Person {
//     protected $first = "Matthew"; //Set to public to access without the method below
//     private $last = "Lowe";
//     private $age = 31;

//     //Public method - has access to private properties and therefore can be used to display "private" data
//      public function name() {
//          $a = $this->first; //Pointing to a prop does not require a $ like a variable
//          return $a;
//     }
// }

// class Pet extends Person {
//     public function owner() {
//         $a = $this->first;
//         return $a;
//     }
// }

class Person {
    //Properties (Declare properties without values - Will be asssigning values when calling class)
    private $name;
    private $age;
    private $hair;
    private $height;
    private $company = "My Company"; // You CAN set a value before, or use as a placeholder like undefined

    //Constructor - built in method , must be named like below
    public function __construct($propName, $propAge, $propHair, $propHeight) {
        //Will be run at the beginning
        $this->name = $propName; 
        $this->age = $propAge;
        $this->hair = $propHair;
        $this->height = $propHeight;  
    }

    //Method
    public function setName($name) {
        $this->name = $name; //Pass in data from method
    }

    public function getName() {
        return $this->name;
    }

    //Destructor
    public function __destruct() {
        //Runs at the end, used for things like closing DB connections or perform cleanup tasks such as releasing resources
    }
}
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
    public $name;
    public $age;
    public $hair;
    public $height;

    //Method
    public function setName($name) {
        $this->name = $name; //Pass in data from method
    }
}
<?php 

//Functional example

function square($x) {
    return $x * $x;
  }
  
  function map($arr, $fn) {
    $result = [];
    foreach ($arr as $item) {
      $result[] = $fn($item);
    }
    return $result;
  }
  
  $numbers = [1, 2, 3, 4, 5];
  $squares = map($numbers, 'square');
  print_r($squares); // Outputs Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

  
//OOP Example

/*
Object-oriented programming (OOP) and functional programming are two different programming paradigms that can be used in PHP. Here are some differences between the two:

OOP focuses on creating reusable code by defining classes and objects, while functional programming focuses on creating reusable functions that can be composed together.
OOP emphasizes encapsulation, inheritance, and polymorphism, while functional programming emphasizes immutability, higher-order functions, and pure functions.
OOP tends to be more suitable for large, complex applications with many interacting parts, while functional programming is often used for data processing and manipulation tasks.

*/

class Car {
    private $model;
    private $color;
  
    public function __construct($model, $color) {
      $this->model = $model;
      $this->color = $color;
    }
  
    public function getModel() {
      return $this->model;
    }
  
    public function getColor() {
      return $this->color;
    }
  
    public function setColor($color) {
      $this->color = $color;
    }
  }
  
  $myCar = new Car("Toyota", "red");
  echo $myCar->getModel(); // Outputs "Toyota"
  echo $myCar->getColor(); // Outputs "red"
  $myCar->setColor("blue");
  echo $myCar->getColor(); // Outputs "blue"


############ Functional Programming example

// Create an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Define a function to calculate the sum of an array of numbers
function sum($arr) {
  return array_reduce($arr, function($acc, $num) {
    return $acc + $num;
  }, 0);
}

// Define a function to calculate the product of an array of numbers
function product($arr) {
  return array_reduce($arr, function($acc, $num) {
    return $acc * $num;
  }, 1);
}

// Define a function to calculate the average of an array of numbers
function average($arr) {
  return sum($arr) / count($arr);
}

// Calculate the sum, product, and average of the array of numbers
echo sum($numbers); // Outputs 15
echo product($numbers); // Outputs 120
echo average($numbers); // Outputs 3

########## OOP Example of the same problem

// Create a class to represent a bank account
class BankAccount {
    private $balance;
  
    public function __construct($balance) {
      $this->balance = $balance;
    }
  
    public function deposit($amount) {
      $this->balance += $amount;
    }
  
    public function withdraw($amount) {
      if ($amount > $this->balance) {
        throw new Exception("Insufficient funds");
      }
      $this->balance -= $amount;
    }
  
    public function getBalance() {
      return $this->balance;
    }
  }
  
  // Create a class to represent a bank customer
  class BankCustomer {
    private $name;
    private $account;
  
    public function __construct($name, $balance) {
      $this->name = $name;
      $this->account = new BankAccount($balance);
    }
  
    public function deposit($amount) {
      $this->account->deposit($amount);
    }
  
    public function withdraw($amount) {
      $this->account->withdraw($amount);
    }
  
    public function getBalance() {
      return $this->account->getBalance();
    }
  }
  
  // Create a bank customer and deposit some money
  $customer = new BankCustomer("John", 1000);
  $customer->deposit(500);
  
  // Withdraw some money and check the balance
  $customer->withdraw(200);
  echo $customer->getBalance(); // Outputs 1300


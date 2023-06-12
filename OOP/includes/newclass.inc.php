<?php

class NewClass {
    //Properties and methods
    public $data = "Prop value";

    public function __construct() {
        echo "This class as been instantiated <br>";
    }

    public function setNewProperty($newData) {
        $this->data = $newData;
    }

    public function getProperty() {
        return $this->data;
    }

    public function __desctruct() {
        echo "<br> This is the end of the class!";
    }
    
}

//Instantiate a class - Create object that contains everything inside the class

$object = new NewClass;

var_dump($object);
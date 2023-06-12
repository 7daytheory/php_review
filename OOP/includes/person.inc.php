<?php

class Person {
    private $first = "Matthew";
    private $last = "Lowe";
    private $age = 31;

    public function name() {
        $a = $this->first; //Pointing to a prop does not require a $ like a variable
        return $a;
    }
}

class Pet {
    public function owner() {
        $a = "Hello There";
        return $a;
    }
}
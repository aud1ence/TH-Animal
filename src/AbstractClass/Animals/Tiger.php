<?php

//include_once(dirname(__FILE__) . '/../../AbstractClass/Animal.php');
namespace src\AbstractClass\Animals;

class Tiger extends Animal
{
    public function makeSound(): string
    {
        return "Tiger: groarrrr!";
    }
}
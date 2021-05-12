<?php

//include_once(dirname(__FILE__) . '/../../AbstractClass/Animal.php');
//include_once(dirname(__FILE__) . '/../../InterfaceClass/Edible.php');
namespace src\AbstractClass\Animals;

class Chicken extends Animal implements Edible
{
    public function makeSound(): string
    {
        return "Chicken: Cục ta cục tác!";
    }

    public function howToEat(): string
    {
       return "could be fried";
    }
}
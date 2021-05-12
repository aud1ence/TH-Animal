<?php

//include_once(dirname(__FILE__) . '/../../AbstractClass/Fruit.php');
//namespace src\AbstractClass\Fruits;
use src\AbstractClass\Fruit;
class Orange extends Fruit
{
    public function howToEat(): string
    {
        return "Orange could be juiced";
    }
}
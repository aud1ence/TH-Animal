<?php
//include('AbstractClass/Animals/Chicken.php');
//include('AbstractClass/Animals/Tiger.php');
//include('AbstractClass/Fruits/Apple.php');
//include('AbstractClass/Fruits/Orange.php');
use src\InterfaceClass\Edible;
use src\AbstractClass\Fruit;
use src\AbstractClass\Animal;
use src\AbstractClass\Fruits\Orange;
use src\AbstractClass\Fruits\Apple;
use src\AbstractClass\Animals\Chicken;
use src\AbstractClass\Animals\Tiger;

echo('Animals:<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';

    if ($animal instanceof Chicken) {
        echo $animal->howToEat() . "";
    }
}

echo('<br><br><br>Fruits:<br>');
$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}
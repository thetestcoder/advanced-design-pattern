<?php


require_once "PetShop\AnimalFeeder.php";
require_once "PetShop\AnimalFeederProxy.php";

require_once "PetShop\AnimalFeeders\Cat.php";

$felix = new \PetShop\AnimalFeederProxy('Cat', "Felix");
echo $felix->displayFood(1);
echo "<br>";
echo $felix->dropFood(1, true);
echo "<br>";



require_once "PetShop\AnimalFeeders\Dog.php";

$brian = new \PetShop\AnimalFeederProxy("Dog", "Brian");
echo $brian->displayFood(1);
echo "<br>";
echo $brian->dropFood(1, true);
echo "<br>";
<?php

require_once "Burger.php";
require_once "BurgerLazyLoader.php";

$burger = BurgerLazyLoader::getBurger(true, true);
echo "Burger with cheese and fries costs: £".$burger->getPrice();
echo " Burger Count ".BurgerLazyLoader::getBurgerCount();
echo "<br>";

$burger = BurgerLazyLoader::getBurger(true, false);
echo "Burger with cheese and without fries costs: £".$burger->getPrice();
echo " Burger Count ".BurgerLazyLoader::getBurgerCount();
echo "<br>";

$burger = BurgerLazyLoader::getBurger(false, true);
echo "Burger without cheese and with fries costs: £".$burger->getPrice();
echo " Burger Count ".BurgerLazyLoader::getBurgerCount();
echo "<br>";

$burger = BurgerLazyLoader::getBurger(false, false);
echo "Burger without cheese and without fries costs: £".$burger->getPrice();
echo " Burger Count ".BurgerLazyLoader::getBurgerCount();
echo "<br>";
<?php

require_once "ATM.php";
require_once "ATMWithPhoneTopUp.php";


$atm = new ATM(500.00);

$atm->withdraw(50.00);

echo "Balance: ".$atm->getBalance();
echo "<br>";

$phoneTopUp = new ATMWithPhoneTopUp(400);

echo "Top-up code: " . $phoneTopUp->getTopUp(300.00, time());
echo "<br>";

echo $phoneTopUp->getBalance();
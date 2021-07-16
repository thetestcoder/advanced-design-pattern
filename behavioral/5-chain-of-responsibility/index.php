<?php


require_once "Purchaser.php";
require_once "AssociatePurchaser.php";
require_once "ManagerPurchaser.php";

$associate = new AssociatePurchaser();
$manager = new ManagerPurchaser();

$associate->setNextPurchaser($manager);

$associate->buy(533);
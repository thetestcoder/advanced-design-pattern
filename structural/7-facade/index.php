<?php


require_once "Manufacturer.php";
require_once "Post.php";
require_once "SMS.php";
require_once "ToyShop.php";

$childrenToy = new \Facade\ToyShop("Delhi Toy", "1234567890", 5);
$childrenToy->processOrder("VPO Kaimri Hisar", "9876543210");
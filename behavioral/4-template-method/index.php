<?php


require_once 'Pasta.php';
require_once "MeatballPasta.php";
require_once "VeganPasta.php";

$dish = new MeatballPasta(true);
$dish->cook();
echo "<br>";

$dish = new VeganPasta(true);
$dish->cook();
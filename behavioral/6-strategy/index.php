<?php

require_once "Power.php";
require_once "Square.php";
require_once "Cube.php";
require_once "RaiseNumber.php";

$processor = new RaiseNumber(new Square());

echo $processor->raise(5);
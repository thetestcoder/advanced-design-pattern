<?php

require_once "ToyFactory.php";
require_once "Toys\Toy.php";
require_once "Toys\MazeToy.php";
require_once "Toys\PuzzleToy.php";


require_once "DLToyFactory.php";
require_once "Toys\DLMazeToy.php";
require_once "Toys\DLPuzzleToy.php";

$dlToyFactory = new DLToyFactory();

var_dump($dlToyFactory->makeMaze());
echo "<br>";
var_dump($dlToyFactory->makePuzzle());

require_once "HRToyFactory.php";
require_once "Toys\HRMazeToy.php";
require_once "Toys\HRPuzzleToy.php";

$hrToyFactory = new HRToyFactory();



<?php

require_once "Feed.php";
require_once "Reader.php";

$newspaper = new Feed("examvictory.com");

$theTestCoder = new Reader("The Test Coder");

$newspaper->attach($theTestCoder);


$newspaper->breakOutNews("PHP Design Pattern");
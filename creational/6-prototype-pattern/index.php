<?php

require_once "Student.php";


$prototypeStudent = new Student();
$prototypeStudent->setGrade("A");
$prototypeStudent->setName("The Test Coder");
$prototypeStudent->setYear(2020);

var_dump($prototypeStudent);
echo "<br>";

$lesserChild = clone $prototypeStudent;
$lesserChild->setName("Lesser Child");
$lesserChild->setGrade("A4");

var_dump($lesserChild);
echo "<br>";

$theChildProdigy = clone $prototypeStudent;
$theChildProdigy->setName("Deep");
$theChildProdigy->setGrade("B");


$theChildProdigy->danceSkills = "Outstanding";
$theChildProdigy->dance = function(string $dance){
    return "Dancing $dance style";
};

var_dump($theChildProdigy);
echo "<br>";

var_dump($theChildProdigy->dance->__invoke("Hip Hop"));

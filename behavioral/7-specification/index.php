<?php

require_once "WorkerSpecification.php";
require_once "WorkerIsDeveloper.php";


$workers = [];

$workers['A'] = new StdClass();
$workers['A']->title = "Deep";
$workers['A']->department = "Developer";
$workers['A']->salary = "26k";


$workers['B'] = new StdClass();
$workers['B']->title = "Jhon";
$workers['B']->department = "Engineer";
$workers['B']->salary = "55k";



$workers['C'] = new StdClass();
$workers['C']->title = "Joe";
$workers['C']->department = "Developer";
$workers['C']->salary = "28k";


$workers['D'] = new StdClass();
$workers['D']->title = "Pablo";
$workers['D']->department = "Accountant";
$workers['D']->salary = "16k";


$isDeveloper = new WorkerIsDeveloper();

foreach($workers as $worker){
    if($isDeveloper->isSatisfiedBy($worker)){
        var_dump($worker->title);
        echo "<br>";
    }
}

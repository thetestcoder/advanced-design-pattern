<?php


require_once "TimeIterator.php";

$time = new TimeIterator(time());

foreach ($time as $key => $value){
    var_dump($key, $value);
    echo "<br>";
}
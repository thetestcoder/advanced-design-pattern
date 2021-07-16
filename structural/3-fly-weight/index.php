<?php

require_once "Shape.php";
require_once "Circle.php";
require_once "ShapeFactory.php";

$colors = ['red', 'green', 'yellow', "pink", "gold"];

$factory = new ShapeFactory();

for ($i= 0; $i<= 100; $i++){
    $randomColor = $colors[array_rand($colors)];

    $circle = $factory->getCircle($randomColor);
    $circle->setX(rand(1, 100));
    $circle->setY(rand(1, 100));
    $circle->setRadius(rand(1, 100));

    $circle->draw();
}
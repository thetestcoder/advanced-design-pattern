<?php

require_once "Pizza.php";
require_once "PizzaBuilder.php";


$pizzaRecipe = (new PizzaBuilder(12))
    ->cheese(true)
    ->bacon(true)
    ->pepperoni(false)
    ->build();


$pizza = new Pizza($pizzaRecipe);

echo $pizza->show();
<?php


class MeatballPasta extends Pasta
{

    public function addSauce(): bool
    {
        var_dump("Added Tomato Sauce");
        return true;
    }

    public function addMeat(): bool
    {
        var_dump("Added Meat");
        return true;
    }

    public function addCheese(): bool
    {
        var_dump("Added Cheese");
        return true;
    }
}
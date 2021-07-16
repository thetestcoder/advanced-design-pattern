<?php


class VeganPasta extends Pasta
{

    public function addSauce(): bool
    {
        var_dump("Added Tomato Sauce");
        return true;
    }

    public function addMeat(): bool
    {
        return false;
    }

    public function addCheese(): bool
    {
        return false;
    }
}
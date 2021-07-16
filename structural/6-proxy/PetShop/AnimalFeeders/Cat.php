<?php

namespace PetShop\AnimalFeeders;

use PetShop\AnimalFeeder;

class Cat implements AnimalFeeder
{

    public string $petName;

    public function __construct(string $petName)
    {
        $this->petName = $petName;
    }

    public function dropFood(int $hungerLevel, bool $water = false): string
    {
        return $this->selectedFood($hungerLevel) . ($water ? ' with water' : '');
    }

    public function displayFood(int $hungerLevel): string
    {
        return $this->selectedFood($hungerLevel);
    }

    protected function selectedFood(int $hungerLevel):string
    {
        switch ($hungerLevel){
            case 0:
                return "lamb";
                break;
            case 1:
                return "chicken";
                break;
            case 3:
                return "tuna";
                break;
        }

    }
}
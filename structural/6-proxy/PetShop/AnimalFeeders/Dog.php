<?php


namespace PetShop\AnimalFeeders;


class Dog implements \PetShop\AnimalFeeder
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
        if ($hungerLevel === 3){
            return "Chicken or Veg";
        }elseif (date("H") < 10){
            return "turkey or beef";
        }else{
            return "Chicken or rice";
        }

    }
}
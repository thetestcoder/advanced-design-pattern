<?php


class Burger
{
    private bool $cheese;
    private bool $chips;
    private int $price;

    public function __construct(bool $cheese, bool $chips)
    {
        $this->cheese = $cheese;
        $this->chips = $chips;

        $this->price = rand(1, 2.50) +($cheese ? 0.5 : 0) + ($chips ? 1 : 0);
    }

    /**
     * @return float|int
     */
    public function getPrice() : int
    {
        return $this->price;
    }
}
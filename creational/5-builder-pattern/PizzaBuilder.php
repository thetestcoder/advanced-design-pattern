<?php


class PizzaBuilder
{
    public bool $cheese;
    public int $size;
    public bool $pepperoni;
    public bool $bacon;


    public function __construct(int $size)
    {
        $this->size = $size;
    }

    public function cheese(bool $present):PizzaBuilder
    {
        $this->cheese = $present;
        return $this;
    }

    public function pepperoni(bool $present):PizzaBuilder
    {
        $this->pepperoni = $present;
        return $this;
    }

    public function bacon(bool $present):PizzaBuilder
    {
        $this->bacon = $present;
        return $this;
    }

    public function build() :PizzaBuilder
    {
        return $this;
    }
}
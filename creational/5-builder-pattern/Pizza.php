<?php


class Pizza
{
    private bool $cheese;
    private int $size;
    private bool $pepperoni;
    private bool $bacon;

    public function __construct(PizzaBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->bacon = $builder->bacon;
    }

    public function show() : string
    {
       $recipe = $this->size . " inch pizza with the following toppings: ";
       $recipe .= $this->cheese ? " Cheese ":"";
       $recipe .= $this->pepperoni ? ", Pepperoni ":"";
       $recipe .= $this->bacon ? ", Bacon ":"";

       return $recipe;
    }
}
<?php

namespace Facade;

class Manufacturer
{
    private int $capacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function build() : string
    {
        return uniqid();
    }
}
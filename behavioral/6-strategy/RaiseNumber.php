<?php


class RaiseNumber
{
    private Power $strategy;

    public function __construct(Power $strategy)
    {
        $this->strategy = $strategy;
    }

    public function raise(int $number)
    {
        return $this->strategy->raise($number);
    }
}
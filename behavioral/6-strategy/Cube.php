<?php


class Cube implements Power
{

    public function raise(int $number): int
    {
        return pow($number, 3);
    }
}
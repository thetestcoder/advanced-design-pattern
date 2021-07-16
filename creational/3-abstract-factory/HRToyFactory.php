<?php


class HRToyFactory implements ToyFactory
{
    private $location = "Haryana";


    public function makeMaze()
    {
        return new Toys\HRMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\HRPuzzleToy();
    }
}
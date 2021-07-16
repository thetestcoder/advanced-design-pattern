<?php


class DLToyFactory implements ToyFactory
{
    private $location = "Delhi";

    public function makeMaze()
    {
        return new Toys\DLMazeToy();
    }

    public function makePuzzle()
    {
        return new Toys\DLPuzzleToy();
    }
}
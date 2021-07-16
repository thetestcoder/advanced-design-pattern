<?php


class PBToyFactory implements ToyFactory
{

    public function makeMaze()
    {
        return new \Toys\PBMazeToy();
    }

    public function makePuzzle()
    {
       return new \Toys\PBPuzzleToy();
    }
}
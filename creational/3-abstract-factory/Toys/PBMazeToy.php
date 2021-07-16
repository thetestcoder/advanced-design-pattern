<?php


namespace Toys;


class PBMazeToy extends MazeToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $this->size = 3;
        $this->pictureName = "Punjab Maze";
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getPictureName(): string
    {
        return $this->pictureName;
    }
}
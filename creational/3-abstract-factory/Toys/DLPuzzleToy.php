<?php


namespace Toys;


class DLPuzzleToy extends PuzzleToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $rand = rand(1, 2);

        switch ($rand){
            case 1:
                $this->size = 3;
                break;
            case 2:
                $this->size = 9;
                break;
        }

        $this->pictureName = "Delhi Toys";
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
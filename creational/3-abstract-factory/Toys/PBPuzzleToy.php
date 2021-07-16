<?php


namespace Toys;


class PBPuzzleToy extends PuzzleToy
{
    private $size;
    private $pictureName;

    public function __construct()
    {
        $rand = rand(1, 4);

        switch ($rand){
            case 1:
                $this->size = 3;
                break;
            case 2:
                $this->size = 6;
                break;
            case 3:
                $this->size = 9;
                break;
            case 4:
                $this->size = 12;
                break;
        }

        $this->pictureName = "Punjab Puzzle";
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
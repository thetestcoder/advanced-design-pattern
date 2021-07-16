<?php


class ShapeFactory
{
    private array $shapeMap = [];

    public function getCircle(string $color)
    {
        $circle = "Circle_".$color;
        if (!isset($this->shapeMap[$circle])){
            echo "Creating a $color circle";
            echo "<br>";
            $this->shapeMap[$circle] = new Circle($color);
        }

        return $this->shapeMap[$circle];
    }
}
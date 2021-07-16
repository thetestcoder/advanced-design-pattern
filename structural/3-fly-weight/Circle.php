<?php


class Circle implements Shape
{
    private $color, $x, $y, $radius;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $x
     */
    public function setX($x): void
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y): void
    {
        $this->y = $y;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "Drawing Circle which is $this->color at [X: $this->x & Y: $this->y] of Radius: $this->radius";
        echo "<br>";
    }
}
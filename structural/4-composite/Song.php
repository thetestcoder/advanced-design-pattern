<?php


class Song implements Music
{
    public string $id;
    public string $name;

    public function __construct(string $name)
    {
        $this->id = uniqid();
        $this->name = $name;
    }

    public function play()
    {
        printf("Playing Song #%s %s.<br>", $this->id, $this->name);
    }
}
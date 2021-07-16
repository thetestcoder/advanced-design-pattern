<?php


class Reader implements SplObserver
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        echo "$this->name is reading ".$subject->getContent();
    }
}
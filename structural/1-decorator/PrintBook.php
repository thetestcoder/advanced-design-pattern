<?php


class PrintBook implements Book
{
    private EBook $eBook;
    public function __construct(string $title, string $author, string $content)
    {
        $this->eBook = new EBook($title, $author, $content);
    }

    public function getTitle(): string
    {
        return $this->eBook->getTitle();
    }

    public function getAuthor(): string
    {
        return $this->eBook->getAuthor();
    }

    public function getContent(): string
    {
        return $this->eBook->getContent();
    }

    public function getText():string{
        $content = $this->getTitle() . " by ".$this->getAuthor();
        $content .= "<br>";
        $content .= $this->getContent();

        return $content;
    }
}
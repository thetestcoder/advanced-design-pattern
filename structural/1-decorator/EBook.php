<?php


class EBook implements Book
{

    private string $title;
    private string $author;
    private string $content;

    public function __construct(string $title, string $author, string $content)
    {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
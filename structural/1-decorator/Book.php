<?php


interface Book
{
    public function __construct(string $title, string $author, string $content);

    public function getTitle():string;

    public function getAuthor():string;

    public function getContent():string;
}
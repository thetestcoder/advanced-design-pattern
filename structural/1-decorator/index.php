<?php


require_once "Book.php";
require_once "EBook.php";
require_once "PrintBook.php";

$eBook = new EBook("Design Pattern", "The TEst Coder", "Book Content here");

$printBook = new PrintBook("Design Pattern Book", "Youtube", "THis is printable content");

echo $printBook->getText();
<?php


namespace Facade;


class SMS
{
    private string $from;

    public function __construct(string $from)
    {
        $this->from = $from;
    }

    public function send(string $to, string $message):string
    {
        if (empty($to)) return false;


        if (strlen($message) === 0) return false;


        echo $to . " received message: " . $message;
        return true;
    }

}
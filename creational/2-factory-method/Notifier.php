<?php


abstract class Notifier
{
    protected $to;

    /**
     * Notifier constructor.
     * @param $to
     */
    public function __construct($to)
    {
        $this->to = $to;
    }

    abstract public function validateTo(): bool;
    abstract public function sendNotification(): string;
}
<?php


interface Transmitter
{
    public function setSender(Messenger $messenger);

    public function send($body);
}
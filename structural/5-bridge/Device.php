<?php


abstract class Device implements Transmitter
{

    protected Messenger $sender;

    public function setSender(Messenger $sender)
    {
        $this->sender =$sender;
    }
}
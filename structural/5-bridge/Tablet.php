<?php


class Tablet extends Device
{

    public function send($body)
    {
        $body .= "<br><br> Sent By Tablet";
        return $this->sender->send($body);
    }
}
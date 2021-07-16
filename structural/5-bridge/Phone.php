<?php


class Phone extends Device
{

    public function send($body)
    {
        $body .= "<br><br> Sent By Phone";
        return $this->sender->send($body);
    }
}
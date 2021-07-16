<?php

class SMS extends Notifier
{

    public function validateTo(): bool
    {
        $pattern = '/^((\+91)?|91)?[789][0-9]{9}/';
        $isPhone = preg_match($pattern, $this->to);

        return $isPhone ? true : false;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === FALSE){
            throw new Exception("Invalid Mobile Number");
        }

        $notificationType = get_class($this);
        return "THis is a ".$notificationType." to ".$this->to.".";
    }
}
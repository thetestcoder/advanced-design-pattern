<?php


class Email extends Notifier
{

    private $from;

    public function __construct($to, $from)
    {
        parent::__construct($to);

        if (isset($from)){
            $this->from = $from;
        }else{
            $this->from = "Anonymous";
        }
    }

    public function validateTo(): bool
    {
        $isEmail = filter_var($this->to, FILTER_VALIDATE_EMAIL);
        return $isEmail ? true : false;
    }

    public function sendNotification(): string
    {
        if ($this->validateTo() === FALSE) {
            throw new \Exception("Invalid Email");
        }
        $notificationType = get_class($this);

        return "THis is a ".$notificationType." to ".$this->to." from ". $this->from.".";
    }
}
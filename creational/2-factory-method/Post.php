<?php


class Post extends Notifier
{

    public function validateTo(): bool
    {
        $address = explode(',', $this->to);

        return count($address) !== 2 ? false :true;
    }

    public function sendNotification(): string
    {
        if($this->validateTo()=== false){
            throw new \Exception("Invalid Address");
        }

        $notificationType = get_class($this);

        return "This is ". $notificationType . " to ". $this->to;
    }
}
<?php


class NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {
        if (empty($notifier)){
            throw new \Exception("Notifier not found!");
        }

        switch ($notifier){
            case "SMS":
                return new SMS($to);
                break;
            case "Email":
                return new Email($to, "the test coder");
                break;
            default:
                throw new \Exception("Invalid Notifier");
                break;
        }
    }
}
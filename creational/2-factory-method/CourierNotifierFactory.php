<?php


class CourierNotifierFactory implements NotifierFactory
{

    public static function getNotifier($notifier, $to)
    {
        if(empty($notifier)) throw new \Exception("Invalid Notifier");

        switch ($notifier){
            case "Post":
                return new Post($to);
                break;
            default:
                throw new \Exception("Invalid Notifier");
                break;
        }
    }
}
<?php


require_once "Messenger.php";
require_once "InstantMessenger.php";
require_once "Transmitter.php";
require_once "Device.php";
require_once "SMS.php";
require_once "Phone.php";
require_once "Tablet.php";

$phone = new Phone();
$tablet = new Tablet();

$phone->setSender(new SMS());

$tablet->setSender(new SMS);

$tablet->send("Hello There!");
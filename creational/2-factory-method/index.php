<?php

require_once('Notifier.php');
require_once 'NotifierFactory.php';
require_once "ElectronicsNotifierFactory.php";



require_once "SMS.php";

$phone = ElectronicsNotifierFactory::getNotifier("SMS", 9812345678);
echo $phone->sendNotification();
echo "<br>";

require_once "Email.php";
$email = ElectronicsNotifierFactory::getNotifier("Email", "thetestcoder@gmail.com");
echo $email->sendNotification();
echo "<br>";


require_once "CourierNotifierFactory.php";
require_once "Post.php";

$address = CourierNotifierFactory::getNotifier("Post", "VPO Kaimri Hisar, Haryana");
echo $address->sendNotification();
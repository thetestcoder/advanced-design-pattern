<?php

require_once('Notifier.php');
require_once 'NotifierFactory.php';



require_once "SMS.php";

$phone = NotifierFactory::getNotifier("SMS", 9812345678);
echo $phone->sendNotification();
echo "<br>";

require_once "Email.php";
$email = NotifierFactory::getNotifier("Email", "thetestcoder@gmail.com");
echo $email->sendNotification();
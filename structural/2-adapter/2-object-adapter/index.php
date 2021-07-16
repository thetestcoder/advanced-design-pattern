<?php

require_once "Insurance.php";

$quote = new Insurance(10000, 250);

echo $quote->monthlyPremium();
echo "<br>";
require_once "MarketCompare.php";
require_once "InsuranceMarketCompare.php";

$quote = new InsuranceMarketCompare(10000, 500);

echo "Monthly Premium ". $quote->getMonthlyPremium();
echo "<br>";
echo "Annual Premium ". $quote->getAnnualPremium();
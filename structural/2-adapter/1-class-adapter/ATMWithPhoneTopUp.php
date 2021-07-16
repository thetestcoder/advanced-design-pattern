<?php


class ATMWithPhoneTopUp extends ATM
{
    public function getTopUp(float $amount, int $time):string
    {
        if ($this->reduceBalance($amount)){
            return $this->generateTopUp($amount, $time);
        }else{
            throw new Exception("Can't Withdraw Money");
        }
    }

    protected function generateTopUp(float $amount, int $time){
        return $amount."-".$time.-rand(0, 10000);
    }
}
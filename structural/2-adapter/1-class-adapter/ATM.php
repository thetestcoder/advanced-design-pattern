<?php


class ATM
{
    private $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdraw(float $amount):float
    {
        if ($this->reduceBalance($amount) === true){
            return $amount;
        }else{
            throw new \Exception("Can't Withdraw Money");
        }
    }

    protected function reduceBalance(float $amount):bool
    {
        if ($amount >= $this->balance) return false;

        $this->balance = ($this->balance - $amount);
        return true;
    }
}
<?php


class InsuranceMarketCompare implements MarketCompare
{
    private Insurance  $insurance;
    public function __construct(float $limit, float $excess)
    {
        try {
            $this->insurance = new Insurance($limit, $excess);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getMonthlyPremium(): float
    {
        return $this->insurance->monthlyPremium();
    }

    public function getAnnualPremium() : float
    {
        return $this->insurance->annualPremium();
    }
}
<?php


class WorkerIsDeveloper implements WorkerSpecification
{

    public function isSatisfiedBy(StdClass $customer): bool
    {
        if ($customer->department === 'Developer') return true;
        return false;
    }
}
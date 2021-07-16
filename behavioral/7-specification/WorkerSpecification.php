<?php


interface WorkerSpecification
{
    public function isSatisfiedBy(StdClass $customer):bool;
}
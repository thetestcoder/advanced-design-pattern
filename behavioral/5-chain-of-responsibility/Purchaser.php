<?php


interface Purchaser
{
    public function setNextPurchaser(Purchaser $nextPurchaser):bool;

    public function buy($price):bool;
}
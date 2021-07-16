<?php


namespace Facade;


class ToyShop
{
    private Manufacturer $manufacturer;
    private Post $courier;
    private SMS $sms;

    public function __construct(string $factoryAddress, string $contactNumber, int $capacity)
    {
        $this->manufacturer = new Manufacturer($capacity);
        $this->courier = new Post($factoryAddress);
        $this->sms = new SMS($contactNumber);
    }

    public function processOrder(string $address, $phone)
    {
        $item = $this->manufacturer->build();
        $this->courier->dispatch($item, $address);
        $this->sms->send($phone, "Your Order is Sent");

    }
}
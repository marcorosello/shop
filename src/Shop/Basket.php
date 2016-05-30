<?php
namespace Shop;

final class Basket
{
    private $customer;

    private $eans;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
        //create command baskedCreatedcd ..
    }

    public function addEan(Ean $ean)
    {
        $this->eans[$ean->getEan()] = $ean;
        //create a command eanAddedToBasked
    }

    public function removeEan($ean)
    {
        unset($this->eans[$ean->getEan()]);
        // create an event eanRemovedFromBasket
    }


    public function currentEans()
    {
        return $this->eans;
    }

    public function getCustomer() : Customer
    {
        return $this->customer;
    }




}

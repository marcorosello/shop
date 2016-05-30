<?php

namespace spec\Shop;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Shop\Ean;
use Shop\Customer;

class BasketSpec extends ObjectBehavior
{
    function let()
    {
        $customer = new Customer('marco', 'marcorosello87@gmail.com');
        $this->beConstructedWith($customer);
        $this->shouldHaveType('Shop\Basket');
        $this->getCustomer()->shouldReturn($customer);
    }

    function it_should_get_items_added_and_removed()
    {
        $ean = new Ean('example code');
        $this->addEan($ean);
        $this->currentEans()->shouldContain($ean);
        $this->currentEans()->shouldHaveKey($ean->getEan());
        $this->removeEan($ean);
        $this->currentEans()->shouldReturn([]);
    }

}

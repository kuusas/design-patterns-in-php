<?php

namespace spec\Creational\AbstractFactory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UsdFactorySpec extends ObjectBehavior
{
    function it_creates_usd_currency_instance()
    {
        $this->create()->shouldReturnAnInstanceOf('Creational\AbstractFactory\Currency\Usd');
    }
}

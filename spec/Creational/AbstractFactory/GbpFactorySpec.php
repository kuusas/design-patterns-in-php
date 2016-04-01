<?php

namespace spec\Creational\AbstractFactory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GbpFactorySpec extends ObjectBehavior
{
    function it_creates_gbp_currency_instance()
    {
        $this->create()->shouldReturnAnInstanceOf('Creational\AbstractFactory\Currency\Gbp');
    }
}

<?php

namespace spec\Creational\AbstractFactory\Currency;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UsdSpec extends ObjectBehavior
{
    function it_returns_currency_exchange_rate()
    {
        $this->rate()->shouldReturn(1.14);
    }

    function it_should_convert_currency()
    {
        $this->convert(10)->shouldReturn(8.77);
    }
}

<?php

namespace spec\Creational\AbstractFactory\Currency;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GbpSpec extends ObjectBehavior
{
    function it_returns_currency_exchange_rate()
    {
        $this->rate()->shouldReturn(0.8);
    }

    function it_should_convert_currency()
    {
        $this->convert(10)->shouldReturn(12.5);
    }
}

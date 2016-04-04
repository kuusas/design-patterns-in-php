<?php

namespace spec\Creational\FactoryMethod;

use Creational\FactoryMethod\Tea\Tea;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TeaFactorySpec extends ObjectBehavior
{
    function it_makes_black_tea()
    {
        $this->make(Tea::BLACK)->shouldBeAnInstanceOf('Creational\FactoryMethod\Tea\Black');
    }

    function it_makes_green_tea()
    {
        $this->make(Tea::GREEN)->shouldBeAnInstanceOf('Creational\FactoryMethod\Tea\Green');
    }

    function it_handles_unknown_tea()
    {
        $this->shouldThrow(new \InvalidArgumentException('Unknown type'))->duringMake('random');
    }
}

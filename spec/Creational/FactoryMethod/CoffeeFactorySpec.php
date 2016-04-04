<?php

namespace spec\Creational\FactoryMethod;

use Creational\FactoryMethod\Coffee\Coffee;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CoffeeFactorySpec extends ObjectBehavior
{
    function it_makes_milky_coffee()
    {
        $this->make(Coffee::MILKY)->shouldBeAnInstanceOf('Creational\FactoryMethod\Coffee\Latte');
    }

    function it_makes_strong_coffee()
    {
        $this->make(Coffee::STRONG)->shouldBeAnInstanceOf('Creational\FactoryMethod\Coffee\Espresso');
    }

    function it_handles_unknown_coffee_taste()
    {
        $this->shouldThrow(new \InvalidArgumentException('Unknown type'))->duringMake('random');
    }
}

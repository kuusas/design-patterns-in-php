<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Drink\Coffee;
use Creational\FactoryMethod\Drink\CoffeeEspresso;
use Creational\FactoryMethod\Drink\CoffeeLatte;
use InvalidArgumentException;

abstract class AbstractFactory
{
    abstract protected function factory($type = null);

    public function make($type = null)
    {
        return $this->factory($type);
    }
}

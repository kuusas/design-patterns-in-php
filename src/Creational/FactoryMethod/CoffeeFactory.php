<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Coffee\Coffee;
use Creational\FactoryMethod\Coffee\Espresso;
use Creational\FactoryMethod\Coffee\Latte;
use InvalidArgumentException;

class CoffeeFactory extends AbstractFactory
{
    protected function factory($type = null)
    {
        switch ($type) {
            case Coffee::STRONG:
                return new Espresso();
                break;
            case Coffee::MILKY:
                return new Latte();
                break;
            default:
                throw new InvalidArgumentException('Unknown type');
                break;
        }
    }
}

<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\Tea\Green;
use Creational\FactoryMethod\Tea\Black;
use Creational\FactoryMethod\Tea\Tea;
use InvalidArgumentException;

class TeaFactory extends AbstractFactory
{
    protected function factory($type = null)
    {
        switch ($type) {
            case Tea::GREEN:
                return new Green();
                break;
            case Tea::BLACK:
                return new Black();
                break;
            default:
                throw new InvalidArgumentException('Unknown type');
                break;
        }
    }
}

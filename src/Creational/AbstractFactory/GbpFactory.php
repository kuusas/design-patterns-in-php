<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Currency\Gbp;

class GbpFactory extends AbstractFactory
{
    public function create()
    {
        return new Gbp();
    }
}

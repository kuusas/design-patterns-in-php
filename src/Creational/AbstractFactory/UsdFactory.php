<?php

namespace Creational\AbstractFactory;

use Creational\AbstractFactory\Currency\Usd;

class UsdFactory extends AbstractFactory
{
    public function create()
    {
        return new Usd();
    }
}

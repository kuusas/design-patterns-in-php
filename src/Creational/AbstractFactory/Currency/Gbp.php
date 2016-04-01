<?php

namespace Creational\AbstractFactory\Currency;

class Gbp implements Currency
{
    public function rate()
    {
        return 0.8;
    }

    public function convert($value)
    {
        return round($value / $this->rate(), 2);
    }
}

<?php

namespace Creational\AbstractFactory\Currency;

class Usd implements Currency
{
    public function rate()
    {
        return 1.14;
    }

    public function convert($value)
    {
        return round($value / $this->rate(), 2);
    }
}

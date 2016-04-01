<?php
namespace Creational\AbstractFactory\Currency;

interface Currency
{
    public function rate();
    public function convert($value);
}
<?php

namespace tests\Creational\AbstractFactory;

use Creational\AbstractFactory\AbstractFactory;
use Creational\AbstractFactory\GbpFactory;
use Creational\AbstractFactory\UsdFactory;

class AbstractFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider factories
     */
    public function testCreateInstance(AbstractFactory $factory)
    {
        $instance = $factory->create();
        $this->assertInstanceOf('Creational\AbstractFactory\Currency\Currency', $instance);
    }

    public function factories()
    {
        return [
            [new GbpFactory()],
            [new UsdFactory()],
        ];
    }
}

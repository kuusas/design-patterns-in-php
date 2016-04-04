<?php

namespace tests\Creational\FactoryMethod;

use Creational\FactoryMethod\CoffeeFactory;
use Creational\FactoryMethod\Coffee\Coffee;
use Creational\FactoryMethod\TeaFactory;
use Creational\FactoryMethod\Tea\Tea;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testStrongCoffeeFactory()
    {
        $factory = new CoffeeFactory();
        $result = $factory->make(Coffee::STRONG);
        $this->assertInstanceOf('Creational\FactoryMethod\Coffee\Espresso', $result);
        $this->assertInstanceOf('Creational\FactoryMethod\Coffee\Coffee', $result);
        $this->assertInstanceOf('Creational\FactoryMethod\Drink', $result);
    
    }

    public function testMilkyCoffeeFactory()
    {
        $factory = new CoffeeFactory();
        $result = $factory->make(Coffee::MILKY);
        $this->assertInstanceOf('Creational\FactoryMethod\Coffee\Latte', $result);
        $this->assertInstanceOf('Creational\FactoryMethod\Coffee\Coffee', $result);
        $this->assertInstanceOf('Creational\FactoryMethod\Drink', $result);
    }

    public function testGreenTeaFactory()
    {
        $factory = new TeaFactory();
        $result = $factory->make(Tea::GREEN);
        $this->assertInstanceOf('Creational\FactoryMethod\Tea\Green', $result);
        $this->assertInstanceOf('Creational\FactoryMethod\Tea\Tea', $result);
        $this->assertInstanceOf('Creational\FactoryMethod\Drink', $result);
    }

    public function testBlackTeaFactory()
    {
        $factory = new TeaFactory();
        $result = $factory->make(Tea::BLACK);
        $this->assertInstanceOf('Creational\FactoryMethod\Tea\Black', $result);
        $this->assertInstanceOf('Creational\FactoryMethod\Tea\Tea', $result);
        $this->assertInstanceOf('Creational\FactoryMethod\Drink', $result);
    }
}

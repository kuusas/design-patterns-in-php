<?php

namespace tests\Creational\FactoryMethod;

use Creational\Singleton\Connection;

class SingletonTest extends \PHPUnit_Framework_TestCase
{
    public function testSameInstance()
    {
        $object1 = Connection::getInstance();
        $this->assertInstanceOf('Creational\Singleton\Connection', $object1);
        $object2 = Connection::getInstance();
        $this->assertInstanceOf('Creational\Singleton\Connection', $object2);

        $this->assertSame($object1, $object2);
    }
}

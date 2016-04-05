<?php

namespace tests\Creational\FactoryMethod;

use Creational\Prototype\ProductPrototype;

class PrototypeTest extends \PHPUnit_Framework_TestCase
{
    public function testProtoype()
    {
        $prototype = new ProductPrototype();

        $previousProduct = $prototype;
        for ($i = 0; $i < 10; $i++) {
            $product = clone $prototype;
            $product->setName('Product'.$i);

            $this->assertNotSame($previousProduct, $product);
            $previousProduct = $product;
        }
    }    
}

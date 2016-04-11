<?php

namespace tests\Structural\Adapter;

use Structural\Decorator\Templating;
use Structural\Decorator\TemplatingJson;
use Structural\Decorator\TemplatingTxt;

class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    public function testTemplating()
    {
        $data = ['foo' => 'bar'];
        $obj = new Templating($data);
        $this->assertEquals($data, $obj->render());
    }

    public function testJsonDecorator()
    {
        $data = ['foo' => 'bar'];
        $obj = new TemplatingJson(new Templating($data));
        $this->assertEquals('{"foo":"bar"}', $obj->render());
    }

    public function testTxtDecorator()
    {
        $data = ['foo' => 'bar'];
        $obj = new TemplatingTxt(new Templating($data));
        $this->assertEquals("foo: bar\n", $obj->render());
    }
}

<?php

namespace spec\Structural\Decorator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TemplatingSpec extends ObjectBehavior
{
    function it_renders_data()
    {
        $data = ['key' => 'value'];
        $this->beConstructedWith($data);
        $this->render()->shouldReturn($data);
    }
}

<?php

namespace spec\Structural\Decorator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Structural\Decorator\TemplatingInterface;

class TemplatingJsonSpec extends ObjectBehavior
{
    function it_renders_json(TemplatingInterface $templating)
    {
        $data = ['key' => 'value'];
        $templating->render()->willReturn($data);
        $this->beConstructedWith($templating);
        $this->render()->shouldReturn('{"key":"value"}');
    }
}

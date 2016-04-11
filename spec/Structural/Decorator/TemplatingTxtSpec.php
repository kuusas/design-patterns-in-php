<?php

namespace spec\Structural\Decorator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Structural\Decorator\TemplatingInterface;

class TemplatingTxtSpec extends ObjectBehavior
{
    function it_renders_txt(TemplatingInterface $templating)
    {
        $data = [
            'key' => 'value',
            'foo' => 'bar',
        ];
        $templating->render()->willReturn($data);
        $this->beConstructedWith($templating);
        $this->render()->shouldReturn("key: value\nfoo: bar\n");
    }
}

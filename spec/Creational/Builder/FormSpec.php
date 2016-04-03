<?php

namespace spec\Creational\Builder;

use Creational\Builder\FormField\FormField;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormSpec extends ObjectBehavior
{
    function it_accepts_fields(FormField $field)
    {
        $this->addField($field);
        $this->getFields()->shouldContain($field);
    }
}

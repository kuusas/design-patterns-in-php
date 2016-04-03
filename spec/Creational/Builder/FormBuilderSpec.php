<?php

namespace spec\Creational\Builder;

use Creational\Builder\FormField\FormField;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormBuilderSpec extends ObjectBehavior
{
    function it_creates_form_and_returns_as_result()
    {
        $this->createForm();
        $this->getResult()->shouldBeAnInstanceOf('Creational\Builder\Form');
    }

    function it_accepts_field(FormField $field)
    {
        $this->createForm();
        $this->addField($field);
        $this->getResult()->getFields()->shouldContain($field);
    }

    function it_sets_method()
    {
        $this->createForm();
        $this->setMethod('POST');
        $this->getResult()->getMethod()->shouldReturn('POST');
    }

    function it_sets_action()
    {
        $this->createForm();
        $this->setAction('http://...');
        $this->getResult()->getAction()->shouldReturn('http://...');
    }
}

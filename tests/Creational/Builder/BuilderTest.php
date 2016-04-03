<?php

namespace tests\Creational\Builder;

use Creational\Builder\FormBuilder;
use Creational\Builder\FormField\PasswordField;
use Creational\Builder\FormField\TextField;

class BuilderTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildForm()
    {
        $builder = new FormBuilder();
        $builder->createForm();
        $text = new TextField('username');
        $builder->addField($text);
        $pasw = new PasswordField('password');
        $builder->addField($pasw);
        $builder->setMethod('POST');
        $builder->setAction('http://...');
        $form = $builder->getResult();

        $this->assertContains($text, $form->getFields());
        $this->assertContains($pasw, $form->getFields());
        $this->assertSame('POST', $form->getMethod());
        $this->assertSame('http://...', $form->getAction());
    }
}

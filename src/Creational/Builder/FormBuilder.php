<?php

namespace Creational\Builder;

use Creational\Builder\FormField\FormField;

class FormBuilder
{
    private $form;
    
    public function addField(FormField $field)
    {
        $this->form->addField($field);
    }

    public function getResult()
    {
        return $this->form;
    }

    public function createForm()
    {
        $this->form = new Form();
    }

    public function setMethod($method)
    {
        $this->form->setMethod($method);
    }

    public function setAction($action)
    {
        $this->form->setAction($action);
    }
}

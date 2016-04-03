<?php

namespace Creational\Builder;

use Creational\Builder\FormField\FormField;

class Form
{
    private $fields = [];
    private $method;
    private $action;
    
    public function addField(FormField $field)
    {
        $this->fields[] = $field;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setAction($action)
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }
}

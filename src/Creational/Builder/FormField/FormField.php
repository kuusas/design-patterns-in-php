<?php

namespace Creational\Builder\FormField;

abstract class FormField
{
    protected $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }

    abstract public function getType();
}

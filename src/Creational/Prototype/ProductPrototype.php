<?php

namespace Creational\Prototype;

class ProductPrototype
{
    private $name;
 
    /**
     * Gets the value of name.
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
 
    /**
     * Sets the value of name.
     * @param mixed $name the name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

<?php

namespace Structural\Decorator;

class Templating implements TemplatingInterface
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return $this->data;
    }
}

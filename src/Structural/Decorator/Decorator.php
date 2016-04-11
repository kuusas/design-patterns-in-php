<?php

namespace Structural\Decorator;

class Decorator
{
    protected $origin;

    public function __construct(TemplatingInterface $templating)
    {
        $this->origin = $templating;
    }
}

<?php

namespace Structural\Decorator;

class TemplatingJson extends Decorator
{
    public function render()
    {
        $data = $this->origin->render();
        return json_encode($data);
    }
}

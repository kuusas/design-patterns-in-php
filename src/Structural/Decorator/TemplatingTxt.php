<?php

namespace Structural\Decorator;

class TemplatingTxt extends Decorator
{
    public function render()
    {
        $data = $this->origin->render();
        $return = '';
        foreach ($data as $key => $value) {
            $return .= "$key: $value\n";
        }

        return $return;
    }
}

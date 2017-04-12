<?php

namespace tree\tags;

require_once 'Tag.php';
require_once 'TagInterface.php';

class SingleTag extends Tag implements TagInterface
{
    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    // BEGIN (write your solution here)
    public function toString()
    {
        $attributes = [];
        foreach ($this->getAttributes() as $key => $value) {
            $attributes[] = $key . '=' . '"' . $value . '"';
        }

        return '<' . $this->getName() . ' ' . implode(' ', $attributes) . '>';
    }
    // END
}

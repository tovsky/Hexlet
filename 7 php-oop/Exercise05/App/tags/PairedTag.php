<?php

namespace tree\tags;

require_once 'Tag.php';
require_once 'TagInterface.php';

class PairedTag extends Tag implements TagInterface
{
    protected $children = [];

    public function __construct($attributes = [], $children = [])
    {
        $this->attributes = $attributes;
        $this->children = $children;
    }

    // BEGIN (write your solution here)
    public function toString()
    {
        $attributes = [];
        foreach ($this->getAttributes() as $key => $value) {
            $attributes[] = $key . '=' . '"' . $value . '"';
        }

        $attributeString = empty($attributes) ? '' : ' ' . implode(' ', $attributes);

        $tagData = [];
        $tagData[] = '<' . $this->getName() . $attributeString . '>';
        $tagData[] = implode('', array_map(function ($child) {
                return is_string($child) ? $child : $child->toString();
        }, $this->children));
        $tagData[] = '</' . $this->getName() . '>';

        return implode('', $tagData);
    }
    // END
}

<?php

namespace tree\Tree;

require_once 'tags/Div.php';
require_once 'tags/Img.php';
require_once 'tags/Paragraph.php';

function h($tagName, array $attributes, ...$children)
{
    switch ($tagName) {
        case 'div':
            return new \tree\tags\Div($attributes, $children);
        case 'p':
            return new \tree\tags\Paragraph($attributes, $children);
        case 'img':
            return new \tree\tags\Img($attributes);
        default:
            throw new \Exception("'{$tagName}' is undefined");
    }
}

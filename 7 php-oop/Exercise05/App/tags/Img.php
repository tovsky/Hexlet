<?php

namespace tree\tags;

require_once 'SingleTag.php';

class Img extends SingleTag
{
    public function getName()
    {
        return 'img';
    }
}

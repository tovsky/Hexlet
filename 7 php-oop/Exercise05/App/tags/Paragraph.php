<?php

namespace tree\tags;

require_once 'PairedTag.php';

class Paragraph extends PairedTag
{
    public function getName()
    {
        return 'p';
    }
}

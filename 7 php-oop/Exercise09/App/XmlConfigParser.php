<?php

namespace App;

require_once 'ConfigParserInterface.php';

class XmlConfigParser implements ConfigParserInterface
{
    public static function parse($filepath, array $options)
    {
        // it is just example, without real code
        return ['key' => 'value2'];
    }
}

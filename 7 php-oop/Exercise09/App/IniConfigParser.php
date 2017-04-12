<?php

namespace App;

require_once 'ConfigParserInterface.php';

class IniConfigParser implements ConfigParserInterface
{
    public static function parse($filepath, array $options)
    {
        // it is just example, without real code
        return ['key' => 'value1'];
    }
}

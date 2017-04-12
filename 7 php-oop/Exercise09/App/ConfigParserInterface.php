<?php

namespace App;

interface ConfigParserInterface
{
    public static function parse($filepath, array $options);
}

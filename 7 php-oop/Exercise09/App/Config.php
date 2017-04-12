<?php

namespace App;

require_once 'ConfigInterface.php';
require_once 'IniConfigParser.php';
require_once 'XmlConfigParser.php';
require_once 'YamlConfigParser.php';

class Config implements ConfigInterface
{
    private $data;
    private $fromType;

    // BEGIN (write your solution here)
    const MAPPING = [
        'ini' => 'App\IniConfigParser',
        'xml' => 'App\XmlConfigParser',
        'yml' => 'App\YamlConfigParser',
    ];

    public static function factory($filepath, array $options = [])
    {
        $extension = pathinfo($filepath, PATHINFO_EXTENSION);
        $klass = self::MAPPING[$extension];
        $data = $klass::parse($filepath, $options);
        return new self($extension, $data);
    }
    // END

    public function __construct($fromType, array $data)
    {
        $this->fromType = $fromType;
        $this->data = $data;
    }

    public function getFromType()
    {
        return $this->fromType;
    }

    public function getValue($key)
    {
        return $this->data[$key];
    }
}

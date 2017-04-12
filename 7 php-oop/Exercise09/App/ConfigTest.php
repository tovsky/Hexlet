<?php

namespace App;

require 'Config.php';

class ConfigTest extends \PHPUnit_Framework_TestCase
{
    public function testFromXml()
    {
        $config = Config::factory('path/to/file.xml');
        $this->assertEquals('xml', $config->getFromType());
        $this->assertEquals('value2', $config->getValue('key'));
    }

    public function testFromIni()
    {
        $config = Config::factory('path/to/file.ini');
        $this->assertEquals('ini', $config->getFromType());
        $this->assertEquals('value1', $config->getValue('key'));
    }

    public function testFromYaml()
    {
        $config = Config::factory('path/to/file.yml');
        $this->assertEquals('yml', $config->getFromType());
        $this->assertEquals('value3', $config->getValue('key'));
    }
}

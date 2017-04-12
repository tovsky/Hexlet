<?php

namespace App;

interface ConfigInterface
{
    public function __construct($fromType, array $data);
    public function getFromType();
    public function getValue($key);
}
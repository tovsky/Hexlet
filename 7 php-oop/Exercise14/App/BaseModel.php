<?php

namespace App;

class BaseModel
{
    // BEGIN (write your solution here)
    public static $tableName = null;

    public static function getTableName()
    {
        return static::$tableName ? static::$tableName : self::tableize(get_called_class());
    }

    public static function tableize($className)
    {
        $parts = explode('\\', $className);
        $lastPart = end($parts);
        return strtolower($lastPart);
    }
    // END
}

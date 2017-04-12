<?php

namespace App;

require_once "RepositoryInterface.php";
require_once "WrongFinderNameException.php";

class Repository implements RepositoryInterface
{
    // BEGIN (write your solution here)
    							private $tableName;

							public function __construct($tableName)
							{
								$this->tableName = $tableName;
							}

							public function __call($finder, $arguments)
							{
								preg_match("/findAllBy([A-Z].*)/", $finder, $outputArray);
								if (!$outputArray) {
									throw new WrongFinderNameException();
								}
								$fieldUpperName = $outputArray[1];
								preg_match_all("/([A-Z][^A-Z]+)/", $fieldUpperName, $matches);
								$fieldName = implode('_', array_map(function ($part) {
									return mb_strtolower($part);
								}, $matches[0]));

								return $this->where($fieldName, $arguments[0]);
							}
    // END

    public function where($fieldName, $value)
    {
        $format = "select * from %s where %s = '%s'";
        return sprintf(
            $format,
            $this->_escape($this->tableName),
            $this->_escape($fieldName),
            $this->_escape($value)
        );
    }

    private function _escape($value)
    {
        // NOTE: we must to implement escape logic over here in real world
        return $value;
    }
}

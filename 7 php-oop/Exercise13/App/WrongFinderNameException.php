<?php

namespace App;

require_once "RepositoryExceptionInterface.php";

class WrongFinderNameException extends \Exception implements RepositoryExceptionInterface
{
}

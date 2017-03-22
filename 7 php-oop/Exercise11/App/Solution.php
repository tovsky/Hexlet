<?php

namespace App;

use App\FileReader\FileReader;
use App\FileReader\FileReaderException;

function read(FileReader $fileReader, callable $onSuccess, callable $onError)
{
  // BEGIN (write your solution here)
  try {
        $data = $fileReader->read();
        $onSuccess($data);
    } catch (FileReaderException $e) {
        $onError($e);
    } finally {
        $fileReader->close();
    }
  // END
}
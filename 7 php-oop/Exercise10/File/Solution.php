<?php

namespace File;

// BEGIN (write your solution here)
function read($nameFile)
{
    try {
        if (!file_exists($nameFile))
            throw new Exceptions\FileNotFoundException();
        return file_get_contents($nameFile);
    } catch (FileNotFoundException $e) {

    }
}
// END
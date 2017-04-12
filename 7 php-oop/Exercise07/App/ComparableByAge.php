<?php

namespace App;

trait ComparableByAge
{
    abstract public function compare($user);

    // BEGIN (write your solution here)
    public function isOlderThan($user)
    {
        return 1 == $this->compare($user);
    }

    public function isYoungerThan($user)
    {
        return -1 == $this->compare($user);
    }

    public function isAgeTheSame($user)
    {
        return 0 == $this->compare($user);
    }
    // END
}
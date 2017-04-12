<?php

namespace App;

require_once "ComparableByAge.php";

class User
{
    use ComparableByAge;

    private $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    // BEGIN (write your solution here)
    public function compare(User $user2)
    {
        $age1 = $this->getAge();
        $age2 = $user2->getAge();

        if ($age1 > $age2) {
            return 1;
        } else if ($age1 == $age2) {
            return 0;
        } else {
            return -1;
        }
    }
    // END
}

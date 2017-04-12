<?php

namespace App;

require_once "User.php";

class TestUser extends \PHPUnit_Framework_TestCase
{
    public function testUserMoreLess()
    {
        $user1 = new User(10);
        $user2 = new User(11);

        $this->assertTrue($user2->isOlderThan($user1));
        $this->assertTrue($user1->isYoungerThan($user2));
    }

    public function testUserEqual()
    {
        $user1 = new User(10);
        $user2 = new User(10);

        $this->assertTrue($user1->isAgeTheSame($user2));
    }
}

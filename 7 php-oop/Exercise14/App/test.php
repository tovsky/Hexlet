<?php

namespace App;

require_once 'User.php';
require_once 'Member.php';
require_once 'Teacher.php';

class Test extends \PHPUnit_Framework_TestCase
{
    public function testUser()
    {
        $this->assertEquals('user', User::getTableName());
    }

    public function testMember()
    {
        $this->assertEquals('custom_table_for_members', Member::getTableName());
    }

    public function testTeacher()
    {
        $this->assertEquals('teacher', Teacher::getTableName());
    }
}

<?php

namespace App;

require_once "Repository.php";

class Test extends \PHPUnit_Framework_TestCase
{
    public function testRightWay()
    {
        $repo = new Repository('users');
        $expected = "select * from users where state = 'confirmed'";
        $actual = $repo->findAllByState('confirmed');
        $this->assertEquals($expected, $actual);
    }

    public function testRightWay2()
    {
        $repo = new Repository('photos');
        $expected = "select * from photos where owner_id = '4'";
        $actual = $repo->findAllByOwnerId(4);
        $this->assertEquals($expected, $actual);
    }

    public function testRightWay3()
    {
        $repo = new Repository('companies');
        $expected = "select * from companies where company_creator_name = 'john'";
        $actual = $repo->findAllByCompanyCreatorName('john');
        $this->assertEquals($expected, $actual);
    }

    public function testException()
    {
        $repo = new Repository('companies');
        try {
            $repo->undefinedMethod('john');
            $this->fail('An expected exception has not been raised.');
        } catch (RepositoryExceptionInterface $e) {
            $this->assertInstanceOf('App\WrongFinderNameException', $e);
        }
    }
}

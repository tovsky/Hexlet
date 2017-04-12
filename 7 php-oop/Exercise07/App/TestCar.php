<?php

namespace App;

require_once "Car.php";

class TestCar extends \PHPUnit_Framework_TestCase
{
    public function testCarMoreLess()
    {
        $car1 = new Car('bmw', 1985);
        $car2 = new Car('lexus', 2000);

        $this->assertFalse($car2->isOlderThan($car1));
        $this->assertFalse($car1->isYoungerThan($car2));
    }

    public function testCarEqual()
    {
        $car1 = new Car('fiat', 1985);
        $car2 = new Car('reno', 2000);

        $this->assertFalse($car1->isAgeTheSame($car2));
    }
}

<?php

namespace App;

require_once "ComparableByAge.php";

class Car
{
    use ComparableByAge;

    private $year;
    private $brand;

    public function __construct($brand, $year)
    {
        $this->year = $year;
        $this->brand = $brand;
    }

    public function getYear()
    {
        return $this->year;
    }

    // BEGIN (write your solution here)
	public function compare(Car $car2)
	{
		$year1 = $this->getYear();
		$year2 = $car2->getYear();

		if ($year1 > $year2) {
			return -1;
		} else if ($year1 == $year2) {
			return 0;
		} else {
			return 1;
		}
	}
    // END
}

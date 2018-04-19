<?php

class car {
	protected $numberOfTires = 4;
	public $isExpensive = false;

	public function getNumberOfTires(): int {
		return $this->numberOfTires;
	}

	public function isExpensive(): bool {
		return $this->isExpensive;
	}

	public function setNumberOfTires(int $numberOfTires): void {
		$this->numberOfTires = $numberOfTires;
	}

	public function setIsExpensive(bool $isExpensive): void {
		$this->isExpensive = $isExpensive;
	}

}
/* creates a new instance of the car class called bmw*/
$bmw = new car;
/* prints out the number of tires on the car */
echo "A bmw has " . $bmw->getNumberOfTires() . " tires. <br>";
/* changes the bool isExpensive from false to true*/
$bmw->isExpensive = 'true';
/*prints out the answer to "is the bmw expensive?" */
echo "A bmw is expensive? " . $bmw->isExpensive;


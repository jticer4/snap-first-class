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

$bmw = new car;
echo "A bmw has " . $bmw->getNumberOfTires() . " tires. <br>";
$bmw->isExpensive = 'true';
echo "A bmw is expensive " . $bmw->isExpensive;


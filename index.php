<?php

class car {
	public $numberOfTires = 4;
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
$bmw->isExpensive = 'true';
echo "is a bmw expensive? " . $bmw->isExpensive;


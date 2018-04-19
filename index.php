<?php

class car {
	public $numberOfTires = 4;
	public $isExpensive = false;

	/**
	 * @return int
	 */
	public function getNumberOfTires(): int {
		return $this->numberOfTires;
	}

	/**
	 * @return bool
	 */
	public function isExpensive(): bool {
		return $this->isExpensive;
	}

	/**
	 * @param int $numberOfTires
	 */
	public function setNumberOfTires(int $numberOfTires) {
		$this->numberOfTires = $numberOfTires;
	}

	/**
	 * @param bool $isExpensive
	 */
	public function setIsExpensive(bool $isExpensive) {
		$this->isExpensive = $isExpensive;
	}



}

$bmw = new car;
$bmw->isExpensive = 'true';
echo $bmw->isExpensive;


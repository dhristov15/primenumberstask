<?php
class PrimeNumbers {
    private $length;

    public function __construct($givenLength) {
    	$givenLength = (int) $givenLength;

        $this->length = $givenLength;
    }

	private function isPrime ($number) {		
		if($number <= 1) return false;
		
		for ($i = 2; $i * $i <= $number; $i++) {
			if ($number % $i == 0) {
				return false;
			}
		}
		
		return true;
	}

	private function getPrintMask () {
		$mask = '%-3s';
		for ($i = 1; $i <= $this->length; $i++) {
			$mask .= " %-3s";
		}
		$mask .= " \n";
		return $mask;
	}

	public function getPrimeNumbers () { 
		$primeNumbers = [];
		$number = 2;
		while (count($primeNumbers) < $this->length) {
			if ($this->isPrime($number)) {
				$primeNumbers[] = $number;
			}
			$number++;
		}
		
		return $primeNumbers;
	}

	public function printMultiplicationTable () {
		if ($this->length <= 0) {
			echo 'Length must be greater than 0';
			return;
		}

		$mask = $this->getPrintMask();

		$primeNumbers = $this->getPrimeNumbers();

		$firstRow = array_merge(['x'], $primeNumbers);

		vprintf($mask, $firstRow);

		foreach ($primeNumbers as $number1) {
			$printArray = [$number1];
			foreach ($primeNumbers as $number2) {
				$printArray[] = $number1 * $number2;
			}
			vprintf($mask, $printArray);
		}
	}
}
<?php
require_once('./src/PrimeNumbers.php');
use PHPUnit\Framework\TestCase;

class PrimeNumbersTest extends TestCase {
    public function testGetPrimeNumbers() {
        $firstTwentyPrimeNumbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97];
        $primeNumbers1 = new PrimeNumbers(3);
        $this->assertSame($primeNumbers1->getPrimeNumbers(), array_slice($firstTwentyPrimeNumbers, 0, 3));
        $primeNumbers2 = new PrimeNumbers(6);
        $this->assertSame($primeNumbers2->getPrimeNumbers(), array_slice($firstTwentyPrimeNumbers, 0, 6));
        $primeNumbers3 = new PrimeNumbers(9);
        $this->assertSame($primeNumbers3->getPrimeNumbers(), array_slice($firstTwentyPrimeNumbers, 0, 9));
        $primeNumbers4 = new PrimeNumbers(12);
        $this->assertSame($primeNumbers4->getPrimeNumbers(), array_slice($firstTwentyPrimeNumbers, 0, 12));
    }
}

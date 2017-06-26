<?php
require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;
class FizzBuzz
{
	private $fizz;
	private $buzz;
	private $fizzbuzz;
	private $cnt;
 
	public function __construct($fizz, $buzz, $cnt) {
		$this->fizz = $fizz;
		$this->buzz = $buzz;
		$this->fizzbuzz = $fizz * $buzz;
		$this->cnt = $cnt;
	}
 
	public function printFizzBuzz() {
		for ($i = 1; $i <= $this->cnt; $i++) {
			echo $this->checkNum($i) . PHP_EOL;
		}
	}
 
	private function checkNum($n) {
		if ($n == 0) {
			return $n;
		}
		if ($n % $this->fizzbuzz == 0) {
			return 'FizzBuzz';
		}
		if ($n % $this->fizz == 0) {
			return 'Fizz';
		}
		if ($n % $this->buzz == 0) {
			return 'Buzz';
		}
		return $n;
	}
}
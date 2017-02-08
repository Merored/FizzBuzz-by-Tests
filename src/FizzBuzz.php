<?php namespace FizzBuzz;

use InvalidArgumentException;


class FizzBuzz {
	public function generate($number) {
		if (!(is_int($number) && $number > 0)) {
			throw new InvalidArgumentException;
		}

		$mass = [];
		for ($i = 1; $i <= $number; $i++){
			if ($i % 3 == 0) {
				$mass[] = "fizz";
				continue;
			}
			$mass[] = $i;
		} 

		return $mass;
		
	}
} 

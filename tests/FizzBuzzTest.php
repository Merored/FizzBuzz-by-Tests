<?php 

class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
	protected $fizzBuzz;
	
	protected function setUp() {
		$this->fizzBuzz = new FizzBuzz\FizzBuzz;
	}

	public function testFizzBuzzExists() {
		$this->assertInstanceOf(FizzBuzz\FizzBuzz::class, $this->fizzBuzz);
	}

	public function testItThrowsException() {
		$this->expectException(InvalidArgumentException::class);	
		$this->fizzBuzz->generate("sdasda");
	}

	public function testItReturnsArray() {
		$this->assertEquals([1], $this->fizzBuzz->generate(1)); 
	}

	public function testItREturnsArrayFromOneToNumber() {	

		$this->assertEquals([1,2], $this->fizzBuzz->generate(2)); 
	}

	public function testItSubsFizzForThree() {
		$this->assertEquals([1,2,'fizz'], $this->fizzBuzz->generate(3)); 
	}

	public function testIsSubsBuzzForFive() {
		$this->assertEquals([1,2,'fizz',4,'buzz'], $this->fizzBuzz->generate(5));
	}

	public function testIsSubsFizzBuzzForThreeFive() {
		$this->assertEquals([1,2,'fizz',4,'buzz','fizz',7,8,'fizz','buzz',11,'fizz',13,14,'fizzbuzz'], $this->fizzBuzz->generate(15));
	}


}
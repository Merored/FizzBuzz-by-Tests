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
		$this->fizzBuzz->generate("sdasd");
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

}
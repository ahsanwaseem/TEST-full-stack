<?php

use App\FizzBuzz;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    protected $fizzbuzz;
    public function setUp()
    {
        $this->fizzbuzz = new App\FizzBuzz();
    }
    public function fizzbuzz($expected, $number)
    {
        $this->assertEquals($expected, $this->fizzbuzz->check($number));
    }
    public function testFizzBuzz()
    {
        $this->fizzbuzz(1, 1);
        $this->fizzbuzz(2, 2);
        $this->fizzbuzz(4, 4);
        $this->fizzbuzz("fizz", 3);
        $this->fizzbuzz("fizz", 9);
        $this->fizzbuzz("fizz", 27);
        $this->fizzbuzz("buzz", 5);
        $this->fizzbuzz("buzz", 20);
        $this->fizzbuzz("buzz", 40);
        $this->fizzbuzz("fizzbuzz", 15);
        $this->fizzbuzz("fizzbuzz", 30);
        $this->fizzbuzz("fizzbuzz", 45);
    }
}

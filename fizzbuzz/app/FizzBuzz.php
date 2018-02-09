<?php

namespace App;

class FizzBuzz
{
  public function check($number)
  {
      if ($this->isFizzAndBuzz($number)) {
          return "fizzbuzz";
      }
      if ($this->isFizz($number)) {
          return "fizz";
      }
      if ($this->isBuzz($number)) {
          return "buzz";
      }
      return $number;
  }
  private function isFizz($number)
  {
      return $number % 3 == 0;
  }
  private function isBuzz($number)
  {
      return $number % 5 == 0;
  }
  private function isFizzAndBuzz($number)
  {
      return $this->isFizz($number) && $this->isBuzz($number);
  }
}

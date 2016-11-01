<?php
namespace app\src;
class Calculator
{
  public function addNumbers($a, $b) {
    return $a + $b ;
  }
  public function subtractNumbers($a, $b) {
    return $a - $b ;
  }
  public function multiplyNumbers($a, $b) {
    return $a * $b ;
  }
  public function divideNumbers($a, $b) {
    return $b == 0 ? 0 : $a/$b;
  }
}

 ?>

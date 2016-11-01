<?php
use app\src\Calculator as asc;
class CalculatorTest extends PHPUnit_Framework_TestCase
{

  public function setUp() {
    $this->calculator = new asc;
  }

  public function inputAddNumbers() {
    return [
      [2,2,4],
      [3,5,8],
      [1.5,2.6,4.1]
    ];
  }

  public function inputSubtractNumbers() {
    return [
      [2,2,0],
      [3,5,-2],
      [321,121,200],
      [4.1,2.6,1.5]
    ];
  }

  public function inputMultiplyNumbers() {
    return [
      [2,0,0],
      [3,5,15],
      [2,121,242],
      [5,2.6,13]
    ];
  }

    public function inputDivideNumbers() {
      return [
        [2,2,1],
        [3,5,0.6],
        [0,121,0],
        [4.1,0,0]
      ];
    }

  /**
   * @dataProvider inputAddNumbers
   */
  public function testAddNumbers($a, $b, $result) {
    $this->assertEquals($result, $this->calculator->addNumbers($a, $b));
  }

  /**
   * @dataProvider inputSubtractNumbers
   */
  public function testSubtractNumbers($a, $b, $result) {
    $this->assertEquals($result, $this->calculator->subtractNumbers($a, $b));
  }

  /**
   * @dataProvider inputMultiplyNumbers
   */
  public function testMultiplyNumbers($a, $b, $result) {
    $this->assertEquals($result, $this->calculator->multiplyNumbers($a, $b));
  }

  /**
   * @dataProvider inputDivideNumbers
   */
  public function testDivideNumbers($a, $b, $result) {
    $this->assertEquals($result, $this->calculator->divideNumbers($a, $b));
  }

}


 ?>

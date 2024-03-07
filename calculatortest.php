<?php
include "Calculator.php";

//use the following namepace
use PHPUnit\Framework\TestCase;

class calculatortest extends TestCase {
    private $calculate;

    public function setUp() : void {
        $this->calculate =new Calculator();
    }

    public function testMultiply(){
        $this->assertEquals(4,$this->calculate->multiply(4,1));
    }

    public function testAdd(){
        $this->assertEquals(5,$this->calculate->add(4,1));
    }

    public function testSubtract(){
        $this->assertEqauls(3,$this->calculate->subtract(4,1));
    }
    
}
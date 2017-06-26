<?php
require_once 'index.php';
class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    /** 
     * @var FizzBuzz 
     */
    protected $object;
    /** 
     * setUpは各テストメソッドが実行される前に実行する 
     */
    protected function setUp() { 
        // テストするオブジェクトを生成する
        $this->object = new FizzBuzz(3, 5, 15);
    }
 
    /**
     * 数値の検証
     */
    public function testCheckNum() {
        // 引数に3を渡すとfizzが返ってくる
        $this->expectOutputString('1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
');
        $this->object->printFizzBuzz();
    }
}